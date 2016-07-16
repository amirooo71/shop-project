<?php

/* admin/product/update.twig */
class __TwigTemplate_51ab7b66d004a168f303b6bcc7ca17f715776a30f53290faafd444d192bbc264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/update.twig", 1);
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
                    <strong>UPDATE PRODUCT</strong>
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label>Name</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\" name=\"name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label>Description</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"description\" name=\"description\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "\">
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
            echo "                                    <option class=\"form-control\" value=\"";
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
                            <input type=\"text\" class=\"form-control\" placeholder=\"price\" name=\"price\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label>QTY</label>
                            <input type=\"number\" class=\"form-control\" placeholder=\"quantity\" name=\"qty\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "qty", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label>SKU</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"sku\" name=\"sku\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label>Status</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"status\" name=\"status\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status", array()), "html", null, true);
        echo "\">
                        </div>                     
                        <div class=\"form-group\">
                            <label>Image</label>
                            <button class=\"btn btn-danger btn-sm\" name=\"unlink\">Unlink Image</button>
                            <p><small>You can change the Image ...</small></p>
                            <input type=\"file\" class=\"form-control\" name=\"file\"><br>                          
                            <div>
                                <div class=\"panel panel-default\">
                                    <img src=\"../../files/thumb-500/";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "ext", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
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
        return "admin/product/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  101 => 43,  94 => 39,  87 => 35,  80 => 31,  74 => 27,  63 => 25,  59 => 24,  51 => 19,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     <strong>UPDATE PRODUCT</strong>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="" method="post" enctype="multipart/form-data">*/
/*                         <div class="form-group">*/
/*                             <label>Name</label>*/
/*                             <input type="text" class="form-control" placeholder="Name" name="name" value="{{product.name}}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Description</label>*/
/*                             <input type="text" class="form-control" placeholder="description" name="description" value="{{product.description}}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Category</label>*/
/*                             <select name="categories[]" multiple="">*/
/*                                 {% for c in cat%}*/
/*                                     <option class="form-control" value="{{c.id}}">{{c.name}}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Price</label>*/
/*                             <input type="text" class="form-control" placeholder="price" name="price" value="{{product.price}}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>QTY</label>*/
/*                             <input type="number" class="form-control" placeholder="quantity" name="qty" value="{{product.qty}}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>SKU</label>*/
/*                             <input type="text" class="form-control" placeholder="sku" name="sku" value="{{product.sku}}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Status</label>*/
/*                             <input type="text" class="form-control" placeholder="status" name="status" value="{{product.status}}">*/
/*                         </div>                     */
/*                         <div class="form-group">*/
/*                             <label>Image</label>*/
/*                             <button class="btn btn-danger btn-sm" name="unlink">Unlink Image</button>*/
/*                             <p><small>You can change the Image ...</small></p>*/
/*                             <input type="file" class="form-control" name="file"><br>                          */
/*                             <div>*/
/*                                 <div class="panel panel-default">*/
/*                                     <img src="../../files/thumb-500/{{product.id}}.{{product.ext}}">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>                     */
/*                         <button type="submit" class="btn btn-primary">Submit</button>*/
/*                     </form>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-3"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
