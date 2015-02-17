<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\BienesCustodio;
use afijos\MainBundle\Form\BienesCustodioType;
use afijos\MainBundle\Form\BienesCustodioImportType;
use afijos\MainBundle\Form\BienesCustodioReportType;

/**
 * BienesCustodio controller.
 *
 * @Route("/bienescustodio")
 */
class BienesCustodioController extends Controller
{
    /**
     * Lists all BienesCustodio entities.
     *
     * @Route("/", name="bienescustodio")
     * @Template()
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:BienesCustodio')->findBy(array(
            'eliminado'=>'NO',
            'historico'=>'NO'
        ));
        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a BienesCustodio entity.
     *
     * @Route("/{id}/show", name="bienescustodio_show")
     * @Template()
     */
    public function showAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:BienesCustodio')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BienesCustodio entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new BienesCustodio entity.
     *
     * @Route("/new", name="bienescustodio_new")
     * @Template()
     */
    public function newAction(){
        $entity = new BienesCustodio();
        $form   = $this->createForm(new BienesCustodioType(), $entity);
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new BienesCustodio entity.
     *
     * @Route("/create", name="bienescustodio_create")
     * @Method("POST")
     * @Template("MainBundle:BienesCustodio:new.html.twig")
     */
    public function createAction(Request $request){
        $entity  = new BienesCustodio();
        $form = $this->createForm(new BienesCustodioType(), $entity);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($entity);
            $em->flush();
            //depreciar($entity->getId());
            return $this->redirect($this->generateUrl('bienescustodio_depreciar', array('id' => $entity->getId())));
        }
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing BienesCustodio entity.
     *
     * @Route("/{id}/edit", name="bienescustodio_edit")
     * @Template()
     */
    public function editAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:BienesCustodio')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BienesCustodio entity.');
        }
        $editForm = $this->createForm(new BienesCustodioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing BienesCustodio entity.
     *
     * @Route("/{id}/update", name="bienescustodio_update")
     * @Method("POST")
     * @Template("MainBundle:BienesCustodio:edit.html.twig")
     */
    public function updateAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:BienesCustodio')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BienesCustodio entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BienesCustodioType(), $entity);
        $editForm->bind($request);
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('bienescustodio_edepreciar', array('id' => $id)));
        }
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a BienesCustodio entity.
     *
     * @Route("/{id}/delete", name="bienescustodio_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id){
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:BienesCustodio')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BienesCustodio entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('bienescustodio'));
    }

    private function createDeleteForm($id){
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    /**
     * Deletes a BienesCustodio  entity.
     *
     * @Route("/{id}/eliminar", name="bienescustodio_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:BienesCustodio')->find($id);        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bajas entity.');
        }        
        $entity->setEliminado('SI');
        $em->flush();        
        return $this->redirect($this->generateUrl('bajas'));
    }
    
    public function importAction(){
        $entity = new BienesCustodio();
        $form   = $this->createForm(new BienesCustodioImportType(), $entity);
        return $this->render('MainBundle:BienesCustodio:import.html.twig', array(
            'entity' => $entity, 
            'form'   => $form->createView(),
        ));        
    }
    
    public function rformularioAction(){
        $entity = new BienesCustodio();
        $form   = $this->createForm(new BienesCustodioReportType(), $entity);
        return $this->render('MainBundle:BienesCustodio:rformulario.html.twig', array(
            'entity' => $entity, 
            'form'   => $form->createView(),
        ));             
    }
    
    public function reportesAction(){
        return $this->render('MainBundle:BienesCustodio:reportes.html.twig', array());             
    }
    
    public function reporteAction(){
        $peticion = $this->getRequest();
        $cedula=$peticion->request->get('cedula');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:BienesCustodio')->findBy(array(
            'empleado'=>$cedula
        ));        
        return $this->render('MainBundle:BienesCustodio:reporte.html.twig', array(
            'entities' => $entities
        ));             
    }
    
    public function depreciarAction($id){        
        $em1 = $this->getDoctrine()->getManager();
        $entity = $em1->getRepository('MainBundle:BienesCustodio')->find($id);
        $nMeses=$entity->getUnidadPropiedad()->getVidaUtilM();
        $indiDep=$entity->getUnidadPropiedad()->getIndiceDeprec();
        $valDep=$entity->getValorDepreciable();
        for($i=0;$i<$nMeses;$i++){            
            $dep=new \afijos\MainBundle\Entity\DetalleDepreciacion();
            $depAcum=$entity->getValorDepreciacionAcumulada();
            $fechaUltDepStr=$entity->getUltimaFechaDepreciacion();            
            $depMensual=(($valDep*$indiDep)/100)/12;
            if($valDep>$depAcum){
                if(($depMensual+$depAcum)>$valDep){
                    $depMensual=$valDep-$depAcum;
                }
                else{$depMensual=$depMensual;}
            }
            else{$depMensual=0;}
            $dep->setBienesCustodio($entity);                
            $fechaUltDep = new \DateTime($fechaUltDepStr->format('Y-m-d'));
            $fecha=$fechaUltDep->add(new \DateInterval('P1M'));
            $dep->setFechaDepreciacion($fecha);
            $entity->setUltimaFechaDepreciacion($fecha);
            $mes=explode("-", $fecha->format('Y-m-d'));
            $dep->setMesDepreciacion($mes[1]);
            $dep->setDeprecMensual($depMensual);
            $depAcumN=$depAcum+$depMensual;
            $dep->setDeprecAcumulada($depAcumN);
            $entity->setValorDepreciacionAcumulada($depAcumN);
            $em1->flush();
            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($dep);
            $em2->flush();
        }
        return $this->redirect($this->generateUrl('bienescustodio_show', array('id' => $entity->getId())));
    }
    
    /**
     * 
     * public function depreciarAction($id){        
        ///////////////////FUNCION DEPRECIAR////////////////////
        $em1 = $this->getDoctrine()->getManager();
        $entity = $em1->getRepository('MainBundle:BienesCustodio')->find($id);
        //$fechaUltDepStr=$entity->getUltimaFechaDepreciacion();
        //$fechaUltDep = new \DateTime($fechaUltDepStr->format('Y-m-d'));
        $nMeses=$entity->getUnidadPropiedad()->getVidaUtilM();
        $indiDep=$entity->getUnidadPropiedad()->getIndiceDeprec();
        //$depAcum=$entity->getValorDepreciacionAcumulada();
        //$valAdq=$entity->getValorAdquisicion();
        //$valRes=$entity->getValorResidual();
        $valDep=$entity->getValorDepreciable();

        for($i=0;$i<$nMeses;$i++){            
            $dep=new \afijos\MainBundle\Entity\DetalleDepreciacion();
            $depAcum=$entity->getValorDepreciacionAcumulada();
            $fechaUltDepStr=$entity->getUltimaFechaDepreciacion();
            
            if($valDep>$depAcum){
                if((((($valDep*$indiDep)/100)/12)+$depAcum)>$valDep){
                    $depMensual=$valDep-$depAcum;
                }
                else{
                    $depMensual=(($valDep*$indiDep)/100)/12;
                }
            }
            else{
                $depMensual=0;
            }
            
                $dep->setBienesCustodio($entity);                
                $fechaUltDep = new \DateTime($fechaUltDepStr->format('Y-m-d'));
                $fecha=$fechaUltDep->add(new \DateInterval('P1M'));
                $dep->setFechaDepreciacion($fecha);
                $entity->setUltimaFechaDepreciacion($fecha);
                $mes=explode("-", $fecha->format('Y-m-d'));
                $dep->setMesDepreciacion($mes[1]);
                $valDepN=(($valDep*$indiDep)/100)/12;
                $dep->setDeprecMensual($valDepN);                
                $depAcumN=$depAcum+$valDepN;
                $dep->setDeprecAcumulada($depAcumN);
                $entity->setValorDepreciacionAcumulada($depAcumN);
                $em1->flush();

                $em2 = $this->getDoctrine()->getManager();
                $em2->persist($dep);
                $em2->flush();
            
        }
        return $this->redirect($this->generateUrl('bienescustodio_show', array('id' => $entity->getId())));
        //////////////////////////////////////
    }
     */
    
    public function edepreciarAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:BienesCustodio')->find($id);
        $depreciaciones=$emdp->getRepository('MainBundle:DetalleDepreciacion')->findBy(array(
            'bienesCustodio'=>$id,
        ));
        $bien->setValorDepreciacionAcumulada(0);
        $fechaMarcha=$bien->getFechaMarcha();
        $bien->setUltimaFechaDepreciacion($fechaMarcha);
        $emb->flush();
        $nfilas=count($depreciaciones);
        for($i=0;$i<$nfilas;$i++){
            $depreciacion=$emdp->getRepository('MainBundle:DetalleDepreciacion')->find($depreciaciones[$i]->getId());
            $emdp->remove($depreciacion);
            $emdp->flush();
        }
        return $this->redirect($this->generateUrl('bienescustodio_depreciar', array('id' => $id)));
        //return $this->redirect($this->generateUrl('bienescustodio_show', array('id' => $id)));
    }
}
