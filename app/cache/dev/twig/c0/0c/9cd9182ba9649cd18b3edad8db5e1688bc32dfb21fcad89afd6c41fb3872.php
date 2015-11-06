<?php

/* ProjetBundle:Default:index.html.twig */
class __TwigTemplate_c00c9cd9182ba9649cd18b3edad8db5e1688bc32dfb21fcad89afd6c41fb3872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<!-- main col left --> 
<div class=\"col-sm-12\">

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <p class=\"lead\">Localization</p>
            <p>5 Friends, 2 Connected</p>
            <div id=\"map\" style=\"height: 200px;\"></div>

        </div>
    </div>
    <div class=\"col-sm-7\">
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 18
            echo "    <div class=\"panel panel-default col-sm-12\">
        <div class=\"panel-heading\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("voir_publication", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"pull-right\">View all</a> <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "user", array()), "username", array()), "html", null, true);
            echo "</h4></div>
        <div class=\"panel-body\">
            <div class=\"list-group\">
                ";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute($context["p"], "fichier", array())) > 0)) {
                // line 23
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "fichier", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 25
                    echo "                    <img id=\"\" style=\"-webkit-border-radius: 369px;-webkit-border-top-left-radius: 331px;-moz-border-radius: 369px;-moz-border-radius-topleft: 331px;border-radius: 369px;border-top-left-radius: 331px;width: 41px; height: 41px;top:-46px;margin-right: 25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("../web/uploads/" . $this->getAttribute($context["f"], "nom", array()))), "html", null, true);
                    echo "\" />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </div>
                ";
            }
            // line 29
            echo "                <div class=\"col-sm-10\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "text", array()), "html", null, true);
            echo "
                </div>     
                <div class=\"col-sm-10\">Publié par :";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "user", array()), "username", array()), "html", null, true);
            echo "</div>
            </div>
        </div>
    </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
    <div class=\"panel panel-default col-sm-5\">
        
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

    public function getTemplateName()
    {
        return "ProjetBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 37,  92 => 32,  87 => 30,  84 => 29,  80 => 27,  71 => 25,  67 => 24,  64 => 23,  62 => 22,  54 => 19,  51 => 18,  47 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
