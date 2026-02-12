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

/* consultation/edit.html.twig */
class __TwigTemplate_9c46f9cfefeda1085fbe7c0d213b5dad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/edit.html.twig"));

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

        yield "Modifier Consultation | PawTech";
        
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
        yield "<div class=\"max-w-4xl mx-auto\">
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-900\">Modifier Consultation</h1>
        <p class=\"text-gray-600 mt-2\">Mettez à jour les informations de la consultation</p>
    </div>

    <div class=\"bg-white rounded-xl shadow-md p-6\">
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "
        
        ";
        // line 16
        yield "        ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "valid", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "            <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
                <div class=\"flex items-start\">
                    <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                    </svg>
                    <div>
                        <p class=\"text-sm font-medium text-red-800\">Please correct the errors below</p>
                        <div class=\"mt-1 text-sm text-red-700\">
                            ";
            // line 25
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'errors');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 31
        yield "        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div>
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Date et heure *"]);
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 36
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "date", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "errors", [], "any", false, false, false, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "date", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 39
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                    </div>
                ";
        }
        // line 48
        yield "            </div>
            
            <div>
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Type *"]);
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 53
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
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
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div>
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "chien", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "chien", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Dog *"]);
        yield "
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "chien", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "chien", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 72
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "chien", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "chien", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 75
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 79), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                    </div>
                ";
        }
        // line 84
        yield "            </div>
            
            <div>
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "User *"]);
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 89
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 92
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 96), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                    </div>
                ";
        }
        // line 101
        yield "            </div>
        </div>
        
        <div>
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "diagnostic", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "diagnostic", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "errors", [], "any", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Diagnostic *"]);
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "diagnostic", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "diagnostic", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "errors", [], "any", false, false, false, 106))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
            ";
        // line 107
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "diagnostic", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "diagnostic", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "errors", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 110
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 114), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "                </div>
            ";
        }
        // line 119
        yield "        </div>
        
        <div>
            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "traitement", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-2 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "traitement", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "errors", [], "any", false, false, false, 122))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Traitement"]);
        yield "
            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "traitement", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => ("w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "traitement", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "errors", [], "any", false, false, false, 123))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
            ";
        // line 124
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "traitement", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "errors", [], "any", false, false, false, 124))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "traitement", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 127
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 131), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "                </div>
            ";
        }
        // line 136
        yield "        </div>
        
        <div class=\"pt-6 flex justify-end gap-4 border-t border-gray-200\">
            <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        yield "\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition\">
                Annuler
            </a>
            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "save", [], "any", false, false, false, 142), 'widget', ["label" => "Enregistrer les modifications"]);
        yield "
        </div>
        
        ";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
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
        return "consultation/edit.html.twig";
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
        return array (  402 => 145,  396 => 142,  390 => 139,  385 => 136,  381 => 134,  372 => 131,  366 => 127,  362 => 126,  359 => 125,  357 => 124,  353 => 123,  349 => 122,  344 => 119,  340 => 117,  331 => 114,  325 => 110,  321 => 109,  318 => 108,  316 => 107,  312 => 106,  308 => 105,  302 => 101,  298 => 99,  289 => 96,  283 => 92,  279 => 91,  276 => 90,  274 => 89,  270 => 88,  266 => 87,  261 => 84,  257 => 82,  248 => 79,  242 => 75,  238 => 74,  235 => 73,  233 => 72,  229 => 71,  225 => 70,  218 => 65,  214 => 63,  205 => 60,  199 => 56,  195 => 55,  192 => 54,  190 => 53,  186 => 52,  182 => 51,  177 => 48,  173 => 46,  164 => 43,  158 => 39,  154 => 38,  151 => 37,  149 => 36,  145 => 35,  141 => 34,  136 => 31,  127 => 25,  117 => 17,  114 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Modifier Consultation | PawTech{% endblock %}

{% block main %}
<div class=\"max-w-4xl mx-auto\">
    <div class=\"mb-8\">
        <h1 class=\"text-3xl font-bold text-gray-900\">Modifier Consultation</h1>
        <p class=\"text-gray-600 mt-2\">Mettez à jour les informations de la consultation</p>
    </div>

    <div class=\"bg-white rounded-xl shadow-md p-6\">
        {{ form_start(form, {'attr': {'class': 'space-y-6', 'novalidate': 'novalidate', 'data-turbo': 'false'}}) }}
        
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
            <div>
                {{ form_label(form.date, 'Date et heure *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.date.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.date, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.date.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
                {% if form.date.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.date.vars.errors %}
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
            
            <div>
                {{ form_label(form.type, 'Type *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.type.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.type, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.type.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
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
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            <div>
                {{ form_label(form.chien, 'Dog *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.chien.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.chien, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.chien.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
                {% if form.chien.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.chien.vars.errors %}
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
            
            <div>
                {{ form_label(form.user, 'User *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.user.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.user, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.user.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
                {% if form.user.vars.errors|length %}
                    <div class=\"mt-2 text-sm text-red-600\">
                        {% for error in form.user.vars.errors %}
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
        
        <div>
            {{ form_label(form.diagnostic, 'Diagnostic *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.diagnostic.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
            {{ form_widget(form.diagnostic, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.diagnostic.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
            {% if form.diagnostic.vars.errors|length %}
                <div class=\"mt-2 text-sm text-red-600\">
                    {% for error in form.diagnostic.vars.errors %}
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
        
        <div>
            {{ form_label(form.traitement, 'Traitement', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2 ' ~ (form.traitement.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
            {{ form_widget(form.traitement, {'attr': {'class': 'w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition' ~ (form.traitement.vars.errors|length ? ' border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
            {% if form.traitement.vars.errors|length %}
                <div class=\"mt-2 text-sm text-red-600\">
                    {% for error in form.traitement.vars.errors %}
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
        
        <div class=\"pt-6 flex justify-end gap-4 border-t border-gray-200\">
            <a href=\"{{ path('app_consultation_index') }}\" class=\"px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition\">
                Annuler
            </a>
            {{ form_widget(form.save, {'label': 'Enregistrer les modifications'}) }}
        </div>
        
        {{ form_end(form) }}
    </div>
</div>
{% endblock %}", "consultation/edit.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\consultation\\edit.html.twig");
    }
}
