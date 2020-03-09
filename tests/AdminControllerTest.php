<?php


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase {

	public $client;

	public function __construct ($name = null, array $data = [], $dataName = ''){
		parent::__construct($name, $data, $dataName);
		$this->client = static::createClient();
	}

	public function testPageAffiche (){
		$this->client->request('GET', '/login');
		$this->assertEquals(200, $this->client->getResponse()->getStatusCode());
	}
}