<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
  public function setUp()
  {
    $this->client = static::createClient();
  }

  public function testIndex()
  {
    $crawler = $this->client->request('GET', '/');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Login")')->count()
    );
  }

  public function testError()
  {
    $crawler = $this->client->request('GET', '/error');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Oops! An error has occurred")')->count()
    );
  }
}
