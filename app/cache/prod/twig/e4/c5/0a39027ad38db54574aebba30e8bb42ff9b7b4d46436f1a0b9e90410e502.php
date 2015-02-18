<?php

/* PsPdfBundle:Example:usingAutomaticFormatGuessing.html.twig */
class __TwigTemplate_e4c50a39027ad38db54574aebba30e8bb42ff9b7b4d46436f1a0b9e90410e502 extends Twig_Template
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
        echo "Hello <b>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</b>!";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:usingAutomaticFormatGuessing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
