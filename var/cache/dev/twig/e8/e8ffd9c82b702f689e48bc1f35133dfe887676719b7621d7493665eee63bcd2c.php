<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac3e938262db49aeb6f1df4765e8de6e9e45a5678bc57cfde3c2b7a8af3b50e2 extends Twig_Template
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
        $__internal_8494ddc21ae37703427f5b58e76f04093a2d29ae2ed9590ec2efde29da7fd15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8494ddc21ae37703427f5b58e76f04093a2d29ae2ed9590ec2efde29da7fd15a->enter($__internal_8494ddc21ae37703427f5b58e76f04093a2d29ae2ed9590ec2efde29da7fd15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d82e5392b4bbaa4e094f4bca80afebf7a7ff6338361dd532579ef17c6b8912be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82e5392b4bbaa4e094f4bca80afebf7a7ff6338361dd532579ef17c6b8912be->enter($__internal_d82e5392b4bbaa4e094f4bca80afebf7a7ff6338361dd532579ef17c6b8912be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8494ddc21ae37703427f5b58e76f04093a2d29ae2ed9590ec2efde29da7fd15a->leave($__internal_8494ddc21ae37703427f5b58e76f04093a2d29ae2ed9590ec2efde29da7fd15a_prof);

        
        $__internal_d82e5392b4bbaa4e094f4bca80afebf7a7ff6338361dd532579ef17c6b8912be->leave($__internal_d82e5392b4bbaa4e094f4bca80afebf7a7ff6338361dd532579ef17c6b8912be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1925d88d9ddea7303feb18c657e88479026e40f056059defc155b87fb36bc93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1925d88d9ddea7303feb18c657e88479026e40f056059defc155b87fb36bc93->enter($__internal_e1925d88d9ddea7303feb18c657e88479026e40f056059defc155b87fb36bc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0a69c929b733a15e223825c8755194daf1eb69d66e45f0aa41e845fd443f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a69c929b733a15e223825c8755194daf1eb69d66e45f0aa41e845fd443f181->enter($__internal_e0a69c929b733a15e223825c8755194daf1eb69d66e45f0aa41e845fd443f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0a69c929b733a15e223825c8755194daf1eb69d66e45f0aa41e845fd443f181->leave($__internal_e0a69c929b733a15e223825c8755194daf1eb69d66e45f0aa41e845fd443f181_prof);

        
        $__internal_e1925d88d9ddea7303feb18c657e88479026e40f056059defc155b87fb36bc93->leave($__internal_e1925d88d9ddea7303feb18c657e88479026e40f056059defc155b87fb36bc93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a5cdcadc5d5533599fc5097facfdff316a53b82ec89338ccda8dcade1c4c5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a5cdcadc5d5533599fc5097facfdff316a53b82ec89338ccda8dcade1c4c5bf->enter($__internal_3a5cdcadc5d5533599fc5097facfdff316a53b82ec89338ccda8dcade1c4c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b2129a6469aa24c8cef230fc18c2196b49822cb6ac8fbf1ff7c4dfa110fdf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2129a6469aa24c8cef230fc18c2196b49822cb6ac8fbf1ff7c4dfa110fdf04->enter($__internal_1b2129a6469aa24c8cef230fc18c2196b49822cb6ac8fbf1ff7c4dfa110fdf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1b2129a6469aa24c8cef230fc18c2196b49822cb6ac8fbf1ff7c4dfa110fdf04->leave($__internal_1b2129a6469aa24c8cef230fc18c2196b49822cb6ac8fbf1ff7c4dfa110fdf04_prof);

        
        $__internal_3a5cdcadc5d5533599fc5097facfdff316a53b82ec89338ccda8dcade1c4c5bf->leave($__internal_3a5cdcadc5d5533599fc5097facfdff316a53b82ec89338ccda8dcade1c4c5bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba1effc7f7fcbf805021133d0a97b270133d9d5308bb536ce72149bd5e05250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba1effc7f7fcbf805021133d0a97b270133d9d5308bb536ce72149bd5e05250->enter($__internal_0ba1effc7f7fcbf805021133d0a97b270133d9d5308bb536ce72149bd5e05250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c7180b2c6f9eec812d18afe9c087acea1753073df8c3f263ec8700f5758f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7180b2c6f9eec812d18afe9c087acea1753073df8c3f263ec8700f5758f88f->enter($__internal_2c7180b2c6f9eec812d18afe9c087acea1753073df8c3f263ec8700f5758f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c7180b2c6f9eec812d18afe9c087acea1753073df8c3f263ec8700f5758f88f->leave($__internal_2c7180b2c6f9eec812d18afe9c087acea1753073df8c3f263ec8700f5758f88f_prof);

        
        $__internal_0ba1effc7f7fcbf805021133d0a97b270133d9d5308bb536ce72149bd5e05250->leave($__internal_0ba1effc7f7fcbf805021133d0a97b270133d9d5308bb536ce72149bd5e05250_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
