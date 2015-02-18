<?php

/* MainBundle::show.html.twig */
class __TwigTemplate_06350d16796007b7887489ffe496193d28a41c33be33dc0e7f252f6e57ef8536 extends Twig_Template
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
            'widget' => array($this, 'block_widget'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'datos' => array($this, 'block_datos'),
            'linkeliminar' => array($this, 'block_linkeliminar'),
            'linkedit' => array($this, 'block_linkedit'),
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
        echo "Subestaciones";
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
            <i class=\"icon-cogs cogs-icon\"></i>
            <a href=\"#\">Configuración</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            ";
        // line 19
        $this->displayBlock('entidad', $context, $blocks);
        // line 23
        echo "            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>        
        <li class=\"active\">";
        // line 25
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>             
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 19
    public function block_entidad($context, array $blocks = array())
    {
        // line 20
        echo "            <i class=\"icon-bolt bolt-icon\"></i>
            <a href=\"#\">Subestaciones</a>
            ";
    }

    // line 25
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Subestación";
    }

    // line 30
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">
            <!--PAGE CONTENT BEGINS-->
            ";
        // line 35
        $this->displayBlock('widget', $context, $blocks);
        // line 99
        echo "            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 35
    public function block_widget($context, array $blocks = array())
    {
        // line 36
        echo "            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 38
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 39
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 40
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"profile-user-info profile-user-info-striped\">
                            ";
        // line 47
        $this->displayBlock('datos', $context, $blocks);
        // line 66
        echo "                            </div>
                            <br>
                            <div class=\"center\">
                                    <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                                ";
        // line 71
        $this->displayBlock('linkeliminar', $context, $blocks);
        // line 74
        echo "                                                   class=\"btn  btn-danger btn-small\" id=\"bteliminar\">
                                                    <i class=\"icon-trash bigger-150\"></i>
                                                    Dar de baja</a>
                                                ";
        // line 77
        $this->displayBlock('linkedit', $context, $blocks);
        // line 80
        echo "                                                    class=\"btn btn-primary btn-small\" id=\"bteditar\">
                                                    <i class=\"icon-edit bigger-150\"></i>
                                                    Editar
                                                </a>
                                                 ";
        // line 84
        $this->displayBlock('link', $context, $blocks);
        // line 87
        echo "                                                   class=\"btn  btn-grey btn-small\" id=\"btregresar\">
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
            ";
    }

    // line 38
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Subestaciones";
    }

    // line 40
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Subestación";
    }

    // line 47
    public function block_datos($context, array $blocks = array())
    {
        echo "    
                            <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Código </div>
                                        <div class=\"profile-info-value\">
                                                <span >
                                                    ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "
                                                </span>
                                        </div>
                                </div>

                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Nombre </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombSubestacion", array()), "html", null, true);
        echo "     
                                            </span>
                                        </div>
                                </div>                                 
                            ";
    }

    // line 71
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 72
        echo "                                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
                                                     ";
    }

    // line 77
    public function block_linkedit($context, array $blocks = array())
    {
        // line 78
        echo "                                                <a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
                                                     ";
    }

    // line 84
    public function block_link($context, array $blocks = array())
    {
        // line 85
        echo "                                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion"), "html", null, true);
        echo "\"
                                                ";
    }

    // line 105
    public function block_plugins($context, array $blocks = array())
    {
        // line 106
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 109
    public function block_script($context, array $blocks = array())
    {
        // line 110
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 111
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle::show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 111,  273 => 110,  270 => 109,  263 => 106,  260 => 105,  253 => 85,  250 => 84,  243 => 78,  240 => 77,  233 => 72,  230 => 71,  221 => 61,  209 => 52,  200 => 47,  194 => 40,  188 => 38,  173 => 87,  171 => 84,  165 => 80,  163 => 77,  158 => 74,  156 => 71,  149 => 66,  147 => 47,  137 => 40,  134 => 39,  132 => 38,  128 => 36,  125 => 35,  117 => 99,  115 => 35,  109 => 31,  106 => 30,  100 => 25,  94 => 20,  91 => 19,  83 => 25,  79 => 23,  77 => 19,  65 => 10,  59 => 6,  56 => 5,  50 => 3,  11 => 1,);
    }
}
