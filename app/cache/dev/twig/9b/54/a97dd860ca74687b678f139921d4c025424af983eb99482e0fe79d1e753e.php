<?php

/* MainBundle:UnidadPropiedad:edit.html.twig */
class __TwigTemplate_9b54a97dd860ca74687b678f139921d4c025424af983eb99482e0fe79d1e753e extends Twig_Template
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
        echo "Unidades de Propiedad";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\">Unidades de Propiedad</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Editar Unidad de Propiedad";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Unidades de Propiedad";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Unidad de Propiedad";
    }

    // line 13
    public function block_formulario($context, array $blocks = array())
    {
        // line 14
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Código</label>
        <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
        </div>
</div>       
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cuenta de Activo</label>
    <div class=\"controls\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cuentActivo", array()), 'widget');
        echo "
    </div>
</div>     
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cuenta de Depreciación</label>
    <div class=\"controls\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cuentaDeprec", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Descripción</label>
    <div class=\"controls\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Índice Depreciable</label>
    <div class=\"controls\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "indiceDeprec", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Índice Residual</label>
    <div class=\"controls\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "indiceResidual", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Vida útil (años)</label>
    <div class=\"controls\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vidaUtilA", array()), 'widget');
        echo "
    </div>
</div>  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Vida útil (meses)</label>
    <div class=\"controls\">
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vidaUtilM", array()), 'widget');
        echo "
    </div>
</div>  
";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
";
    }

    // line 66
    public function block_link($context, array $blocks = array())
    {
        // line 67
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\"  
";
    }

    // line 70
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 71
        echo "<a action=\"#\"
";
    }

    // line 74
    public function block_plugins($context, array $blocks = array())
    {
        // line 75
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 78
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 79
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:UnidadPropiedad:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 90,  199 => 79,  196 => 78,  190 => 75,  187 => 74,  182 => 71,  179 => 70,  172 => 67,  169 => 66,  163 => 63,  157 => 60,  148 => 54,  139 => 48,  130 => 42,  121 => 36,  112 => 30,  103 => 24,  94 => 18,  84 => 14,  81 => 13,  75 => 11,  69 => 10,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  45 => 2,  11 => 1,);
    }
}
