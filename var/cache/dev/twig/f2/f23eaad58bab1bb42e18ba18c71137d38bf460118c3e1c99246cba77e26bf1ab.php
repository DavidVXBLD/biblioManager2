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

/* client/details.html.twig */
class __TwigTemplate_6720335e6ad61e46a68b689236a5134811303a38619933b5d9e54a825aa4fff5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "client list";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    <link rel=\"stylesheet\"
      type=\"text/css\"
      href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\" /> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 1280px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container\">
    <table id=\"\" class=\"table fs-3\">
            <tr>
                <th>";
        // line 17
        echo "Firstname";
        echo "</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 18, $this->source); })()), "getFirstName", [], "method", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 21
        echo "Lastname";
        echo "</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 22, $this->source); })()), "getLastName", [], "method", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 25
        echo "Birthdate";
        echo "</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 26, $this->source); })()), "getBirthDate", [], "method", false, false, false, 26), "format", [0 => "d-m-Y"], "method", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 29
        echo "Adress";
        echo "</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 30, $this->source); })()), "getAdress", [], "method", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 33
        echo "City";
        echo "</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 34, $this->source); })()), "getCity", [], "method", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 37
        echo "Email";
        echo "</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 38, $this->source); })()), "getMail", [], "method", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 41
        echo "Phone";
        echo "</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 42, $this->source); })()), "getPhone", [], "method", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>        
    </table>
    <br>
    ";
        // line 46
        if ((twig_length_filter($this->env, (isset($context["borrowList"]) || array_key_exists("borrowList", $context) ? $context["borrowList"] : (function () { throw new RuntimeError('Variable "borrowList" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            echo "    <h2 class=\"fs-1 fw-bold\">";
            echo "Borrowed book by";
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 47, $this->source); })()), "getFirstName", [], "method", false, false, false, 47), "html", null, true);
            echo "</h2>
    <br>
    <table id=\"myTable\" class=\" table display fs-3\">
        <thead>
            <th>";
            // line 51
            echo "Title";
            echo "</th>
            <th>";
            // line 52
            echo "Author";
            echo "</th>
            <th>";
            // line 53
            echo "Category";
            echo "</th>
            <th></th>
        </thead>
        <tbody>
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["borrowList"]) || array_key_exists("borrowList", $context) ? $context["borrowList"] : (function () { throw new RuntimeError('Variable "borrowList" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["borrow"]) {
                // line 58
                echo "            <tr>
                <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getBooks", [], "method", false, false, false, 59), "getTitle", [], "method", false, false, false, 59), "html", null, true);
                echo "</td>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getBooks", [], "method", false, false, false, 60), "getAuthor", [], "method", false, false, false, 60), "html", null, true);
                echo "</td>
                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getBooks", [], "method", false, false, false, 61), "getCategory", [], "method", false, false, false, 61), "html", null, true);
                echo "</td>
                <td>";
                // line 62
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getBooks", [], "method", false, false, false, 62), "getAvailable", [], "method", false, false, false, 62)) {
                    // line 63
                    echo "                        <a class=\"btn btn-primary\" href=";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_return", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["borrow"], "getBooks", [], "method", false, false, false, 63), "getId", [], "method", false, false, false, 63)]), "html", null, true);
                    echo ">";
                    echo "Return";
                    echo "</a>
                    ";
                } else {
                    // line 65
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["borrow"], "getDateRendered", [], "method", false, false, false, 65), "html", null, true);
                    echo "   
                    ";
                }
                // line 67
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </tbody>
    </table>
    ";
        }
        // line 73
        echo "</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script type=\"text/javascript\"
      charset=\"utf8\"
      src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"> 
</script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
<script>
\$(document).ready(function() {
    \$('#myTable').DataTable({
        columnsDefs: [
            { \"width\": \"50%\",\"targets\":2 }
        ],
        language: {
        }
        responsive:true
    });
    
} );
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 73,  241 => 70,  233 => 67,  227 => 65,  219 => 63,  217 => 62,  213 => 61,  209 => 60,  205 => 59,  202 => 58,  198 => 57,  191 => 53,  187 => 52,  183 => 51,  173 => 47,  171 => 46,  164 => 42,  160 => 41,  154 => 38,  150 => 37,  144 => 34,  140 => 33,  134 => 30,  130 => 29,  124 => 26,  120 => 25,  114 => 22,  110 => 21,  104 => 18,  100 => 17,  90 => 9,  83 => 8,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{\"client list\"}}{% endblock %}
{% block stylesheets %} 
    <link rel=\"stylesheet\"
      type=\"text/css\"
      href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\" /> {% endblock %}
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 1280px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container\">
    <table id=\"\" class=\"table fs-3\">
            <tr>
                <th>{{\"Firstname\"}}</th>
                <td>{{clients.getFirstName()}}</td>
            </tr>
            <tr>
                <th>{{\"Lastname\"}}</th>
                <td>{{clients.getLastName()}}</td>
            </tr>
            <tr>
                <th>{{\"Birthdate\"}}</th>
                <td>{{clients.getBirthDate().format(\"d-m-Y\")}}</td>
            </tr>
            <tr>
                <th>{{\"Adress\"}}</th>
                <td>{{clients.getAdress()}}</td>
            </tr>
            <tr>
                <th>{{\"City\"}}</th>
                <td>{{clients.getCity()}}</td>
            </tr>
            <tr>
                <th>{{\"Email\"}}</th>
                <td>{{clients.getMail()}}</td>
            </tr>
            <tr>
                <th>{{\"Phone\"}}</th>
                <td>{{clients.getPhone()}}</td>
            </tr>        
    </table>
    <br>
    {% if borrowList|length > 0%}
    <h2 class=\"fs-1 fw-bold\">{{'Borrowed book by'}} {{clients.getFirstName()}}</h2>
    <br>
    <table id=\"myTable\" class=\" table display fs-3\">
        <thead>
            <th>{{\"Title\"}}</th>
            <th>{{\"Author\"}}</th>
            <th>{{\"Category\"}}</th>
            <th></th>
        </thead>
        <tbody>
        {% for borrow in borrowList %}
            <tr>
                <td>{{borrow.getBooks().getTitle()}}</td>
                <td>{{borrow.getBooks().getAuthor()}}</td>
                <td>{{borrow.getBooks().getCategory()}}</td>
                <td>{% if borrow.getBooks().getAvailable() %}
                        <a class=\"btn btn-primary\" href={{path(\"book_return\", {id : borrow.getBooks().getId()})}}>{{'Return'}}</a>
                    {% else %}
                        {{borrow.getDateRendered()}}   
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endif %}
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script type=\"text/javascript\"
      charset=\"utf8\"
      src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"> 
</script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\" integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\" integrity=\"sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13\" crossorigin=\"anonymous\"></script>
<script>
\$(document).ready(function() {
    \$('#myTable').DataTable({
        columnsDefs: [
            { \"width\": \"50%\",\"targets\":2 }
        ],
        language: {
        }
        responsive:true
    });
    
} );
</script>
{% endblock %}", "client/details.html.twig", "C:\\xampp\\htdocs\\biblioManager2\\templates\\client\\details.html.twig");
    }
}
