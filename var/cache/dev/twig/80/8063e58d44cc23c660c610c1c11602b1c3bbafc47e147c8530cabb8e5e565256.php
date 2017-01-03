<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cebc4fdea37d5aba5bcdd6c05e6ba91aba2378f5b83d20a6e6fdd704e651a3cb extends Twig_Template
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
        $__internal_23064a6774b38000cc2ec359faaaf6432c2bc915e22617d26175d781a6103cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23064a6774b38000cc2ec359faaaf6432c2bc915e22617d26175d781a6103cc5->enter($__internal_23064a6774b38000cc2ec359faaaf6432c2bc915e22617d26175d781a6103cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b0495b6438edd4feaa403b826b0f84ba4cf0653b21d60c6b20b9c97f3e8973cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0495b6438edd4feaa403b826b0f84ba4cf0653b21d60c6b20b9c97f3e8973cc->enter($__internal_b0495b6438edd4feaa403b826b0f84ba4cf0653b21d60c6b20b9c97f3e8973cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23064a6774b38000cc2ec359faaaf6432c2bc915e22617d26175d781a6103cc5->leave($__internal_23064a6774b38000cc2ec359faaaf6432c2bc915e22617d26175d781a6103cc5_prof);

        
        $__internal_b0495b6438edd4feaa403b826b0f84ba4cf0653b21d60c6b20b9c97f3e8973cc->leave($__internal_b0495b6438edd4feaa403b826b0f84ba4cf0653b21d60c6b20b9c97f3e8973cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b838c25ee8e8de3218939caa54bbef2aa97d83f1b32cefe964fd52f8cc39f9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b838c25ee8e8de3218939caa54bbef2aa97d83f1b32cefe964fd52f8cc39f9a5->enter($__internal_b838c25ee8e8de3218939caa54bbef2aa97d83f1b32cefe964fd52f8cc39f9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_431174d5eeefb13228ec85ffa6f6bd2ac10f17f0d1946d7da24633b5dcd81ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431174d5eeefb13228ec85ffa6f6bd2ac10f17f0d1946d7da24633b5dcd81ebe->enter($__internal_431174d5eeefb13228ec85ffa6f6bd2ac10f17f0d1946d7da24633b5dcd81ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_431174d5eeefb13228ec85ffa6f6bd2ac10f17f0d1946d7da24633b5dcd81ebe->leave($__internal_431174d5eeefb13228ec85ffa6f6bd2ac10f17f0d1946d7da24633b5dcd81ebe_prof);

        
        $__internal_b838c25ee8e8de3218939caa54bbef2aa97d83f1b32cefe964fd52f8cc39f9a5->leave($__internal_b838c25ee8e8de3218939caa54bbef2aa97d83f1b32cefe964fd52f8cc39f9a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04ff17d19cf98e28bd921e7300a30edc432d90d48d8d769c0e45afd4a7c3acf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ff17d19cf98e28bd921e7300a30edc432d90d48d8d769c0e45afd4a7c3acf9->enter($__internal_04ff17d19cf98e28bd921e7300a30edc432d90d48d8d769c0e45afd4a7c3acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_60f7cac63397df48edd18ea0f51dd43f3c0580383578c44f4071741d815303b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f7cac63397df48edd18ea0f51dd43f3c0580383578c44f4071741d815303b2->enter($__internal_60f7cac63397df48edd18ea0f51dd43f3c0580383578c44f4071741d815303b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60f7cac63397df48edd18ea0f51dd43f3c0580383578c44f4071741d815303b2->leave($__internal_60f7cac63397df48edd18ea0f51dd43f3c0580383578c44f4071741d815303b2_prof);

        
        $__internal_04ff17d19cf98e28bd921e7300a30edc432d90d48d8d769c0e45afd4a7c3acf9->leave($__internal_04ff17d19cf98e28bd921e7300a30edc432d90d48d8d769c0e45afd4a7c3acf9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b1fd454f6a48de5678b13c71c365b3d2aba62bd11bc6ec7baca13ae0c2724a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1fd454f6a48de5678b13c71c365b3d2aba62bd11bc6ec7baca13ae0c2724a9->enter($__internal_0b1fd454f6a48de5678b13c71c365b3d2aba62bd11bc6ec7baca13ae0c2724a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0a7bd72278549cdf390c9a0d7a1299be9431f5f5ecd5e54f72d5910a1131bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a7bd72278549cdf390c9a0d7a1299be9431f5f5ecd5e54f72d5910a1131bf8->enter($__internal_c0a7bd72278549cdf390c9a0d7a1299be9431f5f5ecd5e54f72d5910a1131bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0a7bd72278549cdf390c9a0d7a1299be9431f5f5ecd5e54f72d5910a1131bf8->leave($__internal_c0a7bd72278549cdf390c9a0d7a1299be9431f5f5ecd5e54f72d5910a1131bf8_prof);

        
        $__internal_0b1fd454f6a48de5678b13c71c365b3d2aba62bd11bc6ec7baca13ae0c2724a9->leave($__internal_0b1fd454f6a48de5678b13c71c365b3d2aba62bd11bc6ec7baca13ae0c2724a9_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
