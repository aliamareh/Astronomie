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

/* menu.html.twig */
class __TwigTemplate_546b594b9d1ad97d4903a92c222d67b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar fixed-top navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div>
            <a class=\"navbar-brand\" style=\"font-size: 100%\" href=\"/\">Accueil</a>
            <a class=\"navbar-brand\" style=\"font-size: 100%\" href=\"/about\">à propos</a>
        </div>

        <div>
            <a class=\"navbar-brand\" style=\"font-size: 200%\" href=\"/\"> AstroMiage</a>
        </div>
    </div>
</nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar fixed-top navbar-dark bg-dark\">
    <div class=\"container-fluid\">
        <div>
            <a class=\"navbar-brand\" style=\"font-size: 100%\" href=\"/\">Accueil</a>
            <a class=\"navbar-brand\" style=\"font-size: 100%\" href=\"/about\">à propos</a>
        </div>

        <div>
            <a class=\"navbar-brand\" style=\"font-size: 200%\" href=\"/\"> AstroMiage</a>
        </div>
    </div>
</nav>

", "menu.html.twig", "/var/www/html/monprojet/templates/menu.html.twig");
    }
}
