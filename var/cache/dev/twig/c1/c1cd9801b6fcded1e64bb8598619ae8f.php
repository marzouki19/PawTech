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

/* base_front.html.twig */
class __TwigTemplate_b0d410c847f142765460d70ae3447545 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">

        ";
        // line 11
        yield "        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        ";
        // line 14
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        ";
        // line 17
        yield "        <style>
            .dropdown {
                position: relative;
            }
            
            .dropdown-menu {
                display: none;
                position: absolute;
                right: 0;
                top: 100%;
                margin-top: 0.5rem;
                min-width: 200px;
                background-color: white;
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                z-index: 50;
            }
            
            .dropdown:hover .dropdown-menu,
            .dropdown:focus-within .dropdown-menu {
                display: block;
            }
            
            .user-avatar {
                background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            }
            
            .animate-fade-in {
                animation: fadeIn 0.3s ease-in-out;
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        ";
        // line 60
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 62
        yield "
        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 66
        yield "    </head>
    <body class=\"min-h-screen flex flex-col bg-[#fdfdfd] text-gray-900\">
        ";
        // line 69
        yield "        <header class=\"bg-[#fff9f4] sticky top-0 z-50 shadow-sm\">



        

            ";
        // line 76
        yield "



            <!--<div class=\"border-b border-orange-100\">
                <div class=\"container mx-auto px-4 lg:px-8 flex items-center justify-between gap-4 py-2 text-[13px] text-gray-600\">
                    <div class=\"flex flex-wrap items-center gap-4\">
                        <span class=\"flex items-center gap-1\">
                            <span class=\"text-orange-500\">☎</span>
                            <span>+216 58 458 152</span>
                        </span>
                        <span class=\"hidden sm:inline-flex items-center gap-1\">
                            <span class=\"text-orange-500\">@</span>
                            <span>Pawtech@paws.tn</span>
                        </span>
                    </div>
                    <div class=\"hidden md:block text-gray-500\">
                        8529 Fairground St. Tallahassee, FL 32303
                    </div>
                </div>
            </div>-->

            ";
        // line 98
        yield " 
            <div class=\"container mx-auto px-4 lg:px-8 py-4\">
                <div class=\"hidden md:flex items-center justify-center\">
                    <div class=\"inline-flex items-center rounded-full bg-white shadow-[0_12px_30px_rgba(0,0,0,0.07)] px-8 py-3 gap-8\">
                        <div class=\"flex items-center gap-2\">
                            <span><img src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"PawTech Logo\" class=\"h-8\"></span>
                        </div>

                        <nav class=\"flex items-center gap-6 text-[15px] font-medium text-gray-800\">
                            ";
        // line 107
        $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "request", [], "any", false, false, false, 107), "attributes", [], "any", false, false, false, 107), "get", ["_route"], "method", false, false, false, 107);
        // line 108
        yield "                            ";
        // line 117
        yield "
                            ";
        // line 118
        yield $this->getTemplateForMacro("macro_link", $context, 118, $this->getSourceContext())->macro_link(...["Home", "app_home", (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 118, $this->source); })())]);
        yield "
                            ";
        // line 119
        yield $this->getTemplateForMacro("macro_link", $context, 119, $this->getSourceContext())->macro_link(...["Events", "app_events", (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 119, $this->source); })())]);
        yield "
                            ";
        // line 120
        yield $this->getTemplateForMacro("macro_link", $context, 120, $this->getSourceContext())->macro_link(...["Contact Us", "app_contact", (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 120, $this->source); })())]);
        yield "
                            ";
        // line 121
        yield $this->getTemplateForMacro("macro_link", $context, 121, $this->getSourceContext())->macro_link(...["About Us", "app_about", (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 121, $this->source); })())]);
        yield "
                            
                        </nav>
                    </div>
                </div>

                ";
        // line 128
        yield "                <div class=\"md:hidden flex items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2\">
                        <span><img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"PawTech Logo\" class=\"h-6\"></span>
                        <span class=\"font-semibold text-base text-orange-500\">PawTech</span>
                    </div>
                    
                    <button class=\"inline-flex h-9 w-9 items-center justify-center rounded-full bg-white shadow border border-gray-200 text-gray-700\" aria-label=\"Open menu\">
                        ☰
                    </button>
                </div>
            </div>
        </header>

        ";
        // line 142
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "flashes", ["success"], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 143
            yield "            <div class=\"fixed top-20 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-check-circle mr-2\"></i>
                    ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "        
        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "flashes", ["error"], "method", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 152
            yield "            <div class=\"fixed top-20 right-4 z-50 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-exclamation-circle mr-2\"></i>
                    ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "
        <main class=\"flex-1\">
            ";
        // line 161
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 162
        yield "        </main>

        <footer class=\"bg-white border-t mt-10\">
            <div class=\"container mx-auto px-4 lg:px-8 py-10 grid gap-8 md:grid-cols-4 text-sm\">
                <div>
                    <div class=\"flex items-center gap-2 mb-3\">
                        <span class=\"inline-flex h-8 w-8 items-center justify-center rounded-full bg-orange-500 text-white font-bold text-lg\">P</span>
                        <span class=\"font-semibold text-gray-900\">PawTech</span>
                    </div>
                    <p class=\"text-gray-500\">
                        Caring pet shop offering quality products and services to keep your pets happy, healthy, and comfortable.
                    </p>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Company</h3>
                    <ul class=\"space-y-1 text-gray-500\">
                        <li><a href=\"";
        // line 178
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"hover:text-orange-500\">About Us</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Blog</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Gift Cards</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Customer Service</h3>
                    <ul class=\"space-y-1 text-gray-500\">
                        <li><a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"hover:text-orange-500\">Contact us</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Shipping</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Returns</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Order Tracking</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Store</h3>
                    <p class=\"text-gray-500\">
                        8529 Fairground St.<br>
                        Tallahassee, FL 32303
                    </p>
                    <p class=\"mt-3 text-gray-500\">
                        <span class=\"block\">+216 58 458 152</span>
                        <span class=\"block\">pawtech@paws.tn</span>
                    </p>
                </div>
            </div>
            <div class=\"border-t\">
                <div class=\"container mx-auto px-4 lg:px-8 py-4 flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-gray-500\">
                    <span>© ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " PawTech Pet Shop. All rights reserved.</span>
                    <span class=\"flex items-center gap-3\">
                        <span>Visa</span>
                        <span>Mastercard</span>
                        <span>PayPal</span>
                    </span>
                </div>
            </div>
        </footer>
        
        ";
        // line 218
        yield "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Auto-hide flash messages after 5 seconds
                const flashMessages = document.querySelectorAll('.fixed.top-20.right-4.z-50');
                flashMessages.forEach(function(message) {
                    setTimeout(function() {
                        message.style.transition = 'opacity 0.5s';
                        message.style.opacity = '0';
                        setTimeout(function() {
                            if (message.parentNode) {
                                message.parentNode.removeChild(message);
                            }
                        }, 500);
                    }, 5000);
                });
            });
        </script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "PawTech - Pet Shop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 61
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 65
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
    public function macro_link($label = null, $route = null, $current = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "route" => $route,
            "current" => $current,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            // line 109
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 109, $this->source); })()));
            yield "\"
                                   class=\"relative pb-1 transition-colors ";
            // line 110
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 110, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 110, $this->source); })()))) ? ("text-orange-500") : ("text-gray-800 hover:text-orange-500"));
            yield "\">
                                    ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "
                                    ";
            // line 112
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 112, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 112, $this->source); })()))) {
                // line 113
                yield "                                        <span class=\"absolute left-0 right-0 -bottom-1 h-0.5 rounded-full bg-orange-500\"></span>
                                    ";
            }
            // line 115
            yield "                                </a>
                            ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_front.html.twig";
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
        return array (  526 => 115,  522 => 113,  520 => 112,  516 => 111,  512 => 110,  507 => 109,  487 => 108,  465 => 161,  442 => 64,  431 => 65,  428 => 64,  415 => 63,  404 => 61,  391 => 60,  368 => 6,  339 => 218,  326 => 207,  303 => 187,  291 => 178,  273 => 162,  271 => 161,  267 => 159,  257 => 155,  252 => 152,  248 => 151,  245 => 150,  235 => 146,  230 => 143,  225 => 142,  211 => 130,  207 => 128,  198 => 121,  194 => 120,  190 => 119,  186 => 118,  183 => 117,  181 => 108,  179 => 107,  172 => 103,  165 => 98,  141 => 76,  133 => 69,  129 => 66,  127 => 63,  124 => 62,  122 => 60,  77 => 17,  73 => 14,  69 => 11,  64 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}PawTech - Pet Shop{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\">

        {# Tailwind via CDN for rapid development.
           Later you can replace this with a compiled Tailwind build if you prefer. #}
        <script src=\"https://cdn.tailwindcss.com\"></script>
        
        {# Font Awesome for icons #}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
        
        {# Custom styles for dropdown and animations #}
        <style>
            .dropdown {
                position: relative;
            }
            
            .dropdown-menu {
                display: none;
                position: absolute;
                right: 0;
                top: 100%;
                margin-top: 0.5rem;
                min-width: 200px;
                background-color: white;
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                z-index: 50;
            }
            
            .dropdown:hover .dropdown-menu,
            .dropdown:focus-within .dropdown-menu {
                display: block;
            }
            
            .user-avatar {
                background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            }
            
            .animate-fade-in {
                animation: fadeIn 0.3s ease-in-out;
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>

        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body class=\"min-h-screen flex flex-col bg-[#fdfdfd] text-gray-900\">
        {# Main navigation shared by all pages (matches PawTech design) #}
        <header class=\"bg-[#fff9f4] sticky top-0 z-50 shadow-sm\">



        

            {# Top info bar #}




            <!--<div class=\"border-b border-orange-100\">
                <div class=\"container mx-auto px-4 lg:px-8 flex items-center justify-between gap-4 py-2 text-[13px] text-gray-600\">
                    <div class=\"flex flex-wrap items-center gap-4\">
                        <span class=\"flex items-center gap-1\">
                            <span class=\"text-orange-500\">☎</span>
                            <span>+216 58 458 152</span>
                        </span>
                        <span class=\"hidden sm:inline-flex items-center gap-1\">
                            <span class=\"text-orange-500\">@</span>
                            <span>Pawtech@paws.tn</span>
                        </span>
                    </div>
                    <div class=\"hidden md:block text-gray-500\">
                        8529 Fairground St. Tallahassee, FL 32303
                    </div>
                </div>
            </div>-->

            {# Main nav bar #} 
            <div class=\"container mx-auto px-4 lg:px-8 py-4\">
                <div class=\"hidden md:flex items-center justify-center\">
                    <div class=\"inline-flex items-center rounded-full bg-white shadow-[0_12px_30px_rgba(0,0,0,0.07)] px-8 py-3 gap-8\">
                        <div class=\"flex items-center gap-2\">
                            <span><img src=\"{{ asset('logo.png') }}\" alt=\"PawTech Logo\" class=\"h-8\"></span>
                        </div>

                        <nav class=\"flex items-center gap-6 text-[15px] font-medium text-gray-800\">
                            {% set current = app.request.attributes.get('_route') %}
                            {% macro link(label, route, current) %}
                                <a href=\"{{ path(route) }}\"
                                   class=\"relative pb-1 transition-colors {{ current == route ? 'text-orange-500' : 'text-gray-800 hover:text-orange-500' }}\">
                                    {{ label }}
                                    {% if current == route %}
                                        <span class=\"absolute left-0 right-0 -bottom-1 h-0.5 rounded-full bg-orange-500\"></span>
                                    {% endif %}
                                </a>
                            {% endmacro %}

                            {{ _self.link('Home', 'app_home', current) }}
                            {{ _self.link('Events', 'app_events', current) }}
                            {{ _self.link('Contact Us', 'app_contact', current) }}
                            {{ _self.link('About Us', 'app_about', current) }}
                            
                        </nav>
                    </div>
                </div>

                {# Simple mobile layout #}
                <div class=\"md:hidden flex items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2\">
                        <span><img src=\"{{ asset('logo.png') }}\" alt=\"PawTech Logo\" class=\"h-6\"></span>
                        <span class=\"font-semibold text-base text-orange-500\">PawTech</span>
                    </div>
                    
                    <button class=\"inline-flex h-9 w-9 items-center justify-center rounded-full bg-white shadow border border-gray-200 text-gray-700\" aria-label=\"Open menu\">
                        ☰
                    </button>
                </div>
            </div>
        </header>

        {# Flash Messages #}
        {% for message in app.flashes('success') %}
            <div class=\"fixed top-20 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-check-circle mr-2\"></i>
                    {{ message }}
                </div>
            </div>
        {% endfor %}
        
        {% for message in app.flashes('error') %}
            <div class=\"fixed top-20 right-4 z-50 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-exclamation-circle mr-2\"></i>
                    {{ message }}
                </div>
            </div>
        {% endfor %}

        <main class=\"flex-1\">
            {% block body %}{% endblock %}
        </main>

        <footer class=\"bg-white border-t mt-10\">
            <div class=\"container mx-auto px-4 lg:px-8 py-10 grid gap-8 md:grid-cols-4 text-sm\">
                <div>
                    <div class=\"flex items-center gap-2 mb-3\">
                        <span class=\"inline-flex h-8 w-8 items-center justify-center rounded-full bg-orange-500 text-white font-bold text-lg\">P</span>
                        <span class=\"font-semibold text-gray-900\">PawTech</span>
                    </div>
                    <p class=\"text-gray-500\">
                        Caring pet shop offering quality products and services to keep your pets happy, healthy, and comfortable.
                    </p>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Company</h3>
                    <ul class=\"space-y-1 text-gray-500\">
                        <li><a href=\"{{ path('app_about') }}\" class=\"hover:text-orange-500\">About Us</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Blog</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Gift Cards</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Customer Service</h3>
                    <ul class=\"space-y-1 text-gray-500\">
                        <li><a href=\"{{ path('app_contact') }}\" class=\"hover:text-orange-500\">Contact us</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Shipping</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Returns</a></li>
                        <li><a href=\"#\" class=\"hover:text-orange-500\">Order Tracking</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Store</h3>
                    <p class=\"text-gray-500\">
                        8529 Fairground St.<br>
                        Tallahassee, FL 32303
                    </p>
                    <p class=\"mt-3 text-gray-500\">
                        <span class=\"block\">+216 58 458 152</span>
                        <span class=\"block\">pawtech@paws.tn</span>
                    </p>
                </div>
            </div>
            <div class=\"border-t\">
                <div class=\"container mx-auto px-4 lg:px-8 py-4 flex flex-col md:flex-row justify-between items-center gap-2 text-xs text-gray-500\">
                    <span>© {{ \"now\"|date(\"Y\") }} PawTech Pet Shop. All rights reserved.</span>
                    <span class=\"flex items-center gap-3\">
                        <span>Visa</span>
                        <span>Mastercard</span>
                        <span>PayPal</span>
                    </span>
                </div>
            </div>
        </footer>
        
        {# Auto-hide flash messages after 5 seconds #}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Auto-hide flash messages after 5 seconds
                const flashMessages = document.querySelectorAll('.fixed.top-20.right-4.z-50');
                flashMessages.forEach(function(message) {
                    setTimeout(function() {
                        message.style.transition = 'opacity 0.5s';
                        message.style.opacity = '0';
                        setTimeout(function() {
                            if (message.parentNode) {
                                message.parentNode.removeChild(message);
                            }
                        }, 500);
                    }, 5000);
                });
            });
        </script>
    </body>
</html>", "base_front.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\base_front.html.twig");
    }
}
