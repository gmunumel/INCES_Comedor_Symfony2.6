<?php
// src/INCES/ComedorBundle/DataFixtures/ORM/LoadMenuData.php
namespace INCES\ComedorBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use INCES\ComedorBundle\Entity\Menu;

class LoadMenuData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $now = new \DateTime('now');

    $menu = new Menu();
    $menu -> setSeco('Rice');
    $menu -> setSopa('Soup');
    $menu -> setDia($now);
    $menu -> setHora($now);

    $manager->persist($menu);
    $manager->flush();

    $this->addReference('menu-user', $menu);
  }

  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}
