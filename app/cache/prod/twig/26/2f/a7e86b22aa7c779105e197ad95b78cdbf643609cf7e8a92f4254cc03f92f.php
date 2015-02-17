<?php

/* PsPdfBundle:Example:index.html.twig */
class __TwigTemplate_262fa7e86b22aa7c779105e197ad95b78cdbf643609cf7e8a92f4254cc03f92f extends Twig_Template
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
        echo "<h1>PdfBundle examples</h1>

<ul>
\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_examples"), "html", null, true);
        echo "\">Standard examples of PHPPdf library</a></li>
\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_using_facade_directly"), "html", null, true);
        echo "\">Manually created pdf</a></li>
\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest")), "html", null, true);
        echo "\">Hello action in html format</a></li>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_using_automatic_format_detection", array("name" => "Guest", "_format" => "pdf")), "html", null, true);
        echo "\">Hello action in pdf format</a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_pdf_markdown"), "html", null, true);
        echo "\">Pdf from markdown document</a></li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "PsPdfBundle:Example:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
