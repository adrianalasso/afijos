<?php

/* MainBundle:Usuario:editperfil.html.twig */
class __TwigTemplate_e95b860be5bb9f5b4e4dbc551dfe19b7ce1df6a13b41bf874e567eab5fc0c50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'formulario' => array($this, 'block_formulario'),
            'link' => array($this, 'block_link'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            ";
        // line 14
        $this->displayBlock('entidad', $context, $blocks);
        // line 18
        echo "            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>        
        <li class=\"active\">";
        // line 20
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>             
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 14
    public function block_entidad($context, array $blocks = array())
    {
        // line 15
        echo "            <i class=\"icon-user user-icon\"></i>
            <a href=\"#\">Usuarios</a>
            ";
    }

    // line 20
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Editar Perfil";
    }

    // line 25
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">            
            <!--PAGE CONTENT BEGINS-->
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 32
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 33
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 34
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"form-horizontal\">
                                ";
        // line 41
        $this->displayBlock('formulario', $context, $blocks);
        // line 44
        echo "                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Cedula</label>
                                        <div class=\"controls\">
                                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                        </div>
                                    </div>        
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Apellidos</label>
                                        <div class=\"controls\">
                                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'widget');
        echo "
                                        </div>
                                    </div>        
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Nombres</label>
                                        <div class=\"controls\">
                                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombres", array()), 'widget');
        echo "
                                        </div>
                                    </div>       
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Nombre de usuario</label>
                                        <div class=\"controls\">
                                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
                                        </div>
                                    </div>        
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                                      <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                            <button class=\"btn btn-small btn-success\" type=\"submit\">
                                                <i class=\"icon-save bigger-150\"></i>
                                                        Actualizar
                                            </button>
                                            ";
        // line 75
        $this->displayBlock('link', $context, $blocks);
        // line 78
        echo "                                                class=\"btn btn-grey btn-small\">
                                               <i class=\"icon-undo bigger-150\"></i>
                                               Regresar
                                           </a>
                                        </div>
                                    </div>                                         
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!--PAGE CONTENT ENDS-->            
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 32
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 34
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Perfil";
    }

    // line 41
    public function block_formulario($context, array $blocks = array())
    {
        // line 42
        echo "                                 <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_updateperfil", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                                    ";
    }

    // line 75
    public function block_link($context, array $blocks = array())
    {
        // line 76
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"  
                                            ";
    }

    // line 94
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 96
    public function block_script($context, array $blocks = array())
    {
        // line 97
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 98
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle:Usuario:editperfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 98,  237 => 97,  234 => 96,  229 => 94,  222 => 76,  219 => 75,  210 => 42,  207 => 41,  201 => 34,  195 => 32,  176 => 78,  174 => 75,  164 => 68,  158 => 65,  149 => 59,  140 => 53,  131 => 47,  126 => 44,  124 => 41,  114 => 34,  111 => 33,  109 => 32,  101 => 26,  98 => 25,  92 => 20,  86 => 15,  83 => 14,  75 => 20,  71 => 18,  69 => 14,  62 => 10,  56 => 6,  53 => 5,  47 => 3,  11 => 1,);
    }
}
