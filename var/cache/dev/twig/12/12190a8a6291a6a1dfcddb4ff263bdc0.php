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
        .organ-block {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-top: 8px;
        }
        .organ-photo {
            width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            background: #f3f4f6;
        }
    </style>
</head>
<body>
    ";
        // line 95
        if ((($tmp = (isset($context["logo_data_uri"]) || array_key_exists("logo_data_uri", $context) ? $context["logo_data_uri"] : (function () { throw new RuntimeError('Variable "logo_data_uri" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "        <div class=\"logo-wrap\">
            <img class=\"logo\" src=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo_data_uri"]) || array_key_exists("logo_data_uri", $context) ? $context["logo_data_uri"] : (function () { throw new RuntimeError('Variable "logo_data_uri" does not exist.', 97, $this->source); })()), "html", null, true);
            yield "\" alt=\"PawTech logo\">
        </div>
    ";
        }
        // line 100
        yield "
    <div class=\"header\">
        <h1>PawTech - Consultation Detail Report</h1>
        <p>Generated on: ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["generated_at"]) || array_key_exists("generated_at", $context) ? $context["generated_at"] : (function () { throw new RuntimeError('Variable "generated_at" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "</p>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Consultation Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">ID:</span> <span class=\"value\">#";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Date:</span> <span class=\"value\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["consultation_date"]) || array_key_exists("consultation_date", $context) ? $context["consultation_date"] : (function () { throw new RuntimeError('Variable "consultation_date" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">";
        // line 111
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Dog:</span> <span class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dog_name"]) || array_key_exists("dog_name", $context) ? $context["dog_name"] : (function () { throw new RuntimeError('Variable "dog_name" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Veterinarian:</span> <span class=\"value\">";
        // line 113
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "fullName", [], "any", false, false, false, 113), "html", null, true)) : ("N/A"));
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Diagnostic & Treatment</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Diagnostic:</span> <span class=\"value\">";
        // line 120
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 120, $this->source); })()), "diagnostic", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 120, $this->source); })()), "diagnostic", [], "any", false, false, false, 120), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Treatment:</span> <span class=\"value\">";
        // line 121
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 121, $this->source); })()), "traitement", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["consultation"]) || array_key_exists("consultation", $context) ? $context["consultation"] : (function () { throw new RuntimeError('Variable "consultation" does not exist.', 121, $this->source); })()), "traitement", [], "any", false, false, false, 121), "html", null, true)) : ("N/A"));
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">Follow-up Information</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Follow-up ID:</span> <span class=\"value\">#";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Status (Etat):</span> <span class=\"value\">";
        // line 129
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 129, $this->source); })()), "etat", [], "any", false, false, false, 129)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 129, $this->source); })()), "etat", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Type:</span> <span class=\"value\">";
        // line 130
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 130, $this->source); })()), "type", [], "any", false, false, false, 130)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 130, $this->source); })()), "type", [], "any", false, false, false, 130), "html", null, true)) : ("N/A"));
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Next Visit:</span> <span class=\"value\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next_visit"]) || array_key_exists("next_visit", $context) ? $context["next_visit"] : (function () { throw new RuntimeError('Variable "next_visit" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Emergency Level:</span> <span class=\"value\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["suivi"]) || array_key_exists("suivi", $context) ? $context["suivi"] : (function () { throw new RuntimeError('Variable "suivi" does not exist.', 132, $this->source); })()), "emergencyLevelDisplay", [], "any", false, false, false, 132), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Affected Parts:</span> <span class=\"value\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["affected_parts_text"]) || array_key_exists("affected_parts_text", $context) ? $context["affected_parts_text"] : (function () { throw new RuntimeError('Variable "affected_parts_text" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "</span></div>
        </div>
    </div>

    <div class=\"card\">
        <div class=\"card-title\">AI-Powered Analysis</div>
        <div class=\"card-body\">
            <div class=\"row\"><span class=\"label\">Main Organ:</span> <span class=\"value\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["organ_name"]) || array_key_exists("organ_name", $context) ? $context["organ_name"] : (function () { throw new RuntimeError('Variable "organ_name" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "</span></div>
            ";
        // line 141
        if ((($tmp = (isset($context["organ_image_data_uri"]) || array_key_exists("organ_image_data_uri", $context) ? $context["organ_image_data_uri"] : (function () { throw new RuntimeError('Variable "organ_image_data_uri" does not exist.', 141, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "                <div class=\"organ-block\">
                    <img class=\"organ-photo\" src=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["organ_image_data_uri"]) || array_key_exists("organ_image_data_uri", $context) ? $context["organ_image_data_uri"] : (function () { throw new RuntimeError('Variable "organ_image_data_uri" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "\" alt=\"Organ image\">
                </div>
            ";
        }
        // line 146
        yield "            <div class=\"row\"><span class=\"label\">Symptoms:</span> <span class=\"value\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["symptoms"]) || array_key_exists("symptoms", $context) ? $context["symptoms"] : (function () { throw new RuntimeError('Variable "symptoms" does not exist.', 146, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Condition:</span> <span class=\"value\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["predicted_condition"]) || array_key_exists("predicted_condition", $context) ? $context["predicted_condition"] : (function () { throw new RuntimeError('Variable "predicted_condition" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Predicted Emergency:</span> <span class=\"value\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["predicted_emergency"]) || array_key_exists("predicted_emergency", $context) ? $context["predicted_emergency"] : (function () { throw new RuntimeError('Variable "predicted_emergency" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "</span></div>
            <div class=\"row\"><span class=\"label\">Medical Analysis Report:</span></div>
            <div class=\"pre\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["analysis_report"]) || array_key_exists("analysis_report", $context) ? $context["analysis_report"] : (function () { throw new RuntimeError('Variable "analysis_report" does not exist.', 150, $this->source); })()), "html", null, true);
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
        return array (  268 => 150,  263 => 148,  259 => 147,  254 => 146,  248 => 143,  245 => 142,  243 => 141,  239 => 140,  229 => 133,  225 => 132,  221 => 131,  217 => 130,  213 => 129,  209 => 128,  199 => 121,  195 => 120,  185 => 113,  181 => 112,  177 => 111,  173 => 110,  169 => 109,  160 => 103,  155 => 100,  149 => 97,  146 => 96,  144 => 95,  48 => 1,);
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
        .organ-block {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-top: 8px;
        }
        .organ-photo {
            width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            background: #f3f4f6;
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
            <div class=\"row\"><span class=\"label\">Main Organ:</span> <span class=\"value\">{{ organ_name }}</span></div>
            {% if organ_image_data_uri %}
                <div class=\"organ-block\">
                    <img class=\"organ-photo\" src=\"{{ organ_image_data_uri }}\" alt=\"Organ image\">
                </div>
            {% endif %}
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
