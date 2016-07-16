<?php

/* cart.twig */
class __TwigTemplate_9a759f99d5d1253b8c5bad45bfd0969300f14326adb0c20f61bb84f562780218 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cart</title>

        <!-- Bootstrap -->
        <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/custom.css\" rel=\"stylesheet\">


    </head>
    <body>
        <!--Header-->
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
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
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
        <!--End Header-->
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) ? $context["message"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 73
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

        <!--Content-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-xs-12\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <div class=\"panel-title\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> Cart</h5>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <a href=\"index.php\"><button class=\"btn btn-primary btn-sm pull-right\"><span class=\"glyphicon glyphicon-share-alt\"></span> Continue Shopping</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 95
        $context["total"] = 0;
        // line 96
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "get", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 97
            echo "                                <div class=\"row\">
                                  ";
            // line 101
            echo "                                    <div class=\"col-md-2 col-xs-12\">
                                        <img class=\"img-responsive\" src=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
            echo "/files/thumb-150/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "ext", array()), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-md-4 col-xs-12\">
                                        <h4><strong>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</strong></h4>
                                        <h4><small>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</small></h4>
                                    </div>
                                    <div class=\"col-md-6 col-xs-12\">
                                        <div class=\"col-md-4 text-right\">
                                            <h4><strong>\$ ";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["c"], "price", array())), "html", null, true);
            echo "</strong> x</h4>
                                        </div>
                                        <div class=\"col-md-6 col-xs-4\">
                                            <h4><small>Quantity : </small>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "count", array()), "html", null, true);
            echo " &nbsp&nbsp&nbsp<small>total : </small>";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["c"], "count", array()) * $this->getAttribute($context["c"], "price", array())), "html", null, true);
            echo " 
                                                ";
            // line 114
            if (($this->getAttribute($context["c"], "count", array()) < $this->getAttribute($context["c"], "qty", array()))) {
                // line 115
                echo "                                                    &nbsp&nbsp&nbsp<a href=\"addToCart.php?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-plus\" style=\"color: green;\"></span></a>
                                                    ";
            }
            // line 117
            echo "                                                    ";
            if (($this->getAttribute($context["c"], "count", array()) > 0)) {
                // line 118
                echo "                                                    <a href=\"addToCart.php?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "&count=-1\"><span class=\"glyphicon glyphicon-minus\" style=\"color: red;\"></span></a>
                                                    ";
            }
            // line 120
            echo "                                            </h4>

                                        </div>
                                        <div class=\"col-md-2 col-xs-2\">
                                            <button class=\"btn btn-danger btn-sm\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                ";
            // line 129
            $context["total"] = ((isset($context["total"]) ? $context["total"] : null) + ($this->getAttribute($context["c"], "count", array()) * $this->getAttribute($context["c"], "price", array())));
            // line 130
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "


                            <div class=\"row\">
                                <div class=\"col-md-9 col-xs-12 text-right\">
                                    <h5>Add Items?</h5>
                                </div>
                                <div class=\"col-md-3 col-xs-12\">
                                    <button class=\"btn btn-default btn-sm btn-block\">Update Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"row\">
                                <div class=\"col-md-9 col-xs-12 text-right\">
                                    <h4><strong>Total \$";
        // line 146
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : null)), "html", null, true);
        echo "</strong></h4>
                                </div>
                                <div class=\"col-md-3 col-xs-12\">
                                    ";
        // line 149
        if (array_key_exists("user", $context)) {
            // line 150
            echo "                                        <a href=\"checkout.php\"><button class=\"btn btn-success btn-lg btn-block\">Checkout</button></a>
                                    ";
        } else {
            // line 152
            echo "                                        <a href=\"login.php\"><button class=\"btn btn-success btn-lg btn-block\">You Must Be Login</button></a>
                                    ";
        }
        // line 154
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End Content-->
        <!--Footer-->       
        <div class=\"container\">
            <hr>
            <footer>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <p class=\"pull-right\"><a href=\"#\">Back to Up</a></p>
                        <p>CopyRight &copy; 2016. Amir Shojaei</p>
                    </div>
                </div>
            </footer>
        </div>
        <!--End Footer-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"jquery-1.12.4.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"assets/js/bootstrap.min.js\"></script>
    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 154,  238 => 152,  234 => 150,  232 => 149,  226 => 146,  209 => 131,  203 => 130,  201 => 129,  190 => 120,  184 => 118,  181 => 117,  175 => 115,  173 => 114,  167 => 113,  161 => 110,  154 => 106,  150 => 105,  140 => 102,  137 => 101,  134 => 97,  129 => 96,  127 => 95,  105 => 75,  96 => 73,  92 => 72,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <title>Cart</title>*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link href="assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="assets/css/custom.css" rel="stylesheet">*/
