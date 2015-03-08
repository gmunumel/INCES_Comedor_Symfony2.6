<?php
// src/INCES/ComedorBundle/DataFixtures/ORM/LoadRolData.php
namespace INCES\ComedorBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use INCES\ComedorBundle\Entity\Rol;

class LoadRolData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $rol = new Rol();
    $rol -> setNombre('Jubilado');
    $rol -> setMonto(0);
    $rol -> setHoraComerStart('0');
    $rol -> setHoraComerStartAMPM('am');
    $rol -> setHoraComerEnd('12');
    $rol -> setHoraComerEndAMPM('pm');

    $manager->persist($rol);
    $manager->flush();

    $this->addReference('rol-user', $rol);

    $rol = new Rol();
    $rol -> setNombre('No enter');
    $rol -> setMonto(0);
    $rol -> setHoraComerStart('0');
    $rol -> setHoraComerStartAMPM('am');
    $rol -> setHoraComerEnd('0');
    $rol -> setHoraComerEndAMPM('am');

    $manager->persist($rol);
    $manager->flush();

    $this->addReference('rol-no-enter', $rol);

    $rol = new Rol();
    $rol -> setNombre('Externo');
    $rol -> setMonto(0);
    $rol -> setHoraComerStart('0');
    $rol -> setHoraComerStartAMPM('am');
    $rol -> setHoraComerEnd('0');
    $rol -> setHoraComerEndAMPM('am');

    $manager->persist($rol);
    $manager->flush();

    $this->addReference('rol-externo', $rol);
  }

  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}
