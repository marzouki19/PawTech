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

/* evenement/show.html.twig */
class __TwigTemplate_5d8d4de1dfb0c6679cccec19afc43245 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " | PawTech Admin";
        
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
        yield "<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"flex gap-2\">
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                </svg>
                Edit
            </a>
        </div>
    </div>

    ";
        // line 27
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <div>
                ";
        // line 30
        $context["typeColors"] = ["ADOPTION" => "bg-blue-100 text-blue-800", "VACCINATION" => "bg-green-100 text-green-800", "SENSIBILISATION" => "bg-purple-100 text-purple-800", "COLLECTE" => "bg-yellow-100 text-yellow-800", "FORMATION" => "bg-indigo-100 text-indigo-800"];
        // line 37
        yield "                <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), [], "array", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), [], "array", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "html", null, true);
        yield "
                </span>
            </div>
            <div>
                ";
        // line 42
        $context["statutColors"] = ["BROUILLON" => "bg-gray-100 text-gray-800", "PUBLIE" => "bg-green-100 text-green-800", "ANNULE" => "bg-red-100 text-red-800", "TERMINE" => "bg-blue-100 text-blue-800"];
        // line 48
        yield "                <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), [], "array", true, true, false, 48) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), [], "array", false, false, false, 48)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "statut", [], "any", false, false, false, 48), [], "array", false, false, false, 48), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                    ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "statut", [], "any", false, false, false, 49), "html", null, true);
        yield "
                </span>
            </div>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Start Date</p>
                <p class=\"font-medium text-gray-900\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "dateDebut", [], "any", false, false, false, 57), "d/m/Y H:i"), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">End Date</p>
                <p class=\"font-medium text-gray-900\">";
        // line 61
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 61, $this->source); })()), "dateFin", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 61, $this->source); })()), "dateFin", [], "any", false, false, false, 61), "d/m/Y H:i"), "html", null, true)) : ("-"));
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "lieu", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">City</p>
                <p class=\"font-medium text-gray-900\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Max Capacity</p>
                <p class=\"font-medium text-gray-900\">";
        // line 73
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "capaciteMax", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "capaciteMax", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "capaciteMax", [], "any", false, false, false, 73), "html", null, true)) : ("Unlimited"));
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Registered Participants</p>
                <p class=\"font-medium text-gray-900\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 77, $this->source); })()), "participations", [], "any", false, false, false, 77)), "html", null, true);
        yield "</p>
            </div>
        </div>

        ";
        // line 81
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "        <div class=\"mt-6 pt-6 border-t border-gray-200\">
            <p class=\"text-sm text-gray-500 mb-1\">Description</p>
            <p class=\"text-gray-700\">";
            // line 84
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 87
        yield "    </div>

    ";
        // line 90
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Participants (";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 91, $this->source); })()), "participations", [], "any", false, false, false, 91)), "html", null, true);
        yield ")</h2>
        ";
        // line 92
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 92, $this->source); })()), "participations", [], "any", false, false, false, 92)) > 0)) {
            // line 93
            yield "            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Registration Date</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 103, $this->source); })()), "participations", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 104
                yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 105), "fullName", [], "any", false, false, false, 105), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 106), "email", [], "any", false, false, false, 106), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dateParticipation", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3\">
                                ";
                // line 109
                $context["statutColors"] = ["EN_ATTENTE" => "bg-yellow-100 text-yellow-800", "CONFIRMEE" => "bg-green-100 text-green-800", "ANNULEE" => "bg-red-100 text-red-800"];
                // line 114
                yield "                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 114), [], "array", true, true, false, 114) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 114, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 114), [], "array", false, false, false, 114)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 114, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 114), [], "array", false, false, false, 114), "html", null, true)) : ("bg-gray-100 text-gray-800"));
                yield "\">
                                    ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 115), ["_" => " "]), "html", null, true);
                yield "
                                </span>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 123
            yield "            <p class=\"text-gray-500 text-center py-4\">No participants registered for this event</p>
        ";
        }
        // line 125
        yield "    </div>

    ";
        // line 128
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Guests / Speakers (";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 129, $this->source); })()), "guests", [], "any", false, false, false, 129)), "html", null, true);
        yield ")</h2>
        ";
        // line 130
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 130, $this->source); })()), "guests", [], "any", false, false, false, 130)) > 0)) {
            // line 131
            yield "            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Name</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Organization</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Role</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 141, $this->source); })()), "guests", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 142
                yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "fullName", [], "any", false, false, false, 143), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "email", [], "any", false, false, false, 144), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 145
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", true, true, false, 145) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", false, false, false, 145)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", false, false, false, 145), "html", null, true)) : ("-"));
                yield "</td>
                            <td class=\"px-4 py-3\">
                                ";
                // line 147
                $context["roleColors"] = ["KEYNOTE_SPEAKER" => "bg-purple-100 text-purple-800", "SPEAKER" => "bg-blue-100 text-blue-800", "PANELIST" => "bg-indigo-100 text-indigo-800", "MODERATOR" => "bg-green-100 text-green-800", "WORKSHOP_LEADER" => "bg-orange-100 text-orange-800"];
                // line 154
                yield "                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 154), [], "array", true, true, false, 154) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 154, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 154), [], "array", false, false, false, 154)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 154, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 154), [], "array", false, false, false, 154), "html", null, true)) : ("bg-gray-100 text-gray-800"));
                yield "\">
                                    ";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 155), ["_" => " "]), "html", null, true);
                yield "
                                </span>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 163
            yield "            <p class=\"text-gray-500 text-center py-4\">No guests for this event</p>
        ";
        }
        // line 165
        yield "    </div>

    ";
        // line 168
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h3 class=\"text-lg font-semibold text-gray-800 mb-4\">Danger Zone</h3>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete Permanently
        </button>
    </div>
