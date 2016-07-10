<?php

/* AppBundle/lucky/number.html.twig */
class __TwigTemplate_1304b816c94cf73759408ea1d252773bdf826ebfca2824dccf50d5111dc70fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle/lucky/number.html.twig", 1);
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
        $__internal_36d055dc84a190e664fb1e9e246112f6fdb9fdd0369c1107d90e04b9e151d86c = $this->env->getExtension("native_profiler");
        $__internal_36d055dc84a190e664fb1e9e246112f6fdb9fdd0369c1107d90e04b9e151d86c->enter($__internal_36d055dc84a190e664fb1e9e246112f6fdb9fdd0369c1107d90e04b9e151d86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36d055dc84a190e664fb1e9e246112f6fdb9fdd0369c1107d90e04b9e151d86c->leave($__internal_36d055dc84a190e664fb1e9e246112f6fdb9fdd0369c1107d90e04b9e151d86c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c852e494355a5ea8ad39f8f3e083cf302cc2fe12496227b25098bd932a12ce7 = $this->env->getExtension("native_profiler");
        $__internal_4c852e494355a5ea8ad39f8f3e083cf302cc2fe12496227b25098bd932a12ce7->enter($__internal_4c852e494355a5ea8ad39f8f3e083cf302cc2fe12496227b25098bd932a12ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "

";
        
        $__internal_4c852e494355a5ea8ad39f8f3e083cf302cc2fe12496227b25098bd932a12ce7->leave($__internal_4c852e494355a5ea8ad39f8f3e083cf302cc2fe12496227b25098bd932a12ce7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle/lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {{ number }}*/
/* */
/* {% endblock %}*/
/* */
