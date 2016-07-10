<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2078f157febeaaa7409a40a41bc6d2165ace2e944e1338237ec9791e5ec3476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71350c1ca18a1dc6fd17c7d431daf66e4fb0e0a672d741c5070b4522be1da856 = $this->env->getExtension("native_profiler");
        $__internal_71350c1ca18a1dc6fd17c7d431daf66e4fb0e0a672d741c5070b4522be1da856->enter($__internal_71350c1ca18a1dc6fd17c7d431daf66e4fb0e0a672d741c5070b4522be1da856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71350c1ca18a1dc6fd17c7d431daf66e4fb0e0a672d741c5070b4522be1da856->leave($__internal_71350c1ca18a1dc6fd17c7d431daf66e4fb0e0a672d741c5070b4522be1da856_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b992350e003245c624305ec8fcaea666006ab52bcd79c56c54b41bc841e102e = $this->env->getExtension("native_profiler");
        $__internal_8b992350e003245c624305ec8fcaea666006ab52bcd79c56c54b41bc841e102e->enter($__internal_8b992350e003245c624305ec8fcaea666006ab52bcd79c56c54b41bc841e102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b992350e003245c624305ec8fcaea666006ab52bcd79c56c54b41bc841e102e->leave($__internal_8b992350e003245c624305ec8fcaea666006ab52bcd79c56c54b41bc841e102e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50d4717fced3e52c8cebd92c1fdd47732c8b1b2b95a9d05973f55404e9c1c2a3 = $this->env->getExtension("native_profiler");
        $__internal_50d4717fced3e52c8cebd92c1fdd47732c8b1b2b95a9d05973f55404e9c1c2a3->enter($__internal_50d4717fced3e52c8cebd92c1fdd47732c8b1b2b95a9d05973f55404e9c1c2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50d4717fced3e52c8cebd92c1fdd47732c8b1b2b95a9d05973f55404e9c1c2a3->leave($__internal_50d4717fced3e52c8cebd92c1fdd47732c8b1b2b95a9d05973f55404e9c1c2a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f041cd5bfe7150af8e96b3bd57b1dcffb1fb9a029bf1f3f39120b99a84ec0e3 = $this->env->getExtension("native_profiler");
        $__internal_0f041cd5bfe7150af8e96b3bd57b1dcffb1fb9a029bf1f3f39120b99a84ec0e3->enter($__internal_0f041cd5bfe7150af8e96b3bd57b1dcffb1fb9a029bf1f3f39120b99a84ec0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f041cd5bfe7150af8e96b3bd57b1dcffb1fb9a029bf1f3f39120b99a84ec0e3->leave($__internal_0f041cd5bfe7150af8e96b3bd57b1dcffb1fb9a029bf1f3f39120b99a84ec0e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
