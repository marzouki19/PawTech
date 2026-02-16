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

/* components/_entity_table.html.twig */
class __TwigTemplate_f4891fb4472c5e051020bdacdc4b59e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_entity_table.html.twig"));

        // line 14
        yield "
<div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
  <div class=\"overflow-x-auto\">
    <table class=\"min-w-full text-sm\">
      <thead class=\"bg-white\">
        <tr class=\"text-left text-gray-500\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("columns", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 20, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 21
            yield "            <th class=\"px-6 py-4 font-medium whitespace-nowrap\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["col"], "html", null, true);
            yield "</th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "          ";
        if ((($tmp = ((array_key_exists("actions_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions_enabled"]) || array_key_exists("actions_enabled", $context) ? $context["actions_enabled"] : (function () { throw new RuntimeError('Variable "actions_enabled" does not exist.', 23, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "            <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Actions</th>
          ";
        }
        // line 26
        yield "        </tr>
      </thead>
      <tbody class=\"divide-y divide-gray-100\" data-entity-sort-target=\"tbody\" data-entity-sort-column=\"0\">
        ";
        // line 29
        $context["safe_rows"] = ((array_key_exists("rows", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 29, $this->source); })()), [])) : ([]));
        // line 30
        yield "        ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["safe_rows"]) || array_key_exists("safe_rows", $context) ? $context["safe_rows"] : (function () { throw new RuntimeError('Variable "safe_rows" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "          <tr>
            <td class=\"px-6 py-6 text-gray-400\" colspan=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 32, $this->source); })())) + (((($tmp = ((array_key_exists("actions_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions_enabled"]) || array_key_exists("actions_enabled", $context) ? $context["actions_enabled"] : (function () { throw new RuntimeError('Variable "actions_enabled" does not exist.', 32, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))), "html", null, true);
            yield "\">No data yet.</td>
          </tr>
        ";
        } else {
            // line 35
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["safe_rows"]) || array_key_exists("safe_rows", $context) ? $context["safe_rows"] : (function () { throw new RuntimeError('Variable "safe_rows" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 36
                yield "            <tr class=\"text-gray-700 hover:bg-gray-50\">
              ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 38
                    yield "                ";
                    if ((array_key_exists("status_badge_index", $context) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 38) == (isset($context["status_badge_index"]) || array_key_exists("status_badge_index", $context) ? $context["status_badge_index"] : (function () { throw new RuntimeError('Variable "status_badge_index" does not exist.', 38, $this->source); })())))) {
                        // line 39
                        yield "                  ";
                        $context["is_active"] = ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["cell"]) == "actif") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["cell"]) == "active"));
                        // line 40
                        yield "                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <span class=\"text-xs px-2 py-1 rounded-full font-medium ";
                        // line 41
                        yield (((($tmp = (isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-green-50 text-green-600") : ("bg-red-50 text-red-600"));
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cell"], "html", null, true);
                        yield "</span>
                  </td>
                ";
                    } else {
                        // line 44
                        yield "                  <td class=\"px-6 py-4 whitespace-nowrap\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cell"], "html", null, true);
                        yield "</td>
                ";
                    }
                    // line 46
                    yield "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "              ";
                if ((($tmp = ((array_key_exists("actions_enabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions_enabled"]) || array_key_exists("actions_enabled", $context) ? $context["actions_enabled"] : (function () { throw new RuntimeError('Variable "actions_enabled" does not exist.', 47, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                ";
                    $context["row_id_index"] = ((array_key_exists("actions_id_index", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["actions_id_index"]) || array_key_exists("actions_id_index", $context) ? $context["actions_id_index"] : (function () { throw new RuntimeError('Variable "actions_id_index" does not exist.', 48, $this->source); })()), 0)) : (0));
                    // line 49
                    yield "                ";
                    $context["row_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], (isset($context["row_id_index"]) || array_key_exists("row_id_index", $context) ? $context["row_id_index"] : (function () { throw new RuntimeError('Variable "row_id_index" does not exist.', 49, $this->source); })()), [], "any", false, false, false, 49);
                    // line 50
                    yield "                <td class=\"px-6 py-4 whitespace-nowrap\">
                  <div class=\"flex items-center gap-2\">
                    ";
                    // line 52
                    if (array_key_exists("actions_show_route", $context)) {
                        // line 53
                        yield "                      <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actions_show_route"]) || array_key_exists("actions_show_route", $context) ? $context["actions_show_route"] : (function () { throw new RuntimeError('Variable "actions_show_route" does not exist.', 53, $this->source); })()), ["id" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 53, $this->source); })())]), "html", null, true);
                        yield "\" class=\"px-3 py-1.5 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50\">View</a>
                    ";
                    }
                    // line 55
                    yield "                    ";
                    if (array_key_exists("actions_edit_route", $context)) {
                        // line 56
                        yield "                      <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actions_edit_route"]) || array_key_exists("actions_edit_route", $context) ? $context["actions_edit_route"] : (function () { throw new RuntimeError('Variable "actions_edit_route" does not exist.', 56, $this->source); })()), ["id" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 56, $this->source); })())]), "html", null, true);
                        yield "\" class=\"px-3 py-1.5 rounded-lg border border-orange-200 text-paw-orange hover:bg-orange-50\">Edit</a>
                    ";
                    }
                    // line 58
                    yield "                    ";
                    if (array_key_exists("actions_delete_route", $context)) {
                        // line 59
                        yield "                      <form method=\"post\" action=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actions_delete_route"]) || array_key_exists("actions_delete_route", $context) ? $context["actions_delete_route"] : (function () { throw new RuntimeError('Variable "actions_delete_route" does not exist.', 59, $this->source); })()), ["id" => (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 59, $this->source); })())]), "html", null, true);
                        yield "\" data-action=\"submit->delete-confirm#confirm\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . (isset($context["row_id"]) || array_key_exists("row_id", $context) ? $context["row_id"] : (function () { throw new RuntimeError('Variable "row_id" does not exist.', 60, $this->source); })()))), "html", null, true);
                        yield "\">
                        <button type=\"submit\" class=\"px-3 py-1.5 rounded-lg border border-red-200 text-red-500 hover:bg-red-50\">Delete</button>
                      </form>
                    ";
                    }
                    // line 64
                    yield "                  </div>
                </td>
              ";
                }
                // line 67
                yield "            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "        ";
        }
        // line 70
        yield "      </tbody>
    </table>
  </div>

  <div class=\"px-6 py-4 flex flex-wrap items-center justify-between gap-4 text-sm text-gray-500\">
    <div class=\"flex items-center gap-3\">
      <span>Showing</span>
      <select class=\"px-3 py-2 border border-gray-200 rounded-lg bg-white\">
        ";
        // line 78
        $context["pp"] = ((array_key_exists("per_page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["per_page"]) || array_key_exists("per_page", $context) ? $context["per_page"] : (function () { throw new RuntimeError('Variable "per_page" does not exist.', 78, $this->source); })()), 10)) : (10));
        // line 79
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([10, 25, 50]);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 80
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\" ";
            yield ((($context["option"] == (isset($context["pp"]) || array_key_exists("pp", $context) ? $context["pp"] : (function () { throw new RuntimeError('Variable "pp" does not exist.', 80, $this->source); })()))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "      </select>
    </div>
    <div class=\"text-center flex-1\">
      ";
        // line 85
        $context["total"] = ((array_key_exists("total_records", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_records"]) || array_key_exists("total_records", $context) ? $context["total_records"] : (function () { throw new RuntimeError('Variable "total_records" does not exist.', 85, $this->source); })()), 0)) : (0));
        // line 86
        yield "      ";
        $context["per"] = ((array_key_exists("per_page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["per_page"]) || array_key_exists("per_page", $context) ? $context["per_page"] : (function () { throw new RuntimeError('Variable "per_page" does not exist.', 86, $this->source); })()), 10)) : (10));
        // line 87
        yield "      ";
        $context["p"] = ((array_key_exists("page", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 87, $this->source); })()), 1)) : (1));
        // line 88
        yield "      ";
        $context["from"] = ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()) == 0)) ? (0) : (((((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 88, $this->source); })()) - 1) * (isset($context["per"]) || array_key_exists("per", $context) ? $context["per"] : (function () { throw new RuntimeError('Variable "per" does not exist.', 88, $this->source); })())) + 1)));
        // line 89
        yield "      ";
        $context["calc_to"] = ((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 89, $this->source); })()) * (isset($context["per"]) || array_key_exists("per", $context) ? $context["per"] : (function () { throw new RuntimeError('Variable "per" does not exist.', 89, $this->source); })()));
        // line 90
        yield "      ";
        $context["to"] = ((((isset($context["calc_to"]) || array_key_exists("calc_to", $context) ? $context["calc_to"] : (function () { throw new RuntimeError('Variable "calc_to" does not exist.', 90, $this->source); })()) > (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })()))) ? ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })())) : ((isset($context["calc_to"]) || array_key_exists("calc_to", $context) ? $context["calc_to"] : (function () { throw new RuntimeError('Variable "calc_to" does not exist.', 90, $this->source); })())));
        // line 91
        yield "      <span>Showing ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 91, $this->source); })()), "html", null, true);
        yield " to ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 91, $this->source); })()), "html", null, true);
        yield " out of ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 91, $this->source); })()), "html", null, true);
        yield " records</span>
    </div>
    <div class=\"flex items-center gap-2\">
      <button type=\"button\" class=\"w-9 h-9 rounded-lg border border-gray-200 bg-white hover:bg-gray-50 text-gray-600\">&lsaquo;</button>
      ";
        // line 95
        $context["pages"] = ((array_key_exists("total_pages", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 95, $this->source); })()), 4)) : (4));
        // line 96
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 96, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 97
            yield "        <button type=\"button\" class=\"w-9 h-9 rounded-lg border ";
            yield ((($context["i"] == (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 97, $this->source); })()))) ? ("border-paw-orange bg-paw-orange-light text-paw-orange font-medium") : ("border-gray-200 bg-white hover:bg-gray-50 text-gray-600"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "      <button type=\"button\" class=\"w-9 h-9 rounded-lg border border-gray-200 bg-white hover:bg-gray-50 text-gray-600\">&rsaquo;</button>
    </div>
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
        return "components/_entity_table.html.twig";
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
        return array (  299 => 99,  288 => 97,  283 => 96,  281 => 95,  269 => 91,  266 => 90,  263 => 89,  260 => 88,  257 => 87,  254 => 86,  252 => 85,  247 => 82,  234 => 80,  229 => 79,  227 => 78,  217 => 70,  214 => 69,  207 => 67,  202 => 64,  195 => 60,  190 => 59,  187 => 58,  181 => 56,  178 => 55,  172 => 53,  170 => 52,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  143 => 46,  137 => 44,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  103 => 37,  100 => 36,  95 => 35,  89 => 32,  86 => 31,  83 => 30,  81 => 29,  76 => 26,  72 => 24,  69 => 23,  60 => 21,  56 => 20,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
  Usage:
  {% include 'components/_entity_table.html.twig' with {
    columns: ['Utilisateur_ID','First Name','Last Name','E-mail','Phone Number','Status','Actions'],
    rows: [
      ['U-001','John','Doe','john@demo.tld','+1 555 0100','Active'],
    ],
    total_records: 60,
    per_page: 10,
    page: 1,
    total_pages: 4,
  } %}
#}

<div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
  <div class=\"overflow-x-auto\">
    <table class=\"min-w-full text-sm\">
      <thead class=\"bg-white\">
        <tr class=\"text-left text-gray-500\">
          {% for col in columns|default([]) %}
            <th class=\"px-6 py-4 font-medium whitespace-nowrap\">{{ col }}</th>
          {% endfor %}
          {% if actions_enabled|default(false) %}
            <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Actions</th>
          {% endif %}
        </tr>
      </thead>
      <tbody class=\"divide-y divide-gray-100\" data-entity-sort-target=\"tbody\" data-entity-sort-column=\"0\">
        {% set safe_rows = rows|default([]) %}
        {% if safe_rows is empty %}
          <tr>
            <td class=\"px-6 py-6 text-gray-400\" colspan=\"{{ columns|length + (actions_enabled|default(false) ? 1 : 0) }}\">No data yet.</td>
          </tr>
        {% else %}
          {% for row in safe_rows %}
            <tr class=\"text-gray-700 hover:bg-gray-50\">
              {% for cell in row %}
                {% if status_badge_index is defined and loop.index0 == status_badge_index %}
                  {% set is_active = cell|lower == 'actif' or cell|lower == 'active' %}
                  <td class=\"px-6 py-4 whitespace-nowrap\">
                    <span class=\"text-xs px-2 py-1 rounded-full font-medium {{ is_active ? 'bg-green-50 text-green-600' : 'bg-red-50 text-red-600' }}\">{{ cell }}</span>
                  </td>
                {% else %}
                  <td class=\"px-6 py-4 whitespace-nowrap\">{{ cell }}</td>
                {% endif %}
              {% endfor %}
              {% if actions_enabled|default(false) %}
                {% set row_id_index = actions_id_index|default(0) %}
                {% set row_id = attribute(row, row_id_index) %}
                <td class=\"px-6 py-4 whitespace-nowrap\">
                  <div class=\"flex items-center gap-2\">
                    {% if actions_show_route is defined %}
                      <a href=\"{{ path(actions_show_route, {id: row_id}) }}\" class=\"px-3 py-1.5 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50\">View</a>
                    {% endif %}
                    {% if actions_edit_route is defined %}
                      <a href=\"{{ path(actions_edit_route, {id: row_id}) }}\" class=\"px-3 py-1.5 rounded-lg border border-orange-200 text-paw-orange hover:bg-orange-50\">Edit</a>
                    {% endif %}
                    {% if actions_delete_route is defined %}
                      <form method=\"post\" action=\"{{ path(actions_delete_route, {id: row_id}) }}\" data-action=\"submit->delete-confirm#confirm\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ row_id) }}\">
                        <button type=\"submit\" class=\"px-3 py-1.5 rounded-lg border border-red-200 text-red-500 hover:bg-red-50\">Delete</button>
                      </form>
                    {% endif %}
                  </div>
                </td>
              {% endif %}
            </tr>
          {% endfor %}
        {% endif %}
      </tbody>
    </table>
  </div>

  <div class=\"px-6 py-4 flex flex-wrap items-center justify-between gap-4 text-sm text-gray-500\">
    <div class=\"flex items-center gap-3\">
      <span>Showing</span>
      <select class=\"px-3 py-2 border border-gray-200 rounded-lg bg-white\">
        {% set pp = per_page|default(10) %}
        {% for option in [10, 25, 50] %}
          <option value=\"{{ option }}\" {{ option == pp ? 'selected' : '' }}>{{ option }}</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"text-center flex-1\">
      {% set total = total_records|default(0) %}
      {% set per = per_page|default(10) %}
      {% set p = page|default(1) %}
      {% set from = total == 0 ? 0 : ((p-1) * per) + 1 %}
      {% set calc_to = p * per %}
      {% set to = calc_to > total ? total : calc_to %}
      <span>Showing {{ from }} to {{ to }} out of {{ total }} records</span>
    </div>
    <div class=\"flex items-center gap-2\">
      <button type=\"button\" class=\"w-9 h-9 rounded-lg border border-gray-200 bg-white hover:bg-gray-50 text-gray-600\">&lsaquo;</button>
      {% set pages = total_pages|default(4) %}
      {% for i in 1..pages %}
        <button type=\"button\" class=\"w-9 h-9 rounded-lg border {{ i == p ? 'border-paw-orange bg-paw-orange-light text-paw-orange font-medium' : 'border-gray-200 bg-white hover:bg-gray-50 text-gray-600' }}\">{{ i }}</button>
      {% endfor %}
      <button type=\"button\" class=\"w-9 h-9 rounded-lg border border-gray-200 bg-white hover:bg-gray-50 text-gray-600\">&rsaquo;</button>
    </div>
  </div>
</div>

", "components/_entity_table.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\components\\_entity_table.html.twig");
    }
}
