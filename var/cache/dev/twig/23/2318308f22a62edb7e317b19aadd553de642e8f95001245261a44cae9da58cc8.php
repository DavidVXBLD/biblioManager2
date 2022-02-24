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

/* partials/footer.html.twig */
class __TwigTemplate_9849487b21500eb9983d3b6808306e0cf72ee760d0f33104a9692ade9fbfb1c0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"text-center text-white m-0 bg-dark\">

      <!-- Social medias -->
      <div class=\"container\">
        <section class=\"pt-2\">
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://twitter.com/YdavaDev\" role=\"button\"><i class=\"fab fa-twitter\"></i></a>
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://github.com/DavidVXBLD\" role=\"button\"><i class=\"fab fa-github\"></i></a>
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://www.linkedin.com/in/david-vieuxbled-077247215/\" role=\"button\"><i class=\"fab fa-linkedin-in\"></i></a>
        </section> 
      </div>

      <!-- Copyrights -->
      <div class=\"text-center pb-2\">
        <p class=\"text-white\">© 2021 Copyright: Avady</p>
      </div>

    </footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"text-center text-white m-0 bg-dark\">

      <!-- Social medias -->
      <div class=\"container\">
        <section class=\"pt-2\">
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://twitter.com/YdavaDev\" role=\"button\"><i class=\"fab fa-twitter\"></i></a>
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://github.com/DavidVXBLD\" role=\"button\"><i class=\"fab fa-github\"></i></a>
          <a class=\"btn btn-outline-light btn-floating m-2 socials\" href=\"https://www.linkedin.com/in/david-vieuxbled-077247215/\" role=\"button\"><i class=\"fab fa-linkedin-in\"></i></a>
        </section> 
      </div>

      <!-- Copyrights -->
      <div class=\"text-center pb-2\">
        <p class=\"text-white\">© 2021 Copyright: Avady</p>
      </div>

    </footer>", "partials/footer.html.twig", "C:\\xampp\\htdocs\\biblioManager2\\templates\\partials\\footer.html.twig");
    }
}
