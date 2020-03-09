<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Faker\Provider\Lorem;

class EventFixture extends Fixture implements OrderedFixtureInterface
{
	public const EVENTFIXTURE = 'event';
    public function load(ObjectManager $manager)
    {
    	$faker = Faker\Factory::create();
         $event = new Event();
         $event->setId(1);
         $event->setAuteur($this->getReference(UsersFixture::USERFIXTURE));
         $event->setNom("Nom de l'événement");
         $event->setCreation($faker->dateTimeThisYear('now', null));
         $event->setDateIn($faker->dateTimeBetween('now', '+3 days'));
	    $event->setDateOut($faker->dateTimeBetween('+3 days', '+10 days'));
	    $event->setDescription($faker->text);
         $event->setOptAccueil(false);
         $event->setOptActivites(false);
         $event->setOptActualites(false);
         $event->setOptContact(false);
         $event->setOptHebergement(false);
         $event->setOptInfoprat(false);
         $event->setOptInscription(false);
         $event->setOptPresse(false);
         $event->setOptTransport(false);

         $manager->persist($event);

        $manager->flush();
	    $this->addReference('event', $event);
    }

	public function getOrder(){
		return 2;
    }
}
