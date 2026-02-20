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

/* consultation/new.html.twig */
class __TwigTemplate_231c8310f2b4a51396957b92d82b78b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

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
        yield "<div class=\"bg-white rounded-xl shadow p-6 max-w-4xl mx-auto\">
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Add New Consultation</h2>
    
    ";
        // line 8
        yield "    ";
        // line 9
        yield "    ";
        // line 10
        yield "    
    ";
        // line 12
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "        <div class=\"mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    
    ";
        // line 22
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "        <div class=\"mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    
    ";
        // line 32
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "        <div class=\"mb-6 p-4 bg-yellow-50 border border-yellow-200 text-yellow-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>";
            // line 37
            yield $context["message"];
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "    
    ";
        // line 42
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "flashes", ["info"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 43
            yield "        <div class=\"mb-6 p-4 bg-blue-50 border border-blue-200 text-blue-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    
    ";
        // line 52
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "valid", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "        <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
            <div class=\"flex items-start\">
                <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <div>
                    <p class=\"text-sm font-medium text-red-800\">Please correct the errors below</p>
                    <div class=\"mt-1 text-sm text-red-700\">
                        ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'errors');
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 67
        yield "    
    ";
        // line 69
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "
    
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            ";
        // line 73
        yield "            <div>
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "date", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Date and Time *"]);
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 76
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "errors", [], "any", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 79
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 83), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                    </div>
                ";
        }
        // line 88
        yield "            </div>
            
            ";
        // line 91
        yield "            <div>
                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "errors", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Type *"]);
        yield "
                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 94
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "type", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "type", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 101), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "                    </div>
                ";
        }
        // line 106
        yield "            </div>
            
            ";
        // line 109
        yield "            <div>
                ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "chien", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "chien", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "errors", [], "any", false, false, false, 110))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Dog *"]);
        yield "
                ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "chien", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "chien", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "errors", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 112
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "chien", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "errors", [], "any", false, false, false, 112))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 113
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "chien", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 115
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 119), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                    </div>
                ";
        }
        // line 124
        yield "            </div>
            
            ";
        // line 127
        yield "            <div>
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "User *"]);
        yield "
                ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 130
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "errors", [], "any", false, false, false, 130))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "errors", [], "any", false, false, false, 132));
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
        </div>
        
        ";
        // line 146
        yield "        <div>
            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "diagnostic", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "diagnostic", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "errors", [], "any", false, false, false, 147))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Diagnostic *"]);
        yield "
            ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "diagnostic", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "diagnostic", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "errors", [], "any", false, false, false, 148))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 4]]);
        yield "
            ";
        // line 149
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "diagnostic", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "errors", [], "any", false, false, false, 149))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "diagnostic", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "errors", [], "any", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 152
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 156), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "                </div>
            ";
        }
        // line 161
        yield "        </div>
        
        ";
        // line 164
        yield "        <div>
            ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "traitement", [], "any", false, false, false, 165), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "traitement", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "errors", [], "any", false, false, false, 165))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Treatment (Optional)"]);
        yield "
            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "traitement", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "traitement", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 4]]);
        yield "
            ";
        // line 167
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "traitement", [], "any", false, false, false, 167), "vars", [], "any", false, false, false, 167), "errors", [], "any", false, false, false, 167))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "traitement", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169), "errors", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 170
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 174), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            yield "                </div>
            ";
        }
        // line 179
        yield "        </div>
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        yield "\" class=\"px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium\">
                Cancel
            </a>
            ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "save", [], "any", false, false, false, 185), 'widget');
        yield "
        </div>
        
    ";
        // line 188
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), 'form_end');
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
        return "consultation/new.html.twig";
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
        return array (  484 => 188,  478 => 185,  472 => 182,  467 => 179,  463 => 177,  454 => 174,  448 => 170,  444 => 169,  441 => 168,  439 => 167,  435 => 166,  431 => 165,  428 => 164,  424 => 161,  420 => 159,  411 => 156,  405 => 152,  401 => 151,  398 => 150,  396 => 149,  392 => 148,  388 => 147,  385 => 146,  380 => 142,  376 => 140,  367 => 137,  361 => 133,  357 => 132,  354 => 131,  352 => 130,  348 => 129,  344 => 128,  341 => 127,  337 => 124,  333 => 122,  324 => 119,  318 => 115,  314 => 114,  311 => 113,  309 => 112,  305 => 111,  301 => 110,  298 => 109,  294 => 106,  290 => 104,  281 => 101,  275 => 97,  271 => 96,  268 => 95,  266 => 94,  262 => 93,  258 => 92,  255 => 91,  251 => 88,  247 => 86,  238 => 83,  232 => 79,  228 => 78,  225 => 77,  223 => 76,  219 => 75,  215 => 74,  212 => 73,  205 => 69,  202 => 67,  193 => 61,  183 => 53,  180 => 52,  177 => 50,  168 => 47,  162 => 43,  157 => 42,  154 => 40,  145 => 37,  139 => 33,  134 => 32,  131 => 30,  122 => 27,  116 => 23,  111 => 22,  108 => 20,  99 => 17,  93 => 13,  88 => 12,  85 => 10,  83 => 9,  81 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"bg-white rounded-xl shadow p-6 max-w-4xl mx-auto\">
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Add New Consultation</h2>
    
    {# =========================================== #}
    {# AFFICHAGE DES MESSAGES FLASH - CORRIGÉ #}
    {# =========================================== #}
    
    {# Messages d'erreur #}
    {% for message in app.flashes('error') %}
        <div class=\"mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>{{ message }}</span>
        </div>
    {% endfor %}
    
    {# Messages de succès #}
    {% for message in app.flashes('success') %}
        <div class=\"mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>{{ message }}</span>
        </div>
    {% endfor %}
    
    {# Messages d'avertissement #}
    {% for message in app.flashes('warning') %}
        <div class=\"mb-6 p-4 bg-yellow-50 border border-yellow-200 text-yellow-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>{{ message|raw }}</span>
        </div>
    {% endfor %}
    
    {# Messages d'information #}
    {% for message in app.flashes('info') %}
        <div class=\"mb-6 p-4 bg-blue-50 border border-blue-200 text-blue-700 rounded-lg flex items-center shadow-sm\">
            <svg class=\"w-5 h-5 mr-2 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"/>
            </svg>
            <span>{{ message }}</span>
        </div>
    {% endfor %}
    
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
    
    {# Formulaire #}
    {{ form_start(form, {'attr': {'class': 'space-y-6', 'novalidate': 'novalidate', 'data-turbo': 'false'}}) }}
    
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            {# Date et heure #}
            <div>
                {{ form_label(form.date, 'Date and Time *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.date.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.date, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.date.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
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
            
            {# Type #}
            <div>
                {{ form_label(form.type, 'Type *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.type.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.type, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.type.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
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
            
            {# Chien #}
            <div>
                {{ form_label(form.chien, 'Dog *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.chien.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.chien, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.chien.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
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
            
            {# User #}
            <div>
                {{ form_label(form.user, 'User *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.user.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
                {{ form_widget(form.user, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.user.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300')}}) }}
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
        
        {# Diagnostic #}
        <div>
            {{ form_label(form.diagnostic, 'Diagnostic *', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.diagnostic.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
            {{ form_widget(form.diagnostic, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.diagnostic.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300'), 'rows': 4}}) }}
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
        
        {# Traitement #}
        <div>
            {{ form_label(form.traitement, 'Treatment (Optional)', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1 ' ~ (form.traitement.vars.errors|length ? 'text-red-600' : 'text-gray-700')}}) }}
            {{ form_widget(form.traitement, {'attr': {'class': 'w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition ' ~ (form.traitement.vars.errors|length ? 'border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50' : 'border-gray-300'), 'rows': 4}}) }}
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
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"{{ path('app_consultation_index') }}\" class=\"px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium\">
                Cancel
            </a>
            {{ form_widget(form.save) }}
        </div>
        
    {{ form_end(form) }}
</div>
{% endblock %}", "consultation/new.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\consultation\\new.html.twig");
    }
}
