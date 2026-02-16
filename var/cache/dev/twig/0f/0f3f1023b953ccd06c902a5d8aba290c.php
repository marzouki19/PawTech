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

/* guest/index.html.twig */
class __TwigTemplate_6aea0f0e5a8cf360c8eafb2f80c1863b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/index.html.twig"));

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

        yield "Guests | PawTech Admin";
        
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
        <h1 class=\"text-2xl font-bold text-gray-800\">Guests / Speakers</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_new");
        yield "\" class=\"flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Guest
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
        yield "    <form method=\"get\" class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" name=\"q\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Name, email or organization...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Role</label>
                <select name=\"role\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All roles</option>
                    <option value=\"KEYNOTE_SPEAKER\" ";
        // line 35
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 35, $this->source); })()) == "KEYNOTE_SPEAKER")) ? ("selected") : (""));
        yield ">Keynote Speaker</option>
                    <option value=\"SPEAKER\" ";
        // line 36
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 36, $this->source); })()) == "SPEAKER")) ? ("selected") : (""));
        yield ">Speaker</option>
                    <option value=\"PANELIST\" ";
        // line 37
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 37, $this->source); })()) == "PANELIST")) ? ("selected") : (""));
        yield ">Panelist</option>
                    <option value=\"MODERATOR\" ";
        // line 38
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 38, $this->source); })()) == "MODERATOR")) ? ("selected") : (""));
        yield ">Moderator</option>
                    <option value=\"WORKSHOP_LEADER\" ";
        // line 39
        yield ((((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 39, $this->source); })()) == "WORKSHOP_LEADER")) ? ("selected") : (""));
        yield ">Workshop Leader</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select name=\"sort\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"nom_asc\" ";
        // line 45
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 45, $this->source); })()) == "nom_asc")) ? ("selected") : (""));
        yield ">Name (A-Z)</option>
                    <option value=\"nom_desc\" ";
        // line 46
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 46, $this->source); })()) == "nom_desc")) ? ("selected") : (""));
        yield ">Name (Z-A)</option>
                    <option value=\"role_asc\" ";
        // line 47
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 47, $this->source); })()) == "role_asc")) ? ("selected") : (""));
        yield ">Role (A-Z)</option>
                    <option value=\"organisation_asc\" ";
        // line 48
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 48, $this->source); })()) == "organisation_asc")) ? ("selected") : (""));
        yield ">Organization (A-Z)</option>
                    <option value=\"evenement_asc\" ";
        // line 49
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 49, $this->source); })()) == "evenement_asc")) ? ("selected") : (""));
        yield ">Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover\">
                    Filter
                </button>
                <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_index");
        yield "\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </a>
            </div>
        </div>
    </form>

    ";
        // line 64
        yield "    <div class=\"text-sm text-gray-600\">
        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["guests"]) || array_key_exists("guests", $context) ? $context["guests"] : (function () { throw new RuntimeError('Variable "guests" does not exist.', 65, $this->source); })())), "html", null, true);
        yield " guest(s) found
    </div>

    ";
        // line 69
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Name</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Organization</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Role</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Event</th>
                    <th class=\"px-4 py-3 text-right text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-gray-100\">
                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["guests"]) || array_key_exists("guests", $context) ? $context["guests"] : (function () { throw new RuntimeError('Variable "guests" does not exist.', 82, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
            // line 83
            yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3 font-medium text-gray-900\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "fullName", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "email", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 86
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "organisation", [], "any", true, true, false, 86) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "organisation", [], "any", false, false, false, 86)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "organisation", [], "any", false, false, false, 86), "html", null, true)) : ("-"));
            yield "</td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 88
            $context["roleColors"] = ["KEYNOTE_SPEAKER" => "bg-purple-100 text-purple-800", "SPEAKER" => "bg-blue-100 text-blue-800", "PANELIST" => "bg-indigo-100 text-indigo-800", "MODERATOR" => "bg-green-100 text-green-800", "WORKSHOP_LEADER" => "bg-orange-100 text-orange-800"];
            // line 95
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "role", [], "any", false, false, false, 95), [], "array", true, true, false, 95) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 95, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "role", [], "any", false, false, false, 95), [], "array", false, false, false, 95)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 95, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "role", [], "any", false, false, false, 95), [], "array", false, false, false, 95), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "role", [], "any", false, false, false, 96), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "evenement", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"text-paw-orange hover:underline\">
                                ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "evenement", [], "any", false, false, false, 101), "titre", [], "any", false, false, false, 101), "html", null, true);
            yield "
                            </a>
                        </td>
                        <td class=\"px-4 py-3 text-right\">
                            <div class=\"flex justify-end gap-1\">
                                <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "id", [], "any", false, false, false, 112)]), "html", null, true);
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
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "                    <tr>
                        <td colspan=\"6\" class=\"px-4 py-8 text-center text-gray-500\">
                            No guests found
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['guest'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
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
        return "guest/index.html.twig";
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
        return array (  318 => 127,  307 => 121,  305 => 120,  292 => 112,  283 => 106,  275 => 101,  271 => 100,  264 => 96,  259 => 95,  257 => 88,  252 => 86,  248 => 85,  244 => 84,  241 => 83,  236 => 82,  221 => 69,  215 => 65,  212 => 64,  202 => 56,  192 => 49,  188 => 48,  184 => 47,  180 => 46,  176 => 45,  167 => 39,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  141 => 28,  135 => 24,  132 => 22,  123 => 19,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Guests | PawTech Admin{% endblock %}

{% block main %}
<div class=\"space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <h1 class=\"text-2xl font-bold text-gray-800\">Guests / Speakers</h1>
        <a href=\"{{ path('app_guest_new') }}\" class=\"flex items-center gap-2 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            New Guest
        </a>
    </div>

    {% for message in app.flashes('success') %}
        <div class=\"bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg\">
            {{ message }}
        </div>
    {% endfor %}

    {# Search and Filter #}
    <form method=\"get\" class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" name=\"q\" value=\"{{ q }}\" placeholder=\"Name, email or organization...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Role</label>
                <select name=\"role\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All roles</option>
                    <option value=\"KEYNOTE_SPEAKER\" {{ role == 'KEYNOTE_SPEAKER' ? 'selected' }}>Keynote Speaker</option>
                    <option value=\"SPEAKER\" {{ role == 'SPEAKER' ? 'selected' }}>Speaker</option>
                    <option value=\"PANELIST\" {{ role == 'PANELIST' ? 'selected' }}>Panelist</option>
                    <option value=\"MODERATOR\" {{ role == 'MODERATOR' ? 'selected' }}>Moderator</option>
                    <option value=\"WORKSHOP_LEADER\" {{ role == 'WORKSHOP_LEADER' ? 'selected' }}>Workshop Leader</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select name=\"sort\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"nom_asc\" {{ sort == 'nom_asc' ? 'selected' }}>Name (A-Z)</option>
                    <option value=\"nom_desc\" {{ sort == 'nom_desc' ? 'selected' }}>Name (Z-A)</option>
                    <option value=\"role_asc\" {{ sort == 'role_asc' ? 'selected' }}>Role (A-Z)</option>
                    <option value=\"organisation_asc\" {{ sort == 'organisation_asc' ? 'selected' }}>Organization (A-Z)</option>
                    <option value=\"evenement_asc\" {{ sort == 'evenement_asc' ? 'selected' }}>Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover\">
                    Filter
                </button>
                <a href=\"{{ path('app_guest_index') }}\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </a>
            </div>
        </div>
    </form>

    {# Results Count #}
    <div class=\"text-sm text-gray-600\">
        {{ guests|length }} guest(s) found
    </div>

    {# Table #}
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <table class=\"w-full\">
            <thead>
                <tr class=\"bg-gray-50 border-b border-gray-200\">
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Name</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Organization</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Role</th>
                    <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Event</th>
                    <th class=\"px-4 py-3 text-right text-sm font-semibold text-gray-700\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"divide-y divide-gray-100\">
                {% for guest in guests %}
                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3 font-medium text-gray-900\">{{ guest.fullName }}</td>
                        <td class=\"px-4 py-3 text-gray-600\">{{ guest.email }}</td>
                        <td class=\"px-4 py-3 text-gray-600\">{{ guest.organisation ?? '-' }}</td>
                        <td class=\"px-4 py-3\">
                            {% set roleColors = {
                                'KEYNOTE_SPEAKER': 'bg-purple-100 text-purple-800',
                                'SPEAKER': 'bg-blue-100 text-blue-800',
                                'PANELIST': 'bg-indigo-100 text-indigo-800',
                                'MODERATOR': 'bg-green-100 text-green-800',
                                'WORKSHOP_LEADER': 'bg-orange-100 text-orange-800'
                            } %}
                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ roleColors[guest.role] ?? 'bg-gray-100 text-gray-800' }}\">
                                {{ guest.role|replace({'_': ' '}) }}
                            </span>
                        </td>
                        <td class=\"px-4 py-3\">
                            <a href=\"{{ path('app_evenement_show', {'id': guest.evenement.id}) }}\" class=\"text-paw-orange hover:underline\">
                                {{ guest.evenement.titre }}
                            </a>
                        </td>
                        <td class=\"px-4 py-3 text-right\">
                            <div class=\"flex justify-end gap-1\">
                                <a href=\"{{ path('app_guest_show', {'id': guest.id}) }}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"{{ path('app_guest_edit', {'id': guest.id}) }}\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"Edit\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"px-4 py-8 text-center text-gray-500\">
                            No guests found
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "guest/index.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\guest\\index.html.twig");
    }
}
