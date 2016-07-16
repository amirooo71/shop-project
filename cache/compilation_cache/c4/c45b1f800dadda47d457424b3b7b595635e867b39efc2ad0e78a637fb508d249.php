<?php

/* admin/product/infoProduct.twig */
class __TwigTemplate_9982cce74b5a1966a27affdada8f077777b9f44ab56fac296558e43711c13105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/infoProduct.twig", 1);
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
        <div class=\"panel panel-default\">
            <table class=\"table table-bordered table-striped table-condensed\">
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>QTY</th>
                <th>SKU</th>
                <th>Status</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
                <tr>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "qty", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status", array()), "html", null, true);
        echo "</td>
                    <td>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 27
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo " - 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </td>
                    <td><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/product/update.php?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a></td>
                    <td><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/product/delete.php?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a></td>
                </tr>
            </table>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "admin/product/infoProduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  88 => 30,  85 => 29,  76 => 27,  72 => 26,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/*         <div class="panel panel-default">*/
/*             <table class="table table-bordered table-striped table-condensed">*/
/*                 <th>Name</th>*/
/*                 <th>Price</th>*/
/*                 <th>Description</th>*/
/*                 <th>QTY</th>*/
/*                 <th>SKU</th>*/
/*                 <th>Status</th>*/
/*                 <th>Category</th>*/
/*                 <th>Edit</th>*/
/*                 <th>Delete</th>*/
/*                 <tr>*/
/*                     <td>{{product.name}}</td>*/
/*                     <td>{{product.price}}</td>*/
/*                     <td>{{product.description}}</td>*/
/*                     <td>{{product.qty}}</td>*/
/*                     <td>{{product.sku}}</td>*/
/*                     <td>{{product.status}}</td>*/
/*                     <td>*/
/*                         {% for c in category %}*/
/*                             {{c.name}} - */
/*                         {% endfor %}*/
/*                     </td>*/
/*                     <td><a href="{{PATH}}/admin/product/update.php?id={{product.id}}"><span class="glyphicon glyphicon-edit"></span></a></td>*/
/*                     <td><a href="{{PATH}}/admin/product/delete.php?id={{product.id}}"><span class="glyphicon glyphicon-remove"></span></a></td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
