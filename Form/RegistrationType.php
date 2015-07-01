<?php

namespace Symposium\Bundle\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', 'text')
            ->add('role')
            ->add('event')
            ->add('attendee')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Symposium\Bundle\EventBundle\Entity\Registration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'symposium_bundle_eventbundle_registration';
    }
}
