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

/* pages/contact.html.twig */
class __TwigTemplate_ea43c148decb92e8d94ba626073b18f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/contact.html.twig"));

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

        yield "Contact - PawTech";
        
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
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Contact</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    If animals could talk,<br> they’d talk about us!
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Feel free to contact us for questions, adoption support, products, and veterinary services.
                </p>
                <div class=\"mt-7 flex flex-wrap gap-3\">
                    <a href=\"#\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Contact header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Send us a message</h2>
                <form class=\"mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4\">
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">First Name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"First name\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Last Name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Last name\">
                    </div>
                    <div class=\"sm:col-span-2\">
                        <label class=\"text-sm font-semibold text-gray-700\">Email Address</label>
                        <input type=\"email\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Email address\">
                    </div>
                    <div class=\"sm:col-span-2\">
                        <label class=\"text-sm font-semibold text-gray-700\">Message</label>
                        <textarea rows=\"5\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Your message...\"></textarea>
                    </div>
                    <div class=\"sm:col-span-2\">
                        <button type=\"button\" class=\"w-full rounded-2xl bg-orange-500 px-6 py-3 text-white font-extrabold hover:bg-orange-600 transition\">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Feel free to contact us</h2>
                <p class=\"mt-3 text-gray-600\">
                    We’ll respond as soon as possible and help you get the best for your pet.
                </p>

                <div class=\"mt-6 space-y-4 text-sm\">
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">⌂</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Address</p>
                            <p class=\"text-gray-600\">2096 Ariana, e, sprit</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">@</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Email</p>
                            <p class=\"text-gray-600\">rgarton@outlook.com</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">☎</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Phone</p>
                            <p class=\"text-gray-600\">+216 58 458 152</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">⏱</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Opening hours</p>
                            <p class=\"text-gray-600\">Mon – Fri: 10AM – 10PM</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-8 rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9] flex items-center justify-center\">
                    <span class=\"text-gray-500 font-semibold\">Map</span>
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
        return "pages/contact.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Contact - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Contact</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    If animals could talk,<br> they’d talk about us!
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Feel free to contact us for questions, adoption support, products, and veterinary services.
                </p>
                <div class=\"mt-7 flex flex-wrap gap-3\">
                    <a href=\"#\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Contact header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"grid lg:grid-cols-2 gap-8 items-start\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Send us a message</h2>
                <form class=\"mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4\">
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">First Name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"First name\">
                    </div>
                    <div>
                        <label class=\"text-sm font-semibold text-gray-700\">Last Name</label>
                        <input class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Last name\">
                    </div>
                    <div class=\"sm:col-span-2\">
                        <label class=\"text-sm font-semibold text-gray-700\">Email Address</label>
                        <input type=\"email\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Email address\">
                    </div>
                    <div class=\"sm:col-span-2\">
                        <label class=\"text-sm font-semibold text-gray-700\">Message</label>
                        <textarea rows=\"5\" class=\"mt-2 w-full rounded-2xl border border-gray-200 bg-white px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Your message...\"></textarea>
                    </div>
                    <div class=\"sm:col-span-2\">
                        <button type=\"button\" class=\"w-full rounded-2xl bg-orange-500 px-6 py-3 text-white font-extrabold hover:bg-orange-600 transition\">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-7\">
                <h2 class=\"text-xl font-extrabold text-gray-900\">Feel free to contact us</h2>
                <p class=\"mt-3 text-gray-600\">
                    We’ll respond as soon as possible and help you get the best for your pet.
                </p>

                <div class=\"mt-6 space-y-4 text-sm\">
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">⌂</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Address</p>
                            <p class=\"text-gray-600\">2096 Ariana, e, sprit</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">@</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Email</p>
                            <p class=\"text-gray-600\">rgarton@outlook.com</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">☎</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Phone</p>
                            <p class=\"text-gray-600\">+216 58 458 152</p>
                        </div>
                    </div>
                    <div class=\"flex items-start gap-3\">
                        <div class=\"h-10 w-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">⏱</div>
                        <div>
                            <p class=\"font-semibold text-gray-900\">Opening hours</p>
                            <p class=\"text-gray-600\">Mon – Fri: 10AM – 10PM</p>
                        </div>
                    </div>
                </div>

                <div class=\"mt-8 rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9] flex items-center justify-center\">
                    <span class=\"text-gray-500 font-semibold\">Map</span>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "pages/contact.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\contact.html.twig");
    }
}
