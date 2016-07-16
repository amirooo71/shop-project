<?php

/* layout.twig */
class __TwigTemplate_8abbc412f71fd508b1858634327b3c15a4f5b1c3f7ea61746f49b87998141bfb extends Twig_Template
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
        <title>Bunny Sport</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/myStyle.css\" rel=\"stylesheet\">
    </head>
    <body>
        <!--Header-->
        <nav class=\"navbar navbar-default navbar-inverse\" style=\"border-radius: 0px; margin-bottom: 0px;\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.php\">Bunny Sport</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"#\">Link</a></li>
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
                        ";
        // line 54
        if (array_key_exists("user", $context)) {
            // line 55
            echo "                        <li><a href=\"#\">Welocme <strong style=\"color: #fff;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
            echo "</strong></a></li>
                        ";
        }
        // line 57
        echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Sign In <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 60
        if (array_key_exists("user", $context)) {
            // line 61
            echo "                                <li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> LogOut</a></li>
                                ";
        } else {
            // line 63
            echo "                                <li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                ";
        }
        // line 65
        echo "                                <li><a href=\"register.php\"><span class=\"glyphicon glyphicon-user\"></span> Create Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--End Header-->
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 74
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "            <!--End Marketing-->

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/jquery-1.12.4.min.js\"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>
    </body>
</html>

";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        // line 77
        echo "            <!--Silde Show-->
            <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/2000-700.png\" alt=\"image-backgorund\">
                        <div class=\"carousel-caption\">
                            <h3>Title Here 1</h3>
                            <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/2000-700.png\" alt=\"image-backgorund\">
                        <div class=\"carousel-caption\">
                            <h3>Title Here 2</h3>
                            <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                        </div>
                    </div>
                    <div class=\"item\">
                        <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/images/2000-700.png\" alt=\"image-backgorund\">
                        <div class=\"carousel-caption\">
                            <h3>Title Here 3</h3>
                            <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <div class=\"clearfix\" style=\"margin-bottom: 20px;\"></div>
            <div class=\"container\">          
                <!--End Slide Show-->
                <div class=\"row marketing\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <img src=\"images/cart.png\" alt=\"marketing\" class=\"img-circle\">
                        ";
        // line 127
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartCount", array()) > 0)) {
            // line 128
            echo "                            <h2>
                                Cart : <span class=\"badge\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cartCount", array()), "html", null, true);
            echo "</span>
                            </h2>
                        ";
        } else {
            // line 132
            echo "                            <h2>
                                Cart : <span class=\"badge\">empty Cart</span>
                            </h2>
                        ";
        }
        // line 136
        echo "                        <a href=\"cart.php\" class=\"btn btn-default\">Cart</a>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <img src=\"assets/images/thumb-140.png\" alt=\"marketing\" class=\"img-circle\">
                        <h2>Tilte Here</h2>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                        <a href=\"#\" class=\"btn btn-default\">Details...</a>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <img src=\"assets/images/thumb-140.png\" alt=\"marketing\" class=\"img-circle\">
                        <h2>Tilte Here</h2>
                        <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                        <a href=\"#\" class=\"btn btn-default\">Details...</a>
                    </div>
                </div>
                <!--Marketing-->
                <hr class=\"divider\">
                <!--Product Thumbnail-->
                <div class=\"row\">
                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 156
            echo "                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"thumbnail\">
                                <img src=\"files/thumb-250/";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "ext", array()), "html", null, true);
            echo "\" alt=\"...\">
                                <div class=\"caption\">
                                    <h3>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</p>
                                    <p><a href=\"addToCart.php?id=";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\">Add To Cart</a> <a href=\"details.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\" role=\"button\">Details</a></p>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                    <!--End Product Thumbnail-->
                    <hr class=\"divider\">
                    <footer>
                        <p class=\"pull-right\"><a href=\"#\">Back To Up</a></p>
                        <p>Design By Amir Shojaei . <a href=\"#\">Privacy</a> . <a href=\"#\">Terms</a></p>
                    </footer>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 167,  274 => 162,  270 => 161,  266 => 160,  259 => 158,  255 => 156,  251 => 155,  230 => 136,  224 => 132,  218 => 129,  215 => 128,  213 => 127,  186 => 103,  176 => 96,  166 => 89,  152 => 77,  149 => 76,  140 => 180,  135 => 178,  130 => 175,  127 => 76,  118 => 74,  114 => 73,  104 => 65,  100 => 63,  96 => 61,  94 => 60,  89 => 57,  83 => 55,  81 => 54,  36 => 12,  32 => 11,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <title>Bunny Sport</title>*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link href="{{PATH}}/assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="{{PATH}}/assets/css/myStyle.css" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         <!--Header-->*/
