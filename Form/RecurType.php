<?php

namespace Symposium\Bundle\EventBundle\Form;

use Symposium\Bundle\EventBundle\Entity\Recur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
//use Symposium\Bundle\EventBundle\Form\DataTransformer\StringToArrayTransformer;

class RecurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$stringToArrayTransformer = new StringToArrayTransformer();
        $builder
            ->add('frequency', 'choice', array(
                'choices'  => Recur::getFrequencies()
            ))
            ->add('count', 'integer')
            ->add('intervalValue', 'integer')
            ->add('bySecond')/*->addModelTransformer($stringToArrayTransformer)*/
            ->add('byMinute')
            ->add('byHour')
            ->add('byDay')
            ->add('byMonthDay')
            ->add('byYearDay')
            ->add('byWeekNo')
            ->add('byMonth')
            ->add('wkst')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Symposium\Bundle\EventBundle\Entity\Recur'
        ))
;    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'symposium_bundle_eventbundle_recur';
    }
}
