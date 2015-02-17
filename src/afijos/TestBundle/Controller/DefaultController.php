<?php

namespace AFijos\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle::index.html.twig', array());
    }
    
    public function blancoAction()
    {
        return $this->render('TestBundle:Default:blanco.html.twig', array());
    }
    public function buttonsAction()
    {
        return $this->render('TestBundle:Default:buttons.html.twig', array());
    }
    public function calendarioAction()
    {
        return $this->render('TestBundle:Default:calendario.html.twig', array());
    }
    public function elementsAction()
    {
        return $this->render('TestBundle:Default:elements.html.twig', array());
    }
    public function error4Action()
    {
        return $this->render('TestBundle:Default:error4.html.twig', array());
    }
    public function error5Action()
    {
        return $this->render('TestBundle:Default:error5.html.twig', array());
    }
    public function formsAction()
    {
        return $this->render('TestBundle:Default:forms.html.twig', array());
    }    
    public function frmwizardAction()
    {
        return $this->render('TestBundle:Default:frmwizard.html.twig', array());
    }
    public function galeriaAction()
    {
        return $this->render('TestBundle:Default:gallery.html.twig', array());
    }
    public function gridAction()
    {
        return $this->render('TestBundle:Default:grid.html.twig', array());
    }
    public function facturaAction()
    {
        return $this->render('TestBundle:Default:factura.html.twig', array());
    }    
    public function loginAction()
    {
        return $this->render('TestBundle::login.html.twig', array());
    }
    public function tbprecioAction()
    {
        return $this->render('TestBundle:Default:tbprecio.html.twig', array());
    }
    public function uperfilAction()
    {
        return $this->render('TestBundle:Default:uperfil.html.twig', array());
    }
    public function tablasAction()
    {
        return $this->render('TestBundle:Default:tablas.html.twig', array());
    }    
    public function treeviewAction()
    {
        return $this->render('TestBundle:Default:arbol.html.twig', array());
    }
    public function tipografiaAction()
    {
        return $this->render('TestBundle:Default:tipografia.html.twig', array());
    }
    public function widgetsAction()
    {
        return $this->render('TestBundle:Default:widgets.html.twig', array());
    }
    public function wysiwygAction()
    {
        return $this->render('TestBundle:Default:wysiwyg.html.twig', array());
    }
    
    
    public function pruebachAction()
    {
        return $this->render('TestBundle:Default:pruebach.html.twig', array());
    }
}
