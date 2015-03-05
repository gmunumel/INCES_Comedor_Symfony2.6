<?php

namespace INCES\ComedorBundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class UsuarioMenuControllerTest extends WebTestCase
{
  public function setUp()
  {
    // add all your fixtures classes that implement
    // Doctrine\Common\DataFixtures\FixtureInterface
    $this->loadFixtures(array(
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUserAdminData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadRolData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUsuarioData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadMenuData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUsuarioMenuData'
    ));

    $user = $this->getContainer()
      ->get('doctrine.orm.default_entity_manager')
      ->getRepository('INCESComedorBundle:UserAdmin')->find(1);

    $this->loginAs($user, 'main');

    $this->client = $this->makeClient(true);
  }

  public function testShow()
  {
    $crawler = $this->client->request('GET', '/usuariomenu/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
  }

  public function testIndexCreate()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/usuariomenu/new');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Add User Menu")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_usuariomenutype[usuario]'            => '2',
              'inces_comedorbundle_usuariomenutype[menu]'               => '1',
              'inces_comedorbundle_usuariomenutype[dia][date][year]'    =>  date('Y'),
              'inces_comedorbundle_usuariomenutype[dia][date][month]'   =>  date('m'),
              'inces_comedorbundle_usuariomenutype[dia][date][day]'     =>  date('d'),
              'inces_comedorbundle_usuariomenutype[dia][time][hour]'    =>  date('H'),
              'inces_comedorbundle_usuariomenutype[dia][time][minute]'  =>  date('i')
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
      $crawler->filter('html:contains("Elena")')->count()
    );
  }

  public function testSearchAjax()
  {
    $crawler = $this->client->request('GET', '/usuariomenu/searcha');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Good Scenario
    // There is a result
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => 'Gabri'
    ));
    $crawler = $this->client->submit($form);

    $this->assertEquals(
      0,
      $crawler->filter('html:contains("Elena")')->count()
    );
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );

    // Bad Scenario
    // Not results
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => 'Elena'
    ));
    $crawler = $this->client->submit($form);

    $this->assertEquals(
      0,
      $crawler->filter('html:contains("Elena")')->count()
    );
    $this->assertEquals(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
  }
}
