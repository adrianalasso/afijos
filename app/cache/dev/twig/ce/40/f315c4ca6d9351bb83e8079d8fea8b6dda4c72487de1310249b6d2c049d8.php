<?php

/* MainBundle:Provincia:index.html.twig */
class __TwigTemplate_ce40f315c4ca6d9351bb83e8079d8fea8b6dda4c72487de1310249b6d2c049d8 extends Twig_Template
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Provincias";
    }

    // line 3
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Provincias";
    }

    // line 4
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Provincias";
    }

    // line 5
    public function block_link($context, array $blocks = array())
    {
        echo "href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia_new"), "html", null, true);
        echo "\"";
    }

    // line 6
    public function block_tabla($context, array $blocks = array())
    {
        // line 7
        echo "<table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr>
            <td class=\"center\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
            <td class=\"td-actions\">
                <div class=\"hidden-phone visible-desktop action-buttons\">
                    <a class=\"blue\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"icon-zoom-in bigger-150\"></i>
                    </a>
                    <a class=\"green\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"icon-pencil bigger-150\"></i>
                    </a>
                    <a class=\"red\" href=\"#\" id=\"bteliminar";
            // line 28
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
        // line 35
        echo "    </tbody>
</table>
";
    }

    // line 38
    public function block_plugins($context, array $blocks = array())
    {
        // line 39
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_scripthijo($context, array $blocks = array())
    {
        // line 42
        echo "<script type=\"text/javascript\">
    window.onload = function(){
        var elemento=document.getElementById(\"mnprovincias\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');
    };
    \$(function() {
        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "        \$(\"#bteliminar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\").on(ace.click_event, function() {
                bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                    if(result){
                        location.href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia_eliminar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\";
                    }
                });
        });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    });
    \$(function() {var oTable1 = \$('#sample-table-2').dataTable( {\"aoColumns\": [null, null,{ \"bSortable\": false }]} );});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Provincia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  165 => 54,  158 => 51,  154 => 50,  144 => 42,  141 => 41,  135 => 39,  132 => 38,  126 => 35,  113 => 28,  107 => 25,  101 => 22,  95 => 19,  89 => 18,  86 => 17,  82 => 16,  71 => 7,  68 => 6,  60 => 5,  54 => 4,  48 => 3,  42 => 2,  11 => 1,);
    }
}
