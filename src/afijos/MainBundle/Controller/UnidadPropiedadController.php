<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\UnidadPropiedad;
use afijos\MainBundle\Form\UnidadPropiedadType;

/**
 * UnidadPropiedad controller.
 *
 * @Route("/unidadpropiedad")
 */
class UnidadPropiedadController extends Controller
{
    /**
     * Lists all UnidadPropiedad entities.
     *
     * @Route("/", name="unidadpropiedad")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:UnidadPropiedad')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a UnidadPropiedad entity.
     *
     * @Route("/{id}/show", name="unidadpropiedad_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:UnidadPropiedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadPropiedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new UnidadPropiedad entity.
     *
     * @Route("/new", name="unidadpropiedad_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UnidadPropiedad();
        $form   = $this->createForm(new UnidadPropiedadType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new UnidadPropiedad entity.
     *
     * @Route("/create", name="unidadpropiedad_create")
     * @Method("POST")
     * @Template("MainBundle:UnidadPropiedad:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new UnidadPropiedad();
        $form = $this->createForm(new UnidadPropiedadType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadpropiedad_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing UnidadPropiedad entity.
     *
     * @Route("/{id}/edit", name="unidadpropiedad_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:UnidadPropiedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadPropiedad entity.');
        }

        $editForm = $this->createForm(new UnidadPropiedadType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing UnidadPropiedad entity.
     *
     * @Route("/{id}/update", name="unidadpropiedad_update")
     * @Method("POST")
     * @Template("MainBundle:UnidadPropiedad:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:UnidadPropiedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadPropiedad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UnidadPropiedadType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('unidadpropiedad_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a UnidadPropiedad entity.
     *
     * @Route("/{id}/delete", name="unidadpropiedad_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:UnidadPropiedad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UnidadPropiedad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('unidadpropiedad'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a UnidadPropiedad entity.
     *
     * @Route("/{id}/eliminar", name="unidadpropiedad_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:UnidadPropiedad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UnidadPropiedad entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('unidadpropiedad'));
    }
}
