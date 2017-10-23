<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
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
        $__internal_e0f3e2438b41296b7ba33e32e43c468600f76ee39e1c0b12cbf309a6ff994d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f3e2438b41296b7ba33e32e43c468600f76ee39e1c0b12cbf309a6ff994d9d->enter($__internal_e0f3e2438b41296b7ba33e32e43c468600f76ee39e1c0b12cbf309a6ff994d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e5fcda8a5c9bc02c7689a6a609cfcdf32dda4d98c6b40a83cd054553f58d8617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fcda8a5c9bc02c7689a6a609cfcdf32dda4d98c6b40a83cd054553f58d8617->enter($__internal_e5fcda8a5c9bc02c7689a6a609cfcdf32dda4d98c6b40a83cd054553f58d8617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e0f3e2438b41296b7ba33e32e43c468600f76ee39e1c0b12cbf309a6ff994d9d->leave($__internal_e0f3e2438b41296b7ba33e32e43c468600f76ee39e1c0b12cbf309a6ff994d9d_prof);

        
        $__internal_e5fcda8a5c9bc02c7689a6a609cfcdf32dda4d98c6b40a83cd054553f58d8617->leave($__internal_e5fcda8a5c9bc02c7689a6a609cfcdf32dda4d98c6b40a83cd054553f58d8617_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1d2ce8b7ac70c417369c5b1314fd47fa7b4ba2372e9a6ff6f5428d115a1a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1d2ce8b7ac70c417369c5b1314fd47fa7b4ba2372e9a6ff6f5428d115a1a38->enter($__internal_4b1d2ce8b7ac70c417369c5b1314fd47fa7b4ba2372e9a6ff6f5428d115a1a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d371abab9f28d343243eadcefb1db2e78b93957bf523f06d3bc728923d924338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d371abab9f28d343243eadcefb1db2e78b93957bf523f06d3bc728923d924338->enter($__internal_d371abab9f28d343243eadcefb1db2e78b93957bf523f06d3bc728923d924338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d371abab9f28d343243eadcefb1db2e78b93957bf523f06d3bc728923d924338->leave($__internal_d371abab9f28d343243eadcefb1db2e78b93957bf523f06d3bc728923d924338_prof);

        
        $__internal_4b1d2ce8b7ac70c417369c5b1314fd47fa7b4ba2372e9a6ff6f5428d115a1a38->leave($__internal_4b1d2ce8b7ac70c417369c5b1314fd47fa7b4ba2372e9a6ff6f5428d115a1a38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f18e8868d222dce182bd6c7bf07ce5a9a87c67a14d6e93325b314639c5eb335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f18e8868d222dce182bd6c7bf07ce5a9a87c67a14d6e93325b314639c5eb335->enter($__internal_1f18e8868d222dce182bd6c7bf07ce5a9a87c67a14d6e93325b314639c5eb335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e59292d140eba0bdf087cd2f6deb8d851af9c2163cf7a7c710933eca3f71c789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59292d140eba0bdf087cd2f6deb8d851af9c2163cf7a7c710933eca3f71c789->enter($__internal_e59292d140eba0bdf087cd2f6deb8d851af9c2163cf7a7c710933eca3f71c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e59292d140eba0bdf087cd2f6deb8d851af9c2163cf7a7c710933eca3f71c789->leave($__internal_e59292d140eba0bdf087cd2f6deb8d851af9c2163cf7a7c710933eca3f71c789_prof);

        
        $__internal_1f18e8868d222dce182bd6c7bf07ce5a9a87c67a14d6e93325b314639c5eb335->leave($__internal_1f18e8868d222dce182bd6c7bf07ce5a9a87c67a14d6e93325b314639c5eb335_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7aa327f928c520340aec7098a41b82581ff3fe5d4aed7ae281b4ad67604a0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aa327f928c520340aec7098a41b82581ff3fe5d4aed7ae281b4ad67604a0ef->enter($__internal_a7aa327f928c520340aec7098a41b82581ff3fe5d4aed7ae281b4ad67604a0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b878c0ad8f32bcd9df63146a6e4db28d7ed49e8b16398dbf23053f80b900826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b878c0ad8f32bcd9df63146a6e4db28d7ed49e8b16398dbf23053f80b900826->enter($__internal_8b878c0ad8f32bcd9df63146a6e4db28d7ed49e8b16398dbf23053f80b900826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b878c0ad8f32bcd9df63146a6e4db28d7ed49e8b16398dbf23053f80b900826->leave($__internal_8b878c0ad8f32bcd9df63146a6e4db28d7ed49e8b16398dbf23053f80b900826_prof);

        
        $__internal_a7aa327f928c520340aec7098a41b82581ff3fe5d4aed7ae281b4ad67604a0ef->leave($__internal_a7aa327f928c520340aec7098a41b82581ff3fe5d4aed7ae281b4ad67604a0ef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca0e00639b9c3a6bf96f75bab51a3ca348bc6e69ba8d61e8e1e0975761e2a7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0e00639b9c3a6bf96f75bab51a3ca348bc6e69ba8d61e8e1e0975761e2a7cd->enter($__internal_ca0e00639b9c3a6bf96f75bab51a3ca348bc6e69ba8d61e8e1e0975761e2a7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15b331d1faad3b911bcd9849f03b5e457c4fad71823b677beb1e69775b5130a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b331d1faad3b911bcd9849f03b5e457c4fad71823b677beb1e69775b5130a5->enter($__internal_15b331d1faad3b911bcd9849f03b5e457c4fad71823b677beb1e69775b5130a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15b331d1faad3b911bcd9849f03b5e457c4fad71823b677beb1e69775b5130a5->leave($__internal_15b331d1faad3b911bcd9849f03b5e457c4fad71823b677beb1e69775b5130a5_prof);

        
        $__internal_ca0e00639b9c3a6bf96f75bab51a3ca348bc6e69ba8d61e8e1e0975761e2a7cd->leave($__internal_ca0e00639b9c3a6bf96f75bab51a3ca348bc6e69ba8d61e8e1e0975761e2a7cd_prof);

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
", "base.html.twig", "/Users/fannyperret/Desktop/Doctrine/app/Resources/views/base.html.twig");
    }
}
