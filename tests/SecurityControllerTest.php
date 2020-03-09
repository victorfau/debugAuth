<?php


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase {

	public $client;

	public function __construct ($name = null, array $data = [], $dataName = ''){
		parent::__construct($name, $data, $dataName);

	}

	public function testPageAffiche (){
		$this->client = static::createClient();
		$this->client->request('GET', '/login');
		self::assertEquals(200, $this->client->getResponse()->getStatusCode());
	}
}
