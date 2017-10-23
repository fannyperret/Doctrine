<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
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
        $__internal_47d17cb9c61e943396e98bec42cbc399e42b8b45611379a50efe1f58f37f4c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d17cb9c61e943396e98bec42cbc399e42b8b45611379a50efe1f58f37f4c19->enter($__internal_47d17cb9c61e943396e98bec42cbc399e42b8b45611379a50efe1f58f37f4c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d82c22da6c23274c33edfaa8a248542435feecd446089cacbe317e8d9711387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d82c22da6c23274c33edfaa8a248542435feecd446089cacbe317e8d9711387->enter($__internal_8d82c22da6c23274c33edfaa8a248542435feecd446089cacbe317e8d9711387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d17cb9c61e943396e98bec42cbc399e42b8b45611379a50efe1f58f37f4c19->leave($__internal_47d17cb9c61e943396e98bec42cbc399e42b8b45611379a50efe1f58f37f4c19_prof);

        
        $__internal_8d82c22da6c23274c33edfaa8a248542435feecd446089cacbe317e8d9711387->leave($__internal_8d82c22da6c23274c33edfaa8a248542435feecd446089cacbe317e8d9711387_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7034a89ef209920639c302ff76c2777522e2fb3b39b93fbe7cca55b9f6e2de9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7034a89ef209920639c302ff76c2777522e2fb3b39b93fbe7cca55b9f6e2de9e->enter($__internal_7034a89ef209920639c302ff76c2777522e2fb3b39b93fbe7cca55b9f6e2de9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da846f3fce82bb3ad7309f45eaa2337554dce3e5631e5691393c6b76afcc27c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da846f3fce82bb3ad7309f45eaa2337554dce3e5631e5691393c6b76afcc27c6->enter($__internal_da846f3fce82bb3ad7309f45eaa2337554dce3e5631e5691393c6b76afcc27c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da846f3fce82bb3ad7309f45eaa2337554dce3e5631e5691393c6b76afcc27c6->leave($__internal_da846f3fce82bb3ad7309f45eaa2337554dce3e5631e5691393c6b76afcc27c6_prof);

        
        $__internal_7034a89ef209920639c302ff76c2777522e2fb3b39b93fbe7cca55b9f6e2de9e->leave($__internal_7034a89ef209920639c302ff76c2777522e2fb3b39b93fbe7cca55b9f6e2de9e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca4b3cd24ca9542fc94219d8ab6d989f4693b51c1c0ea61a86f0a0c1f9c8a74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4b3cd24ca9542fc94219d8ab6d989f4693b51c1c0ea61a86f0a0c1f9c8a74b->enter($__internal_ca4b3cd24ca9542fc94219d8ab6d989f4693b51c1c0ea61a86f0a0c1f9c8a74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b7c017f889b0c7102a99e63c7d2f942a9cd0e5f6a0135d02e6eb63cbde397ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7c017f889b0c7102a99e63c7d2f942a9cd0e5f6a0135d02e6eb63cbde397ff->enter($__internal_9b7c017f889b0c7102a99e63c7d2f942a9cd0e5f6a0135d02e6eb63cbde397ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9b7c017f889b0c7102a99e63c7d2f942a9cd0e5f6a0135d02e6eb63cbde397ff->leave($__internal_9b7c017f889b0c7102a99e63c7d2f942a9cd0e5f6a0135d02e6eb63cbde397ff_prof);

        
        $__internal_ca4b3cd24ca9542fc94219d8ab6d989f4693b51c1c0ea61a86f0a0c1f9c8a74b->leave($__internal_ca4b3cd24ca9542fc94219d8ab6d989f4693b51c1c0ea61a86f0a0c1f9c8a74b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a0e3ee5955f1a2fbf902eefb608fe2080f9589d140bcdf582fc73c9bce8f293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0e3ee5955f1a2fbf902eefb608fe2080f9589d140bcdf582fc73c9bce8f293->enter($__internal_7a0e3ee5955f1a2fbf902eefb608fe2080f9589d140bcdf582fc73c9bce8f293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c51d8cb9b0c991353274cb9659081bc9e4203bd65145223c22e0b9242d51460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c51d8cb9b0c991353274cb9659081bc9e4203bd65145223c22e0b9242d51460->enter($__internal_2c51d8cb9b0c991353274cb9659081bc9e4203bd65145223c22e0b9242d51460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2c51d8cb9b0c991353274cb9659081bc9e4203bd65145223c22e0b9242d51460->leave($__internal_2c51d8cb9b0c991353274cb9659081bc9e4203bd65145223c22e0b9242d51460_prof);

        
        $__internal_7a0e3ee5955f1a2fbf902eefb608fe2080f9589d140bcdf582fc73c9bce8f293->leave($__internal_7a0e3ee5955f1a2fbf902eefb608fe2080f9589d140bcdf582fc73c9bce8f293_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/fannyperret/Desktop/Doctrine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
