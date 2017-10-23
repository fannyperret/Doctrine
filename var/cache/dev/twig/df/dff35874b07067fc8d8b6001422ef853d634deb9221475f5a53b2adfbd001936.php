<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f70a9cb046b0a9ba85f017d900ebfd9beb81df08c56985c0e4f38991ee64756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f70a9cb046b0a9ba85f017d900ebfd9beb81df08c56985c0e4f38991ee64756->enter($__internal_1f70a9cb046b0a9ba85f017d900ebfd9beb81df08c56985c0e4f38991ee64756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2d42f1bf68470993ae147b5410b0fd12f18074bcb06730a741ed4b86c6f534c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d42f1bf68470993ae147b5410b0fd12f18074bcb06730a741ed4b86c6f534c4->enter($__internal_2d42f1bf68470993ae147b5410b0fd12f18074bcb06730a741ed4b86c6f534c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1f70a9cb046b0a9ba85f017d900ebfd9beb81df08c56985c0e4f38991ee64756->leave($__internal_1f70a9cb046b0a9ba85f017d900ebfd9beb81df08c56985c0e4f38991ee64756_prof);

        
        $__internal_2d42f1bf68470993ae147b5410b0fd12f18074bcb06730a741ed4b86c6f534c4->leave($__internal_2d42f1bf68470993ae147b5410b0fd12f18074bcb06730a741ed4b86c6f534c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cf8d5cc83976b4c136faa82e05a024e97ec4651e72c85d634b7b947b53d32cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf8d5cc83976b4c136faa82e05a024e97ec4651e72c85d634b7b947b53d32cc->enter($__internal_3cf8d5cc83976b4c136faa82e05a024e97ec4651e72c85d634b7b947b53d32cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8b801231eabceeadbba0e6e1d8b14582dddac647b71a2b044dfba851eddd4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b801231eabceeadbba0e6e1d8b14582dddac647b71a2b044dfba851eddd4ae->enter($__internal_e8b801231eabceeadbba0e6e1d8b14582dddac647b71a2b044dfba851eddd4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e8b801231eabceeadbba0e6e1d8b14582dddac647b71a2b044dfba851eddd4ae->leave($__internal_e8b801231eabceeadbba0e6e1d8b14582dddac647b71a2b044dfba851eddd4ae_prof);

        
        $__internal_3cf8d5cc83976b4c136faa82e05a024e97ec4651e72c85d634b7b947b53d32cc->leave($__internal_3cf8d5cc83976b4c136faa82e05a024e97ec4651e72c85d634b7b947b53d32cc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_817dde722c92d5e185a0060cd0959ce2a40d79cb660ef7bf8d169e3d315c0954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817dde722c92d5e185a0060cd0959ce2a40d79cb660ef7bf8d169e3d315c0954->enter($__internal_817dde722c92d5e185a0060cd0959ce2a40d79cb660ef7bf8d169e3d315c0954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9eb97fe4e81c74d7f98075f2d8fe6214c4748b96e24192f2a09e2d3869e8c5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb97fe4e81c74d7f98075f2d8fe6214c4748b96e24192f2a09e2d3869e8c5f0->enter($__internal_9eb97fe4e81c74d7f98075f2d8fe6214c4748b96e24192f2a09e2d3869e8c5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9eb97fe4e81c74d7f98075f2d8fe6214c4748b96e24192f2a09e2d3869e8c5f0->leave($__internal_9eb97fe4e81c74d7f98075f2d8fe6214c4748b96e24192f2a09e2d3869e8c5f0_prof);

        
        $__internal_817dde722c92d5e185a0060cd0959ce2a40d79cb660ef7bf8d169e3d315c0954->leave($__internal_817dde722c92d5e185a0060cd0959ce2a40d79cb660ef7bf8d169e3d315c0954_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8449cd1cf3bab10f1fc713aa3323d6323438d945156fab23539d70ba0ba74e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8449cd1cf3bab10f1fc713aa3323d6323438d945156fab23539d70ba0ba74e94->enter($__internal_8449cd1cf3bab10f1fc713aa3323d6323438d945156fab23539d70ba0ba74e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_149853d77c3a6ab2c73626e7313d64efc69dc1eacdeed5413d0e9fd6c8b3bb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149853d77c3a6ab2c73626e7313d64efc69dc1eacdeed5413d0e9fd6c8b3bb39->enter($__internal_149853d77c3a6ab2c73626e7313d64efc69dc1eacdeed5413d0e9fd6c8b3bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_149853d77c3a6ab2c73626e7313d64efc69dc1eacdeed5413d0e9fd6c8b3bb39->leave($__internal_149853d77c3a6ab2c73626e7313d64efc69dc1eacdeed5413d0e9fd6c8b3bb39_prof);

        
        $__internal_8449cd1cf3bab10f1fc713aa3323d6323438d945156fab23539d70ba0ba74e94->leave($__internal_8449cd1cf3bab10f1fc713aa3323d6323438d945156fab23539d70ba0ba74e94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/fannyperret/Desktop/Doctrine/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
