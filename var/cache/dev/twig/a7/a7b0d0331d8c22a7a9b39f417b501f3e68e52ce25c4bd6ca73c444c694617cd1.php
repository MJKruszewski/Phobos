<?php

/* AppBundle/security/login.html.twig */
class __TwigTemplate_f9590e1c619d33f6a046bfcbe4cfb96b1d7d738b6e9372c87bfe8d3230c9d2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle/security/login.html.twig", 1);
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
        $__internal_fa6a28da20b96fdb9340857021d5a482cf529cb911decfba8ec77ae7ce438a10 = $this->env->getExtension("native_profiler");
        $__internal_fa6a28da20b96fdb9340857021d5a482cf529cb911decfba8ec77ae7ce438a10->enter($__internal_fa6a28da20b96fdb9340857021d5a482cf529cb911decfba8ec77ae7ce438a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6a28da20b96fdb9340857021d5a482cf529cb911decfba8ec77ae7ce438a10->leave($__internal_fa6a28da20b96fdb9340857021d5a482cf529cb911decfba8ec77ae7ce438a10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_856213815a7a4fdc3bbc978bdee6b37dff24313bcc1c69017911ebcc003698b7 = $this->env->getExtension("native_profiler");
        $__internal_856213815a7a4fdc3bbc978bdee6b37dff24313bcc1c69017911ebcc003698b7->enter($__internal_856213815a7a4fdc3bbc978bdee6b37dff24313bcc1c69017911ebcc003698b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\"/>

        ";
        // line 23
        echo "        <input type=\"hidden\" name=\"token_validate\"
               value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("d41d8cd98f00b204e9800998ecf8427e"), "html", null, true);
        echo "\"
        >
        <button type=\"submit\">login</button>
    </form>

";
        
        $__internal_856213815a7a4fdc3bbc978bdee6b37dff24313bcc1c69017911ebcc003698b7->leave($__internal_856213815a7a4fdc3bbc978bdee6b37dff24313bcc1c69017911ebcc003698b7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  67 => 23,  59 => 13,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% block body %}*/
/* */
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('login') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}"/>*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password"/>*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/*         <input type="hidden" name="token_validate"*/
/*                value="{{ csrf_token('d41d8cd98f00b204e9800998ecf8427e') }}"*/
/*         >*/
/*         <button type="submit">login</button>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
