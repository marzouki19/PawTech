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

/* components/_modal_add.html.twig */
class __TwigTemplate_48d02ab4554d08a78828ddef772f18f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal_add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_modal_add.html.twig"));

        // line 10
        yield "<div data-modal-target=\"backdrop\" class=\"hidden fixed inset-0 z-40 bg-black/30 modal-backdrop\" data-action=\"click->modal#close\"></div>
<div data-modal-target=\"dialog\" class=\"hidden fixed inset-0 z-50 flex items-center justify-center p-4\" aria-modal=\"true\">
  <div class=\"bg-white rounded-xl shadow-xl w-full max-w-md p-6\">
      <h2 class=\"text-lg font-bold text-gray-800 mb-4\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modal_title"]) || array_key_exists("modal_title", $context) ? $context["modal_title"] : (function () { throw new RuntimeError('Variable "modal_title" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h2>
      <form method=\"post\" action=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 14, $this->source); })()), "#")) : ("#")), "html", null, true);
        yield "\" class=\"space-y-4\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 15, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 16
            yield "          ";
            $context["field_type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 16), "text")) : ("text"));
            // line 17
            yield "          ";
            if (((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 17, $this->source); })()) == "file")) {
                // line 18
                yield "            <div class=\"space-y-3\" data-controller=\"image-preview\">
              <label class=\"text-sm font-semibold text-gray-700\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 19), "Photo")) : ("Photo")), "html", null, true);
                yield "</label>
              <div class=\"w-full aspect-[4/3] rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden\">
                <img data-image-preview-target=\"preview\" class=\"hidden w-full h-full object-cover\" alt=\"Preview\" />
                <div data-image-preview-target=\"placeholder\" class=\"text-xs text-gray-400 text-center px-4\">
                  ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 23), "Choose an image to preview")) : ("Choose an image to preview")), "html", null, true);
                yield "
                </div>
              </div>
              <input type=\"file\"
                     name=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 27), "html", null, true);
                yield "\"
                     ";
                // line 28
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "accept", [], "any", true, true, false, 28)) {
                    yield "accept=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "accept", [], "any", false, false, false, 28), "html", null, true);
                    yield "\"";
                }
                // line 29
                yield "                     class=\"w-full px-4 py-2.5 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                     data-image-preview-target=\"input\"
                     data-action=\"change->image-preview#preview\">
            </div>
          ";
            } else {
                // line 34
                yield "            <div>
              <input type=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "\"
                     name=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 36), "html", null, true);
                yield "\"
                     placeholder=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "placeholder", [], "any", false, false, false, 37), "html", null, true);
                yield "\"
                     class=\"w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                     ";
                // line 39
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "required", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 39), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "required";
                }
                yield ">
            </div>
          ";
            }
            // line 42
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        <div class=\"flex gap-3 pt-2\">
          <button type=\"button\" data-action=\"click->modal#close\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50\">
            Cancel
          </button>
          <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("add_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["add_label"]) || array_key_exists("add_label", $context) ? $context["add_label"] : (function () { throw new RuntimeError('Variable "add_label" does not exist.', 48, $this->source); })()), "Add")) : ("Add")), "html", null, true);
        yield "
          </button>
        </div>
      </form>
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
        return "components/_modal_add.html.twig";
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
        return array (  142 => 48,  135 => 43,  129 => 42,  121 => 39,  116 => 37,  112 => 36,  108 => 35,  105 => 34,  98 => 29,  92 => 28,  88 => 27,  81 => 23,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  48 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Include inside a div with data-controller=\"modal\" (same as entity toolbar).
  Usage:
  {% include 'components/_modal_add.html.twig' with {
    modal_title: 'Add New Client',
    add_label: 'Add',
    fields: [...],
  } %}
#}
<div data-modal-target=\"backdrop\" class=\"hidden fixed inset-0 z-40 bg-black/30 modal-backdrop\" data-action=\"click->modal#close\"></div>
<div data-modal-target=\"dialog\" class=\"hidden fixed inset-0 z-50 flex items-center justify-center p-4\" aria-modal=\"true\">
  <div class=\"bg-white rounded-xl shadow-xl w-full max-w-md p-6\">
      <h2 class=\"text-lg font-bold text-gray-800 mb-4\">{{ modal_title }}</h2>
      <form method=\"post\" action=\"{{ form_action|default('#') }}\" class=\"space-y-4\">
        {% for field in fields|default([]) %}
          {% set field_type = field.type|default('text') %}
          {% if field_type == 'file' %}
            <div class=\"space-y-3\" data-controller=\"image-preview\">
              <label class=\"text-sm font-semibold text-gray-700\">{{ field.label|default('Photo') }}</label>
              <div class=\"w-full aspect-[4/3] rounded-xl border-2 border-dashed border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden\">
                <img data-image-preview-target=\"preview\" class=\"hidden w-full h-full object-cover\" alt=\"Preview\" />
                <div data-image-preview-target=\"placeholder\" class=\"text-xs text-gray-400 text-center px-4\">
                  {{ field.placeholder|default('Choose an image to preview') }}
                </div>
              </div>
              <input type=\"file\"
                     name=\"{{ field.name }}\"
                     {% if field.accept is defined %}accept=\"{{ field.accept }}\"{% endif %}
                     class=\"w-full px-4 py-2.5 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                     data-image-preview-target=\"input\"
                     data-action=\"change->image-preview#preview\">
            </div>
          {% else %}
            <div>
              <input type=\"{{ field_type }}\"
                     name=\"{{ field.name }}\"
                     placeholder=\"{{ field.placeholder }}\"
                     class=\"w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                     {% if field.required|default(true) %}required{% endif %}>
            </div>
          {% endif %}
        {% endfor %}
        <div class=\"flex gap-3 pt-2\">
          <button type=\"button\" data-action=\"click->modal#close\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50\">
            Cancel
          </button>
          <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            {{ add_label|default('Add') }}
          </button>
        </div>
      </form>
  </div>
</div>
", "components/_modal_add.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\components\\_modal_add.html.twig");
    }
}
