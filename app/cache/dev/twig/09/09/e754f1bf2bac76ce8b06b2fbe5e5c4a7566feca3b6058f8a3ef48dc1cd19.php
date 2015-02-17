<?php

/* MainBundle:Usuario:edit.html.twig */
class __TwigTemplate_0909e754f1bf2bac76ce8b06b2fbe5e5c4a7566feca3b6058f8a3ef48dc1cd19 extends Twig_Template
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
        echo "Usuarios";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\">Usuarios</a>
";
    }

    // line 11
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Editar Usuario";
    }

    // line 12
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 13
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Editar Usuario";
    }

    // line 15
    public function block_formulario($context, array $blocks = array())
    {
        // line 16
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">  
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cedula</label>
    <div class=\"controls\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "id", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Apellidos</label>
    <div class=\"controls\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombres</label>
    <div class=\"controls\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombres", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Roles</label>
    <div class=\"controls\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userRoles", array()), 'widget', array("attr" => array("multiple" => "multiple", "class" => "chzn-select input-large", "data-placeholder" => "Escoja varias opciones..")));
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombre de usuario</label>
    <div class=\"controls\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Contraseña</label>
    <div class=\"controls\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'widget');
        echo "
    </div>
</div>            
<div class=\"control-group\">
   <label class=\"control-label\" for=\"\">Confirmar Contraseña</label>
   <div class=\"controls\">
       <input type=\"password\" id=\"pass\"/>
   </div>
</div>      
";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
";
    }

    // line 62
    public function block_link($context, array $blocks = array())
    {
        // line 63
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\"  
";
    }

    // line 66
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 67
        echo "<a action=\"#\"
";
    }

    // line 70
    public function block_plugins($context, array $blocks = array())
    {
        // line 71
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 74
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 75
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnusuarios\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
    \$(\"#afijos_ustype_password\").get(0).type = 'password';    
    \$(\".chzn-select\").chosen(); 
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 88,  202 => 75,  199 => 74,  193 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  171 => 63,  168 => 62,  162 => 59,  150 => 50,  141 => 44,  132 => 38,  123 => 32,  114 => 26,  105 => 20,  95 => 16,  92 => 15,  86 => 13,  80 => 12,  74 => 11,  68 => 8,  65 => 7,  62 => 6,  55 => 4,  52 => 3,  46 => 2,  11 => 1,);
    }
}
