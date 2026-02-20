<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/_entity_page.html.twig */
class __TwigTemplate_77aaf932ac4289a0eb4a9f793ccb4a0c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_page.html.twig"));

        // line 11
        yield "
<div data-controller=\"modal entity-sort\" class=\"space-y-4\">
  ";
        // line 13
        yield from $this->load("components/_entity_toolbar.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["entity_name" =>         // line 14
(isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 14, $this->source); })()), "search_placeholder" => "Search", "add_href" => ((        // line 16
array_key_exists("add_href", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["add_href"]) || array_key_exists("add_href", $context) ? $context["add_href"] : (function () { throw new RuntimeError('Variable "add_href" does not exist.', 16, $this->source); })()), null)) : (null))]));
        // line 18
        yield "
  ";
        // line 19
        yield from $this->load("components/_entity_table.html.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["columns" =>         // line 20
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })()), "rows" => ((        // line 21
array_key_exists("rows", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 21, $this->source); })()), [])) : ([])), "total_records" => ((        // line 22
array_key_exists("total_records", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_records"]) || array_key_exists("total_records", $context) ? $context["total_records"] : (function () { throw new RuntimeError('Variable "total_records" does not exist.', 22, $this->source); })()), 60)) : (60)), "per_page" => ((        // line 23
array_key_exists("per_page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["per_page"]) || array_key_exists("per_page", $context) ? $context["per_page"] : (function () { throw new RuntimeError('Variable "per_page" does not exist.', 23, $this->source); })()), 10)) : (10)), "page" => ((        // line 24
array_key_exists("page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()), 1)) : (1)), "total_pages" => ((        // line 25
array_key_exists("total_pages", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 25, $this->source); })()), 4)) : (4))]));
        // line 27
        yield "
  ";
        // line 28
        yield from $this->load("components/_modal_add.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["modal_title" => ((        // line 29
array_key_exists("modal_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["modal_title"]) || array_key_exists("modal_title", $context) ? $context["modal_title"] : (function () { throw new RuntimeError('Variable "modal_title" does not exist.', 29, $this->source); })()), ("Add New " . (isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 29, $this->source); })())))) : (("Add New " . (isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 29, $this->source); })())))), "add_label" => ((        // line 30
array_key_exists("add_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["add_label"]) || array_key_exists("add_label", $context) ? $context["add_label"] : (function () { throw new RuntimeError('Variable "add_label" does not exist.', 30, $this->source); })()), "Add")) : ("Add")), "fields" => ((        // line 31
array_key_exists("modal_fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["modal_fields"]) || array_key_exists("modal_fields", $context) ? $context["modal_fields"] : (function () { throw new RuntimeError('Variable "modal_fields" does not exist.', 31, $this->source); })()), [])) : ([])), "form_action" => ((        // line 32
array_key_exists("form_action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 32, $this->source); })()), "#")) : ("#"))]));
        // line 34
        yield "</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/_entity_page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 34,  74 => 32,  73 => 31,  72 => 30,  71 => 29,  70 => 28,  67 => 27,  65 => 25,  64 => 24,  63 => 23,  62 => 22,  61 => 21,  60 => 20,  59 => 19,  56 => 18,  54 => 16,  53 => 14,  52 => 13,  48 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  One reusable page shell that matches the Clients design.

  Required variables:
  - entity_name: 'Client'
  - columns: [...]
  - rows: [...]
  - modal_title: 'Add New Client'
  - modal_fields: [...]
#}

<div data-controller=\"modal entity-sort\" class=\"space-y-4\">
  {% include 'components/_entity_toolbar.html.twig' with {
    entity_name: entity_name,
    search_placeholder: 'Search',
    add_href: add_href|default(null)
  } %}

  {% include 'components/_entity_table.html.twig' with {
    columns: columns,
    rows: rows|default([]),
    total_records: total_records|default(60),
    per_page: per_page|default(10),
    page: page|default(1),
    total_pages: total_pages|default(4)
  } %}

  {% include 'components/_modal_add.html.twig' with {
    modal_title: modal_title|default('Add New ' ~ entity_name),
    add_label: add_label|default('Add'),
    fields: modal_fields|default([]),
    form_action: form_action|default('#')
  } %}
</div>

", "components/_entity_page.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\components\\_entity_page.html.twig");
    }
}
