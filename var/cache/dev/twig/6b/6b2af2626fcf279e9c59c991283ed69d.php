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

/* evenement/index.html.twig */
class __TwigTemplate_72e70f19ce040b978e7814343590d0c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

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

        yield "Events | PawTech Admin";
        
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
    ";
        // line 8
        yield "    <div class=\"flex flex-wrap items-center justify-between gap-4\">
        <div>
            <h1 class=\"text-2xl font-bold text-gray-800\">Event Management</h1>
            <p class=\"text-sm text-gray-500 mt-1\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 11, $this->source); })())), "html", null, true);
        yield " events total</p>
        </div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        yield "\" class=\"inline-flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Event
        </a>
    </div>

    ";
        // line 22
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "        <div class=\"p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 flex items-center gap-2\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
            </svg>
            ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
    ";
        // line 32
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-4\" id=\"filterForm\"
         data-filter-url=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_filter");
        yield "\">
        <div class=\"flex flex-wrap gap-4\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" id=\"searchInput\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["q"], "method", false, false, false, 36), "html", null, true);
        yield "\" 
                       placeholder=\"Search by title, location, city...\" 
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <select id=\"typeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All types</option>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["VACCINATION", "ADOPTION", "SENSIBILISATION", "COLLECTE_DONS"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 43
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "get", ["type"], "method", false, false, false, 43) == $context["type"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["type"], ["_" => " "]), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </select>
            <select id=\"statutFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All statuses</option>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["PLANIFIE", "EN_COURS", "TERMINE", "ANNULE"]);
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 49
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statut"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "get", ["statut"], "method", false, false, false, 49) == $context["statut"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "]), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "            </select>
            <select id=\"sortFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"dateDebut_DESC\" ";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", ["sort"], "method", false, false, false, 53) == "dateDebut_DESC")) ? ("selected") : (""));
        yield ">Date (newest)</option>
                <option value=\"dateDebut_ASC\" ";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "query", [], "any", false, false, false, 54), "get", ["sort"], "method", false, false, false, 54) == "dateDebut_ASC")) ? ("selected") : (""));
        yield ">Date (oldest)</option>
                <option value=\"titre_ASC\" ";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "query", [], "any", false, false, false, 55), "get", ["sort"], "method", false, false, false, 55) == "titre_ASC")) ? ("selected") : (""));
        yield ">Title A-Z</option>
                <option value=\"titre_DESC\" ";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "query", [], "any", false, false, false, 56), "get", ["sort"], "method", false, false, false, 56) == "titre_DESC")) ? ("selected") : (""));
        yield ">Title Z-A</option>
            </select>
            <button type=\"button\" id=\"filterBtn\" class=\"px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 flex items-center gap-2\">
                <span>Filter</span>
                <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z\"></path>
                </svg>
            </button>
            <button type=\"button\" id=\"resetBtn\" class=\"px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50\">
                Reset
            </button>
        </div>
    </div>
    
    ";
        // line 72
        yield "    <div id=\"resultsCount\" class=\"text-sm text-gray-500\">
        ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 73, $this->source); })())), "html", null, true);
        yield " events total
    </div>

    ";
        // line 77
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">ID</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Title</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Type</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Start Date</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">City</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Capacity</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-gray-100\">
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 93
            yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <span class=\"font-mono text-gray-500\">#";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <span class=\"font-medium text-gray-900\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 98), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 101
            $context["typeColors"] = ["VACCINATION" => "bg-green-100 text-green-800", "ADOPTION" => "bg-blue-100 text-blue-800", "SENSIBILISATION" => "bg-purple-100 text-purple-800", "COLLECTE_DONS" => "bg-yellow-100 text-yellow-800"];
            // line 107
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 107), [], "array", true, true, false, 107) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 107, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 107), [], "array", false, false, false, 107)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 107, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 107), [], "array", false, false, false, 107), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 108), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"text-gray-900\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
            yield "</div>
                            <div class=\"text-xs text-gray-500\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 113), "H:i"), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 117
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capaciteMax", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "                                <span class=\"font-medium\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capaciteMax", [], "any", false, false, false, 118), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 120
                yield "                                <span class=\"text-gray-400\">∞</span>
                            ";
            }
            // line 122
            yield "                        </td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 124
            $context["statutColors"] = ["PLANIFIE" => "bg-blue-100 text-blue-800", "EN_COURS" => "bg-green-100 text-green-800", "TERMINE" => "bg-gray-100 text-gray-800", "ANNULE" => "bg-red-100 text-red-800"];
            // line 130
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 130), [], "array", true, true, false, 130) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 130, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 130), [], "array", false, false, false, 130)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 130, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 131), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"flex items-center gap-1\">
                                <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" 
                                   class=\"p-2 text-gray-600 hover:bg-gray-100 rounded-lg\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" 
                                   class=\"p-2 text-blue-600 hover:bg-blue-50 rounded-lg\" title=\"Edit\">
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
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                    <tr>
                        <td colspan=\"8\" class=\"px-4 py-8 text-center text-gray-500\">
                            No events found
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evenement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterForm = document.getElementById('filterForm');
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');
    const statutFilter = document.getElementById('statutFilter');
    const sortFilter = document.getElementById('sortFilter');
    const filterBtn = document.getElementById('filterBtn');
    const resetBtn = document.getElementById('resetBtn');
    const filterSpinner = document.getElementById('filterSpinner');
    const tableBody = document.getElementById('tableBody');
    const resultsCount = document.getElementById('resultsCount');
    
    const filterUrl = filterForm.dataset.filterUrl;
    let debounceTimer;

    const typeColors = {
        'VACCINATION': 'bg-green-100 text-green-800',
        'ADOPTION': 'bg-blue-100 text-blue-800',
        'SENSIBILISATION': 'bg-purple-100 text-purple-800',
        'COLLECTE_DONS': 'bg-yellow-100 text-yellow-800'
    };

    const statutColors = {
        'PLANIFIE': 'bg-blue-100 text-blue-800',
        'EN_COURS': 'bg-green-100 text-green-800',
        'TERMINE': 'bg-gray-100 text-gray-800',
        'ANNULE': 'bg-red-100 text-red-800'
    };

    function renderTable(items) {
        if (!items || items.length === 0) {
            tableBody.innerHTML = '<tr><td colspan=\"8\" class=\"px-4 py-8 text-center text-gray-500\">No events found</td></tr>';
            return;
        }

        tableBody.innerHTML = items.map(e => `
            <tr class=\"hover:bg-gray-50\">
                <td class=\"px-4 py-3\"><span class=\"font-mono text-gray-500\">#\${e.id}</span></td>
                <td class=\"px-4 py-3\"><span class=\"font-medium text-gray-900\">\${e.titre}</span></td>
                <td class=\"px-4 py-3\">
                    <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${typeColors[e.type] || 'bg-gray-100 text-gray-800'}\">
                        \${e.type.replace('_', ' ')}
                    </span>
                </td>
                <td class=\"px-4 py-3\">
                    <div class=\"text-gray-900\">\${e.dateDebut}</div>
                    <div class=\"text-xs text-gray-500\">\${e.heureDebut}</div>
                </td>
                <td class=\"px-4 py-3 text-gray-600\">\${e.ville}</td>
                <td class=\"px-4 py-3\">\${e.capaciteMax ? `<span class=\"font-medium\">\${e.capaciteMax}</span>` : '<span class=\"text-gray-400\">∞</span>'}</td>
                <td class=\"px-4 py-3\">
                    <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${statutColors[e.statut] || 'bg-gray-100 text-gray-800'}\">
                        \${e.statut.replace('_', ' ')}
                    </span>
                </td>
                <td class=\"px-4 py-3\">
                    <div class=\"flex items-center gap-1\">
                        <a href=\"\${e.showUrl}\" class=\"p-2 text-gray-600 hover:bg-gray-100 rounded-lg\" title=\"View\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                            </svg>
                        </a>
                        <a href=\"\${e.editUrl}\" class=\"p-2 text-blue-600 hover:bg-blue-50 rounded-lg\" title=\"Edit\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    function doFilter() {
        const params = new URLSearchParams();
        if (searchInput.value) params.append('q', searchInput.value);
        if (typeFilter.value) params.append('type', typeFilter.value);
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
                    resultsCount.textContent = `\${data.count} events total`;
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
        typeFilter.value = '';
        statutFilter.value = '';
        sortFilter.value = 'dateDebut_DESC';
        doFilter();
    });
    searchInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(doFilter, 300);
    });
    typeFilter.addEventListener('change', doFilter);
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
        return "evenement/index.html.twig";
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
        return array (  381 => 159,  370 => 153,  368 => 152,  354 => 143,  344 => 136,  336 => 131,  331 => 130,  329 => 124,  325 => 122,  321 => 120,  315 => 118,  313 => 117,  308 => 115,  303 => 113,  299 => 112,  292 => 108,  287 => 107,  285 => 101,  279 => 98,  273 => 95,  269 => 93,  264 => 92,  247 => 77,  241 => 73,  238 => 72,  220 => 56,  216 => 55,  212 => 54,  208 => 53,  204 => 51,  191 => 49,  187 => 48,  182 => 45,  169 => 43,  165 => 42,  156 => 36,  150 => 33,  147 => 32,  144 => 30,  135 => 27,  129 => 23,  124 => 22,  113 => 13,  108 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Events | PawTech Admin{% endblock %}

{% block main %}
<div class=\"space-y-4\">
    {# Header #}
    <div class=\"flex flex-wrap items-center justify-between gap-4\">
        <div>
            <h1 class=\"text-2xl font-bold text-gray-800\">Event Management</h1>
            <p class=\"text-sm text-gray-500 mt-1\">{{ evenements|length }} events total</p>
        </div>
        <a href=\"{{ path('app_evenement_new') }}\" class=\"inline-flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Event
        </a>
    </div>

    {# Flash Messages #}
    {% for message in app.flashes('success') %}
        <div class=\"p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 flex items-center gap-2\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
            </svg>
            {{ message }}
        </div>
    {% endfor %}

    {# Search & Filter - AJAX #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-4\" id=\"filterForm\"
         data-filter-url=\"{{ path('app_evenement_filter') }}\">
        <div class=\"flex flex-wrap gap-4\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" id=\"searchInput\" value=\"{{ app.request.query.get('q') }}\" 
                       placeholder=\"Search by title, location, city...\" 
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <select id=\"typeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All types</option>
                {% for type in ['VACCINATION', 'ADOPTION', 'SENSIBILISATION', 'COLLECTE_DONS'] %}
                    <option value=\"{{ type }}\" {{ app.request.query.get('type') == type ? 'selected' : '' }}>{{ type|replace({'_': ' '}) }}</option>
                {% endfor %}
            </select>
            <select id=\"statutFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All statuses</option>
                {% for statut in ['PLANIFIE', 'EN_COURS', 'TERMINE', 'ANNULE'] %}
                    <option value=\"{{ statut }}\" {{ app.request.query.get('statut') == statut ? 'selected' : '' }}>{{ statut|replace({'_': ' '}) }}</option>
                {% endfor %}
            </select>
            <select id=\"sortFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"dateDebut_DESC\" {{ app.request.query.get('sort') == 'dateDebut_DESC' ? 'selected' : '' }}>Date (newest)</option>
                <option value=\"dateDebut_ASC\" {{ app.request.query.get('sort') == 'dateDebut_ASC' ? 'selected' : '' }}>Date (oldest)</option>
                <option value=\"titre_ASC\" {{ app.request.query.get('sort') == 'titre_ASC' ? 'selected' : '' }}>Title A-Z</option>
                <option value=\"titre_DESC\" {{ app.request.query.get('sort') == 'titre_DESC' ? 'selected' : '' }}>Title Z-A</option>
            </select>
            <button type=\"button\" id=\"filterBtn\" class=\"px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 flex items-center gap-2\">
                <span>Filter</span>
                <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                    <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                    <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z\"></path>
                </svg>
            </button>
            <button type=\"button\" id=\"resetBtn\" class=\"px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50\">
                Reset
            </button>
        </div>
    </div>
    
    {# Results count #}
    <div id=\"resultsCount\" class=\"text-sm text-gray-500\">
        {{ evenements|length }} events total
    </div>

    {# Table #}
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">ID</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Title</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Type</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Start Date</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">City</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Capacity</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody id=\"tableBody\" class=\"divide-y divide-gray-100\">
                {% for evenement in evenements %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <span class=\"font-mono text-gray-500\">#{{ evenement.id }}</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <span class=\"font-medium text-gray-900\">{{ evenement.titre }}</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            {% set typeColors = {
                                'VACCINATION': 'bg-green-100 text-green-800',
                                'ADOPTION': 'bg-blue-100 text-blue-800',
                                'SENSIBILISATION': 'bg-purple-100 text-purple-800',
                                'COLLECTE_DONS': 'bg-yellow-100 text-yellow-800'
                            } %}
                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ typeColors[evenement.type] ?? 'bg-gray-100 text-gray-800' }}\">
                                {{ evenement.type|replace({'_': ' '}) }}
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"text-gray-900\">{{ evenement.dateDebut|date('d/m/Y') }}</div>
                            <div class=\"text-xs text-gray-500\">{{ evenement.dateDebut|date('H:i') }}</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">{{ evenement.ville }}</td>
                        <td class=\"px-4 py-3\">
                            {% if evenement.capaciteMax %}
                                <span class=\"font-medium\">{{ evenement.capaciteMax }}</span>
                            {% else %}
                                <span class=\"text-gray-400\">∞</span>
                            {% endif %}
                        </td>
                        <td class=\"px-4 py-3\">
                            {% set statutColors = {
                                'PLANIFIE': 'bg-blue-100 text-blue-800',
                                'EN_COURS': 'bg-green-100 text-green-800',
                                'TERMINE': 'bg-gray-100 text-gray-800',
                                'ANNULE': 'bg-red-100 text-red-800'
                            } %}
                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ statutColors[evenement.statut] ?? 'bg-gray-100 text-gray-800' }}\">
                                {{ evenement.statut|replace({'_': ' '}) }}
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"flex items-center gap-1\">
                                <a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\" 
                                   class=\"p-2 text-gray-600 hover:bg-gray-100 rounded-lg\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\" 
                                   class=\"p-2 text-blue-600 hover:bg-blue-50 rounded-lg\" title=\"Edit\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"px-4 py-8 text-center text-gray-500\">
                            No events found
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
    const typeFilter = document.getElementById('typeFilter');
    const statutFilter = document.getElementById('statutFilter');
    const sortFilter = document.getElementById('sortFilter');
    const filterBtn = document.getElementById('filterBtn');
    const resetBtn = document.getElementById('resetBtn');
    const filterSpinner = document.getElementById('filterSpinner');
    const tableBody = document.getElementById('tableBody');
    const resultsCount = document.getElementById('resultsCount');
    
    const filterUrl = filterForm.dataset.filterUrl;
    let debounceTimer;

    const typeColors = {
        'VACCINATION': 'bg-green-100 text-green-800',
        'ADOPTION': 'bg-blue-100 text-blue-800',
        'SENSIBILISATION': 'bg-purple-100 text-purple-800',
        'COLLECTE_DONS': 'bg-yellow-100 text-yellow-800'
    };

    const statutColors = {
        'PLANIFIE': 'bg-blue-100 text-blue-800',
        'EN_COURS': 'bg-green-100 text-green-800',
        'TERMINE': 'bg-gray-100 text-gray-800',
        'ANNULE': 'bg-red-100 text-red-800'
    };

    function renderTable(items) {
        if (!items || items.length === 0) {
            tableBody.innerHTML = '<tr><td colspan=\"8\" class=\"px-4 py-8 text-center text-gray-500\">No events found</td></tr>';
            return;
        }

        tableBody.innerHTML = items.map(e => `
            <tr class=\"hover:bg-gray-50\">
                <td class=\"px-4 py-3\"><span class=\"font-mono text-gray-500\">#\${e.id}</span></td>
                <td class=\"px-4 py-3\"><span class=\"font-medium text-gray-900\">\${e.titre}</span></td>
                <td class=\"px-4 py-3\">
                    <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${typeColors[e.type] || 'bg-gray-100 text-gray-800'}\">
                        \${e.type.replace('_', ' ')}
                    </span>
                </td>
                <td class=\"px-4 py-3\">
                    <div class=\"text-gray-900\">\${e.dateDebut}</div>
                    <div class=\"text-xs text-gray-500\">\${e.heureDebut}</div>
                </td>
                <td class=\"px-4 py-3 text-gray-600\">\${e.ville}</td>
                <td class=\"px-4 py-3\">\${e.capaciteMax ? `<span class=\"font-medium\">\${e.capaciteMax}</span>` : '<span class=\"text-gray-400\">∞</span>'}</td>
                <td class=\"px-4 py-3\">
                    <span class=\"px-2 py-1 rounded-full text-xs font-semibold \${statutColors[e.statut] || 'bg-gray-100 text-gray-800'}\">
                        \${e.statut.replace('_', ' ')}
                    </span>
                </td>
                <td class=\"px-4 py-3\">
                    <div class=\"flex items-center gap-1\">
                        <a href=\"\${e.showUrl}\" class=\"p-2 text-gray-600 hover:bg-gray-100 rounded-lg\" title=\"View\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                            </svg>
                        </a>
                        <a href=\"\${e.editUrl}\" class=\"p-2 text-blue-600 hover:bg-blue-50 rounded-lg\" title=\"Edit\">
                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
        `).join('');
    }

    function doFilter() {
        const params = new URLSearchParams();
        if (searchInput.value) params.append('q', searchInput.value);
        if (typeFilter.value) params.append('type', typeFilter.value);
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
                    resultsCount.textContent = `\${data.count} events total`;
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
        typeFilter.value = '';
        statutFilter.value = '';
        sortFilter.value = 'dateDebut_DESC';
        doFilter();
    });
    searchInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(doFilter, 300);
    });
    typeFilter.addEventListener('change', doFilter);
    statutFilter.addEventListener('change', doFilter);
    sortFilter.addEventListener('change', doFilter);
});
</script>
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\evenement\\index.html.twig");
    }
}
