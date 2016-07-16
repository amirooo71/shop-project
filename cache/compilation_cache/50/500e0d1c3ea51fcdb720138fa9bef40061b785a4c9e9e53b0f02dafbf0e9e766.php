<?php

/* admin/panel.twig */
class __TwigTemplate_a0681dbe9401c374a2552d8cf5d8c877ae39971fb5166f7a64b454d5d57e59c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/panel.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
    <div class=\"container\">
        <div class=\"col-md-2\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h4 class=\"text-center\">add Products</h4>
                </div>
                <div class=\"panel-default\">
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["bs_path"]) ? $context["bs_path"] : null), "html", null, true);
        echo "/admin/product/add.php\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["bs_path"]) ? $context["bs_path"] : null), "html", null, true);
        echo "/images/plus.png\" class=\"center-block panel-img\" style=\"padding: 10px;\"></a>
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    header
                </div>
                <div class=\"panel-default\">
                    icons
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    header
                </div>
                <div class=\"panel-default\">
                    icons
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    header
                </div>
                <div class=\"panel-default\">
                    icons
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    header
                </div>
                <div class=\"panel-default\">
                    icons
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    header
                </div>
                <div class=\"panel-default\">
                    icons
                </div>
            </div>
        </div>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "admin/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* */
/* {% block content %}*/
/*     */
/*     <div class="container">*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="text-center">add Products</h4>*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     <a href="{{bs_path}}/admin/product/add.php"><img src="{{bs_path}}/images/plus.png" class="center-block panel-img" style="padding: 10px;"></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     header*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     icons*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     header*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     icons*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     header*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     icons*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     header*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     icons*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     header*/
/*                 </div>*/
/*                 <div class="panel-default">*/
/*                     icons*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
