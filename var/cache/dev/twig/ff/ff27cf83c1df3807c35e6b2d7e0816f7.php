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

/* evenement/edit.html.twig */
class __TwigTemplate_663e025db8bd263fdd7ac9aa39ed1b19 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

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

        yield "Edit Event | PawTech Admin";
        
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
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Event #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 text-red-600 border border-red-200 rounded-lg hover:bg-red-50\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete
        </button>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        yield "
            
            <div>
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Title *"]);
        yield "
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                ";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "titre", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titre", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31), 0, [], "array", false, false, false, 31), "message", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                ";
        }
        // line 33
        yield "            </div>

            <div>
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Type *"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38)) > 0)) {
            // line 39
            yield "                    <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39), 0, [], "array", false, false, false, 39), "message", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                ";
        }
        // line 41
        yield "            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateDebut", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Start Date *"]);
        yield "
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateDebut", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateDebut", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "dateDebut", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) {
            // line 48
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateDebut", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48), 0, [], "array", false, false, false, 48), "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</p>
                    ";
        }
        // line 50
        yield "                </div>
                <div>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateFin", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "End Date"]);
        yield "
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "dateFin", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dateFin", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "message", [], "any", false, false, false, 55), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "lieu", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Location *"]);
        yield "
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lieu", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lieu", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 64
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lieu", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64)) > 0)) {
            // line 65
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lieu", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65), 0, [], "array", false, false, false, 65), "message", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                    ";
        }
        // line 67
        yield "                </div>
                <div>
                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "City *"]);
        yield "
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "ville", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "ville", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70)) > 0)) ? ("border-red-500") : ("border-gray-200")))]]);
        yield "
                    ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "ville", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "ville", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72), 0, [], "array", false, false, false, 72), "message", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
                    ";
        }
        // line 74
        yield "                </div>
            </div>

            <div>
                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Description"]);
        yield "
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none", "rows" => 3]]);
        yield "
            </div>

            <div>
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "imageFile", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Image"]);
        yield "
                ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                    <div class=\"mb-2\">
                        <img src=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86))), "html", null, true);
            yield "\" alt=\"Current image\" class=\"w-32 h-20 object-cover rounded-lg\">
                        <p class=\"text-xs text-gray-500 mt-1\">Current image</p>
                    </div>
                ";
        }
        // line 90
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "imageFile", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none", "accept" => "image/jpeg,image/png,image/webp"]]);
        yield "
                <p class=\"text-xs text-gray-500 mt-1\">Accepted formats: JPG, PNG, WebP. Max 2MB. Leave empty to keep current image.</p>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "capaciteMax", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Max Capacity"]);
        yield "
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "capaciteMax", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => ("w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none " . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "capaciteMax", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97)) > 0)) ? ("border-red-500") : ("border-gray-200"))), "placeholder" => "Leave empty for unlimited"]]);
        yield "
                    ";
        // line 98
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "capaciteMax", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98)) > 0)) {
            // line 99
            yield "                        <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "capaciteMax", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "errors", [], "any", false, false, false, 99), 0, [], "array", false, false, false, 99), "message", [], "any", false, false, false, 99), "html", null, true);
            yield "</p>
                    ";
        }
        // line 101
        yield "                </div>
                <div>
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "statut", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Status"]);
        yield "
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none"]]);
        yield "
                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
                    Cancel
                </a>
                <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                    Save Changes
                </button>
            </div>

        ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 121
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6 mt-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Participants (";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 122, $this->source); })()), "participations", [], "any", false, false, false, 122)), "html", null, true);
        yield ")</h2>
        ";
        // line 123
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 123, $this->source); })()), "participations", [], "any", false, false, false, 123)) > 0)) {
            // line 124
            yield "            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Date</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Status</th>
                    </tr>
                </thead>
                <tbody class=\"divide-y divide-gray-100\">
                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 134, $this->source); })()), "participations", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 135
                yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 136), "fullName", [], "any", false, false, false, 136), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "user", [], "any", false, false, false, 137), "email", [], "any", false, false, false, 137), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dateParticipation", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3\">
                                ";
                // line 140
                $context["statutColors"] = ["EN_ATTENTE" => "bg-yellow-100 text-yellow-800", "CONFIRMEE" => "bg-green-100 text-green-800", "ANNULEE" => "bg-red-100 text-red-800"];
                // line 145
                yield "                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statutColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 145), [], "array", true, true, false, 145) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 145, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 145), [], "array", false, false, false, 145)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statutColors"]) || array_key_exists("statutColors", $context) ? $context["statutColors"] : (function () { throw new RuntimeError('Variable "statutColors" does not exist.', 145, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 145), [], "array", false, false, false, 145), "html", null, true)) : ("bg-gray-100 text-gray-800"));
                yield "\">
                                    ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 146), ["_" => " "]), "html", null, true);
                yield "
                                </span>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 154
            yield "            <p class=\"text-gray-500 text-center py-4\">No participants registered</p>
        ";
        }
        // line 156
        yield "    </div>

    ";
        // line 159
        yield "    <div class=\"bg-white rounded-xl border border-gray-200 p-6 mt-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Guests (";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "guests", [], "any", false, false, false, 160)), "html", null, true);
        yield ")</h2>
        ";
        // line 161
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 161, $this->source); })()), "guests", [], "any", false, false, false, 161)) > 0)) {
            // line 162
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
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 172, $this->source); })()), "guests", [], "any", false, false, false, 172));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 173
                yield "                        <tr class=\"hover:bg-gray-50\">
                            <td class=\"px-4 py-3 font-medium text-gray-900\">";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "fullName", [], "any", false, false, false, 174), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "email", [], "any", false, false, false, 175), "html", null, true);
                yield "</td>
                            <td class=\"px-4 py-3 text-gray-600\">";
                // line 176
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", false, false, false, 176)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "organisation", [], "any", false, false, false, 176), "html", null, true)) : ("-"));
                yield "</td>
                            <td class=\"px-4 py-3\">
                                ";
                // line 178
                $context["roleColors"] = ["KEYNOTE_SPEAKER" => "bg-purple-100 text-purple-800", "SPEAKER" => "bg-blue-100 text-blue-800", "PANELIST" => "bg-indigo-100 text-indigo-800", "MODERATOR" => "bg-green-100 text-green-800", "WORKSHOP_LEADER" => "bg-orange-100 text-orange-800"];
                // line 185
                yield "                                <span class=\"px-2 py-1 rounded-full text-xs font-semibold ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 185), [], "array", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 185, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 185), [], "array", false, false, false, 185)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["roleColors"]) || array_key_exists("roleColors", $context) ? $context["roleColors"] : (function () { throw new RuntimeError('Variable "roleColors" does not exist.', 185, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 185), [], "array", false, false, false, 185), "html", null, true)) : ("bg-gray-100 text-gray-800"));
                yield "\">
                                    ";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["g"], "role", [], "any", false, false, false, 186), ["_" => " "]), "html", null, true);
                yield "
                                </span>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 194
            yield "            <p class=\"text-gray-500 text-center py-4\">No guests</p>
        ";
        }
        // line 196
        yield "    </div>
