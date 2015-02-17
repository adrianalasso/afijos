<?php

namespace afijos\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UnidadPropiedadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('cuentActivo')
            ->add('cuentaDeprec')
            ->add('descripcion')
            ->add('indiceDeprec')
            ->add('indiceResidual')
            ->add('vidaUtilA')
            ->add('vidaUtilM','text', array(
    'attr' => array('readonly' => 'readonly')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'afijos\MainBundle\Entity\UnidadPropiedad'
        ));
    }

    public function getName()
    {
        return 'afijos_udptype';
    }
}
