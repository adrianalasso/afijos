<?php

/* MainBundle:Usuario:show.html.twig */
class __TwigTemplate_80cc6328d2dbd1e899aa6a8c031b2a7580e26417b0efe352e0b63cd7856dd7cb extends Twig_Template
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
        echo "Usuarios";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\">Usuarios</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Usuario";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Usuario";
    }

    // line 14
    public function block_datos($context, array $blocks = array())
    {
        echo "         
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Cedula</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Apellidos</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Nombres</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres", array()), "html", null, true);
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\">
    <div class=\"profile-info-name\">Roles</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userRoles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 37
            echo "            ";
            echo twig_escape_filter($this->env, $context["rol"], "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</span>
    </div>
</div>        
<div class=\"profile-info-row\"  style=\"height:50px\">
<div class=\"profile-info-name\">Nombre de usuario</div>
    <div class=\"profile-info-value\"><span >
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</span>
    </div>
</div>                 
";
    }

    // line 48
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 49
        echo "<a href=\"#\"
";
    }

    // line 51
    public function block_link($context, array $blocks = array())
    {
        // line 52
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\"
";
    }

    // line 54
    public function block_linkedit($context, array $blocks = array())
    {
        // line 55
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 58
    public function block_plugins($context, array $blocks = array())
    {
        // line 59
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 62
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 63
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnusuarioes\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 74
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
        return "MainBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  186 => 63,  183 => 62,  177 => 59,  174 => 58,  167 => 55,  164 => 54,  157 => 52,  154 => 51,  149 => 49,  146 => 48,  138 => 44,  130 => 38,  121 => 37,  117 => 36,  108 => 30,  99 => 24,  90 => 18,  82 => 14,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
