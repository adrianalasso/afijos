<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\LSubestacion;
use afijos\MainBundle\Form\LSubestacionType;
use afijos\MainBundle\Form\LSubestacionReportType;

/**
 * LSubestacion controller.
 *
 * @Route("/lsubestacion")
 */
class LSubestacionController extends Controller
{
    /**
     * Lists all LSubestacion entities.
     *
     * @Route("/", name="lsubestacion")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:LSubestacion')->findBy(array(
            'eliminado'=>'NO',
            'historico'=>'NO'
        ));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a LSubestacion entity.
     *
     * @Route("/{id}/show", name="lsubestacion_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new LSubestacion entity.
     *
     * @Route("/new", name="lsubestacion_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LSubestacion();
        $form   = $this->createForm(new LSubestacionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new LSubestacion entity.
     *
     * @Route("/create", name="lsubestacion_create")
     * @Method("POST")
     * @Template("MainBundle:LSubestacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new LSubestacion();
        $form = $this->createForm(new LSubestacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lsubestacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LSubestacion entity.
     *
     * @Route("/{id}/edit", name="lsubestacion_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $editForm = $this->createForm(new LSubestacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing LSubestacion entity.
     *
     * @Route("/{id}/update", name="lsubestacion_update")
     * @Method("POST")
     * @Template("MainBundle:LSubestacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LSubestacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lsubestacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a LSubestacion entity.
     *
     * @Route("/{id}/delete", name="lsubestacion_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LSubestacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lsubestacion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    
    /**
     * Deletes a LSubestacion entity.
     *
     * @Route("/{id}/eliminar", name="lsubestacion_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:LSubestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LSubestacion entity.');
        }

        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('lsubestacion'));
    }
        
    public function rformularioAction()
    {
        $entity = new LSubestacion();
        $form   = $this->createForm(new LSubestacionReportType(), $entity);

        return $this->render('MainBundle:LSubestacion:rformulario.html.twig', array(
            'entity' => $entity, 
            'form'   => $form->createView(),
        ));             
    }
    
    public function reporteAction()
    {
        $peticion = $this->getRequest();
        $subestacion=$peticion->request->get('subestacion');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:LSubestacion')->findBy(array(
            'subestacion'=>$subestacion
        ));
        
        return $this->render('MainBundle:LSubestacion:reporte.html.twig', array(
            'entities' => $entities
        ));             
    }
}
