<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\AreaOperativa;
use afijos\MainBundle\Form\AreaOperativaType;

/**
 * AreaOperativa controller.
 *
 * @Route("/areaoperativa")
 */
class AreaOperativaController extends Controller
{
    /**
     * Lists all AreaOperativa entities.
     *
     * @Route("/", name="areaoperativa")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:AreaOperativa')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a AreaOperativa entity.
     *
     * @Route("/{id}/show", name="areaoperativa_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:AreaOperativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaOperativa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new AreaOperativa entity.
     *
     * @Route("/new", name="areaoperativa_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AreaOperativa();
        $form   = $this->createForm(new AreaOperativaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new AreaOperativa entity.
     *
     * @Route("/create", name="areaoperativa_create")
     * @Method("POST")
     * @Template("MainBundle:AreaOperativa:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new AreaOperativa();
        $form = $this->createForm(new AreaOperativaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('areaoperativa_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AreaOperativa entity.
     *
     * @Route("/{id}/edit", name="areaoperativa_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:AreaOperativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaOperativa entity.');
        }

        $editForm = $this->createForm(new AreaOperativaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing AreaOperativa entity.
     *
     * @Route("/{id}/update", name="areaoperativa_update")
     * @Method("POST")
     * @Template("MainBundle:AreaOperativa:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:AreaOperativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaOperativa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AreaOperativaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('areaoperativa_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a AreaOperativa entity.
     *
     * @Route("/{id}/delete", name="areaoperativa_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:AreaOperativa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AreaOperativa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('areaoperativa'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a AreaOperativa entity.
     *
     * @Route("/{id}/eliminar", name="areaoperativa_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:AreaOperativa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AreaOperativa entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('areaoperativa'));
    }
}
