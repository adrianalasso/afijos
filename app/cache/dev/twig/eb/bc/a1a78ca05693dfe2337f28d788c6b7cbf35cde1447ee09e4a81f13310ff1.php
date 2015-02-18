<?php

/* MainBundle:BienesCustodio:import.html.twig */
class __TwigTemplate_ebbca1a78ca05693dfe2337f28d788c6b7cbf35cde1447ee09e4a81f13310ff1 extends Twig_Template
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
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
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
        echo "Bienes en Custodio";
    }

    // line 5
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/chosen.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            <i class=\"icon-exchange exchange-icon\"></i>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\">Bienes en Custodio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Importar bienes</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 27
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Importar bienes</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->    
            <form action=\"/afijos/web/bundles/afijos/importarbienes.php\" enctype=\"multipart/form-data\" method=\"post\" ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class='form-horizontal'>
                            <div class=\"row-fluid\">
                                <div class=\"span6\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Agencia</label>
                                        <div class=\"controls\">
                                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Cantón</label>
                                        <div class=\"controls\">
                                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "canton", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Área Operativa</label>
                                        <div class=\"controls\">
                                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaOperativa", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Cuenta Contable</label>
                                        <div class=\"controls\">
                                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentaContable", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"span6\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Plan o Programa</label>
                                        <div class=\"controls\">
                                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plan", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Dependencia</label>
                                        <div class=\"controls\">
                                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dependencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"space-10\"></div>
                                </div>
                            </div>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class='space-10'></div>                
                ";
        // line 81
        echo "                                    
                <div class=\"control-group\">
                        <label class=\"control-label\" for=\"form-field-1\">Archivo Excel</label>
                        <div class=\"controls\">
                                <input type=\"file\" name=\"excel\" id=\"archivo\" />
                        </div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span2\"></div>
                    <div class=\"span6\">
                        <div class=\"well well-small\"> 
                            <div class=\"center\">
                                <button class=\"btn btn-small btn-success\" type=\"submit\">
                                    <i class=\"icon-link bigger-150\"></i>
                                    Importar
                                </button>                                                    
                                <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\"  class=\"btn btn-small btn-grey\">
                                    <i class=\"icon-undo bigger-150\"></i>
                                    Regresar
                                </a>     
                            </div>
                        </div>                    
                    </div>
                </div>            
                <!--PAGE CONTENT ENDS-->
            </form>
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 112
    public function block_plugins($context, array $blocks = array())
    {
        // line 113
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 117
    public function block_script($context, array $blocks = array())
    {
        // line 118
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var elemento=document.getElementById(\"mnbienes\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');                
        \$('#afijos_bienescustodioimportype_agencia').attr('name', 'impagencia');
        \$('#afijos_bienescustodioimportype_canton').attr('name', 'impcanton');
        \$('#afijos_bienescustodioimportype_areaOperativa').attr('name', 'imparea');
        \$('#afijos_bienescustodioimportype_cuentaContable').attr('name', 'impcuenta');
        \$('#afijos_bienescustodioimportype_plan').attr('name', 'implan');
        \$('#afijos_bienescustodioimportype_dependencia').attr('name', 'impdependencia');        
    });
    \$(function() {
        \$(\".chzn-select\").chosen(); 
        \$('textarea[class*=autosize]').autosize({append: \"\\n\"});
    });    
    \$(\"#archivo\").ace_file_input({
        no_file:'No hay archivo ...',
        btn_choose:'Escoja',
        btn_change:'Cambiar',
        droppable:false,
        onchange:null,
        thumbnail:true //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });\t
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:BienesCustodio:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 118,  217 => 117,  211 => 114,  206 => 113,  203 => 112,  185 => 97,  167 => 81,  162 => 79,  153 => 73,  144 => 67,  133 => 59,  124 => 53,  115 => 47,  106 => 41,  97 => 35,  88 => 28,  85 => 27,  74 => 19,  66 => 14,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
