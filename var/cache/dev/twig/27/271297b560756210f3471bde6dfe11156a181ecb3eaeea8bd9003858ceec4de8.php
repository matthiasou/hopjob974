<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0fafd695a46c0be9aaea98dbfce53c55e008b76a1487186ecbab379f8e21a815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_96e35a83e4935750a16ed1918cdedb856710e4542b600eca4410e66238ca3519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e35a83e4935750a16ed1918cdedb856710e4542b600eca4410e66238ca3519->enter($__internal_96e35a83e4935750a16ed1918cdedb856710e4542b600eca4410e66238ca3519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ea70a54d8f9ed24d20e14e923b28cb2aae52d4dc71c01858a751d29d0681bb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea70a54d8f9ed24d20e14e923b28cb2aae52d4dc71c01858a751d29d0681bb3b->enter($__internal_ea70a54d8f9ed24d20e14e923b28cb2aae52d4dc71c01858a751d29d0681bb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e35a83e4935750a16ed1918cdedb856710e4542b600eca4410e66238ca3519->leave($__internal_96e35a83e4935750a16ed1918cdedb856710e4542b600eca4410e66238ca3519_prof);

        
        $__internal_ea70a54d8f9ed24d20e14e923b28cb2aae52d4dc71c01858a751d29d0681bb3b->leave($__internal_ea70a54d8f9ed24d20e14e923b28cb2aae52d4dc71c01858a751d29d0681bb3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_132b756d201bf4a0838f55fb2836b92a3b368ec28bd28eef85a8490983c32579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132b756d201bf4a0838f55fb2836b92a3b368ec28bd28eef85a8490983c32579->enter($__internal_132b756d201bf4a0838f55fb2836b92a3b368ec28bd28eef85a8490983c32579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d4a8217e24c892a8cf52e147f893ab38772cf1d1c52839909bee7f1aa3f3014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4a8217e24c892a8cf52e147f893ab38772cf1d1c52839909bee7f1aa3f3014->enter($__internal_9d4a8217e24c892a8cf52e147f893ab38772cf1d1c52839909bee7f1aa3f3014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9d4a8217e24c892a8cf52e147f893ab38772cf1d1c52839909bee7f1aa3f3014->leave($__internal_9d4a8217e24c892a8cf52e147f893ab38772cf1d1c52839909bee7f1aa3f3014_prof);

        
        $__internal_132b756d201bf4a0838f55fb2836b92a3b368ec28bd28eef85a8490983c32579->leave($__internal_132b756d201bf4a0838f55fb2836b92a3b368ec28bd28eef85a8490983c32579_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f9bd2c783c2698441ec4fad2d3d19cba0fc51283a2ff0811abc5643b066e400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9bd2c783c2698441ec4fad2d3d19cba0fc51283a2ff0811abc5643b066e400->enter($__internal_3f9bd2c783c2698441ec4fad2d3d19cba0fc51283a2ff0811abc5643b066e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d35db50a6a79e99ea1a34c529db37774fec9ca8dcad8cd31cca751815416e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d35db50a6a79e99ea1a34c529db37774fec9ca8dcad8cd31cca751815416e0a->enter($__internal_2d35db50a6a79e99ea1a34c529db37774fec9ca8dcad8cd31cca751815416e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2d35db50a6a79e99ea1a34c529db37774fec9ca8dcad8cd31cca751815416e0a->leave($__internal_2d35db50a6a79e99ea1a34c529db37774fec9ca8dcad8cd31cca751815416e0a_prof);

        
        $__internal_3f9bd2c783c2698441ec4fad2d3d19cba0fc51283a2ff0811abc5643b066e400->leave($__internal_3f9bd2c783c2698441ec4fad2d3d19cba0fc51283a2ff0811abc5643b066e400_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e06283cbc403dde93b12eda5f707875d61860708667a9cad60ebc6ddc6ff747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e06283cbc403dde93b12eda5f707875d61860708667a9cad60ebc6ddc6ff747->enter($__internal_1e06283cbc403dde93b12eda5f707875d61860708667a9cad60ebc6ddc6ff747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6762b4aeec3d6e8cb913354393b1f8159626a7fc00029f4856133e91743b014e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6762b4aeec3d6e8cb913354393b1f8159626a7fc00029f4856133e91743b014e->enter($__internal_6762b4aeec3d6e8cb913354393b1f8159626a7fc00029f4856133e91743b014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6762b4aeec3d6e8cb913354393b1f8159626a7fc00029f4856133e91743b014e->leave($__internal_6762b4aeec3d6e8cb913354393b1f8159626a7fc00029f4856133e91743b014e_prof);

        
        $__internal_1e06283cbc403dde93b12eda5f707875d61860708667a9cad60ebc6ddc6ff747->leave($__internal_1e06283cbc403dde93b12eda5f707875d61860708667a9cad60ebc6ddc6ff747_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
