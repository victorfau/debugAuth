<?php

namespace App\Controller\FrontOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class HomeController extends AbstractController {
	/**
	 * @Route("/", name="FrontOffice_home_index")
	 */
	public function index(){
		return $this->render('FrontOffice/Home/home.html.twig');
	}
}
