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

/* about/index.html.twig */
class __TwigTemplate_91f5001a4f5df86b6e9c1ad67fe7ecb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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

        echo " AstroMiage ";
        
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
        echo "
    <body style=\"background-color: #5D94BA\">

        <div style=\"margin: 0 auto; width: 30%; margin-top: 5%\">
            <h1 style=\"font-size: 400%\"> AstroMiage</h1>
        </div>


        <div style=\"margin: 0 auto; margin-top: 10%\">

            <h3 style=\"margin-bottom: 1%\"> Equipe : </h3>
            <p>
                DIALLO Amadou<br>
                LEITE TEIXEIRA Jonathan<br>
                AMAREH Ali Houssein<br>
                FROLIGER Robin
            </p>


            <h3 style=\"margin-bottom: 2%; margin-top: 4%\">Le Projet :</h3>

            <p>
                Le Projet <b>AstroMiage</b>  entre dans le cadre de la <b>Licence 3 Miage de l’université d’Orléans</b> .<br> Ce projet va permettre aux utilisateurs d’explorer les différentes constellations pouvant être observées dans notre ciel nocturne. L’utilisateur peut voir une carte du ciel sur laquelle sont portés les différents objets célestes. L’utilisateur peut également obtenir des informations sur différents objets célestes tels que : les étoiles, nébuleuses, galaxies qui composent les constellations.
            </p>

        </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} AstroMiage {% endblock %}

{% block body %}

    <body style=\"background-color: #5D94BA\">

        <div style=\"margin: 0 auto; width: 30%; margin-top: 5%\">
            <h1 style=\"font-size: 400%\"> AstroMiage</h1>
        </div>


        <div style=\"margin: 0 auto; margin-top: 10%\">

            <h3 style=\"margin-bottom: 1%\"> Equipe : </h3>
            <p>
                DIALLO Amadou<br>
                LEITE TEIXEIRA Jonathan<br>
                AMAREH Ali Houssein<br>
                FROLIGER Robin
            </p>


            <h3 style=\"margin-bottom: 2%; margin-top: 4%\">Le Projet :</h3>

            <p>
                Le Projet <b>AstroMiage</b>  entre dans le cadre de la <b>Licence 3 Miage de l’université d’Orléans</b> .<br> Ce projet va permettre aux utilisateurs d’explorer les différentes constellations pouvant être observées dans notre ciel nocturne. L’utilisateur peut voir une carte du ciel sur laquelle sont portés les différents objets célestes. L’utilisateur peut également obtenir des informations sur différents objets célestes tels que : les étoiles, nébuleuses, galaxies qui composent les constellations.
            </p>

        </div>
    </body>
{% endblock %}

", "about/index.html.twig", "/var/www/html/monprojet/templates/about/index.html.twig");
    }
}
