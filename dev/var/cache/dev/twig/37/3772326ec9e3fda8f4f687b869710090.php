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

/* messier_catalogue/show.html.twig */
class __TwigTemplate_517184b52ea83ab4d2e6ad0c53f635a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messier_catalogue/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messier_catalogue/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messier_catalogue/show.html.twig", 1);
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

        echo "MessierCatalogue";
        
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
        echo "    <h1>MessierCatalogue</h1>

    <table class=\"table\">
        <tbody>
            <tr>
            <tr>
                <th>Image</th>
                <td><img src=";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 13, $this->source); })()), "URLDeLimage", [], "any", false, false, false, 13), "html", null, true);
        echo " /></td>
            </tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Messier</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 20, $this->source); })()), "Messier", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NGC</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 24, $this->source); })()), "NGC", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Object_type</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 28, $this->source); })()), "ObjectType", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Season</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 32, $this->source); })()), "Season", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Magnitude</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 36, $this->source); })()), "Magnitude", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constellation_EN</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 40, $this->source); })()), "ConstellationEN", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constellation_FR</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 44, $this->source); })()), "ConstellationFR", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constellation_Latin</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 48, $this->source); })()), "ConstellationLatin", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>RA_Right_Ascension</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 52, $this->source); })()), "RARightAscension", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dec_Declinaison</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 56, $this->source); })()), "DecDeclinaison", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distance_ly_a_l</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 60, $this->source); })()), "DistanceLyAL", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Size_Dimension</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 64, $this->source); })()), "SizeDimension", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Discoverer</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 68, $this->source); })()), "Discoverer", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year_Annee</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 72, $this->source); })()), "YearAnnee", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pictures</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 76, $this->source); })()), "Pictures", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Constellation</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 80, $this->source); })()), "Constellation", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messier_catalogue_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messier_catalogue_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["messier_catalogue"]) || array_key_exists("messier_catalogue", $context) ? $context["messier_catalogue"] : (function () { throw new RuntimeError('Variable "messier_catalogue" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 89
        echo twig_include($this->env, $context, "messier_catalogue/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "messier_catalogue/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 89,  228 => 87,  223 => 85,  215 => 80,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MessierCatalogue{% endblock %}

{% block body %}
    <h1>MessierCatalogue</h1>

    <table class=\"table\">
        <tbody>
            <tr>
            <tr>
                <th>Image</th>
                <td><img src={{ messier_catalogue.URLDeLimage }} /></td>
            </tr>
                <th>Id</th>
                <td>{{ messier_catalogue.id }}</td>
            </tr>
            <tr>
                <th>Messier</th>
                <td>{{ messier_catalogue.Messier }}</td>
            </tr>
            <tr>
                <th>NGC</th>
                <td>{{ messier_catalogue.NGC }}</td>
            </tr>
            <tr>
                <th>Object_type</th>
                <td>{{ messier_catalogue.ObjectType }}</td>
            </tr>
            <tr>
                <th>Season</th>
                <td>{{ messier_catalogue.Season }}</td>
            </tr>
            <tr>
                <th>Magnitude</th>
                <td>{{ messier_catalogue.Magnitude }}</td>
            </tr>
            <tr>
                <th>Constellation_EN</th>
                <td>{{ messier_catalogue.ConstellationEN }}</td>
            </tr>
            <tr>
                <th>Constellation_FR</th>
                <td>{{ messier_catalogue.ConstellationFR }}</td>
            </tr>
            <tr>
                <th>Constellation_Latin</th>
                <td>{{ messier_catalogue.ConstellationLatin }}</td>
            </tr>
            <tr>
                <th>RA_Right_Ascension</th>
                <td>{{ messier_catalogue.RARightAscension }}</td>
            </tr>
            <tr>
                <th>Dec_Declinaison</th>
                <td>{{ messier_catalogue.DecDeclinaison }}</td>
            </tr>
            <tr>
                <th>Distance_ly_a_l</th>
                <td>{{ messier_catalogue.DistanceLyAL }}</td>
            </tr>
            <tr>
                <th>Size_Dimension</th>
                <td>{{ messier_catalogue.SizeDimension }}</td>
            </tr>
            <tr>
                <th>Discoverer</th>
                <td>{{ messier_catalogue.Discoverer }}</td>
            </tr>
            <tr>
                <th>Year_Annee</th>
                <td>{{ messier_catalogue.YearAnnee }}</td>
            </tr>
            <tr>
                <th>Pictures</th>
                <td>{{ messier_catalogue.Pictures }}</td>
            </tr>
            <tr>
                <th>Constellation</th>
                <td>{{ messier_catalogue.Constellation }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_messier_catalogue_index') }}\">back to list</a>

    <a href=\"{{ path('app_messier_catalogue_edit', {'id': messier_catalogue.id}) }}\">edit</a>

    {{ include('messier_catalogue/_delete_form.html.twig') }}
{% endblock %}
", "messier_catalogue/show.html.twig", "/var/www/html/monprojet/templates/messier_catalogue/show.html.twig");
    }
}
