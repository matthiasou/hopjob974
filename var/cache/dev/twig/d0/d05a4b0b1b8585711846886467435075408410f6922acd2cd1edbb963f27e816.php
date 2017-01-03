<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_367d14b9b93996d91c980173d17432e7fa40455c40dc0bb2701b2a568a1f88ba extends Twig_Template
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
        $__internal_b4cef14cf79de753e469f4b95f0f97ecd84568cab3597315d4b02b6e43c1d234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cef14cf79de753e469f4b95f0f97ecd84568cab3597315d4b02b6e43c1d234->enter($__internal_b4cef14cf79de753e469f4b95f0f97ecd84568cab3597315d4b02b6e43c1d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6d96cf07ddd9f713d81e6bc21edc5b3c94f40222125bc515b9f95676a967dc96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d96cf07ddd9f713d81e6bc21edc5b3c94f40222125bc515b9f95676a967dc96->enter($__internal_6d96cf07ddd9f713d81e6bc21edc5b3c94f40222125bc515b9f95676a967dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4cef14cf79de753e469f4b95f0f97ecd84568cab3597315d4b02b6e43c1d234->leave($__internal_b4cef14cf79de753e469f4b95f0f97ecd84568cab3597315d4b02b6e43c1d234_prof);

        
        $__internal_6d96cf07ddd9f713d81e6bc21edc5b3c94f40222125bc515b9f95676a967dc96->leave($__internal_6d96cf07ddd9f713d81e6bc21edc5b3c94f40222125bc515b9f95676a967dc96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89c21c7506460275af2ea067fc627343b0850ba3701f4c8b4e37e2b2cc581adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c21c7506460275af2ea067fc627343b0850ba3701f4c8b4e37e2b2cc581adb->enter($__internal_89c21c7506460275af2ea067fc627343b0850ba3701f4c8b4e37e2b2cc581adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_818e5829871bcdece82e6b247b7331715ec0e81fcda1076643bf7a0c59d4760e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818e5829871bcdece82e6b247b7331715ec0e81fcda1076643bf7a0c59d4760e->enter($__internal_818e5829871bcdece82e6b247b7331715ec0e81fcda1076643bf7a0c59d4760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_818e5829871bcdece82e6b247b7331715ec0e81fcda1076643bf7a0c59d4760e->leave($__internal_818e5829871bcdece82e6b247b7331715ec0e81fcda1076643bf7a0c59d4760e_prof);

        
        $__internal_89c21c7506460275af2ea067fc627343b0850ba3701f4c8b4e37e2b2cc581adb->leave($__internal_89c21c7506460275af2ea067fc627343b0850ba3701f4c8b4e37e2b2cc581adb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b5949ddba91334e996e70d874c404200e65a79947b11c98c5a25eae230a1d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5949ddba91334e996e70d874c404200e65a79947b11c98c5a25eae230a1d84->enter($__internal_0b5949ddba91334e996e70d874c404200e65a79947b11c98c5a25eae230a1d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4c6a9887b86e23d2046cdfa50b603542b8a67bed2830c02b9af4910eb45b540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c6a9887b86e23d2046cdfa50b603542b8a67bed2830c02b9af4910eb45b540->enter($__internal_e4c6a9887b86e23d2046cdfa50b603542b8a67bed2830c02b9af4910eb45b540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4c6a9887b86e23d2046cdfa50b603542b8a67bed2830c02b9af4910eb45b540->leave($__internal_e4c6a9887b86e23d2046cdfa50b603542b8a67bed2830c02b9af4910eb45b540_prof);

        
        $__internal_0b5949ddba91334e996e70d874c404200e65a79947b11c98c5a25eae230a1d84->leave($__internal_0b5949ddba91334e996e70d874c404200e65a79947b11c98c5a25eae230a1d84_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b788d88fbfbef4996e130ae8e58c8349456a58a4b1cca1df2fd0c494e19e3008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788d88fbfbef4996e130ae8e58c8349456a58a4b1cca1df2fd0c494e19e3008->enter($__internal_b788d88fbfbef4996e130ae8e58c8349456a58a4b1cca1df2fd0c494e19e3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac0a1819d9eb54763b936000bbea5eb54240b49b79a4361cb832fa08091cec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0a1819d9eb54763b936000bbea5eb54240b49b79a4361cb832fa08091cec6d->enter($__internal_ac0a1819d9eb54763b936000bbea5eb54240b49b79a4361cb832fa08091cec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ac0a1819d9eb54763b936000bbea5eb54240b49b79a4361cb832fa08091cec6d->leave($__internal_ac0a1819d9eb54763b936000bbea5eb54240b49b79a4361cb832fa08091cec6d_prof);

        
        $__internal_b788d88fbfbef4996e130ae8e58c8349456a58a4b1cca1df2fd0c494e19e3008->leave($__internal_b788d88fbfbef4996e130ae8e58c8349456a58a4b1cca1df2fd0c494e19e3008_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
