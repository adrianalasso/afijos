<?php

/* MainBundle:Trabajador:new.html.twig */
class __TwigTemplate_a6f6941f07ace16005df3808ba344bd105f692c992d2e8f4c2c8897963d29e99 extends Twig_Template
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
        echo "Trabajadores";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador"), "html", null, true);
        echo "\">Trabajadores</a>
";
    }

    // line 10
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nuevo Usuario";
    }

    // line 11
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Trabajadores";
    }

    // line 12
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nuevo Usuario";
    }

    // line 14
    public function block_formulario($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Código</label>
    <div class=\"controls\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cedula</label>
    <div class=\"controls\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Apellidos</label>
    <div class=\"controls\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombres</label>
    <div class=\"controls\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Departamentos</label>
    <div class=\"controls\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja varias opciones..")));
        echo "
    </div>
</div>
";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    // line 48
    public function block_link($context, array $blocks = array())
    {
        // line 49
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador"), "html", null, true);
        echo "\"  
";
    }

    // line 51
    public function block_plugins($context, array $blocks = array())
    {
        // line 52
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 55
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 56
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mntrabajadores\");
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
        return "MainBundle:Trabajador:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  170 => 55,  163 => 52,  160 => 51,  153 => 49,  150 => 48,  144 => 46,  138 => 43,  129 => 37,  120 => 31,  111 => 25,  102 => 19,  92 => 15,  89 => 14,  83 => 12,  77 => 11,  71 => 10,  64 => 7,  61 => 6,  54 => 4,  51 => 3,  45 => 2,  11 => 1,);
    }
}
