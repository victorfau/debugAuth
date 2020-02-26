<?php

namespace App\DataFixtures;

use App\Entity\SiteAccueil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class SiteAccueilFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	$faker = Faker\Factory::create('fr_FR');
        $accueil = new SiteAccueil();
	    $accueil->setEvent($this->getReference(EventFixture::EVENTFIXTURE));
        $manager->persist($accueil);

        $manager->flush();
    }
	public function getOrder(){
		return 3;
	}
}
