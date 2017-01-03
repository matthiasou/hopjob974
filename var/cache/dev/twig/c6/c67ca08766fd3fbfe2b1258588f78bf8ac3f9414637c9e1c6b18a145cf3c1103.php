<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_36e5051c465406d410bf6fa92d94a50120bae489db3c0d4264e6dc1a26a5b418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd81b6fed241e4949eb52d61e99d2f0805889646351f8a3e73f1ef912fb6886f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd81b6fed241e4949eb52d61e99d2f0805889646351f8a3e73f1ef912fb6886f->enter($__internal_bd81b6fed241e4949eb52d61e99d2f0805889646351f8a3e73f1ef912fb6886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_df87680baf9437cd9ea4d1933b5e3f6108b0adca3048c44538e4787fcd46d17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df87680baf9437cd9ea4d1933b5e3f6108b0adca3048c44538e4787fcd46d17d->enter($__internal_df87680baf9437cd9ea4d1933b5e3f6108b0adca3048c44538e4787fcd46d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd81b6fed241e4949eb52d61e99d2f0805889646351f8a3e73f1ef912fb6886f->leave($__internal_bd81b6fed241e4949eb52d61e99d2f0805889646351f8a3e73f1ef912fb6886f_prof);

        
        $__internal_df87680baf9437cd9ea4d1933b5e3f6108b0adca3048c44538e4787fcd46d17d->leave($__internal_df87680baf9437cd9ea4d1933b5e3f6108b0adca3048c44538e4787fcd46d17d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7eaef11e631130f7de0159b7f31096735eea38af41de8068d561319036b0ca1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaef11e631130f7de0159b7f31096735eea38af41de8068d561319036b0ca1c->enter($__internal_7eaef11e631130f7de0159b7f31096735eea38af41de8068d561319036b0ca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a29be9be1bd04d1c1db276b436c6502a4a1853a2502e031fecdc76c5b19390b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a29be9be1bd04d1c1db276b436c6502a4a1853a2502e031fecdc76c5b19390b->enter($__internal_4a29be9be1bd04d1c1db276b436c6502a4a1853a2502e031fecdc76c5b19390b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4a29be9be1bd04d1c1db276b436c6502a4a1853a2502e031fecdc76c5b19390b->leave($__internal_4a29be9be1bd04d1c1db276b436c6502a4a1853a2502e031fecdc76c5b19390b_prof);

        
        $__internal_7eaef11e631130f7de0159b7f31096735eea38af41de8068d561319036b0ca1c->leave($__internal_7eaef11e631130f7de0159b7f31096735eea38af41de8068d561319036b0ca1c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
