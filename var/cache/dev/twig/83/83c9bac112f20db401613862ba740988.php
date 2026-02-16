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
        yield "﻿<aside class=\"w-64 bg-white flex-shrink-0 flex flex-col shadow-sm border-r border-gray-200\">
    <div class=\"p-6\">
        <a href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"flex items-center gap-2 text-paw-orange font-bold text-xl\">
            <svg class=\"w-8 h-8\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                <path d=\"M12 10a2 2 0 1 0-4 2 2 0 0 0 0 4zm-1 2.5a1 1 0 0 1 2 0v4a1 1 0 1 1-2 0v-4zm2.5-2.5a1.5 1 5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
            </svg>
            PawTech
        </a>
    </div>
    
    <nav class=\"flex-1 px-4 space-y-1\">
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg ";
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 12, $this->source); })()) == "evenement")) ? ("bg-orange-50 text-paw-orange") : ("text-gray-600 hover:bg-gray-50"));
        yield "\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
            </svg>
            Events
        </a>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guest_index");
        yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg ";
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 18, $this->source); })()) == "guest")) ? ("bg-orange-50 text-paw-orange") : ("text-gray-600 hover:bg-gray-50"));
        yield "\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
            </svg>
            Guests
        </a>
        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        yield "\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg ";
        yield ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 24, $this->source); })()) == "participation")) ? ("bg-orange-50 text-paw-orange") : ("text-gray-600 hover:bg-gray-50"));
        yield "\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4\"/>
            </svg>
            Participations
        </a>
    </nav>
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
        return array (  86 => 24,  75 => 18,  64 => 12,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("﻿<aside class=\"w-64 bg-white flex-shrink-0 flex flex-col shadow-sm border-r border-gray-200\">
    <div class=\"p-6\">
        <a href=\"{{ path('app_home') }}\" class=\"flex items-center gap-2 text-paw-orange font-bold text-xl\">
            <svg class=\"w-8 h-8\" viewBox=\"0 0 24 24\" fill=\"currentColor\" aria-hidden=\"true\">
                <path d=\"M12 10a2 2 0 1 0-4 2 2 0 0 0 0 4zm-1 2.5a1 1 0 0 1 2 0v4a1 1 0 1 1-2 0v-4zm2.5-2.5a1.5 1 5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z\"/>
            </svg>
            PawTech
        </a>
    </div>
    
    <nav class=\"flex-1 px-4 space-y-1\">
        <a href=\"{{ path('app_evenement_index') }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg {{ active == 'evenement' ? 'bg-orange-50 text-paw-orange' : 'text-gray-600 hover:bg-gray-50' }}\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z\"/>
            </svg>
            Events
        </a>
        <a href=\"{{ path('app_guest_index') }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg {{ active == 'guest' ? 'bg-orange-50 text-paw-orange' : 'text-gray-600 hover:bg-gray-50' }}\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\"/>
            </svg>
            Guests
        </a>
        <a href=\"{{ path('app_participation_index') }}\" class=\"nav-item flex items-center gap-3 px-4 py-3 rounded-lg {{ active == 'participation' ? 'bg-orange-50 text-paw-orange' : 'text-gray-600 hover:bg-gray-50' }}\">
            <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4\"/>
            </svg>
            Participations
        </a>
    </nav>
</aside>
", "components/_sidebar.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\components\\_sidebar.html.twig");
    }
}
