<?php

/* base.html.twig */
class __TwigTemplate_86cb40e7371971b5f209c78e0735e60b6b3386e4ac6af9fda9a8f030aa30ac64 extends Twig_Template
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
        $__internal_6d86852b98ae819dc1bd464769be7d4647ca900532f459474ae9cec8e4ae7374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d86852b98ae819dc1bd464769be7d4647ca900532f459474ae9cec8e4ae7374->enter($__internal_6d86852b98ae819dc1bd464769be7d4647ca900532f459474ae9cec8e4ae7374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_97ff6dba84c3d83ae0637707410d0b396c5cebcd1da2810ae0d8f4c77f57d426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff6dba84c3d83ae0637707410d0b396c5cebcd1da2810ae0d8f4c77f57d426->enter($__internal_97ff6dba84c3d83ae0637707410d0b396c5cebcd1da2810ae0d8f4c77f57d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6d86852b98ae819dc1bd464769be7d4647ca900532f459474ae9cec8e4ae7374->leave($__internal_6d86852b98ae819dc1bd464769be7d4647ca900532f459474ae9cec8e4ae7374_prof);

        
        $__internal_97ff6dba84c3d83ae0637707410d0b396c5cebcd1da2810ae0d8f4c77f57d426->leave($__internal_97ff6dba84c3d83ae0637707410d0b396c5cebcd1da2810ae0d8f4c77f57d426_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb164df7f81a4f00559254b5a6926b5acecc7f0ddc95ce100338e92c24862a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb164df7f81a4f00559254b5a6926b5acecc7f0ddc95ce100338e92c24862a92->enter($__internal_eb164df7f81a4f00559254b5a6926b5acecc7f0ddc95ce100338e92c24862a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3d34a2ad76cfbe9ced6cb26dc43f4baaf8a65c4c07267ad6da234fd53698dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d34a2ad76cfbe9ced6cb26dc43f4baaf8a65c4c07267ad6da234fd53698dbe->enter($__internal_e3d34a2ad76cfbe9ced6cb26dc43f4baaf8a65c4c07267ad6da234fd53698dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3d34a2ad76cfbe9ced6cb26dc43f4baaf8a65c4c07267ad6da234fd53698dbe->leave($__internal_e3d34a2ad76cfbe9ced6cb26dc43f4baaf8a65c4c07267ad6da234fd53698dbe_prof);

        
        $__internal_eb164df7f81a4f00559254b5a6926b5acecc7f0ddc95ce100338e92c24862a92->leave($__internal_eb164df7f81a4f00559254b5a6926b5acecc7f0ddc95ce100338e92c24862a92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da27394c15a45e7d8c4bcc8bc99d94d1a758ad32c3b38b86b5263ef57d005df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da27394c15a45e7d8c4bcc8bc99d94d1a758ad32c3b38b86b5263ef57d005df4->enter($__internal_da27394c15a45e7d8c4bcc8bc99d94d1a758ad32c3b38b86b5263ef57d005df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4df804df5fcbff81457a5121305c658566aabee9a8844e9e2b8c8198c4d4e16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df804df5fcbff81457a5121305c658566aabee9a8844e9e2b8c8198c4d4e16c->enter($__internal_4df804df5fcbff81457a5121305c658566aabee9a8844e9e2b8c8198c4d4e16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4df804df5fcbff81457a5121305c658566aabee9a8844e9e2b8c8198c4d4e16c->leave($__internal_4df804df5fcbff81457a5121305c658566aabee9a8844e9e2b8c8198c4d4e16c_prof);

        
        $__internal_da27394c15a45e7d8c4bcc8bc99d94d1a758ad32c3b38b86b5263ef57d005df4->leave($__internal_da27394c15a45e7d8c4bcc8bc99d94d1a758ad32c3b38b86b5263ef57d005df4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecca93f59e25631f4120061876956116207ffb5a363c70245de5826f38ef17f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecca93f59e25631f4120061876956116207ffb5a363c70245de5826f38ef17f3->enter($__internal_ecca93f59e25631f4120061876956116207ffb5a363c70245de5826f38ef17f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfebc2f569a14081d82563654220c65ef5921f68c343552211de2129d98bd91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfebc2f569a14081d82563654220c65ef5921f68c343552211de2129d98bd91e->enter($__internal_bfebc2f569a14081d82563654220c65ef5921f68c343552211de2129d98bd91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfebc2f569a14081d82563654220c65ef5921f68c343552211de2129d98bd91e->leave($__internal_bfebc2f569a14081d82563654220c65ef5921f68c343552211de2129d98bd91e_prof);

        
        $__internal_ecca93f59e25631f4120061876956116207ffb5a363c70245de5826f38ef17f3->leave($__internal_ecca93f59e25631f4120061876956116207ffb5a363c70245de5826f38ef17f3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0447e127a4457f154d1d24a1939f848858bab07ca44d753cbc731c5c04a086c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0447e127a4457f154d1d24a1939f848858bab07ca44d753cbc731c5c04a086c9->enter($__internal_0447e127a4457f154d1d24a1939f848858bab07ca44d753cbc731c5c04a086c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b90519a6760798c8c170d724c54ef93a2e3a7ed9af1a802d1cabd6786a2cef34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90519a6760798c8c170d724c54ef93a2e3a7ed9af1a802d1cabd6786a2cef34->enter($__internal_b90519a6760798c8c170d724c54ef93a2e3a7ed9af1a802d1cabd6786a2cef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b90519a6760798c8c170d724c54ef93a2e3a7ed9af1a802d1cabd6786a2cef34->leave($__internal_b90519a6760798c8c170d724c54ef93a2e3a7ed9af1a802d1cabd6786a2cef34_prof);

        
        $__internal_0447e127a4457f154d1d24a1939f848858bab07ca44d753cbc731c5c04a086c9->leave($__internal_0447e127a4457f154d1d24a1939f848858bab07ca44d753cbc731c5c04a086c9_prof);

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
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjobDev/app/Resources/views/base.html.twig");
    }
}
