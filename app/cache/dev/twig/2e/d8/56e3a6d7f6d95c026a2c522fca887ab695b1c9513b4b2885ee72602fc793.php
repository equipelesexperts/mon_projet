<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_2ed856e3a6d7f6d95c026a2c522fca887ab695b1c9513b4b2885ee72602fc793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  52 => 10,  48 => 9,  43 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
