<?php

namespace Symposium\Bundle\EventBundle\Form;

use Symposium\Bundle\EventBundle\Entity\AbstractEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('startsAt', 'datetime', array(
                'data'    => new \DateTime('now'),
                'years'   => range(date('Y')-1, date('Y')+5),
                'minutes' => range(0, 59, 5)
            ))
            ->add('endsAt', 'datetime', array(
                'data'    => new \DateTime('now'),
                'years'   => range(date('Y')-1, date('Y')+5),
                'minutes' => range(0, 59, 5)
            ))
            ->add('duration', 'text')
            ->add('description', 'textarea')
            ->add('visibility', 'choice', array(
                'choices'  => AbstractEvent::getVisibilities(),
                'multiple' => false,
                'expanded' => true
            ))
            ->add('comment', 'textarea')
            ->add('priority', 'choice', array(
                'choices' => range(0, 9)
            ))
            ->add('resources', 'textarea')
            ->add('summary', 'textarea')
            ->add('transparency', 'choice', array(
                'choices'  => AbstractEvent::getTransparencies(),
                'multiple' => false,
                'expanded' => true
            ))
            ->add('status')
            ->add('categories')
            ->add('location')
            ->add('parent')
            ->add('exceptionRules')
            ->add('recurenceRules')
            ->add('organizers')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Symposium\Bundle\EventBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'symposium_bundle_eventbundle_event';
    }
}
