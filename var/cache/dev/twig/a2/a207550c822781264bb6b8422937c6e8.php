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

/* components/_header.html.twig */
class __TwigTemplate_5edd8e73a41f7159fe4838af8d81af50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_header.html.twig"));

        // line 1
        yield "<header class=\"bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between gap-4 flex-shrink-0\">
    <h1 class=\"text-xl font-bold text-gray-800\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "</h1>
    <div class=\"flex items-center gap-4 flex-wrap\">
        <div class=\"relative\">
            <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/></svg>
            </span>
            <input type=\"search\" placeholder=\"Search\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg w-64 focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
        </div>
        <select class=\"px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            <option>Eng (US)</option>
        </select>
        <button type=\"button\" class=\"relative p-2 text-gray-500 hover:bg-gray-100 rounded-lg\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/></svg>
            <span class=\"absolute top-1.5 right-1.5 w-2 h-2 bg-paw-orange rounded-full\"></span>
        </button>
        <div class=\"flex items-center gap-3 pl-2 border-l border-gray-200\">
            <div class=\"w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-medium\">MA</div>
            <div>
                <p class=\"font-medium text-gray-800 text-sm\">Mohammed Amine</p>
                <p class=\"text-gray-500 text-xs\">Admin</p>
            </div>
            <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
            </button>
        </div>
    </div>
</header>
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
        return "components/_header.html.twig";
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
        return array (  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between gap-4 flex-shrink-0\">
    <h1 class=\"text-xl font-bold text-gray-800\">{{ page_title }}</h1>
    <div class=\"flex items-center gap-4 flex-wrap\">
        <div class=\"relative\">
            <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/></svg>
            </span>
            <input type=\"search\" placeholder=\"Search\" class=\"pl-10 pr-4 py-2 border border-gray-200 rounded-lg w-64 focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
        </div>
        <select class=\"px-4 py-2 border border-gray-200 rounded-lg bg-white text-gray-700 focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\">
            <option>Eng (US)</option>
        </select>
        <button type=\"button\" class=\"relative p-2 text-gray-500 hover:bg-gray-100 rounded-lg\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/></svg>
            <span class=\"absolute top-1.5 right-1.5 w-2 h-2 bg-paw-orange rounded-full\"></span>
        </button>
        <div class=\"flex items-center gap-3 pl-2 border-l border-gray-200\">
            <div class=\"w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-medium\">MA</div>
            <div>
                <p class=\"font-medium text-gray-800 text-sm\">Mohammed Amine</p>
                <p class=\"text-gray-500 text-xs\">Admin</p>
            </div>
            <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\"/></svg>
            </button>
        </div>
    </div>
</header>
", "components/_header.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\components\\_header.html.twig");
    }
}
