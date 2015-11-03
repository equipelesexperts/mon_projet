<?php

/* ::base.html.twig */
class __TwigTemplate_11dfbeafbf4f1976ddde7f7704cbc2aed43bb27d51c178e181975af1eab25ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 320
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 338
        echo "        </body>
    </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/boostrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxgrid.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/skins/dhtmlxgrid_dhx_skyblue.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/skins/dhtmlxgrid_dhx_terrace.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxCalendar/codebase/dhtmlxcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_dhx_terrace.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >

        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "        <div class=\"wrapper\">
            <div class=\"box\">
                <div class=\"row row-offcanvas row-offcanvas-left\">


                    <!-- sidebar -->
                    <div class=\"column col-sm-2 col-xs-1 sidebar-offcanvas\" id=\"sidebar\">

                        <ul class=\"nav\">
                            <li><a href=\"#\" data-toggle=\"offcanvas\" class=\"visible-xs text-center\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a></li>
                        </ul>

                        <ul class=\"nav hidden-xs\" id=\"lg-menu\">
                            <li class=\"active\"><a href=\"#featured\"><i class=\"glyphicon glyphicon-list-alt\"></i></a></li>
                            <li><a href=\"#stories\"><i class=\"glyphicon glyphicon-list\"></i> Stories</a></li>
                            <li><a href=\"#\"><i class=\"glyphicon glyphicon-paperclip\"></i> Saved</a></li>
                            <li><a href=\"#\"><i class=\"glyphicon glyphicon-refresh\"></i> Refresh</a></li>
                        </ul>
                        <ul class=\"list-unstyled hidden-xs\" id=\"sidebar-footer\">
                            <li>
                                <a href=\"http://www.bootply.com\"><h3>Bootstrap</h3> <i class=\"glyphicon glyphicon-heart-empty\"></i> Bootply</a>
                            </li>
                        </ul>

                        <!-- tiny only nav-->
                        <ul class=\"nav visible-xs\" id=\"xs-menu\">
                            <li><a href=\"#featured\" class=\"text-center\"><i class=\"glyphicon glyphicon-list-alt\"></i></a></li>
                            <li><a href=\"#stories\" class=\"text-center\"><i class=\"glyphicon glyphicon-list\"></i></a></li>
                            <li><a href=\"#\" class=\"text-center\"><i class=\"glyphicon glyphicon-paperclip\"></i></a></li>
                            <li><a href=\"#\" class=\"text-center\"><i class=\"glyphicon glyphicon-refresh\"></i></a></li>
                        </ul>

                    </div>
                    <!-- /sidebar -->

                    <!-- main right col -->
                    <div class=\"column col-sm-10 col-xs-11\" id=\"main\">

                        <!-- top nav -->
                        <div class=\"navbar navbar-blue navbar-static-top\">  
                            <div class=\"navbar-header\">
                                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                    <span class=\"sr-only\">Toggle</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                                <a href=\"/\" class=\"navbar-brand logo\">b</a>
                            </div>
                            <nav class=\"collapse navbar-collapse\" role=\"navigation\">
                                <form class=\"navbar-form navbar-left\" action=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("recherche_user");
        echo "\" method=\"POST\">
                                    <div class=\"input-group input-group-sm\" style=\"max-width:360px;\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\" value=\"";
        // line 72
        if (array_key_exists("rech", $context)) {
            echo twig_escape_filter($this->env, (isset($context["rech"]) ? $context["rech"] : $this->getContext($context, "rech")), "html", null, true);
        }
        echo "\">
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <ul class=\"nav navbar-nav\">
                                    <li>
                                        <a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("lister_user");
        echo "\" class=\"\"><i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-user\"></i>Amis</a>
                                    </li>
                                    <li>
                                        <a href=\"#postModal\" role=\"button\" data-toggle=\"modal\"><i class=\"glyphicon glyphicon-plus\"></i> Post</a>
                                    </li>
                                    <li>
                                        <a href=\"#\"><span class=\"badge\">badge</span></a>
                                    </li>
                                </ul>
                                <ul class=\"nav navbar-nav navbar-right\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle no-padding\"  data-toggle=\"dropdown\">
                ";
        // line 95
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastFichier", array()))) {
            echo " 
                                            <img id=\"\" style=\"-webkit-border-radius: 369px;-webkit-border-top-left-radius: 331px;-moz-border-radius: 369px;-moz-border-radius-topleft: 331px;border-radius: 369px;border-top-left-radius: 331px;width: 41px; height: 41px;top:-46px;margin-right: 25px;\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("../web/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastFichier", array()), "nom", array()))), "html", null, true);
            echo "\" />
                ";
        } else {
            // line 98
            echo "                                            <i class=\"glyphicon glyphicon-user\"></i>
                ";
        }
        // line 100
        echo "                                        </a>
                                        <ul class=\"dropdown-menu\">


                                            <li><a href=\"";
        // line 104
        echo "\" id=\"aide\">Aide</a></li>
                                            <li><a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_profil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\" id=\"user\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "</a></li>
                                            <li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /top nav -->

                        <div class=\"padding\">
                            <div class=\"full col-sm-9\">

                                <!-- content -->                      
                                <div class=\"row\">
                                    ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 250
        echo "                                </div><!--/row-->

                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <a href=\"#\">Twitter</a> <small class=\"text-muted\">|</small> <a href=\"#\">Facebook</a> <small class=\"text-muted\">|</small> <a href=\"#\">Google+</a>
                                    </div>
                                </div>

                                <div class=\"row\" id=\"footer\">    
                                    <div class=\"col-sm-6\">

                                    </div>
                                    <div class=\"col-sm-6\">
                                        <p>
                                            <a href=\"#\" class=\"pull-right\">©Copyright 2015</a>
                                        </p>
                                    </div>
                                </div>


                            </div><!-- /col-9 -->
                        </div><!-- /padding -->
                    </div>
                    <!-- /main -->

                </div>
            </div>
        </div>
        ";
        // line 278
        $context["erreurs"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 279
        echo "        ";
        $context["infos"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method");
        // line 280
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["erreurs"]) ? $context["erreurs"] : $this->getContext($context, "erreurs"))) > 0)) {
            // line 281
            echo "        <div class=\"modal\" id=\"erreur\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content panel panel-danger\">
                                                <div class=\"modal-header panel-heading\">
                                                    <h4 class=\"modal-title\">";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modal.titleerreur", array(), "messages", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
            echo "</h4>
                                                </div>
                                                <div class=\"modal-body\">
                ";
            // line 288
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["erreurs"]) ? $context["erreurs"] : $this->getContext($context, "erreurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 289
                echo "                                                    <p id=\"modal-message\" class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "                                                </div>
                                                <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default btn-danger\" data-dismiss=\"modal\">OK</button>
                                                </div>
                                            </div>
                </div>
            </div>
            ";
        }
        // line 299
        echo "
            ";
        // line 300
        if ((twig_length_filter($this->env, (isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos"))) > 0)) {
            // line 301
            echo "            <div class=\"modal\" id=\"info\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content panel panel-success\">
                                                        <div class=\"modal-header panel-heading\">
                                                            <h4 class=\"modal-title\">";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modal.titleinfo", array(), "messages", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
            echo "</h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                ";
            // line 308
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 309
                echo "                                                            <p id=\"modal-message\" class=\"text-success\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "                                                        </div>
                                                        <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default btn-success\" data-dismiss=\"modal\">OK</button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 319
        echo "        ";
    }

    // line 119
    public function block_content($context, array $blocks = array())
    {
        // line 120
        echo "                                    <!-- main col left --> 
                                    <div class=\"col-sm-5\">

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-thumbnail\"><img src=\"/assets/example/bg_5.jpg\" class=\"img-responsive\"></div>
                                            <div class=\"panel-body\">
                                                <p class=\"lead\">Urbanization</p>
                                                <p>45 Followers, 13 Posts</p>

                                                <p>
                                                    <img src=\"https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s28\" width=\"28px\" height=\"28px\">
                                                </p>
                                            </div>
                                        </div>


                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><a href=\"#\" class=\"pull-right\">View all</a> <h4>Bootstrap Examples</h4></div>
                                            <div class=\"panel-body\">
                                                <div class=\"list-group\">
                                                    <a href=\"http://bootply.com/tagged/modal\" class=\"list-group-item\">Modal / Dialog</a>
                                                    <a href=\"http://bootply.com/tagged/datetime\" class=\"list-group-item\">Datetime Examples</a>
                                                    <a href=\"http://bootply.com/tagged/datatable\" class=\"list-group-item\">Data Grids</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"well\"> 
                                            <form class=\"form-horizontal\" role=\"form\">
                                                <h4>What's New</h4>
                                                <div class=\"form-group\" style=\"padding:14px;\">
                                                    <textarea class=\"form-control\" placeholder=\"Update your status\"></textarea>
                                                </div>
                                                <button class=\"btn btn-primary pull-right\" type=\"button\">Post</button><ul class=\"list-inline\"><li><a href=\"\"><i class=\"glyphicon glyphicon-upload\"></i></a></li><li><a href=\"\"><i class=\"glyphicon glyphicon-camera\"></i></a></li><li><a href=\"\"><i class=\"glyphicon glyphicon-map-marker\"></i></a></li></ul>
                                            </form>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><a href=\"#\" class=\"pull-right\">View all</a> <h4>More Templates</h4></div>
                                            <div class=\"panel-body\">
                                                <img src=\"//placehold.it/150x150\" class=\"img-circle pull-right\"> <a href=\"#\">Free @Bootply</a>
                                                <div class=\"clearfix\"></div>
                                                There a load of new free Bootstrap 3 ready templates at Bootply. All of these templates are free and don't require extensive customization to the Bootstrap baseline.
                                                <hr>
                                                <ul class=\"list-unstyled\"><li><a href=\"http://www.bootply.com/templates\">Dashboard</a></li><li><a href=\"http://www.bootply.com/templates\">Darkside</a></li><li><a href=\"http://www.bootply.com/templates\">Greenfield</a></li></ul>
                                            </div>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><h4>What Is Bootstrap?</h4></div>
                                            <div class=\"panel-body\">
                                                Bootstrap is front end frameworkto build custom web applications that are fast, responsive &amp; intuitive. It consist of CSS and HTML for typography, forms, buttons, tables, grids, and navigation along with custom-built jQuery plug-ins and support for responsive layouts. With dozens of reusable components for navigation, pagination, labels, alerts etc..                          </div>
                                        </div>



                                    </div>

                                    <!-- main col right -->
                                    <div class=\"col-sm-7\">

                                        <div class=\"well\"> 
                                            <form class=\"form\">
                                                <h4>Sign-up</h4>
                                                <div class=\"input-group text-center\">
                                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Enter your email address\">
                                                    <span class=\"input-group-btn\"><button class=\"btn btn-lg btn-primary\" type=\"button\">OK</button></span>
                                                </div>
                                            </form>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><a href=\"#\" class=\"pull-right\">View all</a> <h4>Bootply Editor &amp; Code Library</h4></div>
                                            <div class=\"panel-body\">
                                                <p><img src=\"//placehold.it/150x150\" class=\"img-circle pull-right\"> <a href=\"#\">The Bootstrap Playground</a></p>
                                                <div class=\"clearfix\"></div>
                                                <hr>
                                                Design, build, test, and prototype using Bootstrap in real-time from your Web browser. Bootply combines the power of hand-coded HTML, CSS and JavaScript with the benefits of responsive design using Bootstrap. Find and showcase Bootstrap-ready snippets in the 100% free Bootply.com code repository.
                                            </div>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><a href=\"#\" class=\"pull-right\">View all</a> <h4>Stackoverflow</h4></div>
                                            <div class=\"panel-body\">
                                                <img src=\"//placehold.it/150x150\" class=\"img-circle pull-right\"> <a href=\"#\">Keyword: Bootstrap</a>
                                                <div class=\"clearfix\"></div>
                                                <hr>

                                                <p>If you're looking for help with Bootstrap code, the <code>twitter-bootstrap</code> tag at <a href=\"http://stackoverflow.com/questions/tagged/twitter-bootstrap\">Stackoverflow</a> is a good place to find answers.</p>

                                                <hr>
                                                <form>
                                                    <div class=\"input-group\">
                                                        <div class=\"input-group-btn\">
                                                            <button class=\"btn btn-default\">+1</button><button class=\"btn btn-default\"><i class=\"glyphicon glyphicon-share\"></i></button>
                                                        </div>
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Add a comment..\">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\"><a href=\"#\" class=\"pull-right\">View all</a> <h4>Portlet Heading</h4></div>
                                            <div class=\"panel-body\">
                                                <ul class=\"list-group\">
                                                    <li class=\"list-group-item\">Modals</li>
                                                    <li class=\"list-group-item\">Sliders / Carousel</li>
                                                    <li class=\"list-group-item\">Thumbnails</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-thumbnail\"><img src=\"/assets/example/bg_4.jpg\" class=\"img-responsive\"></div>
                                            <div class=\"panel-body\">
                                                <p class=\"lead\">Social Good</p>
                                                <p>1,200 Followers, 83 Posts</p>

                                                <p>
                                                    <img src=\"https://lh6.googleusercontent.com/-5cTTMHjjnzs/AAAAAAAAAAI/AAAAAAAAAFk/vgza68M4p2s/s28-c-k-no/photo.jpg\" width=\"28px\" height=\"28px\">
                                                    <img src=\"https://lh4.googleusercontent.com/-6aFMDiaLg5M/AAAAAAAAAAI/AAAAAAAABdM/XjnG8z60Ug0/s28-c-k-no/photo.jpg\" width=\"28px\" height=\"28px\">
                                                    <img src=\"https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg\" width=\"28px\" height=\"28px\">
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    ";
    }

    // line 320
    public function block_javascripts($context, array $blocks = array())
    {
        // line 321
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/scripts.js"), "html", null, true);
        echo "\"></script>\t
            <script type=\"text/javascript\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxcommon.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxgrid.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxgridcell.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_srnd.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_filter.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_start.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_splt.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_pgn.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxConnector/codebase/connector.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxDataProcessor/codebase/dhtmlxdataprocessor.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/excells/dhtmlxgrid_excell_link.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxCalendar/codebase/dhtmlxcalendar.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/excells/dhtmlxgrid_excell_dhxcalendar.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 336,  545 => 335,  541 => 334,  537 => 333,  533 => 332,  529 => 331,  525 => 330,  521 => 329,  517 => 328,  513 => 327,  509 => 326,  505 => 325,  501 => 324,  497 => 323,  493 => 322,  488 => 321,  485 => 320,  352 => 120,  349 => 119,  345 => 319,  335 => 311,  326 => 309,  322 => 308,  316 => 305,  310 => 301,  308 => 300,  305 => 299,  295 => 291,  286 => 289,  282 => 288,  276 => 285,  270 => 281,  267 => 280,  264 => 279,  262 => 278,  232 => 250,  230 => 119,  214 => 106,  208 => 105,  205 => 104,  199 => 100,  195 => 98,  190 => 96,  186 => 95,  171 => 83,  155 => 72,  150 => 70,  98 => 20,  95 => 19,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  63 => 7,  60 => 6,  54 => 5,  48 => 338,  45 => 320,  43 => 19,  36 => 16,  34 => 6,  30 => 5,  24 => 1,);
    }
}
