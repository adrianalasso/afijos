<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\LSubtransmision;
use afijos\MainBundle\Form\LSubtransmisionType;
use afijos\MainBundle\Form\LSubtransmisionReportType;
use Symfony\Component\HttpFoundation\Response;
//libreria para reportes
use Ps\PdfBundle\Annotation\Pdf;

/**
 * LSubtransmision controller.
 *
 * @Route("/lsubtransmision")
 */
class LSubtransmisionController extends Controller
{
    /**
     * Lists all LSubtransmision entities.
     *
     * @Route("/", name="lsubtransmision")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:LSubtransmision')->findBy(array(
            'eliminado'=>'NO',
            'historico'=>'NO'
        ));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a LSubtransmision entity.
     *
     * @Route("/{id}/show", name="lsubtransmision_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubtransmision entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new LSubtransmision entity.
     *
     * @Route("/new", name="lsubtransmision_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LSubtransmision();
        $form   = $this->createForm(new LSubtransmisionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new LSubtransmision entity.
     *
     * @Route("/create", name="lsubtransmision_create")
     * @Method("POST")
     * @Template("MainBundle:LSubtransmision:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new LSubtransmision();
        $form = $this->createForm(new LSubtransmisionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('lsubtransmision_depreciar', array('id' => $entity->getId())));
            //return $this->redirect($this->generateUrl('lsubtransmision_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LSubtransmision entity.
     *
     * @Route("/{id}/edit", name="lsubtransmision_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubtransmision entity.');
        }

        $editForm = $this->createForm(new LSubtransmisionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing LSubtransmision entity.
     *
     * @Route("/{id}/update", name="lsubtransmision_update")
     * @Method("POST")
     * @Template("MainBundle:LSubtransmision:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubtransmision entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LSubtransmisionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('lsubtransmision_edepreciar', array('id' => $id)));
            //return $this->redirect($this->generateUrl('lsubtransmision_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a LSubtransmision entity.
     *
     * @Route("/{id}/delete", name="lsubtransmision_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:LSubtransmision')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LSubtransmision entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lsubtransmision'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function rformularioAction()
    {
        $entity = new LSubtransmision();
        $form   = $this->createForm(new LSubtransmisionReportType(), $entity);

        return $this->render('MainBundle:LSubtransmision:rformulario.html.twig', array(
            'entity' => $entity, 
            'form'   => $form->createView(),
        ));             
    }
    
    public function reporteAction()
    {
        $peticion = $this->getRequest();
        $subtransmision=$peticion->request->get('subtransmision');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:LSubtransmision')->findBy(array(
            'subtransmision'=>$subtransmision
        ));
        
        return $this->render('MainBundle:LSubtransmision:reporte.html.twig', array(
            'entities' => $entities
        ));             
    }
    
    public function depreciarAction($id){        
        $em1 = $this->getDoctrine()->getManager();
        $entity = $em1->getRepository('MainBundle:LSubtransmision')->find($id);
        $nMeses=$entity->getUnidadPropiedad()->getVidaUtilM();
        $indiDep=$entity->getUnidadPropiedad()->getIndiceDeprec();
        $valDep=$entity->getValorDepreciable();
        for($i=0;$i<$nMeses;$i++){            
            $dep=new \afijos\MainBundle\Entity\DetalleDepreciacionLSt();
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
            $dep->setLSubtransmision($entity);                
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
        return $this->redirect($this->generateUrl('lsubtransmision_show', array('id' => $entity->getId())));
    }
    
    public function edepreciarAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubtransmision')->find($id);
        $depreciaciones=$emdp->getRepository('MainBundle:DetalleDepreciacionLSt')->findBy(array(
            'lsubtransmision'=>$id,
        ));
        $bien->setValorDepreciacionAcumulada(0);
        $fechaMarcha=$bien->getFechaMarcha();
        $bien->setUltimaFechaDepreciacion($fechaMarcha);
        $emb->flush();
        $nfilas=count($depreciaciones);
        for($i=0;$i<$nfilas;$i++){
            $depreciacion=$emdp->getRepository('MainBundle:DetalleDepreciacionLSt')->find($depreciaciones[$i]->getId());
            $emdp->remove($depreciacion);
            $emdp->flush();
        }
        return $this->redirect($this->generateUrl('lsubtransmision_depreciar', array('id' => $id)));
        //return $this->redirect($this->generateUrl('lsubtransmision_show', array('id' => $id)));
    }
    
    public function ubicarformAction(){
        $entity = new \afijos\MainBundle\Entity\DetalleDepreciacionLSt();
        $form = $this->createForm(new \afijos\MainBundle\Form\UbicarlstType(), $entity);        
        return $this->render('MainBundle:LSubtransmision:ubicarform.html.twig', array(
            'form'   => $form->createView(),
            ));             
    }
    
    public function ubicarAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubtransmision')->find($id);        
        ///////////////
        $fechaUltima=$bien->getUltimaFechaDepreciacion();
        $fechaNow=new \DateTime("NOW");
        if($fechaUltima>$fechaNow){
            $fechaUltima=$fechaNow;
        }
        $dfecha=explode("-", $fechaUltima->format('Y-m-d'));
        $month = date($dfecha[1]);
        $year=date($dfecha[0]);
        $yearP=$year;
        if($month=='01'){
            $mesPasado=12;
            $yearP=$year-1;
        }
        else{
            $mesPasado=$month-1;
        }
        $day = date("d", mktime(0,0,0, $month+1, 0, $year));               
        $fechaAc=new \DateTime($year."-".$month."-".$day);
        $dayP = date("d", mktime(0,0,0, $mesPasado+1, 0, $yearP));
        $fechaPasada=new \DateTime($yearP."-".$mesPasado."-".$dayP);        
        //////////
        $dql="select d, b from MainBundle:DetalleDepreciacionLSt d join d.lsubtransmision b "
                . "where b.id=:id and b.eliminado='NO' and d.fechaDepreciacion>:fechaPasada and d.fechaDepreciacion<:fecha ";
        $query=$emdp->createQuery($dql);
        $query->setParameter('id', $id);
        $query->setParameter('fechaPasada', $fechaPasada);
        $query->setParameter('fecha', $fechaAc);
        $depreciacion = $query->getResult();
        
        ////proceso para presentar en pdf
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:LSubtransmision:ubicar.html.twig', array(
            'depreciacion' => $depreciacion,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    public function historialdeprecAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubtransmision')->find($id);        
        ///////////////
        $fechaUltima=$bien->getUltimaFechaDepreciacion();
        $fechaNow=new \DateTime("NOW");
        if($fechaUltima>$fechaNow){
            $fechaUltima=$fechaNow;
        }
        $dfecha=explode("-", $fechaUltima->format('Y-m-d'));
        $month = date($dfecha[1]);
        $year=date($dfecha[0]);
        $yearP=$year;
        if($month=='01'){
            $mesPasado=12;
            $yearP=$year-1;
        }
        else{
            $mesPasado=$month-1;
        }
        $day = date("d", mktime(0,0,0, $month+1, 0, $year));               
        $fechaAc=new \DateTime($year."-".$month."-".$day);
        $dayP = date("d", mktime(0,0,0, $mesPasado+1, 0, $yearP));
        $fechaPasada=new \DateTime($yearP."-".$mesPasado."-".$dayP);        
        //////////
        $dql="select d, b from MainBundle:DetalleDepreciacionLSt d join d.lsubtransmision b "
                . "where b.id=:id and b.eliminado='NO' and d.fechaDepreciacion<:fecha ";
        $query=$emdp->createQuery($dql);
        $query->setParameter('id', $id);
        //$query->setParameter('fechaPasada', $fechaPasada);
        $query->setParameter('fecha', $fechaAc);
        $depreciacion = $query->getResult();
        
        ////proceso para presentar en pdf
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:LSubtransmision:historial.html.twig', array(
            'entities' => $depreciacion,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    
}
