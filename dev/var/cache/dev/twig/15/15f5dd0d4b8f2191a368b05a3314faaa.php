<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* constellation/show.html.twig */
class __TwigTemplate_08715b7e7d87e836aefbb54956ee2e1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constellation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "constellation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "constellation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Constellation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Constellation</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Image</th>
            <td> <img src=";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 12, $this->source); })()), "pictures", [], "any", false, false, false, 12), "html", null, true);
        echo "/> </td>
        </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observation_Season</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 20, $this->source); })()), "ObservationSeason", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code_Constellation</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 24, $this->source); })()), "CodeConstellation", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latin_name</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 28, $this->source); })()), "LatinName", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>French_name</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 32, $this->source); })()), "FrenchName", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>English_name</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 36, $this->source); })()), "EnglishName", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Area_in_square_degrees</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 40, $this->source); })()), "areaInSquareDegrees", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dec_Declinaison</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 44, $this->source); })()), "DecDeclinaison", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RA_Right_Ascension</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 48, $this->source); })()), "RARightAscension", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Principal_star</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 52, $this->source); })()), "PrincipalStar", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Area_celestial_sphere</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 56, $this->source); })()), "areaCelestialSphere", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zone_celestial_equator</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 60, $this->source); })()), "zoneCelestialEquator", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zone_ecliptic</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 64, $this->source); })()), "zoneEcliptic", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zone_Milky_Way</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 68, $this->source); })()), "zoneMilkyWay", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quad</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 72, $this->source); })()), "Quad", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name_origin</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 76, $this->source); })()), "NameOrigin", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constellation_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_constellation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["constellation"]) || array_key_exists("constellation", $context) ? $context["constellation"] : (function () { throw new RuntimeError('Variable "constellation" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 85
        echo twig_include($this->env, $context, "constellation/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "constellation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 85,  221 => 83,  216 => 81,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Constellation{% endblock %}

{% block body %}
    <h1>Constellation</h1>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Image</th>
            <td> <img src={{ constellation.pictures }}/> </td>
        </tr>
            <tr>
                <th>Id</th>
                <td>{{ constellation.id }}</td>
            </tr>
            <tr>
                <th>Observation_Season</th>
                <td>{{ constellation.ObservationSeason }}</td>
            </tr>
            <tr>
                <th>Code_Constellation</th>
                <td>{{ constellation.CodeConstellation }}</td>
            </tr>
            <tr>
                <th>Latin_name</th>
                <td>{{ constellation.LatinName }}</td>
            </tr>
            <tr>
                <th>French_name</th>
                <td>{{ constellation.FrenchName }}</td>
            </tr>
            <tr>
                <th>English_name</th>
                <td>{{ constellation.EnglishName }}</td>
            </tr>
            <tr>
                <th>Area_in_square_degrees</th>
                <td>{{ constellation.areaInSquareDegrees }}</td>
            </tr>
            <tr>
                <th>Dec_Declinaison</th>
                <td>{{ constellation.DecDeclinaison }}</td>
            </tr>
            <tr>
                <th>RA_Right_Ascension</th>
                <td>{{ constellation.RARightAscension }}</td>
            </tr>
            <tr>
                <th>Principal_star</th>
                <td>{{ constellation.PrincipalStar }}</td>
            </tr>
            <tr>
                <th>Area_celestial_sphere</th>
                <td>{{ constellation.areaCelestialSphere }}</td>
            </tr>
            <tr>
                <th>Zone_celestial_equator</th>
                <td>{{ constellation.zoneCelestialEquator }}</td>
            </tr>
            <tr>
                <th>Zone_ecliptic</th>
                <td>{{ constellation.zoneEcliptic }}</td>
            </tr>
            <tr>
                <th>Zone_Milky_Way</th>
                <td>{{ constellation.zoneMilkyWay }}</td>
            </tr>
            <tr>
                <th>Quad</th>
                <td>{{ constellation.Quad }}</td>
            </tr>
            <tr>
                <th>Name_origin</th>
                <td>{{ constellation.NameOrigin }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_constellation_index') }}\">back to list</a>

    <a href=\"{{ path('app_constellation_edit', {'id': constellation.id}) }}\">edit</a>

    {{ include('constellation/_delete_form.html.twig') }}
{% endblock %}
", "constellation/show.html.twig", "/var/www/html/monprojet/templates/constellation/show.html.twig");
    }
}
