<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Subtransmision;
use afijos\MainBundle\Form\SubtransmisionType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Subtransmision controller.
 *
 * @Route("/subtransmision")
 */
class SubtransmisionController extends Controller
{
    /**
     * Lists all Subtransmision entities.
     *
     * @Route("/", name="subtransmision")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:Subtransmision')->findAll();
        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Subtransmision entity.
     *
     * @Route("/{id}/show", name="subtransmision_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtransmision entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Subtransmision entity.
     *
     * @Route("/new", name="subtransmision_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subtransmision();
        $form   = $this->createForm(new SubtransmisionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Subtransmision entity.
     *
     * @Route("/create", name="subtransmision_create")
     * @Method("POST")
     * @Template("MainBundle:Subtransmision:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Subtransmision();
        $form = $this->createForm(new SubtransmisionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subtransmision_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subtransmision entity.
     *
     * @Route("/{id}/edit", name="subtransmision_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtransmision entity.');
        }

        $editForm = $this->createForm(new SubtransmisionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Subtransmision entity.
     *
     * @Route("/{id}/update", name="subtransmision_update")
     * @Method("POST")
     * @Template("MainBundle:Subtransmision:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtransmision entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SubtransmisionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subtransmision_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Subtransmision entity.
     *
     * @Route("/{id}/delete", name="subtransmision_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Subtransmision')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subtransmision entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subtransmision'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function listarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:Subtransmision')->findAll();
        
        $subtrans=array();
        for($i=0;$i<count($entities);$i++){
            $subtrans[$i]=array('id'=>$entities[$i]->getId(),'nomb'=>$entities[$i]->__toString());
        }
        
        $return=json_encode($subtrans);
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }
    
    /**
     * Deletes a Subtransmision entity.
     *
     * @Route("/{id}/eliminar", name="subtransmision_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Subtransmision')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subtransmision entity.');
        }

        $em->remove($entity);
        $em->flush();
        
        return $this->redirect($this->generateUrl('subtransmision'));
    }
}