</div>

";
        // line 180
        yield "<div id=\"delete-modal\" class=\"hidden fixed inset-0 z-50 overflow-y-auto\">
    <div class=\"flex items-center justify-center min-h-screen px-4\">
        <div class=\"fixed inset-0 bg-gray-900/60 backdrop-blur-sm\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\"></div>
        <div class=\"relative bg-white rounded-2xl shadow-xl max-w-md w-full p-6\">
            <div class=\"flex items-center gap-4 mb-4\">
                <div class=\"flex-shrink-0 w-12 h-12 rounded-full bg-red-100 flex items-center justify-center\">
                    <svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/>
                    </svg>
                </div>
                <div>
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Event</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete <strong>";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 195, $this->source); })()), "titre", [], "any", false, false, false, 195), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 201, $this->source); })()), "id", [], "any", false, false, false, 201))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Delete
                    </button>
                </form>
            </div>
        </div>
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
        return "evenement/show.html.twig";
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
        return array (  413 => 201,  409 => 200,  401 => 195,  384 => 180,  371 => 168,  367 => 165,  363 => 163,  358 => 160,  347 => 155,  342 => 154,  340 => 147,  335 => 145,  331 => 144,  327 => 143,  324 => 142,  320 => 141,  308 => 131,  306 => 130,  302 => 129,  299 => 128,  295 => 125,  291 => 123,  286 => 120,  275 => 115,  270 => 114,  268 => 109,  263 => 107,  259 => 106,  255 => 105,  252 => 104,  248 => 103,  236 => 93,  234 => 92,  230 => 91,  227 => 90,  223 => 87,  217 => 84,  213 => 82,  211 => 81,  204 => 77,  197 => 73,  190 => 69,  183 => 65,  176 => 61,  169 => 57,  158 => 49,  153 => 48,  151 => 42,  144 => 38,  139 => 37,  137 => 30,  132 => 27,  120 => 17,  114 => 14,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ evenement.titre }} | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_evenement_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">{{ evenement.titre }}</h1>
        </div>
        <div class=\"flex gap-2\">
            <a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z\"/>
                </svg>
                Edit
            </a>
        </div>
    </div>

    {# Event Details Card #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <div>
                {% set typeColors = {
                    'ADOPTION': 'bg-blue-100 text-blue-800',
                    'VACCINATION': 'bg-green-100 text-green-800',
                    'SENSIBILISATION': 'bg-purple-100 text-purple-800',
                    'COLLECTE': 'bg-yellow-100 text-yellow-800',
                    'FORMATION': 'bg-indigo-100 text-indigo-800'
                } %}
                <span class=\"px-3 py-1 rounded-full text-sm font-semibold {{ typeColors[evenement.type] ?? 'bg-gray-100 text-gray-800' }}\">
                    {{ evenement.type }}
                </span>
            </div>
            <div>
                {% set statutColors = {
                    'BROUILLON': 'bg-gray-100 text-gray-800',
                    'PUBLIE': 'bg-green-100 text-green-800',
                    'ANNULE': 'bg-red-100 text-red-800',
                    'TERMINE': 'bg-blue-100 text-blue-800'
                } %}
                <span class=\"px-3 py-1 rounded-full text-sm font-semibold {{ statutColors[evenement.statut] ?? 'bg-gray-100 text-gray-800' }}\">
                    {{ evenement.statut }}
                </span>
            </div>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Start Date</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.dateDebut|date('d/m/Y H:i') }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">End Date</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.dateFin ? evenement.dateFin|date('d/m/Y H:i') : '-' }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.lieu }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">City</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.ville }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Max Capacity</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.capaciteMax ?? 'Unlimited' }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Registered Participants</p>
                <p class=\"font-medium text-gray-900\">{{ evenement.participations|length }}</p>
            </div>
        </div>

        {% if evenement.description %}
        <div class=\"mt-6 pt-6 border-t border-gray-200\">
            <p class=\"text-sm text-gray-500 mb-1\">Description</p>
            <p class=\"text-gray-700\">{{ evenement.description|nl2br }}</p>
        </div>
        {% endif %}
    </div>

    {# Participants Section #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Participants ({{ evenement.participations|length }})</h2>
        {% if evenement.participations|length > 0 %}
            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Registration Date</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    {% for p in evenement.participations %}
                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">{{ p.user.fullName }}</td>
                            <td class=\"px-4 py-3 text-gray-600\">{{ p.user.email }}</td>
                            <td class=\"px-4 py-3 text-gray-600\">{{ p.dateParticipation|date('d/m/Y') }}</td>
                            <td class=\"px-4 py-3\">
                                {% set statutColors = {
                                    'EN_ATTENTE': 'bg-yellow-100 text-yellow-800',
                                    'CONFIRMEE': 'bg-green-100 text-green-800',
                                    'ANNULEE': 'bg-red-100 text-red-800'
                                } %}
                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ statutColors[p.statut] ?? 'bg-gray-100 text-gray-800' }}\">
                                    {{ p.statut|replace({'_': ' '}) }}
                                </span>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p class=\"text-gray-500 text-center py-4\">No participants registered for this event</p>
        {% endif %}
    </div>

    {# Guests Section #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Guests / Speakers ({{ evenement.guests|length }})</h2>
        {% if evenement.guests|length > 0 %}
            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Name</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Organization</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Role</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    {% for g in evenement.guests %}
                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">{{ g.fullName }}</td>
                            <td class=\"px-4 py-3 text-gray-600\">{{ g.email }}</td>
                            <td class=\"px-4 py-3 text-gray-600\">{{ g.organisation ?? '-' }}</td>
                            <td class=\"px-4 py-3\">
                                {% set roleColors = {
                                    'KEYNOTE_SPEAKER': 'bg-purple-100 text-purple-800',
                                    'SPEAKER': 'bg-blue-100 text-blue-800',
                                    'PANELIST': 'bg-indigo-100 text-indigo-800',
                                    'MODERATOR': 'bg-green-100 text-green-800',
                                    'WORKSHOP_LEADER': 'bg-orange-100 text-orange-800'
                                } %}
                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ roleColors[g.role] ?? 'bg-gray-100 text-gray-800' }}\">
                                    {{ g.role|replace({'_': ' '}) }}
                                </span>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p class=\"text-gray-500 text-center py-4\">No guests for this event</p>
        {% endif %}
    </div>

    {# Delete Button #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h3 class=\"text-lg font-semibold text-gray-800 mb-4\">Danger Zone</h3>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete Permanently
        </button>
    </div>
</div>

{# Delete Confirmation Modal #}
<div id=\"delete-modal\" class=\"hidden fixed inset-0 z-50 overflow-y-auto\">
    <div class=\"flex items-center justify-center min-h-screen px-4\">
        <div class=\"fixed inset-0 bg-gray-900/60 backdrop-blur-sm\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\"></div>
        <div class=\"relative bg-white rounded-2xl shadow-xl max-w-md w-full p-6\">
            <div class=\"flex items-center gap-4 mb-4\">
                <div class=\"flex-shrink-0 w-12 h-12 rounded-full bg-red-100 flex items-center justify-center\">
                    <svg class=\"w-6 h-6 text-red-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z\"/>
                    </svg>
                </div>
                <div>
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Event</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete <strong>{{ evenement.titre }}</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"{{ path('app_evenement_delete', {'id': evenement.id}) }}\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "evenement/show.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\evenement\\show.html.twig");
    }
}
