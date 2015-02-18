<?php

/* MainBundle:Subtransmision:edit.html.twig */
class __TwigTemplate_2bca2a8a5e28e8e88b7f903354a6283e7af39c2c75c07e7b4d3123be21b716fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::edit.html.twig");
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
            'formulario' => array($this, 'block_formulario'),
            'link' => array($this, 'block_link'),
            'linkeliminar' => array($this, 'block_linkeliminar'),
            'plugins' => array($this, 'block_plugins'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::edit.html.twig";
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
        echo "Editar Línea de Subtransmisión";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Líneas de Subtransmisión";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Línea";
    }

    // line 13
    public function block_formulario($context, array $blocks = array())
    {
        // line 14
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Subestación de Llegada</label>
        <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "subestacionSalida", array()), 'widget', array("attr" => array("data-original-title" => "Escoja una subestación de salida")));
        echo "
        </div>
</div>
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Subestación de Salida</label>
        <div class=\"controls\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "subestacionLlegada", array()), 'widget');
        echo "
        </div>
</div>        
";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
";
    }

    // line 30
    public function block_link($context, array $blocks = array())
    {
        // line 31
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\"  
";
    }

    // line 34
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 35
        echo "<a href=\"#\" 
";
    }

    // line 38
    public function block_plugins($context, array $blocks = array())
    {
        // line 39
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
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
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:Subtransmision:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 54,  145 => 43,  142 => 42,  136 => 39,  133 => 38,  128 => 35,  125 => 34,  118 => 31,  115 => 30,  109 => 27,  103 => 24,  94 => 18,  84 => 14,  81 => 13,  75 => 11,  69 => 10,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  45 => 2,  11 => 1,);
    }
}
