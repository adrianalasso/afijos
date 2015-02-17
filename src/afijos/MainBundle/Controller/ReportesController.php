<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\BienesCustodio;
use afijos\MainBundle\Entity\Bajas;
use afijos\MainBundle\Entity\LSubestacion;
use afijos\MainBundle\Entity\LSubtransmision;
use Symfony\Component\HttpFoundation\Response;
//libreria para reportes
use Ps\PdfBundle\Annotation\Pdf;

/**
 * Reportes controller.
 *
 * @Route("/reportes")
 */
class ReportesController extends Controller
{
    /**
    * @Pdf()
    */
   public function helloAction($name)
   {
       $facade = $this->get('ps_pdf.facade');
       $response = new Response();
       $this->render('MainBundle:Reportes:hello.pdf.twig', array('name' => $name), $response);
       $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
   }
   
    public function rform1Action(){
        return $this->render('MainBundle:Reportes:rform1.html.twig', array());             
    }
    public function rform2Action(){
        return $this->render('MainBundle:Reportes:rform2.html.twig', array());             
    }
    public function rform3Action(){
        $entity = new \afijos\MainBundle\Entity\Trabajador();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte3Type(), $entity);        
        return $this->render('MainBundle:Reportes:rform3.html.twig', array(
            'form'   => $form->createView(),
                ));             
    }
    public function rform4Action(){
        $entity = new \afijos\MainBundle\Entity\LSubtransmision();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte4Type(), $entity);        
        return $this->render('MainBundle:Reportes:rform4.html.twig', array('form'   => $form->createView(),));             
    }
    public function rform5Action(){
        $entity = new \afijos\MainBundle\Entity\LSubestacion();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte5Type(), $entity);        
        return $this->render('MainBundle:Reportes:rform5.html.twig', array('form'   => $form->createView(),));             
    }
    public function rform6Action(){
        $entity = new \afijos\MainBundle\Entity\BienesCustodio();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte6Type(), $entity);    
        return $this->render('MainBundle:Reportes:rform6.html.twig', array('form'   => $form->createView(),));             
    }
    public function rform7Action(){
        $entity = new \afijos\MainBundle\Entity\Trabajador();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte3Type(), $entity);    
        return $this->render('MainBundle:Reportes:rform7.html.twig', array('form'   => $form->createView(),));             
    }
    public function rform8Action(){
        $entity = new \afijos\MainBundle\Entity\Bajas();
        $form = $this->createForm(new \afijos\MainBundle\Form\Reporte8Type(), $entity);    
        return $this->render('MainBundle:Reportes:rform8.html.twig', array('form'   => $form->createView(),));             
    }
    
    public function reporte1Action($desdestr,$hastastr){
        
        //$peticion = $this->getRequest();
        //$desdestr=$peticion->request->get('desde');
        //$hastastr=$peticion->request->get('hasta');
        
        $desde=new \DateTime($desdestr);
        $hasta=new \DateTime($hastastr);
        $hasta->add(new \DateInterval('P1D'));
        
        $em = $this->getDoctrine()->getManager();        
        $dql="select b, bc, t from MainBundle:Bajas b join b.bienesCustodio bc join bc.trabajador t "
                . "where b.estado='APROBADO' and b.fechaAprobado>:desde and "
                . "b.fechaAprobado<:hasta and bc.eliminado='SI' "
                . "ORDER BY t.departamento";        
        /*
        $dql="select b, bc, t from MainBundle:Bajas b join b.bienesCustodio bc join bc.trabajador t "
                . "where b.estado='APROBADO' and b.fechaAprobado>:desde and "
                . "b.fechaAprobado<:hasta and bc.eliminado='SI' and bc.estado='MALO' "
                . "ORDER BY t.departamento";       
                */
        $query=$em->createQuery($dql);
        $query->setParameter('desde', $desde);      
        $query->setParameter('hasta', $hasta);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $desde->add(new \DateInterval('P1D'));
        $this->render('MainBundle:Reportes:reporte1.html.twig', array(
            'entities' => $entities,'fechdesde'=>$desde, 'fechasta'=>$hasta
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    
    public function reporte2Action($desdestr,$hastastr){
        $desde=new \DateTime($desdestr);
        $hasta=new \DateTime($hastastr);
        $hasta->add(new \DateInterval('P1D'));
        
        $em = $this->getDoctrine()->getManager();        
        $dql="select b, t from MainBundle:BienesCustodio b join b.trabajador t "
                . "where b.eliminado='NO' and b.fechaRegistro>:desde and "
                . "b.fechaRegistro<:hasta "
                . "ORDER BY t.departamento";        
        $query=$em->createQuery($dql);
        $query->setParameter('desde', $desde);      
        $query->setParameter('hasta', $hasta);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $desde->add(new \DateInterval('P1D'));
        $this->render('MainBundle:Reportes:reporte2.html.twig', array(
            'entities' => $entities,'fechdesde'=>$desde, 'fechasta'=>$hasta
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));   
    }
    
    public function reporte3Action($dpto){
        $em = $this->getDoctrine()->getManager();        
        $dql="select b, t from MainBundle:BienesCustodio b join b.trabajador t "
                . "where b.estado='MALO' and b.eliminado='NO' and t.departamento=:dpto "
                . "ORDER BY b.trabajador";        
        $query=$em->createQuery($dql);
        $query->setParameter('dpto', $dpto);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte3.html.twig', array(
            'entities' => $entities,'dpto'=>$dpto
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));   
    }
    public function reporte4Action($lsubtrans){
        $em = $this->getDoctrine()->getManager();        
        $dql="select ls, t from MainBundle:LSubtransmision ls join ls.trabajador t "
                . "where ls.estado='MALO' and ls.eliminado='NO' and ls.subtransmision=:lsubtrans "
                . "ORDER BY t.departamento";
        $query=$em->createQuery($dql);
        $query->setParameter('lsubtrans', $lsubtrans);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte4.html.twig', array(
            'entities' => $entities,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));      
    }
    
    public function reporte5Action($lsubest){
        $em = $this->getDoctrine()->getManager();        
        $dql="select ls, t from MainBundle:LSubestacion ls join ls.trabajador t "
                . "where ls.estado='MALO' and ls.eliminado='NO' and ls.subestacion=:lsubest "
                . "ORDER BY t.departamento";
        $query=$em->createQuery($dql);
        $query->setParameter('lsubest', $lsubest);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte5.html.twig', array(
            'entities' => $entities,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));              
    }
    public function reporte6Action($emp){
        $em = $this->getDoctrine()->getManager();        
        $dql="select b from MainBundle:BienesCustodio b "
                . "where b.trabajador=:emp  and b.eliminado='NO' ";
        $query=$em->createQuery($dql);
        $query->setParameter('emp', $emp);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte6.html.twig', array(
            'entities' => $entities,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));           
    }
    public function reporte7Action($dpto){
        $em = $this->getDoctrine()->getManager();        
        $dql="select b, t from MainBundle:BienesCustodio b join b.trabajador t "
                . "where b.eliminado='NO' and t.departamento=:dpto "
                . "ORDER BY b.trabajador";        
        $query=$em->createQuery($dql);
        $query->setParameter('dpto', $dpto);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte7.html.twig', array(
            'entities' => $entities,'dpto'=>$dpto
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));   
    }
    public function reporte8Action($actv){        
        $em = $this->getDoctrine()->getManager();        
        $dql="select b, t from MainBundle:BienesCustodio b join b.trabajador t "
                . "where b.eliminado='NO' and b.id>:actv ";
        $query=$em->createQuery($dql);
        $query->setParameter('actv', $actv);
        $entities = $query->getResult();      
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Reportes:reporte8.html.twig', array(
            'entities' => $entities,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    
    public function reportesAction()
    {
        return $this->render('MainBundle:Reportes:reportes.html.twig', array());             
    }
}