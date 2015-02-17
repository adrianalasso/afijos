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

            return $this->redirect($this->generateUrl('lsubtransmision_show', array('id' => $entity->getId())));
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

            return $this->redirect($this->generateUrl('lsubtransmision_edit', array('id' => $id)));
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
}
