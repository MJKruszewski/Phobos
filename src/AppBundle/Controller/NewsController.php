<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 19:12
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Repository\NewsRepository;
use AppBundle\Entity\Repository\ProjectProgressRepository;
use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
use Symfony\Component\HttpFoundation\Request;
use /** @noinspection PhpUnusedAliasInspection */
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use /** @noinspection PhpUnusedAliasInspection */
    Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends ControllerAbstract
{
    /**
     * @Route("/news", name="news")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newsAction(Request $request)
    {
        /**
         * @var NewsRepository $newsRepository
         * @var ProjectProgressRepository $projectProgressRepository
         */
        $newsRepository = $this->getDoctrine()->getRepository('AppBundle\Entity\News');
        $projectProgressRepository = $this->getDoctrine()->getRepository('AppBundle\Entity\ProjectProgress');

        $news = $newsRepository->getLastNews($request->get('page_number', 0));
        $progresses = $projectProgressRepository->findAllToArray();

        foreach ($progresses as $key => $progressElement) {
            $progresses[$progressElement['name']] = $progressElement;
            unset($progresses[$key]);
        }

        return $this->render('@AppBundle/Resources/views/Default/news.html.twig', [
            'news' => $news,
            'progresses' => $progresses
        ]);
    }
}