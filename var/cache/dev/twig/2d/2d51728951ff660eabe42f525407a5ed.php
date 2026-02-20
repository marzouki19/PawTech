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
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "valid", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "        <div class=\"mb-6 p-4 bg-red-50 border border-red-200 rounded-lg\">
            <div class=\"flex items-start\">
                <svg class=\"w-5 h-5 text-red-600 mt-0.5 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />
                </svg>
                <div>
                    <p class=\"text-sm font-medium text-red-800\">Please correct the errors below</p>
                    <div class=\"mt-1 text-sm text-red-700\">
                        ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 23
        yield "    
    ";
        // line 25
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6", "novalidate" => "novalidate", "data-turbo" => "false"]]);
        yield "
    
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
            ";
        // line 29
        yield "            <div>
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Date and Time *"]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 32
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 35
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 39), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                    </div>
                ";
        }
        // line 44
        yield "            </div>
            
            ";
        // line 47
        yield "            <div>
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Type *"]);
        yield "
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 50
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 53
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 57), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                    </div>
                ";
        }
        // line 62
        yield "            </div>
            
            ";
        // line 65
        yield "            <div>
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "chien", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "chien", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "errors", [], "any", false, false, false, 66))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Dog *"]);
        yield "
                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "chien", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "chien", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 68
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "chien", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "errors", [], "any", false, false, false, 68))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "chien", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 71
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 75), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                    </div>
                ";
        }
        // line 80
        yield "            </div>
            
            ";
        // line 83
        yield "            <div>
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "User *"]);
        yield "
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300")))]]);
        yield "
                ";
        // line 86
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "                    <div class=\"mt-2 text-sm text-red-600\">
                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "errors", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                yield "                            <div class=\"flex items-start mt-1\">
                                <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                    <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                                </svg>
                                <span>";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 93), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                    </div>
                ";
        }
        // line 98
        yield "            </div>
        </div>
        
        ";
        // line 102
        yield "        <div>
            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "diagnostic", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "diagnostic", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Diagnostic *"]);
        yield "
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "diagnostic", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "diagnostic", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 4]]);
        yield "
            ";
        // line 105
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "diagnostic", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "errors", [], "any", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "diagnostic", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "errors", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 108
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 112), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "                </div>
            ";
        }
        // line 117
        yield "        </div>
        
        ";
        // line 120
        yield "        <div>
            ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "traitement", [], "any", false, false, false, 121), 'label', ["label_attr" => ["class" => ("block text-sm font-medium text-gray-700 mb-1 " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "traitement", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "errors", [], "any", false, false, false, 121))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-red-600") : ("text-gray-700")))], "label" => "Treatment (Optional)"]);
        yield "
            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "traitement", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => ("w-full px-3 py-2 border rounded-md shadow-sm focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none transition " . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "traitement", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "errors", [], "any", false, false, false, 122))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-red-500 focus:border-red-500 focus:ring-red-500 bg-red-50") : ("border-gray-300"))), "rows" => 4]]);
        yield "
            ";
        // line 123
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "traitement", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "errors", [], "any", false, false, false, 123))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "                <div class=\"mt-2 text-sm text-red-600\">
                    ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "traitement", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "errors", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 126
                yield "                        <div class=\"flex items-start mt-1\">
                            <svg class=\"w-4 h-4 mt-0.5 mr-1 flex-shrink-0\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                                <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z\" clip-rule=\"evenodd\"/>
                            </svg>
                            <span>";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 130), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "                </div>
            ";
        }
        // line 135
        yield "        </div>
        
        <div class=\"pt-6 flex justify-end gap-3 border-t border-gray-200\">
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        yield "\" class=\"px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 font-medium\">
                Cancel
            </a>
            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "save", [], "any", false, false, false, 141), 'widget');
        yield "
        </div>
        
    ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
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
        return array (  385 => 144,  379 => 141,  373 => 138,  368 => 135,  364 => 133,  355 => 130,  349 => 126,  345 => 125,  342 => 124,  340 => 123,  336 => 122,  332 => 121,  329 => 120,  325 => 117,  321 => 115,  312 => 112,  306 => 108,  302 => 107,  299 => 106,  297 => 105,  293 => 104,  289 => 103,  286 => 102,  281 => 98,  277 => 96,  268 => 93,  262 => 89,  258 => 88,  255 => 87,  253 => 86,  249 => 85,  245 => 84,  242 => 83,  238 => 80,  234 => 78,  225 => 75,  219 => 71,  215 => 70,  212 => 69,  210 => 68,  206 => 67,  202 => 66,  199 => 65,  195 => 62,  191 => 60,  182 => 57,  176 => 53,  172 => 52,  169 => 51,  167 => 50,  163 => 49,  159 => 48,  156 => 47,  152 => 44,  148 => 42,  139 => 39,  133 => 35,  129 => 34,  126 => 33,  124 => 32,  120 => 31,  116 => 30,  113 => 29,  106 => 25,  103 => 23,  94 => 17,  84 => 9,  81 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"bg-white rounded-xl shadow p-6 max-w-4xl mx-auto\">
    <h2 class=\"text-2xl font-bold text-gray-800 mb-6\">Add New Consultation</h2>
    
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
{% endblock %}
", "consultation/new.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\consultation\\new.html.twig");
    }
}
