<?php

namespace INCES\ComedorBundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class UserAdminControllerTest extends WebTestCase
{
  public function setUp()
  {
    // add all your fixtures classes that implement
    // Doctrine\Common\DataFixtures\FixtureInterface
    $this->loadFixtures(array(
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUserAdminData'

    ));

    $user = $this->getContainer()
      ->get('doctrine.orm.default_entity_manager')
      ->getRepository('INCESComedorBundle:UserAdmin')->find(1);

    $this->loginAs($user, 'main');

    $this->client = $this->makeClient(true);
  }

  public function testIndex()
  {
    $crawler = $this->client->request('GET', '/admin');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Admin Users")')->count()
    );
  }

  public function testList()
  {
    $crawler = $this->client->request('GET', '/admin/list');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("List Admin Users")')->count()
    );

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("root")')->count()
    );
  }

  public function testShow()
  {
    $crawler = $this->client->request('GET', '/admin/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("root")')->count()
    );
  }

  public function testDelete()
  {
    $crawler = $this->client->request('GET', '/admin/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("root")')->count()
    );

    $form = $crawler->selectButton('login-submit')->form();
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    // Redirecting to new show page
    $crawler = $this->client->request( 'GET', $response);

    $this->assertEquals(
      0,
      $crawler->filter('html:contains("root")')->count()
    );
  }
}
