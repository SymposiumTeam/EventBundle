<?php

namespace Symposium\Bundle\EventBundle\Form;

use Symposium\Bundle\EventBundle\Entity\FinancialTransaction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FinancialTransactionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value', 'integer')
            ->add('method', 'choice', array(
                'choices'  => FinancialTransaction::getMethods()
            ))
            ->add('currencyCode', 'choice', array(
                'choices'  => FinancialTransaction::getCurrencies()
            ))
            ->add('registration')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Symposium\Bundle\EventBundle\Entity\FinancialTransaction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'symposium_bundle_eventbundle_financialtransaction';
    }
}
