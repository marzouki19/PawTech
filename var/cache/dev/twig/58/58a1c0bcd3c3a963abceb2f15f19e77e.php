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

/* participation/edit.html.twig */
class __TwigTemplate_850c3b873624e525bd0f8f0c9f956b87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/edit.html.twig"));

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

        yield "Edit Participation | PawTech Admin";
        
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
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Participation #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 text-red-600 border border-red-200 rounded-lg hover:bg-red-50\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete
        </button>
    </div>

    ";
        // line 25
        yield "    <div class=\"bg-blue-50 border border-blue-200 rounded-xl p-4\">
        <div class=\"flex gap-4\">
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Participant</p>
                <p class=\"text-blue-900\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                <p class=\"text-sm text-blue-600\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
            </div>
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Event</p>
                <p class=\"text-blue-900\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                <p class=\"text-sm text-blue-600\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 35, $this->source); })()), "evenement", [], "any", false, false, false, 35), "dateDebut", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 35, $this->source); })()), "evenement", [], "any", false, false, false, 35), "ville", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4", "novalidate" => "novalidate"]]);
        yield "
            
            <div>
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Participant *"]);
        yield "
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47), "message", [], "any", false, false, false, 47), "html", null, true);
            yield "</p>
                ";
        }
        // line 49
        yield "            </div>

            <div>
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "evenement", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Event *"]);
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "evenement", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "evenement", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "evenement", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "evenement", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "message", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                ";
        }
        // line 57
        yield "            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dateParticipation", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Registration Date *"]);
        yield "
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateParticipation", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateParticipation", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "dateParticipation", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            // line 64
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "dateParticipation", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64), 0, [], "array", false, false, false, 64), "message", [], "any", false, false, false, 64), "html", null, true);
            yield "</p>
                    ";
        }
        // line 66
        yield "                </div>
                <div>
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Status *"]);
        yield "
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "statut", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "errors", [], "any", false, false, false, 69)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 70
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "statut", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) {
            // line 71
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "statut", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71), 0, [], "array", false, false, false, 71), "message", [], "any", false, false, false, 71), "html", null, true);
            yield "</p>
                    ";
        }
        // line 73
        yield "                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        yield "\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
                    Cancel
                </a>
                <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                    Save Changes
                </button>
            </div>

        ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

";
        // line 90
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
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "fullName", [], "any", false, false, false, 105), "html", null, true);
        yield "</strong> for <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 105, $this->source); })()), "evenement", [], "any", false, false, false, 105), "titre", [], "any", false, false, false, 105), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111))), "html", null, true);
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
        return "participation/edit.html.twig";
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
        return array (  298 => 111,  294 => 110,  284 => 105,  267 => 90,  260 => 85,  249 => 77,  243 => 73,  237 => 71,  235 => 70,  231 => 69,  227 => 68,  223 => 66,  217 => 64,  215 => 63,  211 => 62,  207 => 61,  201 => 57,  195 => 55,  193 => 54,  189 => 53,  185 => 52,  180 => 49,  174 => 47,  172 => 46,  168 => 45,  164 => 44,  158 => 41,  147 => 35,  143 => 34,  136 => 30,  132 => 29,  126 => 25,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Edit Participation | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_participation_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Participation #{{ participation.id }}</h1>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 text-red-600 border border-red-200 rounded-lg hover:bg-red-50\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete
        </button>
    </div>

    {# Info Card #}
    <div class=\"bg-blue-50 border border-blue-200 rounded-xl p-4\">
        <div class=\"flex gap-4\">
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Participant</p>
                <p class=\"text-blue-900\">{{ participation.user.fullName }}</p>
                <p class=\"text-sm text-blue-600\">{{ participation.user.email }}</p>
            </div>
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Event</p>
                <p class=\"text-blue-900\">{{ participation.evenement.titre }}</p>
                <p class=\"text-sm text-blue-600\">{{ participation.evenement.dateDebut|date('d/m/Y') }} - {{ participation.evenement.ville }}</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        {{ form_start(form, {'attr': {'class': 'space-y-4', 'novalidate': 'novalidate'}}) }}
            
            <div>
                {{ form_label(form.user, 'Participant *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.user, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.user.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                {% if form.user.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.user.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div>
                {{ form_label(form.evenement, 'Event *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.evenement, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.evenement.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                {% if form.evenement.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.evenement.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.dateParticipation, 'Registration Date *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.dateParticipation, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.dateParticipation.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.dateParticipation.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.dateParticipation.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.statut, 'Status *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.statut, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.statut.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.statut.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.statut.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"{{ path('app_participation_index') }}\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
                    Cancel
                </a>
                <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                    Save Changes
                </button>
            </div>

        {{ form_end(form) }}
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
", "participation/edit.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\participation\\edit.html.twig");
    }
}
