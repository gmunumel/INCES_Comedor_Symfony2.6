<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContabilidadControllerTest extends AbstractControllerTest
{

  public function testIndex()
  {
    $crawler = $this->client->request('GET', '/contabilidad');
    $crawler = $this->client->followRedirect();

    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Income Report")')->count()
    );
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Users Report")')->count()
    );
  }

  public function testReporteIngresos()
  {
    // Scenario - GET
      $crawler = $this->client->request('GET', '/contabilidad/reporteingresos');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Income Report")')->count()
    );
    // Scenario - POST
    // Scenario without Rol with information
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/2014';
    $form['inces_comedorbundle_contabilidadtype[to]'] =
                              date('d/m/Y', strtotime(' + 1 day'));
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Scenario without Rol without information
    $crawler = $this->client->request('GET', '/contabilidad/reporteingresos');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/1999';
    $form['inces_comedorbundle_contabilidadtype[to]'] = '01/03/1999';
    $crawler = $this->client->submit($form);
    $this->assertCount(0, $crawler->filter('html:contains("Gabriel")'));
    //
    // Scenario with Rol with information
    $crawler = $this->client->request('GET', '/contabilidad/reporteingresos');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/2014';
    $form['inces_comedorbundle_contabilidadtype[to]'] =
                              date('d/m/Y', strtotime(' + 1 day'));
    $form['inces_comedorbundle_contabilidadtype[rol]'] = '1';
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Scenario with Rol without information
    $crawler = $this->client->request('GET', '/contabilidad/reporteingresos');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/1999';
    $form['inces_comedorbundle_contabilidadtype[to]'] = '01/03/1999';
    $form['inces_comedorbundle_contabilidadtype[rol]'] = '1';
    $crawler = $this->client->submit($form);
    $this->assertCount(0, $crawler->filter('html:contains("Gabriel")'));

  }

  public function testReporteIngresosToday()
  {
    // Scenario - GET
      $crawler = $this->client->request('GET', '/contabilidad/reporteingresostoday');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Today\'s Income Report")')->count()
    );

    // Scenario - POST
    // Scenario without Rol
    $form = $crawler->selectButton('login-submit')->form();
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Scenario with Rol
    $crawler = $this->client->request('GET', '/contabilidad/reporteingresostoday');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[rol]'] = '1';
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
  }

  public function testReporteUsuarios()
  {
    // Scenario - GET
    $crawler = $this->client->request('GET', '/contabilidad/reporteusuarios');
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Users Report")')->count()
    );
    // Scenario POST
    // Scenario with valid Id and good dates
    $crawler = $this->client->request('GET', '/contabilidad/reporteusuarios');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/2014';
    $form['inces_comedorbundle_contabilidadtype[to]'] =
                              date('d/m/Y', strtotime(' + 1 day'));
    $form['inces_comedorbundle_contabilidadtype[cedula]'] = '17387134';
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Scenario with valid Id but bad dates
    $crawler = $this->client->request('GET', '/contabilidad/reporteusuarios');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/1999';
    $form['inces_comedorbundle_contabilidadtype[to]'] = '01/03/1999';
    $form['inces_comedorbundle_contabilidadtype[cedula]'] = '17387134';
    $crawler = $this->client->submit($form);
    $this->assertGreaterThan(
      0,
      $crawler->filter('html:contains("Gabriel")')->count()
    );
    //
    // Scenario with invalid Id but good dates
    $crawler = $this->client->request('GET', '/contabilidad/reporteusuarios');
    $form = $crawler->selectButton('login-submit')->form();
    $form['inces_comedorbundle_contabilidadtype[from]'] = '01/03/2014';
    $form['inces_comedorbundle_contabilidadtype[to]'] =
                              date('d/m/Y', strtotime(' + 1 day'));
    $form['inces_comedorbundle_contabilidadtype[cedula]'] = '12134';
    $crawler = $this->client->submit($form);
    $this->assertCount(0, $crawler->filter('html:contains("Gabriel")'));

  }

}
