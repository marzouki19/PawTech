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

/* pages/event_detail.html.twig */
class __TwigTemplate_f34c999eaf2fb7a0c6e5beea69faca60 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/event_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/event_detail.html.twig"));

        $this->parent = $this->load("base_front.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - PawTech";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 6, $this->source); })())) : ([]));
        // line 7
        $context["formData"] = ((array_key_exists("formData", $context)) ? ((isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 7, $this->source); })())) : (["prenom" => "", "nom" => "", "email" => "", "telephone" => ""]));
        // line 8
        yield "<section class=\"container mx-auto px-4 lg:px-8 py-12\">
    ";
        // line 10
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 font-semibold mb-6\">
        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
        </svg>
        Back to Events
    </a>

    ";
        // line 18
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "        <div class=\"mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg\">
            ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["error"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "        <div class=\"mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg\">
            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "        <div class=\"mb-6 bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg\">
            ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
    ";
        // line 35
        yield "    ";
        $context["typeImages"] = ["VACCINATION" => "https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800&h=450&fit=crop", "ADOPTION" => "https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800&h=450&fit=crop", "SENSIBILISATION" => "https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=800&h=450&fit=crop", "COLLECTE_DONS" => "https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=800&h=450&fit=crop"];
        // line 41
        yield "
    <div class=\"grid lg:grid-cols-3 gap-8\">
        ";
        // line 44
        yield "        <div class=\"lg:col-span-2 space-y-6\">
            ";
        // line 46
        yield "            <div class=\"rounded-2xl overflow-hidden bg-gray-100 aspect-[16/9]\">
                ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 48, $this->source); })()), "titre", [], "any", false, false, false, 48), "html", null, true);
            yield "\" class=\"w-full h-full object-cover\">
                ";
        } else {
            // line 50
            yield "                    <img src=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeImages"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), [], "array", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 50, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), [], "array", false, false, false, 50)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 50, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), [], "array", false, false, false, 50), "html", null, true)) : ("https://images.unsplash.com/photo-1534361960057-19889db9621e?w=800&h=450&fit=crop"));
            yield "\" 
                         alt=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "titre", [], "any", false, false, false, 51), "html", null, true);
            yield "\" class=\"w-full h-full object-cover\">
                ";
        }
        // line 53
        yield "            </div>

            ";
        // line 56
        yield "            <div class=\"bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                <div class=\"flex flex-wrap gap-3 mb-4\">
                    <span class=\"rounded-full bg-orange-100 px-3 py-1 text-sm font-semibold text-orange-700\">
                        ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), "html", null, true);
        yield "
                    </span>
                    <span class=\"rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700\">
                        ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 62, $this->source); })()), "statut", [], "any", false, false, false, 62), "html", null, true);
        yield "
                    </span>
                </div>

                <h1 class=\"text-3xl font-extrabold text-gray-900\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 66, $this->source); })()), "titre", [], "any", false, false, false, 66), "html", null, true);
        yield "</h1>
                
                <div class=\"mt-4 flex flex-wrap gap-6 text-gray-600\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                        </svg>
                        <span>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "dateDebut", [], "any", false, false, false, 73), "F d, Y - H:i"), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "dateFin", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                        <div class=\"flex items-center gap-2\">
                            <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                            </svg>
                            <span>Until ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 80, $this->source); })()), "dateFin", [], "any", false, false, false, 80), "F d, Y - H:i"), "html", null, true);
            yield "</span>
                        </div>
                    ";
        }
        // line 83
        yield "                </div>

                <div class=\"mt-3 flex flex-wrap gap-6 text-gray-600\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        </svg>
                        <span>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "lieu", [], "any", false, false, false, 91), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "ville", [], "any", false, false, false, 91), "html", null, true);
        yield "</span>
                    </div>
                    ";
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "capaciteMax", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                        <div class=\"flex items-center gap-2\">
                            <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                            </svg>
                            <span>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "participations", [], "any", false, false, false, 98)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "capaciteMax", [], "any", false, false, false, 98), "html", null, true);
            yield " participants</span>
                        </div>
                    ";
        }
        // line 101
        yield "                </div>

                <div class=\"mt-6 prose prose-gray max-w-none\">
                    <h3 class=\"text-lg font-bold text-gray-900\">About this event</h3>
                    <p class=\"text-gray-600 whitespace-pre-line\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "html", null, true);
        yield "</p>
                </div>
            </div>

            ";
        // line 110
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 110, $this->source); })()), "guests", [], "any", false, false, false, 110)) > 0)) {
            // line 111
            yield "                <div class=\"bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                    <h3 class=\"text-lg font-bold text-gray-900 mb-4\">Guests & Speakers</h3>
                    <div class=\"grid sm:grid-cols-2 gap-4\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 114, $this->source); })()), "guests", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
                // line 115
                yield "                            <div class=\"flex items-center gap-4 p-4 bg-gray-50 rounded-xl\">
                                <div class=\"w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-lg\">
                                    ";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "prenom", [], "any", false, false, false, 117), 0, 1), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "nom", [], "any", false, false, false, 117), 0, 1), "html", null, true);
                yield "
                                </div>
                                <div>
                                    <p class=\"font-semibold text-gray-900\">";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "prenom", [], "any", false, false, false, 120), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "nom", [], "any", false, false, false, 120), "html", null, true);
                yield "</p>
                                    <p class=\"text-sm text-orange-600\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "role", [], "any", false, false, false, 121), "html", null, true);
                yield "</p>
                                    ";
                // line 122
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "organisation", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 123
                    yield "                                        <p class=\"text-sm text-gray-500\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["guest"], "organisation", [], "any", false, false, false, 123), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 125
                yield "                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['guest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "                    </div>
                </div>
            ";
        }
        // line 131
        yield "        </div>

        ";
        // line 134
        yield "        <div class=\"lg:col-span-1\">
            <div class=\"sticky top-6 bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Register for this Event</h3>
                <p class=\"text-gray-600 text-sm mb-6\">Fill out the form below to participate in this event.</p>

                ";
        // line 139
        $context["spotsLeft"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 139, $this->source); })()), "capaciteMax", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 139, $this->source); })()), "capaciteMax", [], "any", false, false, false, 139) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 139, $this->source); })()), "participations", [], "any", false, false, false, 139)))) : (null));
        // line 140
        yield "                
                ";
        // line 142
        yield "                ";
        if ((array_key_exists("eventPassed", $context) && (isset($context["eventPassed"]) || array_key_exists("eventPassed", $context) ? $context["eventPassed"] : (function () { throw new RuntimeError('Variable "eventPassed" does not exist.', 142, $this->source); })()))) {
            // line 143
            yield "                    <div class=\"mb-4 p-4 rounded-lg bg-gray-100 text-gray-700 border border-gray-200\">
                        <div class=\"flex items-center gap-3\">
                            <svg class=\"w-6 h-6 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                            </svg>
                            <div>
                                <p class=\"font-semibold\">Registration Closed</p>
                                <p class=\"text-sm\">This event has already ended.</p>
                            </div>
                        </div>
                    </div>
                ";
        } elseif ((($tmp =  !(null ===         // line 154
(isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 154, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                    <div class=\"mb-4 p-3 rounded-lg ";
            yield ((((isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 155, $this->source); })()) > 0)) ? ("bg-green-50 text-green-800") : ("bg-red-50 text-red-800"));
            yield "\">
                        ";
            // line 156
            if (((isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 156, $this->source); })()) > 0)) {
                // line 157
                yield "                            <span class=\"font-semibold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 157, $this->source); })()), "html", null, true);
                yield "</span> spots remaining
                        ";
            } else {
                // line 159
                yield "                            <span class=\"font-semibold\">Event is full</span>
                        ";
            }
            // line 161
            yield "                    </div>
                ";
        }
        // line 163
        yield "
                ";
        // line 164
        if ((( !array_key_exists("eventPassed", $context) ||  !(isset($context["eventPassed"]) || array_key_exists("eventPassed", $context) ? $context["eventPassed"] : (function () { throw new RuntimeError('Variable "eventPassed" does not exist.', 164, $this->source); })())) && ((null === (isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 164, $this->source); })())) || ((isset($context["spotsLeft"]) || array_key_exists("spotsLeft", $context) ? $context["spotsLeft"] : (function () { throw new RuntimeError('Variable "spotsLeft" does not exist.', 164, $this->source); })()) > 0)))) {
            // line 165
            yield "                    ";
            // line 166
            yield "                    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 166, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 167
                yield "                        <div class=\"mb-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm\">
                            Please correct the errors below.
                        </div>
                    ";
            }
            // line 171
            yield "
                    <form action=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
            yield "\" method=\"post\" class=\"space-y-4\" novalidate data-turbo=\"false\">
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">First Name *</label>
                            <input type=\"text\" name=\"prenom\" value=\"";
            // line 175
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "prenom", [], "any", true, true, false, 175) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 175, $this->source); })()), "prenom", [], "any", false, false, false, 175)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 175, $this->source); })()), "prenom", [], "any", false, false, false, 175), "html", null, true)) : (""));
            yield "\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none ";
            // line 176
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "prenom", [], "any", true, true, false, 176)) ? ("border-red-500") : ("border-gray-200"));
            yield "\"
                                   placeholder=\"Your first name\">
                            ";
            // line 178
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "prenom", [], "any", true, true, false, 178)) {
                // line 179
                yield "                                <p class=\"text-red-500 text-sm mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 179, $this->source); })()), "prenom", [], "any", false, false, false, 179), "html", null, true);
                yield "</p>
                            ";
            }
            // line 181
            yield "                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Last Name *</label>
                            <input type=\"text\" name=\"nom\" value=\"";
            // line 184
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "nom", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 184, $this->source); })()), "nom", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 184, $this->source); })()), "nom", [], "any", false, false, false, 184), "html", null, true)) : (""));
            yield "\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none ";
            // line 185
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nom", [], "any", true, true, false, 185)) ? ("border-red-500") : ("border-gray-200"));
            yield "\"
                                   placeholder=\"Your last name\">
                            ";
            // line 187
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nom", [], "any", true, true, false, 187)) {
                // line 188
                yield "                                <p class=\"text-red-500 text-sm mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 188, $this->source); })()), "nom", [], "any", false, false, false, 188), "html", null, true);
                yield "</p>
                            ";
            }
            // line 190
            yield "                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Email *</label>
                            <input type=\"email\" name=\"email\" value=\"";
            // line 193
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "email", [], "any", true, true, false, 193) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193), "html", null, true)) : (""));
            yield "\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none ";
            // line 194
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 194)) ? ("border-red-500") : ("border-gray-200"));
            yield "\"
                                   placeholder=\"your@email.com\">
                            ";
            // line 196
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 196)) {
                // line 197
                yield "                                <p class=\"text-red-500 text-sm mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 197, $this->source); })()), "email", [], "any", false, false, false, 197), "html", null, true);
                yield "</p>
                            ";
            }
            // line 199
            yield "                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Phone</label>
                            <input type=\"tel\" name=\"telephone\" value=\"";
            // line 202
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "telephone", [], "any", true, true, false, 202) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 202, $this->source); })()), "telephone", [], "any", false, false, false, 202)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 202, $this->source); })()), "telephone", [], "any", false, false, false, 202), "html", null, true)) : (""));
            yield "\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none ";
            // line 203
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "telephone", [], "any", true, true, false, 203)) ? ("border-red-500") : ("border-gray-200"));
            yield "\"
                                   placeholder=\"Your phone number\">
                            ";
            // line 205
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "telephone", [], "any", true, true, false, 205)) {
                // line 206
                yield "                                <p class=\"text-red-500 text-sm mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 206, $this->source); })()), "telephone", [], "any", false, false, false, 206), "html", null, true);
                yield "</p>
                            ";
            }
            // line 208
            yield "                        </div>
                        <button type=\"submit\" class=\"w-full py-3 bg-orange-500 text-white font-bold rounded-lg hover:bg-orange-600 transition\">
                            Register Now
                        </button>
                    </form>
                ";
        } else {
            // line 214
            yield "                    <p class=\"text-center text-gray-500 py-4\">Registration is closed for this event.</p>
                ";
        }
        // line 216
        yield "            </div>
        </div>
    </div>
