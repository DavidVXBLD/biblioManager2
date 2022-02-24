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

/* book/listing.html.twig */
class __TwigTemplate_a31ba9423205cf9b8796ba74630af88fb129d6aae0c30fc0873b94b9e40a86d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/listing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/listing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo "Book list";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 85vw;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h2>List of books</h2>
\t\t<a class=\"btn btn-primary my-2\" href=\"./create\">";
        // line 30
        echo "Create book";
        echo "</a>
\t\t<table id=\"myTable\" class=\"display\">
\t\t\t<thead>
\t\t\t\t<th>";
        // line 33
        echo "Title";
        echo "</th>
\t\t\t\t<th>";
        // line 34
        echo "Author";
        echo "</th>
\t\t\t\t<th>";
        // line 35
        echo "Summary";
        echo "</th>
\t\t\t\t<th>";
        // line 36
        echo "Release Date";
        echo "</th>
\t\t\t\t<th>";
        // line 37
        echo "Category";
        echo "</th>
\t\t\t\t<th>";
        // line 38
        echo "Child Friendly";
        echo "</th>
\t\t\t\t<th>";
        // line 39
        echo "Available";
        echo "</th>
\t\t\t\t<th>";
        // line 40
        echo "Borrower";
        echo "</th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 47
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getTitle", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getAuthor", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getSummary", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getReleaseDate", [], "method", false, false, false, 51), "d-M-Y", "Europe/Paris"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getCategory", [], "method", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getForChild", [], "method", false, false, false, 54)) {
                // line 55
                echo "\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t";
            } else {
                // line 57
                echo "\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getAvailable", [], "method", false, false, false, 61)) {
                // line 62
                echo "\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getAvailable", [], "method", false, false, false, 68)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["book"], "getBorrows", [], "method", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["borrow"]) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["borrow"], "getDateRendered", [], "method", false, false, false, 70)) {
                        // line 71
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getClients", [], "method", false, false, false, 73), "getLastName", [], "method", false, false, false, 73), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t\t\tAucun
\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 81
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getAvailable", [], "method", false, false, false, 81)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-primary disabled\">";
                echo "Borrow";
                echo "</button>
\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"./borrow/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 84), "html", null, true);
                echo "\">";
                echo "Borrow";
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"./edit/";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 88), "html", null, true);
            echo "\">";
            echo "Edit";
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"./delete/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 91), "html", null, true);
            echo "\">";
            echo "Delete";
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('#myTable').DataTable({
columnsDefs: [
{
\"width\": \"50%\",
\"targets\": 2
}
],
language: {}

});
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "book/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 95,  279 => 91,  271 => 88,  267 => 86,  259 => 84,  253 => 82,  251 => 81,  247 => 79,  243 => 77,  240 => 76,  234 => 75,  228 => 73,  224 => 71,  221 => 70,  216 => 69,  214 => 68,  210 => 66,  206 => 64,  202 => 62,  200 => 61,  196 => 59,  192 => 57,  188 => 55,  186 => 54,  181 => 52,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  162 => 47,  158 => 46,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  121 => 33,  115 => 30,  96 => 13,  89 => 12,  78 => 8,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{\"Book list\"}}
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\"/>
{% endblock %}

{% block body %}

\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 85vw;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h2>List of books</h2>
\t\t<a class=\"btn btn-primary my-2\" href=\"./create\">{{'Create book'}}</a>
\t\t<table id=\"myTable\" class=\"display\">
\t\t\t<thead>
\t\t\t\t<th>{{\"Title\"}}</th>
\t\t\t\t<th>{{\"Author\"}}</th>
\t\t\t\t<th>{{\"Summary\"}}</th>
\t\t\t\t<th>{{\"Release Date\"}}</th>
\t\t\t\t<th>{{\"Category\"}}</th>
\t\t\t\t<th>{{\"Child Friendly\"}}</th>
\t\t\t\t<th>{{\"Available\"}}</th>
\t\t\t\t<th>{{\"Borrower\"}}</th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t\t<th></th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for book in books %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{book.getTitle()}}</td>
\t\t\t\t\t\t<td>{{book.getAuthor()}}</td>
\t\t\t\t\t\t<td>{{book.getSummary()}}</td>
\t\t\t\t\t\t<td>{{book.getReleaseDate()|date(\"d-M-Y\",\"Europe/Paris\")}}</td>
\t\t\t\t\t\t<td>{{book.getCategory()}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if book.getForChild() %}
\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if book.getAvailable() %}
\t\t\t\t\t\t\t\tNon
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tOui
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if book.getAvailable() %}
\t\t\t\t\t\t\t\t{% for borrow in book.getBorrows() %}
\t\t\t\t\t\t\t\t\t{% if borrow.getDateRendered() %}

\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{{borrow.getClients().getLastName()}}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tAucun
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if book.getAvailable() %}
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary disabled\">{{'Borrow'}}</button>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"./borrow/{{book.getId()}}\">{{'Borrow'}}</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"./edit/{{book.getId()}}\">{{'Edit'}}</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"./delete/{{book.getId()}}\">{{'Delete'}}</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>

\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
\t<script>
\t\t\$(document).ready(function () {
\$('#myTable').DataTable({
columnsDefs: [
{
\"width\": \"50%\",
\"targets\": 2
}
],
language: {}

});
});
\t</script>
{% endblock %}
", "book/listing.html.twig", "C:\\xampp\\htdocs\\biblioManager2\\templates\\book\\listing.html.twig");
    }
}
