<?php

/* MainBundle:Trabajador:show.html.twig */
class __TwigTemplate_7ae6c8abe1d1161c5ede233346a2504c47c30d193e8e28d4b0facee6859edfb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::show.html.twig");
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
            'datos' => array($this, 'block_datos'),
            'linkeliminar' => array($this, 'block_linkeliminar'),
            'link' => array($this, 'block_link'),
            'linkedit' => array($this, 'block_linkedit'),
            'plugins' => array($this, 'block_plugins'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::show.html.twig";
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

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador"), "html", null, true);
        echo "\">Trabajadores</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Trabajador";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Trabajadores";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Trabajador";
    }

    // line 14
    public function block_datos($context, array $blocks = array())
    {
        echo "    
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Código</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Cedula</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Apellidos</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Nombres</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Dirección</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "departamento", array()), "subsistema", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\"  style=\"height:50px\">
<div class=\"profile-info-name\">Departamento</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "departamento", array()), "html", null, true);
        echo "</span>
    </div>
</div>                 
";
    }

    // line 52
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 53
        echo "<a href=\"#\"
";
    }

    // line 55
    public function block_link($context, array $blocks = array())
    {
        // line 56
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador"), "html", null, true);
        echo "\"
";
    }

    // line 58
    public function block_linkedit($context, array $blocks = array())
    {
        // line 59
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 62
    public function block_plugins($context, array $blocks = array())
    {
        // line 63
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 66
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 67
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mntrabajadores\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:Trabajador:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 78,  183 => 67,  180 => 66,  174 => 63,  171 => 62,  164 => 59,  161 => 58,  154 => 56,  151 => 55,  146 => 53,  143 => 52,  135 => 48,  126 => 42,  117 => 36,  108 => 30,  99 => 24,  90 => 18,  82 => 14,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
