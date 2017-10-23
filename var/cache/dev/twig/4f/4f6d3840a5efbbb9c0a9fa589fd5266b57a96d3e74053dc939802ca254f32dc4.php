<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
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
        $__internal_a8ccb54d0aa423b7418d0a743041d565333ec3b8efcf8adfe4f48fe00e36edf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ccb54d0aa423b7418d0a743041d565333ec3b8efcf8adfe4f48fe00e36edf1->enter($__internal_a8ccb54d0aa423b7418d0a743041d565333ec3b8efcf8adfe4f48fe00e36edf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c3445176924b2ee98dd17ae87c9d549cb49a6c03915f070ed685a68d759f016a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3445176924b2ee98dd17ae87c9d549cb49a6c03915f070ed685a68d759f016a->enter($__internal_c3445176924b2ee98dd17ae87c9d549cb49a6c03915f070ed685a68d759f016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8ccb54d0aa423b7418d0a743041d565333ec3b8efcf8adfe4f48fe00e36edf1->leave($__internal_a8ccb54d0aa423b7418d0a743041d565333ec3b8efcf8adfe4f48fe00e36edf1_prof);

        
        $__internal_c3445176924b2ee98dd17ae87c9d549cb49a6c03915f070ed685a68d759f016a->leave($__internal_c3445176924b2ee98dd17ae87c9d549cb49a6c03915f070ed685a68d759f016a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_322f973ace6333f2f2a7e1cf27c1f29f614c02c61fa9951a5f7cb3a3ba3dcc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322f973ace6333f2f2a7e1cf27c1f29f614c02c61fa9951a5f7cb3a3ba3dcc6f->enter($__internal_322f973ace6333f2f2a7e1cf27c1f29f614c02c61fa9951a5f7cb3a3ba3dcc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_11e84072024a538a87d0ccf8ef04dbf5b055d0841e354058e4bf3f3348618b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e84072024a538a87d0ccf8ef04dbf5b055d0841e354058e4bf3f3348618b19->enter($__internal_11e84072024a538a87d0ccf8ef04dbf5b055d0841e354058e4bf3f3348618b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_11e84072024a538a87d0ccf8ef04dbf5b055d0841e354058e4bf3f3348618b19->leave($__internal_11e84072024a538a87d0ccf8ef04dbf5b055d0841e354058e4bf3f3348618b19_prof);

        
        $__internal_322f973ace6333f2f2a7e1cf27c1f29f614c02c61fa9951a5f7cb3a3ba3dcc6f->leave($__internal_322f973ace6333f2f2a7e1cf27c1f29f614c02c61fa9951a5f7cb3a3ba3dcc6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a478fc2575f6476a77596cbf1b47fcfa24c475ef6c522d51128b996b7b5e7f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a478fc2575f6476a77596cbf1b47fcfa24c475ef6c522d51128b996b7b5e7f21->enter($__internal_a478fc2575f6476a77596cbf1b47fcfa24c475ef6c522d51128b996b7b5e7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a07ec229c8da880bc4f99fbb9be10dc5176a661d85dbe80e723a2639da86215d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07ec229c8da880bc4f99fbb9be10dc5176a661d85dbe80e723a2639da86215d->enter($__internal_a07ec229c8da880bc4f99fbb9be10dc5176a661d85dbe80e723a2639da86215d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a07ec229c8da880bc4f99fbb9be10dc5176a661d85dbe80e723a2639da86215d->leave($__internal_a07ec229c8da880bc4f99fbb9be10dc5176a661d85dbe80e723a2639da86215d_prof);

        
        $__internal_a478fc2575f6476a77596cbf1b47fcfa24c475ef6c522d51128b996b7b5e7f21->leave($__internal_a478fc2575f6476a77596cbf1b47fcfa24c475ef6c522d51128b996b7b5e7f21_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bd3090273247f96be8760e0ee6d5a0291ad5bd3f2e651d05f9de1dbcf74d74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd3090273247f96be8760e0ee6d5a0291ad5bd3f2e651d05f9de1dbcf74d74f->enter($__internal_9bd3090273247f96be8760e0ee6d5a0291ad5bd3f2e651d05f9de1dbcf74d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_214ac953a78a872f5d045ea59be9efc4b46e9a1184d791237a0092121c48f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214ac953a78a872f5d045ea59be9efc4b46e9a1184d791237a0092121c48f7e5->enter($__internal_214ac953a78a872f5d045ea59be9efc4b46e9a1184d791237a0092121c48f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_214ac953a78a872f5d045ea59be9efc4b46e9a1184d791237a0092121c48f7e5->leave($__internal_214ac953a78a872f5d045ea59be9efc4b46e9a1184d791237a0092121c48f7e5_prof);

        
        $__internal_9bd3090273247f96be8760e0ee6d5a0291ad5bd3f2e651d05f9de1dbcf74d74f->leave($__internal_9bd3090273247f96be8760e0ee6d5a0291ad5bd3f2e651d05f9de1dbcf74d74f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/fannyperret/Desktop/Doctrine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
