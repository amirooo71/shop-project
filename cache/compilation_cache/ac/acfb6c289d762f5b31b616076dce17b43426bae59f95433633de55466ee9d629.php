<?php

/* admin/product/categoryCreate.twig */
class __TwigTemplate_247ee0477dbe071ef7a01f3b8655e2010182be5eae13cad55cfa349b8110a193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/categoryCreate.twig", 1);
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
        Insert Into : <strong>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["cat_name"]) ? $context["cat_name"] : null), "html", null, true);
        echo "</strong>
        <form action=\"\" method=\"post\">
            <div class=\"form-group\">
                <label>Name</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/categoryCreate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         Insert Into : <strong>{{cat_name}}</strong>*/
/*         <form action="" method="post">*/
/*             <div class="form-group">*/
/*                 <label>Name</label>*/
/*                 <input type="text" class="form-control" placeholder="Name" name="name">*/
/*             </div>*/
/*             <button type="submit" class="btn btn-primary">Submit</button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
