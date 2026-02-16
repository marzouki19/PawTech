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
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <form method=\"GET\" action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"flex flex-wrap gap-4\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "get", ["q"], "method", false, false, false, 35), "html", null, true);
        yield "\" 
                       placeholder=\"Search by title, location, city...\" 
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <select name=\"type\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All types</option>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["VACCINATION", "ADOPTION", "SENSIBILISATION", "COLLECTE_DONS"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 42
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", ["type"], "method", false, false, false, 42) == $context["type"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["type"], ["_" => " "]), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </select>
            <select name=\"statut\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All statuses</option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["PLANIFIE", "EN_COURS", "TERMINE", "ANNULE"]);
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 48
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statut"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "query", [], "any", false, false, false, 48), "get", ["statut"], "method", false, false, false, 48) == $context["statut"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["statut"], ["_" => " "]), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </select>
            <select name=\"sort\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"dateDebut_DESC\" ";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "get", ["sort"], "method", false, false, false, 52) == "dateDebut_DESC")) ? ("selected") : (""));
        yield ">Date (newest)</option>
                <option value=\"dateDebut_ASC\" ";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", ["sort"], "method", false, false, false, 53) == "dateDebut_ASC")) ? ("selected") : (""));
        yield ">Date (oldest)</option>
                <option value=\"titre_ASC\" ";
        // line 54
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "query", [], "any", false, false, false, 54), "get", ["sort"], "method", false, false, false, 54) == "titre_ASC")) ? ("selected") : (""));
        yield ">Title A-Z</option>
                <option value=\"titre_DESC\" ";
        // line 55
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "query", [], "any", false, false, false, 55), "get", ["sort"], "method", false, false, false, 55) == "titre_DESC")) ? ("selected") : (""));
        yield ">Title Z-A</option>
            </select>
            <button type=\"submit\" class=\"px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700\">
                Filter
            </button>
            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50\">
                Reset
            </a>
        </form>
    </div>

    ";
        // line 67
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
            <tbody class=\"divide-y divide-gray-100\">
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 82, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 83
            yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <span class=\"font-mono text-gray-500\">#";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 85), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <span class=\"font-medium text-gray-900\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 88), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 91
            $context["typeColors"] = ["VACCINATION" => "bg-green-100 text-green-800", "ADOPTION" => "bg-blue-100 text-blue-800", "SENSIBILISATION" => "bg-purple-100 text-purple-800", "COLLECTE_DONS" => "bg-yellow-100 text-yellow-800"];
            // line 97
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 97), [], "array", true, true, false, 97) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 97), [], "array", false, false, false, 97)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 97, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 97), [], "array", false, false, false, 97), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 98), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"text-gray-900\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
            yield "</div>
                            <div class=\"text-xs text-gray-500\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 103), "H:i"), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "ville", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 107
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capaciteMax", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                                <span class=\"font-medium\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "capaciteMax", [], "any", false, false, false, 108), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 110
                yield "                                <span class=\"text-gray-400\">∞</span>
                            ";
            }
            // line 112
            yield "                        </td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 114
            $context["statutColors"] = ["PLANIFIE" => "bg-blue-100 text-blue-800", "EN_COURS" => "bg-green-100 text-green-800", "TERMINE" => "bg-gray-100 text-gray-800", "ANNULE" => "bg-red-100 text-red-800"];
            // line 120
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 120), [], "array", true, true, false, 120) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 120, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 120), [], "array", false, false, false, 120)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 120, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 120), [], "array", false, false, false, 120), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "statut", [], "any", false, false, false, 121), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <div class=\"flex items-center gap-1\">
                                <a href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" 
                                   class=\"p-2 text-gray-600 hover:bg-gray-100 rounded-lg\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 133)]), "html", null, true);
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
        // line 142
        if (!$context['_iterated']) {
            // line 143
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
        // line 149
        yield "            </tbody>
        </table>
    </div>
</div>
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
        return array (  370 => 149,  359 => 143,  357 => 142,  343 => 133,  333 => 126,  325 => 121,  320 => 120,  318 => 114,  314 => 112,  310 => 110,  304 => 108,  302 => 107,  297 => 105,  292 => 103,  288 => 102,  281 => 98,  276 => 97,  274 => 91,  268 => 88,  262 => 85,  258 => 83,  253 => 82,  236 => 67,  227 => 60,  219 => 55,  215 => 54,  211 => 53,  207 => 52,  203 => 50,  190 => 48,  186 => 47,  181 => 44,  168 => 42,  164 => 41,  155 => 35,  150 => 33,  147 => 32,  144 => 30,  135 => 27,  129 => 23,  124 => 22,  113 => 13,  108 => 11,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    {# Search & Filter #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <form method=\"GET\" action=\"{{ path('app_evenement_index') }}\" class=\"flex flex-wrap gap-4\">
            <div class=\"flex-1 min-w-[200px]\">
                <input type=\"text\" name=\"q\" value=\"{{ app.request.query.get('q') }}\" 
                       placeholder=\"Search by title, location, city...\" 
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <select name=\"type\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All types</option>
                {% for type in ['VACCINATION', 'ADOPTION', 'SENSIBILISATION', 'COLLECTE_DONS'] %}
                    <option value=\"{{ type }}\" {{ app.request.query.get('type') == type ? 'selected' : '' }}>{{ type|replace({'_': ' '}) }}</option>
                {% endfor %}
            </select>
            <select name=\"statut\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"\">All statuses</option>
                {% for statut in ['PLANIFIE', 'EN_COURS', 'TERMINE', 'ANNULE'] %}
                    <option value=\"{{ statut }}\" {{ app.request.query.get('statut') == statut ? 'selected' : '' }}>{{ statut|replace({'_': ' '}) }}</option>
                {% endfor %}
            </select>
            <select name=\"sort\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange outline-none\">
                <option value=\"dateDebut_DESC\" {{ app.request.query.get('sort') == 'dateDebut_DESC' ? 'selected' : '' }}>Date (newest)</option>
                <option value=\"dateDebut_ASC\" {{ app.request.query.get('sort') == 'dateDebut_ASC' ? 'selected' : '' }}>Date (oldest)</option>
                <option value=\"titre_ASC\" {{ app.request.query.get('sort') == 'titre_ASC' ? 'selected' : '' }}>Title A-Z</option>
                <option value=\"titre_DESC\" {{ app.request.query.get('sort') == 'titre_DESC' ? 'selected' : '' }}>Title Z-A</option>
            </select>
            <button type=\"submit\" class=\"px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700\">
                Filter
            </button>
            <a href=\"{{ path('app_evenement_index') }}\" class=\"px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-50\">
                Reset
            </a>
        </form>
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
            <tbody class=\"divide-y divide-gray-100\">
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
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\evenement\\index.html.twig");
    }
}
