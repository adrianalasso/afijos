<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Dependencia;
use afijos\MainBundle\Form\DependenciaType;

/**
 * Dependencia controller.
 *
 * @Route("/dependencia")
 */
class DependenciaController extends Controller
{
    /**
     * Lists all Dependencia entities.
     *
     * @Route("/", name="dependencia")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:Dependencia')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dependencia entity.
     *
     * @Route("/{id}/show", name="dependencia_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dependencia entity.
     *
     * @Route("/new", name="dependencia_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dependencia();
        $form   = $this->createForm(new DependenciaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dependencia entity.
     *
     * @Route("/create", name="dependencia_create")
     * @Method("POST")
     * @Template("MainBundle:Dependencia:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dependencia();
        $form = $this->createForm(new DependenciaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dependencia_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dependencia entity.
     *
     * @Route("/{id}/edit", name="dependencia_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $editForm = $this->createForm(new DependenciaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dependencia entity.
     *
     * @Route("/{id}/update", name="dependencia_update")
     * @Method("POST")
     * @Template("MainBundle:Dependencia:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DependenciaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dependencia_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dependencia entity.
     *
     * @Route("/{id}/delete", name="dependencia_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Dependencia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dependencia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dependencia'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a Dependencia entity.
     *
     * @Route("/{id}/eliminar", name="dependencia_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Dependencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dependencia entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('dependencia'));
    }
}
