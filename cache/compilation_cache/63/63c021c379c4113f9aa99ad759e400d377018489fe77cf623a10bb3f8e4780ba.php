<?php

/* admin/index.twig */
class __TwigTemplate_2150a768a904654084978e95b33c7613a39bef8b32b5f27c9a725c4ac3efd198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/myStyle.css\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"login-bg\">
        <div class=\"container\">
            <div class=\"col-md-3\"></div>
            <div class=\"col-md-6\" style=\"margin-top: 80px;\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Admin Login
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <label>Email address</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>Password</label>
                                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Check me out
                                </label>
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                    </div>
                    <div class=\"panel-Footer\"></div>
                </div>
            </div>
            <div class=\"col-md-3\"></div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/jquery-1.12.4.min\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 57,  82 => 56,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <title>Bootstrap 101 Template</title>*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link href="{{PATH}}/assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="{{PATH}}/assets/css/myStyle.css" rel="stylesheet">*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body class="login-bg">*/
/*         <div class="container">*/
/*             <div class="col-md-3"></div>*/
/*             <div class="col-md-6" style="margin-top: 80px;">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Admin Login*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="" method="post">*/
/*                             <div class="form-group">*/
/*                                 <label>Email address</label>*/
/*                                 <input type="email" class="form-control" placeholder="Email" name="email">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Password</label>*/
/*                                 <input type="password" class="form-control" placeholder="Password" name="password">*/
/*                             </div>*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox"> Check me out*/
/*                                 </label>*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-default">Submit</button>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div class="panel-Footer"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-3"></div>*/
/*         </div>*/
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="{{PATH}}/assets/js/bootstrap.min.js"></script>*/
/*         <script src="{{PATH}}/assets/js/jquery-1.12.4.min"></script>*/
/*     </body>*/
/* </html>*/
