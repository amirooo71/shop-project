<?php

/* admin/product/categoryList.twig */
class __TwigTemplate_a432350113120d207f7e2152d78d207ef3228ed1c05de539b79316f763be6fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.twig", "admin/product/categoryList.twig", 1);
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
        Category Parent : <strong>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["cat_name"]) ? $context["cat_name"] : null), "html", null, true);
        echo "</strong>
        <hr>
        <div style=\"margin-bottom: 10px;\"><a href=\"categoryCreate.php?parent_id=";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\" class=\"btn btn-primary\">ADD CATEGORY</a></div>
        <table class=\"table table-bordered table-condensed table-hover table-striped\">
            <th> -</th>
            <th>Name</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 14
            echo "                <tr>
                    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"?parent_id=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
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
            // line 18
            echo "                   
                        <div class=\"alert-info\">No Ctegories Set!!!</div>
                   
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/product/categoryList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  90 => 18,  72 => 16,  68 => 15,  65 => 14,  47 => 13,  40 => 9,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "admin/layout.twig"%}*/
/* */
/* */
/* {% block content %}*/
/*     */
/*     <div class="container">*/
/*         Category Parent : <strong>{{cat_name}}</strong>*/
/*         <hr>*/
/*         <div style="margin-bottom: 10px;"><a href="categoryCreate.php?parent_id={{parent_id}}" class="btn btn-primary">ADD CATEGORY</a></div>*/
/*         <table class="table table-bordered table-condensed table-hover table-striped">*/
/*             <th> -</th>*/
/*             <th>Name</th>*/
/*                 {% for c in category %}*/
/*                 <tr>*/
/*                     <td>{{loop.index}}</td>*/
/*                     <td><a href="?parent_id={{c.id}}">{{c.name}}</a></td>*/
/*                 </tr>*/
/*                 {% else %}                   */
/*                         <div class="alert-info">No Ctegories Set!!!</div>*/
/*                    */
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
