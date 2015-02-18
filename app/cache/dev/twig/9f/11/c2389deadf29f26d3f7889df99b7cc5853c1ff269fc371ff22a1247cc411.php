<?php

/* MainBundle:Departamento:new.html.twig */
class __TwigTemplate_9f11c2389deadf29f26d3f7889df99b7cc5853c1ff269fc371ff22a1247cc411 extends Twig_Template
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
        echo "Departamentos";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento"), "html", null, true);
        echo "\">Departamentos</a>
";
    }

    // line 10
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nuevo Departamento";
    }

    // line 11
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Departamentos";
    }

    // line 12
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nuevo Departamento";
    }

    // line 14
    public function block_formulario($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">
            Dirección
        </label>
        <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subsistema", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "
        </div>
</div>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    // line 34
    public function block_link($context, array $blocks = array())
    {
        // line 35
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento"), "html", null, true);
        echo "\"  
";
    }

    // line 37
    public function block_plugins($context, array $blocks = array())
    {
        // line 38
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
   <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 41
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 42
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mndepartamentos\");
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
        return "MainBundle:Departamento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  150 => 41,  144 => 39,  140 => 38,  137 => 37,  130 => 35,  127 => 34,  121 => 32,  115 => 29,  104 => 21,  92 => 15,  89 => 14,  83 => 12,  77 => 11,  71 => 10,  64 => 7,  61 => 6,  54 => 4,  51 => 3,  45 => 2,  11 => 1,);
    }
}
