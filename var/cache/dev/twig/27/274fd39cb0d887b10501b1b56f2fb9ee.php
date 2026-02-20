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

/* components/_entity_toolbar.html.twig */
class __TwigTemplate_ad6fbef33951fc27db2a1c1001ec73db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_toolbar.html.twig"));

        // line 14
        yield "<div class=\"flex flex-wrap items-center gap-4 mb-4\">
  <div class=\"relative flex-1 min-w-[200px]\">
    <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/></svg>
    </span>
    <input type=\"search\" placeholder=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_placeholder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_placeholder"]) || array_key_exists("search_placeholder", $context) ? $context["search_placeholder"] : (function () { throw new RuntimeError('Variable "search_placeholder" does not exist.', 19, $this->source); })()), "Search")) : ("Search")), "html", null, true);
        yield "\" class=\"w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
  </div>
  ";
        // line 21
        if ((array_key_exists("add_href", $context) && (isset($context["add_href"]) || array_key_exists("add_href", $context) ? $context["add_href"] : (function () { throw new RuntimeError('Variable "add_href" does not exist.', 21, $this->source); })()))) {
            // line 22
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["add_href"]) || array_key_exists("add_href", $context) ? $context["add_href"] : (function () { throw new RuntimeError('Variable "add_href" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/></svg>
      Add New ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "
    </a>
  ";
        } else {
            // line 27
            yield "    <button type=\"button\" data-action=\"click->modal#open\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/></svg>
      Add New ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "
    </button>
  ";
        }
        // line 32
        yield "  <div class=\"inline-flex items-center gap-2\">
    <button type=\"button\" data-entity-sort-target=\"buttonAsc\" data-action=\"click->entity-sort#setAsc\" class=\"inline-flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 hover:bg-gray-50\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/></svg>
      ASC
    </button>
    <button type=\"button\" data-entity-sort-target=\"buttonDesc\" data-action=\"click->entity-sort#setDesc\" class=\"inline-flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 hover:bg-gray-50\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/></svg>
      DESC
    </button>
  </div>
</div>
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
        return "components/_entity_toolbar.html.twig";
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
        return array (  84 => 32,  78 => 29,  74 => 27,  68 => 24,  62 => 22,  60 => 21,  55 => 19,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Usage:
  {% include 'components/_entity_toolbar.html.twig' with {
    entity_name: 'Client',
    add_modal_id: 'modal-add-client',
    search_placeholder: 'Search',
  } %}
  Then include the modal and use data-action=\"click->modal#open\" on the Add button.
  We use a single modal controller per page; the Add button opens it.
  So we need the Add button and modal in the same data-controller=\"modal\" wrapper.
  Alternative: use a wrapper div around toolbar+modal with data-controller=\"modal\",
  and the Add button has data-action=\"click->modal#open\".
#}
<div class=\"flex flex-wrap items-center gap-4 mb-4\">
  <div class=\"relative flex-1 min-w-[200px]\">
    <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/></svg>
    </span>
    <input type=\"search\" placeholder=\"{{ search_placeholder|default('Search') }}\" class=\"w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
  </div>
  {% if add_href is defined and add_href %}
    <a href=\"{{ add_href }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/></svg>
      Add New {{ entity_name }}
    </a>
  {% else %}
    <button type=\"button\" data-action=\"click->modal#open\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/></svg>
      Add New {{ entity_name }}
    </button>
  {% endif %}
  <div class=\"inline-flex items-center gap-2\">
    <button type=\"button\" data-entity-sort-target=\"buttonAsc\" data-action=\"click->entity-sort#setAsc\" class=\"inline-flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 hover:bg-gray-50\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/></svg>
      ASC
    </button>
    <button type=\"button\" data-entity-sort-target=\"buttonDesc\" data-action=\"click->entity-sort#setDesc\" class=\"inline-flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 hover:bg-gray-50\">
      <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/></svg>
      DESC
    </button>
  </div>
</div>
", "components/_entity_toolbar.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\components\\_entity_toolbar.html.twig");
    }
}
