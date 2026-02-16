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

/* guest/show.html.twig */
class __TwigTemplate_f04886ad66c7fb8e4d3410a97cab2ad1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_index");
        yield "\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 14, $this->source); })()), "fullName", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        </div>
        <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            Edit
        </a>
    </div>

    ";
        // line 22
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Guest Information</h2>
            ";
        // line 25
        $context["roleColors"] = ["KEYNOTE_SPEAKER" => "bg-purple-100 text-purple-800", "SPEAKER" => "bg-blue-100 text-blue-800", "PANELIST" => "bg-indigo-100 text-indigo-800", "MODERATOR" => "bg-green-100 text-green-800", "WORKSHOP_LEADER" => "bg-orange-100 text-orange-800"];
        // line 32
        yield "            <span class=\"px-3 py-1 rounded-full text-sm font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 32, $this->source); })()), "role", [], "any", false, false, false, 32), [], "array", true, true, false, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 32, $this->source); })()), "role", [], "any", false, false, false, 32), [], "array", false, false, false, 32)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 32, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 32, $this->source); })()), "role", [], "any", false, false, false, 32), [], "array", false, false, false, 32), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), ["_" => " "]), "html", null, true);
        yield "
            </span>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">First Name</p>
                <p class=\"font-medium text-gray-900\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Last Name</p>
                <p class=\"font-medium text-gray-900\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Email</p>
                <p class=\"font-medium text-gray-900\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Phone</p>
                <p class=\"font-medium text-gray-900\">";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "phone", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), "html", null, true)) : ("-"));
        yield "</p>
            </div>
            <div class=\"col-span-2\">
                <p class=\"text-sm text-gray-500 mb-1\">Organization</p>
                <p class=\"font-medium text-gray-900\">";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "organisation", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 56, $this->source); })()), "organisation", [], "any", false, false, false, 56)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 56, $this->source); })()), "organisation", [], "any", false, false, false, 56), "html", null, true)) : ("-"));
        yield "</p>
            </div>
        </div>

        ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 60, $this->source); })()), "bio", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        <div class=\"mt-6 pt-6 border-t border-gray-200\">
            <p class=\"text-sm text-gray-500 mb-1\">Biography</p>
            <p class=\"text-gray-700\">";
            // line 63
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 63, $this->source); })()), "bio", [], "any", false, false, false, 63), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 66
        yield "    </div>

    ";
        // line 69
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-4\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Associated Event</h2>
            <a href=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 72, $this->source); })()), "evenement", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]), "html", null, true);
        yield "\" class=\"text-paw-orange hover:underline text-sm\">
                View Event →
            </a>
        </div>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Title</p>
                <p class=\"font-medium text-gray-900\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 79, $this->source); })()), "evenement", [], "any", false, false, false, 79), "titre", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Type</p>
                ";
        // line 83
        $context["typeColors"] = ["ADOPTION" => "bg-blue-100 text-blue-800", "VACCINATION" => "bg-green-100 text-green-800", "SENSIBILISATION" => "bg-purple-100 text-purple-800", "COLLECTE" => "bg-yellow-100 text-yellow-800", "FORMATION" => "bg-indigo-100 text-indigo-800"];
        // line 90
        yield "                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 90, $this->source); })()), "evenement", [], "any", false, false, false, 90), "type", [], "any", false, false, false, 90), [], "array", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 90, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 90, $this->source); })()), "evenement", [], "any", false, false, false, 90), "type", [], "any", false, false, false, 90), [], "array", false, false, false, 90)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeColors"]) || array_key_exists("typeColors", $context) ? $context["typeColors"] : (function () { throw new RuntimeError('Variable "typeColors" does not exist.', 90, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 90, $this->source); })()), "evenement", [], "any", false, false, false, 90), "type", [], "any", false, false, false, 90), [], "array", false, false, false, 90), "html", null, true)) : ("bg-gray-100 text-gray-800"));
        yield "\">
                    ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 91, $this->source); })()), "evenement", [], "any", false, false, false, 91), "type", [], "any", false, false, false, 91), "html", null, true);
        yield "
                </span>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Date</p>
                <p class=\"font-medium text-gray-900\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 96, $this->source); })()), "evenement", [], "any", false, false, false, 96), "dateDebut", [], "any", false, false, false, 96), "d/m/Y H:i"), "html", null, true);
        yield "</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 100, $this->source); })()), "evenement", [], "any", false, false, false, 100), "lieu", [], "any", false, false, false, 100), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 100, $this->source); })()), "evenement", [], "any", false, false, false, 100), "ville", [], "any", false, false, false, 100), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    ";
        // line 106
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
        // line 118
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
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Guest</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete <strong>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 133, $this->source); })()), "fullName", [], "any", false, false, false, 133), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139))), "html", null, true);
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
        return "guest/show.html.twig";
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
        return array (  296 => 139,  292 => 138,  284 => 133,  267 => 118,  254 => 106,  244 => 100,  237 => 96,  229 => 91,  224 => 90,  222 => 83,  215 => 79,  205 => 72,  200 => 69,  196 => 66,  190 => 63,  186 => 61,  184 => 60,  177 => 56,  170 => 52,  163 => 48,  156 => 44,  149 => 40,  139 => 33,  134 => 32,  132 => 25,  127 => 22,  119 => 16,  114 => 14,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ guest.fullName }} | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_guest_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">{{ guest.fullName }}</h1>
        </div>
        <a href=\"{{ path('app_guest_edit', {'id': guest.id}) }}\" class=\"px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
            Edit
        </a>
    </div>

    {# Guest Details Card #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-6\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Guest Information</h2>
            {% set roleColors = {
                'KEYNOTE_SPEAKER': 'bg-purple-100 text-purple-800',
                'SPEAKER': 'bg-blue-100 text-blue-800',
                'PANELIST': 'bg-indigo-100 text-indigo-800',
                'MODERATOR': 'bg-green-100 text-green-800',
                'WORKSHOP_LEADER': 'bg-orange-100 text-orange-800'
            } %}
            <span class=\"px-3 py-1 rounded-full text-sm font-semibold {{ roleColors[guest.role] ?? 'bg-gray-100 text-gray-800' }}\">
                {{ guest.role|replace({'_': ' '}) }}
            </span>
        </div>

        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">First Name</p>
                <p class=\"font-medium text-gray-900\">{{ guest.prenom }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Last Name</p>
                <p class=\"font-medium text-gray-900\">{{ guest.nom }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Email</p>
                <p class=\"font-medium text-gray-900\">{{ guest.email }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Phone</p>
                <p class=\"font-medium text-gray-900\">{{ guest.phone ?? '-' }}</p>
            </div>
            <div class=\"col-span-2\">
                <p class=\"text-sm text-gray-500 mb-1\">Organization</p>
                <p class=\"font-medium text-gray-900\">{{ guest.organisation ?? '-' }}</p>
            </div>
        </div>

        {% if guest.bio %}
        <div class=\"mt-6 pt-6 border-t border-gray-200\">
            <p class=\"text-sm text-gray-500 mb-1\">Biography</p>
            <p class=\"text-gray-700\">{{ guest.bio|nl2br }}</p>
        </div>
        {% endif %}
    </div>

    {# Event Info #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        <div class=\"flex justify-between items-start mb-4\">
            <h2 class=\"text-lg font-semibold text-gray-800\">Associated Event</h2>
            <a href=\"{{ path('app_evenement_show', {'id': guest.evenement.id}) }}\" class=\"text-paw-orange hover:underline text-sm\">
                View Event →
            </a>
        </div>
        <div class=\"grid grid-cols-2 gap-6\">
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Title</p>
                <p class=\"font-medium text-gray-900\">{{ guest.evenement.titre }}</p>
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
                <span class=\"px-2 py-1 rounded-full text-xs font-semibold {{ typeColors[guest.evenement.type] ?? 'bg-gray-100 text-gray-800' }}\">
                    {{ guest.evenement.type }}
                </span>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Date</p>
                <p class=\"font-medium text-gray-900\">{{ guest.evenement.dateDebut|date('d/m/Y H:i') }}</p>
            </div>
            <div>
                <p class=\"text-sm text-gray-500 mb-1\">Location</p>
                <p class=\"font-medium text-gray-900\">{{ guest.evenement.lieu }}, {{ guest.evenement.ville }}</p>
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
                    <h3 class=\"text-lg font-bold text-gray-900\">Delete Guest</h3>
                    <p class=\"text-sm text-gray-600\">This action cannot be undone.</p>
                </div>
            </div>
            <p class=\"text-gray-700 mb-6\">Are you sure you want to permanently delete <strong>{{ guest.fullName }}</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"{{ path('app_guest_delete', {'id': guest.id}) }}\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ guest.id) }}\">
                    <button type=\"submit\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 font-medium\">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "guest/show.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\guest\\show.html.twig");
    }
}
