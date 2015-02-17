<?php

/* MainBundle:Rol:show.html.twig */
class __TwigTemplate_c693aeb13fd211512551387690e471e1d3cba18fe1fc34fe5926ac7b5f835742 extends Twig_Template
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
        echo "Roles";
    }

    // line 4
    public function block_entidad($context, array $blocks = array())
    {
        // line 5
        echo "<i class=\"icon-exchange exchange-icon\"></i>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\">Roles</a>
";
    }

    // line 9
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Ver Rol";
    }

    // line 10
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Roles";
    }

    // line 11
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Ver Rol";
    }

    // line 13
    public function block_datos($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"profile-info-row\">
        <div class=\"profile-info-name\"> Nombre </div>
        <div class=\"profile-info-value\">
            <span>
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo " 
            </span>
        </div>
</div>                                 
";
    }

    // line 23
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 24
        echo "<a href=\"#\"
";
    }

    // line 26
    public function block_link($context, array $blocks = array())
    {
        // line 27
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\"
";
    }

    // line 29
    public function block_linkedit($context, array $blocks = array())
    {
        // line 30
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
";
    }

    // line 33
    public function block_plugins($context, array $blocks = array())
    {
        // line 34
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 38
        echo "<script type=\"text/javascript\">
window.onload = function(){
    var elemento=document.getElementById(\"mnroles\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:Rol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 49,  140 => 38,  137 => 37,  131 => 34,  128 => 33,  121 => 30,  118 => 29,  111 => 27,  108 => 26,  103 => 24,  100 => 23,  91 => 18,  85 => 14,  82 => 13,  76 => 11,  70 => 10,  64 => 9,  58 => 6,  55 => 5,  52 => 4,  46 => 2,  11 => 1,);
    }
}
