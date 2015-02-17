<?php

namespace afijos\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BienesCustodioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('etiqueta')
            ->add('estado')
            ->add('observaciones')
            ->add('fechAdquisicion', 'date', array('widget' => 'single_text','format' => 'yyyy-MM-dd'))
            ->add('fechaMarcha', 'date', array('widget' => 'single_text','format' => 'yyyy-MM-dd'))
            ->add('tipoDocumento')
            ->add('numeroDocumento')
            ->add('procedencia')
            ->add('financiamiento')
            ->add('bienAsegurable')
            ->add('calidad')
            ->add('factorEstado')
            ->add('valorAdquisicion')
            ->add('valorResidual')
            ->add('valorDepreciable')
            ->add('descripcion')
            ->add('marca')
            ->add('seccion')
            ->add('oficina')
            ->add('direccion')
            ->add('componentes')
            ->add('serie')
            ->add('unidadPropiedad')
            ->add('agencia')
            ->add('areaOperativa')
            ->add('canton')
            ->add('cuentaContable')
            ->add('depart')
            ->add('dependencia')
            ->add('plan')
            ->add('trabajador')
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
        return 'afijos_mainbundle_bienescustodiotype';
    }
}
