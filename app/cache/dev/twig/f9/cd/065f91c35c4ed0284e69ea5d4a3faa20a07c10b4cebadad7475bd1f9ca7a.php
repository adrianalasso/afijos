<?php

/* MainBundle:Usuario:perfil.html.twig */
class __TwigTemplate_f9cd065f91c35c4ed0284e69ea5d4a3faa20a07c10b4cebadad7475bd1f9ca7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'widget' => array($this, 'block_widget'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'datos' => array($this, 'block_datos'),
            'linkedit' => array($this, 'block_linkedit'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            ";
        // line 14
        $this->displayBlock('entidad', $context, $blocks);
        // line 18
        echo "            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>        
        <li class=\"active\">";
        // line 20
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>             
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 14
    public function block_entidad($context, array $blocks = array())
    {
        // line 15
        echo "            <i class=\"icon-user user-icon\"></i>
            <a href=\"#\">Usuarios</a>
            ";
    }

    // line 20
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Perfil de Usuario";
    }

    // line 25
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">
            <!--PAGE CONTENT BEGINS-->
            ";
        // line 30
        $this->displayBlock('widget', $context, $blocks);
        // line 101
        echo "            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 30
    public function block_widget($context, array $blocks = array())
    {
        // line 31
        echo "            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 33
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 34
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 35
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"profile-user-info profile-user-info-striped\">
                            ";
        // line 42
        $this->displayBlock('datos', $context, $blocks);
        // line 76
        echo "                            </div>
                            <br>
                            <div class=\"center\">
                                    <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                                ";
        // line 81
        $this->displayBlock('linkedit', $context, $blocks);
        // line 84
        echo "                                                    class=\"btn btn-primary btn-small\" id=\"bteditar\">
                                                    <i class=\"icon-edit bigger-150\"></i>
                                                    Editar
                                                </a>
                                                <a  href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_editpass", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
                                                    class=\"btn btn-yellow btn-small\" id=\"btpass\">
                                                    <i class=\"icon-key bigger-150\"></i>
                                                    Cambiar Contraseña
                                                </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>           
            ";
    }

    // line 33
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 35
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Perfil de Usuario";
    }

    // line 42
    public function block_datos($context, array $blocks = array())
    {
        echo "    
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">Cedula</div>
                                <div class=\"profile-info-value\"><span >
                                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>        
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">Apellidos</div>
                                <div class=\"profile-info-value\"><span >
                                        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>        
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">Nombres</div>
                                <div class=\"profile-info-value\"><span >
                                        ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombres", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>        
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">Roles</div>
                                <div class=\"profile-info-value\"><span >
                                        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userRoles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 65
            echo "                                        ";
            echo twig_escape_filter($this->env, $context["rol"], "html", null, true);
            echo "<br>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</span>
                                </div>
                            </div>        
                            <div class=\"profile-info-row\"  style=\"height:50px\">
                            <div class=\"profile-info-name\">Nombre de usuario</div>
                                <div class=\"profile-info-value\"><span >
                                        ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>                 
                            ";
    }

    // line 81
    public function block_linkedit($context, array $blocks = array())
    {
        // line 82
        echo "                                                <a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_editperfil", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
                                                     ";
    }

    // line 107
    public function block_plugins($context, array $blocks = array())
    {
        // line 108
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 111
    public function block_script($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 113
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle:Usuario:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 113,  273 => 112,  270 => 111,  263 => 108,  260 => 107,  253 => 82,  250 => 81,  242 => 72,  234 => 66,  225 => 65,  221 => 64,  212 => 58,  203 => 52,  194 => 46,  186 => 42,  180 => 35,  174 => 33,  157 => 88,  151 => 84,  149 => 81,  142 => 76,  140 => 42,  130 => 35,  127 => 34,  125 => 33,  121 => 31,  118 => 30,  110 => 101,  108 => 30,  102 => 26,  99 => 25,  93 => 20,  87 => 15,  84 => 14,  76 => 20,  72 => 18,  70 => 14,  63 => 10,  57 => 6,  54 => 5,  48 => 3,  11 => 1,);
    }
}
