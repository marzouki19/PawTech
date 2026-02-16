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

/* participation/show.html.twig */
class __TwigTemplate_a216b4d258897be8bfed073def82615b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/show.html.twig"));

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

        yield "Participation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        yield "\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">Participation #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        </div>
        <div class=\"flex gap-2\">
            ";
        // line 17
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 17, $this->source); })()), "statut", [], "any", false, false, false, 17) == "EN_ATTENTE")) {
            // line 18
            yield "                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_confirm", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("confirm" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 font-medium\">
                        Confirm
                    </button>
                </form>
                <form action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Cancel
                    </button>
                </form>
            ";
        }
        // line 31
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                Edit
            </a>
        </div>
    </div>

    ";
        // line 38
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Participation Details</h2>
            ";
        // line 41
        $context["statutColors"] = ["EN_ATTENTE" => "bg-yellow-100 text-yellow-800", "CONFIRMEE" => "bg-green-100 text-green-800", "ANNULEE" => "bg-red-100 text-red-800"];
        // line 46
        yield "            <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46), [], "array", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46), [], "array", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 46, $this->source); })()), "statut", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), ["_" => " "]), "html", null, true);
        yield "
            </span>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Registration Date</p>
                <p class=\"font-medium text-gray-900\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 54, $this->source); })()), "dateParticipation", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">ID</p>
                <p class=\"font-medium text-gray-900\">#";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 64
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Participant</h2>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Full Name</p>
                <p class=\"font-medium text-gray-900\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "fullName", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Email</p>
                <p class=\"font-medium text-gray-900\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "email", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Phone</p>
                <p class=\"font-medium text-gray-900\">";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["participation"] ?? null), "user", [], "any", false, true, false, 77), "telephone", [], "any", true, true, false, 77) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "telephone", [], "any", false, false, false, 77)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "telephone", [], "any", false, false, false, 77), "html", null, true)) : ("-"));
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 83
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-4\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Event</h2>
            <a href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 86, $this->source); })()), "evenement", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86)]), "html", null, true);
        yield "\" class=\"text-paw-orange hover:underline text-sm\">
                View Event →
            </a>
        </div>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Title</p>
                <p class=\"font-medium text-gray-900\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 93, $this->source); })()), "evenement", [], "any", false, false, false, 93), "titre", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Type</p>
                ";
        // line 97
        $context["typeColors"] = ["ADOPTION" => "bg-blue-100 text-blue-800", "VACCINATION" => "bg-green-100 text-green-800", "SENSIBILISATION" => "bg-purple-100 text-purple-800", "COLLECTE" => "bg-yellow-100 text-yellow-800", "FORMATION" => "bg-indigo-100 text-indigo-800"];
        // line 104
        yield "                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 104, $this->source); })()), "evenement", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104), [], "array", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 104, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 104, $this->source); })()), "evenement", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104), [], "array", false, false, false, 104)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 104, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 104, $this->source); })()), "evenement", [], "any", false, false, false, 104), "type", [], "any", false, false, false, 104), [], "array", false, false, false, 104), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                    ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 105, $this->source); })()), "evenement", [], "any", false, false, false, 105), "type", [], "any", false, false, false, 105), "html", null, true);
        yield "
                </span>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Date</p>
                <p class=\"font-medium text-gray-900\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 110, $this->source); })()), "evenement", [], "any", false, false, false, 110), "dateDebut", [], "any", false, false, false, 110), "d/m/Y H:i"), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 114, $this->source); })()), "evenement", [], "any", false, false, false, 114), "lieu", [], "any", false, false, false, 114), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 114, $this->source); })()), "evenement", [], "any", false, false, false, 114), "ville", [], "any", false, false, false, 114), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 120
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
        // line 132
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
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Participation</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete the participation of <strong>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "fullName", [], "any", false, false, false, 147), "html", null, true);
        yield "</strong> for <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 147, $this->source); })()), "evenement", [], "any", false, false, false, 147), "titre", [], "any", false, false, false, 147), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153))), "html", null, true);
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
        return "participation/show.html.twig";
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
        return array (  323 => 153,  319 => 152,  309 => 147,  292 => 132,  279 => 120,  269 => 114,  262 => 110,  254 => 105,  249 => 104,  247 => 97,  240 => 93,  230 => 86,  225 => 83,  217 => 77,  210 => 73,  203 => 69,  196 => 64,  188 => 58,  181 => 54,  171 => 47,  166 => 46,  164 => 41,  159 => 38,  149 => 31,  140 => 25,  136 => 24,  128 => 19,  123 => 18,  121 => 17,  115 => 14,  107 => 9,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Participation #{{ participation.id }} | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_participation_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">Participation #{{ participation.id }}</h1>
        </div>
        <div class=\"flex gap-2\">
            {% if participation.statut == 'EN_ATTENTE' %}
                <form action=\"{{ path('app_participation_confirm', {'id': participation.id}) }}\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('confirm' ~ participation.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 font-medium\">
                        Confirm
                    </button>
                </form>
                <form action=\"{{ path('app_participation_cancel', {'id': participation.id}) }}\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cancel' ~ participation.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Cancel
                    </button>
                </form>
            {% endif %}
            <a href=\"{{ path('app_participation_edit', {'id': participation.id}) }}\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                Edit
            </a>
        </div>
    </div>

    {# Participation Details #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Participation Details</h2>
            {% set statutColors = {
                'EN_ATTENTE': 'bg-yellow-100 text-yellow-800',
                'CONFIRMEE': 'bg-green-100 text-green-800',
                'ANNULEE': 'bg-red-100 text-red-800'
            } %}
            <span class=\"px-3 py-1 rounded-full text-sm font-semibold {{ statutColors[participation.statut] ?? 'bg-gray-100 text-gray-800' }}\">
                {{ participation.statut|replace({'_': ' '}) }}
            </span>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Registration Date</p>
                <p class=\"font-medium text-gray-900\">{{ participation.dateParticipation|date('d/m/Y') }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">ID</p>
                <p class=\"font-medium text-gray-900\">#{{ participation.id }}</p>
            </div>
        </div>
    </div>

    {# Participant Info #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <h2 class=\"text-lg font-semibold text-gray-800 mb-4\">Participant</h2>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Full Name</p>
                <p class=\"font-medium text-gray-900\">{{ participation.user.fullName }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Email</p>
                <p class=\"font-medium text-gray-900\">{{ participation.user.email }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Phone</p>
                <p class=\"font-medium text-gray-900\">{{ participation.user.telephone ?? '-' }}</p>
            </div>
        </div>
    </div>

    {# Event Info #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-4\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Event</h2>
            <a href=\"{{ path('app_evenement_show', {'id': participation.evenement.id}) }}\" class=\"text-paw-orange hover:underline text-sm\">
                View Event →
            </a>
        </div>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Title</p>
                <p class=\"font-medium text-gray-900\">{{ participation.evenement.titre }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Type</p>
                {% set typeColors = {
                    'ADOPTION': 'bg-blue-100 text-blue-800',
                    'VACCINATION': 'bg-green-100 text-green-800',
                    'SENSIBILISATION': 'bg-purple-100 text-purple-800',
                    'COLLECTE': 'bg-yellow-100 text-yellow-800',
                    'FORMATION': 'bg-indigo-100 text-indigo-800'
                } %}
                <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ typeColors[participation.evenement.type] ?? 'bg-gray-100 text-gray-800' }}\">
                    {{ participation.evenement.type }}
                </span>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Date</p>
                <p class=\"font-medium text-gray-900\">{{ participation.evenement.dateDebut|date('d/m/Y H:i') }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">{{ participation.evenement.lieu }}, {{ participation.evenement.ville }}</p>
            </div>
        </div>
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
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Participation</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete the participation of <strong>{{ participation.user.fullName }}</strong> for <strong>{{ participation.evenement.titre }}</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"{{ path('app_participation_delete', {'id': participation.id}) }}\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ participation.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "participation/show.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\participation\\show.html.twig");
    }
}
