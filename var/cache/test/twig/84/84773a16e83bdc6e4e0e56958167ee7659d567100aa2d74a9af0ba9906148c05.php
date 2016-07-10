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
        $__internal_1ddd6879b73aba9ef12d43ce9d203bd3b992ae5c631ad822a9f983fd7efe78bb = $this->env->getExtension("native_profiler");
        $__internal_1ddd6879b73aba9ef12d43ce9d203bd3b992ae5c631ad822a9f983fd7efe78bb->enter($__internal_1ddd6879b73aba9ef12d43ce9d203bd3b992ae5c631ad822a9f983fd7efe78bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1ddd6879b73aba9ef12d43ce9d203bd3b992ae5c631ad822a9f983fd7efe78bb->leave($__internal_1ddd6879b73aba9ef12d43ce9d203bd3b992ae5c631ad822a9f983fd7efe78bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1efa96e87ff948fb55496df158e2d1ffec850f99b6c5273db6e7bed555ec514 = $this->env->getExtension("native_profiler");
        $__internal_e1efa96e87ff948fb55496df158e2d1ffec850f99b6c5273db6e7bed555ec514->enter($__internal_e1efa96e87ff948fb55496df158e2d1ffec850f99b6c5273db6e7bed555ec514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1efa96e87ff948fb55496df158e2d1ffec850f99b6c5273db6e7bed555ec514->leave($__internal_e1efa96e87ff948fb55496df158e2d1ffec850f99b6c5273db6e7bed555ec514_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_daa2afccf48b5fa058375cb539cb2cc91bdc2ea23a16a9d40fb3619e37891dfe = $this->env->getExtension("native_profiler");
        $__internal_daa2afccf48b5fa058375cb539cb2cc91bdc2ea23a16a9d40fb3619e37891dfe->enter($__internal_daa2afccf48b5fa058375cb539cb2cc91bdc2ea23a16a9d40fb3619e37891dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_daa2afccf48b5fa058375cb539cb2cc91bdc2ea23a16a9d40fb3619e37891dfe->leave($__internal_daa2afccf48b5fa058375cb539cb2cc91bdc2ea23a16a9d40fb3619e37891dfe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_96a3cd93d61a767a4f59f88733f98e362d8c4f181b2223be9bad3e70571ace8a = $this->env->getExtension("native_profiler");
        $__internal_96a3cd93d61a767a4f59f88733f98e362d8c4f181b2223be9bad3e70571ace8a->enter($__internal_96a3cd93d61a767a4f59f88733f98e362d8c4f181b2223be9bad3e70571ace8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96a3cd93d61a767a4f59f88733f98e362d8c4f181b2223be9bad3e70571ace8a->leave($__internal_96a3cd93d61a767a4f59f88733f98e362d8c4f181b2223be9bad3e70571ace8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dce6d86142d124a93e9cf6e6c23393beb12acd4d6f7a6b7ed477af385061cb1f = $this->env->getExtension("native_profiler");
        $__internal_dce6d86142d124a93e9cf6e6c23393beb12acd4d6f7a6b7ed477af385061cb1f->enter($__internal_dce6d86142d124a93e9cf6e6c23393beb12acd4d6f7a6b7ed477af385061cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dce6d86142d124a93e9cf6e6c23393beb12acd4d6f7a6b7ed477af385061cb1f->leave($__internal_dce6d86142d124a93e9cf6e6c23393beb12acd4d6f7a6b7ed477af385061cb1f_prof);

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
