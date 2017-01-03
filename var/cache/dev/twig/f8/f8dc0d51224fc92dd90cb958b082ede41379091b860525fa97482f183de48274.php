<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_97bd3b805b73786305a5fd142374d4caf4c417e898c9efa63e99efdfa9417654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1da2e8ba73ebfb25097976f6834e15f85bf4c44ced8e9f2521a665da3c687e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da2e8ba73ebfb25097976f6834e15f85bf4c44ced8e9f2521a665da3c687e9a->enter($__internal_1da2e8ba73ebfb25097976f6834e15f85bf4c44ced8e9f2521a665da3c687e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3f4f554246997518371f8c6ae9442a94b2168f6eb97ec1247d90452a58ccd1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4f554246997518371f8c6ae9442a94b2168f6eb97ec1247d90452a58ccd1c4->enter($__internal_3f4f554246997518371f8c6ae9442a94b2168f6eb97ec1247d90452a58ccd1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1da2e8ba73ebfb25097976f6834e15f85bf4c44ced8e9f2521a665da3c687e9a->leave($__internal_1da2e8ba73ebfb25097976f6834e15f85bf4c44ced8e9f2521a665da3c687e9a_prof);

        
        $__internal_3f4f554246997518371f8c6ae9442a94b2168f6eb97ec1247d90452a58ccd1c4->leave($__internal_3f4f554246997518371f8c6ae9442a94b2168f6eb97ec1247d90452a58ccd1c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