/*         <nav class="navbar navbar-default navbar-inverse" style="border-radius: 0px; margin-bottom: 0px;">*/
/*             <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.php">Bunny Sport</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>*/
/*                         <li><a href="#">Link</a></li>*/
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
/*                         {% if user is defined %}*/
/*                         <li><a href="#">Welocme <strong style="color: #fff;">{{user.first_name}}</strong></a></li>*/
/*                         {% endif %}*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if user is defined %}*/
/*                                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>*/
/*                                 {% else %}*/
/*                                 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                                 {% endif %}*/
/*                                 <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Create Account</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*         <!--End Header-->*/
/*         {% for m in message %}*/
/*             <div class="alert alert-danger">{{m}}</div>*/
/*         {% endfor %}*/
/*         {% block content %}*/
/*             <!--Silde Show-->*/
/*             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>*/
/*                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                     <div class="item active">*/
/*                         <img src="{{PATH}}/images/2000-700.png" alt="image-backgorund">*/
/*                         <div class="carousel-caption">*/
/*                             <h3>Title Here 1</h3>*/
/*                             <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{PATH}}/images/2000-700.png" alt="image-backgorund">*/
/*                         <div class="carousel-caption">*/
/*                             <h3>Title Here 2</h3>*/
/*                             <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="item">*/
/*                         <img src="{{PATH}}/images/2000-700.png" alt="image-backgorund">*/
/*                         <div class="carousel-caption">*/
/*                             <h3>Title Here 3</h3>*/
/*                             <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- Controls -->*/
/*                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                     <span class="sr-only">Previous</span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                     <span class="sr-only">Next</span>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="clearfix" style="margin-bottom: 20px;"></div>*/
/*             <div class="container">          */
/*                 <!--End Slide Show-->*/
/*                 <div class="row marketing">*/
/*                     <div class="col-md-4 col-sm-4 col-xs-12">*/
/*                         <img src="images/cart.png" alt="marketing" class="img-circle">*/
/*                         {% if cart.cartCount > 0 %}*/
/*                             <h2>*/
/*                                 Cart : <span class="badge">{{cart.cartCount}}</span>*/
/*                             </h2>*/
/*                         {% else %}*/
/*                             <h2>*/
/*                                 Cart : <span class="badge">empty Cart</span>*/
/*                             </h2>*/
/*                         {% endif %}*/
/*                         <a href="cart.php" class="btn btn-default">Cart</a>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-sm-4 col-xs-12">*/
/*                         <img src="assets/images/thumb-140.png" alt="marketing" class="img-circle">*/
/*                         <h2>Tilte Here</h2>*/
/*                         <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                         <a href="#" class="btn btn-default">Details...</a>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-sm-4 col-xs-12">*/
/*                         <img src="assets/images/thumb-140.png" alt="marketing" class="img-circle">*/
/*                         <h2>Tilte Here</h2>*/
/*                         <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                         <a href="#" class="btn btn-default">Details...</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--Marketing-->*/
/*                 <hr class="divider">*/
/*                 <!--Product Thumbnail-->*/
/*                 <div class="row">*/
/*                     {% for p in product %}*/
/*                         <div class="col-sm-6 col-md-3">*/
/*                             <div class="thumbnail">*/
/*                                 <img src="files/thumb-250/{{p.id}}.{{p.ext}}" alt="...">*/
/*                                 <div class="caption">*/
/*                                     <h3>{{p.name}}</h3>*/
/*                                     <p>{{p.description}}</p>*/
/*                                     <p><a href="addToCart.php?id={{p.id}}" class="btn btn-primary" role="button">Add To Cart</a> <a href="details.php?id={{p.id}}" class="btn btn-default" role="button">Details</a></p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <!--End Product Thumbnail-->*/
/*                     <hr class="divider">*/
/*                     <footer>*/
/*                         <p class="pull-right"><a href="#">Back To Up</a></p>*/
/*                         <p>Design By Amir Shojaei . <a href="#">Privacy</a> . <a href="#">Terms</a></p>*/
/*                     </footer>*/
/*                 </div>*/
/*             {% endblock %}*/
/*             <!--End Marketing-->*/
/* */
/*             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*             <script src="{{PATH}}/assets/js/jquery-1.12.4.min.js"></script>*/
/*             <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*             <script src="{{PATH}}/assets/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
/* */
