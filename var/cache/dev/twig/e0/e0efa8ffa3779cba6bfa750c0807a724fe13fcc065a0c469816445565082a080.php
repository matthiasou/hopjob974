<?php

/* base.html.twig */
class __TwigTemplate_074ab8179da5a02ca883ae8b808b4c62be360c149f0ebbee6c62cd3304ce5ef6 extends Twig_Template
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
        $__internal_018bcacf7dd3a611d66c0328f8bf1e559e9baeb1fbab3ebf2ddcd42553e3de03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018bcacf7dd3a611d66c0328f8bf1e559e9baeb1fbab3ebf2ddcd42553e3de03->enter($__internal_018bcacf7dd3a611d66c0328f8bf1e559e9baeb1fbab3ebf2ddcd42553e3de03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c3d29b4dab488bd9fc573683067b6ef328033ff1cee20f556a36d89fdb78a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d29b4dab488bd9fc573683067b6ef328033ff1cee20f556a36d89fdb78a4c9->enter($__internal_c3d29b4dab488bd9fc573683067b6ef328033ff1cee20f556a36d89fdb78a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
";
        
        $__internal_018bcacf7dd3a611d66c0328f8bf1e559e9baeb1fbab3ebf2ddcd42553e3de03->leave($__internal_018bcacf7dd3a611d66c0328f8bf1e559e9baeb1fbab3ebf2ddcd42553e3de03_prof);

        
        $__internal_c3d29b4dab488bd9fc573683067b6ef328033ff1cee20f556a36d89fdb78a4c9->leave($__internal_c3d29b4dab488bd9fc573683067b6ef328033ff1cee20f556a36d89fdb78a4c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_939c9b28d8b1b59362e4b5bf444947d6a8f26bfa11907c7d3114bcd0184e6a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939c9b28d8b1b59362e4b5bf444947d6a8f26bfa11907c7d3114bcd0184e6a5d->enter($__internal_939c9b28d8b1b59362e4b5bf444947d6a8f26bfa11907c7d3114bcd0184e6a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5146f1b577eab8e60c64b15d771d8e77e409c73b8889046082248eb8a2a2e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5146f1b577eab8e60c64b15d771d8e77e409c73b8889046082248eb8a2a2e1d4->enter($__internal_5146f1b577eab8e60c64b15d771d8e77e409c73b8889046082248eb8a2a2e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5146f1b577eab8e60c64b15d771d8e77e409c73b8889046082248eb8a2a2e1d4->leave($__internal_5146f1b577eab8e60c64b15d771d8e77e409c73b8889046082248eb8a2a2e1d4_prof);

        
        $__internal_939c9b28d8b1b59362e4b5bf444947d6a8f26bfa11907c7d3114bcd0184e6a5d->leave($__internal_939c9b28d8b1b59362e4b5bf444947d6a8f26bfa11907c7d3114bcd0184e6a5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d417bcd8a44d80c5fdde970b75d352b955b74e338c3fb72964bc35ffb1e427c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d417bcd8a44d80c5fdde970b75d352b955b74e338c3fb72964bc35ffb1e427c6->enter($__internal_d417bcd8a44d80c5fdde970b75d352b955b74e338c3fb72964bc35ffb1e427c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c798b11df6da5835315e01e68af9fd288d35d9c088a045f993e7a881ae9f38d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c798b11df6da5835315e01e68af9fd288d35d9c088a045f993e7a881ae9f38d8->enter($__internal_c798b11df6da5835315e01e68af9fd288d35d9c088a045f993e7a881ae9f38d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c798b11df6da5835315e01e68af9fd288d35d9c088a045f993e7a881ae9f38d8->leave($__internal_c798b11df6da5835315e01e68af9fd288d35d9c088a045f993e7a881ae9f38d8_prof);

        
        $__internal_d417bcd8a44d80c5fdde970b75d352b955b74e338c3fb72964bc35ffb1e427c6->leave($__internal_d417bcd8a44d80c5fdde970b75d352b955b74e338c3fb72964bc35ffb1e427c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e82a1914caccabf07673cadd22b055fcc8f3e5a9d42aaca7b3a8462e5767d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e82a1914caccabf07673cadd22b055fcc8f3e5a9d42aaca7b3a8462e5767d83->enter($__internal_8e82a1914caccabf07673cadd22b055fcc8f3e5a9d42aaca7b3a8462e5767d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23f27cca17dbf2f757019984a893f7e8e26a1b5b2d0da0b0c498c22689e33563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f27cca17dbf2f757019984a893f7e8e26a1b5b2d0da0b0c498c22689e33563->enter($__internal_23f27cca17dbf2f757019984a893f7e8e26a1b5b2d0da0b0c498c22689e33563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23f27cca17dbf2f757019984a893f7e8e26a1b5b2d0da0b0c498c22689e33563->leave($__internal_23f27cca17dbf2f757019984a893f7e8e26a1b5b2d0da0b0c498c22689e33563_prof);

        
        $__internal_8e82a1914caccabf07673cadd22b055fcc8f3e5a9d42aaca7b3a8462e5767d83->leave($__internal_8e82a1914caccabf07673cadd22b055fcc8f3e5a9d42aaca7b3a8462e5767d83_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20e4807d1c9c6c810f620779b5afa45ad93d5eb81e2e4915167558d9c68ccaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e4807d1c9c6c810f620779b5afa45ad93d5eb81e2e4915167558d9c68ccaa7->enter($__internal_20e4807d1c9c6c810f620779b5afa45ad93d5eb81e2e4915167558d9c68ccaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89c720a753981a7d3c48df1a0d3c8d0b70cad5c460d5e6495920f4c528c094eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c720a753981a7d3c48df1a0d3c8d0b70cad5c460d5e6495920f4c528c094eb->enter($__internal_89c720a753981a7d3c48df1a0d3c8d0b70cad5c460d5e6495920f4c528c094eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89c720a753981a7d3c48df1a0d3c8d0b70cad5c460d5e6495920f4c528c094eb->leave($__internal_89c720a753981a7d3c48df1a0d3c8d0b70cad5c460d5e6495920f4c528c094eb_prof);

        
        $__internal_20e4807d1c9c6c810f620779b5afa45ad93d5eb81e2e4915167558d9c68ccaa7->leave($__internal_20e4807d1c9c6c810f620779b5afa45ad93d5eb81e2e4915167558d9c68ccaa7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/app/Resources/views/base.html.twig");
    }
}
