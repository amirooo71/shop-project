<?php

/* admin/product/delete.twig */
class __TwigTemplate_97343e6b5e0d804e17ec8821bb7514a41184dff3d3dde6d71f983383abb25a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/delete.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <form action=\"\" method=\"post\">
            <div class=\"alert-danger\">Do you really want to delete this item???</div><br>
            <input type=\"submit\" name=\"confrim\" value=\"yes\" class=\"btn btn-danger\">
            <input type=\"submit\" name=\"confrim\" value=\"no\" class=\"btn btn-primary\">
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <form action="" method="post">*/
/*             <div class="alert-danger">Do you really want to delete this item???</div><br>*/
/*             <input type="submit" name="confrim" value="yes" class="btn btn-danger">*/
/*             <input type="submit" name="confrim" value="no" class="btn btn-primary">*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
