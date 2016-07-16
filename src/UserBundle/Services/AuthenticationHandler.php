<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 16.07.16
 * Time: 10:57
 */

namespace UserBundle\Services;

use Symfony\Component\Translation\DataCollectorTranslator as Translator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

/**
 * Class AuthenticationHandler
 * @package UserBundle\Services
 */
class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    /**
     * @var RouterInterface
     */
    private $router;
    /**
     * @var Session
     */
    private $session;
    /**
     * @var Translator
     */
    private $translator;

    /**
     * AuthenticationHandler constructor.
     * @param RouterInterface $router
     * @param Session $session
     * @param Translator $translator
     */
    public function __construct(RouterInterface $router, Session $session, Translator $translator)
    {
        $this->setRouter($router);
        $this->setSession($session);
        $this->setTranslator($translator);
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return Response
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) : Response
    {
        if ($request->isXmlHttpRequest()) {
            $array = array('success' => true);
            $response = new JsonResponse($array);
        } elseif ($this->getSession()->get('_security.main.target_path')) {
            $url = $this->getSession()->get('_security.main.target_path');
            $response = new RedirectResponse($url);
        } else {
            $url = $this->getRouter()->generate('homepage');
            $response = new RedirectResponse($url);
        }

        return $response;
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) : Response
    {
        if ($request->isXmlHttpRequest()) {
            $array = array('success' => false, 'message' => $this->getTranslator()->trans($exception->getMessage(), array(), 'FOSUserBundle'));
            $response = new JsonResponse($array);
        } else {
            $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
            $response = new RedirectResponse($this->getRouter()->generate('homepage'));
        }

        return $response;
    }

    /**
     * @return RouterInterface
     */
    private function getRouter() : RouterInterface
    {
        return $this->router;
    }

    /**
     * @param RouterInterface $router
     */
    private function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @return Session
     */
    private function getSession() : Session
    {
        return $this->session;
    }

    /**
     * @param Session $session
     */
    private function setSession(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @return Translator
     */
    private function getTranslator() : Translator
    {
        return $this->translator;
    }

    /**
     * @param Translator $translator
     */
    private function setTranslator(Translator $translator)
    {
        $this->translator = $translator;
    }


}