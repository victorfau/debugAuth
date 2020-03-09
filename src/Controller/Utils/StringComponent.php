<?php


namespace App\Controller\Utils;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StringComponent extends AbstractController {

	public function sluglify (string $string): string{
		return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
	}

}