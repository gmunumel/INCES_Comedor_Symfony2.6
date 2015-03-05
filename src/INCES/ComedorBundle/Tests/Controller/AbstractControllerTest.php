<?php

namespace INCES\ComedorBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;
//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
//use Symfony\Component\BrowserKit\Cookie;

abstract class AbstractControllerTest extends WebTestCase
{
  public function setUp()
  {
    // add all your fixtures classes that implement
    // Doctrine\Common\DataFixtures\FixtureInterface
    $this->loadFixtures(array(
               'INCES\ComedorBundle\DataFixtures\ORM\LoadUserAdminData',
               'INCES\ComedorBundle\DataFixtures\ORM\LoadMenuData'
    ));

    $user = $this->getContainer()
      ->get('doctrine.orm.default_entity_manager')
      ->getRepository('INCESComedorBundle:UserAdmin')->find(1);

    $this->loginAs($user, 'main');

    $this->client = $this->makeClient(true);
  }
}
