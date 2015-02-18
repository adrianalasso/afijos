<?php

/* MainBundle:UnidadPropiedad:show.html.twig */
class __TwigTemplate_1cecd1be6d582603e0edf327468d29cdab67de0ab680f63f4233a97c4767603e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::show.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'datos' => array($this, 'block_datos'),
            'linkeliminar' => array($this, 'block_linkeliminar'),
            'link' => array($this, 'block_link'),
            'linkedit' => array($this, 'block_linkedit'),
            'plugins' => array($this, 'block_plugins'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Unidad de Propiedad";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\">Unidad de Propiedad</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Unidad de Propiedad";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Unidades de Propiedad";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Unidad de Propiedad";
    }

    // line 14
    public function block_datos($context, array $blocks = array())
    {
        echo "    
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Código </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Cuenta de Activo </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuentActivo", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>        
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Cuenta de Depreciación </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuentaDeprec", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Descripción </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>    
<div class=\"profile-info-row\" style=\"height:50px\">
        <div class=\"profile-info-name\"  heigth=\"100px\">  Índice Depreciable </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "indiceDeprec", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Índice Residual </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "indiceResidual", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>    
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Vida útil (años) </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vidaUtilA", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Vida útil (meses) </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "vidaUtilM", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>    
";
    }

    // line 80
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 81
        echo "<a href=\"#\"
";
    }

    // line 83
    public function block_link($context, array $blocks = array())
    {
        // line 84
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\"
";
    }

    // line 86
    public function block_linkedit($context, array $blocks = array())
    {
        // line 87
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 90
    public function block_plugins($context, array $blocks = array())
    {
        // line 91
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 94
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 95
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnunidadpropiedades\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\";
                    }
            });
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:UnidadPropiedad:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 106,  217 => 95,  214 => 94,  208 => 91,  205 => 90,  198 => 87,  195 => 86,  188 => 84,  185 => 83,  180 => 81,  177 => 80,  168 => 75,  157 => 67,  146 => 59,  135 => 51,  124 => 43,  113 => 35,  102 => 27,  91 => 19,  82 => 14,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