</section>
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
        return "pages/event_detail.html.twig";
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
        return array (  532 => 216,  528 => 214,  520 => 208,  514 => 206,  512 => 205,  507 => 203,  503 => 202,  498 => 199,  492 => 197,  490 => 196,  485 => 194,  481 => 193,  476 => 190,  470 => 188,  468 => 187,  463 => 185,  459 => 184,  454 => 181,  448 => 179,  446 => 178,  441 => 176,  437 => 175,  431 => 172,  428 => 171,  422 => 167,  419 => 166,  417 => 165,  415 => 164,  412 => 163,  408 => 161,  404 => 159,  398 => 157,  396 => 156,  391 => 155,  389 => 154,  376 => 143,  373 => 142,  370 => 140,  368 => 139,  361 => 134,  357 => 131,  352 => 128,  344 => 125,  338 => 123,  336 => 122,  332 => 121,  326 => 120,  319 => 117,  315 => 115,  311 => 114,  306 => 111,  303 => 110,  296 => 105,  290 => 101,  282 => 98,  276 => 94,  274 => 93,  267 => 91,  257 => 83,  251 => 80,  245 => 76,  243 => 75,  238 => 73,  228 => 66,  221 => 62,  215 => 59,  210 => 56,  206 => 53,  201 => 51,  196 => 50,  188 => 48,  186 => 47,  183 => 46,  180 => 44,  176 => 41,  173 => 35,  170 => 33,  161 => 30,  158 => 29,  153 => 28,  144 => 25,  141 => 24,  136 => 23,  127 => 20,  124 => 19,  119 => 18,  108 => 10,  105 => 8,  103 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}{{ event.titre }} - PawTech{% endblock %}

