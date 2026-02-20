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

/* pages/events.html.twig */
class __TwigTemplate_1472451e21c337cd1cf1c79cebcb7fa2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/events.html.twig"));

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

        yield "Events - PawTech";
        
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
        yield "    ";
        // line 7
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/event_recommendation_modal.html.twig", ["villes" => (isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 7, $this->source); })())]);
        yield "

    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16\">
            <div class=\"grid lg:grid-cols-2 gap-10 items-center\">
                <div>
                    <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Events</p>
                    <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                        Where Dogs Come First
                    </h1>
                    <p class=\"mt-4 text-gray-600 max-w-xl\">
                        Join our dog-friendly events and meet the community.
                    </p>
                </div>
                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden\">
                    <div class=\"aspect-[16/9] bg-gray-100\">
                        <img src=\"https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800&h=450&fit=crop\" 
                             alt=\"Happy dogs at event\" 
                             class=\"w-full h-full object-cover\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"text-center max-w-2xl mx-auto\">
            <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">New event coming</p>
            <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">
                Let your dogs meet each other
            </h2>
        </div>

        <div class=\"mt-10 rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden\">
            <div class=\"relative aspect-[16/7]\">
                <img src=\"https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=1200&h=525&fit=crop\" 
                     alt=\"Dogs meeting at park\" 
                     class=\"absolute inset-0 w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-gradient-to-t from-gray-900/70 to-gray-900/20\"></div>
                <div class=\"absolute left-6 bottom-6 right-6 flex flex-col md:flex-row md:items-end md:justify-between gap-6\">
                    <div>
                        <p class=\"text-white/90 text-sm font-semibold\">Launching in</p>
                        <div class=\"mt-3 flex items-center gap-6\">
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["label" => "Hours", "value" => "05"], ["label" => "Minutes", "value" => "24"], ["label" => "Seconds", "value" => "59"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 60
            yield "                                <div class=\"text-center\">
                                    <div class=\"text-4xl font-extrabold text-white\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "value", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
                                    <div class=\"text-xs uppercase tracking-wide text-white/80\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "label", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                        </div>
                    </div>
                    <div class=\"w-full md:w-96\">
                        <label class=\"block text-white/90 text-sm font-semibold mb-2\">Register</label>
                        <div class=\"flex gap-2\">
                            <input class=\"w-full rounded-2xl border border-white/30 bg-white/90 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Email address\">
                            <button class=\"rounded-2xl bg-orange-500 px-5 py-3 text-white font-extrabold hover:bg-orange-600 transition whitespace-nowrap\">
                                Join
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-12 grid md:grid-cols-2 gap-6 items-center\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-8 flex items-center gap-6\">
                <div class=\"h-24 w-24 rounded-full overflow-hidden flex-shrink-0\">
                    <img src=\"https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=200&h=200&fit=crop\" 
                         alt=\"Dog training\" class=\"w-full h-full object-cover\">
                </div>
                <div>
                    <p class=\"text-sm font-semibold text-orange-600 uppercase tracking-wide\">Community</p>
                    <p class=\"mt-1 font-extrabold text-gray-900\">Training tips & socialization</p>
                    <p class=\"mt-2 text-sm text-gray-600\">Meet owners, share experiences, and help your dog socialize safely.</p>
                </div>
            </div>
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-8 flex items-center gap-6\">
                <div class=\"h-24 w-24 rounded-full overflow-hidden flex-shrink-0\">
                    <img src=\"https://images.unsplash.com/photo-1558929996-da64ba858215?w=200&h=200&fit=crop\" 
                         alt=\"Dog playing\" class=\"w-full h-full object-cover\">
                </div>
                <div>
                    <p class=\"text-sm font-semibold text-orange-600 uppercase tracking-wide\">Fun</p>
                    <p class=\"mt-1 font-extrabold text-gray-900\">Games, contests & surprises</p>
                    <p class=\"mt-2 text-sm text-gray-600\">Enjoy activities designed for dogs of all sizes and ages.</p>
                </div>
            </div>
        </div>

        <div class=\"mt-14\">
            <div class=\"flex items-end justify-between gap-6\">
                <div>
                    <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                    <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Upcoming Events</h2>
                </div>
                <button type=\"button\" id=\"openRecommendationModal\"
                        class=\"px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold rounded-xl hover:from-orange-600 hover:to-orange-700 transition shadow-md flex items-center gap-2\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                    </svg>
                    Recommend Events
                </button>
            </div>

            ";
        // line 121
        yield "            <div id=\"recommendedEventsSection\" class=\"hidden mt-8 mb-10\">
                <div class=\"bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-6 border border-orange-100\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"h-10 w-10 rounded-full bg-orange-500 flex items-center justify-center\">
                                <svg class=\"w-5 h-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class=\"text-xl font-bold text-gray-900\">Recommended For You</h3>
                                <p id=\"recommendedEventsInfo\" class=\"text-sm text-gray-600\">Based on your preferences</p>
                            </div>
                        </div>
                        <button type=\"button\" id=\"closeRecommendedSection\" class=\"text-gray-400 hover:text-gray-600\">
                            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </button>
                    </div>
                    <div id=\"recommendedEventsGrid\" class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-4\">
                        ";
        // line 143
        yield "                    </div>
                </div>
            </div>

            ";
        // line 148
        yield "            <div id=\"filterForm\" class=\"mt-6 flex flex-wrap gap-4 items-end\"
                 data-filter-url=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events_filter");
        yield "\"
                 data-events-url=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">
                <div class=\"flex-1 min-w-[200px]\">
                    <input type=\"text\" id=\"searchInput\" value=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentQ"]) || array_key_exists("currentQ", $context) ? $context["currentQ"] : (function () { throw new RuntimeError('Variable "currentQ" does not exist.', 152, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search events...\"
                           class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none\">
                </div>
                <div>
                    <select id=\"typeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Types</option>
                        <option value=\"VACCINATION\" ";
        // line 158
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 158, $this->source); })()) == "VACCINATION")) ? ("selected") : (""));
        yield ">Vaccination</option>
                        <option value=\"ADOPTION\" ";
        // line 159
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 159, $this->source); })()) == "ADOPTION")) ? ("selected") : (""));
        yield ">Adoption</option>
                        <option value=\"SENSIBILISATION\" ";
        // line 160
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 160, $this->source); })()) == "SENSIBILISATION")) ? ("selected") : (""));
        yield ">Awareness</option>
                        <option value=\"COLLECTE_DONS\" ";
        // line 161
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 161, $this->source); })()) == "COLLECTE_DONS")) ? ("selected") : (""));
        yield ">Donation Drive</option>
                    </select>
                </div>
                <div>
                    <select id=\"villeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Cities</option>
                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 168
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["ville"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["currentVille"]) || array_key_exists("currentVille", $context) ? $context["currentVille"] : (function () { throw new RuntimeError('Variable "currentVille" does not exist.', 168, $this->source); })()) == $context["ville"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["ville"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ville'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                    </select>
                </div>
                <button type=\"button\" id=\"filterBtn\" class=\"px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 font-semibold transition flex items-center gap-2\">
                    <span>Filter</span>
                    <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path>
                    </svg>
                </button>
                <button type=\"button\" id=\"clearFilterBtn\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 font-medium\">
                    Clear
                </button>
            </div>
            
            ";
        // line 185
        yield "            <div id=\"resultsCount\" class=\"mt-4 text-sm text-gray-500\">
                Showing ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 186, $this->source); })())), "html", null, true);
        yield " event(s)
            </div>

            ";
        // line 190
        yield "            ";
        $context["typeImages"] = ["VACCINATION" => "https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop", "ADOPTION" => "https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop", "SENSIBILISATION" => "https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop", "COLLECTE_DONS" => "https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop"];
        // line 196
        yield "
            <div id=\"eventsGrid\" class=\"mt-8 grid lg:grid-cols-3 gap-6\">
                ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 198, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 199
            yield "                    <article class=\"event-card rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                        <div class=\"aspect-[16/9] bg-gray-100\">
                            ";
            // line 201
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 202
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 202), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 202), "html", null, true);
                yield "\" class=\"w-full h-full object-cover\">
                            ";
            } else {
                // line 204
                yield "                                <img src=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeImages"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 204), [], "array", true, true, false, 204) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 204, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 204), [], "array", false, false, false, 204)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 204, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 204), [], "array", false, false, false, 204), "html", null, true)) : ("https://images.unsplash.com/photo-1534361960057-19889db9621e?w=400&h=225&fit=crop"));
                yield "\" 
                                     alt=\"";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 205), "html", null, true);
                yield "\" class=\"w-full h-full object-cover\">
                            ";
            }
            // line 207
            yield "                        </div>
                        <div class=\"p-5\">
                            <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                <span class=\"rounded-full bg-orange-100 px-2 py-1 font-semibold text-orange-700\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 210), "html", null, true);
            yield "</span>
                                <span>";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 211), "M d, Y"), "html", null, true);
            yield "</span>
                            </div>
                            <h3 class=\"mt-3 font-extrabold text-gray-900\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 213), "html", null, true);
            yield "</h3>
                            <p class=\"mt-1 text-sm text-gray-500\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "ville", [], "any", false, false, false, 214), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 214), "html", null, true);
            yield "</p>
                            <p class=\"mt-2 text-sm text-gray-600 line-clamp-2\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 215), 0, 100), "html", null, true);
            yield "...</p>
                            <a href=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 216)]), "html", null, true);
            yield "\" class=\"mt-4 inline-block text-orange-600 font-semibold hover:underline\">
                                View Details →
                            </a>
                        </div>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        // line 221
        if (!$context['_iterated']) {
            // line 222
            yield "                    <div class=\"col-span-3 text-center py-12 text-gray-500\">
                        <p class=\"text-lg font-semibold\">No events found</p>
                        <p class=\"mt-2\">Check back soon for upcoming events!</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "            </div>
        </div>
    </section>

    ";
        // line 232
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('eventRecommendationModal');
            const openBtn = document.getElementById('openRecommendationModal');
            const closeBtn = document.getElementById('closeRecommendationModal');
            const skipBtn = document.getElementById('skipRecommendationModal');
            const form = document.getElementById('eventRecommendationForm');
            const recommendedSection = document.getElementById('recommendedEventsSection');
            const recommendedGrid = document.getElementById('recommendedEventsGrid');
            const recommendedInfo = document.getElementById('recommendedEventsInfo');
            const closeRecommendedBtn = document.getElementById('closeRecommendedSection');

            // Default images by event type
            const typeImages = {
                'VACCINATION': 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop',
                'ADOPTION': 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop',
                'SENSIBILISATION': 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop',
                'COLLECTE_DONS': 'https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop'
            };

            function openModal() {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }

            function renderRecommendedEvents(events) {
                recommendedGrid.innerHTML = '';
                
                if (!events || events.length === 0) {
                    recommendedGrid.innerHTML = '<p class=\"col-span-3 text-center text-gray-500 py-4\">No events match your preferences. Try adjusting your criteria!</p>';
                    return;
                }

                events.forEach((event, index) => {
                    const imageUrl = event.image || typeImages[event.type] || typeImages['ADOPTION'];
                    const scorePercent = Math.round((event.score || 0) * 100);
                    
                    const card = `
                        <article class=\"rounded-xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                            <div class=\"relative aspect-[16/9] bg-gray-100\">
                                <img src=\"\${imageUrl}\" alt=\"\${event.titre}\" class=\"w-full h-full object-cover\">
                                <div class=\"absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                                    \${scorePercent}% Match
                                </div>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                    <span class=\"rounded-full bg-orange-100 px-2 py-0.5 font-semibold text-orange-700\">\${event.type}</span>
                                    <span>\${event.date_debut}</span>
                                </div>
                                <h4 class=\"mt-2 font-bold text-gray-900 line-clamp-1\">\${event.titre}</h4>
                                <p class=\"mt-1 text-xs text-gray-500\">\${event.ville} - \${event.lieu}</p>
                                <a href=\"/events/\${event.id}\" class=\"mt-3 inline-block text-sm text-orange-600 font-semibold hover:underline\">
                                    View Details →
                                </a>
                            </div>
                        </article>
                    `;
                    recommendedGrid.innerHTML += card;
                });

                recommendedInfo.textContent = `Found \${events.length} events matching your preferences`;
            }

            // Open modal
            openBtn.addEventListener('click', openModal);

            // Close modal
            closeBtn.addEventListener('click', closeModal);
            skipBtn.addEventListener('click', closeModal);

            // Close recommended section
            closeRecommendedBtn.addEventListener('click', function() {
                recommendedSection.classList.add('hidden');
            });

            // Close modal on backdrop click
            modal.addEventListener('click', function(e) {
                if (e.target === modal.querySelector('.absolute.inset-0')) {
                    closeModal();
                }
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                const userPreferences = {
                    preferred_type: formData.get('preferred_type'),
                    preferred_city: formData.get('preferred_city'),
                    preferred_timeframe: formData.get('preferred_timeframe'),
                    group_size: formData.get('group_size')
                };

                // Show loading state
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<svg class=\"animate-spin h-5 w-5 mr-2\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\" fill=\"none\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg> Analyzing...';
                submitBtn.disabled = true;

                fetch('";
        // line 338
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_recommend");
        yield "', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ user_preferences: userPreferences })
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;

                    if (data.ok) {
                        renderRecommendedEvents(data.events || []);
                        recommendedSection.classList.remove('hidden');
                        closeModal();
                        
                        // Scroll to recommendations
                        recommendedSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    } else {
                        alert('Error: ' + (data.message || 'Failed to get recommendations. Make sure the Python API is running.'));
                    }
                })
                .catch(error => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    console.error('Recommendation error:', error);
                    alert('Failed to connect to recommendation service. Please make sure the Python API is running on port 8003.');
                });
            });

            // ============================================================
            // AJAX FILTER FUNCTIONALITY
            // ============================================================
            
            const filterForm = document.getElementById('filterForm');
            const searchInput = document.getElementById('searchInput');
            const typeFilter = document.getElementById('typeFilter');
            const villeFilter = document.getElementById('villeFilter');
            const filterBtn = document.getElementById('filterBtn');
            const clearFilterBtn = document.getElementById('clearFilterBtn');
            const filterSpinner = document.getElementById('filterSpinner');
            const eventsGrid = document.getElementById('eventsGrid');
            const resultsCount = document.getElementById('resultsCount');

            // Get URLs from data attributes
            const filterUrl = filterForm ? filterForm.dataset.filterUrl : '/events/filter';
            const eventsUrl = filterForm ? filterForm.dataset.eventsUrl : '/events';

            let debounceTimer;

            function renderEvents(events) {
                if (!events || events.length === 0) {
                    eventsGrid.innerHTML = `
                        <div class=\"col-span-3 text-center py-12 text-gray-500\">
                            <p class=\"text-lg font-semibold\">No events found</p>
                            <p class=\"mt-2\">Try adjusting your filters or check back soon!</p>
                        </div>
                    `;
                    return;
                }

                eventsGrid.innerHTML = events.map(event => `
                    <article class=\"event-card rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition transform hover:scale-[1.02]\">
                        <div class=\"aspect-[16/9] bg-gray-100\">
                            <img src=\"\${event.image}\" alt=\"\${event.titre}\" class=\"w-full h-full object-cover\">
                        </div>
                        <div class=\"p-5\">
                            <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                <span class=\"rounded-full bg-orange-100 px-2 py-1 font-semibold text-orange-700\">\${event.type}</span>
                                <span>\${event.date_debut}</span>
                            </div>
                            <h3 class=\"mt-3 font-extrabold text-gray-900\">\${event.titre}</h3>
                            <p class=\"mt-1 text-sm text-gray-500\">\${event.ville} - \${event.lieu}</p>
                            <p class=\"mt-2 text-sm text-gray-600 line-clamp-2\">\${event.description}</p>
                            <a href=\"\${event.url}\" class=\"mt-4 inline-block text-orange-600 font-semibold hover:underline\">
                                View Details →
                            </a>
                        </div>
                    </article>
                `).join('');
            }

            function filterEvents() {
                const q = searchInput.value.trim();
                const type = typeFilter.value;
                const ville = villeFilter.value;

                // Show spinner
                filterSpinner.classList.remove('hidden');
                filterBtn.disabled = true;

                // Build query string
                const params = new URLSearchParams();
                if (q) params.append('q', q);
                if (type) params.append('type', type);
                if (ville) params.append('ville', ville);

                fetch(`\${filterUrl}?\${params.toString()}`)
                    .then(response => response.json())
                    .then(data => {
                        filterSpinner.classList.add('hidden');
                        filterBtn.disabled = false;

                        if (data.ok) {
                            renderEvents(data.events);
                            resultsCount.textContent = `Showing \${data.count} event(s)`;
                            
                            // Update URL without reload (for bookmarking/sharing)
                            const newUrl = params.toString() ? `\${eventsUrl}?\${params.toString()}` : eventsUrl;
                            window.history.pushState({}, '', newUrl);
                        }
                    })
                    .catch(error => {
                        filterSpinner.classList.add('hidden');
                        filterBtn.disabled = false;
                        console.error('Filter error:', error);
                    });
            }

            // Filter button click
            if (filterBtn) {
                filterBtn.addEventListener('click', filterEvents);
            }

            // Clear filters
            if (clearFilterBtn) {
                clearFilterBtn.addEventListener('click', function() {
                    searchInput.value = '';
                    typeFilter.value = '';
                    villeFilter.value = '';
                    filterEvents();
                });
            }

            // Real-time search with debounce (300ms delay)
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(filterEvents, 300);
                });

                // Enter key on search input
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        clearTimeout(debounceTimer);
                        filterEvents();
                    }
                });
            }

            // Filter on dropdown change
            if (typeFilter) {
                typeFilter.addEventListener('change', filterEvents);
            }
            if (villeFilter) {
                villeFilter.addEventListener('change', filterEvents);
            }
        });
    </script>
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
        return "pages/events.html.twig";
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
        return array (  544 => 338,  436 => 232,  430 => 227,  420 => 222,  418 => 221,  408 => 216,  404 => 215,  398 => 214,  394 => 213,  389 => 211,  385 => 210,  380 => 207,  375 => 205,  370 => 204,  362 => 202,  360 => 201,  356 => 199,  351 => 198,  347 => 196,  344 => 190,  338 => 186,  335 => 185,  319 => 170,  306 => 168,  302 => 167,  293 => 161,  289 => 160,  285 => 159,  281 => 158,  272 => 152,  267 => 150,  263 => 149,  260 => 148,  254 => 143,  231 => 121,  174 => 65,  165 => 62,  161 => 61,  158 => 60,  154 => 55,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Events - PawTech{% endblock %}

{% block body %}
    {# Include Recommendation Modal #}
    {{ include('pages/event_recommendation_modal.html.twig', {villes: villes}) }}

    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16\">
            <div class=\"grid lg:grid-cols-2 gap-10 items-center\">
                <div>
                    <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Events</p>
                    <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                        Where Dogs Come First
                    </h1>
                    <p class=\"mt-4 text-gray-600 max-w-xl\">
                        Join our dog-friendly events and meet the community.
                    </p>
                </div>
                <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden\">
                    <div class=\"aspect-[16/9] bg-gray-100\">
                        <img src=\"https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=800&h=450&fit=crop\" 
                             alt=\"Happy dogs at event\" 
                             class=\"w-full h-full object-cover\">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"text-center max-w-2xl mx-auto\">
            <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">New event coming</p>
            <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">
                Let your dogs meet each other
            </h2>
        </div>

        <div class=\"mt-10 rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden\">
            <div class=\"relative aspect-[16/7]\">
                <img src=\"https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=1200&h=525&fit=crop\" 
                     alt=\"Dogs meeting at park\" 
                     class=\"absolute inset-0 w-full h-full object-cover\">
                <div class=\"absolute inset-0 bg-gradient-to-t from-gray-900/70 to-gray-900/20\"></div>
                <div class=\"absolute left-6 bottom-6 right-6 flex flex-col md:flex-row md:items-end md:justify-between gap-6\">
                    <div>
                        <p class=\"text-white/90 text-sm font-semibold\">Launching in</p>
                        <div class=\"mt-3 flex items-center gap-6\">
                            {% for part in [
                                {label:'Hours', value:'05'},
                                {label:'Minutes', value:'24'},
                                {label:'Seconds', value:'59'}
                            ] %}
                                <div class=\"text-center\">
                                    <div class=\"text-4xl font-extrabold text-white\">{{ part.value }}</div>
                                    <div class=\"text-xs uppercase tracking-wide text-white/80\">{{ part.label }}</div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"w-full md:w-96\">
                        <label class=\"block text-white/90 text-sm font-semibold mb-2\">Register</label>
                        <div class=\"flex gap-2\">
                            <input class=\"w-full rounded-2xl border border-white/30 bg-white/90 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Email address\">
                            <button class=\"rounded-2xl bg-orange-500 px-5 py-3 text-white font-extrabold hover:bg-orange-600 transition whitespace-nowrap\">
                                Join
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-12 grid md:grid-cols-2 gap-6 items-center\">
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-8 flex items-center gap-6\">
                <div class=\"h-24 w-24 rounded-full overflow-hidden flex-shrink-0\">
                    <img src=\"https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=200&h=200&fit=crop\" 
                         alt=\"Dog training\" class=\"w-full h-full object-cover\">
                </div>
                <div>
                    <p class=\"text-sm font-semibold text-orange-600 uppercase tracking-wide\">Community</p>
                    <p class=\"mt-1 font-extrabold text-gray-900\">Training tips & socialization</p>
                    <p class=\"mt-2 text-sm text-gray-600\">Meet owners, share experiences, and help your dog socialize safely.</p>
                </div>
            </div>
            <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm p-8 flex items-center gap-6\">
                <div class=\"h-24 w-24 rounded-full overflow-hidden flex-shrink-0\">
                    <img src=\"https://images.unsplash.com/photo-1558929996-da64ba858215?w=200&h=200&fit=crop\" 
                         alt=\"Dog playing\" class=\"w-full h-full object-cover\">
                </div>
                <div>
                    <p class=\"text-sm font-semibold text-orange-600 uppercase tracking-wide\">Fun</p>
                    <p class=\"mt-1 font-extrabold text-gray-900\">Games, contests & surprises</p>
                    <p class=\"mt-2 text-sm text-gray-600\">Enjoy activities designed for dogs of all sizes and ages.</p>
                </div>
            </div>
        </div>

        <div class=\"mt-14\">
            <div class=\"flex items-end justify-between gap-6\">
                <div>
                    <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                    <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Upcoming Events</h2>
                </div>
                <button type=\"button\" id=\"openRecommendationModal\"
                        class=\"px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold rounded-xl hover:from-orange-600 hover:to-orange-700 transition shadow-md flex items-center gap-2\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                    </svg>
                    Recommend Events
                </button>
            </div>

            {# Recommended Events Section (Hidden by default) #}
            <div id=\"recommendedEventsSection\" class=\"hidden mt-8 mb-10\">
                <div class=\"bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl p-6 border border-orange-100\">
                    <div class=\"flex items-center justify-between mb-4\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"h-10 w-10 rounded-full bg-orange-500 flex items-center justify-center\">
                                <svg class=\"w-5 h-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class=\"text-xl font-bold text-gray-900\">Recommended For You</h3>
                                <p id=\"recommendedEventsInfo\" class=\"text-sm text-gray-600\">Based on your preferences</p>
                            </div>
                        </div>
                        <button type=\"button\" id=\"closeRecommendedSection\" class=\"text-gray-400 hover:text-gray-600\">
                            <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"/>
                            </svg>
                        </button>
                    </div>
                    <div id=\"recommendedEventsGrid\" class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-4\">
                        {# Recommended events will be inserted here via JavaScript #}
                    </div>
                </div>
            </div>

            {# Filter Form - AJAX #}
            <div id=\"filterForm\" class=\"mt-6 flex flex-wrap gap-4 items-end\"
                 data-filter-url=\"{{ path('app_events_filter') }}\"
                 data-events-url=\"{{ path('app_events') }}\">
                <div class=\"flex-1 min-w-[200px]\">
                    <input type=\"text\" id=\"searchInput\" value=\"{{ currentQ }}\" placeholder=\"Search events...\"
                           class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none\">
                </div>
                <div>
                    <select id=\"typeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Types</option>
                        <option value=\"VACCINATION\" {{ currentType == 'VACCINATION' ? 'selected' }}>Vaccination</option>
                        <option value=\"ADOPTION\" {{ currentType == 'ADOPTION' ? 'selected' }}>Adoption</option>
                        <option value=\"SENSIBILISATION\" {{ currentType == 'SENSIBILISATION' ? 'selected' }}>Awareness</option>
                        <option value=\"COLLECTE_DONS\" {{ currentType == 'COLLECTE_DONS' ? 'selected' }}>Donation Drive</option>
                    </select>
                </div>
                <div>
                    <select id=\"villeFilter\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Cities</option>
                        {% for ville in villes %}
                            <option value=\"{{ ville }}\" {{ currentVille == ville ? 'selected' }}>{{ ville }}</option>
                        {% endfor %}
                    </select>
                </div>
                <button type=\"button\" id=\"filterBtn\" class=\"px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 font-semibold transition flex items-center gap-2\">
                    <span>Filter</span>
                    <svg id=\"filterSpinner\" class=\"hidden w-4 h-4 animate-spin\" fill=\"none\" viewBox=\"0 0 24 24\">
                        <circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\"></circle>
                        <path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path>
                    </svg>
                </button>
                <button type=\"button\" id=\"clearFilterBtn\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 font-medium\">
                    Clear
                </button>
            </div>
            
            {# Results count #}
            <div id=\"resultsCount\" class=\"mt-4 text-sm text-gray-500\">
                Showing {{ events|length }} event(s)
            </div>

            {# Default images by event type #}
            {% set typeImages = {
                'VACCINATION': 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop',
                'ADOPTION': 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop',
                'SENSIBILISATION': 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop',
                'COLLECTE_DONS': 'https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop'
            } %}

            <div id=\"eventsGrid\" class=\"mt-8 grid lg:grid-cols-3 gap-6\">
                {% for event in events %}
                    <article class=\"event-card rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                        <div class=\"aspect-[16/9] bg-gray-100\">
                            {% if event.image %}
                                <img src=\"{{ event.image }}\" alt=\"{{ event.titre }}\" class=\"w-full h-full object-cover\">
                            {% else %}
                                <img src=\"{{ typeImages[event.type] ?? 'https://images.unsplash.com/photo-1534361960057-19889db9621e?w=400&h=225&fit=crop' }}\" 
                                     alt=\"{{ event.titre }}\" class=\"w-full h-full object-cover\">
                            {% endif %}
                        </div>
                        <div class=\"p-5\">
                            <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                <span class=\"rounded-full bg-orange-100 px-2 py-1 font-semibold text-orange-700\">{{ event.type }}</span>
                                <span>{{ event.dateDebut|date('M d, Y') }}</span>
                            </div>
                            <h3 class=\"mt-3 font-extrabold text-gray-900\">{{ event.titre }}</h3>
                            <p class=\"mt-1 text-sm text-gray-500\">{{ event.ville }} - {{ event.lieu }}</p>
                            <p class=\"mt-2 text-sm text-gray-600 line-clamp-2\">{{ event.description|slice(0, 100) }}...</p>
                            <a href=\"{{ path('app_event_detail', {id: event.id}) }}\" class=\"mt-4 inline-block text-orange-600 font-semibold hover:underline\">
                                View Details →
                            </a>
                        </div>
                    </article>
                {% else %}
                    <div class=\"col-span-3 text-center py-12 text-gray-500\">
                        <p class=\"text-lg font-semibold\">No events found</p>
                        <p class=\"mt-2\">Check back soon for upcoming events!</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    {# JavaScript for Event Recommendations #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('eventRecommendationModal');
            const openBtn = document.getElementById('openRecommendationModal');
            const closeBtn = document.getElementById('closeRecommendationModal');
            const skipBtn = document.getElementById('skipRecommendationModal');
            const form = document.getElementById('eventRecommendationForm');
            const recommendedSection = document.getElementById('recommendedEventsSection');
            const recommendedGrid = document.getElementById('recommendedEventsGrid');
            const recommendedInfo = document.getElementById('recommendedEventsInfo');
            const closeRecommendedBtn = document.getElementById('closeRecommendedSection');

            // Default images by event type
            const typeImages = {
                'VACCINATION': 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop',
                'ADOPTION': 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop',
                'SENSIBILISATION': 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop',
                'COLLECTE_DONS': 'https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop'
            };

            function openModal() {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }

            function renderRecommendedEvents(events) {
                recommendedGrid.innerHTML = '';
                
                if (!events || events.length === 0) {
                    recommendedGrid.innerHTML = '<p class=\"col-span-3 text-center text-gray-500 py-4\">No events match your preferences. Try adjusting your criteria!</p>';
                    return;
                }

                events.forEach((event, index) => {
                    const imageUrl = event.image || typeImages[event.type] || typeImages['ADOPTION'];
                    const scorePercent = Math.round((event.score || 0) * 100);
                    
                    const card = `
                        <article class=\"rounded-xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                            <div class=\"relative aspect-[16/9] bg-gray-100\">
                                <img src=\"\${imageUrl}\" alt=\"\${event.titre}\" class=\"w-full h-full object-cover\">
                                <div class=\"absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                                    \${scorePercent}% Match
                                </div>
                            </div>
                            <div class=\"p-4\">
                                <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                    <span class=\"rounded-full bg-orange-100 px-2 py-0.5 font-semibold text-orange-700\">\${event.type}</span>
                                    <span>\${event.date_debut}</span>
                                </div>
                                <h4 class=\"mt-2 font-bold text-gray-900 line-clamp-1\">\${event.titre}</h4>
                                <p class=\"mt-1 text-xs text-gray-500\">\${event.ville} - \${event.lieu}</p>
                                <a href=\"/events/\${event.id}\" class=\"mt-3 inline-block text-sm text-orange-600 font-semibold hover:underline\">
                                    View Details →
                                </a>
                            </div>
                        </article>
                    `;
                    recommendedGrid.innerHTML += card;
                });

                recommendedInfo.textContent = `Found \${events.length} events matching your preferences`;
            }

            // Open modal
            openBtn.addEventListener('click', openModal);

            // Close modal
            closeBtn.addEventListener('click', closeModal);
            skipBtn.addEventListener('click', closeModal);

            // Close recommended section
            closeRecommendedBtn.addEventListener('click', function() {
                recommendedSection.classList.add('hidden');
            });

            // Close modal on backdrop click
            modal.addEventListener('click', function(e) {
                if (e.target === modal.querySelector('.absolute.inset-0')) {
                    closeModal();
                }
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);
                const userPreferences = {
                    preferred_type: formData.get('preferred_type'),
                    preferred_city: formData.get('preferred_city'),
                    preferred_timeframe: formData.get('preferred_timeframe'),
                    group_size: formData.get('group_size')
                };

                // Show loading state
                const submitBtn = form.querySelector('button[type=\"submit\"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<svg class=\"animate-spin h-5 w-5 mr-2\" viewBox=\"0 0 24 24\"><circle class=\"opacity-25\" cx=\"12\" cy=\"12\" r=\"10\" stroke=\"currentColor\" stroke-width=\"4\" fill=\"none\"></circle><path class=\"opacity-75\" fill=\"currentColor\" d=\"M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z\"></path></svg> Analyzing...';
                submitBtn.disabled = true;

                fetch('{{ path(\"app_event_recommend\") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ user_preferences: userPreferences })
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;

                    if (data.ok) {
                        renderRecommendedEvents(data.events || []);
                        recommendedSection.classList.remove('hidden');
                        closeModal();
                        
                        // Scroll to recommendations
                        recommendedSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    } else {
                        alert('Error: ' + (data.message || 'Failed to get recommendations. Make sure the Python API is running.'));
                    }
                })
                .catch(error => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    console.error('Recommendation error:', error);
                    alert('Failed to connect to recommendation service. Please make sure the Python API is running on port 8003.');
                });
            });

            // ============================================================
            // AJAX FILTER FUNCTIONALITY
            // ============================================================
            
            const filterForm = document.getElementById('filterForm');
            const searchInput = document.getElementById('searchInput');
            const typeFilter = document.getElementById('typeFilter');
            const villeFilter = document.getElementById('villeFilter');
            const filterBtn = document.getElementById('filterBtn');
            const clearFilterBtn = document.getElementById('clearFilterBtn');
            const filterSpinner = document.getElementById('filterSpinner');
            const eventsGrid = document.getElementById('eventsGrid');
            const resultsCount = document.getElementById('resultsCount');

            // Get URLs from data attributes
            const filterUrl = filterForm ? filterForm.dataset.filterUrl : '/events/filter';
            const eventsUrl = filterForm ? filterForm.dataset.eventsUrl : '/events';

            let debounceTimer;

            function renderEvents(events) {
                if (!events || events.length === 0) {
                    eventsGrid.innerHTML = `
                        <div class=\"col-span-3 text-center py-12 text-gray-500\">
                            <p class=\"text-lg font-semibold\">No events found</p>
                            <p class=\"mt-2\">Try adjusting your filters or check back soon!</p>
                        </div>
                    `;
                    return;
                }

                eventsGrid.innerHTML = events.map(event => `
                    <article class=\"event-card rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition transform hover:scale-[1.02]\">
                        <div class=\"aspect-[16/9] bg-gray-100\">
                            <img src=\"\${event.image}\" alt=\"\${event.titre}\" class=\"w-full h-full object-cover\">
                        </div>
                        <div class=\"p-5\">
                            <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                <span class=\"rounded-full bg-orange-100 px-2 py-1 font-semibold text-orange-700\">\${event.type}</span>
                                <span>\${event.date_debut}</span>
                            </div>
                            <h3 class=\"mt-3 font-extrabold text-gray-900\">\${event.titre}</h3>
                            <p class=\"mt-1 text-sm text-gray-500\">\${event.ville} - \${event.lieu}</p>
                            <p class=\"mt-2 text-sm text-gray-600 line-clamp-2\">\${event.description}</p>
                            <a href=\"\${event.url}\" class=\"mt-4 inline-block text-orange-600 font-semibold hover:underline\">
                                View Details →
                            </a>
                        </div>
                    </article>
                `).join('');
            }

            function filterEvents() {
                const q = searchInput.value.trim();
                const type = typeFilter.value;
                const ville = villeFilter.value;

                // Show spinner
                filterSpinner.classList.remove('hidden');
                filterBtn.disabled = true;

                // Build query string
                const params = new URLSearchParams();
                if (q) params.append('q', q);
                if (type) params.append('type', type);
                if (ville) params.append('ville', ville);

                fetch(`\${filterUrl}?\${params.toString()}`)
                    .then(response => response.json())
                    .then(data => {
                        filterSpinner.classList.add('hidden');
                        filterBtn.disabled = false;

                        if (data.ok) {
                            renderEvents(data.events);
                            resultsCount.textContent = `Showing \${data.count} event(s)`;
                            
                            // Update URL without reload (for bookmarking/sharing)
                            const newUrl = params.toString() ? `\${eventsUrl}?\${params.toString()}` : eventsUrl;
                            window.history.pushState({}, '', newUrl);
                        }
                    })
                    .catch(error => {
                        filterSpinner.classList.add('hidden');
                        filterBtn.disabled = false;
                        console.error('Filter error:', error);
                    });
            }

            // Filter button click
            if (filterBtn) {
                filterBtn.addEventListener('click', filterEvents);
            }

            // Clear filters
            if (clearFilterBtn) {
                clearFilterBtn.addEventListener('click', function() {
                    searchInput.value = '';
                    typeFilter.value = '';
                    villeFilter.value = '';
                    filterEvents();
                });
            }

            // Real-time search with debounce (300ms delay)
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    clearTimeout(debounceTimer);
                    debounceTimer = setTimeout(filterEvents, 300);
                });

                // Enter key on search input
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        clearTimeout(debounceTimer);
                        filterEvents();
                    }
                });
            }

            // Filter on dropdown change
            if (typeFilter) {
                typeFilter.addEventListener('change', filterEvents);
            }
            if (villeFilter) {
                villeFilter.addEventListener('change', filterEvents);
            }
        });
    </script>
{% endblock %}

", "pages/events.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\events.html.twig");
    }
}
