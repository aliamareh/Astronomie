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

/* objet_celeste/index.html.twig */
class __TwigTemplate_773a43a1ef5b9d5fe8dbc323c6b0e144 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objet_celeste/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objet_celeste/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "objet_celeste/index.html.twig", 1);
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

        echo "ObjetCeleste index";
        
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
        echo "    <h1>ObjetCeleste index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>IC_NGC</th>
                <th>Name</th>
                <th>NGC</th>
                <th>IC</th>
                <th>Object_Type_abrev</th>
                <th>Object_type</th>
                <th>Ra</th>
                <th>Declinaison</th>
                <th>Major_axis</th>
                <th>Minor_axis</th>
                <th>Position_angle</th>
                <th>B_mag</th>
                <th>V_mag</th>
                <th>J_mag</th>
                <th>H_mag</th>
                <th>K_mag</th>
                <th>Surface_Brigthness</th>
                <th>Hubble_Galaxies</th>
                <th>Cstar_UMag</th>
                <th>Cstar_BMag</th>
                <th>Cstar_VMag</th>
                <th>Cstar_Names</th>
                <th>Identifiers</th>
                <th>Common_names</th>
                <th>Ned_notes</th>
                <th>Openngc_notes</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objet_celestes"]) || array_key_exists("objet_celestes", $context) ? $context["objet_celestes"] : (function () { throw new RuntimeError('Variable "objet_celestes" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["objet_celeste"]) {
            // line 44
            echo "            <tr>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "ICNGC", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "Name", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "NGC", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "IC", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "ObjectTypeAbrev", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "ObjectType", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "ra", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "declinaison", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "MajorAxis", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "MinorAxis", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "PositionAngle", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "bMag", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "vMag", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "jMag", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "hMag", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "kMag", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "SurfaceBrigthness", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "HubbleGalaxies", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "CstarUMag", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "CstarBMag", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "CstarVMag", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "CstarNames", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "identifiers", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "commonNames", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "nedNotes", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "openngcNotes", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "pictures", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objet_celeste_show", ["id" => twig_get_attribute($this->env, $this->source, $context["objet_celeste"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "            <tr>
                <td colspan=\"29\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objet_celeste'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objet_celeste_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "objet_celeste/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 85,  266 => 82,  257 => 78,  248 => 74,  243 => 72,  239 => 71,  235 => 70,  231 => 69,  227 => 68,  223 => 67,  219 => 66,  215 => 65,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  132 => 44,  127 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ObjetCeleste index{% endblock %}

{% block body %}
    <h1>ObjetCeleste index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>IC_NGC</th>
                <th>Name</th>
                <th>NGC</th>
                <th>IC</th>
                <th>Object_Type_abrev</th>
                <th>Object_type</th>
                <th>Ra</th>
                <th>Declinaison</th>
                <th>Major_axis</th>
                <th>Minor_axis</th>
                <th>Position_angle</th>
                <th>B_mag</th>
                <th>V_mag</th>
                <th>J_mag</th>
                <th>H_mag</th>
                <th>K_mag</th>
                <th>Surface_Brigthness</th>
                <th>Hubble_Galaxies</th>
                <th>Cstar_UMag</th>
                <th>Cstar_BMag</th>
                <th>Cstar_VMag</th>
                <th>Cstar_Names</th>
                <th>Identifiers</th>
                <th>Common_names</th>
                <th>Ned_notes</th>
                <th>Openngc_notes</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for objet_celeste in objet_celestes %}
            <tr>
                <td>{{ objet_celeste.id }}</td>
                <td>{{ objet_celeste.ICNGC }}</td>
                <td>{{ objet_celeste.Name }}</td>
                <td>{{ objet_celeste.NGC }}</td>
                <td>{{ objet_celeste.IC }}</td>
                <td>{{ objet_celeste.ObjectTypeAbrev }}</td>
                <td>{{ objet_celeste.ObjectType }}</td>
                <td>{{ objet_celeste.ra }}</td>
                <td>{{ objet_celeste.declinaison }}</td>
                <td>{{ objet_celeste.MajorAxis }}</td>
                <td>{{ objet_celeste.MinorAxis }}</td>
                <td>{{ objet_celeste.PositionAngle }}</td>
                <td>{{ objet_celeste.bMag }}</td>
                <td>{{ objet_celeste.vMag }}</td>
                <td>{{ objet_celeste.jMag }}</td>
                <td>{{ objet_celeste.hMag }}</td>
                <td>{{ objet_celeste.kMag }}</td>
                <td>{{ objet_celeste.SurfaceBrigthness }}</td>
                <td>{{ objet_celeste.HubbleGalaxies }}</td>
                <td>{{ objet_celeste.CstarUMag }}</td>
                <td>{{ objet_celeste.CstarBMag }}</td>
                <td>{{ objet_celeste.CstarVMag }}</td>
                <td>{{ objet_celeste.CstarNames }}</td>
                <td>{{ objet_celeste.identifiers }}</td>
                <td>{{ objet_celeste.commonNames }}</td>
                <td>{{ objet_celeste.nedNotes }}</td>
                <td>{{ objet_celeste.openngcNotes }}</td>
                <td>{{ objet_celeste.pictures }}</td>
                <td>
                    <a href=\"{{ path('app_objet_celeste_show', {'id': objet_celeste.id}) }}\">show</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"29\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_objet_celeste_new') }}\">Create new</a>
{% endblock %}
", "objet_celeste/index.html.twig", "/var/www/html/monprojet/templates/objet_celeste/index.html.twig");
    }
}
