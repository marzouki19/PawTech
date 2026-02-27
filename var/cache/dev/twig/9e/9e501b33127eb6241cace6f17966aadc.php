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

/* radiology/triage.html.twig */
class __TwigTemplate_5c64e5abe7a93a269f8c50aa304f60ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "radiology/triage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "radiology/triage.html.twig"));

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
        yield "<div class=\"max-w-6xl mx-auto space-y-6\">
    <div class=\"relative overflow-hidden rounded-3xl border border-orange-200 bg-gradient-to-br from-orange-500 via-orange-400 to-amber-300 p-6 md:p-8\">
        <div class=\"absolute -top-16 -right-16 w-56 h-56 bg-white/25 rounded-full blur-3xl pointer-events-none\"></div>
        <div class=\"absolute -bottom-14 left-8 w-56 h-56 bg-amber-100/40 rounded-full blur-3xl pointer-events-none\"></div>

        <div class=\"relative grid grid-cols-1 lg:grid-cols-3 gap-4\">
            <div class=\"lg:col-span-2\">
                <div class=\"inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/25 border border-white/40 text-white text-xs font-semibold tracking-wider uppercase\">
                    PawTech AI Console
                </div>
                <h1 class=\"mt-3 text-3xl md:text-4xl font-extrabold text-white\">Radiology AI Triage</h1>
                <p class=\"mt-2 text-orange-50 max-w-3xl\">A rapid pre-screening cockpit for veterinary images. Upload, score risk, detect probable organ, and send to clinical validation.</p>

                <div class=\"mt-5 grid grid-cols-1 sm:grid-cols-3 gap-3\">
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 1</div>
                        <div class=\"text-sm font-semibold text-white\">Image Intake</div>
                    </div>
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 2</div>
                        <div class=\"text-sm font-semibold text-white\">AI Scoring</div>
                    </div>
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 3</div>
                        <div class=\"text-sm font-semibold text-white\">Vet Validation</div>
                    </div>
                </div>
            </div>

            <div class=\"rounded-2xl border border-white/30 bg-white/15 p-4 text-white\">
                <div class=\"text-xs uppercase tracking-wider text-orange-100\">Session</div>
                <div class=\"mt-2 text-lg font-semibold\">Radiology Workflow</div>
                <div class=\"mt-3 space-y-2 text-sm text-slate-100\">
                    <div class=\"flex justify-between\"><span>Supported</span><span class=\"font-semibold\">JPG / PNG / WEBP</span></div>
                    <div class=\"flex justify-between\"><span>Output</span><span class=\"font-semibold\">Risk + Organ + Report</span></div>
                    <div class=\"flex justify-between\"><span>Mode</span><span class=\"font-semibold\">AI Pre-Triage</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-4\" data-turbo=\"false\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-2\">Radiography Image (JPG/PNG/WEBP)</label>
                <div class=\"rounded-2xl border-2 border-dashed border-orange-300 bg-gradient-to-r from-orange-50 to-amber-50 p-4\">
                    <input
                        type=\"file\"
                        name=\"radiology_image\"
                        accept=\".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp\"
                        class=\"w-full px-3 py-2 border border-slate-300 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange\"
                        required
                    >
                    <p class=\"mt-2 text-xs text-slate-500\">Tip: use clear X-ray images (thoracic/abdominal) for more reliable triage.</p>
                </div>
            </div>
            <button type=\"submit\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-paw-orange text-white rounded-xl hover:bg-paw-orange-hover font-semibold shadow-md shadow-orange-200/50\">
                Run Radiology Triage
            </button>
        </form>
    </div>

    ";
        // line 66
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "        <div class=\"bg-red-50 border border-red-200 text-red-700 rounded-xl p-4\">
            ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 68, $this->source); })()), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 71
        yield "
    ";
        // line 72
        if ((($tmp = (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
            <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
                <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Uploaded Radiography</h2>
                ";
            // line 76
            if ((($tmp = (isset($context["uploaded_image_web_path"]) || array_key_exists("uploaded_image_web_path", $context) ? $context["uploaded_image_web_path"] : (function () { throw new RuntimeError('Variable "uploaded_image_web_path" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["uploaded_image_web_path"]) || array_key_exists("uploaded_image_web_path", $context) ? $context["uploaded_image_web_path"] : (function () { throw new RuntimeError('Variable "uploaded_image_web_path" does not exist.', 77, $this->source); })())), "html", null, true);
                yield "\" alt=\"Radiography\" class=\"w-full rounded-xl border border-slate-200\">
                ";
            }
            // line 79
            yield "            </div>

            <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
                <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">AI Triage Result</h2>
                <div class=\"space-y-3\">
                    <div class=\"p-3 rounded-xl border
                        ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 85, $this->source); })()), "severity", [], "any", false, false, false, 85) == "critical")) {
                yield "bg-red-50 border-red-300 text-red-800
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 86, $this->source); })()), "severity", [], "any", false, false, false, 86) == "high")) {
                yield "bg-orange-50 border-orange-300 text-orange-800
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 87, $this->source); })()), "severity", [], "any", false, false, false, 87) == "medium")) {
                yield "bg-yellow-50 border-yellow-300 text-yellow-800
                        ";
            } else {
                // line 88
                yield "bg-green-50 border-green-300 text-green-800";
            }
            yield "\">
                        <span class=\"font-semibold\">Severity:</span>
                        <span class=\"uppercase\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 90, $this->source); })()), "severity", [], "any", false, false, false, 90), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"grid grid-cols-2 gap-3\">
                        <div class=\"rounded-xl border border-slate-200 bg-slate-50 p-3\">
                            <div class=\"text-xs text-slate-500 uppercase\">Risk Score</div>
                            <div class=\"text-xl font-bold text-slate-900\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 95, $this->source); })()), "risk_score", [], "any", false, false, false, 95), "html", null, true);
            yield "/100</div>
                        </div>
                        <div class=\"rounded-xl border border-slate-200 bg-slate-50 p-3\">
                            <div class=\"text-xs text-slate-500 uppercase\">Confidence</div>
                            <div class=\"text-xl font-bold text-slate-900\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 99, $this->source); })()), "confidence", [], "any", false, false, false, 99), "html", null, true);
            yield "%</div>
                        </div>
                    </div>
                    <div>
                        <div class=\"flex justify-between text-xs text-slate-500 mb-1\"><span>Risk Progress</span><span>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 103, $this->source); })()), "risk_score", [], "any", false, false, false, 103), "html", null, true);
            yield "/100</span></div>
                        <div class=\"w-full h-2 rounded-full bg-slate-200 overflow-hidden\">
                            <div class=\"h-full bg-orange-500\" style=\"width: ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 105, $this->source); })()), "risk_score", [], "any", false, false, false, 105), "html", null, true);
            yield "%\"></div>
                        </div>
                    </div>
                    <div>
                        <div class=\"flex justify-between text-xs text-slate-500 mb-1\"><span>Model Confidence</span><span>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 109, $this->source); })()), "confidence", [], "any", false, false, false, 109), "html", null, true);
            yield "%</span></div>
                        <div class=\"w-full h-2 rounded-full bg-slate-200 overflow-hidden\">
                            <div class=\"h-full bg-emerald-500\" style=\"width: ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 111, $this->source); })()), "confidence", [], "any", false, false, false, 111), "html", null, true);
            yield "%\"></div>
                        </div>
                    </div>
                    <div><span class=\"text-slate-500\">Image quality:</span> <span class=\"font-semibold\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 114, $this->source); })()), "image_quality", [], "any", false, false, false, 114), "html", null, true);
            yield "</span></div>
                    <div><span class=\"text-slate-500\">Probable region:</span> <span class=\"font-semibold uppercase\">";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 115, $this->source); })()), "probable_region", [], "any", false, false, false, 115), "html", null, true);
            yield "</span></div>
                    <div>
                        <span class=\"text-slate-500\">Probable organ:</span>
                        <span class=\"font-semibold uppercase ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 118, $this->source); })()), "probable_organ", [], "any", false, false, false, 118) == "undetermined")) {
                yield "text-red-700";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 118, $this->source); })()), "probable_organ", [], "any", false, false, false, 118), "html", null, true);
            yield "</span>
                    </div>
                    <div><span class=\"text-slate-500\">Region confidence:</span> <span class=\"font-semibold\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 120, $this->source); })()), "region_confidence", [], "any", false, false, false, 120) * 100), 1), "html", null, true);
            yield "%</span></div>
                    <div><span class=\"text-slate-500\">Organ confidence:</span> <span class=\"font-semibold\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 121, $this->source); })()), "organ_confidence", [], "any", false, false, false, 121) * 100), 1), "html", null, true);
            yield "%</span></div>
                    ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 122, $this->source); })()), "probable_organ", [], "any", false, false, false, 122) == "undetermined")) {
                // line 123
                yield "                        <div class=\"p-2 rounded border border-red-200 bg-red-50 text-red-700 text-sm\">
                            Organ could not be localized reliably from this image. Please rely on veterinary radiology validation.
                        </div>
                    ";
            }
            // line 127
            yield "                    <div>
                        <span class=\"text-slate-500\">Urgent consultation:</span>
                        <span class=\"font-semibold uppercase ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 129, $this->source); })()), "urgent_consultation", [], "any", false, false, false, 129) == "yes")) {
                yield "text-red-700";
            } else {
                yield "text-green-700";
            }
            yield "\">
                            ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 130, $this->source); })()), "urgent_consultation", [], "any", false, false, false, 130), "html", null, true);
            yield "
                        </span>
                    </div>
                    <div><span class=\"text-slate-500\">Recommended timing:</span> <span class=\"font-semibold\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 133, $this->source); })()), "recommended_timing", [], "any", false, false, false, 133), "html", null, true);
            yield "</span></div>
                    <div><span class=\"text-slate-500\">Next step:</span> <span class=\"font-semibold\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 134, $this->source); })()), "next_step", [], "any", false, false, false, 134), "html", null, true);
            yield "</span></div>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
            <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Clinical Action Plan</h2>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                <div class=\"rounded-2xl border border-slate-200 bg-slate-50 p-4\">
                    <div class=\"text-xs uppercase tracking-wider text-slate-500\">Priority Lane</div>
                    <div class=\"mt-1 text-sm font-semibold
                        ";
            // line 145
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 145, $this->source); })()), "severity", [], "any", false, false, false, 145) == "critical")) {
                yield "text-red-700
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 146
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 146, $this->source); })()), "severity", [], "any", false, false, false, 146) == "high")) {
                yield "text-orange-700
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 147
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 147, $this->source); })()), "severity", [], "any", false, false, false, 147) == "medium")) {
                yield "text-amber-700
                        ";
            } else {
                // line 148
                yield "text-emerald-700";
            }
            yield "\">
                        ";
            // line 149
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 149, $this->source); })()), "severity", [], "any", false, false, false, 149) == "critical")) {
                // line 150
                yield "                            Emergency lane - immediate handling
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 151
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 151, $this->source); })()), "severity", [], "any", false, false, false, 151) == "high")) {
                // line 152
                yield "                            Urgent lane - same day
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 153
(isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 153, $this->source); })()), "severity", [], "any", false, false, false, 153) == "medium")) {
                // line 154
                yield "                            Fast follow-up lane - 24/48h
                        ";
            } else {
                // line 156
                yield "                            Routine lane - standard flow
                        ";
            }
            // line 158
            yield "                    </div>
                    <p class=\"mt-2 text-xs text-slate-600\">
                        Use this lane to triage internal team workload before veterinary confirmation.
                    </p>
                </div>
                <div class=\"rounded-2xl border border-slate-200 bg-slate-50 p-4\">
                    <div class=\"text-xs uppercase tracking-wider text-slate-500\">Ops Checklist</div>
                    <ul class=\"mt-2 space-y-2 text-sm text-slate-700\">
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Verify image quality and view angle</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Confirm patient identity and history</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Prepare clinician alert if urgent</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Archive pre-report in case file</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
            <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Pre-Report</h2>
            <p class=\"text-slate-700\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 177, $this->source); })()), "summary", [], "any", false, false, false, 177), "html", null, true);
            yield "</p>

            <h3 class=\"mt-5 text-sm font-semibold text-slate-700\">Detected hints</h3>
            <ul class=\"mt-2 list-disc pl-6 text-slate-700 space-y-1\">
                ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 181, $this->source); })()), "findings", [], "any", false, false, false, 181));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["finding"]) {
                // line 182
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["finding"], "html", null, true);
                yield "</li>
                ";
                $context['_iterated'] = true;
            }
            // line 183
            if (!$context['_iterated']) {
                // line 184
                yield "                    <li>No major anomaly pattern detected.</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['finding'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "            </ul>
        </div>
    ";
        }
        // line 189
        yield "</div>
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
        return "radiology/triage.html.twig";
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
        return array (  404 => 189,  399 => 186,  392 => 184,  390 => 183,  383 => 182,  378 => 181,  371 => 177,  350 => 158,  346 => 156,  342 => 154,  340 => 153,  337 => 152,  335 => 151,  332 => 150,  330 => 149,  325 => 148,  320 => 147,  316 => 146,  312 => 145,  298 => 134,  294 => 133,  288 => 130,  280 => 129,  276 => 127,  270 => 123,  268 => 122,  264 => 121,  260 => 120,  251 => 118,  245 => 115,  241 => 114,  235 => 111,  230 => 109,  223 => 105,  218 => 103,  211 => 99,  204 => 95,  196 => 90,  190 => 88,  185 => 87,  181 => 86,  177 => 85,  169 => 79,  163 => 77,  161 => 76,  156 => 73,  154 => 72,  151 => 71,  145 => 68,  142 => 67,  140 => 66,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"max-w-6xl mx-auto space-y-6\">
    <div class=\"relative overflow-hidden rounded-3xl border border-orange-200 bg-gradient-to-br from-orange-500 via-orange-400 to-amber-300 p-6 md:p-8\">
        <div class=\"absolute -top-16 -right-16 w-56 h-56 bg-white/25 rounded-full blur-3xl pointer-events-none\"></div>
        <div class=\"absolute -bottom-14 left-8 w-56 h-56 bg-amber-100/40 rounded-full blur-3xl pointer-events-none\"></div>

        <div class=\"relative grid grid-cols-1 lg:grid-cols-3 gap-4\">
            <div class=\"lg:col-span-2\">
                <div class=\"inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/25 border border-white/40 text-white text-xs font-semibold tracking-wider uppercase\">
                    PawTech AI Console
                </div>
                <h1 class=\"mt-3 text-3xl md:text-4xl font-extrabold text-white\">Radiology AI Triage</h1>
                <p class=\"mt-2 text-orange-50 max-w-3xl\">A rapid pre-screening cockpit for veterinary images. Upload, score risk, detect probable organ, and send to clinical validation.</p>

                <div class=\"mt-5 grid grid-cols-1 sm:grid-cols-3 gap-3\">
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 1</div>
                        <div class=\"text-sm font-semibold text-white\">Image Intake</div>
                    </div>
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 2</div>
                        <div class=\"text-sm font-semibold text-white\">AI Scoring</div>
                    </div>
                    <div class=\"rounded-xl border border-white/30 bg-white/15 px-4 py-3\">
                        <div class=\"text-xs text-orange-100 uppercase tracking-wider\">Step 3</div>
                        <div class=\"text-sm font-semibold text-white\">Vet Validation</div>
                    </div>
                </div>
            </div>

            <div class=\"rounded-2xl border border-white/30 bg-white/15 p-4 text-white\">
                <div class=\"text-xs uppercase tracking-wider text-orange-100\">Session</div>
                <div class=\"mt-2 text-lg font-semibold\">Radiology Workflow</div>
                <div class=\"mt-3 space-y-2 text-sm text-slate-100\">
                    <div class=\"flex justify-between\"><span>Supported</span><span class=\"font-semibold\">JPG / PNG / WEBP</span></div>
                    <div class=\"flex justify-between\"><span>Output</span><span class=\"font-semibold\">Risk + Organ + Report</span></div>
                    <div class=\"flex justify-between\"><span>Mode</span><span class=\"font-semibold\">AI Pre-Triage</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-4\" data-turbo=\"false\">
            <div>
                <label class=\"block text-sm font-medium text-slate-700 mb-2\">Radiography Image (JPG/PNG/WEBP)</label>
                <div class=\"rounded-2xl border-2 border-dashed border-orange-300 bg-gradient-to-r from-orange-50 to-amber-50 p-4\">
                    <input
                        type=\"file\"
                        name=\"radiology_image\"
                        accept=\".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp\"
                        class=\"w-full px-3 py-2 border border-slate-300 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange\"
                        required
                    >
                    <p class=\"mt-2 text-xs text-slate-500\">Tip: use clear X-ray images (thoracic/abdominal) for more reliable triage.</p>
                </div>
            </div>
            <button type=\"submit\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-paw-orange text-white rounded-xl hover:bg-paw-orange-hover font-semibold shadow-md shadow-orange-200/50\">
                Run Radiology Triage
            </button>
        </form>
    </div>

    {% if error %}
        <div class=\"bg-red-50 border border-red-200 text-red-700 rounded-xl p-4\">
            {{ error }}
        </div>
    {% endif %}

    {% if analysis %}
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-6\">
            <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
                <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Uploaded Radiography</h2>
                {% if uploaded_image_web_path %}
                    <img src=\"{{ asset(uploaded_image_web_path) }}\" alt=\"Radiography\" class=\"w-full rounded-xl border border-slate-200\">
                {% endif %}
            </div>

            <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
                <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">AI Triage Result</h2>
                <div class=\"space-y-3\">
                    <div class=\"p-3 rounded-xl border
                        {% if analysis.severity == 'critical' %}bg-red-50 border-red-300 text-red-800
                        {% elseif analysis.severity == 'high' %}bg-orange-50 border-orange-300 text-orange-800
                        {% elseif analysis.severity == 'medium' %}bg-yellow-50 border-yellow-300 text-yellow-800
                        {% else %}bg-green-50 border-green-300 text-green-800{% endif %}\">
                        <span class=\"font-semibold\">Severity:</span>
                        <span class=\"uppercase\">{{ analysis.severity }}</span>
                    </div>
                    <div class=\"grid grid-cols-2 gap-3\">
                        <div class=\"rounded-xl border border-slate-200 bg-slate-50 p-3\">
                            <div class=\"text-xs text-slate-500 uppercase\">Risk Score</div>
                            <div class=\"text-xl font-bold text-slate-900\">{{ analysis.risk_score }}/100</div>
                        </div>
                        <div class=\"rounded-xl border border-slate-200 bg-slate-50 p-3\">
                            <div class=\"text-xs text-slate-500 uppercase\">Confidence</div>
                            <div class=\"text-xl font-bold text-slate-900\">{{ analysis.confidence }}%</div>
                        </div>
                    </div>
                    <div>
                        <div class=\"flex justify-between text-xs text-slate-500 mb-1\"><span>Risk Progress</span><span>{{ analysis.risk_score }}/100</span></div>
                        <div class=\"w-full h-2 rounded-full bg-slate-200 overflow-hidden\">
                            <div class=\"h-full bg-orange-500\" style=\"width: {{ analysis.risk_score }}%\"></div>
                        </div>
                    </div>
                    <div>
                        <div class=\"flex justify-between text-xs text-slate-500 mb-1\"><span>Model Confidence</span><span>{{ analysis.confidence }}%</span></div>
                        <div class=\"w-full h-2 rounded-full bg-slate-200 overflow-hidden\">
                            <div class=\"h-full bg-emerald-500\" style=\"width: {{ analysis.confidence }}%\"></div>
                        </div>
                    </div>
                    <div><span class=\"text-slate-500\">Image quality:</span> <span class=\"font-semibold\">{{ analysis.image_quality }}</span></div>
                    <div><span class=\"text-slate-500\">Probable region:</span> <span class=\"font-semibold uppercase\">{{ analysis.probable_region }}</span></div>
                    <div>
                        <span class=\"text-slate-500\">Probable organ:</span>
                        <span class=\"font-semibold uppercase {% if analysis.probable_organ == 'undetermined' %}text-red-700{% endif %}\">{{ analysis.probable_organ }}</span>
                    </div>
                    <div><span class=\"text-slate-500\">Region confidence:</span> <span class=\"font-semibold\">{{ (analysis.region_confidence * 100)|round(1) }}%</span></div>
                    <div><span class=\"text-slate-500\">Organ confidence:</span> <span class=\"font-semibold\">{{ (analysis.organ_confidence * 100)|round(1) }}%</span></div>
                    {% if analysis.probable_organ == 'undetermined' %}
                        <div class=\"p-2 rounded border border-red-200 bg-red-50 text-red-700 text-sm\">
                            Organ could not be localized reliably from this image. Please rely on veterinary radiology validation.
                        </div>
                    {% endif %}
                    <div>
                        <span class=\"text-slate-500\">Urgent consultation:</span>
                        <span class=\"font-semibold uppercase {% if analysis.urgent_consultation == 'yes' %}text-red-700{% else %}text-green-700{% endif %}\">
                            {{ analysis.urgent_consultation }}
                        </span>
                    </div>
                    <div><span class=\"text-slate-500\">Recommended timing:</span> <span class=\"font-semibold\">{{ analysis.recommended_timing }}</span></div>
                    <div><span class=\"text-slate-500\">Next step:</span> <span class=\"font-semibold\">{{ analysis.next_step }}</span></div>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
            <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Clinical Action Plan</h2>
            <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4\">
                <div class=\"rounded-2xl border border-slate-200 bg-slate-50 p-4\">
                    <div class=\"text-xs uppercase tracking-wider text-slate-500\">Priority Lane</div>
                    <div class=\"mt-1 text-sm font-semibold
                        {% if analysis.severity == 'critical' %}text-red-700
                        {% elseif analysis.severity == 'high' %}text-orange-700
                        {% elseif analysis.severity == 'medium' %}text-amber-700
                        {% else %}text-emerald-700{% endif %}\">
                        {% if analysis.severity == 'critical' %}
                            Emergency lane - immediate handling
                        {% elseif analysis.severity == 'high' %}
                            Urgent lane - same day
                        {% elseif analysis.severity == 'medium' %}
                            Fast follow-up lane - 24/48h
                        {% else %}
                            Routine lane - standard flow
                        {% endif %}
                    </div>
                    <p class=\"mt-2 text-xs text-slate-600\">
                        Use this lane to triage internal team workload before veterinary confirmation.
                    </p>
                </div>
                <div class=\"rounded-2xl border border-slate-200 bg-slate-50 p-4\">
                    <div class=\"text-xs uppercase tracking-wider text-slate-500\">Ops Checklist</div>
                    <ul class=\"mt-2 space-y-2 text-sm text-slate-700\">
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Verify image quality and view angle</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Confirm patient identity and history</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Prepare clinician alert if urgent</li>
                        <li><input type=\"checkbox\" class=\"mr-2 align-middle\">Archive pre-report in case file</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"bg-white rounded-3xl border border-slate-200 p-6 shadow-sm\">
            <h2 class=\"text-lg font-semibold text-slate-900 mb-4\">Pre-Report</h2>
            <p class=\"text-slate-700\">{{ analysis.summary }}</p>

            <h3 class=\"mt-5 text-sm font-semibold text-slate-700\">Detected hints</h3>
            <ul class=\"mt-2 list-disc pl-6 text-slate-700 space-y-1\">
                {% for finding in analysis.findings %}
                    <li>{{ finding }}</li>
                {% else %}
                    <li>No major anomaly pattern detected.</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
</div>
{% endblock %}
", "radiology/triage.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\radiology\\triage.html.twig");
    }
}
