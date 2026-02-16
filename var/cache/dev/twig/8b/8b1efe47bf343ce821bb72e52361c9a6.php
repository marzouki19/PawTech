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

/* pages/about.html.twig */
class __TwigTemplate_fd77ea41d61e5d282eb9b5e15e0b0ae2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/about.html.twig"));

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

        yield "About Us - PawTech";
        
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
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">About us</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Where Dogs Come First
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    PawTech is a caring pet shop and adoption center dedicated to giving dogs a better life through responsible rehoming, quality products, and veterinary care.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">About header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"grid md:grid-cols-3 gap-6\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["value" => "2014", "label" => "Year founded"], ["value" => "2k+", "label" => "Dogs adopted"], ["value" => "98%", "label" => "Happy customers"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 39
            yield "                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-6 text-center\">
                    <p class=\"text-3xl font-extrabold text-gray-900\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                    <p class=\"mt-2 text-sm text-gray-600\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div>
                <h2 class=\"text-2xl font-extrabold text-gray-900\">Our mission</h2>
                <p class=\"mt-4 text-gray-600\">
                    We believe every dog deserves a safe, loving home. Our mission is to connect dogs with responsible owners, support them with high-quality products, and provide access to trusted veterinary care.
                </p>
            </div>
            <div>
                <h2 class=\"text-2xl font-extrabold text-gray-900\">What we offer</h2>
                <ul class=\"mt-4 space-y-3 text-gray-600\">
                    <li>• Dog adoption and rehoming programs</li>
                    <li>• Curated products for your dog’s health and happiness</li>
                    <li>• Veterinary services and expert advice</li>
                    <li>• Community events for dog lovers</li>
                </ul>
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
        return "pages/about.html.twig";
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
        return array (  150 => 44,  141 => 41,  137 => 40,  134 => 39,  130 => 34,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}About Us - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">About us</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Where Dogs Come First
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    PawTech is a caring pet shop and adoption center dedicated to giving dogs a better life through responsible rehoming, quality products, and veterinary care.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">About header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"grid md:grid-cols-3 gap-6\">
            {% for stat in [
                {value:'2014', label:'Year founded'},
                {value:'2k+', label:'Dogs adopted'},
                {value:'98%', label:'Happy customers'}
            ] %}
                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-6 text-center\">
                    <p class=\"text-3xl font-extrabold text-gray-900\">{{ stat.value }}</p>
                    <p class=\"mt-2 text-sm text-gray-600\">{{ stat.label }}</p>
                </div>
            {% endfor %}
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div>
                <h2 class=\"text-2xl font-extrabold text-gray-900\">Our mission</h2>
                <p class=\"mt-4 text-gray-600\">
                    We believe every dog deserves a safe, loving home. Our mission is to connect dogs with responsible owners, support them with high-quality products, and provide access to trusted veterinary care.
                </p>
            </div>
            <div>
                <h2 class=\"text-2xl font-extrabold text-gray-900\">What we offer</h2>
                <ul class=\"mt-4 space-y-3 text-gray-600\">
                    <li>• Dog adoption and rehoming programs</li>
                    <li>• Curated products for your dog’s health and happiness</li>
                    <li>• Veterinary services and expert advice</li>
                    <li>• Community events for dog lovers</li>
                </ul>
            </div>
        </div>
    </section>
{% endblock %}

", "pages/about.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\about.html.twig");
    }
}
