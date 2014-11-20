<?php

namespace CubbyHole\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('soustitre')
            ->add('description')
            ->add('price', 'money', array('precision'=>2))
            ->add('available')
            ->add('duration')
            ->add('spaceStorage')
            ->add('maxBandwidth')
            ->add('quotaSharedLink')
//            ->add('dateCreation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CubbyHole\MainBundle\Entity\Plan'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cubbyhole_mainbundle_plan';
    }
}
