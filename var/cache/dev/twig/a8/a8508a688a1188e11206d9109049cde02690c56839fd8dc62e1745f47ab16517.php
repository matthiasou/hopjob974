<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1cc5063876eb8cc6289bdc0b5368e3f8752b291f52f537b09e7a4191435cf9ee extends Twig_Template
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
        $__internal_4f63236324d1a9d6da5894c2abb3caff508a50f17610cf4a488a36fce4dc01d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f63236324d1a9d6da5894c2abb3caff508a50f17610cf4a488a36fce4dc01d5->enter($__internal_4f63236324d1a9d6da5894c2abb3caff508a50f17610cf4a488a36fce4dc01d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6fd3abebef64e08c45ae4608f43e5218d365da43c9465bd56b683b0acbd0beb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd3abebef64e08c45ae4608f43e5218d365da43c9465bd56b683b0acbd0beb0->enter($__internal_6fd3abebef64e08c45ae4608f43e5218d365da43c9465bd56b683b0acbd0beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f63236324d1a9d6da5894c2abb3caff508a50f17610cf4a488a36fce4dc01d5->leave($__internal_4f63236324d1a9d6da5894c2abb3caff508a50f17610cf4a488a36fce4dc01d5_prof);

        
        $__internal_6fd3abebef64e08c45ae4608f43e5218d365da43c9465bd56b683b0acbd0beb0->leave($__internal_6fd3abebef64e08c45ae4608f43e5218d365da43c9465bd56b683b0acbd0beb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fe0504f2dc3593c2ea9c0e2b5843a89da42ac83fc36cdeb41008faf29b319f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe0504f2dc3593c2ea9c0e2b5843a89da42ac83fc36cdeb41008faf29b319f2->enter($__internal_7fe0504f2dc3593c2ea9c0e2b5843a89da42ac83fc36cdeb41008faf29b319f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75d443401f0f560f3a9710309b88fb383ad79609d0c8d12d6ede2b52153afab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d443401f0f560f3a9710309b88fb383ad79609d0c8d12d6ede2b52153afab8->enter($__internal_75d443401f0f560f3a9710309b88fb383ad79609d0c8d12d6ede2b52153afab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_75d443401f0f560f3a9710309b88fb383ad79609d0c8d12d6ede2b52153afab8->leave($__internal_75d443401f0f560f3a9710309b88fb383ad79609d0c8d12d6ede2b52153afab8_prof);

        
        $__internal_7fe0504f2dc3593c2ea9c0e2b5843a89da42ac83fc36cdeb41008faf29b319f2->leave($__internal_7fe0504f2dc3593c2ea9c0e2b5843a89da42ac83fc36cdeb41008faf29b319f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_802cf3d591a2e27b6934c49e6d0a175f8a94cf9e4fb7234df4866e63d646ccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802cf3d591a2e27b6934c49e6d0a175f8a94cf9e4fb7234df4866e63d646ccfa->enter($__internal_802cf3d591a2e27b6934c49e6d0a175f8a94cf9e4fb7234df4866e63d646ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd2cad5c8b1880c1314464b7e7a10e283bb151c39fb9d6545c61cf1ed19230ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2cad5c8b1880c1314464b7e7a10e283bb151c39fb9d6545c61cf1ed19230ca->enter($__internal_fd2cad5c8b1880c1314464b7e7a10e283bb151c39fb9d6545c61cf1ed19230ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd2cad5c8b1880c1314464b7e7a10e283bb151c39fb9d6545c61cf1ed19230ca->leave($__internal_fd2cad5c8b1880c1314464b7e7a10e283bb151c39fb9d6545c61cf1ed19230ca_prof);

        
        $__internal_802cf3d591a2e27b6934c49e6d0a175f8a94cf9e4fb7234df4866e63d646ccfa->leave($__internal_802cf3d591a2e27b6934c49e6d0a175f8a94cf9e4fb7234df4866e63d646ccfa_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6ea71dfefb44fad586fb176a34d69e7f5773257e48e9420b5320efdb0a4d7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ea71dfefb44fad586fb176a34d69e7f5773257e48e9420b5320efdb0a4d7b9->enter($__internal_c6ea71dfefb44fad586fb176a34d69e7f5773257e48e9420b5320efdb0a4d7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_548d053f419294a638bdbe0e761dbb9de1352d487175c11b8f146bc830bbe9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548d053f419294a638bdbe0e761dbb9de1352d487175c11b8f146bc830bbe9bd->enter($__internal_548d053f419294a638bdbe0e761dbb9de1352d487175c11b8f146bc830bbe9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_548d053f419294a638bdbe0e761dbb9de1352d487175c11b8f146bc830bbe9bd->leave($__internal_548d053f419294a638bdbe0e761dbb9de1352d487175c11b8f146bc830bbe9bd_prof);

        
        $__internal_c6ea71dfefb44fad586fb176a34d69e7f5773257e48e9420b5320efdb0a4d7b9->leave($__internal_c6ea71dfefb44fad586fb176a34d69e7f5773257e48e9420b5320efdb0a4d7b9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
