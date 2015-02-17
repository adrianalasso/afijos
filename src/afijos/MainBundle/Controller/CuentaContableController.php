<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\CuentaContable;
use afijos\MainBundle\Form\CuentaContableType;

/**
 * CuentaContable controller.
 *
 * @Route("/cuentacontable")
 */
class CuentaContableController extends Controller
{
    /**
     * Lists all CuentaContable entities.
     *
     * @Route("/", name="cuentacontable")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:CuentaContable')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a CuentaContable entity.
     *
     * @Route("/{id}/show", name="cuentacontable_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:CuentaContable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuentaContable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new CuentaContable entity.
     *
     * @Route("/new", name="cuentacontable_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CuentaContable();
        $form   = $this->createForm(new CuentaContableType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new CuentaContable entity.
     *
     * @Route("/create", name="cuentacontable_create")
     * @Method("POST")
     * @Template("MainBundle:CuentaContable:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new CuentaContable();
        $form = $this->createForm(new CuentaContableType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuentacontable_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CuentaContable entity.
     *
     * @Route("/{id}/edit", name="cuentacontable_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:CuentaContable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuentaContable entity.');
        }

        $editForm = $this->createForm(new CuentaContableType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing CuentaContable entity.
     *
     * @Route("/{id}/update", name="cuentacontable_update")
     * @Method("POST")
     * @Template("MainBundle:CuentaContable:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:CuentaContable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuentaContable entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CuentaContableType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuentacontable_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a CuentaContable entity.
     *
     * @Route("/{id}/delete", name="cuentacontable_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:CuentaContable')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CuentaContable entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuentacontable'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    /**
     * Deletes a CuentaContable entity.
     *
     * @Route("/{id}/eliminar", name="cuentacontable_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:CuentaContable')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CuentaContable entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('cuentacontable'));
    }
}
