<?php


namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController {

	/**
	 * @Route("/login", name="app_login")
	 * @param AuthenticationUtils $authenticationUtils
	 * @return Response
	 */
	public function login(AuthenticationUtils $authenticationUtils){
		$error = $authenticationUtils->getLastAuthenticationError();
		return $this->render('security/login.html.twig', ['error' => $error]);
	}

	/**
	 * @Route("/logout", name="app_logout")
	 */
	public function logout(){
		throw new Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
	}
}
