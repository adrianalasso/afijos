<?php

/* TestBundle:Default:tipografia.html.twig */
class __TwigTemplate_cbb46080530958c011305b299aefa47ac723d907f7e496aa1558ac4c088c578e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TestBundle::index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Página de tipografia";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/prettify.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 7
        echo "                            <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                                    <ul class=\"breadcrumb\">
                                            <li>
                                                    <i class=\"icon-home home-icon\"></i>
                                                    <a href=\"#\">Home</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>
                                            <li class=\"active\">Typography</li>
                                    </ul><!--.breadcrumb-->

                                    <div class=\"nav-search\" id=\"nav-search\">
                                            <form class=\"form-search\" />
                                                    <span class=\"input-icon\">
                                                            <input type=\"text\" placeholder=\"Search ...\" class=\"input-small nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                                            <i class=\"icon-search nav-search-icon\"></i>
                                                    </span>
                                            </form>
                                    </div><!--#nav-search-->
                            </div>
";
    }

    // line 31
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 32
        echo "                            <div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>
                                                    Typography
                                                    <small>
                                                            <i class=\"icon-double-angle-right\"></i>
                                                            This is page-header (.page-header &gt; h1)
                                                    </small>
                                            </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6\">
                                                                    <h4>Headings & Paragraphs</h4>

                                                                    <hr />
                                                                    <h1>h1. Heading 1</h1>
                                                                    <p class=\"lead\">
                                                                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                                                                    </p>
                                                                    <h2>h2. Heading 2</h2>
                                                                    <p>
                                                                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
                                                                    </p>
                                                                    <h3>h3. Heading 3</h3>
                                                                    <p>
                                                                            Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
                                                                    </p>
                                                                    <h4>h4. Heading 4</h4>
                                                                    <h5>h5. Heading 5</h5>
                                                                    <h6>h6. Heading 6</h6>
                                                            </div><!--/span-->

                                                            <div class=\"span6\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-flat\">
                                                                                    <h4>Lists</h4>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <div class=\"row-fluid\">
                                                                                                    <div class=\"span6\">
                                                                                                            <ul>
                                                                                                                    <li>Unordered List Item # 1</li>

                                                                                                                    <li>
                                                                                                                            <small>List Item in small tag</small>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <b>List Item in bold tag</b>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <i>List Item in italics tag</i>
                                                                                                                    </li>
                                                                                                                    <li>Unordered List Item which is a longer item and may break into more lines.</li>

                                                                                                                    <li>
                                                                                                                            <strong>List Item in strong tag</strong>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <em>List Item in emphasis tag</em>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>

                                                                                                    <div class=\"span6\">
                                                                                                            <ol>
                                                                                                                    <li>Ordered List Item # 1</li>
                                                                                                                    <li class=\"text-info\">.text-info Ordered List Item</li>
                                                                                                                    <li class=\"text-error\">.text-error Ordered List Item</li>

                                                                                                                    <li class=\"text-success\">
                                                                                                                            <b>.text-success</b>
                                                                                                                            Ordered List Item
                                                                                                                    </li>
                                                                                                                    <li class=\"text-warning\">.text-warning Ordered List Item</li>
                                                                                                                    <li class=\"muted\">.muted Ordered List Item</li>
                                                                                                            </ol>
                                                                                                    </div>
                                                                                            </div>

                                                                                            <hr />
                                                                                            <div class=\"row-fluid\">
                                                                                                    <div class=\"span12\">
                                                                                                            <ul class=\"unstyled spaced\">
                                                                                                                    <li>
                                                                                                                            <i class=\"icon-bell purple\"></i>
                                                                                                                            List with custom icons and more space
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <i class=\"icon-star blue\"></i>
                                                                                                                            Unordered List Item # 2
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <i class=\"icon-remove red\"></i>
                                                                                                                            Unordered List Item # 3
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <i class=\"icon-ok green\"></i>
                                                                                                                            Unordered List Item # 4 which is a longer item and may break into more lines.
                                                                                                                    </li>
                                                                                                            </ul>

                                                                                                            <ul class=\"unstyled spaced2\">
                                                                                                                    <li>
                                                                                                                            <i class=\"icon-circle green\"></i>
                                                                                                                            Even more space
                                                                                                                    </li>

                                                                                                                    <li class=\"text-warning orange\">
                                                                                                                            <i class=\"icon-warning-sign\"></i>
                                                                                                                            Unordered List Item # 5
                                                                                                                    </li>

                                                                                                                    <li class=\"muted\">
                                                                                                                            <i class=\"icon-angle-right\"></i>
                                                                                                                            Unordered List Item # 6
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <ul class=\"inline\">
                                                                                                                                    <li>
                                                                                                                                            <i class=\"icon-share-alt green\"></i>
                                                                                                                                            Inline List Item # 1
                                                                                                                                    </li>
                                                                                                                                    <li>List Item # 2</li>
                                                                                                                                    <li>List Item # 3</li>
                                                                                                                            </ul>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div><!--/span-->
                                                    </div>

                                                    <hr />
                                                    <div class=\"row-fluid\">
                                                            <div class=\"span4\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-flat\">
                                                                                    <h4 class=\"smaller\">
                                                                                            <i class=\"icon-quote-left smaller-80\"></i>
                                                                                            BlockQuote & Address
                                                                                    </h4>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <div class=\"row-fluid\">
                                                                                                    <blockquote class=\"pull-right\">
                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

                                                                                                            <small>
                                                                                                                    Someone famous
                                                                                                                    <cite title=\"Source Title\">Source Title</cite>
                                                                                                            </small>
                                                                                                    </blockquote>
                                                                                            </div>

                                                                                            <div class=\"row-fluid\">
                                                                                                    <blockquote>
                                                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

                                                                                                            <small>
                                                                                                                    Someone famous
                                                                                                                    <cite title=\"Source Title\">Source Title</cite>
                                                                                                            </small>
                                                                                                    </blockquote>
                                                                                            </div>

                                                                                            <hr />
                                                                                            <address>
                                                                                                    <strong>Twitter, Inc.</strong>

                                                                                                    <br />
                                                                                                    795 Folsom Ave, Suite 600
                                                                                                    <br />
                                                                                                    San Francisco, CA 94107
                                                                                                    <br />
                                                                                                    <abbr title=\"Phone\">P:</abbr>
                                                                                                    (123) 456-7890
                                                                                            </address>

                                                                                            <address>
                                                                                                    <strong>Full Name</strong>

                                                                                                    <br />
                                                                                                    <a href=\"mailto:#\">first.last@example.com</a>
                                                                                            </address>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span8\">
                                                                    <div class=\"row-fluid\">
                                                                            <div class=\"widget-box\">
                                                                                    <div class=\"widget-header widget-header-flat\">
                                                                                            <h4 class=\"smaller\">Definition List</h4>

                                                                                            <div class=\"widget-toolbar\">
                                                                                                    <label>
                                                                                                            <small class=\"green\">
                                                                                                                    <b>Horizontal</b>
                                                                                                            </small>

                                                                                                            <input id=\"id-check-horizontal\" type=\"checkbox\" class=\"ace-switch ace-switch-6\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </div>
                                                                                    </div>

                                                                                    <div class=\"widget-body\">
                                                                                            <div class=\"widget-main\">
                                                                                                    <code class=\"pull-right\" id=\"dt-list-code\">&lt;dl&gt;</code>

                                                                                                    <dl id=\"dt-list-1\">
                                                                                                            <dt>Description lists</dt>
                                                                                                            <dd>A description list is perfect for defining terms.</dd>
                                                                                                            <dt>Euismod</dt>
                                                                                                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                                                                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                                                                            <dt>Malesuada porta</dt>
                                                                                                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                                                                            <dt>Felis euismod semper eget lacinia</dt>
                                                                                                            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                                                                    </dl>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>

                                                                    <div class=\"space-6\"></div>

                                                                    <div class=\"row-fluid\">
                                                                            <div class=\"widget-box\">
                                                                                    <div class=\"widget-header widget-header-flat\">
                                                                                            <h4 class=\"smaller\">
                                                                                                    <i class=\"icon-code\"></i>
                                                                                                    Code view
                                                                                            </h4>
                                                                                    </div>

                                                                                    <div class=\"widget-body\">
                                                                                            <div class=\"widget-main\">
                                                                                                    <pre class=\"prettyprint linenums\">&lt;p class=\"muted\"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
&lt;p class=\"text-warning\"&gt;Etiam porta sem malesuada.&lt;/p&gt;
&lt;p class=\"text-error\"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class=\"text-info\"&gt;Aenean eu leo quam.&lt;/p&gt;
&lt;p class=\"text-success\"&gt;Duis mollis.&lt;/p&gt;</pre>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div><!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 306
    public function block_plugins($context, array $blocks = array())
    {
        // line 307
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/prettify.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 309
    public function block_script($context, array $blocks = array())
    {
        // line 310
        echo "                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mntipografia\");
                                    elemento.classList.add('active');
                                }
                                
                    \$(function() {

                            window.prettyPrint && prettyPrint();
                            \$('#id-check-horizontal').removeAttr('checked').on('click', function(){
                                    \$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class=\"dl-horizontal\"&gt;' : '&lt;dl&gt;');
                            });

                    })
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:tipografia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 310,  376 => 309,  369 => 307,  366 => 306,  89 => 32,  86 => 31,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
