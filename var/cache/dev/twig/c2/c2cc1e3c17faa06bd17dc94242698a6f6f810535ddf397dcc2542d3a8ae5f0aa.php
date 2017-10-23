<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
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
        $__internal_7eaaf6f8345e26d4b3182321c72c9f1fde8d761e5d662fc55b9c68864834910e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaaf6f8345e26d4b3182321c72c9f1fde8d761e5d662fc55b9c68864834910e->enter($__internal_7eaaf6f8345e26d4b3182321c72c9f1fde8d761e5d662fc55b9c68864834910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff65386102b83e8a451f2713cdcf5c6408dbbfd8c127317ea7003356b486fa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff65386102b83e8a451f2713cdcf5c6408dbbfd8c127317ea7003356b486fa04->enter($__internal_ff65386102b83e8a451f2713cdcf5c6408dbbfd8c127317ea7003356b486fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eaaf6f8345e26d4b3182321c72c9f1fde8d761e5d662fc55b9c68864834910e->leave($__internal_7eaaf6f8345e26d4b3182321c72c9f1fde8d761e5d662fc55b9c68864834910e_prof);

        
        $__internal_ff65386102b83e8a451f2713cdcf5c6408dbbfd8c127317ea7003356b486fa04->leave($__internal_ff65386102b83e8a451f2713cdcf5c6408dbbfd8c127317ea7003356b486fa04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_919e1f0d8d2a87c40480cfa702891356642c21ad62519a9601179d6d4399bfa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919e1f0d8d2a87c40480cfa702891356642c21ad62519a9601179d6d4399bfa0->enter($__internal_919e1f0d8d2a87c40480cfa702891356642c21ad62519a9601179d6d4399bfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b35b8a68bbc5c80b88bc6a1799963baa774cf244450ee4b1ff5435b83c9bfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b35b8a68bbc5c80b88bc6a1799963baa774cf244450ee4b1ff5435b83c9bfe5->enter($__internal_3b35b8a68bbc5c80b88bc6a1799963baa774cf244450ee4b1ff5435b83c9bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b35b8a68bbc5c80b88bc6a1799963baa774cf244450ee4b1ff5435b83c9bfe5->leave($__internal_3b35b8a68bbc5c80b88bc6a1799963baa774cf244450ee4b1ff5435b83c9bfe5_prof);

        
        $__internal_919e1f0d8d2a87c40480cfa702891356642c21ad62519a9601179d6d4399bfa0->leave($__internal_919e1f0d8d2a87c40480cfa702891356642c21ad62519a9601179d6d4399bfa0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4332bf0e0d6879f1f18a643b9cbc98ccfc443e209d5edb536d282a6df8d31f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4332bf0e0d6879f1f18a643b9cbc98ccfc443e209d5edb536d282a6df8d31f6->enter($__internal_e4332bf0e0d6879f1f18a643b9cbc98ccfc443e209d5edb536d282a6df8d31f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c71f8ec8e559d513601e1b2df9a13fd3c46789defb1e4de6276076abd22c5432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71f8ec8e559d513601e1b2df9a13fd3c46789defb1e4de6276076abd22c5432->enter($__internal_c71f8ec8e559d513601e1b2df9a13fd3c46789defb1e4de6276076abd22c5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c71f8ec8e559d513601e1b2df9a13fd3c46789defb1e4de6276076abd22c5432->leave($__internal_c71f8ec8e559d513601e1b2df9a13fd3c46789defb1e4de6276076abd22c5432_prof);

        
        $__internal_e4332bf0e0d6879f1f18a643b9cbc98ccfc443e209d5edb536d282a6df8d31f6->leave($__internal_e4332bf0e0d6879f1f18a643b9cbc98ccfc443e209d5edb536d282a6df8d31f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b32e17c5f91d7fc88022dc19bf4220f53c1b3b2595f9e2b9da14506c15b30b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32e17c5f91d7fc88022dc19bf4220f53c1b3b2595f9e2b9da14506c15b30b4b->enter($__internal_b32e17c5f91d7fc88022dc19bf4220f53c1b3b2595f9e2b9da14506c15b30b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54d83e350b5907f00960cfe445c686bca23d0d678912a99fe4be94c1f6631828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d83e350b5907f00960cfe445c686bca23d0d678912a99fe4be94c1f6631828->enter($__internal_54d83e350b5907f00960cfe445c686bca23d0d678912a99fe4be94c1f6631828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_54d83e350b5907f00960cfe445c686bca23d0d678912a99fe4be94c1f6631828->leave($__internal_54d83e350b5907f00960cfe445c686bca23d0d678912a99fe4be94c1f6631828_prof);

        
        $__internal_b32e17c5f91d7fc88022dc19bf4220f53c1b3b2595f9e2b9da14506c15b30b4b->leave($__internal_b32e17c5f91d7fc88022dc19bf4220f53c1b3b2595f9e2b9da14506c15b30b4b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/fannyperret/Desktop/Doctrine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