</div>

";
        // line 200
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
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 215, $this->source); })()), "titre", [], "any", false, false, false, 215), "html", null, true);
        yield "</strong>?</p>
            <div class=\"flex justify-end gap-3\">
                <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.add('hidden')\" class=\"px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 font-medium\">
                    Cancel
                </button>
                <form action=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, false, 220)]), "html", null, true);
        yield "\" method=\"post\" class=\"inline\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 221, $this->source); })()), "id", [], "any", false, false, false, 221))), "html", null, true);
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
        return "evenement/edit.html.twig";
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
        return array (  521 => 221,  517 => 220,  509 => 215,  492 => 200,  487 => 196,  483 => 194,  478 => 191,  467 => 186,  462 => 185,  460 => 178,  455 => 176,  451 => 175,  447 => 174,  444 => 173,  440 => 172,  428 => 162,  426 => 161,  422 => 160,  419 => 159,  415 => 156,  411 => 154,  406 => 151,  395 => 146,  390 => 145,  388 => 140,  383 => 138,  379 => 137,  375 => 136,  372 => 135,  368 => 134,  356 => 124,  354 => 123,  350 => 122,  347 => 121,  341 => 117,  330 => 109,  322 => 104,  318 => 103,  314 => 101,  308 => 99,  306 => 98,  302 => 97,  298 => 96,  288 => 90,  281 => 86,  278 => 85,  276 => 84,  272 => 83,  265 => 79,  261 => 78,  255 => 74,  249 => 72,  247 => 71,  243 => 70,  239 => 69,  235 => 67,  229 => 65,  227 => 64,  223 => 63,  219 => 62,  212 => 57,  206 => 55,  204 => 54,  200 => 53,  196 => 52,  192 => 50,  186 => 48,  184 => 47,  180 => 46,  176 => 45,  170 => 41,  164 => 39,  162 => 38,  158 => 37,  154 => 36,  149 => 33,  143 => 31,  141 => 30,  137 => 29,  133 => 28,  127 => 25,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Edit Event | PawTech Admin{% endblock %}

{% block main %}
<div class=\"max-w-2xl mx-auto space-y-4\">
    <div class=\"flex items-center justify-between gap-4\">
        <div class=\"flex items-center gap-4\">
            <a href=\"{{ path('app_evenement_index') }}\" class=\"p-2 hover:bg-gray-100 rounded-lg\">
                <svg class=\"w-5 h-5 text-gray-600\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
                </svg>
            </a>
            <h1 class=\"text-2xl font-bold text-gray-800\">Edit Event #{{ evenement.id }}</h1>
        </div>
        <button type=\"button\" onclick=\"document.getElementById('delete-modal').classList.remove('hidden')\" class=\"px-4 py-2 text-red-600 border border-red-200 rounded-lg hover:bg-red-50\">
            <svg class=\"w-5 h-5 inline-block mr-1\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16\"/>
            </svg>
            Delete
        </button>
    </div>

    <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
        {{ form_start(form, {'attr': {'class': 'space-y-4', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}
            
            <div>
                {{ form_label(form.titre, 'Title *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.titre, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.titre.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                {% if form.titre.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.titre.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div>
                {{ form_label(form.type, 'Type *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.type, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.type.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                {% if form.type.vars.errors|length > 0 %}
                    <p class=\"text-red-500 text-sm mt-1\">{{ form.type.vars.errors[0].message }}</p>
                {% endif %}
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.dateDebut, 'Start Date *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.dateDebut, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.dateDebut.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.dateDebut.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.dateDebut.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.dateFin, 'End Date', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.dateFin, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.dateFin.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.dateFin.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.dateFin.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.lieu, 'Location *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.lieu, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.lieu.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.lieu.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.lieu.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.ville, 'City *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.ville, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.ville.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200')}}) }}
                    {% if form.ville.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.ville.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
            </div>

            <div>
                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {{ form_widget(form.description, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none', 'rows': 3}}) }}
            </div>

            <div>
                {{ form_label(form.imageFile, 'Image', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                {% if evenement.image %}
                    <div class=\"mb-2\">
                        <img src=\"{{ asset('uploads/events/' ~ evenement.image) }}\" alt=\"Current image\" class=\"w-32 h-20 object-cover rounded-lg\">
                        <p class=\"text-xs text-gray-500 mt-1\">Current image</p>
                    </div>
                {% endif %}
                {{ form_widget(form.imageFile, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none', 'accept': 'image/jpeg,image/png,image/webp'}}) }}
                <p class=\"text-xs text-gray-500 mt-1\">Accepted formats: JPG, PNG, WebP. Max 2MB. Leave empty to keep current image.</p>
            </div>

            <div class=\"grid grid-cols-2 gap-4\">
                <div>
                    {{ form_label(form.capaciteMax, 'Max Capacity', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.capaciteMax, {'attr': {'class': 'w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none ' ~ (form.capaciteMax.vars.errors|length > 0 ? 'border-red-500' : 'border-gray-200'), 'placeholder': 'Leave empty for unlimited'}}) }}
                    {% if form.capaciteMax.vars.errors|length > 0 %}
                        <p class=\"text-red-500 text-sm mt-1\">{{ form.capaciteMax.vars.errors[0].message }}</p>
                    {% endif %}
                </div>
                <div>
                    {{ form_label(form.statut, 'Status', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
                    {{ form_widget(form.statut, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none'}}) }}
                </div>
            </div>

            <div class=\"flex gap-3 pt-4\">
                <a href=\"{{ path('app_evenement_index') }}\" class=\"flex-1 px-4 py-2.5 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 text-center\">
                    Cancel
                </a>
                <button type=\"submit\" class=\"flex-1 px-4 py-2.5 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                    Save Changes
                </button>
            </div>

        {{ form_end(form) }}
    </div>

    {# Participants Section #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6 mt-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Participants ({{ evenement.participations|length }})</h2>
        {% if evenement.participations|length > 0 %}
            <table class=\"w-full\">
                <thead>
                    <tr class=\"bg-gray-50 border-b border-gray-200\">
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Participant</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Email</th>
                        <th class=\"px-4 py-3 text-left text-sm font-semibold text-gray-700\">Date</th>
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
            <p class=\"text-gray-500 text-center py-4\">No participants registered</p>
        {% endif %}
    </div>

    {# Guests Section #}
    <div class=\"bg-white rounded-xl border border-gray-200 p-6 mt-6\">
        <h2 class=\"text-xl font-bold text-gray-800 mb-4\">Guests ({{ evenement.guests|length }})</h2>
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
            <p class=\"text-gray-500 text-center py-4\">No guests</p>
        {% endif %}
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
", "evenement/edit.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\evenement\\edit.html.twig");
    }
}
