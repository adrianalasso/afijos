<?php

namespace AFijos\LSubBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use AFijos\LSubBundle\EventListener\AddCantonFieldSubscriber;
use AFijos\LSubBundle\EventListener\AddProvinciaFieldSubscriber;


class LineasSubtransImportarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        $provinceSubscriber = new AddProvinciaFieldSubscriber($factory);
        $builder->addEventSubscriber($provinceSubscriber);           
        $cantonSubscriber = new AddCantonFieldSubscriber($factory);
        $builder->addEventSubscriber($cantonSubscriber);
                
        $builder 
                ->add('subtransmision');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AFijos\LSubBundle\Entity\LineasSubtransmision'
        ));
    }

    public function getName()
    {
        return 'afijos_lsubbundle_lineassubtransimportartype';
    }
}
