<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Parroquia;
use afijos\MainBundle\Form\ParroquiaType;

/**
 * Parroquia controller.
 *
 * @Route("/parroquia")
 */
class ParroquiaController extends Controller
{
    /**
     * Lists all Parroquia entities.
     *
     * @Route("/", name="parroquia")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:Parroquia')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Parroquia entity.
     *
     * @Route("/{id}/show", name="parroquia_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Parroquia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parroquia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Parroquia entity.
     *
     * @Route("/new", name="parroquia_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Parroquia();
        $form   = $this->createForm(new ParroquiaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Parroquia entity.
     *
     * @Route("/create", name="parroquia_create")
     * @Method("POST")
     * @Template("MainBundle:Parroquia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Parroquia();
        $form = $this->createForm(new ParroquiaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parroquia_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Parroquia entity.
     *
     * @Route("/{id}/edit", name="parroquia_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Parroquia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parroquia entity.');
        }

        $editForm = $this->createForm(new ParroquiaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Parroquia entity.
     *
     * @Route("/{id}/update", name="parroquia_update")
     * @Method("POST")
     * @Template("MainBundle:Parroquia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Parroquia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parroquia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ParroquiaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parroquia_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Parroquia entity.
     *
     * @Route("/{id}/delete", name="parroquia_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Parroquia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Parroquia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('parroquia'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a Parroquia entity.
     *
     * @Route("/{id}/eliminar", name="parroquia_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Parroquia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parroquia entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('parroquia'));
    }
}
