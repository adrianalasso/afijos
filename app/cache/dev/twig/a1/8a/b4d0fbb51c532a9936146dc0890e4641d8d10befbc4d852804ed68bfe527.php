<?php

/* MainBundle:Canton:edit.html.twig */
class __TwigTemplate_a18ab4d0fbb51c532a9936146dc0890e4641d8d10befbc4d852804ed68bfe527 extends Twig_Template
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
            'pluginstyle' => array($this, 'block_pluginstyle'),
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
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\">Cantones</a>
";
    }

    // line 11
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Editar Canton";
    }

    // line 12
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Cantones";
    }

    // line 13
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Canton";
    }

    // line 15
    public function block_formulario($context, array $blocks = array())
    {
        // line 16
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
<div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Provincia</label>
        <div class=\"controls\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provincia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
        </div>
</div>        
    <div class=\"control-group\">
        <label class=\"control-label\" for=\"\">Nombre</label>
        <div class=\"controls\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget');
        echo "
        </div>
</div>      
";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
";
    }

    // line 32
    public function block_link($context, array $blocks = array())
    {
        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\"  
";
    }

    // line 36
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 37
        echo "<a action=\"#\"
";
    }

    // line 40
    public function block_plugins($context, array $blocks = array())
    {
        // line 41
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
   <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 45
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 46
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mncantones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
    \$(\".chzn-select\").chosen(); 
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:Canton:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 58,  160 => 46,  157 => 45,  151 => 42,  147 => 41,  144 => 40,  139 => 37,  136 => 36,  129 => 33,  126 => 32,  120 => 29,  114 => 26,  105 => 20,  95 => 16,  92 => 15,  86 => 13,  80 => 12,  74 => 11,  68 => 8,  65 => 7,  62 => 6,  55 => 4,  52 => 3,  46 => 2,  11 => 1,);
    }
}
