<?php

/* MainBundle:Subestacion:new.html.twig */
class __TwigTemplate_2e9e6cb8968c40c10cbf994919fdf6e217630062f2ad50439373dd17a803aae6 extends Twig_Template
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
            'entidad' => array($this, 'block_entidad'),
            'formulario' => array($this, 'block_formulario'),
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
    public function block_entidad($context, array $blocks = array())
    {
        // line 3
        echo "<i class=\"icon-bolt bolt-icon\"></i>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion"), "html", null, true);
        echo "\">Subestaciones</a>
";
    }

    // line 6
    public function block_formulario($context, array $blocks = array())
    {
        // line 7
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Descripción</label>
        <div class=\"controls\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget');
        echo "
        </div>
</div>
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 17
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 18
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnsubestaciones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Subestacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  75 => 17,  69 => 14,  63 => 11,  53 => 7,  50 => 6,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
