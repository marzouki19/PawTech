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

/* suivi/export_pdf.html.twig */
class __TwigTemplate_eee7c5a1e54a8582bf76b1ecab732008 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi/export_pdf.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>PawTech - Consultation Detail Report</title>
    <style>
        @page { margin: 24px 28px; }
        body {
            margin: 0;
            font-family: DejaVu Sans, sans-serif;
            color: #1f2937;
            background: #f6f7fb;
            font-size: 12px;
            line-height: 1.45;
        }
        .logo-wrap {
            margin-left: -14px;
            margin-bottom: 22px;
        }
        .logo {
            height: 34px;
        }
        .header {
            background: #f97316;
            color: #fff;
            border-radius: 10px;
            padding: 14px 16px;
            margin-bottom: 16px;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
        }
        .header p {
            margin: 4px 0 0;
            font-size: 11px;
            opacity: .95;
        }
        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .card-title {
            background: #fff1e6;
            color: #ea580c;
            font-size: 13px;
            font-weight: 700;
            padding: 9px 12px;
            border-bottom: 1px solid #ffe0c7;
        }
        .card-body {
            padding: 10px 12px;
        }
        .row {
            margin-bottom: 6px;
            word-wrap: break-word;
        }
        .label {
            color: #6b7280;
            font-weight: 700;
        }
        .value {
            color: #111827;
        }
        .pre {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 8px 10px;
            white-space: pre-wrap;
            font-size: 11px;
            color: #374151;
        }
    </style>
