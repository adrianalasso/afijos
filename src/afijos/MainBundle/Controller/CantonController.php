<?php

namespace afijos\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use afijos\MainBundle\Entity\Canton;
use Symfony\Component\HttpFoundation\Response;
use afijos\MainBundle\Form\CantonType;

/**
 * Canton controller.
 *
 * @Route("/canton")
 */
class CantonController extends Controller
{
    /**
     * Lists all Canton entities.
     *
     * @Route("/", name="canton")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MainBundle:Canton')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Canton entity.
     *
     * @Route("/{id}/show", name="canton_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Canton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Canton entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Canton entity.
     *
     * @Route("/new", name="canton_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Canton();
        $form   = $this->createForm(new CantonType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Canton entity.
     *
     * @Route("/create", name="canton_create")
     * @Method("POST")
     * @Template("MainBundle:Canton:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Canton();
        $form = $this->createForm(new CantonType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('canton_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Canton entity.
     *
     * @Route("/{id}/edit", name="canton_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Canton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Canton entity.');
        }

        $editForm = $this->createForm(new CantonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Canton entity.
     *
     * @Route("/{id}/update", name="canton_update")
     * @Method("POST")
     * @Template("MainBundle:Canton:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MainBundle:Canton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Canton entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CantonType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('canton_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Canton entity.
     *
     * @Route("/{id}/delete", name="canton_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MainBundle:Canton')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Canton entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('canton'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function buscarCantonesAction(){
        $peticion = $this->getRequest();
        $prov=$peticion->request->get('prov');
        $em = $this->getDoctrine()->getManager();
        $cantones = $em->getRepository('MainBundle:Canton') ->findBy(
                array('provincia'=>$prov)
                );        
        return $this->render('MainBundle:Canton:buscarCantones.html.twig', 
            array('cantones'=>$cantones)
        );
    }
    
    public function listarCantonesAction()
    {
        $peticion = $this->getRequest();
        $prov=$peticion->request->get('prov');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MainBundle:Canton')->findBy(array('provincia'=>$prov));        
        $cantones=array();
        
        for($i=0;$i<count($entities);$i++){
            $cantones[$i]=array('id'=>$entities[$i]->getId(),'nomb'=>$entities[$i]->getNombCanton());
        }        
        $return=json_encode($cantones);
        return new Response($return,200,array('Content-Type'=>'application/json'));
    }
    
    /**
     * Deletes a Canton entity.
     *
     * @Route("/{id}/eliminar", name="canton_eliminar")
     * @Method("POST")
     */
    public function eliminarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MainBundle:Canton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Canton entity.');
        }

        $em->remove($entity);
        $em->flush();
      
        return $this->redirect($this->generateUrl('canton'));
    }
}
