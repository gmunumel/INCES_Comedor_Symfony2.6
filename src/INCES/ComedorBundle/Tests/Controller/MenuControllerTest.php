<?php

namespace INCES\ComedorBundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class MenuControllerTest extends WebTestCase
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

  public function testIndexCreate()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/menu/new');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Add Menu")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_menutype[seco]'     => 'Test Seco',
              'inces_comedorbundle_menutype[sopa]'     => 'Test Sopa',
              'inces_comedorbundle_menutype[salado]'   => 'Test Salado',
              'inces_comedorbundle_menutype[jugo]'     => 'Test Jugo',
              'inces_comedorbundle_menutype[ensalada]' => 'Test Ensalada',
              'inces_comedorbundle_menutype[postre]'   => 'Test Postre'
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
      $crawler->filter('html:contains("Test Sopa")')->count()
    );
  }

  public function testEditUpdate()
  {
    // Showing the initial edit page
    $crawler = $this->client->request('GET', '/menu/1/edit');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Update Menu")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_menutype[seco]'     => 'Test Seco Edit'
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
      $crawler->filter('html:contains("Test Seco Edit")')->count()
    );
  }

  public function testShowToday()
  {
    $crawler = $this->client->request('GET', '/menu/1/showtoday');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Today\'s Menu")')->count()
    );
  }

  public function testIndexCreateToday()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/menu/newtoday');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Add Today\'s Menu")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_menutodaytype[seco]'     => 'Test Seco',
              'inces_comedorbundle_menutodaytype[sopa]'     => 'Test Sopa',
              'inces_comedorbundle_menutodaytype[salado]'   => 'Test Salado',
              'inces_comedorbundle_menutodaytype[jugo]'     => 'Test Jugo',
              'inces_comedorbundle_menutodaytype[ensalada]' => 'Test Ensalada',
              'inces_comedorbundle_menutodaytype[postre]'   => 'Test Postre'
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
      $crawler->filter('html:contains("Test Sopa")')->count()
    );
  }

  public function testEditUpdateToday()
  {
    // Showing the initial edit page
    $crawler = $this->client->request('GET', '/menu/1/edittoday');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Today\'s Menu Update")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_menutodaytype[seco]' => 'Test Seco Edit'
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
      $crawler->filter('html:contains("Test Seco Edit")')->count()
    );
  }

  public function testToday()
  {
    $crawler = $this->client->request('GET', '/menu/today');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Today\'s Menus")')->count()
    );
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Arroz")')->count()
    );
  }

  public function testSearchAjaxFacturar()
  {
    $crawler = $this->client->request('GET', '/menu/facturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Menu Bill")')->count()
    );
    //
    // Good Scenario
    // There is a result
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => 'abr'
    ));
    $crawler = $this->client->submit($form);

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );

    // Bad Scenario
    // Not results
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => 'askjdka'
    ));
    $crawler = $this->client->submit($form);

    $this->assertEquals(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    $this->assertEquals(
      0,
      $crawler->filter('html:contains("Elena")')->count()
    );
  }

  public function testShowFacturar()
  {
    $crawler = $this->client->request('GET', '/menu/1/showfacturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("The user Gabriel Mu")')->count()
    );

    $crawler = $this->client->request('GET', '/menu/3/showfacturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("The user Elena Elena has the rol NO ENTER.")')->count()
    );

    $crawler = $this->client->request('GET', '/menu/2/showfacturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Show User Bill")')->count()
    );

    // Bad Scenario
    // Not selected a menu
    $form = $crawler->selectButton('login-submit')->form();
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    $crawler = $this->client->request( 'GET', $response);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Carlos")')->count()
    );

    // It's possible to going to 'showfacturar'
    $crawler = $this->client->request('GET', '/menu/2/showfacturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Show User Bill")')->count()
    );


    // Good Scenario
    // Selected a menu

    $form = $crawler->selectButton('login-submit')->form(array(
                  'menus' => '1'
    ));
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    $crawler = $this->client->request( 'GET', $response);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Carlos")')->count()
    );

    // It's possible to going to 'showfacturar'
    $crawler = $this->client->request('GET', '/menu/2/showfacturar');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("The user Carlos Manrique already ate at")')->count()
    );
  }
}
