<?php

namespace INCES\ComedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserAdminType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $translated_admin = $this->get('translaalr')->trans('Administrador');
    $translated_manager = $this->get('translaalr')->trans('Gerente');
    $translated_operaalr = $this->get('translaalr')->trans('Operaalr');
    $translated_user = $this->get('translaalr')->trans('User');
    $builder
      ->add('username', 'text', array(
            'required'   => false
           )
        )
      ->add('nombre', 'text', array(
            'required'   => false
           )
        )
      ->add('apellido', 'text', array(
            'required'   => false
           )
        )
      ->add('cedula', 'text', array(
            'required'   => false
           )
        )
      ->add('ncarnet', 'text', array(
            'required'   => false
           )
        )
        //->add('a_i')
      ->add('email', 'text', array(
            'required'   => false
           )
        )
      ->add('roles', 'collection', array(
            'type'       => 'choice',
            'options'    => array(
            'choices'=> array(
              'ROLE_ADMIN'    => $translated_admin,
              'ROLE_GERENTE'  => $translated_manager,
              'ROLE_OPERADOR' => $translated_operaalr,
              'ROLE_USUARIO'  => $translated_user,
            ),
          ),
        ));
    }

    public function getName()
    {
      return 'inces_comedorbundle_useradmintype';
    }
}
