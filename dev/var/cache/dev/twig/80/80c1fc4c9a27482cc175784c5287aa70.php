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

/* footer.html.twig */
class __TwigTemplate_565013b3c99393303a607a10472b7822 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer style=\"\" class=\" fixed-bottom bg-dark\" >

    <div class=\"container-fluid\">
        <div style=\"margin-top: 1%\">
            <a class=\"navbar-brand \" style=\"font-size: 170%; color: lightgray\" href=\"/objet/celeste\">Objets Célestes</a>
            <a class=\"navbar-brand\" style=\"font-size: 170%; color: lightgray\" href=\"/constellation\">Constellations</a>
            <a class=\"navbar-brand \" style=\"font-size: 170%; color: lightgray\" href=\"/messier/catalogue\">Catalogue de Messier</a>
        </div>
    </div>
</footer>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer style=\"\" class=\" fixed-bottom bg-dark\" >

    <div class=\"container-fluid\">
        <div style=\"margin-top: 1%\">
            <a class=\"navbar-brand \" style=\"font-size: 170%; color: lightgray\" href=\"/objet/celeste\">Objets Célestes</a>
            <a class=\"navbar-brand\" style=\"font-size: 170%; color: lightgray\" href=\"/constellation\">Constellations</a>
            <a class=\"navbar-brand \" style=\"font-size: 170%; color: lightgray\" href=\"/messier/catalogue\">Catalogue de Messier</a>
        </div>
    </div>
</footer>


", "footer.html.twig", "/var/www/html/monprojet/templates/footer.html.twig");
    }
}
