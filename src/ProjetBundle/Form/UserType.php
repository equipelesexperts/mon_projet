<?php

namespace ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('address', null, array(
            'label_attr' => array(
                'class' => 'col-sm-3 control-label',
            )
        ))
        ;
        $builder->add('username', null, array(
            'label' => 'Login',
            'label_attr' => array(
                'class' => 'col-sm-3 control-label',
            ),
        ));
        $builder->add('enabled', null, array(
            'label' => 'Actif',
            'label_attr' => array(
                'class' => 'col-sm-3 control-label',
            ),
        ));
        $builder->add('email', 'email', array(
            'label' => 'Email',
            'label_attr' => array(
                'class' => 'col-sm-3 control-label',
            ),
        ));
        $builder->add('save', 'button', array(
            'attr' => array('class' => 'save'),
        ));
        $builder->add('plainPassword', 'password', array(
            'attr' => array('class' => 'save'),
            'label_attr' => array(
                'class' => 'col-sm-3 control-label',
            ),
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'ProjetBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'projetbundle_user';
    }

}
