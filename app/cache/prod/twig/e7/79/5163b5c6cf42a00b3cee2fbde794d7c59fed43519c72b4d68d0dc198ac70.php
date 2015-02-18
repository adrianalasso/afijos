<?php

/* MainBundle:Bajas:new.html.twig */
class __TwigTemplate_e7795163b5c6cf42a00b3cee2fbde794d7c59fed43519c72b4d68d0dc198ac70 extends Twig_Template
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
        echo "Baja de Activos";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/chosen.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_entidad($context, array $blocks = array())
    {
        // line 7
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas"), "html", null, true);
        echo "\">Baja de Activos</a>
";
    }

    // line 10
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nueva Baja";
    }

    // line 11
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Baja de Activos";
    }

    // line 12
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nueva Baja";
    }

    // line 14
    public function block_formulario($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">
            Activo
        </label>
        <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "bienesCustodio", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
        </div>
</div>
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">
        Descripción
    </label>
    <div class=\"controls\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">
        Detalle
    </label>
    <div class=\"controls\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "detalle", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 42
    public function block_link($context, array $blocks = array())
    {
        // line 43
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas"), "html", null, true);
        echo "\"  
";
    }

    // line 46
    public function block_plugins($context, array $blocks = array())
    {
        // line 47
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
   <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 51
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 52
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mnbajas\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');
        \$(\".chzn-select\").chosen(); 
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 52,  161 => 51,  155 => 48,  151 => 47,  148 => 46,  141 => 43,  138 => 42,  132 => 40,  126 => 37,  115 => 29,  104 => 21,  92 => 15,  89 => 14,  83 => 12,  77 => 11,  71 => 10,  64 => 7,  61 => 6,  54 => 4,  51 => 3,  45 => 2,  11 => 1,);
    }
}
