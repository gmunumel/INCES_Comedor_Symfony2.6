<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
  public function testIndex()
  {
    $client = static::createClient();

    $crawler = $client->request('GET', '/');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Login")')->count()
    );
  }

  public function testError()
  {
    $client = static::createClient();

    $crawler = $client->request('GET', '/error');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Oops! An error has occurred")')->count()
    );
  }
}
