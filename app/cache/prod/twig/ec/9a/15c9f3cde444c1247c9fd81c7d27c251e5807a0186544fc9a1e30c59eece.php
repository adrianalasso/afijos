<?php

/* MainBundle:Subtransmision:new.html.twig */
class __TwigTemplate_ec9a15c9f3cde444c1247c9fd81c7d27c251e5807a0186544fc9a1e30c59eece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::new.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'formulario' => array($this, 'block_formulario'),
            'link' => array($this, 'block_link'),
            'plugins' => array($this, 'block_plugins'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::new.html.twig";
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
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/chosen.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_entidad($context, array $blocks = array())
    {
        // line 9
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\">Líneas de Subtransmisión</a>
";
    }

    // line 13
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nueva Línea de Subtransmisión";
    }

    // line 14
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Líneas de Subtransmisión";
    }

    // line 15
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nueva Línea";
    }

    // line 17
    public function block_formulario($context, array $blocks = array())
    {
        // line 18
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Subestación de Llegada</label>
        <div class=\"controls\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subestacionSalida", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
        </div>
</div>
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Subestación de Salida</label>
        <div class=\"controls\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subestacionLlegada", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
        </div>
</div>        
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 34
    public function block_link($context, array $blocks = array())
    {
        // line 35
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\"  
";
    }

    // line 38
    public function block_plugins($context, array $blocks = array())
    {
        // line 39
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 42
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 43
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnsubtransmisiones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
        \$(\".chzn-select\").chosen(); 
    });    
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Subtransmision:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  145 => 42,  138 => 39,  135 => 38,  128 => 35,  125 => 34,  119 => 31,  113 => 28,  104 => 22,  94 => 18,  91 => 17,  85 => 15,  79 => 14,  73 => 13,  67 => 10,  64 => 9,  61 => 8,  54 => 5,  51 => 4,  45 => 2,  11 => 1,);
    }
}
