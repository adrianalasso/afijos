<?php

/* MainBundle:Rol:edit.html.twig */
class __TwigTemplate_53f7fc958b010d9b97511f770d3581a1c2e510efe18ca9ddee921fb8fafc5a56 extends Twig_Template
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
        echo "Roles";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\">Roles</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Editar Rol";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Roles";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Rol";
    }

    // line 13
    public function block_formulario($context, array $blocks = array())
    {
        // line 14
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombre</label>
    <div class=\"controls\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "nombre", array()), 'widget');
        echo "
    </div>
</div>        
";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
";
    }

    // line 24
    public function block_link($context, array $blocks = array())
    {
        // line 25
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\"  
";
    }

    // line 28
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 29
        echo "<a action=\"#\"
";
    }

    // line 32
    public function block_plugins($context, array $blocks = array())
    {
        // line 33
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 36
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 37
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnroles\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
        bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
            if(result){
                location.href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MainBundle:Rol:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  136 => 37,  133 => 36,  127 => 33,  124 => 32,  119 => 29,  116 => 28,  109 => 25,  106 => 24,  100 => 21,  94 => 18,  84 => 14,  81 => 13,  75 => 11,  69 => 10,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  45 => 2,  11 => 1,);
    }
}
