<?php

/* MainBundle:CuentaContable:show.html.twig */
class __TwigTemplate_6d3bd279ef7df216f18ecd2ba7f2420c7f3304b31d73d557a9c60de52f4ac93f extends Twig_Template
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
        echo "Cuentas Contables";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable"), "html", null, true);
        echo "\">Cuentas Contables</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Cuenta Contable";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Cuentas Contables";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Cuenta Contable";
    }

    // line 13
    public function block_datos($context, array $blocks = array())
    {
        echo "    
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Código </div>
        <div class=\"profile-info-value\">
                <span >
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigo", array()), "html", null, true);
        echo "
                </span>
        </div>
</div>
<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Descripción </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>                                 
";
    }

    // line 31
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"#\"
";
    }

    // line 34
    public function block_link($context, array $blocks = array())
    {
        // line 35
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable"), "html", null, true);
        echo "\"
";
    }

    // line 37
    public function block_linkedit($context, array $blocks = array())
    {
        // line 38
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 41
    public function block_plugins($context, array $blocks = array())
    {
        // line 42
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 45
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 46
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mncuentacontables\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MainBundle:CuentaContable:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  151 => 46,  148 => 45,  142 => 42,  139 => 41,  132 => 38,  129 => 37,  122 => 35,  119 => 34,  114 => 32,  111 => 31,  102 => 26,  91 => 18,  82 => 13,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
