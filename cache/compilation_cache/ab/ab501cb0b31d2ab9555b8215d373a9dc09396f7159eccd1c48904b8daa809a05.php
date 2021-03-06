<?php

/* details.twig */
class __TwigTemplate_33db8d992e1066b8bb33316784fbec12877e6d79c53f10de08e71892ae70d7c1 extends Twig_Template
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
        <title>Details</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/css/myStyle.css\" rel=\"stylesheet\">


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

        <!--Page Content-->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <p class=\"lead\">Category</p>
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 78
            echo "                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item active\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</a>                          
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"thumbnail\">
                        <img src=\"files/";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "ext", array()), "html", null, true);
        echo "\" alt=\"item_image\" style=\"width: 100%;\">
                        <div class=\"caption\">
                            <h3 class=\"pull-right\">\$";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "</h3>
                            <h3>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h3>
                            <p>ls et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus </p>
                            <div>
                                <p class=\"pull-right\">review 3</p>
                                <p>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star\"></span>
                                    <span class=\"glyphicon glyphicon-star-empty\"></span>                                   
                                    4 stars
                                </p>
                                 <a href=\"addToCart.php?id=";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\">add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"well\">
                        <p class=\"text-right\"><a href=\"#\" class=\"btn btn-success\">Leave a Review</a></p>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star-empty\"></span>  
                                Anonymous
                                <span class=\"pull-right\">3 days a go</span>
                                <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                            </div>
                        </div>

                        <hr>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star-empty\"></span>  
                                Anonymous
                                <span class=\"pull-right\">9 days a go</span>
                                <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                            </div>
                        </div>

                        <hr>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star\"></span>
                                <span class=\"glyphicon glyphicon-star-empty\"></span>
                                <span class=\"glyphicon glyphicon-star-empty\"></span>  
                                Anonymous
                                <span class=\"pull-right\">14 days a go</span>
                                <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--End Page Content-->

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
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/jquery-1.12.4.min.js\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["PATH"]) ? $context["PATH"] : null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>
    </body>
</html>


";
    }

    public function getTemplateName()
    {
        return "details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 175,  226 => 173,  150 => 100,  135 => 88,  131 => 87,  124 => 85,  119 => 82,  110 => 79,  107 => 78,  103 => 77,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Details</title>*/
/* */
/*         <!-- Bootstrap -->*/
/*         <link href="{{PATH}}/assets/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="{{PATH}}/assets/css/myStyle.css" rel="stylesheet">*/
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
/* */
/*         <!--Page Content-->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-3 col-xs-12">*/
/*                     <p class="lead">Category</p>*/
/*                     {% for c in cat %}*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item active">{{c.name}}</a>                          */
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                     <div class="thumbnail">*/
/*                         <img src="files/{{product.id}}.{{product.ext}}" alt="item_image" style="width: 100%;">*/
/*                         <div class="caption">*/
/*                             <h3 class="pull-right">${{product.price}}</h3>*/
/*                             <h3>{{product.name}}</h3>*/
/*                             <p>ls et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre. Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus </p>*/
/*                             <div>*/
/*                                 <p class="pull-right">review 3</p>*/
/*                                 <p>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star"></span>*/
/*                                     <span class="glyphicon glyphicon-star-empty"></span>                                   */
/*                                     4 stars*/
/*                                 </p>*/
/*                                  <a href="addToCart.php?id={{product.id}}" class="btn btn-primary">add to Cart</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="well">*/
/*                         <p class="text-right"><a href="#" class="btn btn-success">Leave a Review</a></p>*/
/*                         <hr>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star-empty"></span>  */
/*                                 Anonymous*/
/*                                 <span class="pull-right">3 days a go</span>*/
/*                                 <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <hr>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star-empty"></span>  */
/*                                 Anonymous*/
/*                                 <span class="pull-right">9 days a go</span>*/
/*                                 <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <hr>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star"></span>*/
/*                                 <span class="glyphicon glyphicon-star-empty"></span>*/
/*                                 <span class="glyphicon glyphicon-star-empty"></span>  */
/*                                 Anonymous*/
/*                                 <span class="pull-right">14 days a go</span>*/
/*                                 <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla </p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!--End Page Content-->*/
/* */
/*         <!--Footer-->*/
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
/* */
/*         <!--End Footer-->*/
/* */
/* */
/*         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*         <script src="{{PATH}}/assets/js/jquery-1.12.4.min.js"></script>*/
/*         <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*         <script src="{{PATH}}/assets/js/bootstrap.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
