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

/* suivi/consultation_detail.html.twig */
class __TwigTemplate_6982625e1d6493c073fd5c37a71ab8f4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/consultation_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/consultation_detail.html.twig"));

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
        yield "<div class=\"space-y-6\">
    <!-- Header -->
    <div class=\"flex items-center justify-between\">
        <div>
            <h1 class=\"text-2xl font-bold text-gray-900\">Consultation Detail</h1>
            <p class=\"text-gray-600\">Medical analysis and 3D anatomy view for ";
        // line 9
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 9, $this->source); })()), "dog", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 9, $this->source); })()), "dog", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true)) : ("Unknown Dog"));
        yield "</p>
        </div>
        <div class=\"flex items-center gap-2\">
            <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_export_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 10v6m0 0l-3-3m3 3l3-3M4 17a4 4 0 004 4h8a4 4 0 004-4M4 7a4 4 0 014-4h8a4 4 0 014 4\"/>
                </svg>
                Export PDF
            </a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
        yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Back to Follow-ups
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <!-- Left Column - Consultation Info -->
        <div class=\"space-y-6\">
            <!-- Consultation Details Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Consultation Information</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">ID:</span>
                        <span class=\"font-medium\">#";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Date:</span>
                        <span class=\"font-medium\">";
        // line 40
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 40, $this->source); })()), "date", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 40, $this->source); })()), "date", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Type:</span>
                        <span class=\"font-medium\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Dog:</span>
                        <span class=\"font-medium\">";
        // line 48
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 48, $this->source); })()), "dog", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 48, $this->source); })()), "dog", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true)) : ("N/A"));
        yield "</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Veterinarian:</span>
                        <span class=\"font-medium\">";
        // line 52
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "fullName", [], "any", false, false, false, 52), "html", null, true)) : ("N/A"));
        yield "</span>
                    </div>
                </div>
            </div>

            <!-- Diagnostic & Treatment Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Diagnostic & Treatment</h2>
                <div class=\"space-y-4\">
                    <div>
                        <h3 class=\"text-sm font-medium text-gray-500 mb-2\">Diagnostic</h3>
                        <p class=\"text-gray-900 font-medium\" id=\"diagnostic-text\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 63, $this->source); })()), "diagnostic", [], "any", false, false, false, 63), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <h3 class=\"text-sm font-medium text-gray-500 mb-2\">Treatment</h3>
                        <p class=\"text-gray-900\">";
        // line 67
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 67, $this->source); })()), "traitement", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 67, $this->source); })()), "traitement", [], "any", false, false, false, 67), "html", null, true)) : ("Not specified"));
        yield "</p>
                    </div>
                </div>
                
                <!-- Auto-detected Organ -->
                <div id=\"detected-organ-container\" class=\"mt-4 p-3 ";
        // line 72
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "bg-green-50 border-green-200";
        } else {
            yield "bg-yellow-50 border-yellow-200";
        }
        yield " border rounded-lg\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 ";
        // line 74
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-green-600";
        } else {
            yield "text-yellow-600";
        }
        yield "\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                        </svg>
                        <span class=\"text-sm font-medium ";
        // line 77
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-green-800";
        } else {
            yield "text-yellow-800";
        }
        yield "\">
                            ";
        // line 78
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                                Organ detected from diagnostic:
                            ";
        } else {
            // line 81
            yield "                                No specific organ detected in diagnostic:
                            ";
        }
        // line 83
        yield "                        </span>
                        <span class=\"font-bold ";
        // line 84
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-green-800";
        } else {
            yield "text-yellow-800";
        }
        yield "\">
                            ";
        // line 85
        yield (((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85), "html", null, true)) : ("None"));
        yield "
                        </span>
                        ";
        // line 87
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                            <span class=\"";
            if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-green-200 text-green-800";
            } else {
                yield "bg-yellow-200 text-yellow-800";
            }
            yield " px-2 py-0.5 rounded-full text-xs\">
                                #";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 89, $this->source); })()), "number", [], "any", false, false, false, 89), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 92
        yield "                    </div>
                </div>
            </div>

            <!-- Follow-up Info Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Follow-up Information</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Status:</span>
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                            ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 103, $this->source); })()), "etat", [], "any", false, false, false, 103) == "Planifié")) {
            yield "bg-yellow-100 text-yellow-800
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 104, $this->source); })()), "etat", [], "any", false, false, false, 104) == "En cours")) {
            yield "bg-blue-100 text-blue-800
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 105, $this->source); })()), "etat", [], "any", false, false, false, 105) == "Terminé")) {
            yield "bg-green-100 text-green-800
                            ";
        } else {
            // line 106
            yield "bg-gray-100 text-gray-800";
        }
        yield "\">
                            ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 107, $this->source); })()), "etat", [], "any", false, false, false, 107), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Type:</span>
                        <span class=\"font-medium\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Next Visit:</span>
                        <span class=\"font-medium text-blue-600\">";
        // line 116
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 116, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 116, $this->source); })()), "prochaineVisite", [], "any", false, false, false, 116), "d/m/Y H:i"), "html", null, true)) : ("Not scheduled"));
        yield "</span>
                    </div>
                    ";
        // line 118
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 118, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Emergency Level:</span>
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 121, $this->source); })()), "emergencyLevelClass", [], "any", false, false, false, 121), "html", null, true);
            yield "\">
                            ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 122, $this->source); })()), "emergencyLevelDisplay", [], "any", false, false, false, 122), "html", null, true);
            yield "
                        </span>
                    </div>
                    ";
        }
        // line 126
        yield "                </div>
            </div>
        </div>

        <!-- Right Column - 3D Anatomy Model -->
        <div class=\"space-y-6\">
            <!-- 3D Anatomy Model Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">3D Dog Anatomy Model</h2>
                <p class=\"text-sm text-gray-600 mb-4\">The affected organ from the diagnostic is automatically selected</p>
                
                <!-- Embedded 3D Dog Anatomy Model from Sketchfab -->
                <div class=\"relative bg-gradient-to-b from-blue-50 to-white rounded-lg p-2\" id=\"anatomy-container\">
                    <div id=\"anatomy-loading\" class=\"absolute inset-0 flex items-center justify-center bg-white rounded-lg z-10\">
                        <div class=\"text-center\">
                            <div class=\"animate-spin rounded-full h-12 w-12 border-b-2 border-paw-orange mx-auto mb-4\"></div>
                            <p class=\"text-gray-600\">Loading 3D Anatomy Model...</p>
                        </div>
                    </div>
                    
                    <div class=\"sketchfab-embed-wrapper\">
                        <iframe 
                            id=\"anatomy-iframe\"
                            title=\"Bone structure and internal organs of a dog\" 
                            frameborder=\"0\" 
                            allowfullscreen 
                            mozallowfullscreen=\"true\" 
                            webkitallowfullscreen=\"true\" 
                            allow=\"autoplay; fullscreen; xr-spatial-tracking\" 
                            xr-spatial-tracking 
                            execution-while-out-of-viewport 
                            execution-while-not-rendered 
                            web-share 
                            src=\"https://sketchfab.com/models/7587ebe24ee2464f982154ed610f7e56/embed\"
                            onload=\"hideLoading()\"
                            style=\"border-radius: 8px; width: 100%; height: 500px;\">
                        </iframe>
                    </div>
                </div>
                
                <!-- Organ Buttons (8 organes) -->
                <div class=\"mt-4 p-4 bg-gray-50 rounded-lg\">
                    <h3 class=\"text-sm font-medium text-gray-700 mb-3\">Organ Reference:</h3>
                    
                    <div class=\"grid grid-cols-4 gap-3\" id=\"organ-buttons-container\">
                        <!-- 1. Brain -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 172
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 172, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 172, $this->source); })()), "number", [], "any", false, false, false, 172) == 1))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"1\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 173
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 173, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 173, $this->source); })()), "number", [], "any", false, false, false, 173) == 1))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">1</span>
                            <span class=\"text-xs font-medium mt-1\">Brain</span>
                        </div>
                        
                        <!-- 2. Lungs -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 178
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 178, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 178, $this->source); })()), "number", [], "any", false, false, false, 178) == 2))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"2\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 179
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 179, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 179, $this->source); })()), "number", [], "any", false, false, false, 179) == 2))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">2</span>
                            <span class=\"text-xs font-medium mt-1\">Lungs</span>
                        </div>
                        
                        <!-- 3. Heart -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 184
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 184, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 184, $this->source); })()), "number", [], "any", false, false, false, 184) == 3))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"3\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 185
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 185, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 185, $this->source); })()), "number", [], "any", false, false, false, 185) == 3))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">3</span>
                            <span class=\"text-xs font-medium mt-1\">Heart</span>
                        </div>
                        
                        <!-- 4. Liver -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 190
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 190, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 190, $this->source); })()), "number", [], "any", false, false, false, 190) == 4))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"4\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 191
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 191, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 191, $this->source); })()), "number", [], "any", false, false, false, 191) == 4))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">4</span>
                            <span class=\"text-xs font-medium mt-1\">Liver</span>
                        </div>
                        
                        <!-- 5. Stomach -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 196
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 196, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 196, $this->source); })()), "number", [], "any", false, false, false, 196) == 5))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"5\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 197
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 197, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 197, $this->source); })()), "number", [], "any", false, false, false, 197) == 5))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">5</span>
                            <span class=\"text-xs font-medium mt-1\">Stomach</span>
                        </div>
                        
                        <!-- 6. Guts -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 202
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 202, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 202, $this->source); })()), "number", [], "any", false, false, false, 202) == 6))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"6\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 203
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 203, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 203, $this->source); })()), "number", [], "any", false, false, false, 203) == 6))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">6</span>
                            <span class=\"text-xs font-medium mt-1\">Guts</span>
                        </div>
                        
                        <!-- 7. Kidney -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 208
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 208, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 208, $this->source); })()), "number", [], "any", false, false, false, 208) == 7))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"7\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 209
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 209, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 209, $this->source); })()), "number", [], "any", false, false, false, 209) == 7))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">7</span>
                            <span class=\"text-xs font-medium mt-1\">Kidney</span>
                        </div>
                        
                        <!-- 8. Urinary bladder -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 ";
        // line 214
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 214, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 214, $this->source); })()), "number", [], "any", false, false, false, 214) == 8))) {
            yield "bg-green-50 ring-2 ring-green-500";
        } else {
            yield "bg-white";
        }
        yield " rounded-lg border border-gray-200 transition-all\" data-number=\"8\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 ";
        // line 215
        if (((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 215, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 215, $this->source); })()), "number", [], "any", false, false, false, 215) == 8))) {
            yield "bg-green-600";
        } else {
            yield "bg-gray-400";
        }
        yield " text-white rounded-full text-xs flex items-center justify-center font-bold\">8</span>
                            <span class=\"text-xs font-medium mt-1\">Bladder</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Analysis Section -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">AI-Powered Analysis</h2>
                
                <!-- Selected Organ Display -->
                <div id=\"selected-organ-display\" class=\"mb-3 p-3 ";
        // line 227
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 227, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "bg-paw-orange bg-opacity-10 border-paw-orange";
        } else {
            yield "bg-gray-100 border-gray-300";
        }
        yield " border rounded-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <span class=\"text-sm font-medium ";
        // line 230
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 230, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-paw-orange";
        } else {
            yield "text-gray-600";
        }
        yield "\">Organ for analysis:</span>
                            <span class=\"ml-2 font-bold ";
        // line 231
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 231, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-paw-orange";
        } else {
            yield "text-gray-600";
        }
        yield "\">
                                ";
        // line 232
        yield (((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 232, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 232, $this->source); })()), "name", [], "any", false, false, false, 232), "html", null, true)) : ("None detected"));
        yield "
                            </span>
                            ";
        // line 234
        if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 234, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                                <span class=\"ml-1 bg-paw-orange text-white px-2 py-0.5 rounded-full text-xs\">#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 235, $this->source); })()), "number", [], "any", false, false, false, 235), "html", null, true);
            yield "</span>
                            ";
        }
        // line 237
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Symptoms Input (vide au chargement) -->
                <div class=\"mb-4\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Describe Symptoms</label>
                    <textarea 
                        id=\"symptoms-input\" 
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange\"
                        rows=\"4\"
                        placeholder=\"Click 'Run  Analysis' to see common symptoms for this organ...\"
                    >";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saved_symptoms"]) || array_key_exists("saved_symptoms", $context) ? $context["saved_symptoms"] : (function () { throw new RuntimeError('Variable "saved_symptoms" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "</textarea>
                </div>
                
                <!-- Message d'erreur (caché par défaut) -->
                <div id=\"error-message\" class=\"mb-3 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm hidden\"></div>
                
                <!-- Analyze Button -->
                <button 
                    id=\"knn-analyze-btn\"
                    onclick=\"runKnnAnalysis()\"
                    class=\"w-full inline-flex items-center justify-center gap-2 px-4 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\"
                    ";
        // line 260
        if ((($tmp =  !(isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 260, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled style=\"opacity:50%; cursor:not-allowed;\"";
        }
        // line 261
        yield "                >
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1-3m1 3h6m-6 0H6m3-3V5a3 3 0 013-3h0a3 3 0 013 3v12m-6 0h6\"/>
                    </svg>
                    Run AI Analysis
                </button>

                <!-- Analysis Result -->
                <div id=\"analysis-result\" class=\"mt-4 ";
        // line 269
        if ((($tmp = (isset($context["has_saved_analysis"]) || array_key_exists("has_saved_analysis", $context) ? $context["has_saved_analysis"] : (function () { throw new RuntimeError('Variable "has_saved_analysis" does not exist.', 269, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
        } else {
            yield "hidden";
        }
        yield "\">
                    <!-- Emergency Level Badge -->
                    <div id=\"emergency-badge\" class=\"mb-4 p-4 rounded-lg border-2 text-center
                        ";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 272, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 272) == "critical")) {
            yield "bg-red-100 border-red-300
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 273
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 273, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 273) == "high")) {
            yield "bg-orange-100 border-orange-300
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 274
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 274, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 274) == "medium")) {
            yield "bg-yellow-100 border-yellow-300
                        ";
        } else {
            // line 275
            yield "bg-green-100 border-green-300";
        }
        yield "\">
                        <span id=\"emergency-level\" class=\"text-lg font-bold
                            ";
        // line 277
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 277, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 277) == "critical")) {
            yield "text-red-800
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 278
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 278, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 278) == "high")) {
            yield "text-orange-800
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 279
(isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 279, $this->source); })()), "emergencyLevel", [], "any", false, false, false, 279) == "medium")) {
            yield "text-yellow-800
                            ";
        } else {
            // line 280
            yield "text-green-800";
        }
        yield "\">
                            ";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 281, $this->source); })()), "emergencyLevelDisplay", [], "any", false, false, false, 281), "html", null, true);
        yield "
                        </span>
                    </div>
                    
                    <!-- Report -->
                    <div class=\"bg-gray-50 rounded-lg p-4\">
                        <h3 class=\"text-sm font-semibold text-gray-700 mb-2\">Medical Analysis Report</h3>
                        <pre id=\"report-content\" class=\"text-sm text-gray-700 whitespace-pre-wrap font-mono overflow-auto max-h-96\">";
        // line 288
        if ((($tmp = (isset($context["has_saved_analysis"]) || array_key_exists("has_saved_analysis", $context) ? $context["has_saved_analysis"] : (function () { throw new RuntimeError('Variable "has_saved_analysis" does not exist.', 288, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Analyzing: ";
            yield (((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 288, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 288, $this->source); })()), "name", [], "any", false, false, false, 288), "html", null, true)) : ("Unknown"));
            if ((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 288, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 288, $this->source); })()), "number", [], "any", false, false, false, 288), "html", null, true);
                yield ")";
            }
            // line 289
            yield "
