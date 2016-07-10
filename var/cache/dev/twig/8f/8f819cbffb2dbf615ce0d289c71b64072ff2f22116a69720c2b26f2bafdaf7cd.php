<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_589cd10e4d6e8787eecb3382c0786bc6f6acda5f81bf5d20af5c037bdb68266f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f87617e0e94cda8182f4519314ea5a11b464007a33187e7ccc5296dbe37e42dd = $this->env->getExtension("native_profiler");
        $__internal_f87617e0e94cda8182f4519314ea5a11b464007a33187e7ccc5296dbe37e42dd->enter($__internal_f87617e0e94cda8182f4519314ea5a11b464007a33187e7ccc5296dbe37e42dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87617e0e94cda8182f4519314ea5a11b464007a33187e7ccc5296dbe37e42dd->leave($__internal_f87617e0e94cda8182f4519314ea5a11b464007a33187e7ccc5296dbe37e42dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d62aaba07883b6b52845585495bed201fce4adad2856bcd198eeb3b59f764e = $this->env->getExtension("native_profiler");
        $__internal_06d62aaba07883b6b52845585495bed201fce4adad2856bcd198eeb3b59f764e->enter($__internal_06d62aaba07883b6b52845585495bed201fce4adad2856bcd198eeb3b59f764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    Hello


";
        
        $__internal_06d62aaba07883b6b52845585495bed201fce4adad2856bcd198eeb3b59f764e->leave($__internal_06d62aaba07883b6b52845585495bed201fce4adad2856bcd198eeb3b59f764e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% block body %}*/
/* */
/*     Hello*/
/* */
/* */
/* {% endblock %}*/
/* */
