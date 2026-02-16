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

/* guest/edit.html.twig */
class __TwigTemplate_37ea052a19336b7a2efc7a0dddf19b70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guest/edit.html.twig"));

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

        yield "Edit Guest | PawTech Admin";
        
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
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Guest</h1>
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
                <p class=\"text-sm text-blue-700 font-medium\">Guest</p>
                <p class=\"text-blue-900 font-semibold\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 29, $this->source); })()), "fullName", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                <p class=\"text-sm text-blue-600\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
            </div>
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Event</p>
                <p class=\"text-blue-900\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 34, $this->source); })()), "evenement", [], "any", false, false, false, 34), "titre", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                <p class=\"text-sm text-blue-600\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 35, $this->source); })()), "evenement", [], "any", false, false, false, 35), "dateDebut", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
        yield "</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4", "novalidate" => "novalidate"]]);
        yield "
            
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "First Name *"]);
        yield "
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "prenom", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) {
            // line 48
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48), 0, [], "array", false, false, false, 48), "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</p>
                    ";
        }
        // line 50
        yield "                </div>
                <div>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Last Name *"]);
        yield "
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "message", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
                    ";
        }
        // line 57
        yield "                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Email *"]);
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 64
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64)) > 0)) {
            // line 65
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65), 0, [], "array", false, false, false, 65), "message", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                    ";
        }
        // line 67
        yield "                </div>
                <div>
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "phone", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Phone"]);
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phone", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phone", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "phone", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "phone", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72), 0, [], "array", false, false, false, 72), "message", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
                    ";
        }
        // line 74
        yield "                </div>
            </div>

            <div>
                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "organisation", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Organization"]);
        yield "
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "organisation", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "organisation", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                ";
        // line 80
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "organisation", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80)) > 0)) {
            // line 81
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "organisation", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81), 0, [], "array", false, false, false, 81), "message", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>
                ";
        }
        // line 83
        yield "            </div>

            <div>
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "bio", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Biography"]);
        yield "
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "bio", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "bio", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87)) > 0)) ? ("border-red-500") : ("border-gray-200"))), "rows" => 3]]);
        yield "
                ";
        // line 88
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "bio", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88)) > 0)) {
            // line 89
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "bio", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89), 0, [], "array", false, false, false, 89), "message", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>
                ";
        }
        // line 91
        yield "            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "role", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Role *"]);
        yield "
                    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "role", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "role", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 97
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "role", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "role", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98), "message", [], "any", false, false, false, 98), "html", null, true);
            yield "</p>
                    ";
        }
        // line 100
        yield "                </div>
                <div>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "evenement", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Event *"]);
        yield "
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "evenement", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "evenement", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 104
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "evenement", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104)) > 0)) {
            // line 105
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "evenement", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "errors", [], "any", false, false, false, 105), 0, [], "array", false, false, false, 105), "message", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>
                    ";
        }
        // line 107
        yield "                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_index");
        yield "\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
                    Cancel
                </a>
                <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                    Save Changes
                </button>
            </div>

        ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

";
        // line 124
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
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 139, $this->source); })()), "fullName", [], "any", false, false, false, 139), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["guest"]) || array_key_exists("guest", $context) ? $context["guest"] : (function () { throw new RuntimeError('Variable "guest" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145))), "html", null, true);
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
        return "guest/edit.html.twig";
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
        return array (  377 => 145,  373 => 144,  365 => 139,  348 => 124,  341 => 119,  330 => 111,  324 => 107,  318 => 105,  316 => 104,  312 => 103,  308 => 102,  304 => 100,  298 => 98,  296 => 97,  292 => 96,  288 => 95,  282 => 91,  276 => 89,  274 => 88,  270 => 87,  266 => 86,  261 => 83,  255 => 81,  253 => 80,  249 => 79,  245 => 78,  239 => 74,  233 => 72,  231 => 71,  227 => 70,  223 => 69,  219 => 67,  213 => 65,  211 => 64,  207 => 63,  203 => 62,  196 => 57,  190 => 55,  188 => 54,  184 => 53,  180 => 52,  176 => 50,  170 => 48,  168 => 47,  164 => 46,  160 => 45,  153 => 41,  144 => 35,  140 => 34,  133 => 30,  129 => 29,  123 => 25,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Edit Guest | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_guest_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Guest</h1>
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
                <p class=\"text-sm text-blue-700 font-medium\">Guest</p>
                <p class=\"text-blue-900 font-semibold\">{{ guest.fullName }}</p>
                <p class=\"text-sm text-blue-600\">{{ guest.email }}</p>
            </div>
            <div class=\"flex-1\">
                <p class=\"text-sm text-blue-700 font-medium\">Event</p>
                <p class=\"text-blue-900\">{{ guest.evenement.titre }}</p>
                <p class=\"text-sm text-blue-600\">{{ guest.evenement.dateDebut|date('d/m/Y') }}</p>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        {{ form_start(form, {'attr': {'class': 'space-y-4', 'novalidate': 'novalidate'}}) }}
            
            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.prenom, 'First Name *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.prenom, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.prenom.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.prenom.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.prenom.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.nom, 'Last Name *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.nom, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.nom.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.nom.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.nom.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.email, 'Email *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.email, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.email.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.email.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.email.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.phone, 'Phone', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.phone, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.phone.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.phone.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.phone.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div>
                {{ form_label(form.organisation, 'Organization', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.organisation, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.organisation.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                {% if form.organisation.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.organisation.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div>
                {{ form_label(form.bio, 'Biography', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.bio, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.bio.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200'), 'rows': 3}}) }}
                {% if form.bio.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.bio.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.role, 'Role *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.role, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.role.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.role.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.role.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.evenement, 'Event *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.evenement, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.evenement.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.evenement.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.evenement.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"{{ path('app_guest_index') }}\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
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
", "guest/edit.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\guest\\edit.html.twig");
    }
}
