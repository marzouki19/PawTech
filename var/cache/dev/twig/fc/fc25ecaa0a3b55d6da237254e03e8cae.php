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

/* components/_confirm_modal.html.twig */
class __TwigTemplate_87c5367682ef3c41d042c6100d5a6d76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_confirm_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_confirm_modal.html.twig"));

        // line 1
        yield "<div id=\"confirm-modal\" class=\"fixed inset-0 z-50 hidden flex items-center justify-center\">
  <div id=\"confirm-modal-backdrop\" class=\"absolute inset-0 bg-black bg-opacity-40 backdrop-blur-sm transition-opacity duration-200 opacity-0\"></div>
  <div id=\"confirm-modal-content\" class=\"relative bg-white rounded-lg shadow-lg w-full max-w-md z-10 p-6 transform transition-all duration-200 scale-95 opacity-0\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"confirm-modal-title\">
    <h3 id=\"confirm-modal-title\" class=\"text-lg font-semibold mb-2\">Confirm delete</h3>
    <p id=\"confirm-modal-message\" class=\"text-sm text-gray-600 mb-4\">Are you sure you want to delete this item?</p>
    <div class=\"flex justify-end gap-3\">
      <button id=\"confirm-modal-cancel\" type=\"button\" class=\"px-4 py-2 bg-gray-100 rounded\">Cancel</button>
      <button id=\"confirm-modal-confirm\" type=\"button\" class=\"px-4 py-2 bg-red-600 text-white rounded\">Delete</button>
    </div>
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
        return "components/_confirm_modal.html.twig";
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
        return new Source("<div id=\"confirm-modal\" class=\"fixed inset-0 z-50 hidden flex items-center justify-center\">
  <div id=\"confirm-modal-backdrop\" class=\"absolute inset-0 bg-black bg-opacity-40 backdrop-blur-sm transition-opacity duration-200 opacity-0\"></div>
  <div id=\"confirm-modal-content\" class=\"relative bg-white rounded-lg shadow-lg w-full max-w-md z-10 p-6 transform transition-all duration-200 scale-95 opacity-0\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"confirm-modal-title\">
    <h3 id=\"confirm-modal-title\" class=\"text-lg font-semibold mb-2\">Confirm delete</h3>
    <p id=\"confirm-modal-message\" class=\"text-sm text-gray-600 mb-4\">Are you sure you want to delete this item?</p>
    <div class=\"flex justify-end gap-3\">
      <button id=\"confirm-modal-cancel\" type=\"button\" class=\"px-4 py-2 bg-gray-100 rounded\">Cancel</button>
      <button id=\"confirm-modal-confirm\" type=\"button\" class=\"px-4 py-2 bg-red-600 text-white rounded\">Delete</button>
    </div>
  </div>
</div>
", "components/_confirm_modal.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\components\\_confirm_modal.html.twig");
    }
}
