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

/* suivi/index.html.twig */
class __TwigTemplate_c88084762fa81e3bed87120dc637dc16 extends Template
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
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/index.html.twig"));

        $this->parent = $this->load("layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"space-y-6\">
    <!-- Statistiques -->
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
        <div class=\"bg-blue-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-blue-600 mb-2\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "monthly_count", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 8, $this->source); })()), "monthly_count", [], "any", false, false, false, 8), 0)) : (0)), "html", null, true);
        yield "</div>
            <div class=\"text-sm text-blue-800\">Follow this month</div>
        </div>
        
        <div class=\"bg-green-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-green-600 mb-2\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completion_rate", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 13, $this->source); })()), "completion_rate", [], "any", false, false, false, 13), 0)) : (0)), "html", null, true);
        yield "%</div>
            <div class=\"text-sm text-green-800\">Follow-ups completed</div>
        </div>
        
        <div class=\"bg-yellow-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-yellow-600 mb-2\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "planned_count", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "planned_count", [], "any", false, false, false, 18), 0)) : (0)), "html", null, true);
        yield "</div>
            <div class=\"text-sm text-yellow-800\">Planned follow-ups</div>
        </div>
        
        <div class=\"bg-purple-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-purple-600 mb-2\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "upcoming_count", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "upcoming_count", [], "any", false, false, false, 23), 0)) : (0)), "html", null, true);
        yield "</div>
            <div class=\"text-sm text-purple-800\">Follow-ups to come</div>
        </div>
    </div>

    <!-- Toolbar -->
    <div class=\"flex flex-wrap items-center gap-4\">
        <!-- Champ de recherche (comme dans le workshop) -->
        <div class=\"relative flex-1 min-w-[200px]\">
            <input 
                type=\"text\" 
                id=\"search\" 
                class=\"form-control w-full pl-4 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                placeholder=\"Search by type or status \"
            >
        </div>
        
        <!-- Emergency Level Filter -->
        <select 
            id=\"emergencyFilter\" 
            class=\"px-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
        >
            <option value=\"\">All Emergency Levels</option>
            <option value=\"critical\">🔴 Critical</option>
            <option value=\"high\">🟠 High</option>
            <option value=\"medium\">🟡 Medium</option>
            <option value=\"low\">🟢 Low</option>
        </select>
        
        <!-- Bouton Filter (Tri par date) -->
        <button 
            type=\"button\" 
            id=\"sortByDateBtn\" 
            class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 font-medium\"
        >
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/>
            </svg>
            Sort by Date
        </button>
        
        <!-- Autres boutons -->
        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
            Return to Consultations
        </a>
        
        <!-- Utilisez directement l'URL absolue pour éviter l'erreur -->
        <a href=\"/suivi/new\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            Add New Follow-Up
        </a>
    </div>

    <!-- Zone d'affichage des messages -->
    <div id=\"flashMessages\"></div>

    <!-- Tableau -->
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full text-sm\" id=\"t\">
                <thead class=\"bg-white\">
                    <tr class=\"text-left text-gray-500\">
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ID</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">STATUS</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">EMERGENCY</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">TYPE</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">NEXT VISIT</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">CONSULTATION</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">RECOMMENDATION</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ACTIONS</th>
                    </tr>
                </thead>
                <!-- Corps du tableau principal -->
                <tbody id=\"all\" class=\"divide-y divide-gray-100\">
                    ";
        // line 99
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 99, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suivis"]) || array_key_exists("suivis", $context) ? $context["suivis"] : (function () { throw new RuntimeError('Variable "suivis" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["suivi"]) {
                // line 101
                yield "                        <tr id=\"suivi-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 101), "html", null, true);
                yield "\" class=\"text-gray-700 hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\"><span class=\"font-bold text-gray-900\">#";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 102), "html", null, true);
                yield "</span></td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                    ";
                // line 105
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "etat", [], "any", false, false, false, 105) == "Planifié")) {
                    yield "bg-yellow-100 text-yellow-800
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["suivi"], "etat", [], "any", false, false, false, 106) == "En cours")) {
                    yield "bg-blue-100 text-blue-800
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 107
$context["suivi"], "etat", [], "any", false, false, false, 107) == "Terminé")) {
                    yield "bg-green-100 text-green-800
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["suivi"], "etat", [], "any", false, false, false, 108) == "Annulé")) {
                    yield "bg-red-100 text-red-800
                                    ";
                } else {
                    // line 109
                    yield "bg-gray-100 text-gray-800";
                }
                yield "\">
                                    ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "etat", [], "any", false, false, false, 110), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                ";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "emergencyLevel", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border 
                                        ";
                    // line 116
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "emergencyLevel", [], "any", false, false, false, 116) == "critical")) {
                        yield "bg-red-100 text-red-800 border-red-300
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 117
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 117) == "high")) {
                        yield "bg-orange-100 text-orange-800 border-orange-300
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 118
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 118) == "medium")) {
                        yield "bg-yellow-100 text-yellow-800 border-yellow-300
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 119
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 119) == "low")) {
                        yield "bg-green-100 text-green-800 border-green-300
                                        ";
                    } else {
                        // line 120
                        yield "bg-gray-100 text-gray-800 border-gray-300";
                    }
                    yield "\">
                                        ";
                    // line 121
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "emergencyLevel", [], "any", false, false, false, 121) == "critical")) {
                        yield "🔴 Critical
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 122
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 122) == "high")) {
                        yield "🟠 High
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 123
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 123) == "medium")) {
                        yield "🟡 Medium
                                        ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 124
$context["suivi"], "emergencyLevel", [], "any", false, false, false, 124) == "low")) {
                        yield "🟢 Low
                                        ";
                    }
                    // line 126
                    yield "                                    </span>
                                ";
                } else {
                    // line 128
                    yield "                                    <span class=\"text-gray-400 text-xs\">Not analyzed</span>
                                ";
                }
                // line 130
                yield "                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "type", [], "any", false, false, false, 131), "html", null, true);
                yield "</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                ";
                // line 133
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "prochaineVisite", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield "                                    <span class=\"font-medium text-blue-600\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "prochaineVisite", [], "any", false, false, false, 134), "d/m/Y H:i"), "html", null, true);
                    yield "</span>
                                ";
                } else {
                    // line 136
                    yield "                                    <span class=\"text-gray-400\">Not scheduled</span>
                                ";
                }
                // line 138
                yield "                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                ";
                // line 140
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "consultation", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "                                    <div class=\"flex flex-col\">
                                        <a href=\"/suivi/consultation/";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "consultation", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
                    yield "\" class=\"font-medium text-blue-600 hover:text-blue-900 hover:underline\">
                                            Consultation #";
                    // line 143
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "consultation", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
                    yield "
                                        </a>
                                        ";
                    // line 145
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "consultation", [], "any", false, false, false, 145), "dog", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 146
                        yield "                                            <span class=\"text-sm text-gray-500\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "consultation", [], "any", false, false, false, 146), "dog", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 148
                    yield "                                    </div>
                                ";
                } else {
                    // line 150
                    yield "                                    <span class=\"text-gray-400\">N/A</span>
                                ";
                }
                // line 152
                yield "                            </td>
                            <td class=\"px-6 py-4\">
                                <div class=\"text-gray-900 max-w-xs truncate\" title=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "recommandation", [], "any", false, false, false, 154), "html", null, true);
                yield "\">
                                    ";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "recommandation", [], "any", false, false, false, 155), 0, 50), "html", null, true);
                yield "...
                                </div>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <div class=\"flex space-x-2\">
                                    <!-- URL absolue pour éviter l'erreur de route -->
                                    <a href=\"/suivi/";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 161), "html", null, true);
                yield "/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                    
                                    <button 
                                        type=\"button\" 
                                        class=\"text-red-600 hover:text-red-900 delete-suivi\" 
                                        data-id=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "id", [], "any", false, false, false, 166), "html", null, true);
                yield "\"
                                        data-type=\"";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suivi"], "type", [], "any", false, false, false, 167), "html", null, true);
                yield "\"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['suivi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "                    ";
        } else {
            // line 176
            yield "                    <tr id=\"noResultsRow\">
                        <td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">No follow-ups found.</td>
                    </tr>
                    ";
        }
        // line 180
        yield "                </tbody>
                
                <!-- Corps du tableau pour les résultats de recherche (vide au départ) -->
                <tbody id=\"searchtab\" class=\"divide-y divide-gray-100\"></tbody>
            </table>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 192
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\$(document).ready(function() {
    // Fonction pour afficher un message flash
    function showFlashMessage(message, type = 'success') {
        const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 
                        type === 'error' ? 'bg-red-50 border-red-200 text-red-800' : 
                        'bg-blue-50 border-blue-200 text-blue-800';
        
        const flashHtml = `
            <div class=\"\${bgColor} border px-4 py-3 rounded-lg mb-4 flex justify-between items-center\">
                <div>
                    <p class=\"font-medium\">\${message}</p>
                </div>
                <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\" onclick=\"this.parentElement.remove()\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>
            </div>
        `;
        
        \$('#flashMessages').html(flashHtml);
        
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            \$('#flashMessages').empty();
        }, 5000);
    }

    // Suppression d'un suivi
    \$(document).on('click', '.delete-suivi', function() {
        const suiviId = \$(this).data('id');
        const suiviType = \$(this).data('type');
        const row = \$(`#suivi-\${suiviId}`);
        
        // Récupérer le token CSRF du meta tag
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]')?.getAttribute('content') || '';
        
        if (!csrfToken) {
            showFlashMessage('CSRF token missing. Please refresh the page.', 'error');
            return;
        }

        // Désactiver le bouton pendant la suppression
        const deleteBtn = \$(this);
        deleteBtn.prop('disabled', true).text('Deleting...');

        \$.ajax({
            url: `/suivi/delete/\${suiviId}`,
            type: 'POST',
            headers: {
                'X-CSRF-Token': csrfToken
            },
            data: {
                _token: csrfToken
            },
            dataType: 'json',
            success: function(response) {
                console.log('Delete response:', response);
                
                if (response.success) {
                    // Supprimer la ligne du tableau
                    row.fadeOut(300, function() {
                        \$(this).remove();
                        
                        // Vérifier si le tableau est vide
                        const remainingRows = \$('#all tr').length;
                        if (remainingRows === 1) { // Seulement la ligne \"no results\"
                            \$('#noResultsRow').show();
                        }
                        
                        // Afficher le message de succès
                        showFlashMessage(response.message, 'success');
                    });
                } else {
                    showFlashMessage(response.message || 'Error deleting follow-up', 'error');
                    deleteBtn.prop('disabled', false).text('Delete');
                }
            },
            error: function(xhr, status, error) {
                console.error('Delete error:', xhr.responseText, status, error);
                showFlashMessage('Error deleting follow-up. Please try again.', 'error');
                deleteBtn.prop('disabled', false).text('Delete');
            }
        });
    });

    // Recherche simplifiée
    \$(\"#search\").keyup(function(e) {
        var value = \$(this).val().trim();
        
        if (value === '') {
            \$('#searchtab').empty().hide();
            \$('#all').show();
            return;
        }
        
        console.log('Searching for:', value);
        
        // Afficher \"Loading...\"
        \$('#searchtab').html(
            '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">Searching...</td></tr>'
        ).show();
        \$('#all').hide();
        
        // Test AJAX basique
        \$.ajax({
            url: \"/suivi/search-by-type\",
            type: 'GET',
            data: { searchValue: value },
            dataType: 'json',
            success: function(data) {
                console.log('Success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <span class=\"font-medium text-gray-900\">
                                            \${item.consultation_id ? 'Consultation #' + item.consultation_id : 'N/A'}
                                        </span>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                } else {
                    \$('#searchtab').html(
                        '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">No results found</td></tr>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.error('Status:', status);
                console.error('Response:', xhr.responseText);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-red-500\">' +
                    'Error: ' + error + '<br>' +
                    'Status: ' + status +
                    '</td></tr>'
                ).show();
            }
        });
    });
    
    // Tri simplifié
    \$(\"#sortByDateBtn\").click(function() {
        console.log('Sorting by date...');
        
        \$('#searchtab').html(
            '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">Sorting...</td></tr>'
        ).show();
        \$('#all').hide();
        
        \$.ajax({
            url: \"/suivi/sort-by-date\",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log('Sort success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <span class=\"font-medium text-gray-900\">
                                            \${item.consultation_id ? 'Consultation #' + item.consultation_id : 'N/A'}
                                        </span>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Sort AJAX Error:', error);
                console.error('Response:', xhr.responseText);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-red-500\">' +
                    'Sort Error: ' + error +
                    '</td></tr>'
                ).show();
            }
        });
    });

    // Emergency level filter
    \$('#emergencyFilter').change(function() {
        const level = \$(this).val();
        console.log('Filtering by emergency level:', level);
        
        \$('#searchtab').html(
            '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">Loading...</td></tr>'
        ).show();
        \$('#all').hide();
        
        \$.ajax({
            url: '/suivi/filter-by-emergency',
            type: 'GET',
            data: { level: level },
            dataType: 'json',
            success: function(data) {
                console.log('Emergency filter success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        // Emergency level
                        let emergencyHtml = '';
                        if (item.emergency_level) {
                            let emergencyClass = 'bg-gray-100 text-gray-800 border-gray-300';
                            let emergencyDisplay = item.emergency_level;
                            if (item.emergency_level === 'critical') {
                                emergencyClass = 'bg-red-100 text-red-800 border-red-300';
                                emergencyDisplay = '🔴 Critical';
                            } else if (item.emergency_level === 'high') {
                                emergencyClass = 'bg-orange-100 text-orange-800 border-orange-300';
                                emergencyDisplay = '🟠 High';
                            } else if (item.emergency_level === 'medium') {
                                emergencyClass = 'bg-yellow-100 text-yellow-800 border-yellow-300';
                                emergencyDisplay = '🟡 Medium';
                            } else if (item.emergency_level === 'low') {
                                emergencyClass = 'bg-green-100 text-green-800 border-green-300';
                                emergencyDisplay = '🟢 Low';
                            }
                            
                            emergencyHtml = `<span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border \${emergencyClass}\">\${emergencyDisplay}</span>`;
                        } else {
                            emergencyHtml = '<span class=\"text-gray-400 text-xs\">Not analyzed</span>';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    \${emergencyHtml}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <a href=\"/suivi/consultation/\" + (item.consultation_id || '') + \" class=\"font-medium text-blue-600 hover:text-blue-900 hover:underline\">
                                            Consultation #\${item.consultation_id || 'N/A'}
                                        </a>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                } else {
                    \$('#searchtab').html(
                        '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">No results found</td></tr>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Emergency filter AJAX Error:', error);
                \$('#searchtab').html(
                    '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-red-500\">Error: ' + error + '</td></tr>'
                ).show();
            }
        });
    });
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
        return "suivi/index.html.twig";
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
        return array (  427 => 192,  414 => 191,  394 => 180,  388 => 176,  385 => 175,  371 => 167,  367 => 166,  359 => 161,  350 => 155,  346 => 154,  342 => 152,  338 => 150,  334 => 148,  328 => 146,  326 => 145,  321 => 143,  317 => 142,  314 => 141,  312 => 140,  308 => 138,  304 => 136,  298 => 134,  296 => 133,  291 => 131,  288 => 130,  284 => 128,  280 => 126,  275 => 124,  271 => 123,  267 => 122,  263 => 121,  258 => 120,  253 => 119,  249 => 118,  245 => 117,  241 => 116,  238 => 115,  236 => 114,  229 => 110,  224 => 109,  219 => 108,  215 => 107,  211 => 106,  207 => 105,  201 => 102,  196 => 101,  191 => 100,  189 => 99,  152 => 65,  107 => 23,  99 => 18,  91 => 13,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"space-y-6\">
    <!-- Statistiques -->
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
        <div class=\"bg-blue-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-blue-600 mb-2\">{{ stats.monthly_count|default(0) }}</div>
            <div class=\"text-sm text-blue-800\">Follow this month</div>
        </div>
        
        <div class=\"bg-green-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-green-600 mb-2\">{{ stats.completion_rate|default(0) }}%</div>
            <div class=\"text-sm text-green-800\">Follow-ups completed</div>
        </div>
        
        <div class=\"bg-yellow-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-yellow-600 mb-2\">{{ stats.planned_count|default(0) }}</div>
            <div class=\"text-sm text-yellow-800\">Planned follow-ups</div>
        </div>
        
        <div class=\"bg-purple-50 rounded-lg p-6 shadow-sm\">
            <div class=\"text-3xl font-bold text-purple-600 mb-2\">{{ stats.upcoming_count|default(0) }}</div>
            <div class=\"text-sm text-purple-800\">Follow-ups to come</div>
        </div>
    </div>

    <!-- Toolbar -->
    <div class=\"flex flex-wrap items-center gap-4\">
        <!-- Champ de recherche (comme dans le workshop) -->
        <div class=\"relative flex-1 min-w-[200px]\">
            <input 
                type=\"text\" 
                id=\"search\" 
                class=\"form-control w-full pl-4 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
                placeholder=\"Search by type or status \"
            >
        </div>
        
        <!-- Emergency Level Filter -->
        <select 
            id=\"emergencyFilter\" 
            class=\"px-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
        >
            <option value=\"\">All Emergency Levels</option>
            <option value=\"critical\">🔴 Critical</option>
            <option value=\"high\">🟠 High</option>
            <option value=\"medium\">🟡 Medium</option>
            <option value=\"low\">🟢 Low</option>
        </select>
        
        <!-- Bouton Filter (Tri par date) -->
        <button 
            type=\"button\" 
            id=\"sortByDateBtn\" 
            class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 font-medium\"
        >
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/>
            </svg>
            Sort by Date
        </button>
        
        <!-- Autres boutons -->
        <a href=\"{{ path('app_consultation_index') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
            Return to Consultations
        </a>
        
        <!-- Utilisez directement l'URL absolue pour éviter l'erreur -->
        <a href=\"/suivi/new\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
            </svg>
            Add New Follow-Up
        </a>
    </div>

    <!-- Zone d'affichage des messages -->
    <div id=\"flashMessages\"></div>

    <!-- Tableau -->
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full text-sm\" id=\"t\">
                <thead class=\"bg-white\">
                    <tr class=\"text-left text-gray-500\">
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ID</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">STATUS</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">EMERGENCY</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">TYPE</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">NEXT VISIT</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">CONSULTATION</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">RECOMMENDATION</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ACTIONS</th>
                    </tr>
                </thead>
                <!-- Corps du tableau principal -->
                <tbody id=\"all\" class=\"divide-y divide-gray-100\">
                    {% if suivis is not empty %}
                        {% for suivi in suivis %}
                        <tr id=\"suivi-{{ suivi.id }}\" class=\"text-gray-700 hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\"><span class=\"font-bold text-gray-900\">#{{ suivi.id }}</span></td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                    {% if suivi.etat == 'Planifié' %}bg-yellow-100 text-yellow-800
                                    {% elseif suivi.etat == 'En cours' %}bg-blue-100 text-blue-800
                                    {% elseif suivi.etat == 'Terminé' %}bg-green-100 text-green-800
                                    {% elseif suivi.etat == 'Annulé' %}bg-red-100 text-red-800
                                    {% else %}bg-gray-100 text-gray-800{% endif %}\">
                                    {{ suivi.etat }}
                                </span>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                {% if suivi.emergencyLevel %}
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border 
                                        {% if suivi.emergencyLevel == 'critical' %}bg-red-100 text-red-800 border-red-300
                                        {% elseif suivi.emergencyLevel == 'high' %}bg-orange-100 text-orange-800 border-orange-300
                                        {% elseif suivi.emergencyLevel == 'medium' %}bg-yellow-100 text-yellow-800 border-yellow-300
                                        {% elseif suivi.emergencyLevel == 'low' %}bg-green-100 text-green-800 border-green-300
                                        {% else %}bg-gray-100 text-gray-800 border-gray-300{% endif %}\">
                                        {% if suivi.emergencyLevel == 'critical' %}🔴 Critical
                                        {% elseif suivi.emergencyLevel == 'high' %}🟠 High
                                        {% elseif suivi.emergencyLevel == 'medium' %}🟡 Medium
                                        {% elseif suivi.emergencyLevel == 'low' %}🟢 Low
                                        {% endif %}
                                    </span>
                                {% else %}
                                    <span class=\"text-gray-400 text-xs\">Not analyzed</span>
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">{{ suivi.type }}</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                {% if suivi.prochaineVisite %}
                                    <span class=\"font-medium text-blue-600\">{{ suivi.prochaineVisite|date('d/m/Y H:i') }}</span>
                                {% else %}
                                    <span class=\"text-gray-400\">Not scheduled</span>
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                {% if suivi.consultation %}
                                    <div class=\"flex flex-col\">
                                        <a href=\"/suivi/consultation/{{ suivi.consultation.id }}\" class=\"font-medium text-blue-600 hover:text-blue-900 hover:underline\">
                                            Consultation #{{ suivi.consultation.id }}
                                        </a>
                                        {% if suivi.consultation.dog %}
                                            <span class=\"text-sm text-gray-500\">{{ suivi.consultation.dog.name }}</span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <span class=\"text-gray-400\">N/A</span>
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4\">
                                <div class=\"text-gray-900 max-w-xs truncate\" title=\"{{ suivi.recommandation }}\">
                                    {{ suivi.recommandation|slice(0, 50) }}...
                                </div>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <div class=\"flex space-x-2\">
                                    <!-- URL absolue pour éviter l'erreur de route -->
                                    <a href=\"/suivi/{{ suivi.id }}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                    
                                    <button 
                                        type=\"button\" 
                                        class=\"text-red-600 hover:text-red-900 delete-suivi\" 
                                        data-id=\"{{ suivi.id }}\"
                                        data-type=\"{{ suivi.type }}\"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                    {% else %}
                    <tr id=\"noResultsRow\">
                        <td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">No follow-ups found.</td>
                    </tr>
                    {% endif %}
                </tbody>
                
                <!-- Corps du tableau pour les résultats de recherche (vide au départ) -->
                <tbody id=\"searchtab\" class=\"divide-y divide-gray-100\"></tbody>
            </table>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\$(document).ready(function() {
    // Fonction pour afficher un message flash
    function showFlashMessage(message, type = 'success') {
        const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 
                        type === 'error' ? 'bg-red-50 border-red-200 text-red-800' : 
                        'bg-blue-50 border-blue-200 text-blue-800';
        
        const flashHtml = `
            <div class=\"\${bgColor} border px-4 py-3 rounded-lg mb-4 flex justify-between items-center\">
                <div>
                    <p class=\"font-medium\">\${message}</p>
                </div>
                <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\" onclick=\"this.parentElement.remove()\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>
            </div>
        `;
        
        \$('#flashMessages').html(flashHtml);
        
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            \$('#flashMessages').empty();
        }, 5000);
    }

    // Suppression d'un suivi
    \$(document).on('click', '.delete-suivi', function() {
        const suiviId = \$(this).data('id');
        const suiviType = \$(this).data('type');
        const row = \$(`#suivi-\${suiviId}`);
        
        // Récupérer le token CSRF du meta tag
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]')?.getAttribute('content') || '';
        
        if (!csrfToken) {
            showFlashMessage('CSRF token missing. Please refresh the page.', 'error');
            return;
        }

        // Désactiver le bouton pendant la suppression
        const deleteBtn = \$(this);
        deleteBtn.prop('disabled', true).text('Deleting...');

        \$.ajax({
            url: `/suivi/delete/\${suiviId}`,
            type: 'POST',
            headers: {
                'X-CSRF-Token': csrfToken
            },
            data: {
                _token: csrfToken
            },
            dataType: 'json',
            success: function(response) {
                console.log('Delete response:', response);
                
                if (response.success) {
                    // Supprimer la ligne du tableau
                    row.fadeOut(300, function() {
                        \$(this).remove();
                        
                        // Vérifier si le tableau est vide
                        const remainingRows = \$('#all tr').length;
                        if (remainingRows === 1) { // Seulement la ligne \"no results\"
                            \$('#noResultsRow').show();
                        }
                        
                        // Afficher le message de succès
                        showFlashMessage(response.message, 'success');
                    });
                } else {
                    showFlashMessage(response.message || 'Error deleting follow-up', 'error');
                    deleteBtn.prop('disabled', false).text('Delete');
                }
            },
            error: function(xhr, status, error) {
                console.error('Delete error:', xhr.responseText, status, error);
                showFlashMessage('Error deleting follow-up. Please try again.', 'error');
                deleteBtn.prop('disabled', false).text('Delete');
            }
        });
    });

    // Recherche simplifiée
    \$(\"#search\").keyup(function(e) {
        var value = \$(this).val().trim();
        
        if (value === '') {
            \$('#searchtab').empty().hide();
            \$('#all').show();
            return;
        }
        
        console.log('Searching for:', value);
        
        // Afficher \"Loading...\"
        \$('#searchtab').html(
            '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">Searching...</td></tr>'
        ).show();
        \$('#all').hide();
        
        // Test AJAX basique
        \$.ajax({
            url: \"/suivi/search-by-type\",
            type: 'GET',
            data: { searchValue: value },
            dataType: 'json',
            success: function(data) {
                console.log('Success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <span class=\"font-medium text-gray-900\">
                                            \${item.consultation_id ? 'Consultation #' + item.consultation_id : 'N/A'}
                                        </span>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                } else {
                    \$('#searchtab').html(
                        '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">No results found</td></tr>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                console.error('Status:', status);
                console.error('Response:', xhr.responseText);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-red-500\">' +
                    'Error: ' + error + '<br>' +
                    'Status: ' + status +
                    '</td></tr>'
                ).show();
            }
        });
    });
    
    // Tri simplifié
    \$(\"#sortByDateBtn\").click(function() {
        console.log('Sorting by date...');
        
        \$('#searchtab').html(
            '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-gray-500\">Sorting...</td></tr>'
        ).show();
        \$('#all').hide();
        
        \$.ajax({
            url: \"/suivi/sort-by-date\",
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log('Sort success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <span class=\"font-medium text-gray-900\">
                                            \${item.consultation_id ? 'Consultation #' + item.consultation_id : 'N/A'}
                                        </span>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Sort AJAX Error:', error);
                console.error('Response:', xhr.responseText);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"7\" class=\"px-6 py-8 text-center text-red-500\">' +
                    'Sort Error: ' + error +
                    '</td></tr>'
                ).show();
            }
        });
    });

    // Emergency level filter
    \$('#emergencyFilter').change(function() {
        const level = \$(this).val();
        console.log('Filtering by emergency level:', level);
        
        \$('#searchtab').html(
            '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">Loading...</td></tr>'
        ).show();
        \$('#all').hide();
        
        \$.ajax({
            url: '/suivi/filter-by-emergency',
            type: 'GET',
            data: { level: level },
            dataType: 'json',
            success: function(data) {
                console.log('Emergency filter success! Data:', data);
                
                if (data && data.length > 0) {
                    let html = '';
                    \$.each(data, function(i, item) {
                        // Classes CSS pour l'état
                        let etatClass = 'bg-gray-100 text-gray-800';
                        if (item.etat === 'Planifié') {
                            etatClass = 'bg-yellow-100 text-yellow-800';
                        } else if (item.etat === 'En cours') {
                            etatClass = 'bg-blue-100 text-blue-800';
                        } else if (item.etat === 'Terminé') {
                            etatClass = 'bg-green-100 text-green-800';
                        } else if (item.etat === 'Annulé') {
                            etatClass = 'bg-red-100 text-red-800';
                        }
                        
                        // Emergency level
                        let emergencyHtml = '';
                        if (item.emergency_level) {
                            let emergencyClass = 'bg-gray-100 text-gray-800 border-gray-300';
                            let emergencyDisplay = item.emergency_level;
                            if (item.emergency_level === 'critical') {
                                emergencyClass = 'bg-red-100 text-red-800 border-red-300';
                                emergencyDisplay = '🔴 Critical';
                            } else if (item.emergency_level === 'high') {
                                emergencyClass = 'bg-orange-100 text-orange-800 border-orange-300';
                                emergencyDisplay = '🟠 High';
                            } else if (item.emergency_level === 'medium') {
                                emergencyClass = 'bg-yellow-100 text-yellow-800 border-yellow-300';
                                emergencyDisplay = '🟡 Medium';
                            } else if (item.emergency_level === 'low') {
                                emergencyClass = 'bg-green-100 text-green-800 border-green-300';
                                emergencyDisplay = '🟢 Low';
                            }
                            
                            emergencyHtml = `<span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border \${emergencyClass}\">\${emergencyDisplay}</span>`;
                        } else {
                            emergencyHtml = '<span class=\"text-gray-400 text-xs\">Not analyzed</span>';
                        }
                        
                        html += `
                            <tr id=\"suivi-\${item.id}\" class=\"text-gray-700 hover:bg-gray-50\">
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"font-bold text-gray-900\">#\${item.id}</span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium \${etatClass}\">
                                        \${item.etat || 'N/A'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    \${emergencyHtml}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-gray-900\">\${item.type || 'N/A'}</td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"\${item.prochaine_visite ? 'font-medium text-blue-600' : 'text-gray-400'}\">
                                        \${item.prochaine_visite || 'Not scheduled'}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex flex-col\">
                                        <a href=\"/suivi/consultation/\" + (item.consultation_id || '') + \" class=\"font-medium text-blue-600 hover:text-blue-900 hover:underline\">
                                            Consultation #\${item.consultation_id || 'N/A'}
                                        </a>
                                        <span class=\"text-sm text-gray-500\">\${item.dog_nom || ''}</span>
                                    </div>
                                </td>
                                <td class=\"px-6 py-4\">
                                    <div class=\"text-gray-900 max-w-xs truncate\" title=\"\${item.recommandation || ''}\">
                                        \${item.recommandation ? (item.recommandation.length > 50 ? item.recommandation.substring(0, 50) + '...' : item.recommandation) : 'N/A'}
                                    </div>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <div class=\"flex space-x-2\">
                                        <a href=\"/suivi/\${item.id}/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                        <button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-suivi\" data-id=\"\${item.id}\" data-type=\"\${item.type || 'N/A'}\">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    \$('#searchtab').html(html).show();
                } else {
                    \$('#searchtab').html(
                        '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-gray-500\">No results found</td></tr>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Emergency filter AJAX Error:', error);
                \$('#searchtab').html(
                    '<tr><td colspan=\"8\" class=\"px-6 py-8 text-center text-red-500\">Error: ' + error + '</td></tr>'
                ).show();
            }
        });
    });
});
</script>
{% endblock %}
", "suivi/index.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\suivi\\index.html.twig");
    }
}
