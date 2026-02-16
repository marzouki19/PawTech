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

/* pages/home.html.twig */
class __TwigTemplate_435b13bae247f5b7a0f414a29de60bb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

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

        yield "Home - PawTech";
        
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
            <div class=\"absolute -bottom-32 -left-32 h-[28rem] w-[28rem] rounded-full bg-orange-100\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-14 lg:py-20 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">PawTech</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Adopt Your Dog
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Help a dog find a forever home. Browse adorable companions, learn their story, and adopt with confidence.
                </p>

                <div class=\"mt-7 flex flex-wrap gap-3\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        View Events
                    </a>
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"inline-flex items-center rounded-full border border-gray-300 bg-white px-6 py-3 font-semibold text-gray-800 hover:border-orange-400 hover:text-orange-600 transition\">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <div class=\"absolute -right-10 -top-10 h-72 w-72 rounded-full bg-orange-300/70\"></div>
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Hero image</span>
                    </div>
                    <div class=\"mt-5 grid grid-cols-3 gap-3\">
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"container mx-auto px-4 lg:px-8 py-14\">
        <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden grid lg:grid-cols-2\">
            <div class=\"p-8 lg:p-12\">
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Rehome</p>
                <h2 class=\"mt-2 text-3xl font-extrabold text-gray-900\">Don’t Abandon — Rehome</h2>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    If you can’t keep your dog, we can help you rehome responsibly. Submit a request and our team will guide you.
                </p>
                <div class=\"mt-7\">
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Get an Appointment
                    </a>
                </div>
            </div>
            <div class=\"bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center p-10\">
                <div class=\"w-full max-w-md rounded-3xl bg-white/70 backdrop-blur border border-white/60 p-8\">
                    <div class=\"h-48 rounded-2xl bg-white/60\"></div>
                    <div class=\"mt-4 h-4 w-2/3 rounded bg-white/60\"></div>
                    <div class=\"mt-2 h-4 w-1/2 rounded bg-white/60\"></div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Next Events</h2>
            </div>
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"text-sm font-semibold text-orange-600 hover:text-orange-700\">See more</a>
        </div>

        <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "My Dog 2026", "date" => "Jan 2, 2026", "tag" => "Show"], ["title" => "Puppy Bowl", "date" => "Feb 16, 2026", "tag" => "Meetup"], ["title" => "Art With Dogs", "date" => "Mar 11, 2026", "tag" => "Workshop"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 89
            yield "                <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                    <div class=\"aspect-[16/9] bg-gray-100\"></div>
                    <div class=\"p-5\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                            <span class=\"rounded-full bg-gray-100 px-2 py-1 font-semibold text-gray-700\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tag", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                            <span>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
                        </div>
                        <h3 class=\"mt-3 font-extrabold text-gray-900\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 96), "html", null, true);
            yield "</h3>
                        <p class=\"mt-2 text-sm text-gray-600\">Join us for a fun dog-friendly event with activities, training tips, and more.</p>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "        </div>
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
        return "pages/home.html.twig";
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
        return array (  222 => 101,  211 => 96,  206 => 94,  202 => 93,  196 => 89,  192 => 84,  185 => 80,  161 => 59,  126 => 27,  120 => 24,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Home - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
            <div class=\"absolute -bottom-32 -left-32 h-[28rem] w-[28rem] rounded-full bg-orange-100\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-14 lg:py-20 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">PawTech</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Adopt Your Dog
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Help a dog find a forever home. Browse adorable companions, learn their story, and adopt with confidence.
                </p>

                <div class=\"mt-7 flex flex-wrap gap-3\">
                    <a href=\"{{ path('app_events') }}\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        View Events
                    </a>
                    <a href=\"{{ path('app_contact') }}\" class=\"inline-flex items-center rounded-full border border-gray-300 bg-white px-6 py-3 font-semibold text-gray-800 hover:border-orange-400 hover:text-orange-600 transition\">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <div class=\"absolute -right-10 -top-10 h-72 w-72 rounded-full bg-orange-300/70\"></div>
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Hero image</span>
                    </div>
                    <div class=\"mt-5 grid grid-cols-3 gap-3\">
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                        <div class=\"h-16 rounded-xl bg-gray-100\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=\"container mx-auto px-4 lg:px-8 py-14\">
        <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden grid lg:grid-cols-2\">
            <div class=\"p-8 lg:p-12\">
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Rehome</p>
                <h2 class=\"mt-2 text-3xl font-extrabold text-gray-900\">Don’t Abandon — Rehome</h2>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    If you can’t keep your dog, we can help you rehome responsibly. Submit a request and our team will guide you.
                </p>
                <div class=\"mt-7\">
                    <a href=\"{{ path('app_contact') }}\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Get an Appointment
                    </a>
                </div>
            </div>
            <div class=\"bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center p-10\">
                <div class=\"w-full max-w-md rounded-3xl bg-white/70 backdrop-blur border border-white/60 p-8\">
                    <div class=\"h-48 rounded-2xl bg-white/60\"></div>
                    <div class=\"mt-4 h-4 w-2/3 rounded bg-white/60\"></div>
                    <div class=\"mt-2 h-4 w-1/2 rounded bg-white/60\"></div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Next Events</h2>
            </div>
            <a href=\"{{ path('app_events') }}\" class=\"text-sm font-semibold text-orange-600 hover:text-orange-700\">See more</a>
        </div>

        <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
            {% for event in [
                {title:'My Dog 2026', date:'Jan 2, 2026', tag:'Show'},
                {title:'Puppy Bowl', date:'Feb 16, 2026', tag:'Meetup'},
                {title:'Art With Dogs', date:'Mar 11, 2026', tag:'Workshop'}
            ] %}
                <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                    <div class=\"aspect-[16/9] bg-gray-100\"></div>
                    <div class=\"p-5\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                            <span class=\"rounded-full bg-gray-100 px-2 py-1 font-semibold text-gray-700\">{{ event.tag }}</span>
                            <span>{{ event.date }}</span>
                        </div>
                        <h3 class=\"mt-3 font-extrabold text-gray-900\">{{ event.title }}</h3>
                        <p class=\"mt-2 text-sm text-gray-600\">Join us for a fun dog-friendly event with activities, training tips, and more.</p>
                    </div>
                </article>
            {% endfor %}
        </div>
    </section>
{% endblock %}

", "pages/home.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\home.html.twig");
    }
}
