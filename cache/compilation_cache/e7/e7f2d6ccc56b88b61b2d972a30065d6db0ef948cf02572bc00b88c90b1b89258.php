<?php

/* admin/product/listProduct.twig */
class __TwigTemplate_3cad6499454c9e8a487d084775b73fe01a8c2f210faaf2528e8e515d491d83fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/listProduct.twig", 1);
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
        <table class=\"table table-bordered table-hover table-condensed\">
            <th>-</th>
            <th>Product Name</th>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "                <tr>
                    <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"infoProduct.php?id=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">>>> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</a></td>
                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 14
            echo "                <div class=\"alert-info\" style=\"margin-bottom: 10px;\"> No Product Set!!!</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/listProduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  80 => 14,  62 => 11,  58 => 10,  55 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <table class="table table-bordered table-hover table-condensed">*/
/*             <th>-</th>*/
/*             <th>Product Name</th>*/
/*                 {% for p in product %}*/
/*                 <tr>*/
/*                     <td>{{loop.index}}</td>*/
/*                     <td><a href="infoProduct.php?id={{p.id}}">>>> {{p.name}}</a></td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <div class="alert-info" style="margin-bottom: 10px;"> No Product Set!!!</div>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}    */
/* */
