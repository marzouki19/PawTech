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

/* consultation/_form.html.twig */
class __TwigTemplate_427b7ab49dbf5f467789e84538b59002 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        yield "
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        yield "
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'label');
        yield "</label>
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition", "placeholder" => "Enter your name"]]);
        // line 9
        yield "
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'errors');
        yield "
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'label');
        yield "</label>
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition", "placeholder" => "your.email@example.com"]]);
        // line 18
        yield "
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'errors');
        yield "
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "telephone", [], "any", false, false, false, 23), 'label');
        yield "</label>
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition", "placeholder" => "+216 XX XXX XXX"]]);
        // line 27
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'errors');
        yield "
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), 'label');
        yield "</label>
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"]]);
        // line 35
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "date", [], "any", false, false, false, 36), 'errors');
        yield "
    </div>
    
    ";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 39)) {
            // line 40
            yield "    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41), 'label');
            yield "</label>
        ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"]]);
            // line 44
            yield "
        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'errors');
            yield "
    </div>
    ";
        }
        // line 48
        yield "    
    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "veterinaire", [], "any", true, true, false, 49)) {
            // line 50
            yield "    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "veterinaire", [], "any", false, false, false, 51), 'label');
            yield "</label>
        ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "veterinaire", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"]]);
            // line 54
            yield "
        ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "veterinaire", [], "any", false, false, false, 55), 'errors');
            yield "
    </div>
    ";
        }
        // line 58
        yield "    
    ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "diagnostic", [], "any", true, true, false, 59)) {
            // line 60
            yield "    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "diagnostic", [], "any", false, false, false, 61), 'label');
            yield "</label>
        ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "diagnostic", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition", "rows" => 3, "placeholder" => "Diagnostic details..."]]);
            // line 66
            yield "
        ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "diagnostic", [], "any", false, false, false, 67), 'errors');
            yield "
    </div>
    ";
        }
        // line 70
        yield "    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "message", [], "any", false, false, false, 72), 'label');
        yield "</label>
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "message", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition", "rows" => 4, "placeholder" => "Please describe your dog's symptoms or reason for appointment..."]]);
        // line 77
        yield "
        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "message", [], "any", false, false, false, 78), 'errors');
        yield "
    </div>
    
    <div class=\"pt-4\">
        <button type=\"submit\" class=\"w-full inline-flex justify-center items-center rounded-full bg-orange-600 px-6 py-3 text-white font-semibold hover:bg-orange-700 transition focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2\">
            ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Make Appointment")) : ("Make Appointment")), "html", null, true);
        yield "
        </button>
    </div>
";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "consultation/_form.html.twig";
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
        return array (  214 => 86,  208 => 83,  200 => 78,  197 => 77,  195 => 73,  191 => 72,  187 => 70,  181 => 67,  178 => 66,  176 => 62,  172 => 61,  169 => 60,  167 => 59,  164 => 58,  158 => 55,  155 => 54,  153 => 52,  149 => 51,  146 => 50,  144 => 49,  141 => 48,  135 => 45,  132 => 44,  130 => 42,  126 => 41,  123 => 40,  121 => 39,  115 => 36,  112 => 35,  110 => 33,  106 => 32,  99 => 28,  96 => 27,  94 => 24,  90 => 23,  83 => 19,  80 => 18,  78 => 15,  74 => 14,  67 => 10,  64 => 9,  62 => 6,  58 => 5,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'space-y-4'}}) }}
    {{ form_errors(form) }}
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.nom) }}</label>
        {{ form_widget(form.nom, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition',
            'placeholder': 'Enter your name'
        }}) }}
        {{ form_errors(form.nom) }}
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.email) }}</label>
        {{ form_widget(form.email, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition',
            'placeholder': 'your.email@example.com'
        }}) }}
        {{ form_errors(form.email) }}
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.telephone) }}</label>
        {{ form_widget(form.telephone, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition',
            'placeholder': '+216 XX XXX XXX'
        }}) }}
        {{ form_errors(form.telephone) }}
    </div>
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.date) }}</label>
        {{ form_widget(form.date, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition'
        }}) }}
        {{ form_errors(form.date) }}
    </div>
    
    {% if form.type is defined %}
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.type) }}</label>
        {{ form_widget(form.type, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition'
        }}) }}
        {{ form_errors(form.type) }}
    </div>
    {% endif %}
    
    {% if form.veterinaire is defined %}
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.veterinaire) }}</label>
        {{ form_widget(form.veterinaire, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition'
        }}) }}
        {{ form_errors(form.veterinaire) }}
    </div>
    {% endif %}
    
    {% if form.diagnostic is defined %}
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.diagnostic) }}</label>
        {{ form_widget(form.diagnostic, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition',
            'rows': 3,
            'placeholder': 'Diagnostic details...'
        }}) }}
        {{ form_errors(form.diagnostic) }}
    </div>
    {% endif %}
    
    <div>
        <label class=\"block text-sm font-medium text-gray-700 mb-1\">{{ form_label(form.message) }}</label>
        {{ form_widget(form.message, {'attr': {
            'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition',
            'rows': 4,
            'placeholder': 'Please describe your dog\\'s symptoms or reason for appointment...'
        }}) }}
        {{ form_errors(form.message) }}
    </div>
    
    <div class=\"pt-4\">
        <button type=\"submit\" class=\"w-full inline-flex justify-center items-center rounded-full bg-orange-600 px-6 py-3 text-white font-semibold hover:bg-orange-700 transition focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2\">
            {{ button_label|default('Make Appointment') }}
        </button>
    </div>
{{ form_end(form) }}", "consultation/_form.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\consultation\\_form.html.twig");
    }
}
