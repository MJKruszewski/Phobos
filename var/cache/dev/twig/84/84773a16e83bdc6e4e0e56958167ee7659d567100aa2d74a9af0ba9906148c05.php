<?php

/* base.html.twig */
class __TwigTemplate_036cf1bf01a0e6b1cec5ce9a72b942df221085c5af164db49f7e980d7a89b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d31d6568c2ad3b577246ae00ede46a427105a793569183a5917c187ffaad7286 = $this->env->getExtension("native_profiler");
        $__internal_d31d6568c2ad3b577246ae00ede46a427105a793569183a5917c187ffaad7286->enter($__internal_d31d6568c2ad3b577246ae00ede46a427105a793569183a5917c187ffaad7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d31d6568c2ad3b577246ae00ede46a427105a793569183a5917c187ffaad7286->leave($__internal_d31d6568c2ad3b577246ae00ede46a427105a793569183a5917c187ffaad7286_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_feb17f7a2a4d7fbb7d66493762540b83d4fa0387d814e20307074cf0a3c30842 = $this->env->getExtension("native_profiler");
        $__internal_feb17f7a2a4d7fbb7d66493762540b83d4fa0387d814e20307074cf0a3c30842->enter($__internal_feb17f7a2a4d7fbb7d66493762540b83d4fa0387d814e20307074cf0a3c30842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_feb17f7a2a4d7fbb7d66493762540b83d4fa0387d814e20307074cf0a3c30842->leave($__internal_feb17f7a2a4d7fbb7d66493762540b83d4fa0387d814e20307074cf0a3c30842_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d0a2758dd6058a902d029854e49ef5487eff28473d2387da32c821e1551fc14 = $this->env->getExtension("native_profiler");
        $__internal_8d0a2758dd6058a902d029854e49ef5487eff28473d2387da32c821e1551fc14->enter($__internal_8d0a2758dd6058a902d029854e49ef5487eff28473d2387da32c821e1551fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d0a2758dd6058a902d029854e49ef5487eff28473d2387da32c821e1551fc14->leave($__internal_8d0a2758dd6058a902d029854e49ef5487eff28473d2387da32c821e1551fc14_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6e393d84d6e31fa50c39b43b5f3dfdff7bdb979fcb46d01f46d6ffee571b36 = $this->env->getExtension("native_profiler");
        $__internal_3d6e393d84d6e31fa50c39b43b5f3dfdff7bdb979fcb46d01f46d6ffee571b36->enter($__internal_3d6e393d84d6e31fa50c39b43b5f3dfdff7bdb979fcb46d01f46d6ffee571b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d6e393d84d6e31fa50c39b43b5f3dfdff7bdb979fcb46d01f46d6ffee571b36->leave($__internal_3d6e393d84d6e31fa50c39b43b5f3dfdff7bdb979fcb46d01f46d6ffee571b36_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ece4e16a4b9062c98e6c81bfeae63c872bf35db917a18bcb82d41508ef53d6f1 = $this->env->getExtension("native_profiler");
        $__internal_ece4e16a4b9062c98e6c81bfeae63c872bf35db917a18bcb82d41508ef53d6f1->enter($__internal_ece4e16a4b9062c98e6c81bfeae63c872bf35db917a18bcb82d41508ef53d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ece4e16a4b9062c98e6c81bfeae63c872bf35db917a18bcb82d41508ef53d6f1->leave($__internal_ece4e16a4b9062c98e6c81bfeae63c872bf35db917a18bcb82d41508ef53d6f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
