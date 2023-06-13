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

/* messier_catalogue/index.html.twig */
class __TwigTemplate_5b80f00925a10116b94f612263b70411 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messier_catalogue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messier_catalogue/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messier_catalogue/index.html.twig", 1);
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

        echo "MessierCatalogue index";
        
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
        echo "    <h1>MessierCatalogue index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th> Image </th>
                <th>Messier</th>
                <th>NGC</th>
                <th>Object_type</th>
                <th>Season</th>
                <th>Magnitude</th>
                <th>Constellation_EN</th>
                <th>Constellation_FR</th>
                <th>Constellation_Latin</th>
                <th>RA_Right_Ascension</th>
                <th>Dec_Declinaison</th>
                <th>Distance_ly_a_l</th>
                <th>Size_Dimension</th>
                <th>Discoverer</th>
                <th>Year_Annee</th>
                <th>Constellation</th>
                <th>Id</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messier_catalogues"]) || array_key_exists("messier_catalogues", $context) ? $context["messier_catalogues"] : (function () { throw new RuntimeError('Variable "messier_catalogues" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["messier_catalogue"]) {
            // line 33
            echo "            <tr>
                <td><img src=";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "URLDeLimage", [], "any", false, false, false, 34), "html", null, true);
            echo " /></td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "Messier", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "NGC", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "ObjectType", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "Season", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "Magnitude", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "ConstellationEN", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "ConstellationFR", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "ConstellationLatin", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "RARightAscension", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "DecDeclinaison", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "DistanceLyAL", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "SizeDimension", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "Discoverer", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "YearAnnee", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "Constellation", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messier_catalogue_show", ["id" => twig_get_attribute($this->env, $this->source, $context["messier_catalogue"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messier_catalogue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_messier_catalogue_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "messier_catalogue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 63,  211 => 60,  202 => 56,  193 => 52,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  121 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MessierCatalogue index{% endblock %}

{% block body %}
    <h1>MessierCatalogue index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th> Image </th>
                <th>Messier</th>
                <th>NGC</th>
                <th>Object_type</th>
                <th>Season</th>
                <th>Magnitude</th>
                <th>Constellation_EN</th>
                <th>Constellation_FR</th>
                <th>Constellation_Latin</th>
                <th>RA_Right_Ascension</th>
                <th>Dec_Declinaison</th>
                <th>Distance_ly_a_l</th>
                <th>Size_Dimension</th>
                <th>Discoverer</th>
                <th>Year_Annee</th>
                <th>Constellation</th>
                <th>Id</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for messier_catalogue in messier_catalogues %}
            <tr>
                <td><img src={{ messier_catalogue.URLDeLimage }} /></td>
                <td>{{ messier_catalogue.Messier }}</td>
                <td>{{ messier_catalogue.NGC }}</td>
                <td>{{ messier_catalogue.ObjectType }}</td>
                <td>{{ messier_catalogue.Season }}</td>
                <td>{{ messier_catalogue.Magnitude }}</td>
                <td>{{ messier_catalogue.ConstellationEN }}</td>
                <td>{{ messier_catalogue.ConstellationFR }}</td>
                <td>{{ messier_catalogue.ConstellationLatin }}</td>
                <td>{{ messier_catalogue.RARightAscension }}</td>
                <td>{{ messier_catalogue.DecDeclinaison }}</td>
                <td>{{ messier_catalogue.DistanceLyAL }}</td>
                <td>{{ messier_catalogue.SizeDimension }}</td>
                <td>{{ messier_catalogue.Discoverer }}</td>
                <td>{{ messier_catalogue.YearAnnee }}</td>
                <td>{{ messier_catalogue.Constellation }}</td>
                <td>{{ messier_catalogue.id }}</td>
                <td>
                    <a href=\"{{ path('app_messier_catalogue_show', {'id': messier_catalogue.id}) }}\">show</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"19\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_messier_catalogue_new') }}\">Create new</a>
{% endblock %}
", "messier_catalogue/index.html.twig", "/var/www/html/monprojet/templates/messier_catalogue/index.html.twig");
    }
}