{% block body %}
{% set errors = errors is defined ? errors : {} %}
{% set formData = formData is defined ? formData : {prenom: '', nom: '', email: '', telephone: ''} %}
<section class=\"container mx-auto px-4 lg:px-8 py-12\">
    {# Back Link #}
    <a href=\"{{ path('app_events') }}\" class=\"inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 font-semibold mb-6\">
        <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"/>
        </svg>
        Back to Events
    </a>

    {# Flash Messages #}
    {% for message in app.flashes('success') %}
        <div class=\"mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('warning') %}
        <div class=\"mb-6 bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg\">
            {{ message }}
        </div>
    {% endfor %}

    {# Default images by event type #}
    {% set typeImages = {
        'VACCINATION': 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800&h=450&fit=crop',
        'ADOPTION': 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800&h=450&fit=crop',
        'SENSIBILISATION': 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=800&h=450&fit=crop',
        'COLLECTE_DONS': 'https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=800&h=450&fit=crop'
    } %}

    <div class=\"grid lg:grid-cols-3 gap-8\">
        {# Main Content #}
        <div class=\"lg:col-span-2 space-y-6\">
            {# Event Image #}
            <div class=\"rounded-2xl overflow-hidden bg-gray-100 aspect-[16/9]\">
                {% if event.image %}
                    <img src=\"{{ event.image }}\" alt=\"{{ event.titre }}\" class=\"w-full h-full object-cover\">
                {% else %}
                    <img src=\"{{ typeImages[event.type] ?? 'https://images.unsplash.com/photo-1534361960057-19889db9621e?w=800&h=450&fit=crop' }}\" 
                         alt=\"{{ event.titre }}\" class=\"w-full h-full object-cover\">
                {% endif %}
            </div>

            {# Event Details #}
            <div class=\"bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                <div class=\"flex flex-wrap gap-3 mb-4\">
                    <span class=\"rounded-full bg-orange-100 px-3 py-1 text-sm font-semibold text-orange-700\">
                        {{ event.type }}
                    </span>
                    <span class=\"rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700\">
                        {{ event.statut }}
                    </span>
                </div>

                <h1 class=\"text-3xl font-extrabold text-gray-900\">{{ event.titre }}</h1>
                
                <div class=\"mt-4 flex flex-wrap gap-6 text-gray-600\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
                        </svg>
                        <span>{{ event.dateDebut|date('F d, Y - H:i') }}</span>
                    </div>
                    {% if event.dateFin %}
                        <div class=\"flex items-center gap-2\">
                            <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                            </svg>
                            <span>Until {{ event.dateFin|date('F d, Y - H:i') }}</span>
                        </div>
                    {% endif %}
                </div>

                <div class=\"mt-3 flex flex-wrap gap-6 text-gray-600\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\"/>
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\"/>
                        </svg>
                        <span>{{ event.lieu }}, {{ event.ville }}</span>
                    </div>
                    {% if event.capaciteMax %}
                        <div class=\"flex items-center gap-2\">
                            <svg class=\"w-5 h-5 text-orange-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
                            </svg>
                            <span>{{ event.participations|length }} / {{ event.capaciteMax }} participants</span>
                        </div>
                    {% endif %}
                </div>

                <div class=\"mt-6 prose prose-gray max-w-none\">
                    <h3 class=\"text-lg font-bold text-gray-900\">About this event</h3>
                    <p class=\"text-gray-600 whitespace-pre-line\">{{ event.description }}</p>
                </div>
            </div>

            {# Guests / Speakers #}
            {% if event.guests|length > 0 %}
                <div class=\"bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                    <h3 class=\"text-lg font-bold text-gray-900 mb-4\">Guests & Speakers</h3>
                    <div class=\"grid sm:grid-cols-2 gap-4\">
                        {% for guest in event.guests %}
                            <div class=\"flex items-center gap-4 p-4 bg-gray-50 rounded-xl\">
                                <div class=\"w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-lg\">
                                    {{ guest.prenom|slice(0,1) }}{{ guest.nom|slice(0,1) }}
                                </div>
                                <div>
                                    <p class=\"font-semibold text-gray-900\">{{ guest.prenom }} {{ guest.nom }}</p>
                                    <p class=\"text-sm text-orange-600\">{{ guest.role }}</p>
                                    {% if guest.organisation %}
                                        <p class=\"text-sm text-gray-500\">{{ guest.organisation }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
        </div>

        {# Sidebar - Registration Form #}
        <div class=\"lg:col-span-1\">
            <div class=\"sticky top-6 bg-white rounded-2xl border border-gray-100 shadow-sm p-6\">
                <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Register for this Event</h3>
                <p class=\"text-gray-600 text-sm mb-6\">Fill out the form below to participate in this event.</p>

                {% set spotsLeft = event.capaciteMax ? (event.capaciteMax - event.participations|length) : null %}
                
                {# Check if event has ended #}
                {% if eventPassed is defined and eventPassed %}
                    <div class=\"mb-4 p-4 rounded-lg bg-gray-100 text-gray-700 border border-gray-200\">
                        <div class=\"flex items-center gap-3\">
                            <svg class=\"w-6 h-6 text-gray-500\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                            </svg>
                            <div>
                                <p class=\"font-semibold\">Registration Closed</p>
                                <p class=\"text-sm\">This event has already ended.</p>
                            </div>
                        </div>
                    </div>
                {% elseif spotsLeft is not null %}
                    <div class=\"mb-4 p-3 rounded-lg {{ spotsLeft > 0 ? 'bg-green-50 text-green-800' : 'bg-red-50 text-red-800' }}\">
                        {% if spotsLeft > 0 %}
                            <span class=\"font-semibold\">{{ spotsLeft }}</span> spots remaining
                        {% else %}
                            <span class=\"font-semibold\">Event is full</span>
                        {% endif %}
                    </div>
                {% endif %}

                {% if (eventPassed is not defined or not eventPassed) and (spotsLeft is null or spotsLeft > 0) %}
                    {# Show general error if there are validation errors #}
                    {% if errors is not empty %}
                        <div class=\"mb-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm\">
                            Please correct the errors below.
                        </div>
                    {% endif %}

                    <form action=\"{{ path('app_event_detail', {id: event.id}) }}\" method=\"post\" class=\"space-y-4\" novalidate data-turbo=\"false\">
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">First Name *</label>
                            <input type=\"text\" name=\"prenom\" value=\"{{ formData.prenom ?? '' }}\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none {{ errors.prenom is defined ? 'border-red-500' : 'border-gray-200' }}\"
                                   placeholder=\"Your first name\">
                            {% if errors.prenom is defined %}
                                <p class=\"text-red-500 text-sm mt-1\">{{ errors.prenom }}</p>
                            {% endif %}
                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Last Name *</label>
                            <input type=\"text\" name=\"nom\" value=\"{{ formData.nom ?? '' }}\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none {{ errors.nom is defined ? 'border-red-500' : 'border-gray-200' }}\"
                                   placeholder=\"Your last name\">
                            {% if errors.nom is defined %}
                                <p class=\"text-red-500 text-sm mt-1\">{{ errors.nom }}</p>
                            {% endif %}
                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Email *</label>
                            <input type=\"email\" name=\"email\" value=\"{{ formData.email ?? '' }}\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none {{ errors.email is defined ? 'border-red-500' : 'border-gray-200' }}\"
                                   placeholder=\"your@email.com\">
                            {% if errors.email is defined %}
                                <p class=\"text-red-500 text-sm mt-1\">{{ errors.email }}</p>
                            {% endif %}
                        </div>
                        <div>
                            <label class=\"block text-sm font-medium text-gray-700 mb-1\">Phone</label>
                            <input type=\"tel\" name=\"telephone\" value=\"{{ formData.telephone ?? '' }}\"
                                   class=\"w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none {{ errors.telephone is defined ? 'border-red-500' : 'border-gray-200' }}\"
                                   placeholder=\"Your phone number\">
                            {% if errors.telephone is defined %}
                                <p class=\"text-red-500 text-sm mt-1\">{{ errors.telephone }}</p>
                            {% endif %}
                        </div>
                        <button type=\"submit\" class=\"w-full py-3 bg-orange-500 text-white font-bold rounded-lg hover:bg-orange-600 transition\">
                            Register Now
                        </button>
                    </form>
                {% else %}
                    <p class=\"text-center text-gray-500 py-4\">Registration is closed for this event.</p>
                {% endif %}
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "pages/event_detail.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\event_detail.html.twig");
    }
}
