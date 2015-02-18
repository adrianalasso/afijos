<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_cfcdb148be1f102a622578448326f578e2300579de6c8d0cb25a0cff849853e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Página principal | SICACNEL";
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Página principal</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 18
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Página Principal<small><i class=\"icon-double-angle-right\"></i>Información general</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <div class=\"alert alert-block alert-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"icon-remove\"></i></button>
                <i class=\"icon-ok green\"></i> Bienvenido a <strong class=\"green\">SICACNEL <small>(v1.0)</small></strong>
                ,el lugar para administrar fácilmente tu sitio web.
            </div>
            <div class=\"space-6\"></div>
            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 39
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 41
    public function block_script($context, array $blocks = array())
    {
        // line 42
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mninicio\");
        elemento.classList.add('active');
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  96 => 41,  91 => 39,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