</head>
<body>
    ";
        // line 81
        if ((($tmp = (isset($context["logo_data_uri"]) || array_key_exists("logo_data_uri", $context) ? $context["logo_data_uri"] : (function () { throw new RuntimeError('Variable "logo_data_uri" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "        <div class=\"logo-wrap\">
            <img class=\"logo\" src=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo_data_uri"]) || array_key_exists("logo_data_uri", $context) ? $context["logo_data_uri"] : (function () { throw new RuntimeError('Variable "logo_data_uri" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\" alt=\"PawTech logo\">
        </div>
    ";
        }
        // line 86
        yield "
    <div class=\"header\">
        <h1>PawTech - Consultation Detail Report</h1>
        <p>Generated on: ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["generated_at"]) || array_key_exists("generated_at", $context) ? $context["generated_at"] : (function () { throw new RuntimeError('Variable "generated_at" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "</p>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Consultation Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">ID:</span> <span class=\"value\">#";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Date:</span> <span class=\"value\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["consultation_date"]) || array_key_exists("consultation_date", $context) ? $context["consultation_date"] : (function () { throw new RuntimeError('Variable "consultation_date" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">";
        // line 97
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Dog:</span> <span class=\"value\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dog_name"]) || array_key_exists("dog_name", $context) ? $context["dog_name"] : (function () { throw new RuntimeError('Variable "dog_name" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Veterinarian:</span> <span class=\"value\">";
        // line 99
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "fullName", [], "any", false, false, false, 99), "html", null, true)) : ("N/A"));
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Diagnostic & Treatment</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Diagnostic:</span> <span class=\"value\">";
        // line 106
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 106, $this->source); })()), "diagnostic", [], "any", false, false, false, 106)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 106, $this->source); })()), "diagnostic", [], "any", false, false, false, 106), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Treatment:</span> <span class=\"value\">";
        // line 107
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 107, $this->source); })()), "traitement", [], "any", false, false, false, 107)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 107, $this->source); })()), "traitement", [], "any", false, false, false, 107), "html", null, true)) : ("N/A"));
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Follow-up Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Follow-up ID:</span> <span class=\"value\">#";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Status (Etat):</span> <span class=\"value\">";
        // line 115
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 115, $this->source); })()), "etat", [], "any", false, false, false, 115)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 115, $this->source); })()), "etat", [], "any", false, false, false, 115), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">";
        // line 116
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 116, $this->source); })()), "type", [], "any", false, false, false, 116)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 116, $this->source); })()), "type", [], "any", false, false, false, 116), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Next Visit:</span> <span class=\"value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next_visit"]) || array_key_exists("next_visit", $context) ? $context["next_visit"] : (function () { throw new RuntimeError('Variable "next_visit" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Emergency Level:</span> <span class=\"value\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 118, $this->source); })()), "emergencyLevelDisplay", [], "any", false, false, false, 118), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Affected Parts:</span> <span class=\"value\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["affected_parts_text"]) || array_key_exists("affected_parts_text", $context) ? $context["affected_parts_text"] : (function () { throw new RuntimeError('Variable "affected_parts_text" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">AI-Powered Analysis</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Symptoms:</span> <span class=\"value\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["symptoms"]) || array_key_exists("symptoms", $context) ? $context["symptoms"] : (function () { throw new RuntimeError('Variable "symptoms" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Condition:</span> <span class=\"value\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["predicted_condition"]) || array_key_exists("predicted_condition", $context) ? $context["predicted_condition"] : (function () { throw new RuntimeError('Variable "predicted_condition" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Emergency:</span> <span class=\"value\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["predicted_emergency"]) || array_key_exists("predicted_emergency", $context) ? $context["predicted_emergency"] : (function () { throw new RuntimeError('Variable "predicted_emergency" does not exist.', 128, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Medical Analysis Report:</span></div>
            <div class=\"pre\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["analysis_report"]) || array_key_exists("analysis_report", $context) ? $context["analysis_report"] : (function () { throw new RuntimeError('Variable "analysis_report" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "</div>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "suivi/export_pdf.html.twig";
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
        return array (  238 => 130,  233 => 128,  229 => 127,  225 => 126,  215 => 119,  211 => 118,  207 => 117,  203 => 116,  199 => 115,  195 => 114,  185 => 107,  181 => 106,  171 => 99,  167 => 98,  163 => 97,  159 => 96,  155 => 95,  146 => 89,  141 => 86,  135 => 83,  132 => 82,  130 => 81,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>PawTech - Consultation Detail Report</title>
    <style>
        @page { margin: 24px 28px; }
        body {
            margin: 0;
            font-family: DejaVu Sans, sans-serif;
            color: #1f2937;
            background: #f6f7fb;
            font-size: 12px;
            line-height: 1.45;
        }
        .logo-wrap {
            margin-left: -14px;
            margin-bottom: 22px;
        }
        .logo {
            height: 34px;
        }
        .header {
            background: #f97316;
            color: #fff;
            border-radius: 10px;
            padding: 14px 16px;
            margin-bottom: 16px;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
        }
        .header p {
            margin: 4px 0 0;
            font-size: 11px;
            opacity: .95;
        }
        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .card-title {
            background: #fff1e6;
            color: #ea580c;
            font-size: 13px;
            font-weight: 700;
            padding: 9px 12px;
            border-bottom: 1px solid #ffe0c7;
        }
        .card-body {
            padding: 10px 12px;
        }
        .row {
            margin-bottom: 6px;
            word-wrap: break-word;
        }
        .label {
            color: #6b7280;
            font-weight: 700;
        }
        .value {
            color: #111827;
        }
        .pre {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 8px 10px;
            white-space: pre-wrap;
            font-size: 11px;
            color: #374151;
        }
    </style>
</head>
<body>
    {% if logo_data_uri %}
        <div class=\"logo-wrap\">
            <img class=\"logo\" src=\"{{ logo_data_uri }}\" alt=\"PawTech logo\">
        </div>
    {% endif %}

    <div class=\"header\">
        <h1>PawTech - Consultation Detail Report</h1>
        <p>Generated on: {{ generated_at }}</p>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Consultation Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">ID:</span> <span class=\"value\">#{{ consultation.id }}</span></div>
            <div class=\"row\"><span class=\"label\">Date:</span> <span class=\"value\">{{ consultation_date }}</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">{{ consultation.type ?: 'N/A' }}</span></div>
            <div class=\"row\"><span class=\"label\">Dog:</span> <span class=\"value\">{{ dog_name }}</span></div>
            <div class=\"row\"><span class=\"label\">Veterinarian:</span> <span class=\"value\">{{ consultation.user ? consultation.user.fullName : 'N/A' }}</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Diagnostic & Treatment</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Diagnostic:</span> <span class=\"value\">{{ consultation.diagnostic ?: 'N/A' }}</span></div>
            <div class=\"row\"><span class=\"label\">Treatment:</span> <span class=\"value\">{{ consultation.traitement ?: 'N/A' }}</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Follow-up Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Follow-up ID:</span> <span class=\"value\">#{{ suivi.id }}</span></div>
            <div class=\"row\"><span class=\"label\">Status (Etat):</span> <span class=\"value\">{{ suivi.etat ?: 'N/A' }}</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">{{ suivi.type ?: 'N/A' }}</span></div>
            <div class=\"row\"><span class=\"label\">Next Visit:</span> <span class=\"value\">{{ next_visit }}</span></div>
            <div class=\"row\"><span class=\"label\">Emergency Level:</span> <span class=\"value\">{{ suivi.emergencyLevelDisplay }}</span></div>
            <div class=\"row\"><span class=\"label\">Affected Parts:</span> <span class=\"value\">{{ affected_parts_text }}</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">AI-Powered Analysis</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Symptoms:</span> <span class=\"value\">{{ symptoms }}</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Condition:</span> <span class=\"value\">{{ predicted_condition }}</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Emergency:</span> <span class=\"value\">{{ predicted_emergency }}</span></div>
            <div class=\"row\"><span class=\"label\">Medical Analysis Report:</span></div>
            <div class=\"pre\">{{ analysis_report }}</div>
        </div>
    </div>
</body>
</html>
", "suivi/export_pdf.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\suivi\\export_pdf.html.twig");
    }
}
