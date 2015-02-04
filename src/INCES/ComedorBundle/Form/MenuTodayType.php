<?php

namespace INCES\ComedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;

class MenuTodayType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('seco')
      ->add('sopa')
      ->add('salado')
      ->add('jugo')
      ->add('ensalada')
      ->add('postre')
      ->add('dia', 'date', array(
        'widget'        => 'single_text',
        'format'        => 'dd/MM/yyyy',
      ));
    }

    public function getName()
    {
      return 'inces_comedorbundle_menutodaytype';
    }
}
