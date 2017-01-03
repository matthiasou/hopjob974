<?php

/* ::pdf.html.twig */
class __TwigTemplate_450d97e272890823daa0067b0a825ad81ec92ee50d781422811fe115ea073c2d extends Twig_Template
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
        $__internal_c999dc6041e81606541c531de6a25ae26185d1261dd2aeaa9d5f330f8e4b7cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c999dc6041e81606541c531de6a25ae26185d1261dd2aeaa9d5f330f8e4b7cd2->enter($__internal_c999dc6041e81606541c531de6a25ae26185d1261dd2aeaa9d5f330f8e4b7cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pdf.html.twig"));

        $__internal_d0e5a07c65b8708646fe5811347f93e5b43ae49c1664ff1541e4ea66506dc83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e5a07c65b8708646fe5811347f93e5b43ae49c1664ff1541e4ea66506dc83e->enter($__internal_d0e5a07c65b8708646fe5811347f93e5b43ae49c1664ff1541e4ea66506dc83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::pdf.html.twig"));

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
        
        $__internal_c999dc6041e81606541c531de6a25ae26185d1261dd2aeaa9d5f330f8e4b7cd2->leave($__internal_c999dc6041e81606541c531de6a25ae26185d1261dd2aeaa9d5f330f8e4b7cd2_prof);

        
        $__internal_d0e5a07c65b8708646fe5811347f93e5b43ae49c1664ff1541e4ea66506dc83e->leave($__internal_d0e5a07c65b8708646fe5811347f93e5b43ae49c1664ff1541e4ea66506dc83e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c40762f7166f43b90ab27c394e65841f0873c3514b555054047de35cfe5ad806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40762f7166f43b90ab27c394e65841f0873c3514b555054047de35cfe5ad806->enter($__internal_c40762f7166f43b90ab27c394e65841f0873c3514b555054047de35cfe5ad806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a0eec1af0fb4dcea84896ce3c919e59f55f1664d05147e8a6c05c7202f0cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0eec1af0fb4dcea84896ce3c919e59f55f1664d05147e8a6c05c7202f0cd93->enter($__internal_8a0eec1af0fb4dcea84896ce3c919e59f55f1664d05147e8a6c05c7202f0cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a0eec1af0fb4dcea84896ce3c919e59f55f1664d05147e8a6c05c7202f0cd93->leave($__internal_8a0eec1af0fb4dcea84896ce3c919e59f55f1664d05147e8a6c05c7202f0cd93_prof);

        
        $__internal_c40762f7166f43b90ab27c394e65841f0873c3514b555054047de35cfe5ad806->leave($__internal_c40762f7166f43b90ab27c394e65841f0873c3514b555054047de35cfe5ad806_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea4586f7f61c75d2caf3b222b7ba7de51d7d0b62475b18ed8e2251aa2455ea4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4586f7f61c75d2caf3b222b7ba7de51d7d0b62475b18ed8e2251aa2455ea4f->enter($__internal_ea4586f7f61c75d2caf3b222b7ba7de51d7d0b62475b18ed8e2251aa2455ea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4dedf3de48af6a5b2b00d6c152a3c6515061194c769fa6e0a40fda7a8deec2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dedf3de48af6a5b2b00d6c152a3c6515061194c769fa6e0a40fda7a8deec2f6->enter($__internal_4dedf3de48af6a5b2b00d6c152a3c6515061194c769fa6e0a40fda7a8deec2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4dedf3de48af6a5b2b00d6c152a3c6515061194c769fa6e0a40fda7a8deec2f6->leave($__internal_4dedf3de48af6a5b2b00d6c152a3c6515061194c769fa6e0a40fda7a8deec2f6_prof);

        
        $__internal_ea4586f7f61c75d2caf3b222b7ba7de51d7d0b62475b18ed8e2251aa2455ea4f->leave($__internal_ea4586f7f61c75d2caf3b222b7ba7de51d7d0b62475b18ed8e2251aa2455ea4f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e55131d4530f3fa03b9bd376115351d8011ae56eef00b6df78dc3fd8212d1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e55131d4530f3fa03b9bd376115351d8011ae56eef00b6df78dc3fd8212d1a2->enter($__internal_8e55131d4530f3fa03b9bd376115351d8011ae56eef00b6df78dc3fd8212d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_959568a6a5dc07d7ead3d427656c96f9b60f382f727316250cd25a3734cb96fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959568a6a5dc07d7ead3d427656c96f9b60f382f727316250cd25a3734cb96fd->enter($__internal_959568a6a5dc07d7ead3d427656c96f9b60f382f727316250cd25a3734cb96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "coucou";
        
        $__internal_959568a6a5dc07d7ead3d427656c96f9b60f382f727316250cd25a3734cb96fd->leave($__internal_959568a6a5dc07d7ead3d427656c96f9b60f382f727316250cd25a3734cb96fd_prof);

        
        $__internal_8e55131d4530f3fa03b9bd376115351d8011ae56eef00b6df78dc3fd8212d1a2->leave($__internal_8e55131d4530f3fa03b9bd376115351d8011ae56eef00b6df78dc3fd8212d1a2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f9c87875673754fc6c4c57b6e2ee732fb34972680a810bb56d4c4f3c5c8592a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9c87875673754fc6c4c57b6e2ee732fb34972680a810bb56d4c4f3c5c8592a->enter($__internal_2f9c87875673754fc6c4c57b6e2ee732fb34972680a810bb56d4c4f3c5c8592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e29c1faefd085fb55f053a55e841db3aed96c8ebe77d932763fe19ee23aa2d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29c1faefd085fb55f053a55e841db3aed96c8ebe77d932763fe19ee23aa2d2e->enter($__internal_e29c1faefd085fb55f053a55e841db3aed96c8ebe77d932763fe19ee23aa2d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e29c1faefd085fb55f053a55e841db3aed96c8ebe77d932763fe19ee23aa2d2e->leave($__internal_e29c1faefd085fb55f053a55e841db3aed96c8ebe77d932763fe19ee23aa2d2e_prof);

        
        $__internal_2f9c87875673754fc6c4c57b6e2ee732fb34972680a810bb56d4c4f3c5c8592a->leave($__internal_2f9c87875673754fc6c4c57b6e2ee732fb34972680a810bb56d4c4f3c5c8592a_prof);

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
zz", "::pdf.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/app/Resources/views/pdf.html.twig");
    }
}
