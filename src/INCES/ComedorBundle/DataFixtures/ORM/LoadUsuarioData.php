<?php
// src/INCES/ComedorBundle/DataFixtures/ORM/LoadUsuarioData.php
namespace INCES\ComedorBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use INCES\ComedorBundle\Entity\Usuario;

class LoadUsuarioData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $usuario = new Usuario();
    $usuario -> setNombre('Gabriel');
    $usuario -> setApellido('Muñumel');
    $usuario -> setCedula('17387134');
    $usuario -> setNcarnet(0437332);
    $usuario -> setAI(false);
    $usuario -> setCorreo('gabrielmunumel@gmail.com');
    $usuario -> setImage('guest_user.png');
    $usuario -> setRol($manager->merge($this->getReference('rol-user')));

    $manager->persist($usuario);
    $manager->flush();

    $this->addReference('user-menu', $usuario);

    $usuario = new Usuario();
    $usuario -> setNombre('Carlos');
    $usuario -> setApellido('Manrique');
    $usuario -> setCedula('173871340');
    $usuario -> setNcarnet(0437332);
    $usuario -> setAI(false);
    $usuario -> setCorreo('carlos@gmail.com');
    $usuario -> setImage('guest_user.png');
    $usuario -> setRol($manager->merge($this->getReference('rol-user')));

    $manager->persist($usuario);
    $manager->flush();

    $this->addReference('user-menu-second', $usuario);

    $usuario = new Usuario();
    $usuario -> setNombre('Elena');
    $usuario -> setApellido('Elena');
    $usuario -> setCedula('1738');
    $usuario -> setNcarnet(0437);
    $usuario -> setAI(false);
    $usuario -> setCorreo('elena@gmail.com');
    $usuario -> setImage('guest_user.png');
    $usuario -> setRol($manager->merge($this->getReference('rol-no-enter')));

    $manager->persist($usuario);
    $manager->flush();

    $this->addReference('user-menu-no-enter', $usuario);

  }

    public function getOrder()
    {
      return 2; // the order in which fixtures will be loaded
    }
}
