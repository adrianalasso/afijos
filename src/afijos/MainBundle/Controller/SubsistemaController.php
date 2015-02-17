<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Subsistema;
use afijos\MainBundle\Form\SubsistemaType;

/**
 * Subsistema controller.
 *
 * @Route("/subsistema")
 */
class SubsistemaController extends Controller
{
    /**
     * Lists all Subsistema entities.
     *
     * @Route("/", name="subsistema")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:Subsistema')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Subsistema entity.
     *
     * @Route("/{id}/show", name="subsistema_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subsistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subsistema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Subsistema entity.
     *
     * @Route("/new", name="subsistema_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subsistema();
        $form   = $this->createForm(new SubsistemaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Subsistema entity.
     *
     * @Route("/create", name="subsistema_create")
     * @Method("POST")
     * @Template("MainBundle:Subsistema:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Subsistema();
        $form = $this->createForm(new SubsistemaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subsistema_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subsistema entity.
     *
     * @Route("/{id}/edit", name="subsistema_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subsistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subsistema entity.');
        }

        $editForm = $this->createForm(new SubsistemaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Subsistema entity.
     *
     * @Route("/{id}/update", name="subsistema_update")
     * @Method("POST")
     * @Template("MainBundle:Subsistema:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subsistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subsistema entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SubsistemaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subsistema_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Subsistema entity.
     *
     * @Route("/{id}/delete", name="subsistema_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Subsistema')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subsistema entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subsistema'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    
    /**
     * Deletes a Subsistema entity.
     *
     * @Route("/{id}/eliminar", name="subsistema_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Subsistema')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subsistema entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('subsistema'));
    }
}
