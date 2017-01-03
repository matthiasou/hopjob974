<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_19672e6f3778ee3b636fc77081c7a265c15d33f614c70d123f6dddc2c13a3c0f extends Twig_Template
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
        $__internal_9503d2a453420acfa4d9962315f7acd4b2018f7fbff013ac6ab4ee92a4caf97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9503d2a453420acfa4d9962315f7acd4b2018f7fbff013ac6ab4ee92a4caf97d->enter($__internal_9503d2a453420acfa4d9962315f7acd4b2018f7fbff013ac6ab4ee92a4caf97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_431c2c0fd084526e68ac69ca68ec1dd181b63eafe75b662a37edf078396f24eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431c2c0fd084526e68ac69ca68ec1dd181b63eafe75b662a37edf078396f24eb->enter($__internal_431c2c0fd084526e68ac69ca68ec1dd181b63eafe75b662a37edf078396f24eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9503d2a453420acfa4d9962315f7acd4b2018f7fbff013ac6ab4ee92a4caf97d->leave($__internal_9503d2a453420acfa4d9962315f7acd4b2018f7fbff013ac6ab4ee92a4caf97d_prof);

        
        $__internal_431c2c0fd084526e68ac69ca68ec1dd181b63eafe75b662a37edf078396f24eb->leave($__internal_431c2c0fd084526e68ac69ca68ec1dd181b63eafe75b662a37edf078396f24eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_961fc2276291535a076607b37f5caafa5a29fbde43e1808be082194902a30a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961fc2276291535a076607b37f5caafa5a29fbde43e1808be082194902a30a4c->enter($__internal_961fc2276291535a076607b37f5caafa5a29fbde43e1808be082194902a30a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_103a916b495d0452b221f442b05ffa09ea8154328aae5b7b387b869c7a07674d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103a916b495d0452b221f442b05ffa09ea8154328aae5b7b387b869c7a07674d->enter($__internal_103a916b495d0452b221f442b05ffa09ea8154328aae5b7b387b869c7a07674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_103a916b495d0452b221f442b05ffa09ea8154328aae5b7b387b869c7a07674d->leave($__internal_103a916b495d0452b221f442b05ffa09ea8154328aae5b7b387b869c7a07674d_prof);

        
        $__internal_961fc2276291535a076607b37f5caafa5a29fbde43e1808be082194902a30a4c->leave($__internal_961fc2276291535a076607b37f5caafa5a29fbde43e1808be082194902a30a4c_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
