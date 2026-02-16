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

/* pages/donation.html.twig */
class __TwigTemplate_3634d39f3f17480612283745a57ffb37 extends Template
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
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/donation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/donation.html.twig"));

        $this->parent = $this->load("base_front.html.twig", 1);
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

        yield "Donation - PawTech";
        
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
        yield "    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Support</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Help dogs find<br> a better life
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Your donation supports rescue, medical care, food, and adoption programs.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Donation header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Make a donation</h2>
                <p class=\"mt-3 text-gray-600\">Choose an amount and leave a message. (This is a front-end template only.)</p>

                <div class=\"mt-6 grid grid-cols-3 gap-3\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([10, 25, 50, 100, 200, 500]);
        foreach ($context['_seq'] as $context["_key"] => $context["amt"]) {
            // line 40
            yield "                        <button type=\"button\" class=\"rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm font-extrabold text-gray-900 hover:border-orange-400 hover:text-orange-600 transition\">
                            \$";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["amt"], "html", null, true);
            yield "
                        </button>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['amt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "                </div>

                <form class=\"mt-6 space-y-4\">
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Full name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Your name\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Email</label>
                        <input type=\"email\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"you@example.com\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Message (optional)</label>
                        <textarea rows=\"4\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Leave a note...\"></textarea>
                    </div>
                    <button type=\"button\" class=\"w-full rounded-2xl bg-orange-500 px-6 py-3 text-white font-extrabold hover:bg-orange-600 transition\">
                        Donate Now
                    </button>
                </form>
            </div>

            <div class=\"space-y-6\">
                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                    <h2 class=\"text-xl font-extrabold text-gray-900\">Where your money goes</h2>
                    <div class=\"mt-5 space-y-4\">
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["label" => "Medical care", "pct" => 42], ["label" => "Food & supplies", "pct" => 28], ["label" => "Rescue & transport", "pct" => 18], ["label" => "Shelter support", "pct" => 12]]);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            yield "                            <div>
                                <div class=\"flex items-center justify-between text-sm\">
                                    <span class=\"font-semibold text-gray-900\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 77), "html", null, true);
            yield "</span>
                                    <span class=\"text-gray-500\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pct", [], "any", false, false, false, 78), "html", null, true);
            yield "%</span>
                                </div>
                                <div class=\"mt-2 h-2 rounded-full bg-gray-100 overflow-hidden\">
                                    <div class=\"h-full bg-orange-500\" style=\"width: ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "pct", [], "any", false, false, false, 81), "html", null, true);
            yield "%\"></div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                    </div>
                </div>

                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                    <h2 class=\"text-xl font-extrabold text-gray-900\">Need help?</h2>
                    <p class=\"mt-3 text-gray-600\">Want to donate supplies or volunteer? Contact us and we’ll guide you.</p>
                    <div class=\"mt-6\">
                        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
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
        return "pages/donation.html.twig";
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
        return array (  215 => 92,  206 => 85,  196 => 81,  190 => 78,  186 => 77,  182 => 75,  178 => 69,  151 => 44,  142 => 41,  139 => 40,  135 => 39,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Donation - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Support</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Help dogs find<br> a better life
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Your donation supports rescue, medical care, food, and adoption programs.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Donation header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Make a donation</h2>
                <p class=\"mt-3 text-gray-600\">Choose an amount and leave a message. (This is a front-end template only.)</p>

                <div class=\"mt-6 grid grid-cols-3 gap-3\">
                    {% for amt in [10, 25, 50, 100, 200, 500] %}
                        <button type=\"button\" class=\"rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm font-extrabold text-gray-900 hover:border-orange-400 hover:text-orange-600 transition\">
                            \${{ amt }}
                        </button>
                    {% endfor %}
                </div>

                <form class=\"mt-6 space-y-4\">
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Full name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Your name\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Email</label>
                        <input type=\"email\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"you@example.com\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Message (optional)</label>
                        <textarea rows=\"4\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Leave a note...\"></textarea>
                    </div>
                    <button type=\"button\" class=\"w-full rounded-2xl bg-orange-500 px-6 py-3 text-white font-extrabold hover:bg-orange-600 transition\">
                        Donate Now
                    </button>
                </form>
            </div>

            <div class=\"space-y-6\">
                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                    <h2 class=\"text-xl font-extrabold text-gray-900\">Where your money goes</h2>
                    <div class=\"mt-5 space-y-4\">
                        {% for item in [
                            {label:'Medical care', pct:42},
                            {label:'Food & supplies', pct:28},
                            {label:'Rescue & transport', pct:18},
                            {label:'Shelter support', pct:12}
                        ] %}
                            <div>
                                <div class=\"flex items-center justify-between text-sm\">
                                    <span class=\"font-semibold text-gray-900\">{{ item.label }}</span>
                                    <span class=\"text-gray-500\">{{ item.pct }}%</span>
                                </div>
                                <div class=\"mt-2 h-2 rounded-full bg-gray-100 overflow-hidden\">
                                    <div class=\"h-full bg-orange-500\" style=\"width: {{ item.pct }}%\"></div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                    <h2 class=\"text-xl font-extrabold text-gray-900\">Need help?</h2>
                    <p class=\"mt-3 text-gray-600\">Want to donate supplies or volunteer? Contact us and we’ll guide you.</p>
                    <div class=\"mt-6\">
                        <a href=\"{{ path('app_contact') }}\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "pages/donation.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\donation.html.twig");
    }
}
