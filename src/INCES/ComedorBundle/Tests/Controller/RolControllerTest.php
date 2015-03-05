<?php

namespace INCES\ComedorBundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class RolControllerTest extends WebTestCase
{
  public function setUp()
  {
    // add all your fixtures classes that implement
    // Doctrine\Common\DataFixtures\FixtureInterface
    $this->loadFixtures(array(
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUserAdminData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadRolData'
    ));

    $user = $this->getContainer()
      ->get('doctrine.orm.default_entity_manager')
      ->getRepository('INCESComedorBundle:UserAdmin')->find(1);

    $this->loginAs($user, 'main');

    $this->client = $this->makeClient(true);
  }

  public function testIndex()
  {
    $crawler = $this->client->request('GET', '/rol');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Rol")')->count()
    );

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Jubilado")')->count()
    );
  }

  public function testShow()
  {
    $crawler = $this->client->request('GET', '/rol/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Jubilado")')->count()
    );
  }

  public function testIndexCreate()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/rol/new');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Add Rol")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_roltype[nombre]'    => 'Test Nombre',
              'inces_comedorbundle_roltype[monto]'     => 'Test quantity'
    ));
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    // Redirecting to new show page
    $crawler = $this->client->request( 'GET', $response);

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Test Nombre")')->count()
    );
  }

  public function testEditUpdate()
  {
    // Showing the initial edit page
    $crawler = $this->client->request('GET', '/rol/1/edit');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Edit Rol")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_roltype[nombre]'  => 'Test Nombre Edit'
    ));
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    // Redirecting to new show page
    $crawler = $this->client->request( 'GET', $response);

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Test Nombre Edit")')->count()
    );
  }

  public function testErrorDelete()
  {
    $crawler = $this->client->request('GET', '/rol/edelete');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Cannot delete")')->count()
    );
  }
}
