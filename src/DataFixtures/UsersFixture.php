<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixture extends Fixture implements OrderedFixtureInterface {
	public function load (ObjectManager $manager)
	{
			$user = new Users();
			$user->setEmail('v.fau@arep.co.com');
			$user->setNom('fau');
			$user->setPrenom('Victor');
			$user->setRoles(['ROLE_ADMIN']);
			$user->setPassword('password');
			$user->setParticipation(false);
			$user->setIsValide(false);
			$user->setConditions(false);
			$user->setRoles(['ROLE_DEV']);
			$manager->persist($user);
			$manager->flush();
	}
	public function getOrder(){
		return 1;
	}
}
