<?php

namespace INCES\ComedorBundle\Tests\Controller;

//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class UsuarioControllerTest extends WebTestCase
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
    $crawler = $this->client->request('GET', '/usuario/1/show');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
  }

  public function testIndexCreate()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/usuario/new');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Add User")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_usuariotype[nombre]'     => 'Test Nombre',
              'inces_comedorbundle_usuariotype[apellido]'   => 'Test Apellido',
              'inces_comedorbundle_usuariotype[cedula]'     => '1234',
              'inces_comedorbundle_usuariotype[ncarnet]'    => '1234',
              'inces_comedorbundle_usuariotype[correo]'     => 'asd@asd.com',
              'inces_comedorbundle_usuariotype[rol]'        =>  '1'
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

  public function testIndexCreateExterno()
  {
    // Showing the initial new page
    $crawler = $this->client->request('GET', '/usuario/newexterno');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Create External User")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_usuarioexternotype[nombre]'     => 'Test Nombre',
              'inces_comedorbundle_usuarioexternotype[apellido]'   => 'Test Apellido',
              'inces_comedorbundle_usuarioexternotype[cedula]'     => '1234'
    ));
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $response = substr($response, 3);

    $this->assertEquals('/menu/facturar', $response);
  }

  public function testEditUpdate()
  {
    // Showing the initial edit page
    $crawler = $this->client->request('GET', '/usuario/1/edit');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Edit User")')->count()
    );

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form(array(
              'inces_comedorbundle_usuariotype[nombre]'  => 'Test Nombre Edit'
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

  public function testLunchToday()
  {
    $crawler = $this->client->request('GET', '/usuario/lunchtoday');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
  }

  public function testCargaMasiva()
  {
    $crawler = $this->client->request('GET', '/usuario/cargamasiva');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Users Bulk Load")')->count()
    );

    // Scenario Good case
    $this->checkFile('test_load_ok.csv',
      'Users loaded successfully', true);
    //
    // Bad Scenarios
    // File doesn't exist
    $this->checkFile('test_not_file_ok.csv',
      'File doesn\'t exist', true);

    // Wrong number of parameters
    $this->checkFile('test_load_wrong.csv',
      'For the line 2 doesn\'t have the correct number of fields<br />'.
      'For the line 3 the field "Rol" doesn\'t appear in database<br />'.
      'For the line 4 the field "Name" contains invalid characters<br />'.
      'For the line 5 the field "Last Name" contains invalid characters<br />'.
      'For the line 6 the field "Id" contains invalid characters<br />'.
      'For the line 7 the field "Card Number" contains invalid characters<br />'.
      'For the line 8 the field "Email" is invalid<br />'
    , true);
  }

  public function testEditMasivo()
  {
    $crawler = $this->client->request('GET', '/usuario/editmasivo');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Users Bulk Edit")')->count()
    );

    // Scenario Good case
    $this->checkFile('test_update_ok.csv',
      'Users updated successfully');

    $crawler = $this->client->request('GET', '/usuario');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("nombrei")')->count()
    );

    //
    // Bad Scenarios
    // Wrong number of parameters
    $this->checkFile('test_update_wrong.csv',
      'For the line 2 doesn\'t have the correct number of fields<br />'.
      'For the line 3 the field "Rol" doesn\'t appear in database<br />'.
      'For the line 4 the field "Name" contains invalid characters<br />'.
      'For the line 5 the field "Last Name" contains invalid characters<br />'.
      'For the line 6 the field "Id" is not in database<br />'.
      'For the line 7 the field "Card Number" contains invalid characters<br />'.
      'For the line 8 the field "Email" is invalid<br />'
    );
  }

  private function checkFile($file, $assert, $load = false){

    if($load)
      $crawler = $this->client->request('GET', '/usuario/cargamasiva');
    else
      $crawler = $this->client->request('GET', '/usuario/editmasivo');

    // Fill in the form and submit it
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_carga_masivatype[file]']
        ->upload(dirname(__FILE__).'/../../../../../web/uploads/test/' . $file);
    $crawler = $this->client->submit($form);

    // Doing the manual redirect because
    // I get an url
    $response = $this->client->getResponse()->getContent();
    $this->assertEquals(
      '<p>'. $assert .'</p>',
      $response
    );
  }

  public function testSearchAjax()
  {
    $crawler = $this->client->request('GET', '/usuario');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("List of Users")')->count()
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

  public function testSearch()
  {
    $crawler = $this->client->request('GET', '/usuario/search');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Search Users by Id")')->count()
    );
    //
    // Good Scenario
    // There is a result
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => '17387134'
    ));
    $crawler = $this->client->submit($form);

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );

    // Bad Scenario
    // Not results
    $form = $crawler->selectButton('query-submit')->form(array(
              'query' => '1734'
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

  public function testSearchAjaxToday()
  {
    $crawler = $this->client->request('GET', '/usuario/searchalnc');

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("List of Users ate today")')->count()
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
      'query' => 'asdasd'
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
}
