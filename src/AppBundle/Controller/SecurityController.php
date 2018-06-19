<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $error = $this->get('security.authentication_utils')->getLastAuthenticationError();

        $lastUserName = $this->get('security.authentication_utils')->getLastUsername();
        return $this->render('auth/login.html.twig', [
            'last_user_name' => $lastUserName,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    function logoutAction()
    {
    }

}