";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["saved_analysis_report"]) || array_key_exists("saved_analysis_report", $context) ? $context["saved_analysis_report"] : (function () { throw new RuntimeError('Variable "saved_analysis_report" does not exist.', 290, $this->source); })()), "html", null, true);
        }
        yield "</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script de débogage -->
<script>
    (function() {
        console.log(\"=== DÉBOGAGE DÉTECTION ORGANE ===\");
        console.log(\"detected_organ (depuis Twig):\", ";
        // line 302
        yield (((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 302, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (json_encode((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 302, $this->source); })()))) : ("null"));
        yield ");
        console.log(\"Diagnostic text:\", ";
        // line 303
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 303, $this->source); })()), "diagnostic", [], "any", false, false, false, 303));
        yield ");
        console.log(\"==================================\");
    })();
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 309
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
const suiviId = ";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312), "html", null, true);
        yield ";
const detectedOrgan = ";
        // line 313
        yield (((($tmp = (isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 313, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (json_encode((isset($context["detected_organ"]) || array_key_exists("detected_organ", $context) ? $context["detected_organ"] : (function () { throw new RuntimeError('Variable "detected_organ" does not exist.', 313, $this->source); })()))) : ("null"));
        yield ";

// Hide loading spinner when iframe loads
function hideLoading() {
    const loading = document.getElementById('anatomy-loading');
    if (loading) {
        loading.classList.add('hidden');
    }
}

// Auto-hide loading after 3 seconds
setTimeout(function() {
    hideLoading();
}, 3000);

// Fonction pour afficher les messages d'erreur
function showError(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.textContent = message;
    errorDiv.classList.remove('hidden');
    
    // Cacher après 5 secondes
    setTimeout(() => {
        errorDiv.classList.add('hidden');
    }, 5000);
}

// Fonction pour pré-remplir les symptômes au moment du clic (via API)
async function presetSymptoms() {
    if (detectedOrgan && detectedOrgan.number) {
        const symptomsInput = document.getElementById('symptoms-input');
        
        // Ne pré-remplir que si le champ est vide
        if (!symptomsInput.value.trim()) {
            try {
                // Appeler l'API pour récupérer les symptômes
                const response = await fetch(`/suivi/ai-symptoms/\${detectedOrgan.number}?suivi_id=\${suiviId}`);
                const data = await response.json();
                
                if (data.success) {
                    symptomsInput.value = data.symptoms;
                    console.log('Symptoms fetched from API for organ #' + detectedOrgan.number + ': ' + data.organ);
                    return true;
                } else {
                    throw new Error(data.error || 'Symptoms API failed');
                }
            } catch (error) {
                console.error('Error fetching symptoms:', error);
                showError('Unable to fetch symptoms from AI API: ' + error.message);
                return false;
            }
        }

        return true;
    }

    return false;
}

// Fonction pour l'analyse AI
async function runAIAnalysis() {
    return runAnalysis('default', 'analyze-btn');
}

async function runKnnAnalysis() {
    return runAnalysis('knn_only', 'knn-analyze-btn');
}

async function runAnalysis(mode, buttonId) {
    if (!detectedOrgan) {
        alert('No organ detected from diagnostic');
        return;
    }
    
    // Pré-remplir les symptômes si nécessaire (appel API)
    const symptomsReady = await presetSymptoms();
    if (!symptomsReady) {
        return;
    }
    
    const symptoms = document.getElementById('symptoms-input').value;
    const analyzeBtn = document.getElementById(buttonId);
    const errorDiv = document.getElementById('error-message');
    
    // Cacher les anciennes erreurs
    errorDiv.classList.add('hidden');
    
    console.log('Sending analysis request:', {
        suivi_id: suiviId,
        affected_parts: [detectedOrgan.id],
        symptoms: symptoms
    });
    
    analyzeBtn.disabled = true;
    analyzeBtn.innerHTML = '<svg class=\"animate-spin w-5 h-5\" fill=\"none\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg> Analyzing...';
    
    // Préparer les données pour l'analyse
    const requestData = {
        suivi_id: suiviId,
        affected_parts: [detectedOrgan.id],
        symptoms: symptoms,
        analysis_mode: mode
    };
    
    fetch('";
        // line 417
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_ai_analyze");
        yield "', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify(requestData)
    })
    .then(async response => {
        const text = await response.text();
        console.log('Raw response:', text);
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}, body: \${text}`);
        }
        
        try {
            return JSON.parse(text);
        } catch (e) {
            throw new Error('Invalid JSON response: ' + text);
        }
    })
    .then(data => {
        console.log('Parsed response:', data);
        
        if (data.success) {
            const resultDiv = document.getElementById('analysis-result');
            const emergencyBadge = document.getElementById('emergency-badge');
            const emergencyLevel = document.getElementById('emergency-level');
            const reportContent = document.getElementById('report-content');
            
            // Ajouter l'organe analysé au rapport
            let report = data.report || '';
            report = `Analyzing: \${detectedOrgan.name} (#\${detectedOrgan.number})\\n\\n\${report}`;
            
            // Set emergency level styling
            const levelColors = {
                'critical': { bg: 'bg-red-100', border: 'border-red-300', text: 'text-red-800' },
                'high': { bg: 'bg-orange-100', border: 'border-orange-300', text: 'text-orange-800' },
                'medium': { bg: 'bg-yellow-100', border: 'border-yellow-300', text: 'text-yellow-800' },
                'low': { bg: 'bg-green-100', border: 'border-green-300', text: 'text-green-800' }
            };
            
            const colors = levelColors[data.emergency_level] || levelColors.low;
            emergencyBadge.className = `mb-4 p-4 rounded-lg border-2 text-center \${colors.bg} \${colors.border}`;
            emergencyLevel.className = `text-lg font-bold \${colors.text}`;
            emergencyLevel.textContent = data.emergency_display || 'Unknown';
            
            // Set report content
            reportContent.textContent = report;
            
            resultDiv.classList.remove('hidden');
            
            // Scroll to result
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
            showError('Error: ' + (data.error || 'Unknown error from server'));
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
        showError('Connection error: ' + error.message);
    })
    .finally(() => {
        analyzeBtn.disabled = false;
        if (mode === 'knn_only') {
            analyzeBtn.innerHTML = '<svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1-3m1 3h6m-6 0H6m3-3V5a3 3 0 013-3h0a3 3 0 013 3v12m-6 0h6\"/></svg> Run AI Analysis';
        } else {
            analyzeBtn.innerHTML = '<svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/></svg> Run Analysis';
        }
    });
}

// Ajouter les animations CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-10px); }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.3s ease forwards;
    }
    
    .animate-fade-out {
        animation: fadeOut 0.3s ease forwards;
    }
`;

document.head.appendChild(style);
</script>
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
        return "suivi/consultation_detail.html.twig";
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
        return array (  844 => 417,  737 => 313,  733 => 312,  728 => 310,  715 => 309,  699 => 303,  695 => 302,  679 => 290,  676 => 289,  667 => 288,  657 => 281,  652 => 280,  647 => 279,  643 => 278,  639 => 277,  633 => 275,  628 => 274,  624 => 273,  620 => 272,  611 => 269,  601 => 261,  597 => 260,  583 => 249,  569 => 237,  563 => 235,  561 => 234,  556 => 232,  548 => 231,  540 => 230,  530 => 227,  511 => 215,  503 => 214,  491 => 209,  483 => 208,  471 => 203,  463 => 202,  451 => 197,  443 => 196,  431 => 191,  423 => 190,  411 => 185,  403 => 184,  391 => 179,  383 => 178,  371 => 173,  363 => 172,  315 => 126,  308 => 122,  304 => 121,  300 => 119,  298 => 118,  293 => 116,  286 => 112,  278 => 107,  273 => 106,  268 => 105,  264 => 104,  260 => 103,  247 => 92,  241 => 89,  232 => 88,  230 => 87,  225 => 85,  217 => 84,  214 => 83,  210 => 81,  206 => 79,  204 => 78,  196 => 77,  186 => 74,  177 => 72,  169 => 67,  162 => 63,  148 => 52,  141 => 48,  134 => 44,  127 => 40,  120 => 36,  99 => 18,  90 => 12,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"space-y-6\">
    <!-- Header -->
    <div class=\"flex items-center justify-between\">
        <div>
            <h1 class=\"text-2xl font-bold text-gray-900\">Consultation Detail</h1>
            <p class=\"text-gray-600\">Medical analysis and 3D anatomy view for {{ consultation.dog ? consultation.dog.name : 'Unknown Dog' }}</p>
        </div>
        <div class=\"flex items-center gap-2\">
            <a href=\"{{ path('app_suivi_export_pdf', { id: suivi.id }) }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 10v6m0 0l-3-3m3 3l3-3M4 17a4 4 0 004 4h8a4 4 0 004-4M4 7a4 4 0 014-4h8a4 4 0 014 4\"/>
                </svg>
                Export PDF
            </a>
            <a href=\"{{ path('app_suivi_index') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M10 19l-7-7m0 0l7-7m-7 7h18\"/>
                </svg>
                Back to Follow-ups
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
        <!-- Left Column - Consultation Info -->
        <div class=\"space-y-6\">
            <!-- Consultation Details Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Consultation Information</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">ID:</span>
                        <span class=\"font-medium\">#{{ consultation.id }}</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Date:</span>
                        <span class=\"font-medium\">{{ consultation.date ? consultation.date|date('d/m/Y H:i') : 'N/A' }}</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Type:</span>
                        <span class=\"font-medium\">{{ consultation.type }}</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Dog:</span>
                        <span class=\"font-medium\">{{ consultation.dog ? consultation.dog.name : 'N/A' }}</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Veterinarian:</span>
                        <span class=\"font-medium\">{{ consultation.user ? consultation.user.fullName : 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <!-- Diagnostic & Treatment Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Diagnostic & Treatment</h2>
                <div class=\"space-y-4\">
                    <div>
                        <h3 class=\"text-sm font-medium text-gray-500 mb-2\">Diagnostic</h3>
                        <p class=\"text-gray-900 font-medium\" id=\"diagnostic-text\">{{ consultation.diagnostic }}</p>
                    </div>
                    <div>
                        <h3 class=\"text-sm font-medium text-gray-500 mb-2\">Treatment</h3>
                        <p class=\"text-gray-900\">{{ consultation.traitement ?: 'Not specified' }}</p>
                    </div>
                </div>
                
                <!-- Auto-detected Organ -->
                <div id=\"detected-organ-container\" class=\"mt-4 p-3 {% if detected_organ %}bg-green-50 border-green-200{% else %}bg-yellow-50 border-yellow-200{% endif %} border rounded-lg\">
                    <div class=\"flex items-center gap-2\">
                        <svg class=\"w-5 h-5 {% if detected_organ %}text-green-600{% else %}text-yellow-600{% endif %}\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\"/>
                        </svg>
                        <span class=\"text-sm font-medium {% if detected_organ %}text-green-800{% else %}text-yellow-800{% endif %}\">
                            {% if detected_organ %}
                                Organ detected from diagnostic:
                            {% else %}
                                No specific organ detected in diagnostic:
                            {% endif %}
                        </span>
                        <span class=\"font-bold {% if detected_organ %}text-green-800{% else %}text-yellow-800{% endif %}\">
                            {{ detected_organ ? detected_organ.name : 'None' }}
                        </span>
                        {% if detected_organ %}
                            <span class=\"{% if detected_organ %}bg-green-200 text-green-800{% else %}bg-yellow-200 text-yellow-800{% endif %} px-2 py-0.5 rounded-full text-xs\">
                                #{{ detected_organ.number }}
                            </span>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Follow-up Info Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">Follow-up Information</h2>
                <div class=\"space-y-4\">
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Status:</span>
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                            {% if suivi.etat == 'Planifié' %}bg-yellow-100 text-yellow-800
                            {% elseif suivi.etat == 'En cours' %}bg-blue-100 text-blue-800
                            {% elseif suivi.etat == 'Terminé' %}bg-green-100 text-green-800
                            {% else %}bg-gray-100 text-gray-800{% endif %}\">
                            {{ suivi.etat }}
                        </span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Type:</span>
                        <span class=\"font-medium\">{{ suivi.type }}</span>
                    </div>
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Next Visit:</span>
                        <span class=\"font-medium text-blue-600\">{{ suivi.prochaineVisite ? suivi.prochaineVisite|date('d/m/Y H:i') : 'Not scheduled' }}</span>
                    </div>
                    {% if suivi.emergencyLevel %}
                    <div class=\"flex justify-between\">
                        <span class=\"text-gray-500\">Emergency Level:</span>
                        <span class=\"inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border {{ suivi.emergencyLevelClass }}\">
                            {{ suivi.emergencyLevelDisplay }}
                        </span>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Right Column - 3D Anatomy Model -->
        <div class=\"space-y-6\">
            <!-- 3D Anatomy Model Card -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">3D Dog Anatomy Model</h2>
                <p class=\"text-sm text-gray-600 mb-4\">The affected organ from the diagnostic is automatically selected</p>
                
                <!-- Embedded 3D Dog Anatomy Model from Sketchfab -->
                <div class=\"relative bg-gradient-to-b from-blue-50 to-white rounded-lg p-2\" id=\"anatomy-container\">
                    <div id=\"anatomy-loading\" class=\"absolute inset-0 flex items-center justify-center bg-white rounded-lg z-10\">
                        <div class=\"text-center\">
                            <div class=\"animate-spin rounded-full h-12 w-12 border-b-2 border-paw-orange mx-auto mb-4\"></div>
                            <p class=\"text-gray-600\">Loading 3D Anatomy Model...</p>
                        </div>
                    </div>
                    
                    <div class=\"sketchfab-embed-wrapper\">
                        <iframe 
                            id=\"anatomy-iframe\"
                            title=\"Bone structure and internal organs of a dog\" 
                            frameborder=\"0\" 
                            allowfullscreen 
                            mozallowfullscreen=\"true\" 
                            webkitallowfullscreen=\"true\" 
                            allow=\"autoplay; fullscreen; xr-spatial-tracking\" 
                            xr-spatial-tracking 
                            execution-while-out-of-viewport 
                            execution-while-not-rendered 
                            web-share 
                            src=\"https://sketchfab.com/models/7587ebe24ee2464f982154ed610f7e56/embed\"
                            onload=\"hideLoading()\"
                            style=\"border-radius: 8px; width: 100%; height: 500px;\">
                        </iframe>
                    </div>
                </div>
                
                <!-- Organ Buttons (8 organes) -->
                <div class=\"mt-4 p-4 bg-gray-50 rounded-lg\">
                    <h3 class=\"text-sm font-medium text-gray-700 mb-3\">Organ Reference:</h3>
                    
                    <div class=\"grid grid-cols-4 gap-3\" id=\"organ-buttons-container\">
                        <!-- 1. Brain -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 1 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"1\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 1 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">1</span>
                            <span class=\"text-xs font-medium mt-1\">Brain</span>
                        </div>
                        
                        <!-- 2. Lungs -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 2 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"2\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 2 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">2</span>
                            <span class=\"text-xs font-medium mt-1\">Lungs</span>
                        </div>
                        
                        <!-- 3. Heart -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 3 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"3\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 3 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">3</span>
                            <span class=\"text-xs font-medium mt-1\">Heart</span>
                        </div>
                        
                        <!-- 4. Liver -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 4 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"4\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 4 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">4</span>
                            <span class=\"text-xs font-medium mt-1\">Liver</span>
                        </div>
                        
                        <!-- 5. Stomach -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 5 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"5\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 5 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">5</span>
                            <span class=\"text-xs font-medium mt-1\">Stomach</span>
                        </div>
                        
                        <!-- 6. Guts -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 6 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"6\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 6 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">6</span>
                            <span class=\"text-xs font-medium mt-1\">Guts</span>
                        </div>
                        
                        <!-- 7. Kidney -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 7 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"7\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 7 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">7</span>
                            <span class=\"text-xs font-medium mt-1\">Kidney</span>
                        </div>
                        
                        <!-- 8. Urinary bladder -->
                        <div class=\"organ-btn relative flex flex-col items-center p-2 {% if detected_organ and detected_organ.number == 8 %}bg-green-50 ring-2 ring-green-500{% else %}bg-white{% endif %} rounded-lg border border-gray-200 transition-all\" data-number=\"8\">
                            <span class=\"absolute -top-2 -right-2 w-6 h-6 {% if detected_organ and detected_organ.number == 8 %}bg-green-600{% else %}bg-gray-400{% endif %} text-white rounded-full text-xs flex items-center justify-center font-bold\">8</span>
                            <span class=\"text-xs font-medium mt-1\">Bladder</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Analysis Section -->
            <div class=\"bg-white rounded-xl border border-gray-200 p-6\">
                <h2 class=\"text-lg font-semibold text-gray-900 mb-4\">AI-Powered Analysis</h2>
                
                <!-- Selected Organ Display -->
                <div id=\"selected-organ-display\" class=\"mb-3 p-3 {% if detected_organ %}bg-paw-orange bg-opacity-10 border-paw-orange{% else %}bg-gray-100 border-gray-300{% endif %} border rounded-lg\">
                    <div class=\"flex items-center justify-between\">
                        <div>
                            <span class=\"text-sm font-medium {% if detected_organ %}text-paw-orange{% else %}text-gray-600{% endif %}\">Organ for analysis:</span>
                            <span class=\"ml-2 font-bold {% if detected_organ %}text-paw-orange{% else %}text-gray-600{% endif %}\">
                                {{ detected_organ ? detected_organ.name : 'None detected' }}
                            </span>
                            {% if detected_organ %}
                                <span class=\"ml-1 bg-paw-orange text-white px-2 py-0.5 rounded-full text-xs\">#{{ detected_organ.number }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <!-- Symptoms Input (vide au chargement) -->
                <div class=\"mb-4\">
                    <label class=\"block text-sm font-medium text-gray-700 mb-2\">Describe Symptoms</label>
                    <textarea 
                        id=\"symptoms-input\" 
                        class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-paw-orange focus:border-paw-orange\"
                        rows=\"4\"
                        placeholder=\"Click 'Run  Analysis' to see common symptoms for this organ...\"
                    >{{ saved_symptoms }}</textarea>
                </div>
                
                <!-- Message d'erreur (caché par défaut) -->
                <div id=\"error-message\" class=\"mb-3 p-3 bg-red-50 border border-red-200 rounded-lg text-red-700 text-sm hidden\"></div>
                
                <!-- Analyze Button -->
                <button 
                    id=\"knn-analyze-btn\"
                    onclick=\"runKnnAnalysis()\"
                    class=\"w-full inline-flex items-center justify-center gap-2 px-4 py-3 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\"
                    {% if not detected_organ %}disabled style=\"opacity:50%; cursor:not-allowed;\"{% endif %}
                >
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1-3m1 3h6m-6 0H6m3-3V5a3 3 0 013-3h0a3 3 0 013 3v12m-6 0h6\"/>
                    </svg>
                    Run AI Analysis
                </button>

                <!-- Analysis Result -->
                <div id=\"analysis-result\" class=\"mt-4 {% if has_saved_analysis %}{% else %}hidden{% endif %}\">
                    <!-- Emergency Level Badge -->
                    <div id=\"emergency-badge\" class=\"mb-4 p-4 rounded-lg border-2 text-center
                        {% if suivi.emergencyLevel == 'critical' %}bg-red-100 border-red-300
                        {% elseif suivi.emergencyLevel == 'high' %}bg-orange-100 border-orange-300
                        {% elseif suivi.emergencyLevel == 'medium' %}bg-yellow-100 border-yellow-300
                        {% else %}bg-green-100 border-green-300{% endif %}\">
                        <span id=\"emergency-level\" class=\"text-lg font-bold
                            {% if suivi.emergencyLevel == 'critical' %}text-red-800
                            {% elseif suivi.emergencyLevel == 'high' %}text-orange-800
                            {% elseif suivi.emergencyLevel == 'medium' %}text-yellow-800
                            {% else %}text-green-800{% endif %}\">
                            {{ suivi.emergencyLevelDisplay }}
                        </span>
                    </div>
                    
                    <!-- Report -->
                    <div class=\"bg-gray-50 rounded-lg p-4\">
                        <h3 class=\"text-sm font-semibold text-gray-700 mb-2\">Medical Analysis Report</h3>
                        <pre id=\"report-content\" class=\"text-sm text-gray-700 whitespace-pre-wrap font-mono overflow-auto max-h-96\">{% if has_saved_analysis %}Analyzing: {{ detected_organ ? detected_organ.name : 'Unknown' }}{% if detected_organ %} (#{{ detected_organ.number }}){% endif %}

{{ saved_analysis_report }}{% endif %}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script de débogage -->
<script>
    (function() {
        console.log(\"=== DÉBOGAGE DÉTECTION ORGANE ===\");
        console.log(\"detected_organ (depuis Twig):\", {{ detected_organ ? detected_organ|json_encode|raw : 'null' }});
        console.log(\"Diagnostic text:\", {{ consultation.diagnostic|json_encode|raw }});
        console.log(\"==================================\");
    })();
</script>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
const suiviId = {{ suivi.id }};
const detectedOrgan = {{ detected_organ ? detected_organ|json_encode|raw : 'null' }};

// Hide loading spinner when iframe loads
function hideLoading() {
    const loading = document.getElementById('anatomy-loading');
    if (loading) {
        loading.classList.add('hidden');
    }
}

// Auto-hide loading after 3 seconds
setTimeout(function() {
    hideLoading();
}, 3000);

// Fonction pour afficher les messages d'erreur
function showError(message) {
    const errorDiv = document.getElementById('error-message');
    errorDiv.textContent = message;
    errorDiv.classList.remove('hidden');
    
    // Cacher après 5 secondes
    setTimeout(() => {
        errorDiv.classList.add('hidden');
    }, 5000);
}

// Fonction pour pré-remplir les symptômes au moment du clic (via API)
async function presetSymptoms() {
    if (detectedOrgan && detectedOrgan.number) {
        const symptomsInput = document.getElementById('symptoms-input');
        
        // Ne pré-remplir que si le champ est vide
        if (!symptomsInput.value.trim()) {
            try {
                // Appeler l'API pour récupérer les symptômes
                const response = await fetch(`/suivi/ai-symptoms/\${detectedOrgan.number}?suivi_id=\${suiviId}`);
                const data = await response.json();
                
                if (data.success) {
                    symptomsInput.value = data.symptoms;
                    console.log('Symptoms fetched from API for organ #' + detectedOrgan.number + ': ' + data.organ);
                    return true;
                } else {
                    throw new Error(data.error || 'Symptoms API failed');
                }
            } catch (error) {
                console.error('Error fetching symptoms:', error);
                showError('Unable to fetch symptoms from AI API: ' + error.message);
                return false;
            }
        }

        return true;
    }

    return false;
}

// Fonction pour l'analyse AI
async function runAIAnalysis() {
    return runAnalysis('default', 'analyze-btn');
}

async function runKnnAnalysis() {
    return runAnalysis('knn_only', 'knn-analyze-btn');
}

async function runAnalysis(mode, buttonId) {
    if (!detectedOrgan) {
        alert('No organ detected from diagnostic');
        return;
    }
    
    // Pré-remplir les symptômes si nécessaire (appel API)
    const symptomsReady = await presetSymptoms();
    if (!symptomsReady) {
        return;
    }
    
    const symptoms = document.getElementById('symptoms-input').value;
    const analyzeBtn = document.getElementById(buttonId);
    const errorDiv = document.getElementById('error-message');
    
    // Cacher les anciennes erreurs
    errorDiv.classList.add('hidden');
    
    console.log('Sending analysis request:', {
        suivi_id: suiviId,
        affected_parts: [detectedOrgan.id],
        symptoms: symptoms
    });
    
    analyzeBtn.disabled = true;
    analyzeBtn.innerHTML = '<svg class=\"animate-spin w-5 h-5\" fill=\"none\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg> Analyzing...';
    
    // Préparer les données pour l'analyse
    const requestData = {
        suivi_id: suiviId,
        affected_parts: [detectedOrgan.id],
        symptoms: symptoms,
        analysis_mode: mode
    };
    
    fetch('{{ path(\"app_suivi_ai_analyze\") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify(requestData)
    })
    .then(async response => {
        const text = await response.text();
        console.log('Raw response:', text);
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: \${response.status}, body: \${text}`);
        }
        
        try {
            return JSON.parse(text);
        } catch (e) {
            throw new Error('Invalid JSON response: ' + text);
        }
    })
    .then(data => {
        console.log('Parsed response:', data);
        
        if (data.success) {
            const resultDiv = document.getElementById('analysis-result');
            const emergencyBadge = document.getElementById('emergency-badge');
            const emergencyLevel = document.getElementById('emergency-level');
            const reportContent = document.getElementById('report-content');
            
            // Ajouter l'organe analysé au rapport
            let report = data.report || '';
            report = `Analyzing: \${detectedOrgan.name} (#\${detectedOrgan.number})\\n\\n\${report}`;
            
            // Set emergency level styling
            const levelColors = {
                'critical': { bg: 'bg-red-100', border: 'border-red-300', text: 'text-red-800' },
                'high': { bg: 'bg-orange-100', border: 'border-orange-300', text: 'text-orange-800' },
                'medium': { bg: 'bg-yellow-100', border: 'border-yellow-300', text: 'text-yellow-800' },
                'low': { bg: 'bg-green-100', border: 'border-green-300', text: 'text-green-800' }
            };
            
            const colors = levelColors[data.emergency_level] || levelColors.low;
            emergencyBadge.className = `mb-4 p-4 rounded-lg border-2 text-center \${colors.bg} \${colors.border}`;
            emergencyLevel.className = `text-lg font-bold \${colors.text}`;
            emergencyLevel.textContent = data.emergency_display || 'Unknown';
            
            // Set report content
            reportContent.textContent = report;
            
            resultDiv.classList.remove('hidden');
            
            // Scroll to result
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
            showError('Error: ' + (data.error || 'Unknown error from server'));
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
        showError('Connection error: ' + error.message);
    })
    .finally(() => {
        analyzeBtn.disabled = false;
        if (mode === 'knn_only') {
            analyzeBtn.innerHTML = '<svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.75 17L9 20l-1-3m1 3h6m-6 0H6m3-3V5a3 3 0 013-3h0a3 3 0 013 3v12m-6 0h6\"/></svg> Run AI Analysis';
        } else {
            analyzeBtn.innerHTML = '<svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/></svg> Run Analysis';
        }
    });
}

// Ajouter les animations CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeOut {
        from { opacity: 1; transform: translateY(0); }
        to { opacity: 0; transform: translateY(-10px); }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.3s ease forwards;
    }
    
    .animate-fade-out {
        animation: fadeOut 0.3s ease forwards;
    }
`;

document.head.appendChild(style);
</script>
{% endblock %}

", "suivi/consultation_detail.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\suivi\\consultation_detail.html.twig");
    }
}
