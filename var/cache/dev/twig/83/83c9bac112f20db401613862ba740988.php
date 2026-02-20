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

/* components/_sidebar.html.twig */
class __TwigTemplate_5c2dd83901c7e6527189027174074c8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        // line 1
        yield "<aside class=\"w-64 bg-white flex-shrink-0 flex flex-col shadow-sm border-r border-gray-200\">
    <div class=\"p-6\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-2 text-paw-orange font-bold text-xl\">
            <svg class=\"w-8 h-8\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                <path d=\"M12 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-1 2.5a1 1 0 0 1 2 0v4a1 1 0 1 1-2 0v-4zm2.5-2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm7 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
            </svg>
            PawTech
        </a>
    </div>
    <nav class=\"flex-1 px-3 space-y-0.5\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg ";
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 11, $this->source); })()) == "consultation")) ? ("bg-paw-orange text-white") : ("text-gray-600 hover:bg-gray-100"));
        yield "\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"/></svg>
            Consultation
        </a>
        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
        yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg ";
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })()) == "suivi")) ? ("bg-paw-orange text-white") : ("text-gray-600 hover:bg-gray-100"));
        yield "\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"/></svg>
            Suivi
        </a>
    </nav>
    <div class=\"p-3 border-t border-gray-200\">
        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"flex items-center gap-3 px-4 py-3 rounded-lg text-red-600 hover:bg-red-50\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/></svg>
            Logout
        </a>
    </div>
</aside>
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
        return "components/_sidebar.html.twig";
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
        return array (  83 => 21,  72 => 15,  63 => 11,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"w-64 bg-white flex-shrink-0 flex flex-col shadow-sm border-r border-gray-200\">
    <div class=\"p-6\">
        <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-2 text-paw-orange font-bold text-xl\">
            <svg class=\"w-8 h-8\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                <path d=\"M12 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-1 2.5a1 1 0 0 1 2 0v4a1 1 0 1 1-2 0v-4zm2.5-2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm7 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
            </svg>
            PawTech
        </a>
    </div>
    <nav class=\"flex-1 px-3 space-y-0.5\">
        <a href=\"{{ path('app_consultation_index') }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg {{ active == 'consultation' ? 'bg-paw-orange text-white' : 'text-gray-600 hover:bg-gray-100' }}\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\"/></svg>
            Consultation
        </a>
        <a href=\"{{ path('app_suivi_index') }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg {{ active == 'suivi' ? 'bg-paw-orange text-white' : 'text-gray-600 hover:bg-gray-100' }}\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"/></svg>
            Suivi
        </a>
    </nav>
    <div class=\"p-3 border-t border-gray-200\">
        <a href=\"{{ path('app_logout') }}\" class=\"flex items-center gap-3 px-4 py-3 rounded-lg text-red-600 hover:bg-red-50\">
            <svg class=\"w-5 h-5 flex-shrink-0\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1\"/></svg>
            Logout
        </a>
    </div>
</aside>
", "components/_sidebar.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\components\\_sidebar.html.twig");
    }
}
