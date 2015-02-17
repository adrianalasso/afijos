<?php

/* MainBundle:Subtransmision:show.html.twig */
class __TwigTemplate_d087dd87cf35336bdd29687aa8ecc61cad32d48cd87fbd8ce10fb753d6dc4d57 extends Twig_Template
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
        echo "Líneas de Subtransmisión";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\">Líneas de Subtransmisión</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Línea de Subtransmisión";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Líneas de Subtransmisión";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Línea";
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
            <div class=\"profile-info-name\"> Descripción </div>
            <div class=\"profile-info-value\">
                <span>
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subestacionSalida", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subestacionLlegada", array()), "html", null, true);
        echo "
                </span>
            </div>
    </div>                                 
";
    }

    // line 33
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 34
        echo "<a href=\"#\" 
";
    }

    // line 36
    public function block_link($context, array $blocks = array())
    {
        // line 37
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\"
";
    }

    // line 39
    public function block_linkedit($context, array $blocks = array())
    {
        // line 40
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 43
    public function block_plugins($context, array $blocks = array())
    {
        // line 44
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 48
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnsubtransmisiones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MainBundle:Subtransmision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  154 => 48,  151 => 47,  145 => 44,  142 => 43,  135 => 40,  132 => 39,  125 => 37,  122 => 36,  117 => 34,  114 => 33,  103 => 28,  91 => 19,  82 => 14,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}