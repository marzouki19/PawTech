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
        // line 75
        $context["sessionUser"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "get", ["user"], "method", false, false, false, 75);
        // line 76
        yield "            ";
        $context["activeUser"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) : ((isset($context["sessionUser"]) || array_key_exists("sessionUser", $context) ? $context["sessionUser"] : (function () { throw new RuntimeError('Variable "sessionUser" does not exist.', 76, $this->source); })())));
        // line 77
        yield "            ";
        $context["sessionRole"] = ((( !(null === (isset($context["sessionUser"]) || array_key_exists("sessionUser", $context) ? $context["sessionUser"] : (function () { throw new RuntimeError('Variable "sessionUser" does not exist.', 77, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["sessionUser"] ?? null), "role", [], "any", true, true, false, 77))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sessionUser"]) || array_key_exists("sessionUser", $context) ? $context["sessionUser"] : (function () { throw new RuntimeError('Variable "sessionUser" does not exist.', 77, $this->source); })()), "role", [], "any", false, false, false, 77)) : (null));
        // line 78
        yield "            ";
        $context["isAdmin"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ((isset($context["sessionRole"]) || array_key_exists("sessionRole", $context) ? $context["sessionRole"] : (function () { throw new RuntimeError('Variable "sessionRole" does not exist.', 78, $this->source); })()) == "ROLE_ADMIN"));
        // line 79
        yield "            ";
        $context["isVet"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VETERINAIRE") || ((isset($context["sessionRole"]) || array_key_exists("sessionRole", $context) ? $context["sessionRole"] : (function () { throw new RuntimeError('Variable "sessionRole" does not exist.', 79, $this->source); })()) == "ROLE_VETERINAIRE"));
        // line 80
        yield "            ";
        $context["isAgent"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AGENT") || ((isset($context["sessionRole"]) || array_key_exists("sessionRole", $context) ? $context["sessionRole"] : (function () { throw new RuntimeError('Variable "sessionRole" does not exist.', 80, $this->source); })()) == "ROLE_AGENT"));
        // line 81
        yield "            ";
        $context["isClient"] = ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT") || ((isset($context["sessionRole"]) || array_key_exists("sessionRole", $context) ? $context["sessionRole"] : (function () { throw new RuntimeError('Variable "sessionRole" does not exist.', 81, $this->source); })()) == "ROLE_CLIENT"));
        // line 82
        yield "            ";
        // line 83
        yield "



            <div class=\"border-b border-orange-100\">
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
                        8529 Ariana tn. ghazela, TN 20303
                    </div>
                </div>
            </div>






            

            ";
        // line 112
        yield " 
            <div class=\"container mx-auto px-4 lg:px-8 py-4\">
                <div class=\"hidden md:flex items-center justify-center\">
                    <div class=\"inline-flex items-center rounded-full bg-white shadow-[0_12px_30px_rgba(0,0,0,0.07)] px-8 py-3 gap-8\">
                        <div class=\"flex items-center gap-2\">
                            <span><img src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"PawTech Logo\" class=\"h-8\"></span>
                        </div>

                        <nav class=\"flex items-center gap-6 text-[15px] font-medium text-gray-800\">
                            ";
        // line 121
        $context["current"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "request", [], "any", false, false, false, 121), "attributes", [], "any", false, false, false, 121), "get", ["_route"], "method", false, false, false, 121);
        // line 122
        yield "                            ";
        // line 131
        yield "
                            ";
        // line 132
        yield $this->getTemplateForMacro("macro_link", $context, 132, $this->getSourceContext())->macro_link(...["Veterinarian", "app_veterinarian_page", (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 132, $this->source); })())]);
        yield "
                            
                            ";
        // line 135
        yield "                            <span class=\"relative dropdown\">
                                <button class=\"flex items-center gap-1 px-3 py-1.5 text-sm font-medium text-gray-600 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition-colors\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129\"></path>
                                    </svg>
                                    <span class=\"hidden sm:inline\">Translate</span>
                                    <i class=\"fas fa-chevron-down text-xs\"></i>
                                </button>
                                <div class=\"dropdown-menu animate-fade-in w-40\">
                                    <a href=\"#\" onclick=\"translatePage('en'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇺🇸</span> English
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('fr'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇫🇷</span> Français
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('es'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇪🇸</span> Español
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('de'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇩🇪</span> Deutsch
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('ar'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇸🇦</span> العربية
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('zh'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇨🇳</span> 中文
                                    </a>
                                </div>
                            </span>
                            
                            ";
        // line 166
        yield "                            <span class=\"flex items-center gap-2 pl-2 border-l border-gray-200\">
                                ";
        // line 167
        if ((($tmp = (isset($context["activeUser"]) || array_key_exists("activeUser", $context) ? $context["activeUser"] : (function () { throw new RuntimeError('Variable "activeUser" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                                    ";
            // line 169
            yield "                                    ";
            $context["user"] = (isset($context["activeUser"]) || array_key_exists("activeUser", $context) ? $context["activeUser"] : (function () { throw new RuntimeError('Variable "activeUser" does not exist.', 169, $this->source); })());
            // line 170
            yield "                                    <div class=\"relative dropdown\">
                                        <button class=\"flex items-center space-x-2 focus:outline-none\">
                                                <div class=\"w-10 h-10 rounded-full user-avatar flex items-center justify-center text-white font-bold text-sm overflow-hidden\">
                                                    ";
            // line 173
            $context["avatarImage"] = null;
            // line 174
            yield "                                                    ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userImage", [], "any", true, true, false, 174) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "userImage", [], "any", false, false, false, 174)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "userImage", [], "any", false, false, false, 174) != "uploads/users/default.png")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 174, $this->source); })()), "userImage", [], "any", false, false, false, 174) != "uploads/users/default-user.png"))) {
                // line 175
                yield "                                                        ";
                $context["avatarImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 175, $this->source); })()), "userImage", [], "any", false, false, false, 175));
                // line 176
                yield "                                                    ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "user_image", [], "any", true, true, false, 176) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "user_image", [], "any", false, false, false, 176)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "user_image", [], "any", false, false, false, 176) != "uploads/users/default.png")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "user_image", [], "any", false, false, false, 176) != "uploads/users/default-user.png"))) {
                // line 177
                yield "                                                        ";
                $context["avatarImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "user_image", [], "any", false, false, false, 177));
                // line 178
                yield "                                                    ";
            }
            // line 179
            yield "                                                    ";
            if ((($tmp = (isset($context["avatarImage"]) || array_key_exists("avatarImage", $context) ? $context["avatarImage"] : (function () { throw new RuntimeError('Variable "avatarImage" does not exist.', 179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarImage"]) || array_key_exists("avatarImage", $context) ? $context["avatarImage"] : (function () { throw new RuntimeError('Variable "avatarImage" does not exist.', 180, $this->source); })()), "html", null, true);
                yield "\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 181
($context["user"] ?? null), "prenom", [], "any", true, true, false, 181) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 181))) {
                // line 182
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "prenom", [], "any", false, false, false, 182))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "nom", [], "any", false, false, false, 182))), "html", null, true);
                yield "
                                                    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 183
($context["user"] ?? null), "email", [], "any", true, true, false, 183)) {
                // line 184
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 184, $this->source); })()), "email", [], "any", false, false, false, 184))), "html", null, true);
                yield "
                                                    ";
            } else {
                // line 186
                yield "                                                        U
                                                    ";
            }
            // line 188
            yield "                                                </div>
                                            <div class=\"hidden sm:block\">
                                                <p class=\"text-gray-700 font-medium text-sm\">
                                                    ";
            // line 191
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 191)) {
                // line 192
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "prenom", [], "any", false, false, false, 192), "html", null, true);
                yield "
                                                    ";
            } else {
                // line 194
                yield "                                                        My Account
                                                    ";
            }
            // line 196
            yield "                                                </p>
                                                <p class=\"text-gray-500 text-xs\">
                                                    ";
            // line 198
            if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 198, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                                                        Admin
                                                    ";
            } elseif ((($tmp =             // line 200
(isset($context["isVet"]) || array_key_exists("isVet", $context) ? $context["isVet"] : (function () { throw new RuntimeError('Variable "isVet" does not exist.', 200, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                yield "                                                        Veterinarian
                                                    ";
            } elseif ((($tmp =             // line 202
(isset($context["isAgent"]) || array_key_exists("isAgent", $context) ? $context["isAgent"] : (function () { throw new RuntimeError('Variable "isAgent" does not exist.', 202, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 203
                yield "                                                        Agent
                                                    ";
            } else {
                // line 205
                yield "                                                        Client
                                                    ";
            }
            // line 207
            yield "                                                </p>
                                            </div>
                                            <i class=\"fas fa-chevron-down text-gray-500 text-xs\"></i>
                                        </button>
                                        
                                        ";
            // line 213
            yield "                                        <div class=\"dropdown-menu animate-fade-in w-64\">
                                            <div class=\"px-4 py-3 border-b\">
                                                <p class=\"text-sm font-medium text-gray-900\">
                                                    ";
            // line 216
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 216) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 216))) {
                // line 217
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "prenom", [], "any", false, false, false, 217), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "nom", [], "any", false, false, false, 217), "html", null, true);
                yield "
                                                    ";
            } else {
                // line 219
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 219, $this->source); })()), "email", [], "any", false, false, false, 219), "User")) : ("User")), "html", null, true);
                yield "
                                                    ";
            }
            // line 221
            yield "                                                </p>
                                                <p class=\"text-xs text-gray-500\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", true, true, false, 222)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "email", [], "any", false, false, false, 222), "No email")) : ("No email")), "html", null, true);
            yield "</p>
                                                ";
            // line 224
            yield "                                                <div class=\"mt-1\">
                                                    ";
            // line 225
            if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 225, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 226
                yield "                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">
                                                            <i class=\"fas fa-shield-alt mr-1\"></i> Administrator
                                                        </span>
                                                    ";
            } elseif ((($tmp =             // line 229
(isset($context["isVet"]) || array_key_exists("isVet", $context) ? $context["isVet"] : (function () { throw new RuntimeError('Variable "isVet" does not exist.', 229, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 230
                yield "                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">
                                                            <i class=\"fas fa-stethoscope mr-1\"></i> Veterinarian
                                                        </span>
                                                    ";
            } elseif ((($tmp =             // line 233
(isset($context["isAgent"]) || array_key_exists("isAgent", $context) ? $context["isAgent"] : (function () { throw new RuntimeError('Variable "isAgent" does not exist.', 233, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 234
                yield "                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800\">
                                                            <i class=\"fas fa-user-tie mr-1\"></i> Agent
                                                        </span>
                                                    ";
            } elseif ((($tmp =             // line 237
(isset($context["isClient"]) || array_key_exists("isClient", $context) ? $context["isClient"] : (function () { throw new RuntimeError('Variable "isClient" does not exist.', 237, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 238
                yield "                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800\">
                                                            <i class=\"fas fa-user mr-1\"></i> Client
                                                        </span>
                                                    ";
            } else {
                // line 242
                yield "                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800\">
                                                            <i class=\"fas fa-user mr-1\"></i> User
                                                        </span>
                                                    ";
            }
            // line 246
            yield "                                                </div>
                                            </div>
                                            
                                            ";
            // line 250
            yield "                                            <div class=\"py-1\">
                                                <a href=\"";
            // line 251
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50\">
                                                    <i class=\"fas fa-user-circle mr-3 text-blue-500 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Account Information</p>
                                                        <p class=\"text-xs text-gray-500\">View and edit your profile</p>
                                                    </div>
                                                </a>
                                                
                                                <a href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
            yield "\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50\">
                                                    <i class=\"fas fa-cog mr-3 text-purple-500 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Settings</p>
                                                        <p class=\"text-xs text-gray-500\">Preferences & privacy</p>
                                                    </div>
                                                </a>
                                                
                                                ";
            // line 267
            if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 267, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 268
                yield "                                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
                yield "\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-t border-gray-100 mt-1\">
                                                        <i class=\"fas fa-tachometer-alt mr-3 text-green-500 w-5\"></i>
                                                        <div class=\"flex-1\">
                                                            <p class=\"font-medium\">Dashboard</p>
                                                            <p class=\"text-xs text-gray-500\">Admin dashboard</p>
                                                        </div>
                                                    </a>
                                                ";
            }
            // line 276
            yield "                                            </div>
                                            
                                            ";
            // line 279
            yield "                                            <div class=\"border-t border-gray-100 py-1\">
                                                <a href=\"";
            // line 280
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50\">
                                                    <i class=\"fas fa-sign-out-alt mr-3 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Sign out</p>
                                                        <p class=\"text-xs text-red-500\">Log out of your account</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                ";
        } else {
            // line 291
            yield "                                    ";
            // line 292
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
            yield "\" class=\"px-4 py-2 text-sm font-semibold text-orange-600 hover:text-orange-700 transition\">Sign In</a>
                                ";
        }
        // line 294
        yield "                            </span>
                        </nav>
                    </div>
                </div>

                ";
        // line 300
        yield "                <div class=\"md:hidden flex items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2\">
                        <span><img src=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"PawTech Logo\" class=\"h-6\"></span>
                        <span class=\"font-semibold text-base text-orange-500\">PawTech</span>
                    </div>
                    
                    ";
        // line 307
        yield "                    <div class=\"flex items-center gap-4\">
                        ";
        // line 308
        if ((($tmp = (isset($context["activeUser"]) || array_key_exists("activeUser", $context) ? $context["activeUser"] : (function () { throw new RuntimeError('Variable "activeUser" does not exist.', 308, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 309
            yield "                            ";
            // line 310
            yield "                            ";
            $context["user"] = (isset($context["activeUser"]) || array_key_exists("activeUser", $context) ? $context["activeUser"] : (function () { throw new RuntimeError('Variable "activeUser" does not exist.', 310, $this->source); })());
            // line 311
            yield "                            <div class=\"relative dropdown\">
                                <button class=\"flex items-center space-x-1 focus:outline-none\">
                                            <div class=\"w-8 h-8 rounded-full user-avatar flex items-center justify-center text-white font-bold text-sm overflow-hidden\">
                                                ";
            // line 314
            $context["avatarImage"] = null;
            // line 315
            yield "                                                ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "userImage", [], "any", true, true, false, 315) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 315, $this->source); })()), "userImage", [], "any", false, false, false, 315)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 315, $this->source); })()), "userImage", [], "any", false, false, false, 315) != "uploads/users/default.png")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 315, $this->source); })()), "userImage", [], "any", false, false, false, 315) != "uploads/users/default-user.png"))) {
                // line 316
                yield "                                                    ";
                $context["avatarImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 316, $this->source); })()), "userImage", [], "any", false, false, false, 316));
                // line 317
                yield "                                                ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "user_image", [], "any", true, true, false, 317) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 317, $this->source); })()), "user_image", [], "any", false, false, false, 317)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 317, $this->source); })()), "user_image", [], "any", false, false, false, 317) != "uploads/users/default.png")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 317, $this->source); })()), "user_image", [], "any", false, false, false, 317) != "uploads/users/default-user.png"))) {
                // line 318
                yield "                                                    ";
                $context["avatarImage"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 318, $this->source); })()), "user_image", [], "any", false, false, false, 318));
                // line 319
                yield "                                                ";
            }
            // line 320
            yield "                                                ";
            if ((($tmp = (isset($context["avatarImage"]) || array_key_exists("avatarImage", $context) ? $context["avatarImage"] : (function () { throw new RuntimeError('Variable "avatarImage" does not exist.', 320, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 321
                yield "                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarImage"]) || array_key_exists("avatarImage", $context) ? $context["avatarImage"] : (function () { throw new RuntimeError('Variable "avatarImage" does not exist.', 321, $this->source); })()), "html", null, true);
                yield "\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 322
($context["user"] ?? null), "prenom", [], "any", true, true, false, 322) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 322))) {
                // line 323
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 323, $this->source); })()), "prenom", [], "any", false, false, false, 323))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 323, $this->source); })()), "nom", [], "any", false, false, false, 323))), "html", null, true);
                yield "
                                                ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 324
($context["user"] ?? null), "email", [], "any", true, true, false, 324)) {
                // line 325
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 325, $this->source); })()), "email", [], "any", false, false, false, 325))), "html", null, true);
                yield "
                                                ";
            } else {
                // line 327
                yield "                                                    U
                                                ";
            }
            // line 329
            yield "                                            </div>
                                    <i class=\"fas fa-chevron-down text-gray-500 text-xs\"></i>
                                </button>
                                
                                ";
            // line 334
            yield "                                <div class=\"dropdown-menu animate-fade-in w-56\">
                                    ";
            // line 335
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", true, true, false, 335) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", true, true, false, 335)) && CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", true, true, false, 335))) {
                // line 336
                yield "                                        <div class=\"px-4 py-3 border-b\">
                                            <p class=\"text-sm font-medium text-gray-900\">";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 337, $this->source); })()), "prenom", [], "any", false, false, false, 337), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 337, $this->source); })()), "nom", [], "any", false, false, false, 337), "html", null, true);
                yield "</p>
                                            <p class=\"text-xs text-gray-500\">";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 338, $this->source); })()), "email", [], "any", false, false, false, 338), "html", null, true);
                yield "</p>
                                            ";
                // line 340
                yield "                                            <div class=\"mt-1\">
                                                ";
                // line 341
                if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 341, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 342
                    yield "                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">
                                                        <i class=\"fas fa-shield-alt mr-1\"></i> Admin
                                                    </span>
                                                ";
                } elseif ((($tmp =                 // line 345
(isset($context["isVet"]) || array_key_exists("isVet", $context) ? $context["isVet"] : (function () { throw new RuntimeError('Variable "isVet" does not exist.', 345, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 346
                    yield "                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">
                                                        <i class=\"fas fa-stethoscope mr-1\"></i> Vet
                                                    </span>
                                                ";
                } elseif ((($tmp =                 // line 349
(isset($context["isClient"]) || array_key_exists("isClient", $context) ? $context["isClient"] : (function () { throw new RuntimeError('Variable "isClient" does not exist.', 349, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 350
                    yield "                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800\">
                                                        <i class=\"fas fa-user mr-1\"></i> Client
                                                    </span>
                                                ";
                }
                // line 354
                yield "                                            </div>
                                        </div>
                                    ";
            }
            // line 357
            yield "                                    
                                    ";
            // line 359
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                        <i class=\"fas fa-user-circle mr-3 text-blue-500 w-4\"></i>
                                        <span>My Profile</span>
                                    </a>
                                    
                                    <a href=\"";
            // line 364
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings");
            yield "\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                        <i class=\"fas fa-cog mr-3 text-purple-500 w-4\"></i>
                                        <span>Settings</span>
                                    </a>
                                    
                                    ";
            // line 369
            if ((($tmp = (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 369, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 370
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
                yield "\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-t border-gray-100 mt-1\">
                                            <i class=\"fas fa-tachometer-alt mr-3 text-green-500 w-4\"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    ";
            }
            // line 375
            yield "                                    
                                    ";
            // line 376
            if ((($tmp = (isset($context["isClient"]) || array_key_exists("isClient", $context) ? $context["isClient"] : (function () { throw new RuntimeError('Variable "isClient" does not exist.', 376, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 377
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_pets");
                yield "\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                            <i class=\"fas fa-paw mr-3 text-amber-500 w-4\"></i>
                                            <span>My Pets</span>
                                        </a>
                                    ";
            }
            // line 382
            yield "                                    
                                    <div class=\"border-t border-gray-100 mt-1 pt-1\">
                                        <a href=\"";
            // line 384
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50\">
                                            <i class=\"fas fa-sign-out-alt mr-3 w-4\"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ";
        } else {
            // line 392
            yield "                            ";
            // line 393
            yield "                            <div class=\"flex items-center gap-2\">
                                <a href=\"";
            // line 394
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
            yield "\" class=\"text-sm text-gray-700 hover:text-orange-500\">Sign In</a>
                                <a href=\"";
            // line 395
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinarian_page");
            yield "\" class=\"text-sm bg-orange-500 text-white px-3 py-1 rounded-full hover:bg-orange-600\">Sign Up</a>
                            </div>
                        ";
        }
        // line 398
        yield "                        
                        <button class=\"inline-flex h-9 w-9 items-center justify-center rounded-full bg-white shadow border border-gray-200 text-gray-700\" aria-label=\"Open menu\">
                            ☰
                        </button>
                    </div>
                </div>
            </div>
        </header>

        ";
        // line 408
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 408, $this->source); })()), "flashes", ["success"], "method", false, false, false, 408));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 409
            yield "            <div class=\"fixed top-20 right-4 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-check-circle mr-2\"></i>
                    ";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        yield "        
        ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "flashes", ["error"], "method", false, false, false, 417));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 418
            yield "            <div class=\"fixed top-20 right-4 z-50 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg animate-fade-in\">
                <div class=\"flex items-center\">
                    <i class=\"fas fa-exclamation-circle mr-2\"></i>
                    ";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        yield "
        <main class=\"flex-1\">
            ";
        // line 427
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 428
        yield "        </main>

        <footer class=\"bg-white border-t mt-10\">
            <div class=\"container mx-auto px-4 lg:px-8 py-10 grid gap-8 md:grid-cols-4 text-sm\">
                <div>
                    <div class=\"flex items-center gap-2\">
                            <span><img src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"PawTech Logo\" class=\"h-12\"></span>
                    </div>
                    <p class=\"text-gray-500\">
                        Caring pet shop offering quality products and services to keep your pets happy, healthy, and comfortable.
                    </p>
                </div>
                <div>
                    <h3 class=\"font-semibold text-gray-900 mb-3\">Company</h3>
                    <ul class=\"space-y-1 text-gray-500\">
                        <li><a href=\"";
        // line 443
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
        // line 452
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
                        8529 Ariana tn<br>
                        . ghazela, TN 20303
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
        // line 472
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
        // line 483
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
            
            // Toggle notification dropdown
            function toggleNotifications() {
                const dropdown = document.getElementById('notification-dropdown');
                dropdown.classList.toggle('hidden');
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const dropdown = document.getElementById('notification-dropdown');
                const button = event.target.closest('button[onclick=\"toggleNotifications()\"]');
                if (!dropdown.contains(event.target) && !button) {
                    dropdown.classList.add('hidden');
                }
            });
            
            // Translate page function
            async function translatePage(targetLanguage) {
                console.log('Translating to:', targetLanguage);
                
                const elementsToTranslate = [];
                const walker = document.createTreeWalker(
                    document.body,
                    NodeFilter.SHOW_TEXT,
                    null,
                    false
                );
                
                let node;
                while (node = walker.nextNode()) {
                    const text = node.textContent.trim();
                    const parent = node.parentElement;
                    
                    // Skip script and style elements
                    if (parent && parent.tagName !== 'SCRIPT' && parent.tagName !== 'STYLE') {
                        // Skip very short or very long texts
                        if (text && text.length > 1 && text.length < 5000) {
                            // Skip texts that are just numbers or symbols
                            if (!/^[\\d\\s\\p{P}]+\$/u.test(text)) {
                                elementsToTranslate.push({ node: node, originalText: text });
                            }
                        }
                    }
                }
                
                console.log('Elements to translate:', elementsToTranslate.length);
                
                if (elementsToTranslate.length === 0) {
                    console.log('No elements to translate');
                    return;
                }
                
                const texts = elementsToTranslate.map(el => el.originalText);
                
                try {
                    console.log('Sending request to translation API...');
                    const response = await fetch('http://127.0.0.1:5000/translate', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            texts: texts,
                            target_language: targetLanguage
                        })
                    });
                    
                    console.log('Response status:', response.status);
                    
                    if (response.ok) {
                        const data = await response.json();
                        console.log('Translation successful, received:', data.translated_texts.length, 'translations');
                        
                        elementsToTranslate.forEach((el, index) => {
                            if (data.translated_texts[index]) {
                                el.node.textContent = data.translated_texts[index];
                            }
                        });
                    } else {
                        const errorText = await response.text();
                        console.error('Translation failed:', response.status, errorText);
                        alert('Translation failed. Please make sure the translation server is running.');
                    }
                } catch (error) {
                    console.error('Translation error:', error);
                    alert('Translation error: ' + error.message + '. Please make sure the Flask translation server is running on port 5000.');
                }
            }
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

    // line 427
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

    // line 122
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

            // line 123
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 123, $this->source); })()));
            yield "\"
                                   class=\"relative pb-1 transition-colors ";
            // line 124
            yield ((((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 124, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 124, $this->source); })()))) ? ("text-orange-500") : ("text-gray-800 hover:text-orange-500"));
            yield "\">
                                    ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 125, $this->source); })()), "html", null, true);
            yield "
                                    ";
            // line 126
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 126, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 126, $this->source); })()))) {
                // line 127
                yield "                                        <span class=\"absolute left-0 right-0 -bottom-1 h-0.5 rounded-full bg-orange-500\"></span>
                                    ";
            }
            // line 129
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
        return array (  1108 => 129,  1104 => 127,  1102 => 126,  1098 => 125,  1094 => 124,  1089 => 123,  1069 => 122,  1047 => 427,  1024 => 64,  1013 => 65,  1010 => 64,  997 => 63,  986 => 61,  973 => 60,  950 => 6,  833 => 483,  820 => 472,  797 => 452,  785 => 443,  773 => 434,  765 => 428,  763 => 427,  759 => 425,  749 => 421,  744 => 418,  740 => 417,  737 => 416,  727 => 412,  722 => 409,  717 => 408,  706 => 398,  700 => 395,  696 => 394,  693 => 393,  691 => 392,  680 => 384,  676 => 382,  667 => 377,  665 => 376,  662 => 375,  653 => 370,  651 => 369,  643 => 364,  634 => 359,  631 => 357,  626 => 354,  620 => 350,  618 => 349,  613 => 346,  611 => 345,  606 => 342,  604 => 341,  601 => 340,  597 => 338,  591 => 337,  588 => 336,  586 => 335,  583 => 334,  577 => 329,  573 => 327,  567 => 325,  565 => 324,  559 => 323,  557 => 322,  552 => 321,  549 => 320,  546 => 319,  543 => 318,  540 => 317,  537 => 316,  534 => 315,  532 => 314,  527 => 311,  524 => 310,  522 => 309,  520 => 308,  517 => 307,  510 => 302,  506 => 300,  499 => 294,  493 => 292,  491 => 291,  477 => 280,  474 => 279,  470 => 276,  458 => 268,  456 => 267,  445 => 259,  434 => 251,  431 => 250,  426 => 246,  420 => 242,  414 => 238,  412 => 237,  407 => 234,  405 => 233,  400 => 230,  398 => 229,  393 => 226,  391 => 225,  388 => 224,  384 => 222,  381 => 221,  375 => 219,  367 => 217,  365 => 216,  360 => 213,  353 => 207,  349 => 205,  345 => 203,  343 => 202,  340 => 201,  338 => 200,  335 => 199,  333 => 198,  329 => 196,  325 => 194,  319 => 192,  317 => 191,  312 => 188,  308 => 186,  302 => 184,  300 => 183,  294 => 182,  292 => 181,  287 => 180,  284 => 179,  281 => 178,  278 => 177,  275 => 176,  272 => 175,  269 => 174,  267 => 173,  262 => 170,  259 => 169,  257 => 168,  255 => 167,  252 => 166,  220 => 135,  215 => 132,  212 => 131,  210 => 122,  208 => 121,  201 => 117,  194 => 112,  163 => 83,  161 => 82,  158 => 81,  155 => 80,  152 => 79,  149 => 78,  146 => 77,  143 => 76,  141 => 75,  133 => 69,  129 => 66,  127 => 63,  124 => 62,  122 => 60,  77 => 17,  73 => 14,  69 => 11,  64 => 7,  60 => 6,  53 => 1,);
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



        

            {% set sessionUser = app.session.get('user') %}
            {% set activeUser = app.user ? app.user : sessionUser %}
            {% set sessionRole = sessionUser is not null and sessionUser.role is defined ? sessionUser.role : null %}
            {% set isAdmin = is_granted('ROLE_ADMIN') or sessionRole == 'ROLE_ADMIN' %}
            {% set isVet = is_granted('ROLE_VETERINAIRE') or sessionRole == 'ROLE_VETERINAIRE' %}
            {% set isAgent = is_granted('ROLE_AGENT') or sessionRole == 'ROLE_AGENT' %}
            {% set isClient = is_granted('ROLE_CLIENT') or sessionRole == 'ROLE_CLIENT' %}
            {# Top info bar #}




            <div class=\"border-b border-orange-100\">
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
                        8529 Ariana tn. ghazela, TN 20303
                    </div>
                </div>
            </div>






            

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

                            {{ _self.link('Veterinarian', 'app_veterinarian_page', current) }}
                            
                            {# Translate Button #}
                            <span class=\"relative dropdown\">
                                <button class=\"flex items-center gap-1 px-3 py-1.5 text-sm font-medium text-gray-600 hover:text-orange-500 hover:bg-orange-50 rounded-lg transition-colors\">
                                    <svg class=\"w-4 h-4\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129\"></path>
                                    </svg>
                                    <span class=\"hidden sm:inline\">Translate</span>
                                    <i class=\"fas fa-chevron-down text-xs\"></i>
                                </button>
                                <div class=\"dropdown-menu animate-fade-in w-40\">
                                    <a href=\"#\" onclick=\"translatePage('en'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇺🇸</span> English
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('fr'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇫🇷</span> Français
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('es'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇪🇸</span> Español
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('de'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇩🇪</span> Deutsch
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('ar'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇸🇦</span> العربية
                                    </a>
                                    <a href=\"#\" onclick=\"translatePage('zh'); return false;\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50\">
                                        <span class=\"mr-2\">🇨🇳</span> 中文
                                    </a>
                                </div>
                            </span>
                            
                            {# User Profile Section - MATCHES DASHBOARD STYLE #}
                            <span class=\"flex items-center gap-2 pl-2 border-l border-gray-200\">
                                {% if activeUser %}
                                    {# User is logged in #}
                                    {% set user = activeUser %}
                                    <div class=\"relative dropdown\">
                                        <button class=\"flex items-center space-x-2 focus:outline-none\">
                                                <div class=\"w-10 h-10 rounded-full user-avatar flex items-center justify-center text-white font-bold text-sm overflow-hidden\">
                                                    {% set avatarImage = null %}
                                                    {% if user.userImage is defined and user.userImage and user.userImage != 'uploads/users/default.png' and user.userImage != 'uploads/users/default-user.png' %}
                                                        {% set avatarImage = asset(user.userImage) %}
                                                    {% elseif user.user_image is defined and user.user_image and user.user_image != 'uploads/users/default.png' and user.user_image != 'uploads/users/default-user.png' %}
                                                        {% set avatarImage = asset(user.user_image) %}
                                                    {% endif %}
                                                    {% if avatarImage %}
                                                        <img src=\"{{ avatarImage }}\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                                                    {% elseif user.prenom is defined and user.nom is defined %}
                                                        {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                                    {% elseif user.email is defined %}
                                                        {{ user.email|first|upper }}
                                                    {% else %}
                                                        U
                                                    {% endif %}
                                                </div>
                                            <div class=\"hidden sm:block\">
                                                <p class=\"text-gray-700 font-medium text-sm\">
                                                    {% if user.prenom is defined %}
                                                        {{ user.prenom }}
                                                    {% else %}
                                                        My Account
                                                    {% endif %}
                                                </p>
                                                <p class=\"text-gray-500 text-xs\">
                                                    {% if isAdmin %}
                                                        Admin
                                                    {% elseif isVet %}
                                                        Veterinarian
                                                    {% elseif isAgent %}
                                                        Agent
                                                    {% else %}
                                                        Client
                                                    {% endif %}
                                                </p>
                                            </div>
                                            <i class=\"fas fa-chevron-down text-gray-500 text-xs\"></i>
                                        </button>
                                        
                                        {# Dropdown Menu - Matches Dashboard Style #}
                                        <div class=\"dropdown-menu animate-fade-in w-64\">
                                            <div class=\"px-4 py-3 border-b\">
                                                <p class=\"text-sm font-medium text-gray-900\">
                                                    {% if user.prenom is defined and user.nom is defined %}
                                                        {{ user.prenom }} {{ user.nom }}
                                                    {% else %}
                                                        {{ user.email|default('User') }}
                                                    {% endif %}
                                                </p>
                                                <p class=\"text-xs text-gray-500\">{{ user.email|default('No email') }}</p>
                                                {# Role Badge #}
                                                <div class=\"mt-1\">
                                                    {% if isAdmin %}
                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">
                                                            <i class=\"fas fa-shield-alt mr-1\"></i> Administrator
                                                        </span>
                                                    {% elseif isVet %}
                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">
                                                            <i class=\"fas fa-stethoscope mr-1\"></i> Veterinarian
                                                        </span>
                                                    {% elseif isAgent %}
                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800\">
                                                            <i class=\"fas fa-user-tie mr-1\"></i> Agent
                                                        </span>
                                                    {% elseif isClient %}
                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800\">
                                                            <i class=\"fas fa-user mr-1\"></i> Client
                                                        </span>
                                                    {% else %}
                                                        <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800\">
                                                            <i class=\"fas fa-user mr-1\"></i> User
                                                        </span>
                                                    {% endif %}
                                                </div>
                                            </div>
                                            
                                            {# Menu Items #}
                                            <div class=\"py-1\">
                                                <a href=\"{{ path('app_account') }}\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50\">
                                                    <i class=\"fas fa-user-circle mr-3 text-blue-500 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Account Information</p>
                                                        <p class=\"text-xs text-gray-500\">View and edit your profile</p>
                                                    </div>
                                                </a>
                                                
                                                <a href=\"{{ path('app_settings') }}\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50\">
                                                    <i class=\"fas fa-cog mr-3 text-purple-500 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Settings</p>
                                                        <p class=\"text-xs text-gray-500\">Preferences & privacy</p>
                                                    </div>
                                                </a>
                                                
                                                {% if isAdmin %}
                                                    <a href=\"{{ path('app_dashboard') }}\" class=\"flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-t border-gray-100 mt-1\">
                                                        <i class=\"fas fa-tachometer-alt mr-3 text-green-500 w-5\"></i>
                                                        <div class=\"flex-1\">
                                                            <p class=\"font-medium\">Dashboard</p>
                                                            <p class=\"text-xs text-gray-500\">Admin dashboard</p>
                                                        </div>
                                                    </a>
                                                {% endif %}
                                            </div>
                                            
                                            {# Sign Out #}
                                            <div class=\"border-t border-gray-100 py-1\">
                                                <a href=\"{{ path('app_logout') }}\" class=\"flex items-center px-4 py-3 text-sm text-red-600 hover:bg-red-50\">
                                                    <i class=\"fas fa-sign-out-alt mr-3 w-5\"></i>
                                                    <div class=\"flex-1\">
                                                        <p class=\"font-medium\">Sign out</p>
                                                        <p class=\"text-xs text-red-500\">Log out of your account</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                    {# User is not logged in #}
                                    <a href=\"{{ path('app_signin') }}\" class=\"px-4 py-2 text-sm font-semibold text-orange-600 hover:text-orange-700 transition\">Sign In</a>
                                {% endif %}
                            </span>
                        </nav>
                    </div>
                </div>

                {# Simple mobile layout with profile #}
                <div class=\"md:hidden flex items-center justify-between gap-4\">
                    <div class=\"flex items-center gap-2\">
                        <span><img src=\"{{ asset('logo.png') }}\" alt=\"PawTech Logo\" class=\"h-6\"></span>
                        <span class=\"font-semibold text-base text-orange-500\">PawTech</span>
                    </div>
                    
                    {# Mobile user menu #}
                    <div class=\"flex items-center gap-4\">
                        {% if activeUser %}
                            {# User is logged in - mobile #}
                            {% set user = activeUser %}
                            <div class=\"relative dropdown\">
                                <button class=\"flex items-center space-x-1 focus:outline-none\">
                                            <div class=\"w-8 h-8 rounded-full user-avatar flex items-center justify-center text-white font-bold text-sm overflow-hidden\">
                                                {% set avatarImage = null %}
                                                {% if user.userImage is defined and user.userImage and user.userImage != 'uploads/users/default.png' and user.userImage != 'uploads/users/default-user.png' %}
                                                    {% set avatarImage = asset(user.userImage) %}
                                                {% elseif user.user_image is defined and user.user_image and user.user_image != 'uploads/users/default.png' and user.user_image != 'uploads/users/default-user.png' %}
                                                    {% set avatarImage = asset(user.user_image) %}
                                                {% endif %}
                                                {% if avatarImage %}
                                                    <img src=\"{{ avatarImage }}\" alt=\"Avatar\" class=\"w-full h-full object-cover\" />
                                                {% elseif user.prenom is defined and user.nom is defined %}
                                                    {{ user.prenom|first|upper }}{{ user.nom|first|upper }}
                                                {% elseif user.email is defined %}
                                                    {{ user.email|first|upper }}
                                                {% else %}
                                                    U
                                                {% endif %}
                                            </div>
                                    <i class=\"fas fa-chevron-down text-gray-500 text-xs\"></i>
                                </button>
                                
                                {# Mobile Dropdown Menu with Role-Based Options #}
                                <div class=\"dropdown-menu animate-fade-in w-56\">
                                    {% if user.prenom is defined and user.nom is defined and user.email is defined %}
                                        <div class=\"px-4 py-3 border-b\">
                                            <p class=\"text-sm font-medium text-gray-900\">{{ user.prenom }} {{ user.nom }}</p>
                                            <p class=\"text-xs text-gray-500\">{{ user.email }}</p>
                                            {# Role Badge #}
                                            <div class=\"mt-1\">
                                                {% if isAdmin %}
                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800\">
                                                        <i class=\"fas fa-shield-alt mr-1\"></i> Admin
                                                    </span>
                                                {% elseif isVet %}
                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800\">
                                                        <i class=\"fas fa-stethoscope mr-1\"></i> Vet
                                                    </span>
                                                {% elseif isClient %}
                                                    <span class=\"inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800\">
                                                        <i class=\"fas fa-user mr-1\"></i> Client
                                                    </span>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% endif %}
                                    
                                    {# Mobile menu items with role-based options #}
                                    <a href=\"{{ path('app_profile') }}\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                        <i class=\"fas fa-user-circle mr-3 text-blue-500 w-4\"></i>
                                        <span>My Profile</span>
                                    </a>
                                    
                                    <a href=\"{{ path('app_settings') }}\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                        <i class=\"fas fa-cog mr-3 text-purple-500 w-4\"></i>
                                        <span>Settings</span>
                                    </a>
                                    
                                    {% if isAdmin %}
                                        <a href=\"{{ path('app_dashboard') }}\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-t border-gray-100 mt-1\">
                                            <i class=\"fas fa-tachometer-alt mr-3 text-green-500 w-4\"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    {% endif %}
                                    
                                    {% if isClient %}
                                        <a href=\"{{ path('app_my_pets') }}\" class=\"flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">
                                            <i class=\"fas fa-paw mr-3 text-amber-500 w-4\"></i>
                                            <span>My Pets</span>
                                        </a>
                                    {% endif %}
                                    
                                    <div class=\"border-t border-gray-100 mt-1 pt-1\">
                                        <a href=\"{{ path('app_logout') }}\" class=\"flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50\">
                                            <i class=\"fas fa-sign-out-alt mr-3 w-4\"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            {# User is not logged in - mobile #}
                            <div class=\"flex items-center gap-2\">
                                <a href=\"{{ path('app_signin') }}\" class=\"text-sm text-gray-700 hover:text-orange-500\">Sign In</a>
                                <a href=\"{{ path('app_veterinarian_page') }}\" class=\"text-sm bg-orange-500 text-white px-3 py-1 rounded-full hover:bg-orange-600\">Sign Up</a>
                            </div>
                        {% endif %}
                        
                        <button class=\"inline-flex h-9 w-9 items-center justify-center rounded-full bg-white shadow border border-gray-200 text-gray-700\" aria-label=\"Open menu\">
                            ☰
                        </button>
                    </div>
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
                    <div class=\"flex items-center gap-2\">
                            <span><img src=\"{{ asset('logo.png') }}\" alt=\"PawTech Logo\" class=\"h-12\"></span>
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
                        8529 Ariana tn<br>
                        . ghazela, TN 20303
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
            
            // Toggle notification dropdown
            function toggleNotifications() {
                const dropdown = document.getElementById('notification-dropdown');
                dropdown.classList.toggle('hidden');
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                const dropdown = document.getElementById('notification-dropdown');
                const button = event.target.closest('button[onclick=\"toggleNotifications()\"]');
                if (!dropdown.contains(event.target) && !button) {
                    dropdown.classList.add('hidden');
                }
            });
            
            // Translate page function
            async function translatePage(targetLanguage) {
                console.log('Translating to:', targetLanguage);
                
                const elementsToTranslate = [];
                const walker = document.createTreeWalker(
                    document.body,
                    NodeFilter.SHOW_TEXT,
                    null,
                    false
                );
                
                let node;
                while (node = walker.nextNode()) {
                    const text = node.textContent.trim();
                    const parent = node.parentElement;
                    
                    // Skip script and style elements
                    if (parent && parent.tagName !== 'SCRIPT' && parent.tagName !== 'STYLE') {
                        // Skip very short or very long texts
                        if (text && text.length > 1 && text.length < 5000) {
                            // Skip texts that are just numbers or symbols
                            if (!/^[\\d\\s\\p{P}]+\$/u.test(text)) {
                                elementsToTranslate.push({ node: node, originalText: text });
                            }
                        }
                    }
                }
                
                console.log('Elements to translate:', elementsToTranslate.length);
                
                if (elementsToTranslate.length === 0) {
                    console.log('No elements to translate');
                    return;
                }
                
                const texts = elementsToTranslate.map(el => el.originalText);
                
                try {
                    console.log('Sending request to translation API...');
                    const response = await fetch('http://127.0.0.1:5000/translate', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            texts: texts,
                            target_language: targetLanguage
                        })
                    });
                    
                    console.log('Response status:', response.status);
                    
                    if (response.ok) {
                        const data = await response.json();
                        console.log('Translation successful, received:', data.translated_texts.length, 'translations');
                        
                        elementsToTranslate.forEach((el, index) => {
                            if (data.translated_texts[index]) {
                                el.node.textContent = data.translated_texts[index];
                            }
                        });
                    } else {
                        const errorText = await response.text();
                        console.error('Translation failed:', response.status, errorText);
                        alert('Translation failed. Please make sure the translation server is running.');
                    }
                } catch (error) {
                    console.error('Translation error:', error);
                    alert('Translation error: ' + error.message + '. Please make sure the Flask translation server is running on port 5000.');
                }
            }
        </script>
    </body>
</html>", "base_front.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\base_front.html.twig");
    }
}
