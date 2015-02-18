<?php

/* MainBundle:Departamento:index.html.twig */
class __TwigTemplate_0a3175a9c5e0cd9b4511064603b069400a919f5eef7e43e0f3906dc80a809bbf extends Twig_Template
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
        echo "Departamentos";
    }

    // line 3
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Departamentos";
    }

    // line 4
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Departamentos";
    }

    // line 5
    public function block_link($context, array $blocks = array())
    {
        echo "href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_new"), "html", null, true);
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
            <th>Dirección</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "        <tr>
            <td class=\"center\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subsistema", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
            <td class=\"td-actions\">
                <div class=\"hidden-phone visible-desktop action-buttons\">
                    <a class=\"blue\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"icon-zoom-in bigger-150\"></i>
                    </a>
                    <a class=\"green\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"icon-pencil bigger-150\"></i>
                    </a>
                    <a class=\"red\" href=\"#\" id=\"bteliminar";
            // line 30
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
        // line 37
        echo "    </tbody>
</table>
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
    var elemento=document.getElementById(\"mndepartamentos\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');
};
\$(function() {    
    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 55
            echo "    \$(\"#bteliminar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento_eliminar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\";
                }
            });
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "});
\$(function() {var oTable1 = \$('#sample-table-2').dataTable( {\"aoColumns\": [null,null, null,{ \"bSortable\": false }]} );});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Departamento:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 63,  170 => 58,  163 => 55,  159 => 54,  149 => 46,  146 => 45,  140 => 42,  137 => 41,  131 => 37,  118 => 30,  112 => 27,  106 => 24,  100 => 21,  96 => 20,  90 => 19,  87 => 18,  83 => 17,  71 => 7,  68 => 6,  60 => 5,  54 => 4,  48 => 3,  42 => 2,  11 => 1,);
    }
}
