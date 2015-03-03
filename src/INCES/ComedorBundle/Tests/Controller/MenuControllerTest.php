<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MenuControllerTest extends AbstractControllerTest
{
  public function testIndex()
  {
    $crawler = $this->client->request('GET', '/menu');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("List Menus")')->count()
    );
  }

  public function testShow()
  {
    $crawler = $this->client->request('GET', '/menu/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Show Menu")')->count()
    );
  }
}
