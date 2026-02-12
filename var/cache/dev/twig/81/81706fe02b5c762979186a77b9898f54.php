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

/* suivi/new.html.twig */
class __TwigTemplate_743013a14eb8c91570e6c9b68f4ff8c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/new.html.twig"));

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
        yield "<div class=\"bg-white rounded-xl shadow p-6 max-w-2xl mx-auto\">
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Add New Follow-Up</h2>
    
    ";
        // line 8
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "data-turbo" => "false"]]);
        // line 12
        yield "
    
    ";
        // line 15
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "        <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
            <div class=\"flex items-start\">
                <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <div>
                    <p class=\"text-sm font-medium text-red-800\">Please correct the errors below</p>
                    <div class=\"mt-1 text-sm text-red-700\">
                        ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 30
        yield "    
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <!-- État -->
            <div>
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "État *"]);
        // line 39
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "etat", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "etat", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 45
        yield "
                ";
        // line 46
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "etat", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "etat", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 49
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 53), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                    </div>
                ";
        }
        // line 58
        yield "            </div>
            
            <!-- Type de suivi -->
            <div>
                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Type de suivi *"]);
        // line 67
        yield "
                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 71
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
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
            
            <!-- Date et heure -->
            <div class=\"md:col-span-2\">
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 93
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Date et heure de la prochaine visite"]);
        // line 95
        yield "
                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 99
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "errors", [], "any", false, false, false, 99))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 101
        yield "
                ";
        // line 102
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "errors", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 105
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 109), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                    </div>
                ";
        }
        // line 114
        yield "            </div>
            
            <!-- Consultation -->
            <div class=\"md:col-span-2\">
                ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "consultation", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "consultation", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Consultation associée *"]);
        // line 123
        yield "
                ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "consultation", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 127
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "consultation", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        // line 129
        yield "
                ";
        // line 130
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "consultation", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "errors", [], "any", false, false, false, 130))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "consultation", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "errors", [], "any", false, false, false, 132));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 133
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 137), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                    </div>
                ";
        }
        // line 142
        yield "            </div>
            
            <!-- Recommandation -->
            <div class=\"md:col-span-2\">
                ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "recommandation", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 149
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "recommandation", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "errors", [], "any", false, false, false, 149))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Recommandation *"]);
        // line 151
        yield "
                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "recommandation", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 155
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "recommandation", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "errors", [], "any", false, false, false, 155))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 5, "placeholder" => "Recommandations et observations..."]]);
        // line 159
        yield "
                ";
        // line 160
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "recommandation", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "errors", [], "any", false, false, false, 160))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "recommandation", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "errors", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 163
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 167), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            yield "                    </div>
                ";
        }
        // line 172
        yield "            </div>
        </div>
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
        yield "\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors\">
                Cancel
            </a>
            <button type=\"submit\" class=\"px-6 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-paw-orange focus:ring-offset-2\">
                Add Follow-Up
            </button>
        </div>
        
    ";
        // line 184
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), 'form_end');
        yield "
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
        return "suivi/new.html.twig";
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
        return array (  357 => 184,  346 => 176,  340 => 172,  336 => 170,  327 => 167,  321 => 163,  317 => 162,  314 => 161,  312 => 160,  309 => 159,  307 => 155,  306 => 152,  303 => 151,  301 => 149,  300 => 146,  294 => 142,  290 => 140,  281 => 137,  275 => 133,  271 => 132,  268 => 131,  266 => 130,  263 => 129,  261 => 127,  260 => 124,  257 => 123,  255 => 121,  254 => 118,  248 => 114,  244 => 112,  235 => 109,  229 => 105,  225 => 104,  222 => 103,  220 => 102,  217 => 101,  215 => 99,  214 => 96,  211 => 95,  209 => 93,  208 => 90,  202 => 86,  198 => 84,  189 => 81,  183 => 77,  179 => 76,  176 => 75,  174 => 74,  171 => 73,  169 => 71,  168 => 68,  165 => 67,  163 => 65,  162 => 62,  156 => 58,  152 => 56,  143 => 53,  137 => 49,  133 => 48,  130 => 47,  128 => 46,  125 => 45,  123 => 43,  122 => 40,  119 => 39,  117 => 37,  116 => 34,  110 => 30,  101 => 24,  91 => 16,  88 => 15,  84 => 12,  81 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"bg-white rounded-xl shadow p-6 max-w-2xl mx-auto\">
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Add New Follow-Up</h2>
    
    {# DÉSACTIVATION TURBO ET VALIDATION HTML5 #}
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
                    <p class=\"text-sm font-medium text-red-800\">Please correct the errors below</p>
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
                {{ form_label(form.etat, 'État *', {
                    'label_attr': {
                        'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ 
                        (form.etat.vars.errors|length ? 'text-red-600' : 'text-gray-700')
                    }
                }) }}
                {{ form_widget(form.etat, {
                    'attr': {
                        'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                        (form.etat.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')
                    }
                }) }}
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
                {{ form_label(form.type, 'Type de suivi *', {
                    'label_attr': {
                        'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ 
                        (form.type.vars.errors|length ? 'text-red-600' : 'text-gray-700')
                    }
                }) }}
                {{ form_widget(form.type, {
                    'attr': {
                        'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                        (form.type.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')
                    }
                }) }}
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
            
            <!-- Date et heure -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.prochaineVisite, 'Date et heure de la prochaine visite', {
                    'label_attr': {
                        'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ 
                        (form.prochaineVisite.vars.errors|length ? 'text-red-600' : 'text-gray-700')
                    }
                }) }}
                {{ form_widget(form.prochaineVisite, {
                    'attr': {
                        'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                        (form.prochaineVisite.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')
                    }
                }) }}
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
            
            <!-- Consultation -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.consultation, 'Consultation associée *', {
                    'label_attr': {
                        'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ 
                        (form.consultation.vars.errors|length ? 'text-red-600' : 'text-gray-700')
                    }
                }) }}
                {{ form_widget(form.consultation, {
                    'attr': {
                        'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                        (form.consultation.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')
                    }
                }) }}
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
            
            <!-- Recommandation -->
            <div class=\"md:col-span-2\">
                {{ form_label(form.recommandation, 'Recommandation *', {
                    'label_attr': {
                        'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ 
                        (form.recommandation.vars.errors|length ? 'text-red-600' : 'text-gray-700')
                    }
                }) }}
                {{ form_widget(form.recommandation, {
                    'attr': {
                        'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ 
                        (form.recommandation.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300'),
                        'rows': 5,
                        'placeholder': 'Recommandations et observations...'
                    }
                }) }}
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
                Cancel
            </a>
            <button type=\"submit\" class=\"px-6 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-paw-orange focus:ring-offset-2\">
                Add Follow-Up
            </button>
        </div>
        
    {{ form_end(form) }}
</div>
{% endblock %}", "suivi/new.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\suivi\\new.html.twig");
    }
}
