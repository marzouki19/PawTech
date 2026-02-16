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

/* pages/notifications.html.twig */
class __TwigTemplate_2cf2fcf579824a42eb7d1e54ad2272dc extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/notifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/notifications.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Notifications - PawTech";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<section class=\"container mx-auto px-4 lg:px-8 py-12\">
    <div class=\"max-w-3xl mx-auto\">
        <div class=\"flex items-center justify-between mb-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Alerts</p>
                <h1 class=\"text-3xl font-extrabold text-gray-900 mt-1\">Notifications</h1>
            </div>
            <span class=\"inline-flex items-center rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-600\">
                ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 14, $this->source); })()), function ($__n__) use ($context, $macros) { $context["n"] = $__n__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 14, $this->source); })()), "unread", [], "any", false, false, false, 14); })), "html", null, true);
        yield " new
            </span>
        </div>

        <div class=\"space-y-3\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 20
            yield "                <article class=\"flex gap-4 rounded-2xl border px-5 py-4 shadow-sm transition
                    ";
            // line 21
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "unread", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-orange-50/60 border-orange-200") : ("bg-white border-gray-100"));
            yield "\">
                    <div class=\"flex h-12 w-12 items-center justify-center rounded-full
                        ";
            // line 23
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "unread", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-orange-500 text-white") : ("bg-gray-100 text-gray-500"));
            yield "\">
                        <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"></path>
                        </svg>
                    </div>
                    <div class=\"flex-1\">
                        <div class=\"flex items-center justify-between gap-3\">
                            <h3 class=\"font-semibold text-gray-900\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "title", [], "any", false, false, false, 30), "html", null, true);
            yield "</h3>
                            <span class=\"text-xs text-gray-500\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "time", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
                        </div>
                        <p class=\"text-sm text-gray-600 mt-1\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                        ";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "unread", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "                            <div class=\"mt-3 flex flex-wrap items-center gap-3\">
                                <span class=\"inline-flex items-center gap-1 text-xs font-semibold text-orange-600\">
                                    <span class=\"h-2 w-2 rounded-full bg-orange-500\"></span>
                                    New
                                </span>
                                <form method=\"post\" action=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_read", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("mark_read_" . CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 41))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"text-xs font-semibold text-gray-600 hover:text-gray-900\">
                                        Mark as read
                                    </button>
                                </form>
                            </div>
                        ";
            }
            // line 48
            yield "                    </div>
                </article>
            ";
            $context['_iterated'] = true;
        }
        // line 50
        if (!$context['_iterated']) {
            // line 51
            yield "                <div class=\"rounded-2xl border border-dashed border-gray-200 bg-white p-8 text-center text-gray-500\">
                    No notifications yet.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>
    </div>
</section>
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
        return "pages/notifications.html.twig";
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
        return array (  194 => 55,  185 => 51,  183 => 50,  177 => 48,  167 => 41,  163 => 40,  156 => 35,  154 => 34,  150 => 33,  145 => 31,  141 => 30,  131 => 23,  126 => 21,  123 => 20,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notifications - PawTech{% endblock %}

{% block body %}
<section class=\"container mx-auto px-4 lg:px-8 py-12\">
    <div class=\"max-w-3xl mx-auto\">
        <div class=\"flex items-center justify-between mb-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Alerts</p>
                <h1 class=\"text-3xl font-extrabold text-gray-900 mt-1\">Notifications</h1>
            </div>
            <span class=\"inline-flex items-center rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-600\">
                {{ notifications|filter(n => n.unread)|length }} new
            </span>
        </div>

        <div class=\"space-y-3\">
            {% for notification in notifications %}
                <article class=\"flex gap-4 rounded-2xl border px-5 py-4 shadow-sm transition
                    {{ notification.unread ? 'bg-orange-50/60 border-orange-200' : 'bg-white border-gray-100' }}\">
                    <div class=\"flex h-12 w-12 items-center justify-center rounded-full
                        {{ notification.unread ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-500' }}\">
                        <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"></path>
                        </svg>
                    </div>
                    <div class=\"flex-1\">
                        <div class=\"flex items-center justify-between gap-3\">
                            <h3 class=\"font-semibold text-gray-900\">{{ notification.title }}</h3>
                            <span class=\"text-xs text-gray-500\">{{ notification.time }}</span>
                        </div>
                        <p class=\"text-sm text-gray-600 mt-1\">{{ notification.message }}</p>
                        {% if notification.unread %}
                            <div class=\"mt-3 flex flex-wrap items-center gap-3\">
                                <span class=\"inline-flex items-center gap-1 text-xs font-semibold text-orange-600\">
                                    <span class=\"h-2 w-2 rounded-full bg-orange-500\"></span>
                                    New
                                </span>
                                <form method=\"post\" action=\"{{ path('app_notifications_read', { id: notification.id }) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('mark_read_' ~ notification.id) }}\">
                                    <button type=\"submit\" class=\"text-xs font-semibold text-gray-600 hover:text-gray-900\">
                                        Mark as read
                                    </button>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </article>
            {% else %}
                <div class=\"rounded-2xl border border-dashed border-gray-200 bg-white p-8 text-center text-gray-500\">
                    No notifications yet.
                </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}
", "pages/notifications.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\notifications.html.twig");
    }
}
