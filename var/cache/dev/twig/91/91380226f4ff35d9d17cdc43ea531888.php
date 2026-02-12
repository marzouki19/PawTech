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

/* components/_form_modal.html.twig */
class __TwigTemplate_66df4e13c9fcc14130f4ec7a87f3a672 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_form_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_form_modal.html.twig"));

        // line 1
        yield "<div id=\"form-modal\" class=\"fixed inset-0 z-50 hidden flex items-center justify-center\">
  <div id=\"form-modal-backdrop\" class=\"absolute inset-0 bg-black bg-opacity-40 backdrop-blur-sm transition-opacity duration-200 opacity-0\"></div>
  <div id=\"form-modal-content\" class=\"relative bg-white rounded-lg shadow-lg w-full max-w-2xl z-10 p-6 transform transition-all duration-200 scale-95 opacity-0\" role=\"dialog\" aria-modal=\"true\">
    <div id=\"form-modal-inner\"></div>
  </div>
</div>
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
        return "components/_form_modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"form-modal\" class=\"fixed inset-0 z-50 hidden flex items-center justify-center\">
  <div id=\"form-modal-backdrop\" class=\"absolute inset-0 bg-black bg-opacity-40 backdrop-blur-sm transition-opacity duration-200 opacity-0\"></div>
  <div id=\"form-modal-content\" class=\"relative bg-white rounded-lg shadow-lg w-full max-w-2xl z-10 p-6 transform transition-all duration-200 scale-95 opacity-0\" role=\"dialog\" aria-modal=\"true\">
    <div id=\"form-modal-inner\"></div>
  </div>
</div>
", "components/_form_modal.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\components\\_form_modal.html.twig");
    }
}
