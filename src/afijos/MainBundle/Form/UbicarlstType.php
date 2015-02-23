<?php

namespace afijos\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UbicarlstType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lsubtransmision')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'afijos\MainBundle\Entity\DetalleDepreciacionLSt'
        ));
    }

    public function getName()
    {
        return 'ubicarlst_type';
    }
}
