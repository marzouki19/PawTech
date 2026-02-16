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
        yield "    <form method=\"get\" class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" name=\"q\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Name, email or event...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-40\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Status</label>
                <select name=\"statut\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All</option>
                    <option value=\"EN_ATTENTE\" ";
        // line 35
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 35, $this->source); })()) == "EN_ATTENTE")) ? ("selected") : (""));
        yield ">Pending</option>
                    <option value=\"CONFIRMEE\" ";
        // line 36
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 36, $this->source); })()) == "CONFIRMEE")) ? ("selected") : (""));
        yield ">Confirmed</option>
                    <option value=\"ANNULEE\" ";
        // line 37
        yield ((((isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 37, $this->source); })()) == "ANNULEE")) ? ("selected") : (""));
        yield ">Cancelled</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select name=\"sort\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"dateParticipation_desc\" ";
        // line 43
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 43, $this->source); })()) == "dateParticipation_desc")) ? ("selected") : (""));
        yield ">Date (newest)</option>
                    <option value=\"dateParticipation_asc\" ";
        // line 44
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 44, $this->source); })()) == "dateParticipation_asc")) ? ("selected") : (""));
        yield ">Date (oldest)</option>
                    <option value=\"user_asc\" ";
        // line 45
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 45, $this->source); })()) == "user_asc")) ? ("selected") : (""));
        yield ">Participant (A-Z)</option>
                    <option value=\"user_desc\" ";
        // line 46
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 46, $this->source); })()) == "user_desc")) ? ("selected") : (""));
        yield ">Participant (Z-A)</option>
                    <option value=\"evenement_asc\" ";
        // line 47
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 47, $this->source); })()) == "evenement_asc")) ? ("selected") : (""));
        yield ">Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover\">
                    Filter
                </button>
                <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        yield "\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </a>
            </div>
        </div>
    </form>

    ";
        // line 62
        yield "    <div class=\"text-sm text-gray-600\">
        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 63, $this->source); })())), "html", null, true);
        yield " participation(s) found
    </div>

    ";
        // line 67
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
            <tbody class=\"divide-y divide-gray-100\">
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 80
            yield "                    <tr class=\"hover:bg-gray-50\">
                        <td class=\"px-4 py-3\">
                            <div class=\"font-medium text-gray-900\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "user", [], "any", false, false, false, 82), "fullName", [], "any", false, false, false, 82), "html", null, true);
            yield "</div>
                            <div class=\"text-sm text-gray-500\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "user", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3\">
                            <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"text-paw-orange hover:underline font-medium\">
                                ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 87), "titre", [], "any", false, false, false, 87), "html", null, true);
            yield "
                            </a>
                            <div class=\"text-sm text-gray-500\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "evenement", [], "any", false, false, false, 89), "ville", [], "any", false, false, false, 89), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"px-4 py-3 text-gray-600\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "dateParticipation", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td class=\"px-4 py-3\">
                            ";
            // line 93
            $context["statutColors"] = ["EN_ATTENTE" => "bg-yellow-100 text-yellow-800", "CONFIRMEE" => "bg-green-100 text-green-800", "ANNULEE" => "bg-red-100 text-red-800"];
            // line 98
            yield "                            <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 98), [], "array", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 98, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 98), [], "array", false, false, false, 98)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 98, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 98), [], "array", false, false, false, 98), "html", null, true)) : ("bg-gray-100 text-gray-800"));
            yield "\">
                                ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 99), ["_" => " "]), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"px-4 py-3 text-right\">
                            <div class=\"flex justify-end gap-1\">
                                ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "statut", [], "any", false, false, false, 104) == "EN_ATTENTE")) {
                // line 105
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("confirm" . CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 106))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"p-1.5 text-green-600 hover:bg-green-50 rounded\" title=\"Confirm\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" method=\"post\" class=\"inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"p-1.5 text-red-600 hover:bg-red-50 rounded\" title=\"Cancel\">
                                            <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                                            </svg>
                                        </button>
                                    </form>
                                ";
            }
            // line 122
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" class=\"p-1.5 text-gray-600 hover:bg-gray-100 rounded\" title=\"View\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
                                    </svg>
                                </a>
                                <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 128)]), "html", null, true);
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
        // line 136
        if (!$context['_iterated']) {
            // line 137
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
        // line 143
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
        return array (  348 => 143,  337 => 137,  335 => 136,  322 => 128,  312 => 122,  301 => 114,  297 => 113,  287 => 106,  282 => 105,  280 => 104,  272 => 99,  267 => 98,  265 => 93,  260 => 91,  255 => 89,  250 => 87,  246 => 86,  240 => 83,  236 => 82,  232 => 80,  227 => 79,  213 => 67,  207 => 63,  204 => 62,  194 => 54,  184 => 47,  180 => 46,  176 => 45,  172 => 44,  168 => 43,  159 => 37,  155 => 36,  151 => 35,  141 => 28,  135 => 24,  132 => 22,  123 => 19,  120 => 18,  116 => 17,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    {# Search and Filter #}
    <form method=\"get\" class=\"bg-white rounded-xl border border-gray-200 p-4\">
        <div class=\"flex flex-wrap gap-4 items-end\">
            <div class=\"flex-1 min-w-[200px]\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Search</label>
                <input type=\"text\" name=\"q\" value=\"{{ q }}\" placeholder=\"Name, email or event...\"
                       class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            </div>
            <div class=\"w-40\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Status</label>
                <select name=\"statut\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"\">All</option>
                    <option value=\"EN_ATTENTE\" {{ statut == 'EN_ATTENTE' ? 'selected' }}>Pending</option>
                    <option value=\"CONFIRMEE\" {{ statut == 'CONFIRMEE' ? 'selected' }}>Confirmed</option>
                    <option value=\"ANNULEE\" {{ statut == 'ANNULEE' ? 'selected' }}>Cancelled</option>
                </select>
            </div>
            <div class=\"w-48\">
                <label class=\"block text-sm font-medium text-gray-700 mb-1\">Sort by</label>
                <select name=\"sort\" class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
                    <option value=\"dateParticipation_desc\" {{ sort == 'dateParticipation_desc' ? 'selected' }}>Date (newest)</option>
                    <option value=\"dateParticipation_asc\" {{ sort == 'dateParticipation_asc' ? 'selected' }}>Date (oldest)</option>
                    <option value=\"user_asc\" {{ sort == 'user_asc' ? 'selected' }}>Participant (A-Z)</option>
                    <option value=\"user_desc\" {{ sort == 'user_desc' ? 'selected' }}>Participant (Z-A)</option>
                    <option value=\"evenement_asc\" {{ sort == 'evenement_asc' ? 'selected' }}>Event (A-Z)</option>
                </select>
            </div>
            <div class=\"flex gap-2\">
                <button type=\"submit\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover\">
                    Filter
                </button>
                <a href=\"{{ path('app_participation_index') }}\" class=\"px-4 py-2 border border-gray-200 rounded-lg text-gray-600 hover:bg-gray-50\">
                    Reset
                </a>
            </div>
        </div>
    </form>

    {# Results Count #}
    <div class=\"text-sm text-gray-600\">
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
            <tbody class=\"divide-y divide-gray-100\">
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
{% endblock %}
", "participation/index.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\participation\\index.html.twig");
    }
}
