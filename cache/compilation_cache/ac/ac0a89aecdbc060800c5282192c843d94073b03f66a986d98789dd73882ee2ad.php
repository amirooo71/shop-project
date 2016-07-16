<?php

/* register.twig */
class __TwigTemplate_55d91ca3b44d7e210760ba55a37c0f9b480a12e5700103e85827fad514fb17a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "register.twig", 1);
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
                    <span class=\"glyphicon glyphicon-user\"></span> Create Account 
                </div>
                <div class=\"panel-body\">
                    <form action=\"\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"First Name\" name=\"first-name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\" name=\"last-name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\"placeholder=\"Password\" name=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\"placeholder=\"Confrim Password\" name=\"cpassword\">
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
        return "register.twig";
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
/*                     <span class="glyphicon glyphicon-user"></span> Create Account */
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form action="" method="post">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" placeholder="First Name" name="first-name">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" placeholder="Last Name" name="last-name">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="Email" name="email">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="form-control"placeholder="Password" name="password">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="form-control"placeholder="Confrim Password" name="cpassword">*/
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
/* */
/* {% endblock %}*/
/* */
