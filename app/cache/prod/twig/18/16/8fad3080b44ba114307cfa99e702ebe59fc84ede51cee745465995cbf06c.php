<?php

/* MainBundle:Usuario:new.html.twig */
class __TwigTemplate_18168fad3080b44ba114307cfa99e702ebe59fc84ede51cee745465995cbf06c extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\">Usuarios</a>
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
        echo "Usuarios";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">   
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Cedula</label>
    <div class=\"controls\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Apellidos</label>
    <div class=\"controls\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombres</label>
    <div class=\"controls\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombres", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Roles</label>
    <div class=\"controls\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "userRoles", array()), 'widget', array("attr" => array("multiple" => "multiple", "class" => "chzn-select input-large", "data-placeholder" => "Escoja varias opciones..")));
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Nombre de usuario</label>
    <div class=\"controls\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
    </div>
</div>        
<div class=\"control-group\">
    <label class=\"control-label\" for=\"\">Contraseña</label>
    <div class=\"controls\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
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
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
    }

    // line 60
    public function block_link($context, array $blocks = array())
    {
        // line 61
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\"  
";
    }

    // line 63
    public function block_plugins($context, array $blocks = array())
    {
        // line 64
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 67
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 68
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnusuarios\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
    \$(\".chzn-select\").chosen(); 
    \$(\"#afijos_ustype_password\").get(0).type = 'password';    
};    
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 68,  185 => 67,  178 => 64,  175 => 63,  168 => 61,  165 => 60,  159 => 58,  147 => 49,  138 => 43,  129 => 37,  120 => 31,  111 => 25,  102 => 19,  92 => 15,  89 => 14,  83 => 12,  77 => 11,  71 => 10,  64 => 7,  61 => 6,  54 => 4,  51 => 3,  45 => 2,  11 => 1,);
    }
}
