<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_0b55faa198a10365b02df88861334444c939d7cdaee02f3b6f634383aaa35c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_91d9d17892216624517748bebf53264b8848819c357d1902995e18e2115ab976 = $this->env->getExtension("native_profiler");
        $__internal_91d9d17892216624517748bebf53264b8848819c357d1902995e18e2115ab976->enter($__internal_91d9d17892216624517748bebf53264b8848819c357d1902995e18e2115ab976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d9d17892216624517748bebf53264b8848819c357d1902995e18e2115ab976->leave($__internal_91d9d17892216624517748bebf53264b8848819c357d1902995e18e2115ab976_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb8ae42300b7f4d9fe9c4353b4752a967fbf9f39be37500e0f9080732533e1c = $this->env->getExtension("native_profiler");
        $__internal_3eb8ae42300b7f4d9fe9c4353b4752a967fbf9f39be37500e0f9080732533e1c->enter($__internal_3eb8ae42300b7f4d9fe9c4353b4752a967fbf9f39be37500e0f9080732533e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("authorization");
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
        
        $__internal_3eb8ae42300b7f4d9fe9c4353b4752a967fbf9f39be37500e0f9080732533e1c->leave($__internal_3eb8ae42300b7f4d9fe9c4353b4752a967fbf9f39be37500e0f9080732533e1c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
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
/*     <form action="{{ path('authorization') }}" method="post">*/
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
