<?php

/* MainBundle:CuentaContable:new.html.twig */
class __TwigTemplate_1f4166da881fe13fb93cea54d7f480a620f345badccf2d79c95754f2899578cf extends Twig_Template
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
        echo "Cuentas Contables";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable"), "html", null, true);
        echo "\">Cuentas Contables</a>
";
    }

    // line 8
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nueva Cuenta Contable";
    }

    // line 9
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Cuentas Contables";
    }

    // line 10
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nueva Cuenta Contable";
    }

    // line 12
    public function block_formulario($context, array $blocks = array())
    {
        // line 13
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">
            Código
        </label>
        <div class=\"controls\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
        </div>
</div>
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">
            Descripción
        </label>
        <div class=\"controls\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "
        </div>
</div>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    // line 32
    public function block_link($context, array $blocks = array())
    {
        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable"), "html", null, true);
        echo "\"  
";
    }

    // line 36
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 37
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mncuentacontables\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:CuentaContable:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  125 => 36,  118 => 33,  115 => 32,  109 => 30,  103 => 27,  92 => 19,  80 => 13,  77 => 12,  71 => 10,  65 => 9,  59 => 8,  52 => 5,  49 => 4,  43 => 2,  11 => 1,);
    }
}
