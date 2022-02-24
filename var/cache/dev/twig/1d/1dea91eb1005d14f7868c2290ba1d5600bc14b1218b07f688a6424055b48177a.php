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

/* client/listing.html.twig */
class __TwigTemplate_3bd4ec18d705da6bc2d09d0d5a3d0f8f7a9d43bca06204191825fde4db1503ec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/listing.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/listing.html.twig", 1);
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
        echo "    ";
        echo "client list";
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <style>
    .example-wrapper {
        margin: 1em auto;             
        max-width: 85vw;             
        width: 95%;             
        font: 18px / 1.5 sans-serif;         
        }         
        
    .example-wrapper code {             
        background: #F5F5F5;             
        padding: 2px 6px;       
        }     
    </style>

    <div class=\"example-wrapper\">
        <h2>List of clients</h2>
        <a class=\"btn btn-primary my-2\" href=\"./create\">";
        // line 29
        echo "Create client";
        echo "</a>
        <table id=\"myTable\" class=\"display\">
            <thead>
                <th>";
        // line 32
        echo "Firstname";
        echo "</th>
                <th>";
        // line 33
        echo "Lastname";
        echo "</th>
                <th>";
        // line 34
        echo "Birth date";
        echo "</th>
                <th>";
        // line 35
        echo "Address";
        echo "</th>
                <th>";
        // line 36
        echo "City";
        echo "</th>
                <th>";
        // line 37
        echo "Email";
        echo "</th>
                <th>";
        // line 38
        echo "Phone n°";
        echo "</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 45
            echo "                <tr>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getFirstName", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getLastName", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getBirthDate", [], "method", false, false, false, 48), "Y-m-d", "Europe/Paris"), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getAdress", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getCity", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getMail", [], "method", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getPhone", [], "method", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td><a class=\"btn btn-primary\" href=";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "getId", [], "method", false, false, false, 53)]), "html", null, true);
            echo ">";
            echo "Details";
            echo "</a></td>
                    <td><a class=\"btn btn-success\" href=\"./edit/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getId", [], "method", false, false, false, 54), "html", null, true);
            echo "\">";
            echo "Edit";
            echo "</a></td>
                    <td><a class=\"btn btn-danger\" href=\"./delete/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getId", [], "method", false, false, false, 55), "html", null, true);
            echo "\">";
            echo "Delete";
            echo "</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"></script>
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
            
        });
    } );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 58,  198 => 55,  192 => 54,  186 => 53,  182 => 52,  178 => 51,  174 => 50,  170 => 49,  166 => 48,  162 => 47,  158 => 46,  155 => 45,  151 => 44,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  112 => 29,  93 => 12,  86 => 11,  78 => 8,  71 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{\"client list\"}}
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css\"/>
{% endblock %}

{% block body %}

    <style>
    .example-wrapper {
        margin: 1em auto;             
        max-width: 85vw;             
        width: 95%;             
        font: 18px / 1.5 sans-serif;         
        }         
        
    .example-wrapper code {             
        background: #F5F5F5;             
        padding: 2px 6px;       
        }     
    </style>

    <div class=\"example-wrapper\">
        <h2>List of clients</h2>
        <a class=\"btn btn-primary my-2\" href=\"./create\">{{'Create client'}}</a>
        <table id=\"myTable\" class=\"display\">
            <thead>
                <th>{{\"Firstname\"}}</th>
                <th>{{\"Lastname\"}}</th>
                <th>{{\"Birth date\"}}</th>
                <th>{{\"Address\"}}</th>
                <th>{{\"City\"}}</th>
                <th>{{\"Email\"}}</th>
                <th>{{\"Phone n°\"}}</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                {% for client in clients %}
                <tr>
                    <td>{{client.getFirstName()}}</td>
                    <td>{{client.getLastName()}}</td>
                    <td>{{client.getBirthDate()|date(\"Y-m-d\",\"Europe/Paris\")}}</td>
                    <td>{{client.getAdress()}}</td>
                    <td>{{client.getCity()}}</td>
                    <td>{{client.getMail()}}</td>
                    <td>{{client.getPhone()}}</td>
                    <td><a class=\"btn btn-primary\" href={{path(\"client_details\", {id : client.getId()})}}>{{'Details'}}</a></td>
                    <td><a class=\"btn btn-success\" href=\"./edit/{{client.getId()}}\">{{'Edit'}}</a></td>
                    <td><a class=\"btn btn-danger\" href=\"./delete/{{client.getId()}}\">{{'Delete'}}</a></td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js\"></script>
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
            
        });
    } );
    </script>
{% endblock %}", "client/listing.html.twig", "C:\\xampp\\htdocs\\biblioManager2\\templates\\client\\listing.html.twig");
    }
}
