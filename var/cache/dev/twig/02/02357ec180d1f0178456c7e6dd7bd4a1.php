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

/* participation/index.html.twig */
class __TwigTemplate_7736cd988aaa30e984fad55842e335ac extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/index.html.twig"));

        $this->parent = $this->load("layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Participations | PawTech Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "<div class=\"space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <h1 class=\"text-2xl font-bold text-gray-800\">Participations</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Participation
        </a>
    </div>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "        <div class=\"bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg\">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    ";
        // line 24
        yield "    <div id=\"filterForm\" class=\"bg-white rounded-xl border border-gray-200 p-4\"
         data-filter-url=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_filter");
        yield "\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" id=\"searchInput\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Name, email or event...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-40\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Status</label>
                <select id=\"statutFilter\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All</option>
                    <option value=\"EN_ATTENTE\" ";
        // line 36
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 36, $this->source); })()) == "EN_ATTENTE")) ? ("selected") : (""));
        yield ">Pending</option>
                    <option value=\"CONFIRMEE\" ";
        // line 37
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 37, $this->source); })()) == "CONFIRMEE")) ? ("selected") : (""));
        yield ">Confirmed</option>
                    <option value=\"ANNULEE\" ";
        // line 38
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 38, $this->source); })()) == "ANNULEE")) ? ("selected") : (""));
        yield ">Cancelled</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select id=\"sortFilter\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"dateParticipation_desc\" ";
        // line 44
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 44, $this->source); })()) == "dateParticipation_desc")) ? ("selected") : (""));
        yield ">Date (newest)</option>
                    <option value=\"dateParticipation_asc\" ";
        // line 45
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 45, $this->source); })()) == "dateParticipation_asc")) ? ("selected") : (""));
        yield ">Date (oldest)</option>
                    <option value=\"user_asc\" ";
        // line 46
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 46, $this->source); })()) == "user_asc")) ? ("selected") : (""));
        yield ">Participant (A-Z)</option>
                    <option value=\"user_desc\" ";
        // line 47
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 47, $this->source); })()) == "user_desc")) ? ("selected") : (""));
        yield ">Participant (Z-A)</option>
                    <option value=\"evenement_asc\" ";
        // line 48
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 48, $this->source); })()) == "evenement_asc")) ? ("selected") : (""));
        yield ">Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"button\" id=\"filterBtn\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover flex items-center gap-2\">
                    <span>Filter</span>
                    <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z\"></path>
                    </svg>
                </button>
                <button type=\"button\" id=\"resetBtn\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </button>
            </div>
        </div>
    </div>

    ";
        // line 67
        yield "    <div id=\"resultsCount\" class=\"text-sm text-gray-600\">
        ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 68, $this->source); })())), "html", null, true);
        yield " participation(s) found
    </div>

    ";
        // line 72
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Event</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Registration Date</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    <th class=\"px-4 py-3 text-right text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-gray-100\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 85
            yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <div class=\"font-medium text-gray-900\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "user", [], "any", false, false, false, 87), "fullName", [], "any", false, false, false, 87), "html", null, true);
            yield "</div>
                            <div class=\"text-sm text-gray-500\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "user", [], "any", false, false, false, 88), "email", [], "any", false, false, false, 88), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3\">
                            <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"text-paw-orange hover:underline font-medium\">
                                ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 92), "titre", [], "any", false, false, false, 92), "html", null, true);
            yield "
                            </a>
                            <div class=\"text-sm text-gray-500\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 94), "ville", [], "any", false, false, false, 94), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateParticipation", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 98
            $context["statutColors"] = ["EN_ATTENTE" => "bg-yellow-100 text-yellow-800", "CONFIRMEE" => "bg-green-100 text-green-800", "ANNULEE" => "bg-red-100 text-red-800"];
            // line 103
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 103), [], "array", true, true, false, 103) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 103, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 103), [], "array", false, false, false, 103)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 103, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 103), [], "array", false, false, false, 103), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 104), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3 text-right\">
                            <div class=\"flex justify-end gap-1\">
                                ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 109) == "EN_ATTENTE")) {
                // line 110
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("confirm" . CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 111))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"p-1.5 text-green-600 hover:bg-green-50 rounded\" title=\"Confirm\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action=\"";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 118)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 119))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"p-1.5 text-red-600 hover:bg-red-50 rounded\" title=\"Cancel\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                                            </svg>
                                        </button>
                                    </form>
                                ";
            }
            // line 127
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            yield "\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"Edit\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 141
        if (!$context['_iterated']) {
            // line 142
            yield "                    <tr>
                        <td colspan=\"5\" class=\"px-4 py-8 text-center text-gray-500\">
                            No participations found
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('filterForm');
    const searchInput = document.getElementById('searchInput');
    const statutFilter = document.getElementById('statutFilter');
    const sortFilter = document.getElementById('sortFilter');
    const filterBtn = document.getElementById('filterBtn');
    const resetBtn = document.getElementById('resetBtn');
    const filterSpinner = document.getElementById('filterSpinner');
    const tableBody = document.getElementById('tableBody');
    const resultsCount = document.getElementById('resultsCount');
    
    const filterUrl = filterForm.dataset.filterUrl;
    let debounceTimer;

    const statutColors = {
        'EN_ATTENTE': 'bg-yellow-100 text-yellow-800',
        'CONFIRMEE': 'bg-green-100 text-green-800',
        'ANNULEE': 'bg-red-100 text-red-800'
    };

    function renderTable(items) {
        if (!items || items.length === 0) {
            tableBody.innerHTML = '<tr><td colspan=\"5\" class=\"px-4 py-8 text-center text-gray-500\">No participations found</td></tr>';
            return;
        }

        tableBody.innerHTML = items.map(p => {
            let actionButtons = '';
            if (p.statut === 'EN_ATTENTE') {
                actionButtons = `
                    <form action=\"\${p.confirmUrl}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Confirm this participation?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"\">
                        <button type=\"submit\" class=\"p-1.5 text-green-600 hover:bg-green-50 rounded\" title=\"Confirm\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                            </svg>
                        </button>
                    </form>
                    <form action=\"\${p.cancelUrl}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Cancel this participation?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"\">
                        <button type=\"submit\" class=\"p-1.5 text-red-600 hover:bg-red-50 rounded\" title=\"Cancel\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </button>
                    </form>
                `;
            }
            
            return `
                <tr class=\"hover:bg-gray-50\">
                    <td class=\"px-4 py-3\">
                        <div class=\"font-medium text-gray-900\">\${p.userFullName}</div>
                        <div class=\"text-sm text-gray-500\">\${p.userEmail}</div>
                    </td>
                    <td class=\"px-4 py-3\">
                        <a href=\"\${p.evenementUrl}\" class=\"text-paw-orange hover:underline font-medium\">\${p.evenementTitre}</a>
                        <div class=\"text-sm text-gray-500\">\${p.evenementVille}</div>
                    </td>
                    <td class=\"px-4 py-3 text-gray-600\">\${p.dateParticipation}</td>
                    <td class=\"px-4 py-3\">
                        <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${statutColors[p.statut] || 'bg-gray-100 text-gray-800'}\">
                            \${p.statut.replace('_', ' ')}
                        </span>
                    </td>
                    <td class=\"px-4 py-3 text-right\">
                        <div class=\"flex justify-end gap-1\">
                            \${actionButtons}
                            <a href=\"\${p.showUrl}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                </svg>
                            </a>
                            <a href=\"\${p.editUrl}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"Edit\">
                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }

    function doFilter() {
        const params = new URLSearchParams();
        if (searchInput.value) params.append('q', searchInput.value);
        if (statutFilter.value) params.append('statut', statutFilter.value);
        if (sortFilter.value) params.append('sort', sortFilter.value);

        filterSpinner.classList.remove('hidden');
        filterBtn.disabled = true;

        fetch(`\${filterUrl}?\${params.toString()}`)
            .then(r => r.json())
            .then(data => {
                filterSpinner.classList.add('hidden');
                filterBtn.disabled = false;
                if (data.ok) {
                    renderTable(data.items);
                    resultsCount.textContent = `\${data.count} participation(s) found`;
                }
            })
            .catch(() => {
                filterSpinner.classList.add('hidden');
                filterBtn.disabled = false;
            });
    }

    filterBtn.addEventListener('click', doFilter);
    resetBtn.addEventListener('click', () => {
        searchInput.value = '';
        statutFilter.value = '';
        sortFilter.value = 'dateParticipation_desc';
        doFilter();
    });
    searchInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(doFilter, 300);
    });
    statutFilter.addEventListener('change', doFilter);
    sortFilter.addEventListener('change', doFilter);
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "participation/index.html.twig";
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
        return array (  353 => 148,  342 => 142,  340 => 141,  327 => 133,  317 => 127,  306 => 119,  302 => 118,  292 => 111,  287 => 110,  285 => 109,  277 => 104,  272 => 103,  270 => 98,  265 => 96,  260 => 94,  255 => 92,  251 => 91,  245 => 88,  241 => 87,  237 => 85,  232 => 84,  218 => 72,  212 => 68,  209 => 67,  188 => 48,  184 => 47,  180 => 46,  176 => 45,  172 => 44,  163 => 38,  159 => 37,  155 => 36,  145 => 29,  138 => 25,  135 => 24,  132 => 22,  123 => 19,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Participations | PawTech Admin{% endblock %}

{% block main %}
<div class=\"space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <h1 class=\"text-2xl font-bold text-gray-800\">Participations</h1>
        <a href=\"{{ path('app_participation_new') }}\" class=\"flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Participation
        </a>
    </div>

    {% for message in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg\">
            {{ message }}
        </div>
    {% endfor %}

    {# Search and Filter - AJAX #}
    <div id=\"filterForm\" class=\"bg-white rounded-xl border border-gray-200 p-4\"
         data-filter-url=\"{{ path('app_participation_filter') }}\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" id=\"searchInput\" value=\"{{ q }}\" placeholder=\"Name, email or event...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-40\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Status</label>
                <select id=\"statutFilter\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All</option>
                    <option value=\"EN_ATTENTE\" {{ statut == 'EN_ATTENTE' ? 'selected' }}>Pending</option>
                    <option value=\"CONFIRMEE\" {{ statut == 'CONFIRMEE' ? 'selected' }}>Confirmed</option>
                    <option value=\"ANNULEE\" {{ statut == 'ANNULEE' ? 'selected' }}>Cancelled</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select id=\"sortFilter\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"dateParticipation_desc\" {{ sort == 'dateParticipation_desc' ? 'selected' }}>Date (newest)</option>
                    <option value=\"dateParticipation_asc\" {{ sort == 'dateParticipation_asc' ? 'selected' }}>Date (oldest)</option>
                    <option value=\"user_asc\" {{ sort == 'user_asc' ? 'selected' }}>Participant (A-Z)</option>
                    <option value=\"user_desc\" {{ sort == 'user_desc' ? 'selected' }}>Participant (Z-A)</option>
                    <option value=\"evenement_asc\" {{ sort == 'evenement_asc' ? 'selected' }}>Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"button\" id=\"filterBtn\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover flex items-center gap-2\">
                    <span>Filter</span>
                    <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z\"></path>
                    </svg>
                </button>
                <button type=\"button\" id=\"resetBtn\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </button>
            </div>
        </div>
    </div>

    {# Results Count #}
    <div id=\"resultsCount\" class=\"text-sm text-gray-600\">
        {{ participations|length }} participation(s) found
    </div>

    {# Table #}
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Event</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Registration Date</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    <th class=\"px-4 py-3 text-right text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-gray-100\">
                {% for participation in participations %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <div class=\"font-medium text-gray-900\">{{ participation.user.fullName }}</div>
                            <div class=\"text-sm text-gray-500\">{{ participation.user.email }}</div>
                        </td>
                        <td class=\"px-4 py-3\">
                            <a href=\"{{ path('app_evenement_show', {'id': participation.evenement.id}) }}\" class=\"text-paw-orange hover:underline font-medium\">
                                {{ participation.evenement.titre }}
                            </a>
                            <div class=\"text-sm text-gray-500\">{{ participation.evenement.ville }}</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">{{ participation.dateParticipation|date('d/m/Y') }}</td>
                        <td class=\"px-4 py-3\">
                            {% set statutColors = {
                                'EN_ATTENTE': 'bg-yellow-100 text-yellow-800',
                                'CONFIRMEE': 'bg-green-100 text-green-800',
                                'ANNULEE': 'bg-red-100 text-red-800'
                            } %}
                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ statutColors[participation.statut] ?? 'bg-gray-100 text-gray-800' }}\">
                                {{ participation.statut|replace({'_': ' '}) }}
                            </span>
                        </td>
                        <td class=\"px-4 py-3 text-right\">
                            <div class=\"flex justify-end gap-1\">
                                {% if participation.statut == 'EN_ATTENTE' %}
                                    <form action=\"{{ path('app_participation_confirm', {'id': participation.id}) }}\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('confirm' ~ participation.id) }}\">
                                        <button type=\"submit\" class=\"p-1.5 text-green-600 hover:bg-green-50 rounded\" title=\"Confirm\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action=\"{{ path('app_participation_cancel', {'id': participation.id}) }}\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ participation.id) }}\">
                                        <button type=\"submit\" class=\"p-1.5 text-red-600 hover:bg-red-50 rounded\" title=\"Cancel\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                                            </svg>
                                        </button>
                                    </form>
                                {% endif %}
                                <a href=\"{{ path('app_participation_show', {'id': participation.id}) }}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"{{ path('app_participation_edit', {'id': participation.id}) }}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"Edit\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" class=\"px-4 py-8 text-center text-gray-500\">
                            No participations found
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('filterForm');
    const searchInput = document.getElementById('searchInput');
    const statutFilter = document.getElementById('statutFilter');
    const sortFilter = document.getElementById('sortFilter');
    const filterBtn = document.getElementById('filterBtn');
    const resetBtn = document.getElementById('resetBtn');
    const filterSpinner = document.getElementById('filterSpinner');
    const tableBody = document.getElementById('tableBody');
    const resultsCount = document.getElementById('resultsCount');
    
    const filterUrl = filterForm.dataset.filterUrl;
    let debounceTimer;

    const statutColors = {
        'EN_ATTENTE': 'bg-yellow-100 text-yellow-800',
        'CONFIRMEE': 'bg-green-100 text-green-800',
        'ANNULEE': 'bg-red-100 text-red-800'
    };

    function renderTable(items) {
        if (!items || items.length === 0) {
            tableBody.innerHTML = '<tr><td colspan=\"5\" class=\"px-4 py-8 text-center text-gray-500\">No participations found</td></tr>';
            return;
        }

        tableBody.innerHTML = items.map(p => {
            let actionButtons = '';
            if (p.statut === 'EN_ATTENTE') {
                actionButtons = `
                    <form action=\"\${p.confirmUrl}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Confirm this participation?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"\">
                        <button type=\"submit\" class=\"p-1.5 text-green-600 hover:bg-green-50 rounded\" title=\"Confirm\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                            </svg>
                        </button>
                    </form>
                    <form action=\"\${p.cancelUrl}\" method=\"post\" class=\"inline\" onsubmit=\"return confirm('Cancel this participation?')\">
                        <input type=\"hidden\" name=\"_token\" value=\"\">
                        <button type=\"submit\" class=\"p-1.5 text-red-600 hover:bg-red-50 rounded\" title=\"Cancel\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </button>
                    </form>
                `;
            }
            
            return `
                <tr class=\"hover:bg-gray-50\">
                    <td class=\"px-4 py-3\">
                        <div class=\"font-medium text-gray-900\">\${p.userFullName}</div>
                        <div class=\"text-sm text-gray-500\">\${p.userEmail}</div>
                    </td>
                    <td class=\"px-4 py-3\">
                        <a href=\"\${p.evenementUrl}\" class=\"text-paw-orange hover:underline font-medium\">\${p.evenementTitre}</a>
                        <div class=\"text-sm text-gray-500\">\${p.evenementVille}</div>
                    </td>
                    <td class=\"px-4 py-3 text-gray-600\">\${p.dateParticipation}</td>
                    <td class=\"px-4 py-3\">
                        <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${statutColors[p.statut] || 'bg-gray-100 text-gray-800'}\">
                            \${p.statut.replace('_', ' ')}
                        </span>
                    </td>
                    <td class=\"px-4 py-3 text-right\">
                        <div class=\"flex justify-end gap-1\">
                            \${actionButtons}
                            <a href=\"\${p.showUrl}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                </svg>
                            </a>
                            <a href=\"\${p.editUrl}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"Edit\">
                                <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }

    function doFilter() {
        const params = new URLSearchParams();
        if (searchInput.value) params.append('q', searchInput.value);
        if (statutFilter.value) params.append('statut', statutFilter.value);
        if (sortFilter.value) params.append('sort', sortFilter.value);

        filterSpinner.classList.remove('hidden');
        filterBtn.disabled = true;

        fetch(`\${filterUrl}?\${params.toString()}`)
            .then(r => r.json())
            .then(data => {
                filterSpinner.classList.add('hidden');
                filterBtn.disabled = false;
                if (data.ok) {
                    renderTable(data.items);
                    resultsCount.textContent = `\${data.count} participation(s) found`;
                }
            })
            .catch(() => {
                filterSpinner.classList.add('hidden');
                filterBtn.disabled = false;
            });
    }

    filterBtn.addEventListener('click', doFilter);
    resetBtn.addEventListener('click', () => {
        searchInput.value = '';
        statutFilter.value = '';
        sortFilter.value = 'dateParticipation_desc';
        doFilter();
    });
    searchInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(doFilter, 300);
    });
    statutFilter.addEventListener('change', doFilter);
    sortFilter.addEventListener('change', doFilter);
});
</script>
{% endblock %}
", "participation/index.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\participation\\index.html.twig");
    }
}
