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
        
        ";
        // line 15
        yield "        <div class=\"relative dropdown\" x-data=\"{ open: false }\">
            <button type=\"button\" @click=\"open = !open\" class=\"relative p-2 text-gray-500 hover:bg-gray-100 rounded-lg focus:outline-none\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/></svg>
                ";
        // line 19
        yield "                <span class=\"absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center\">3</span>
            </button>
            
            ";
        // line 23
        yield "            <div x-show=\"open\" @click.away=\"open = false\" x-transition class=\"absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50 hidden\" style=\"display: none;\">
                <div class=\"p-4 border-b border-gray-200\">
                    <h3 class=\"font-semibold text-gray-800\">Notifications</h3>
                </div>
                <div class=\"max-h-96 overflow-y-auto\">
                    ";
        // line 29
        yield "                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50 border-b border-gray-100\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-red-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">Station Inactive</p>
                                <p class=\"text-xs text-gray-500\">Station A1 is now inactive</p>
                                <p class=\"text-xs text-gray-400 mt-1\">2 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50 border-b border-gray-100\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-yellow-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">Low Stock Alert</p>
                                <p class=\"text-xs text-gray-500\">Product stock is running low</p>
                                <p class=\"text-xs text-gray-400 mt-1\">5 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-blue-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">New Order</p>
                                <p class=\"text-xs text-gray-500\">New order #1234 received</p>
                                <p class=\"text-xs text-gray-400 mt-1\">1 day ago</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"p-3 border-t border-gray-200\">
                    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinarian_page");
        yield "\" class=\"block text-center text-sm text-paw-orange hover:text-paw-orange-hover font-medium\">
                        View All Notifications
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"flex items-center gap-3 pl-2 border-l border-gray-200\">
            ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "get", ["user"], "method", false, false, false, 69))) {
            // line 70
            yield "                ";
            $context["user"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), "get", ["user"], "method", false, false, false, 70)));
            // line 71
            yield "                <div class=\"relative dropdown\">
                    <button class=\"flex items-center space-x-3 focus:outline-none\">
                        <div class=\"w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-2 border-white overflow-hidden\"
                             style=\"background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); box-shadow: 0 4px 12px rgba(249,115,22,0.15);\">
                            ";
            // line 75
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userImage", [], "any", true, true, false, 75) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "userImage", [], "any", false, false, false, 75))) {
                // line 76
                yield "                                <img src=\"/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "userImage", [], "any", false, false, false, 76), ["\\" => "/"]), "html", null, true);
                yield "\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 77
