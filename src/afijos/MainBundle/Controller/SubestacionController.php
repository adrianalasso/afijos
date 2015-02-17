<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Subestacion;
use afijos\MainBundle\Form\SubestacionType;
use Symfony\Component\HttpFoundation\Response;
/**
 * Subestacion controller.
 *
 * @Route("/subestacion")
 */
class SubestacionController extends Controller
{
    /**
     * Lists all Subestacion entities.
     *
     * @Route("/", name="subestacion")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subestaciones = $em->getRepository('MainBundle:Subestacion')->findAll();    

        return array(
            'entities' =>$subestaciones             
                );
    }

    /**
     * Finds and displays a Subestacion entity.
     *
     * @Route("/{id}/show", name="subestacion_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Subestacion entity.
     *
     * @Route("/new", name="subestacion_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Subestacion();
        $form   = $this->createForm(new SubestacionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Subestacion entity.
     *
     * @Route("/create", name="subestacion_create")
     * @Method("POST")
     * @Template("MainBundle:Subestacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Subestacion();
        $form = $this->createForm(new SubestacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subestacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Subestacion entity.
     *
     * @Route("/{id}/edit", name="subestacion_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subestacion entity.');
        }

        $editForm = $this->createForm(new SubestacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Subestacion entity.
     *
     * @Route("/{id}/update", name="subestacion_update")
     * @Method("POST")
     * @Template("MainBundle:Subestacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Subestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subestacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SubestacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subestacion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Subestacion entity.
     *
     * @Route("/{id}/delete", name="subestacion_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Subestacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subestacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subestacion'));
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
        $subestaciones = $em->getRepository('MainBundle:Subestacion')->findAll();
        
        $subest=array();
        for($i=0;$i<count($subestaciones);$i++){
            $subest[$i]=array('id'=>$subestaciones[$i]->getId(),'nomb'=>$subestaciones[$i]->getNombSubestacion());
        }
        
        $return=json_encode($subest);
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }
    
    
    /**
     * Deletes a Subestacion entity.
     *
     * @Route("/{id}/eliminar", name="subestacion_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Subestacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subestacion entity.');
        }

        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('subestacion'));
    }
}
