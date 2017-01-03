<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_53e6fce82fe5196fcbd276d9bb6933e939cb48d175c90b00caffecc801edece5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7e0942f3644f4f5051a3153c4dfeb45e29d00f02fc620b49a8a75615cf150493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0942f3644f4f5051a3153c4dfeb45e29d00f02fc620b49a8a75615cf150493->enter($__internal_7e0942f3644f4f5051a3153c4dfeb45e29d00f02fc620b49a8a75615cf150493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0b0a2f16f01096ec25390f0d6b161993d29054c7d90e1ba12c6bf8460cb769ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0a2f16f01096ec25390f0d6b161993d29054c7d90e1ba12c6bf8460cb769ed->enter($__internal_0b0a2f16f01096ec25390f0d6b161993d29054c7d90e1ba12c6bf8460cb769ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0942f3644f4f5051a3153c4dfeb45e29d00f02fc620b49a8a75615cf150493->leave($__internal_7e0942f3644f4f5051a3153c4dfeb45e29d00f02fc620b49a8a75615cf150493_prof);

        
        $__internal_0b0a2f16f01096ec25390f0d6b161993d29054c7d90e1ba12c6bf8460cb769ed->leave($__internal_0b0a2f16f01096ec25390f0d6b161993d29054c7d90e1ba12c6bf8460cb769ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b9256f504bf4d06eb42b63ea923c8add05cb74a3fb810360160d6a671c3fc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9256f504bf4d06eb42b63ea923c8add05cb74a3fb810360160d6a671c3fc2c->enter($__internal_5b9256f504bf4d06eb42b63ea923c8add05cb74a3fb810360160d6a671c3fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8de5dd580ca434f5a761b33e5cffb5aa8ec1b40ded260b44045b5064ebb3c8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de5dd580ca434f5a761b33e5cffb5aa8ec1b40ded260b44045b5064ebb3c8de->enter($__internal_8de5dd580ca434f5a761b33e5cffb5aa8ec1b40ded260b44045b5064ebb3c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8de5dd580ca434f5a761b33e5cffb5aa8ec1b40ded260b44045b5064ebb3c8de->leave($__internal_8de5dd580ca434f5a761b33e5cffb5aa8ec1b40ded260b44045b5064ebb3c8de_prof);

        
        $__internal_5b9256f504bf4d06eb42b63ea923c8add05cb74a3fb810360160d6a671c3fc2c->leave($__internal_5b9256f504bf4d06eb42b63ea923c8add05cb74a3fb810360160d6a671c3fc2c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abae2085e60ec00f95f2b8a80877430aba5ca7228a40e53a79d17853f9cc0ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abae2085e60ec00f95f2b8a80877430aba5ca7228a40e53a79d17853f9cc0ae3->enter($__internal_abae2085e60ec00f95f2b8a80877430aba5ca7228a40e53a79d17853f9cc0ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b6fc83d86263f4c973e68067a385454116ab1cab6e7d93d33845b18511cd4efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fc83d86263f4c973e68067a385454116ab1cab6e7d93d33845b18511cd4efd->enter($__internal_b6fc83d86263f4c973e68067a385454116ab1cab6e7d93d33845b18511cd4efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b6fc83d86263f4c973e68067a385454116ab1cab6e7d93d33845b18511cd4efd->leave($__internal_b6fc83d86263f4c973e68067a385454116ab1cab6e7d93d33845b18511cd4efd_prof);

        
        $__internal_abae2085e60ec00f95f2b8a80877430aba5ca7228a40e53a79d17853f9cc0ae3->leave($__internal_abae2085e60ec00f95f2b8a80877430aba5ca7228a40e53a79d17853f9cc0ae3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1c4906740be4d7617d724541a4670b645db93029f2cd4c3bd53e4adc1aa4c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c4906740be4d7617d724541a4670b645db93029f2cd4c3bd53e4adc1aa4c0c->enter($__internal_c1c4906740be4d7617d724541a4670b645db93029f2cd4c3bd53e4adc1aa4c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c2ded8944eb5a21cb2a1b910bce6b6b30a51e085a401a8a083f58517c6cdfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2ded8944eb5a21cb2a1b910bce6b6b30a51e085a401a8a083f58517c6cdfdc->enter($__internal_6c2ded8944eb5a21cb2a1b910bce6b6b30a51e085a401a8a083f58517c6cdfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6c2ded8944eb5a21cb2a1b910bce6b6b30a51e085a401a8a083f58517c6cdfdc->leave($__internal_6c2ded8944eb5a21cb2a1b910bce6b6b30a51e085a401a8a083f58517c6cdfdc_prof);

        
        $__internal_c1c4906740be4d7617d724541a4670b645db93029f2cd4c3bd53e4adc1aa4c0c->leave($__internal_c1c4906740be4d7617d724541a4670b645db93029f2cd4c3bd53e4adc1aa4c0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hopjob974/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
