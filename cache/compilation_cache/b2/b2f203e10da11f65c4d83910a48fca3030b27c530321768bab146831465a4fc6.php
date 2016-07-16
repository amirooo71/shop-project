<?php

/* admin/product/add.twig */
class __TwigTemplate_b522e47f5e7d4ff58a38e882db813d8b5e93bd69736073a7d0723190f1e19e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/add.twig", 1);
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
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <strong>ADD PRODUCT</strong>
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\">
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"description\" name=\"description\">
                        </div>
                        <div class=\"form-group\">
                            <label>Category</label>
                            <select name=\"categories[]\" multiple=\"\">
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "                                <option class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>Price</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"price\" name=\"price\">
                        </div>
                        <div class=\"form-group\">
                            <label>QTY</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"quantity\" name=\"qty\">
                        </div>
                        <div class=\"form-group\">
                            <label>SKU</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"sku\" name=\"sku\">
                        </div>
                        <div class=\"form-group\">
                            <label>Status</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"status\" name=\"status\">
                        </div>                     
                        <div class=\"form-group\">
                            <label>Image</label>
                            <input type=\"file\" class=\"form-control\" name=\"file\">
                        </div>                     
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  57 => 25,  53 => 24,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig" %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="col-md-3"></div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading">*/
/*                     <strong>ADD PRODUCT</strong>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="" method="post" enctype="multipart/form-data">*/
/*                         <div class="form-group">*/
/*                             <label>Name</label>*/
/*                             <input type="text" class="form-control" placeholder="Name" name="name">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Description</label>*/
/*                             <input type="text" class="form-control" placeholder="description" name="description">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Category</label>*/
/*                             <select name="categories[]" multiple="">*/
/*                                 {% for c in cat%}*/
/*                                 <option class="form-control" value="{{c.id}}">{{c.name}}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Price</label>*/
/*                             <input type="text" class="form-control" placeholder="price" name="price">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>QTY</label>*/
/*                             <input type="number" class="form-control" placeholder="quantity" name="qty">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>SKU</label>*/
/*                             <input type="text" class="form-control" placeholder="sku" name="sku">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Status</label>*/
/*                             <input type="text" class="form-control" placeholder="status" name="status">*/
/*                         </div>                     */
/*                         <div class="form-group">*/
/*                             <label>Image</label>*/
/*                             <input type="file" class="form-control" name="file">*/
/*                         </div>                     */
/*                         <button type="submit" class="btn btn-primary">Submit</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-3"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
