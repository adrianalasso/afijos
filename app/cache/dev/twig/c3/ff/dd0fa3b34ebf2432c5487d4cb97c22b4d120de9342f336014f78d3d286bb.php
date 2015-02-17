<?php

/* MainBundle:Rol:new.html.twig */
class __TwigTemplate_c3ffdd0fa3b34ebf2432c5487d4cb97c22b4d120de9342f336014f78d3d286bb extends Twig_Template
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
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'formulario' => array($this, 'block_formulario'),
            'link' => array($this, 'block_link'),
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
        echo "Roles";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\">Roles</a>
";
    }

    // line 8
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nuevo Rol";
    }

    // line 9
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Roles";
    }

    // line 10
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nuevo Rol";
    }

    // line 12
    public function block_formulario($context, array $blocks = array())
    {
        // line 13
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">
            Nombre
        </label>
        <div class=\"controls\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
        </div>
</div>
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 29
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mnroles\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Rol:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  114 => 28,  107 => 25,  104 => 24,  98 => 22,  92 => 19,  80 => 13,  77 => 12,  71 => 10,  65 => 9,  59 => 8,  52 => 5,  49 => 4,  43 => 2,  11 => 1,);
    }
}
