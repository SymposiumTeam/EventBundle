<?php

namespace Symposium\Bundle\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttendeeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('address', 'textarea')
            ->add('zipCode', 'text')
            ->add('city', 'text')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Symposium\Bundle\EventBundle\Entity\Attendee'
        ));
    }

    public function getParent()
    {
       	 return 'fos_user_registration';
    }

    /**
     * @return string
     */
    public function getName()
    {
	        return 'symposium_bundle_eventbundle_attendee';
    }
}
