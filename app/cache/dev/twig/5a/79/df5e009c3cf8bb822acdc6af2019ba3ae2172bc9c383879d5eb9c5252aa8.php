<?php

/* PsPdfBundle:Example:usingFacadeDirectly.pdf.twig */
class __TwigTemplate_5a79df5e009c3cf8bb822acdc6af2019ba3ae2172bc9c383879d5eb9c5252aa8 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE pdf SYSTEM \"%resources%/dtd/doctype.dtd\">
<pdf>
    <dynamic-page>
\t\tHello!
    </dynamic-page>
</pdf>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:usingFacadeDirectly.pdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
