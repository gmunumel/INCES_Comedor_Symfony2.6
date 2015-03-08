<?php

namespace INCES\ComedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class UsuarioMenuType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('dia')
      ->add('hora')
      ->add('usuario')
      ->add('menu')
      ;
    }

    public function getName()
    {
      return 'inces_comedorbundle_usuariomenutype';
    }
}
