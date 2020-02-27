<?php

namespace App\Controller\BackOffice;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice")
 */
class HomeController extends AbstractController {
    /**
     * @Route("/", name="BackOffice_home_index")
     * @param Request $request
     * @return Response
     */
	public function index(Request $request): Response{
	    $session = $request->getSession();
	    dd($session);
		return $this->render('BackOffice/Home/home.html.twig');
	}
}
