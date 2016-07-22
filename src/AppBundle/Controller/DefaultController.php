<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Repository\NewsRepository;
use AppBundle\Entity\Repository\ProjectProgressRepository;
use LibraryBundle\Utilities\Helpers\ControllerAbstract;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends ControllerAbstract
{
    /**
     * @Route("/app", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('@AppBundle/Resources/views/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'user_name' => $this->getUser()->getUsername()
        ]);
    }

    /**
     * @Route("/topMenu", name="top_menu")
     * @return \Symfony\Component\HttpFoundation\Response
     * @todo move positions of menu to database
     */
    public function topMenuAction()
    {
        $isAuthorized = $this->getAuthorizationChecker()->isGranted('IS_AUTHENTICATED_REMEMBERED');

        if ($isAuthorized) {
            $menuPositions = [
                ['name' => 'Home', 'clear_path' => 'app', 'path' => '/app'],
                ['name' => 'Planet', 'clear_path' => 'register', 'path' => '/register'],
                ['name' => 'Messages', 'clear_path' => 'register', 'path' => '/register'],
                ['name' => 'Smfn', 'clear_path' => 'register', 'path' => '/register'],
            ];
        } else {
            $menuPositions = [
                ['name' => 'Register', 'clear_path' => 'register', 'path' => '/register'],
            ];
        }

        return $this->render('@AppBundle/Resources/views/Menu/TopMenu.html.twig', [
            'menu_positions' => $menuPositions,
            'is_authenticated' => $isAuthorized,
        ]);
    }

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
