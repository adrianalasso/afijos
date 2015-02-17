<?php

/* MainBundle:Subestacion:index.html.twig */
class __TwigTemplate_0dc3ce73e716d2573a9e8b2d7a0749f6ebe3b0ad46eb67fc84a3646d174d52f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MainBundle::index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'link' => array($this, 'block_link'),
            'tabla' => array($this, 'block_tabla'),
            'plugins' => array($this, 'block_plugins'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Subestaciones | Activos Fijos ";
    }

    // line 5
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Subestaciones";
    }

    // line 7
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Subestaciones";
    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        echo "href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_new"), "html", null, true);
        echo "\"";
    }

    // line 11
    public function block_tabla($context, array $blocks = array())
    {
        // line 12
        echo "    <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
            <thead>
                    <tr>
                            <th class=\"center\">Código</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                    <tr>
                        <td class=\"center\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                        <a class=\"blue\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"icon-zoom-in bigger-150\"></i>
                                        </a>
                                        <a class=\"green\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"icon-pencil bigger-150\"></i>
                                        </a>
                                        <a class=\"red\" href=\"#\" id=\"bteliminar";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
                                                <i class=\"icon-trash bigger-150\"></i>
                                        </a>
                                </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
    </table>
    ";
    }

    // line 43
    public function block_plugins($context, array $blocks = array())
    {
        // line 44
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 46
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 47
        echo "<script type=\"text/javascript\">    
window.onload = function(){
    var elemento=document.getElementById(\"mnsubestaciones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
 
\$(function() {
    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "    \$(\"#bteliminar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_eliminar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\";
                }
            });
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "});
\$(function() {var oTable1 = \$('#sample-table-2').dataTable( {\"aoColumns\": [null, null,{ \"bSortable\": false }]} );});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Subestacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  166 => 60,  159 => 57,  155 => 56,  144 => 47,  141 => 46,  135 => 44,  132 => 43,  126 => 40,  113 => 33,  107 => 30,  101 => 27,  95 => 24,  89 => 23,  86 => 22,  82 => 21,  71 => 12,  68 => 11,  60 => 9,  54 => 7,  48 => 5,  42 => 3,  11 => 1,);
    }
}
