<?php

/* MainBundle:Bajas:show.html.twig */
class __TwigTemplate_19c2aa8c0dddf5f4b4b06cfeb9a2f067c0e8ccabaccaeb019440f5b8760f8fbe extends Twig_Template
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
        echo "Baja de Activos";
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
        echo "            <i class=\"icon-bolt bolt-icon\"></i>
            <a href=\"#\">Baja de Activos</a>
            ";
    }

    // line 20
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo " Baja de Activos";
    }

    // line 25
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">
            <!--PAGE CONTENT BEGINS-->
            ";
        // line 30
        $this->displayBlock('widget', $context, $blocks);
        // line 145
        echo "            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 30
    public function block_widget($context, array $blocks = array())
    {
        // line 31
        echo "            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 33
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 34
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 35
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"profile-user-info profile-user-info-striped\">
                            <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Código </div>
                                    <div class=\"profile-info-value\">
                                            <span >
                                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "codigo", array()), "html", null, true);
        echo "
                                            </span>
                                    </div>
                                </div>

                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Descripción </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "descripcion", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Responsable </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Serie </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "serie", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Marca </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "marca", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Estado del bien </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "estado", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Estado de la Solicitud </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "     
                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Fecha solicitado </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 103
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaSolicitada", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaSolicitada", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        // line 104
        echo "                                        </span>
                                    </div>
                                </div>
                                <div class=\"profile-info-row\">
                                    <div class=\"profile-info-name\"> Fecha de aprobación </div>
                                    <div class=\"profile-info-value\">
                                        <span>
                                        ";
        // line 111
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAprobado", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAprobado", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        // line 112
        echo "                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class=\"center\">
                                <div class=\"well well-small\"> 
                                    <div class=\"center\">
                                        ";
        // line 120
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTIVO")) {
            // line 121
            echo "                                        <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abajas_imprimir", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" 
                                            class=\"btn btn-pink btn-small\">
                                            <i class=\"icon-print bigger-150\"></i>
                                            Imprimir
                                        </a>
                                        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_EMPADMIN")) {
            // line 127
            echo "                                        <a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas_imprimir", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" 
                                            class=\"btn btn-pink btn-small\">
                                            <i class=\"icon-print bigger-150\"></i>
                                            Imprimir
                                        </a>
                                        ";
        }
        // line 133
        echo "                                        <a  href=\"../\" 
                                            class=\"btn btn-default btn-small\">
                                            <i class=\"icon-undo bigger-150\"></i>
                                            Regresar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           
            ";
    }

    // line 33
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Baja de Activos";
    }

    // line 35
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo " Baja de Activos";
    }

    // line 151
    public function block_plugins($context, array $blocks = array())
    {
        // line 152
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 155
    public function block_script($context, array $blocks = array())
    {
        // line 156
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 157
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
        // line 158
        echo "<script type=\"text/javascript\">
window.onload = function(){
    ";
        // line 160
        if ($this->env->getExtension('security')->isGranted("ROLE_DIRECTIVO")) {
            // line 161
            echo "    var elemento=document.getElementById(\"mnabajas\");
    ";
        } else {
            // line 163
            echo "    var elemento=document.getElementById(\"mnbajas\");
    ";
        }
        // line 165
        echo "    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 165,  329 => 163,  325 => 161,  323 => 160,  319 => 158,  313 => 157,  309 => 156,  306 => 155,  299 => 152,  296 => 151,  290 => 35,  284 => 33,  269 => 133,  259 => 127,  249 => 121,  247 => 120,  237 => 112,  233 => 111,  224 => 104,  220 => 103,  209 => 95,  198 => 87,  187 => 79,  176 => 71,  165 => 63,  154 => 55,  142 => 46,  128 => 35,  125 => 34,  123 => 33,  119 => 31,  116 => 30,  108 => 145,  106 => 30,  100 => 26,  97 => 25,  91 => 20,  85 => 15,  82 => 14,  74 => 20,  70 => 18,  68 => 14,  61 => 10,  55 => 6,  52 => 5,  46 => 3,  11 => 1,);
    }
}
