<?php

/* MainBundle:Canton:show.html.twig */
class __TwigTemplate_8fefed617c5354afb36e4127ff704af76d784fca7982796da7e1d0a35f2c5ad9 extends Twig_Template
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
        echo "Cantones";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\">Cantones</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Cantón";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Cantones";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Cantón";
    }

    // line 14
    public function block_datos($context, array $blocks = array())
    {
        echo "    
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Código </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Provincia </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "provincia", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>  
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Descripción </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombre", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>                                 
";
    }

    // line 40
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 41
        echo "<a href=\"#\"
";
    }

    // line 43
    public function block_link($context, array $blocks = array())
    {
        // line 44
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\"
";
    }

    // line 46
    public function block_linkedit($context, array $blocks = array())
    {
        // line 47
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 50
    public function block_plugins($context, array $blocks = array())
    {
        // line 51
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 54
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 55
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mncantones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MainBundle:Canton:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  162 => 55,  159 => 54,  153 => 51,  150 => 50,  143 => 47,  140 => 46,  133 => 44,  130 => 43,  125 => 41,  122 => 40,  113 => 35,  102 => 27,  91 => 19,  82 => 14,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
