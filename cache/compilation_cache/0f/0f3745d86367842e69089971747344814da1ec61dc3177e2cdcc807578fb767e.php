<?php

/* login.twig */
class __TwigTemplate_b4e2dd442ba89ba5f4149f2ac5bf680c1d80a6382e0599c9e9ad6a4b6bc25997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
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
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                </div>
                <div class=\"panel-foooter\"></div>
            </div>
        </div>
        <div class=\"col-md-4\"></div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
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
/* {% extends "layout.twig"%}*/
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
/*                         <div class="checkbox">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Remember Me*/
/*                             </label>*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="panel-foooter"></div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4"></div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
