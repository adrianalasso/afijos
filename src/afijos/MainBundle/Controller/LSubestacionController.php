<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\LSubestacion;
use afijos\MainBundle\Form\LSubestacionType;
use afijos\MainBundle\Form\LSubestacionReportType;
use Symfony\Component\HttpFoundation\Response;
//libreria para reportes
use Ps\PdfBundle\Annotation\Pdf;

/**
 * LSubestacion controller.
 *
 * @Route("/lsubestacion")
 */
class LSubestacionController extends Controller
{
    /**
     * Lists all LSubestacion entities.
     *
     * @Route("/", name="lsubestacion")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:LSubestacion')->findBy(array(
            'eliminado'=>'NO',
            'historico'=>'NO'
        ));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a LSubestacion entity.
     *
     * @Route("/{id}/show", name="lsubestacion_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new LSubestacion entity.
     *
     * @Route("/new", name="lsubestacion_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LSubestacion();
        $form   = $this->createForm(new LSubestacionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new LSubestacion entity.
     *
     * @Route("/create", name="lsubestacion_create")
     * @Method("POST")
     * @Template("MainBundle:LSubestacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new LSubestacion();
        $form = $this->createForm(new LSubestacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('lsubestacion_depreciar', array('id' => $entity->getId())));

            //return $this->redirect($this->generateUrl('lsubestacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LSubestacion entity.
     *
     * @Route("/{id}/edit", name="lsubestacion_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $editForm = $this->createForm(new LSubestacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing LSubestacion entity.
     *
     * @Route("/{id}/update", name="lsubestacion_update")
     * @Method("POST")
     * @Template("MainBundle:LSubestacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LSubestacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('lsubestacion_edepreciar', array('id' => $id)));
            //return $this->redirect($this->generateUrl('lsubestacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a LSubestacion entity.
     *
     * @Route("/{id}/delete", name="lsubestacion_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LSubestacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lsubestacion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a LSubestacion entity.
     *
     * @Route("/{id}/eliminar", name="lsubestacion_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('lsubestacion'));
    }
        
    public function rformularioAction()
    {
        $entity = new LSubestacion();
        $form   = $this->createForm(new LSubestacionReportType(), $entity);

        return $this->render('MainBundle:LSubestacion:rformulario.html.twig', array(
            'entity' => $entity, 
            'form'   => $form->createView(),
        ));             
    }
    
    public function reporteAction()
    {
        $peticion = $this->getRequest();
        $subestacion=$peticion->request->get('subestacion');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:LSubestacion')->findBy(array(
            'subestacion'=>$subestacion
        ));
        
        return $this->render('MainBundle:LSubestacion:reporte.html.twig', array(
            'entities' => $entities
        ));             
    }
    
    public function depreciarAction($id){        
        $em1 = $this->getDoctrine()->getManager();
        $entity = $em1->getRepository('MainBundle:LSubestacion')->find($id);
        $nMeses=$entity->getUnidadPropiedad()->getVidaUtilM();
        $indiDep=$entity->getUnidadPropiedad()->getIndiceDeprec();
        $valDep=$entity->getValorDepreciable();
        for($i=0;$i<$nMeses;$i++){            
            $dep=new \afijos\MainBundle\Entity\DetalleDepreciacionLSb();
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
            $dep->setLSubestacion($entity);                
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
        return $this->redirect($this->generateUrl('lsubestacion_show', array('id' => $entity->getId())));
    }
    
    public function edepreciarAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubestacion')->find($id);
        $depreciaciones=$emdp->getRepository('MainBundle:DetalleDepreciacionLSb')->findBy(array(
            'lsubestacion'=>$id,
        ));
        $bien->setValorDepreciacionAcumulada(0);
        $fechaMarcha=$bien->getFechaMarcha();
        $bien->setUltimaFechaDepreciacion($fechaMarcha);
        $emb->flush();
        $nfilas=count($depreciaciones);
        for($i=0;$i<$nfilas;$i++){
            $depreciacion=$emdp->getRepository('MainBundle:DetalleDepreciacionLSb')->find($depreciaciones[$i]->getId());
            $emdp->remove($depreciacion);
            $emdp->flush();
        }
        return $this->redirect($this->generateUrl('lsubestacion_depreciar', array('id' => $id)));
        //return $this->redirect($this->generateUrl('lsubestacion_show', array('id' => $id)));
    }
    public function ubicarformAction(){
        $entity = new \afijos\MainBundle\Entity\DetalleDepreciacionLSb();
        $form = $this->createForm(new \afijos\MainBundle\Form\UbicarType(), $entity);        
        return $this->render('MainBundle:LSubestacion:ubicarform.html.twig', array(
            'form'   => $form->createView(),
                ));             
    }
    
    public function ubicarAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubestacion')->find($id);        
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
        $dql="select d, b from MainBundle:DetalleDepreciacionLSb d join d.lsubestacion b "
                . "where b.id=:id and b.eliminado='NO' and d.fechaDepreciacion>:fechaPasada and d.fechaDepreciacion<:fecha ";
        $query=$emdp->createQuery($dql);
        $query->setParameter('id', $id);
        $query->setParameter('fechaPasada', $fechaPasada);
        $query->setParameter('fecha', $fechaAc);
        $depreciacion = $query->getResult();
        
        ////proceso para presentar en pdf
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:LSubestacion:ubicar.html.twig', array(
            'depreciacion' => $depreciacion,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    public function historialdeprecAction($id){
        $emdp = $this->getDoctrine()->getManager();
        $emb = $this->getDoctrine()->getManager();
        $bien=$emb->getRepository('MainBundle:LSubestacion')->find($id);        
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
        $dql="select d, b from MainBundle:DetalleDepreciacionLSb d join d.lsubestacion b "
                . "where b.id=:id and b.eliminado='NO' and d.fechaDepreciacion<:fecha ";
        $query=$emdp->createQuery($dql);
        $query->setParameter('id', $id);
        //$query->setParameter('fechaPasada', $fechaPasada);
        $query->setParameter('fecha', $fechaAc);
        $depreciacion = $query->getResult();
        
        ////proceso para presentar en pdf
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:LSubestacion:historial.html.twig', array(
            'entities' => $depreciacion,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    
}
