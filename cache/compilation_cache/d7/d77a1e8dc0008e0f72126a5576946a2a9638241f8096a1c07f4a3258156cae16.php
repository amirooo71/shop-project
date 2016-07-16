<?php

/* admin/dashboard.twig */
class __TwigTemplate_b7ac3573c8029e270ff75f77bccb9445f253e41b859f77d5c58330981f4dff9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/dashboard.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"col-md-2\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h4 class=\"text-center\">add Products</h4>
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/product/add.php\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/plus.png\" class=\"center-block panel-img\" style=\"padding: 10px;\"></a>
                </div>
                <div class=\"panel-footer\">
                    <small>All Products</small> : <span class=\"badge\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h4 class=\"text-center\">Product List</h4>
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/product/listProduct.php\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/list.png\" class=\"center-block panel-img\" style=\"padding: 10px;\"></a>
                </div>
                <div class=\"panel-footer\">
                    <small>All Category</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                   <h4 class=\"text-center\">Category List</h4>
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/product/categoryList.php\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/list.png\" class=\"center-block panel-img\" style=\"padding: 10px;\"></a>
                </div>
                <div class=\"panel-footer\">
                    all
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
        return "admin/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  61 => 25,  48 => 15,  40 => 12,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="text-center">add Products</h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <a href="{{PATH}}/admin/product/add.php"><img src="{{PATH}}/images/plus.png" class="center-block panel-img" style="padding: 10px;"></a>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <small>All Products</small> : <span class="badge">{{count}}</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <h4 class="text-center">Product List</h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <a href="{{PATH}}/admin/product/listProduct.php"><img src="{{PATH}}/images/list.png" class="center-block panel-img" style="padding: 10px;"></a>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <small>All Category</small>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                    <h4 class="text-center">Category List</h4>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <a href="{{PATH}}/admin/product/categoryList.php"><img src="{{PATH}}/images/list.png" class="center-block panel-img" style="padding: 10px;"></a>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     all*/
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
/* */
/* {% endblock %}*/
