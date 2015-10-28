<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_4b5112ae606f8427f3fbb867f5246e0c1438e8f4ed26fe7fe64756eb073744e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login\">
    <div class=\"form\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"pr-wrap\">
                    <div class=\"pass-reset\">
                        <label>
                            Enter the email you signed up with</label>
                        <input type=\"email\" placeholder=\"Email\" />
                        <input type=\"submit\" value=\"Submit\" class=\"pass-reset-submit btn btn-success btn-sm\" />
                    </div>
                </div>
                <div class=\"wrap\">
                    <p class=\"form-title\">
                        Sign In</p>
                    ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                    <div id='erreur_login'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 24
        echo "
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Username\"/>

                    <input class=\"btn btn-success btn-sm\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <div class=\"remember-forgot\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" />
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-md-6 forgot-pass-content\">
                                <a href=\"javascript:void(0)\" class=\"forgot-pass\">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"posted-by\">Posted By: <a href=\"http://www.jquery2dotnet.com\">T-Odilon</a></div>
    </div>
</form>

<style>
    .form{
        margin-top: 8%;
    }
    div#erreur_login{
        text-align: center;
        color:palegreen;   
    }
    body
    {
        background: url('http://farm3.staticflickr.com/2832/12303719364_c25cecdc28_b.jpg') fixed;
        background-size: cover;
        padding: 0;
        margin: 0;
    }

    .wrap
    {
        width: 100%;
        height: 100%;
        min-height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    p.form-title
    {
        font-family: 'Open Sans' , sans-serif;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        color: #FFFFFF;
        margin-top: 5%;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    form
    {
        width: 250px;
        margin: 0 auto;
    }

    form.login input[type=\"text\"], form.login input[type=\"password\"]
    {
        width: 100%;
        margin: 0;
        padding: 5px 10px;
        background: 0;
        border: 0;
        border-bottom: 1px solid #FFFFFF;
        outline: 0;
        font-style: italic;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        margin-bottom: 5px;
        color: #FFFFFF;
        outline: 0;
    }

    form.login input[type=\"submit\"]
    {
        width: 100%;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 500;
        margin-top: 16px;
        outline: 0;
        cursor: pointer;
        letter-spacing: 1px;
    }

    form.login input[type=\"submit\"]:hover
    {
        transition: background-color 0.5s ease;
    }

    form.login .remember-forgot
    {
        float: left;
        width: 100%;
        margin: 10px 0 0 0;
    }
    form.login .forgot-pass-content
    {
        min-height: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    form.login label, form.login a
    {
        font-size: 12px;
        font-weight: 400;
        color: #FFFFFF;
    }

    form.login a
    {
        transition: color 0.5s ease;
    }

    form.login a:hover
    {
        color: #2ecc71;
    }

    .pr-wrap
    {
        width: 100%;
        height: 100%;
        min-height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999;
        display: none;
    }

    .show-pass-reset
    {
        display: block !important;
    }

    .pass-reset
    {
        margin: 0 auto;
        width: 250px;
        position: relative;
        margin-top: 22%;
        z-index: 999;
        background: #FFFFFF;
        padding: 20px 15px;
    }

    .pass-reset label
    {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 15px;
    }

    .pass-reset input[type=\"email\"]
    {
        width: 100%;
        margin: 5px 0 0 0;
        padding: 5px 10px;
        background: 0;
        border: 0;
        border-bottom: 1px solid #000000;
        outline: 0;
        font-style: italic;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        margin-bottom: 5px;
        color: #000000;
        outline: 0;
    }

    .pass-reset input[type=\"submit\"]
    {
        width: 100%;
        border: 0;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 500;
        margin-top: 10px;
        outline: 0;
        cursor: pointer;
        letter-spacing: 1px;
    }

    .pass-reset input[type=\"submit\"]:hover
    {
        transition: background-color 0.5s ease;
    }
    .posted-by
    {
        position: absolute;
        bottom: 26px;
        margin: 0 auto;
        color: #FFF;
        background-color: rgba(0, 0, 0, 0.66);
        padding: 10px;
        left: 45%;
    }

</style>
<script>
    \$(document).ready(function() {
        \$('.forgot-pass').click(function(event) {
            \$(\".pr-wrap\").toggleClass(\"show-pass-reset\");
        });

        \$('.pass-reset-submit').click(function(event) {
            \$(\".pr-wrap\").removeClass(\"show-pass-reset\");
        });
    });
    \$('body').find('div:first').remove();
</script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  65 => 26,  61 => 25,  58 => 24,  52 => 22,  50 => 21,  31 => 6,  28 => 5,  11 => 1,);
    }
}
