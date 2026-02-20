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

/* suivi/edit.html.twig */
class __TwigTemplate_42da5577a7dbcca3a8fc4b0f930410bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/edit.html.twig"));

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
        yield "<div class=\"max-w-7xl mx-auto\">
    <div class=\"mb-8\">
        <div class=\"flex justify-between items-center\">
            <div>
                <h1 class=\"text-3xl font-bold text-gray-900\">Modifier le Follow-Up</h1>
                <p class=\"text-gray-600 mt-2\">Modifiez les informations du follow-up #";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
            </div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
        yield "\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium inline-flex items-center transition-colors\">
                <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"bg-white rounded-xl shadow-md p-8\">
        ";
        // line 22
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "data-turbo" => "false"]]);
        // line 26
        yield "
        
        ";
        // line 29
        yield "        ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "valid", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "            <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
                <div class=\"flex items-start\">
                    <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <div>
                        <p class=\"text-sm font-medium text-red-800\">Veuillez corriger les erreurs ci-dessous</p>
                        <div class=\"mt-1 text-sm text-red-700\">
                            ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'errors');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 44
        yield "        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- État -->
            <div>
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "etat", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "État *"]);
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "etat", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "etat", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 52
        yield "
                ";
        // line 53
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "etat", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "etat", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                    </div>
                ";
        }
        // line 65
        yield "            </div>
            
            <!-- Type de suivi -->
            <div>
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Type de suivi *"]);
        yield "
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "type", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 73
        yield "
                ";
        // line 74
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "type", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "type", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 77
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 81), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "                    </div>
                ";
        }
        // line 86
        yield "            </div>
            
            <!-- Consultation -->
            <div class=\"md:col-span-2\">
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "consultation", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Consultation associée *"]);
        yield "
                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "consultation", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "consultation", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 94
        yield "
                ";
        // line 95
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "consultation", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "errors", [], "any", false, false, false, 95))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "consultation", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "errors", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 98
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 102), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                    </div>
                ";
        }
        // line 107
        yield "            </div>
            
            <!-- Date et heure -->
            <div class=\"md:col-span-2\">
                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Date et heure de la prochaine visite *"]);
        yield "
                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "any", false, false, false, 114))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 115
        yield "
                ";
        // line 116
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "errors", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 119
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 123), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "                    </div>
                ";
        }
        // line 128
        yield "            </div>
            
            <!-- Recommandation -->
            <div class=\"md:col-span-2\">
                ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "recommandation", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Recommandation *"]);
        yield "
                ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "recommandation", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 135
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "recommandation", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "errors", [], "any", false, false, false, 135))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 5, "placeholder" => "Recommandations et observations..."]]);
        // line 138
        yield "
                ";
        // line 139
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "recommandation", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "recommandation", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "errors", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 142
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 146), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "                    </div>
                ";
        }
        // line 151
        yield "            </div>
        </div>
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
        yield "\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors\">
                Annuler
            </a>
            <button type=\"submit\" class=\"px-6 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-paw-orange focus:ring-offset-2\">
                Enregistrer les modifications
            </button>
        </div>
        
        ";
        // line 163
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
        yield "
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
        return "suivi/edit.html.twig";
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
        return array (  367 => 163,  356 => 155,  350 => 151,  346 => 149,  337 => 146,  331 => 142,  327 => 141,  324 => 140,  322 => 139,  319 => 138,  317 => 135,  316 => 133,  312 => 132,  306 => 128,  302 => 126,  293 => 123,  287 => 119,  283 => 118,  280 => 117,  278 => 116,  275 => 115,  273 => 114,  272 => 112,  268 => 111,  262 => 107,  258 => 105,  249 => 102,  243 => 98,  239 => 97,  236 => 96,  234 => 95,  231 => 94,  229 => 93,  228 => 91,  224 => 90,  218 => 86,  214 => 84,  205 => 81,  199 => 77,  195 => 76,  192 => 75,  190 => 74,  187 => 73,  185 => 72,  184 => 70,  180 => 69,  174 => 65,  170 => 63,  161 => 60,  155 => 56,  151 => 55,  148 => 54,  146 => 53,  143 => 52,  141 => 51,  140 => 49,  136 => 48,  130 => 44,  121 => 38,  111 => 30,  108 => 29,  104 => 26,  101 => 22,  88 => 11,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"max-w-7xl mx-auto\">
    <div class=\"mb-8\">
        <div class=\"flex justify-between items-center\">
            <div>
                <h1 class=\"text-3xl font-bold text-gray-900\">Modifier le Follow-Up</h1>
                <p class=\"text-gray-600 mt-2\">Modifiez les informations du follow-up #{{ suivi.id }}</p>
            </div>
            <a href=\"{{ path('app_suivi_index') }}\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium inline-flex items-center transition-colors\">
                <svg class=\"w-5 h-5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"bg-white rounded-xl shadow-md p-8\">
        {# DÉSACTIVER TURBO POUR CE FORMULAIRE #}
        {{ form_start(form, {'attr': {
            'class': 'space-y-6', 
            'novalidate': 'novalidate',
            'data-turbo': 'false'
        }}) }}
        
        {# Afficher les erreurs globales du formulaire #}
        {% if not form.vars.valid %}
            <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
                <div class=\"flex items-start\">
                    <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <div>
                        <p class=\"text-sm font-medium text-red-800\">Veuillez corriger les erreurs ci-dessous</p>
                        <div class=\"mt-1 text-sm text-red-700\">
                            {{ form_errors(form) }}
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- État -->
            <div>
                {{ form_label(form.etat, 'État *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                {{ form_widget(form.etat, {'attr': {
                    'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                    (form.etat.vars.errors|length ? 'border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50' : 'border-gray-300')
                }}) }}
                {% if form.etat.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.etat.vars.errors %}
                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>{{ error.message }}</span>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- Type de suivi -->
            <div>
                {{ form_label(form.type, 'Type de suivi *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                {{ form_widget(form.type, {'attr': {
                    'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                    (form.type.vars.errors|length ? 'border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50' : 'border-gray-300')
                }}) }}
                {% if form.type.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.type.vars.errors %}
                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>{{ error.message }}</span>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- Consultation -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.consultation, 'Consultation associée *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                {{ form_widget(form.consultation, {'attr': {
                    'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                    (form.consultation.vars.errors|length ? 'border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50' : 'border-gray-300')
                }}) }}
                {% if form.consultation.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.consultation.vars.errors %}
                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>{{ error.message }}</span>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- Date et heure -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.prochaineVisite, 'Date et heure de la prochaine visite *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                {{ form_widget(form.prochaineVisite, {'attr': {
                    'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                    (form.prochaineVisite.vars.errors|length ? 'border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50' : 'border-gray-300')
                }}) }}
                {% if form.prochaineVisite.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.prochaineVisite.vars.errors %}
                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>{{ error.message }}</span>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
            
            <!-- Recommandation -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.recommandation, 'Recommandation *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
                {{ form_widget(form.recommandation, {'attr': {
                    'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                    (form.recommandation.vars.errors|length ? 'border-red-500 focus:ring-red-500 focus:border-red-500 bg-red-50' : 'border-gray-300'),
                    'rows': 5,
                    'placeholder': 'Recommandations et observations...'
                }}) }}
                {% if form.recommandation.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.recommandation.vars.errors %}
                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>{{ error.message }}</span>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"{{ path('app_suivi_index') }}\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors\">
                Annuler
            </a>
            <button type=\"submit\" class=\"px-6 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-paw-orange focus:ring-offset-2\">
                Enregistrer les modifications
            </button>
        </div>
        
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}", "suivi/edit.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\suivi\\edit.html.twig");
    }
}
