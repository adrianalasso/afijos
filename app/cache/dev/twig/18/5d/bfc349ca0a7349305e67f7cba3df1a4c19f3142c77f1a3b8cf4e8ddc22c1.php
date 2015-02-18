<?php

/* MainBundle:UnidadPropiedad:new.html.twig */
class __TwigTemplate_185dbfc349ca0a7349305e67f7cba3df1a4c19f3142c77f1a3b8cf4e8ddc22c1 extends Twig_Template
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
        echo "Unidades de Propiedad";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\">Unidades de Propiedad</a>
";
    }

    // line 8
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nuevo Unidad de Propiedad";
    }

    // line 9
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Unidades de Propiedad";
    }

    // line 10
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nuevo Unidad de Propiedad";
    }

    // line 12
    public function block_formulario($context, array $blocks = array())
    {
        // line 13
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Código</label>
        <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
        </div>
</div>       
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cuenta de Activo</label>
    <div class=\"controls\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentActivo", array()), 'widget');
        echo "
    </div>
</div>     
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cuenta de Depreciación</label>
    <div class=\"controls\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentaDeprec", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Descripción</label>
    <div class=\"controls\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Índice Depreciable</label>
    <div class=\"controls\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indiceDeprec", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Índice Residual</label>
    <div class=\"controls\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "indiceResidual", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Vida útil (años)</label>
    <div class=\"controls\">
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vidaUtilA", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Vida útil (meses)</label>
    <div class=\"controls\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vidaUtilM", array()), 'widget');
        echo "
    </div>
</div>  
";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    // line 64
    public function block_link($context, array $blocks = array())
    {
        // line 65
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\"  
";
    }

    // line 68
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 69
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mnunidadpropiedades\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:UnidadPropiedad:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  175 => 68,  168 => 65,  165 => 64,  159 => 62,  153 => 59,  144 => 53,  135 => 47,  126 => 41,  117 => 35,  108 => 29,  99 => 23,  90 => 17,  80 => 13,  77 => 12,  71 => 10,  65 => 9,  59 => 8,  52 => 5,  49 => 4,  43 => 2,  11 => 1,);
    }
}