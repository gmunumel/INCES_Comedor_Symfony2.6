<?php
// src/INCES/ComedorBundle/DataFixtures/ORM/LoadRolData.php
namespace INCES\ComedorBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserAdminData extends AbstractFixture
          implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
  private $container;

  public function setContainer(ContainerInterface $container = null)
  {
    $this->container = $container;
  }

  public function load(ObjectManager $manager)
  {
    // Get our userManager, you must implement `ContainerAwareInterface`
    $userManager = $this->container->get('fos_user.user_manager');

    // Create our user and set details
    $user = $userManager->createUser();
    $user->setUsername('root');
    $user->setEmail('root@domain.com');
    $user->setPlainPassword('admin');
    //$user->setPassword('3NCRYPT3D-V3R51ON');
    $user->setEnabled(true);
    $user->setRoles(array('ROLE_ADMIN'));

    // Update the user
    $userManager->updateUser($user, true);

  }

  public function getOrder()
  {
    return 5; // the order in which fixtures will be loaded
  }
}

