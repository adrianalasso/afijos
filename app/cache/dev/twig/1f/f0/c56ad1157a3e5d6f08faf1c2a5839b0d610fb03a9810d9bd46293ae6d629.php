<?php

/* MainBundle:Canton:new.html.twig */
class __TwigTemplate_1ff0c56ad1157a3e5d6f08faf1c2a5839b0d610fb03a9810d9bd46293ae6d629 extends Twig_Template
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
        echo "Cantones";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\">Cantones</a>
";
    }

    // line 10
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nuevo Cantón";
    }

    // line 11
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Cantones";
    }

    // line 12
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nuevo Cantón";
    }

    // line 14
    public function block_formulario($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"afijos_lsubbundle_cantontype_nombCanton\">
            Provincia
        </label>
        <div class=\"controls\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
        </div>
</div>
<div class=\"control-group\">
        <label class=\"control-label\" for=\"afijos_lsubbundle_cantontype_nombCanton\">
            Nombre
        </label>
        <div class=\"controls\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\"  
";
    }

    // line 38
    public function block_plugins($context, array $blocks = array())
    {
        // line 39
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
   <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 43
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 44
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mncantones\");
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
        return "MainBundle:Canton:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 44,  150 => 43,  144 => 40,  140 => 39,  137 => 38,  130 => 35,  127 => 34,  121 => 32,  115 => 29,  104 => 21,  92 => 15,  89 => 14,  83 => 12,  77 => 11,  71 => 10,  64 => 7,  61 => 6,  54 => 4,  51 => 3,  45 => 2,  11 => 1,);
    }
}