/* */
/* */
/*     </head>*/
/*     <body>*/
/*         <!--Header-->*/
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
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Action</a></li>*/
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
/*         <!--End Header-->*/
/*         {% for m in message %}*/
/*             <div class="alert alert-danger">{{m}}</div>*/
/*         {% endfor %}*/
/* */
/* */
/*         <!--Content-->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12 col-xs-12">*/
/*                     <div class="panel panel-info">*/
/*                         <div class="panel-heading">*/
/*                             <div class="panel-title">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-6">*/
/*                                         <h5><span class="glyphicon glyphicon-shopping-cart"></span> Cart</h5>*/
/*                                     </div>*/
/*                                     <div class="col-md-6">*/
/*                                         <a href="index.php"><button class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-share-alt"></span> Continue Shopping</button></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {% set total = 0 %}*/
/*                             {% for c in cart.get %}*/
/*                                 <div class="row">*/
/*                                   {#  <div class="col-xm-12">*/
/*                                         {{loop.index}}*/
/*                                     </div>#}*/
/*                                     <div class="col-md-2 col-xs-12">*/
/*                                         <img class="img-responsive" src="{{PATH}}/files/thumb-150/{{c.id}}.{{c.ext}}">*/
/*                                     </div>*/
/*                                     <div class="col-md-4 col-xs-12">*/
/*                                         <h4><strong>{{c.name}}</strong></h4>*/
/*                                         <h4><small>{{c.description}}</small></h4>*/
/*                                     </div>*/
/*                                     <div class="col-md-6 col-xs-12">*/
/*                                         <div class="col-md-4 text-right">*/
/*                                             <h4><strong>$ {{c.price|number_format}}</strong> x</h4>*/
/*                                         </div>*/
/*                                         <div class="col-md-6 col-xs-4">*/
/*                                             <h4><small>Quantity : </small>{{c.count}} &nbsp&nbsp&nbsp<small>total : </small>{{c.count * c.price}} */
/*                                                 {% if c.count < c.qty %}*/
/*                                                     &nbsp&nbsp&nbsp<a href="addToCart.php?id={{c.id}}"><span class="glyphicon glyphicon-plus" style="color: green;"></span></a>*/
/*                                                     {% endif %}*/
/*                                                     {% if c.count > 0 %}*/
/*                                                     <a href="addToCart.php?id={{c.id}}&count=-1"><span class="glyphicon glyphicon-minus" style="color: red;"></span></a>*/
/*                                                     {% endif %}*/
/*                                             </h4>*/
/* */
/*                                         </div>*/
/*                                         <div class="col-md-2 col-xs-2">*/
/*                                             <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr>*/
/*                                 {% set total = total + (c.count * c.price) %}*/
/*                             {% endfor %}*/
/* */
/* */
/* */
/*                             <div class="row">*/
/*                                 <div class="col-md-9 col-xs-12 text-right">*/
/*                                     <h5>Add Items?</h5>*/
/*                                 </div>*/
/*                                 <div class="col-md-3 col-xs-12">*/
/*                                     <button class="btn btn-default btn-sm btn-block">Update Cart</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-9 col-xs-12 text-right">*/
/*                                     <h4><strong>Total ${{total|number_format}}</strong></h4>*/
/*                                 </div>*/
/*                                 <div class="col-md-3 col-xs-12">*/
/*                                     {% if user is defined %}*/
/*                                         <a href="checkout.php"><button class="btn btn-success btn-lg btn-block">Checkout</button></a>*/
/*                                     {% else %}*/
/*                                         <a href="login.php"><button class="btn btn-success btn-lg btn-block">You Must Be Login</button></a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!--End Content-->*/
/*         <!--Footer-->       */
/*         <div class="container">*/
/*             <hr>*/
/*             <footer>*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <p class="pull-right"><a href="#">Back to Up</a></p>*/
/*                         <p>CopyRight &copy; 2016. Amir Shojaei</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*         <!--End Footer-->*/
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="jquery-1.12.4.min.js"></script>*/
/*         <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*         <script src="assets/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
/* */
