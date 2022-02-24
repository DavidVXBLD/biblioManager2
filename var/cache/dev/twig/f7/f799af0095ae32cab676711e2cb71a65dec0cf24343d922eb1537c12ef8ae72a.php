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

/* partials/nav.html.twig */
class __TwigTemplate_17142e56d444f1bb1505004a793e85a5114159faf9a67b9369ec2f4ffd28b2f6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-dark py-3\">
    <a class=\"navbar-brand mx-4\" style=\"color: #e7bb41;\" href=\"#\">Bibliotheque</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link text-white\" href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_listing");
        echo ">Accueil
                    <span class=\"sr-only\"></span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_listing");
        echo ">Listes Livres</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href=";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_listing");
        echo ">Listes clients</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  58 => 14,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-dark py-3\">
    <a class=\"navbar-brand mx-4\" style=\"color: #e7bb41;\" href=\"#\">Bibliotheque</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link text-white\" href={{path(\"book_listing\")}}>Accueil
                    <span class=\"sr-only\"></span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href={{path(\"book_listing\")}}>Listes Livres</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link text-white\" href={{path(\"client_listing\")}}>Listes clients</a>
            </li>
        </ul>
    </div>
</nav>", "partials/nav.html.twig", "C:\\xampp\\htdocs\\biblioManager2\\templates\\partials\\nav.html.twig");
    }
}
