<?php

namespace INCES\ComedorBundle\Form\Type;

use INCES\ComedorBundle\Entity\UserAdmin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    parent::buildForm($builder, $options);

    // add your custom field
    $builder->add('username', 'text', array('required' => false));
    $builder->add('plainPassword', 'password', array('required' => false, 'type' => 'password'));
    $builder->add('plainPassword', 'repeated', array('required' => false, 'type' => 'password'));
    $builder->add('nombre', 'text', array('required' => false));
    $builder->add('apellido', 'text', array('required' => false));
    $builder->add('cedula', 'text', array('required' => false));
    $builder->add('ncarnet', 'text', array('required' => false));
    $builder->add('email', 'text', array('required' => false));
    //$builder->add('roles');
    //$user = new UserAdmin();
    //$builder->add('roles' ,'choice' ,array('choices'=>$user->getRoles()));
    $builder->add('roles', 'collection', array(
      'type'     => 'choice',
      'options'  => array(
        'choices'  => array(
          'ROLE_ADMIN'    => 'Administrador',
          'ROLE_GERENTE'  => 'Gerente',
          'ROLE_OPERADOR' => 'Operador',
          'ROLE_USUARIO'  => 'User',
        ),
      ),
    ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'INCES\ComedorBundle\Entity\UserAdmin',
      ));
    }

    public function getName()
    {
      return 'inces_comedor_registration';
    }
}
