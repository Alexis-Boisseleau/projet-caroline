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
class __TwigTemplate_a7c8dd6c432f5ddeec6acfe6bbbf9e6d09be978d5bc109981775852ade8494f3 extends Template
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
        echo "\t<div class='container'>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t\t\t<div class=\"div alert alert-success mt-4\">
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t<h1>
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["designs"]) || array_key_exists("designs", $context) ? $context["designs"] : (function () { throw new RuntimeError('Variable "designs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["design"]) {
            // line 25
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["design"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["design"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["design"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">supprimer</a>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['design'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["architectures"]) || array_key_exists("architectures", $context) ? $context["architectures"] : (function () { throw new RuntimeError('Variable "architectures" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["archi"]) {
            // line 50
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["archi"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["archi"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Editer</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["archi"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"text-right\">
\t\t\t<a href=\"";
        // line 62
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
        return array (  198 => 62,  193 => 59,  182 => 54,  178 => 53,  173 => 51,  170 => 50,  166 => 49,  149 => 34,  138 => 29,  134 => 28,  129 => 26,  126 => 25,  122 => 24,  108 => 12,  99 => 9,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}gerer les projets
{% endblock %}

{% block body %}
\t<div class='container'>
\t\t{% for message in  app.flashes('success') %}
\t\t\t<div class=\"div alert alert-success mt-4\">
\t\t\t\t{{message}}
\t\t\t</div>
\t\t{% endfor %}
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
\t\t\t\t\t\t\t<a href=\"{{path('admin.delete', {id: design.id})}}\" class=\"btn btn-danger\">supprimer</a>

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
\t\t\t\t\t\t\t<a href=\"{{path('admin.delete', {id: archi.id})}}\" class=\"btn btn-danger\">supprimer</a>
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
