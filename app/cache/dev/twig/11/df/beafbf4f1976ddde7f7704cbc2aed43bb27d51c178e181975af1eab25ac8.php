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
        // line 219
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 328
        echo "    </body>
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
                                <a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("projet_homepage");
        echo "\" class=\"navbar-brand logo\">b</a>
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
                                        <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("projet_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Home</a>
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
        // line 123
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
        // line 151
        $context["erreurs"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 152
        echo "        ";
        $context["infos"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method");
        // line 153
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["erreurs"]) ? $context["erreurs"] : $this->getContext($context, "erreurs"))) > 0)) {
            // line 154
            echo "        <div class=\"modal\" id=\"erreur\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content panel panel-danger\">
                    <div class=\"modal-header panel-heading\">
                        <h4 class=\"modal-title\">";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modal.titleerreur", array(), "messages", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                ";
            // line 161
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["erreurs"]) ? $context["erreurs"] : $this->getContext($context, "erreurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 162
                echo "                        <p id=\"modal-message\" class=\"text-danger\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default btn-danger\" data-dismiss=\"modal\">OK</button>
                    </div>
                </div>
            </div>
        </div>
            ";
        }
        // line 172
        echo "
            ";
        // line 173
        if ((twig_length_filter($this->env, (isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos"))) > 0)) {
            // line 174
            echo "        <div class=\"modal\" id=\"info\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content panel panel-success\">
                    <div class=\"modal-header panel-heading\">
                        <h4 class=\"modal-title\">";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("modal.titleinfo", array(), "messages", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\">
                ";
            // line 181
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 182
                echo "                        <p id=\"modal-message\" class=\"text-success\">";
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default btn-success\" data-dismiss=\"modal\">OK</button>
                    </div>
                </div>
            </div>
        </div>
            ";
        }
        // line 192
        echo "        <div aria-hidden=\"true\" role=\"dialog\" tabindex=\"-1\" class=\"modal fade\" id=\"postModal\">
            <form class=\"form center-block\" action=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("ajouter_publication");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
                            Update Status
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"form-group\" id=\"placeimgpost\">
                                <textarea placeholder=\"........\" autofocus=\"\" name=\"text-area-post\" class=\"form-control input-lg\"></textarea>
                                <input type=\"file\" class=\"hide\" id=\"filePost\" name=\"filePost\" onchange=\"afficherFilePost(event, \$(this));\">
                            </div>

                        </div>
                        <div class=\"modal-footer\">
                            <div>
                                <button aria-hidden=\"true\" type=\"submit\" class=\"btn btn-primary btn-sm\">Post</button>
                                <ul class=\"pull-left list-inline\"><li><a href=\"javascript:void(0);\" onclick=\"\$('input#filePost').click();\"><i class=\"glyphicon glyphicon-upload\"></i></a></li></ul>
                            </div>\t
                        </div>
                    </div>
                </div>
            </form>
        </div>
        ";
    }

    // line 119
    public function block_content($context, array $blocks = array())
    {
        // line 120
        echo "                                    <!-- main col left --> 
                                    
                                    ";
    }

    // line 219
    public function block_javascripts($context, array $blocks = array())
    {
        // line 220
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/js/scripts.js"), "html", null, true);
        echo "\"></script>\t
        <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxcommon.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxgrid.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/dhtmlxgridcell.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_srnd.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_filter.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_start.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_splt.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/ext/dhtmlxgrid_pgn.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxConnector/codebase/connector.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxDataProcessor/codebase/dhtmlxdataprocessor.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/excells/dhtmlxgrid_excell_link.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxCalendar/codebase/dhtmlxcalendar.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dhtmlx/dhtmlxGrid/codebase/excells/dhtmlxgrid_excell_dhxcalendar.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
                                function afficherFilePost(event, obj) {
                                    \$(\"div#placeimgpost\").find('img#image').remove();
                                    var tmppath = URL.createObjectURL(event.target.files[0]);
                                    \$('div#placeimgpost').append('<img height=\"50\" width=\"50\" id=\"image\"/>');
                                    \$(\"div#placeimgpost\").find('img#image').fadeIn(\"fast\").attr('src', URL.createObjectURL(event.target.files[0]));
                                }
        </script>
        <script type=\"text/javascript\">
            var cities = {
                type: 'FeatureCollection',
                features: [{
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [-87.650, 41.850]},
                        properties: {name: 'Chicago'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [-149.900, 61.218]},
                        properties: {name: 'Anchorage'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [-99.127, 19.427]},
                        properties: {name: 'Mexico City'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [-0.126, 51.500]},
                        properties: {name: 'London'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [28.045, -26.201]},
                        properties: {name: 'Johannesburg'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [15.322, -4.325]},
                        properties: {name: 'Kinshasa'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [151.207, -33.867]},
                        properties: {name: 'Sydney'}
                    }, {
                        type: 'Feature',
                        geometry: {type: 'Point', coordinates: [0, 0]},
                        properties: {name: '0°N 0°E'}
                    }]
            };

        </script>
        <script type=\"text/javascript\">
            function initMap() {
                var image = '<div style=\"border-radius:50%;overflow:hidden;\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commun/img/defaultphoto.png"), "html", null, true);
        echo "\" width=\"28px\" height=\"28px\"></div>';
                ";
        // line 286
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastFichier", array()))) {
            // line 287
            echo "                image = '<img id=\"\" style=\" - webkit - border - radius: 369px; - webkit - border - top - left - radius: 331px; - moz - border - radius: 369px; - moz - border - radius - topleft: 331px; border - radius: 369px; border - top - left - radius: 331px; width: 41px; height: 41px; top: - 46px; margin - right: 25px; \" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("../web/uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastFichier", array()), "nom", array()))), "html", null, true);
            echo "\" />';
                ";
        }
        // line 289
        echo "
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 6
                });
                var infoWindow = new google.maps.InfoWindow({map: map});
                map.data.addGeoJson(cities);
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('<div style=\"border-radius:50%;overflow:hidden;\">' + image + '</div>');
                        map.setCenter(pos);
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\\'t support geolocation.');
            }

        </script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCX3r5YP0bOcrUlcWWVYu3dUh6S0oakEVY&signed_in=true&callback=initMap\"
                async defer>
        </script>    
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
        return array (  522 => 289,  516 => 287,  514 => 286,  510 => 285,  457 => 235,  453 => 234,  449 => 233,  445 => 232,  441 => 231,  437 => 230,  433 => 229,  429 => 228,  425 => 227,  421 => 226,  417 => 225,  413 => 224,  409 => 223,  405 => 222,  401 => 221,  396 => 220,  393 => 219,  387 => 120,  384 => 119,  354 => 193,  351 => 192,  341 => 184,  332 => 182,  328 => 181,  322 => 178,  316 => 174,  314 => 173,  311 => 172,  301 => 164,  292 => 162,  288 => 161,  282 => 158,  276 => 154,  273 => 153,  270 => 152,  268 => 151,  238 => 123,  236 => 119,  220 => 106,  214 => 105,  211 => 104,  205 => 100,  201 => 98,  196 => 96,  192 => 95,  177 => 83,  171 => 80,  158 => 72,  153 => 70,  147 => 67,  98 => 20,  95 => 19,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  63 => 7,  60 => 6,  54 => 5,  48 => 328,  45 => 219,  43 => 19,  36 => 16,  34 => 6,  30 => 5,  24 => 1,);
    }
}
