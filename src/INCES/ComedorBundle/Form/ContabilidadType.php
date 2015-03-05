<?php

namespace INCES\ComedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class ContabilidadType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $translated = 'Rol';
    $builder
      ->add('cedula', 'text')
      //->add('print', 'text', array(
      //    'required' => false,
      //))
      ->add('from', 'date', array(
        'widget'        => 'single_text',
        'format'        => 'dd/MM/yy',
        'required' => false,
      ))
      ->add('to', 'date', array(
        'widget'        => 'single_text',
        'format'        => 'dd/MM/yy',
        'required' => false,
      ))
      ->add('rol', 'entity', array(
        'class' => 'INCESComedorBundle:Rol',
        'empty_value' => $translated,
        'required' => false,
      ));
    }

    public function getName()
    {
      return 'inces_comedorbundle_contabilidadtype';
    }
}
