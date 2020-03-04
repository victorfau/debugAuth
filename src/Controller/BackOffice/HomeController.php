<?php

namespace App\Controller\BackOffice;

use App\Repository\UserRepository;
use App\Repository\EventRepository;
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
	public function index(UserRepository $userRepository, EventRepository $eventRepository): Response{
		$userEvent = $eventRepository->findBy(['auteur' => $this->getUser()]);
		return $this->render('BackOffice/Home/home.html.twig', ['events' => $userEvent]);
	}
}
