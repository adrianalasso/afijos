<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Bajas;
use afijos\MainBundle\Form\BajasType;
use Symfony\Component\HttpFoundation\Response;
//libreria para reportes
use Ps\PdfBundle\Annotation\Pdf;

/**
 * Bajas controller.
 *
 * @Route("/bajas")
 */
class BajasController extends Controller
{
    /**
     * Lists all Bajas entities.
     *
     * @Route("/", name="bajas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('MainBundle:Bajas')->findBy(array('estado' => 'PENDIENTE'));
        $entities = $em->getRepository('MainBundle:Bajas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Bajas entity.
     *
     * @Route("/{id}/show", name="bajas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Bajas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bajas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Bajas entity.
     *
     * @Route("/new", name="bajas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bajas();
        $form   = $this->createForm(new BajasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Bajas entity.
     *
     * @Route("/create", name="bajas_create")
     * @Method("POST")
     * @Template("MainBundle:Bajas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Bajas();
        $form = $this->createForm(new BajasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bajas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Bajas entity.
     *
     * @Route("/{id}/edit", name="bajas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Bajas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bajas entity.');
        }

        $editForm = $this->createForm(new BajasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Bajas entity.
     *
     * @Route("/{id}/update", name="bajas_update")
     * @Method("POST")
     * @Template("MainBundle:Bajas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Bajas')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bajas entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BajasType(), $entity);
        $editForm->bind($request);
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('bajas_edit', array('id' => $id)));
        }
        return array(
            'entity'      => $entity,'edit_form'   => $editForm->createView(),'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Deletes a Bajas entity.
     *
     * @Route("/{id}/delete", name="bajas_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Bajas')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bajas entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('bajas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function solicitadasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:Bajas')->findAll();
        return $this->render('MainBundle:Bajas:solicitadas.html.twig', array(
            'entities' => $entities
        ));    
    }
    
    public function aprobarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Bajas')->find($id);        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bajas entity.');
        }        
        $entity->setEstado('APROBADO');
        $datetime = new \DateTime("NOW"); 
        $timezone= new \DateTimeZone("America/Guayaquil");
        $datetime->setTimezone($timezone);
        $entity->setFechaAprobado($datetime);
        $em->flush();        
        return $this->redirect($this->generateUrl('abajas'));
    }
    
    public function imprimirAction($id){        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Bajas')->find($id);
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Bajas:solicitud.html.twig', array(
            'entity' => $entity,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
    public function aimprimirAction($id){        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Bajas')->find($id);
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('MainBundle:Bajas:aprobacion.html.twig', array(
            'entity' => $entity,
        ),$response);
        $xml = $response->getContent();        
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
}
