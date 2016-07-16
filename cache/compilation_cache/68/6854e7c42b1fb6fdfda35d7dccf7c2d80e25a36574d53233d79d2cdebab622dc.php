<?php

/* loginVerify.twig */
class __TwigTemplate_812207428248bc5f3abc993dcf3dd9aedc185038fcdd8a60ea30cc2c2a98d38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "loginVerify.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
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
        <div class=\"col-md-4\"></div>
        <div class=\"col-md-4\" style=\"margin-top: 70px;\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-log-in\"></span> Login
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                </div>
                <div class=\"panel-footer\"></div>
            </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "loginVerify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig"%}*/
/* */
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/*         <div class="col-md-4"></div>*/
/*         <div class="col-md-4" style="margin-top: 70px;">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     <span class="glyphicon glyphicon-log-in"></span> Login*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="" method="post">*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="Email" name="email">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="form-control" placeholder="Password" name="password">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="panel-footer"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
