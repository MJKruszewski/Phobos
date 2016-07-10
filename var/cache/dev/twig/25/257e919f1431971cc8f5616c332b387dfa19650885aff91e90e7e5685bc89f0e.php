<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52e7cfac9daea2fec168f823b129822bed50a7347229d036db33a988bdd548a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8448e41fbd224a1e06bea923e351eec5cbe0f11c1c52d667d61571d7fa14f59 = $this->env->getExtension("native_profiler");
        $__internal_d8448e41fbd224a1e06bea923e351eec5cbe0f11c1c52d667d61571d7fa14f59->enter($__internal_d8448e41fbd224a1e06bea923e351eec5cbe0f11c1c52d667d61571d7fa14f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8448e41fbd224a1e06bea923e351eec5cbe0f11c1c52d667d61571d7fa14f59->leave($__internal_d8448e41fbd224a1e06bea923e351eec5cbe0f11c1c52d667d61571d7fa14f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bb43bc8fd36b596311d1b6c62cbf903735a720970e99ed8df6e0edab2ef2ac6 = $this->env->getExtension("native_profiler");
        $__internal_4bb43bc8fd36b596311d1b6c62cbf903735a720970e99ed8df6e0edab2ef2ac6->enter($__internal_4bb43bc8fd36b596311d1b6c62cbf903735a720970e99ed8df6e0edab2ef2ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bb43bc8fd36b596311d1b6c62cbf903735a720970e99ed8df6e0edab2ef2ac6->leave($__internal_4bb43bc8fd36b596311d1b6c62cbf903735a720970e99ed8df6e0edab2ef2ac6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5de0af3339df6ec790812050b177c0ede8d18da0bea32912a5cdab817d612a06 = $this->env->getExtension("native_profiler");
        $__internal_5de0af3339df6ec790812050b177c0ede8d18da0bea32912a5cdab817d612a06->enter($__internal_5de0af3339df6ec790812050b177c0ede8d18da0bea32912a5cdab817d612a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5de0af3339df6ec790812050b177c0ede8d18da0bea32912a5cdab817d612a06->leave($__internal_5de0af3339df6ec790812050b177c0ede8d18da0bea32912a5cdab817d612a06_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8e0d6128f1602634d7f8550fe7dc4d06748c1279124d69f09a5acd2240cffe = $this->env->getExtension("native_profiler");
        $__internal_fe8e0d6128f1602634d7f8550fe7dc4d06748c1279124d69f09a5acd2240cffe->enter($__internal_fe8e0d6128f1602634d7f8550fe7dc4d06748c1279124d69f09a5acd2240cffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fe8e0d6128f1602634d7f8550fe7dc4d06748c1279124d69f09a5acd2240cffe->leave($__internal_fe8e0d6128f1602634d7f8550fe7dc4d06748c1279124d69f09a5acd2240cffe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
