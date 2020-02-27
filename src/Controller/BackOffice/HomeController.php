<?php

namespace App\Controller\BackOffice;

use App\Entity\Event;
use App\Entity\User;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/backoffice")
 */
class HomeController extends AbstractController {
	/**
	 * @Route("/", name="BackOffice_home_index")
	 */
	public function index(UserRepository $user, EventRepository $repository){
		$usr = $this->getUser();
		$user = $user->find(8);
		$test = $repository->findBy(['auteur' => $user]);
		dd($usr);
		dd($test);
		//$test = $user->getAuteur();
		dd($test);
		return $this->render('BackOffice/Home/home.html.twig');
	}
}
