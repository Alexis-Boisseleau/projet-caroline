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

/* admin/amenagements/index.html.twig */
class __TwigTemplate_ca719ad9cfc9a0c533e03f21b966b99b0dfb86411edd71c63b785d4309084c66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/amenagements/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/amenagements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/amenagements/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "gerer les projets
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div>
\t\t<h1>
\t\t\tGerer les Design Interieurs
\t\t</h1>
\t\t<table class='table table-striped'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<th>action</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["designs"]) || array_key_exists("designs", $context) ? $context["designs"] : (function () { throw new RuntimeError('Variable "designs" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["design"]) {
            // line 20
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["design"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["design"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['design'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</tbody>
\t\t</table>


\t\t<h1>
\t\t\tGerer les projets Architectures
\t\t</h1>
\t\t<table class='table table-striped'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<th>action</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["architectures"]) || array_key_exists("architectures", $context) ? $context["architectures"] : (function () { throw new RuntimeError('Variable "architectures" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archi"]) {
            // line 45
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archi"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["archi"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"text-right\">
\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.amenagements.new");
        echo "\" class=\"btn btn-primary\">Créer projet</a>
\t\t</div>


\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/amenagements/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  167 => 52,  157 => 48,  152 => 46,  149 => 45,  145 => 44,  127 => 28,  116 => 23,  111 => 21,  108 => 20,  104 => 19,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}gerer les projets
{% endblock %}

{% block body %}
\t<div>
\t\t<h1>
\t\t\tGerer les Design Interieurs
\t\t</h1>
\t\t<table class='table table-striped'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<th>action</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t\t{%for design in designs %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{design.title}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{path('admin.edit', {id: design.id})}}\" class=\"btn btn-secondary\">Editer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t\t<h1>
\t\t\tGerer les projets Architectures
\t\t</h1>
\t\t<table class='table table-striped'>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<th>action</th>
\t\t\t\t</tr>
\t\t\t</thead>

\t\t\t<tbody>
\t\t\t\t{%for archi in architectures %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{archi.title}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{path('admin.edit', {id: archi.id})}}\" class=\"btn btn-secondary\">Editer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"text-right\">
\t\t\t<a href=\"{{path('admin.amenagements.new')}}\" class=\"btn btn-primary\">Créer projet</a>
\t\t</div>


\t</div>


{% endblock %}
", "admin/amenagements/index.html.twig", "D:\\wamp\\www\\projet-caroline\\templates\\admin\\amenagements\\index.html.twig");
    }
}
