<?php

namespace afijos\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use afijos\MainBundle\Entity\Usuario;

class DefaultController extends Controller
{    
    public function indexAction(){
        return $this->render('MainBundle:Default:index.html.twig', array());
    }
    
    public function loginAction(){
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
        SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
        return $this->render('MainBundle:Default:login.html.twig', array(
        'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
        'error' => $error
        ));
    }
    
}
