<?php

/* ::pdf.html.twig */
class __TwigTemplate_a28c47ce0310fa40e5f8ef9b9acd02e7d017ba25f3611703c01169bd762dc78e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_774e8c89a61fde369562e2b74f9d9cc7dc3cc66b13172c3083c4e02932ce0a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774e8c89a61fde369562e2b74f9d9cc7dc3cc66b13172c3083c4e02932ce0a1f->enter($__internal_774e8c89a61fde369562e2b74f9d9cc7dc3cc66b13172c3083c4e02932ce0a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pdf.html.twig"));

        $__internal_b43319ca121a3ff1e57101e0d2a6e61f5ad69f205a4c4d6808894a57fd94dbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43319ca121a3ff1e57101e0d2a6e61f5ad69f205a4c4d6808894a57fd94dbfa->enter($__internal_b43319ca121a3ff1e57101e0d2a6e61f5ad69f205a4c4d6808894a57fd94dbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
zz";
        
        $__internal_774e8c89a61fde369562e2b74f9d9cc7dc3cc66b13172c3083c4e02932ce0a1f->leave($__internal_774e8c89a61fde369562e2b74f9d9cc7dc3cc66b13172c3083c4e02932ce0a1f_prof);

        
        $__internal_b43319ca121a3ff1e57101e0d2a6e61f5ad69f205a4c4d6808894a57fd94dbfa->leave($__internal_b43319ca121a3ff1e57101e0d2a6e61f5ad69f205a4c4d6808894a57fd94dbfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d4626fb39125c8e64259eb431a22e6d79c9f82ed4bfddf8780fbc129cf75e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d4626fb39125c8e64259eb431a22e6d79c9f82ed4bfddf8780fbc129cf75e0->enter($__internal_50d4626fb39125c8e64259eb431a22e6d79c9f82ed4bfddf8780fbc129cf75e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03f7ba9302e6316b8ea6f6069ce0e6b39670f8e5e02890bf17fd3c150211b1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f7ba9302e6316b8ea6f6069ce0e6b39670f8e5e02890bf17fd3c150211b1a3->enter($__internal_03f7ba9302e6316b8ea6f6069ce0e6b39670f8e5e02890bf17fd3c150211b1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03f7ba9302e6316b8ea6f6069ce0e6b39670f8e5e02890bf17fd3c150211b1a3->leave($__internal_03f7ba9302e6316b8ea6f6069ce0e6b39670f8e5e02890bf17fd3c150211b1a3_prof);

        
        $__internal_50d4626fb39125c8e64259eb431a22e6d79c9f82ed4bfddf8780fbc129cf75e0->leave($__internal_50d4626fb39125c8e64259eb431a22e6d79c9f82ed4bfddf8780fbc129cf75e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cc9a32a9399db772e6a00382ad1be96b764ab94a22f845e64f4af37f3f707f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc9a32a9399db772e6a00382ad1be96b764ab94a22f845e64f4af37f3f707f8->enter($__internal_0cc9a32a9399db772e6a00382ad1be96b764ab94a22f845e64f4af37f3f707f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_95455d0bd6cb78ff8d83e163be2ef77bcde1cf11fb25c46ed99eb9d552c5b175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95455d0bd6cb78ff8d83e163be2ef77bcde1cf11fb25c46ed99eb9d552c5b175->enter($__internal_95455d0bd6cb78ff8d83e163be2ef77bcde1cf11fb25c46ed99eb9d552c5b175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95455d0bd6cb78ff8d83e163be2ef77bcde1cf11fb25c46ed99eb9d552c5b175->leave($__internal_95455d0bd6cb78ff8d83e163be2ef77bcde1cf11fb25c46ed99eb9d552c5b175_prof);

        
        $__internal_0cc9a32a9399db772e6a00382ad1be96b764ab94a22f845e64f4af37f3f707f8->leave($__internal_0cc9a32a9399db772e6a00382ad1be96b764ab94a22f845e64f4af37f3f707f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1861af580d71001340adb86321803d1f9b5714f16badaae0b4270827779ae832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1861af580d71001340adb86321803d1f9b5714f16badaae0b4270827779ae832->enter($__internal_1861af580d71001340adb86321803d1f9b5714f16badaae0b4270827779ae832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd6f53b99932f4bbc7e7c0f33dcaa2ad195e64c7bb8e14f62caea4b01aeb5530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6f53b99932f4bbc7e7c0f33dcaa2ad195e64c7bb8e14f62caea4b01aeb5530->enter($__internal_bd6f53b99932f4bbc7e7c0f33dcaa2ad195e64c7bb8e14f62caea4b01aeb5530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "coucou";
        
        $__internal_bd6f53b99932f4bbc7e7c0f33dcaa2ad195e64c7bb8e14f62caea4b01aeb5530->leave($__internal_bd6f53b99932f4bbc7e7c0f33dcaa2ad195e64c7bb8e14f62caea4b01aeb5530_prof);

        
        $__internal_1861af580d71001340adb86321803d1f9b5714f16badaae0b4270827779ae832->leave($__internal_1861af580d71001340adb86321803d1f9b5714f16badaae0b4270827779ae832_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7343e7011b8bd1be5a2abb824d0ff0b2b66f5579ebb2be53fea28479d55f3357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7343e7011b8bd1be5a2abb824d0ff0b2b66f5579ebb2be53fea28479d55f3357->enter($__internal_7343e7011b8bd1be5a2abb824d0ff0b2b66f5579ebb2be53fea28479d55f3357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92384a2aadded8a8a566a20b4861f20fb489ff9e9ba0fd56e34215189d71b23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92384a2aadded8a8a566a20b4861f20fb489ff9e9ba0fd56e34215189d71b23c->enter($__internal_92384a2aadded8a8a566a20b4861f20fb489ff9e9ba0fd56e34215189d71b23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92384a2aadded8a8a566a20b4861f20fb489ff9e9ba0fd56e34215189d71b23c->leave($__internal_92384a2aadded8a8a566a20b4861f20fb489ff9e9ba0fd56e34215189d71b23c_prof);

        
        $__internal_7343e7011b8bd1be5a2abb824d0ff0b2b66f5579ebb2be53fea28479d55f3357->leave($__internal_7343e7011b8bd1be5a2abb824d0ff0b2b66f5579ebb2be53fea28479d55f3357_prof);

    }

    public function getTemplateName()
    {
        return "::pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}coucou{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
zz", "::pdf.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/app/Resources/views/pdf.html.twig");
    }
}
