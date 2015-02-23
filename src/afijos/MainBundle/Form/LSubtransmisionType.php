<?php

namespace afijos\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LSubtransmisionType extends AbstractType
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
            ->add('tipoDocumento', 'choice', array(
                                'choices' => array('123' => '123', 
                                                                       'AC' => 'AC', 
                                                                        'AC6' => 'AC6', 
                                                                        'ACA' => 'ACA', 
                                                                        'ACT' => 'ACT', 
                                                                        'AD' => 'AD', 
                                                                        'AG' => 'AG', 
                                                                        'AVT' => 'AVT', 
                                                                        'CP' => 'CP', 
                                                                        'E' => 'E', 
                                                                        'E/' => 'E/', 
                                                                        'E/G' => 'E/G', 
                                                                        'E7G' => 'E7G', 
                                                                        'EBR' => 'EBR', 
                                                                        'ECT' => 'ECT', 
                                                                        'EF' => 'EF', 
                                                                        'EG' => 'EG', 
                                                                        'EGE' => 'EGE', 
                                                                        'EGR' => 'EGR', 
                                                                        'EHR' => 'EHR', 
                                                                        'FAC' => 'FAC', 
                                                                        'I.T' => 'I.T', 
                                                                        'I/A' => 'I/A', 
                                                                        'I/T' => 'I/T', 
                                                                        'INV' => 'INV', 
                                                                        'MEM' => 'MEM', 
                                                                        'N/E' => 'N/E', 
                                                                        'N/T' => 'N/T', 
                                                                        'REI' => 'REI', 
                                                                        'REP' => 'REP'),
                                'empty_value' => 'Escoja una opcion..',
                ))
            ->add('numeroDocumento')
            ->add('procedencia')
            ->add('financiamiento')
            ->add('bienAsegurable')
            ->add('calidad')
            ->add('factorEstado')
            ->add('valorAdquisicion')
            ->add('valorResidual')
            ->add('valorDepreciable')
            ->add('coordeEste')
            ->add('coordeNorte')
            ->add('etapaFuncional')
            ->add('altura')
            ->add('anioFabricacion')
            ->add('voltaje')
            ->add('posteria')
            ->add('material')
            ->add('tipo')
            ->add('nombrEstructura')
            ->add('estadoEstructura')
            ->add('observEstructura')
            ->add('tipoEstructura')
            ->add('descripcionPTierra')
            ->add('tipoPTierra')
            ->add('calibrePTierra')
            ->add('estadoPTierra')
            ->add('observPTierra')
            ->add('calibreTensor')
            ->add('tipoTensor')
            ->add('cantidadTensor')
            ->add('estadoTensor')
            ->add('observTensor')
            ->add('longitudCFase')
            ->add('tipoCFase')
            ->add('materialCFase')
            ->add('calibreCFase')
            ->add('estadoCFase')
            ->add('observCFase')
            ->add('longitudCGuardia')
            ->add('materialCGuardia')
            ->add('tipoCGuardia')
            ->add('calibreCGuardia')
            ->add('estadoCGuardia')
            ->add('observCGuardia')
            ->add('unidadPropiedad')
            ->add('agencia')
            ->add('areaOperativa')
            ->add('canton')
            ->add('cuentaContable')
            ->add('departamento')
            ->add('dependencia')
            ->add('subtransmision')
            ->add('plan')
            ->add('trabajador')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'afijos\MainBundle\Entity\LSubtransmision'
        ));
    }

    public function getName()
    {
        return 'afijos_mainbundle_lsubtransmisiontype';
    }
}
