<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContabilidadControllerTest extends WebTestCase
{
  public function testIndex()
  {
    $client = static::createClient();

    $crawler = $client->request('GET', '/contabilidad');

    print_r($crawler);
    $this->assertGreaterThan(
      0,
      $crawler->filter('a:contains("Income Report")')->count()
    );
    $this->assertGreaterThan(
      0,
      $crawler->filter('a:contains("Users Report")')->count()
    );
  }

  private function logIn()
  {
    $session = $this->client->getContainer()->get('session');

    $firewall = 'secured_area';
    $token = new UsernamePasswordToken('admin', null, $firewall, array('ROLE_ADMIN'));
    $session->set('_security_'.$firewall, serialize($token));
    $session->save();

    $cookie = new Cookie($session->getName(), $session->getId());
    $this->client->getCookieJar()->set($cookie);
  }
}
