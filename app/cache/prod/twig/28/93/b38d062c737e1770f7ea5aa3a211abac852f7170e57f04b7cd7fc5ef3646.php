<?php

/* MainBundle:Canton:buscarCantones.html.twig */
class __TwigTemplate_2893b38d062c737e1770f7ea5aa3a211abac852f7170e57f04b7cd7fc5ef3646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<option value=\"\"></option>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cantones"]) ? $context["cantones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["canton"]) {
            // line 3
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["canton"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["canton"], "nombCanton", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['canton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MainBundle:Canton:buscarCantones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
