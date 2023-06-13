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

/* objet_celeste/show.html.twig */
class __TwigTemplate_a9aca504cfb721c71846c25a055313c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objet_celeste/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objet_celeste/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "objet_celeste/show.html.twig", 1);
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

        echo "ObjetCeleste";
        
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
        echo "    <h1>ObjetCeleste</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IC_NGC</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 16, $this->source); })()), "ICNGC", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 20, $this->source); })()), "Name", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NGC</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 24, $this->source); })()), "NGC", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>IC</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 28, $this->source); })()), "IC", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Object_Type_abrev</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 32, $this->source); })()), "ObjectTypeAbrev", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Object_type</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 36, $this->source); })()), "ObjectType", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ra</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 40, $this->source); })()), "ra", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Declinaison</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 44, $this->source); })()), "declinaison", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Major_axis</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 48, $this->source); })()), "MajorAxis", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Minor_axis</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 52, $this->source); })()), "MinorAxis", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position_angle</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 56, $this->source); })()), "PositionAngle", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>B_mag</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 60, $this->source); })()), "bMag", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>V_mag</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 64, $this->source); })()), "vMag", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>J_mag</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 68, $this->source); })()), "jMag", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>H_mag</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 72, $this->source); })()), "hMag", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>K_mag</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 76, $this->source); })()), "kMag", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surface_Brigthness</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 80, $this->source); })()), "SurfaceBrigthness", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hubble_Galaxies</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 84, $this->source); })()), "HubbleGalaxies", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cstar_UMag</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 88, $this->source); })()), "CstarUMag", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cstar_BMag</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 92, $this->source); })()), "CstarBMag", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cstar_VMag</th>
                <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 96, $this->source); })()), "CstarVMag", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cstar_Names</th>
                <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 100, $this->source); })()), "CstarNames", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Identifiers</th>
                <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 104, $this->source); })()), "identifiers", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Common_names</th>
                <td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 108, $this->source); })()), "commonNames", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ned_notes</th>
                <td>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 112, $this->source); })()), "nedNotes", [], "any", false, false, false, 112), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Openngc_notes</th>
                <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 116, $this->source); })()), "openngcNotes", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pictures</th>
                <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 120, $this->source); })()), "Pictures", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objet_celeste_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_objet_celeste_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["objet_celeste"]) || array_key_exists("objet_celeste", $context) ? $context["objet_celeste"] : (function () { throw new RuntimeError('Variable "objet_celeste" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 129
        echo twig_include($this->env, $context, "objet_celeste/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "objet_celeste/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 129,  298 => 127,  293 => 125,  285 => 120,  278 => 116,  271 => 112,  264 => 108,  257 => 104,  250 => 100,  243 => 96,  236 => 92,  229 => 88,  222 => 84,  215 => 80,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ObjetCeleste{% endblock %}

{% block body %}
    <h1>ObjetCeleste</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ objet_celeste.id }}</td>
            </tr>
            <tr>
                <th>IC_NGC</th>
                <td>{{ objet_celeste.ICNGC }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ objet_celeste.Name }}</td>
            </tr>
            <tr>
                <th>NGC</th>
                <td>{{ objet_celeste.NGC }}</td>
            </tr>
            <tr>
                <th>IC</th>
                <td>{{ objet_celeste.IC }}</td>
            </tr>
            <tr>
                <th>Object_Type_abrev</th>
                <td>{{ objet_celeste.ObjectTypeAbrev }}</td>
            </tr>
            <tr>
                <th>Object_type</th>
                <td>{{ objet_celeste.ObjectType }}</td>
            </tr>
            <tr>
                <th>Ra</th>
                <td>{{ objet_celeste.ra }}</td>
            </tr>
            <tr>
                <th>Declinaison</th>
                <td>{{ objet_celeste.declinaison }}</td>
            </tr>
            <tr>
                <th>Major_axis</th>
                <td>{{ objet_celeste.MajorAxis }}</td>
            </tr>
            <tr>
                <th>Minor_axis</th>
                <td>{{ objet_celeste.MinorAxis }}</td>
            </tr>
            <tr>
                <th>Position_angle</th>
                <td>{{ objet_celeste.PositionAngle }}</td>
            </tr>
            <tr>
                <th>B_mag</th>
                <td>{{ objet_celeste.bMag }}</td>
            </tr>
            <tr>
                <th>V_mag</th>
                <td>{{ objet_celeste.vMag }}</td>
            </tr>
            <tr>
                <th>J_mag</th>
                <td>{{ objet_celeste.jMag }}</td>
            </tr>
            <tr>
                <th>H_mag</th>
                <td>{{ objet_celeste.hMag }}</td>
            </tr>
            <tr>
                <th>K_mag</th>
                <td>{{ objet_celeste.kMag }}</td>
            </tr>
            <tr>
                <th>Surface_Brigthness</th>
                <td>{{ objet_celeste.SurfaceBrigthness }}</td>
            </tr>
            <tr>
                <th>Hubble_Galaxies</th>
                <td>{{ objet_celeste.HubbleGalaxies }}</td>
            </tr>
            <tr>
                <th>Cstar_UMag</th>
                <td>{{ objet_celeste.CstarUMag }}</td>
            </tr>
            <tr>
                <th>Cstar_BMag</th>
                <td>{{ objet_celeste.CstarBMag }}</td>
            </tr>
            <tr>
                <th>Cstar_VMag</th>
                <td>{{ objet_celeste.CstarVMag }}</td>
            </tr>
            <tr>
                <th>Cstar_Names</th>
                <td>{{ objet_celeste.CstarNames }}</td>
            </tr>
            <tr>
                <th>Identifiers</th>
                <td>{{ objet_celeste.identifiers }}</td>
            </tr>
            <tr>
                <th>Common_names</th>
                <td>{{ objet_celeste.commonNames }}</td>
            </tr>
            <tr>
                <th>Ned_notes</th>
                <td>{{ objet_celeste.nedNotes }}</td>
            </tr>
            <tr>
                <th>Openngc_notes</th>
                <td>{{ objet_celeste.openngcNotes }}</td>
            </tr>
            <tr>
                <th>Pictures</th>
                <td>{{ objet_celeste.Pictures }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_objet_celeste_index') }}\">back to list</a>

    <a href=\"{{ path('app_objet_celeste_edit', {'id': objet_celeste.id}) }}\">edit</a>

    {{ include('objet_celeste/_delete_form.html.twig') }}
{% endblock %}
", "objet_celeste/show.html.twig", "/var/www/html/monprojet/templates/objet_celeste/show.html.twig");
    }
}
