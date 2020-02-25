<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice")
 */
class HomeController extends AbstractController {
	/**
	 * @Route("/", name="BackOffice_home_index")
	 */
	public function index(){
		return $this->render('BackOffice/Home/home.html.twig');
	}
}
