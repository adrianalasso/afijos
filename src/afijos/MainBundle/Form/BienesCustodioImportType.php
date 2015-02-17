<?php

namespace afijos\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienesCustodioImportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('agencia')
            ->add('areaOperativa')
            ->add('canton')
            ->add('cuentaContable')
            ->add('dependencia')
            ->add('plan')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'afijos\MainBundle\Entity\BienesCustodio'
        ));
    }

    public function getName()
    {
        return 'afijos_bienescustodioimportype';
    }
}
