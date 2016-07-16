<?php

/* admin/layout.twig */
class __TwigTemplate_47ddeb7ec1a07220759e24b87885816e4c34e8b61a47b32a28c3d13875680b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/myStyle.css\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <!--Navabr-->
        <nav class=\"navbar navbar-default navbar-inverse\" style=\"border-radius: 0px;\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/dashboard.php\">Dashboard</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/dashboard.php\">Dashborad</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Welcome : <strong style=\"color: white;\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "email", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/admin/index.php\"><span class=\"glyphicon glyphicon-log-out\"></span> LogOut</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--End navbae-->

        <!-- Content -->
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 80
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "        <!--End Content -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/jquery-1.12.4.min\"></script>
    </body>
</html>
";
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
        // line 83
        echo "            

        ";
    }

    public function getTemplateName()
    {
        return "admin/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 83,  153 => 82,  145 => 92,  141 => 91,  134 => 86,  131 => 82,  122 => 80,  118 => 79,  101 => 65,  96 => 63,  70 => 40,  60 => 33,  36 => 12,  32 => 11,  20 => 1,);
    }
}
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
/*     <body>*/
/*         <!--Navabr-->*/
/*         <nav class="navbar navbar-default navbar-inverse" style="border-radius: 0px;">*/
/*             <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{PATH}}/admin/dashboard.php">Dashboard</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>*/
/*                         <li><a href="{{PATH}}/admin/dashboard.php">Dashborad</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">One more separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <form class="navbar-form navbar-left" role="search">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" placeholder="Search">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                     </form>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome : <strong style="color: white;">{{admin.email}}</strong> <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{PATH}}/admin/index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*         <!--End navbae-->*/
/* */
/*         <!-- Content -->*/
/*         {% for m in message %}*/
/*             <div class="alert alert-danger">{{m}}</div>*/
/*         {% endfor %}*/
/*         {% block content %}*/
/*             */
/* */
/*         {% endblock %}*/
/*         <!--End Content -->*/
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*         <script src="{{PATH}}/assets/js/bootstrap.min.js"></script>*/
/*         <script src="{{PATH}}/assets/js/jquery-1.12.4.min"></script>*/
/*     </body>*/
/* </html>*/
/* */