($context["user"] ?? null), "user_image", [], "any", true, true, false, 77) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "user_image", [], "any", false, false, false, 77))) {
                // line 78
                yield "                                <img src=\"/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "user_image", [], "any", false, false, false, 78), ["\\" => "/"]), "html", null, true);
                yield "\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 79
($context["user"] ?? null), "prenom", [], "any", true, true, false, 79) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 79))) {
                // line 80
                yield "                                <span class=\"tracking-wide\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "prenom", [], "any", false, false, false, 80))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "nom", [], "any", false, false, false, 80))), "html", null, true);
                yield "</span>
                            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 81
($context["user"] ?? null), "email", [], "any", true, true, false, 81)) {
                // line 82
                yield "                                <span class=\"tracking-wide\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82))), "html", null, true);
                yield "</span>
                            ";
            } else {
                // line 84
                yield "                                <i class=\"fas fa-user\"></i>
                            ";
            }
            // line 86
            yield "                        </div>
                        <div class=\"hidden sm:block\">
                            <p class=\"font-medium text-gray-800 text-sm flex items-center gap-2\">
                                ";
            // line 89
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 89)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "prenom", [], "any", false, false, false, 89), "html", null, true);
            } else {
                yield "My Account";
            }
            // line 90
            yield "                                ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "                                    <i class=\"fas fa-shield-alt text-red-500 text-xs ml-1\"></i>
                                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINAIRE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "                                    <i class=\"fas fa-stethoscope text-blue-500 text-xs ml-1\"></i>
                                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 95
                yield "                                    <i class=\"fas fa-user-tie text-purple-500 text-xs ml-1\"></i>
                                ";
            } else {
                // line 97
                yield "                                    <i class=\"fas fa-user text-green-500 text-xs ml-1\"></i>
                                ";
            }
            // line 99
            yield "                            </p>
                            <p class=\"text-gray-500 text-xs\">
                                ";
            // line 101
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", true, true, false, 101) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "role", [], "any", false, false, false, 101))) {
                // line 102
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "role", [], "any", false, false, false, 102)), "html", null, true);
                yield "
                                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "Admin
                                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINAIRE")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "Veterinarian
                                ";
            } elseif ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "Agent
                                ";
            } else {
                // line 106
                yield "Client
                                ";
            }
            // line 108
            yield "                            </p>
                        </div>
                        <i class=\"fas fa-chevron-down text-gray-400 text-xs\"></i>
                    </button>

                    
                </div>
            ";
        } else {
            // line 116
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
            yield "\" class=\"px-4 py-2 text-sm font-semibold text-orange-600 hover:text-orange-700\">Sign In</a>
            ";
        }
        // line 118
        yield "        </div>
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
        return array (  247 => 118,  241 => 116,  231 => 108,  227 => 106,  223 => 105,  219 => 104,  215 => 103,  209 => 102,  207 => 101,  203 => 99,  199 => 97,  195 => 95,  191 => 93,  187 => 91,  184 => 90,  178 => 89,  173 => 86,  169 => 84,  163 => 82,  161 => 81,  155 => 80,  153 => 79,  148 => 78,  146 => 77,  141 => 76,  139 => 75,  133 => 71,  130 => 70,  128 => 69,  117 => 61,  83 => 29,  76 => 23,  71 => 19,  66 => 15,  51 => 2,  48 => 1,);
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
        
        {# Notification Button with Dropdown #}
        <div class=\"relative dropdown\" x-data=\"{ open: false }\">
            <button type=\"button\" @click=\"open = !open\" class=\"relative p-2 text-gray-500 hover:bg-gray-100 rounded-lg focus:outline-none\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9\"/></svg>
                {# Unread badge #}
                <span class=\"absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center\">3</span>
            </button>
            
            {# Notification Dropdown #}
            <div x-show=\"open\" @click.away=\"open = false\" x-transition class=\"absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50 hidden\" style=\"display: none;\">
                <div class=\"p-4 border-b border-gray-200\">
                    <h3 class=\"font-semibold text-gray-800\">Notifications</h3>
                </div>
                <div class=\"max-h-96 overflow-y-auto\">
                    {# Sample notifications - replace with actual alerts #}
                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50 border-b border-gray-100\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-red-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">Station Inactive</p>
                                <p class=\"text-xs text-gray-500\">Station A1 is now inactive</p>
                                <p class=\"text-xs text-gray-400 mt-1\">2 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50 border-b border-gray-100\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-yellow-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">Low Stock Alert</p>
                                <p class=\"text-xs text-gray-500\">Product stock is running low</p>
                                <p class=\"text-xs text-gray-400 mt-1\">5 hours ago</p>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"block p-4 hover:bg-gray-50\">
                        <div class=\"flex items-start gap-3\">
                            <div class=\"w-2 h-2 bg-blue-500 rounded-full mt-2\"></div>
                            <div>
                                <p class=\"text-sm font-medium text-gray-800\">New Order</p>
                                <p class=\"text-xs text-gray-500\">New order #1234 received</p>
                                <p class=\"text-xs text-gray-400 mt-1\">1 day ago</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"p-3 border-t border-gray-200\">
                    <a href=\"{{ path('app_veterinarian_page') }}\" class=\"block text-center text-sm text-paw-orange hover:text-paw-orange-hover font-medium\">
                        View All Notifications
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"flex items-center gap-3 pl-2 border-l border-gray-200\">
            {% if app.user or app.session.get('user') %}
                {% set user = app.user ? app.user : app.session.get('user') %}
                <div class=\"relative dropdown\">
                    <button class=\"flex items-center space-x-3 focus:outline-none\">
                        <div class=\"w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow-md border-2 border-white overflow-hidden\"
                             style=\"background: linear-gradient(135deg, #f97316 0%, #fb923c 100%); box-shadow: 0 4px 12px rgba(249,115,22,0.15);\">
                            {% if user.userImage is defined and user.userImage %}
                                <img src=\"/{{ user.userImage|replace({'\\\\':'/'}) }}\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                            {% elseif user.user_image is defined and user.user_image %}
                                <img src=\"/{{ user.user_image|replace({'\\\\':'/'}) }}\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                            {% elseif user.prenom is defined and user.nom is defined %}
                                <span class=\"tracking-wide\">{{ user.prenom|first|upper }}{{ user.nom|first|upper }}</span>
                            {% elseif user.email is defined %}
                                <span class=\"tracking-wide\">{{ user.email|first|upper }}</span>
                            {% else %}
                                <i class=\"fas fa-user\"></i>
                            {% endif %}
                        </div>
                        <div class=\"hidden sm:block\">
                            <p class=\"font-medium text-gray-800 text-sm flex items-center gap-2\">
                                {% if user.prenom is defined %}{{ user.prenom }}{% else %}My Account{% endif %}
                                {% if is_granted('ADMIN') %}
                                    <i class=\"fas fa-shield-alt text-red-500 text-xs ml-1\"></i>
                                {% elseif is_granted('ROLE_VETERINAIRE') %}
                                    <i class=\"fas fa-stethoscope text-blue-500 text-xs ml-1\"></i>
                                {% elseif is_granted('ROLE_AGENT') %}
                                    <i class=\"fas fa-user-tie text-purple-500 text-xs ml-1\"></i>
                                {% else %}
                                    <i class=\"fas fa-user text-green-500 text-xs ml-1\"></i>
                                {% endif %}
                            </p>
                            <p class=\"text-gray-500 text-xs\">
                                {% if user.role is defined and user.role %}
                                    {{ user.role|capitalize }}
                                {% elseif is_granted('ADMIN') %}Admin
                                {% elseif is_granted('ROLE_VETERINAIRE') %}Veterinarian
                                {% elseif is_granted('ROLE_AGENT') %}Agent
                                {% else %}Client
                                {% endif %}
                            </p>
                        </div>
                        <i class=\"fas fa-chevron-down text-gray-400 text-xs\"></i>
                    </button>

                    
                </div>
            {% else %}
                <a href=\"{{ path('app_signin') }}\" class=\"px-4 py-2 text-sm font-semibold text-orange-600 hover:text-orange-700\">Sign In</a>
            {% endif %}
        </div>
    </div>
</header>
", "components/_header.html.twig", "C:\\Users\\nourw\\Documents\\PawTech-for-nour\\PawTech-for-nour\\templates\\components\\_header.html.twig");
    }
}
