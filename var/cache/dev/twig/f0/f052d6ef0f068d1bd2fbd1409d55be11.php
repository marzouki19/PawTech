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
        yield "    <section class=\"relative overflow-hidden\">
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["label" => "Hours", "value" => "05"], ["label" => "Minutes", "value" => "24"], ["label" => "Seconds", "value" => "59"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 57
            yield "                                <div class=\"text-center\">
                                    <div class=\"text-4xl font-extrabold text-white\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "value", [], "any", false, false, false, 58), "html", null, true);
            yield "</div>
                                    <div class=\"text-xs uppercase tracking-wide text-white/80\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "label", [], "any", false, false, false, 59), "html", null, true);
            yield "</div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
            </div>

            ";
        // line 111
        yield "            <form method=\"get\" class=\"mt-6 flex flex-wrap gap-4 items-end\">
                <div class=\"flex-1 min-w-[200px]\">
                    <input type=\"text\" name=\"q\" value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentQ"]) || array_key_exists("currentQ", $context) ? $context["currentQ"] : (function () { throw new RuntimeError('Variable "currentQ" does not exist.', 113, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Search events...\"
                           class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none\">
                </div>
                <div>
                    <select name=\"type\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Types</option>
                        <option value=\"VACCINATION\" ";
        // line 119
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 119, $this->source); })()) == "VACCINATION")) ? ("selected") : (""));
        yield ">Vaccination</option>
                        <option value=\"ADOPTION\" ";
        // line 120
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 120, $this->source); })()) == "ADOPTION")) ? ("selected") : (""));
        yield ">Adoption</option>
                        <option value=\"SENSIBILISATION\" ";
        // line 121
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 121, $this->source); })()) == "SENSIBILISATION")) ? ("selected") : (""));
        yield ">Awareness</option>
                        <option value=\"COLLECTE_DONS\" ";
        // line 122
        yield ((((isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new RuntimeError('Variable "currentType" does not exist.', 122, $this->source); })()) == "COLLECTE_DONS")) ? ("selected") : (""));
        yield ">Donation Drive</option>
                    </select>
                </div>
                <div>
                    <select name=\"ville\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Cities</option>
                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 129
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["ville"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["currentVille"]) || array_key_exists("currentVille", $context) ? $context["currentVille"] : (function () { throw new RuntimeError('Variable "currentVille" does not exist.', 129, $this->source); })()) == $context["ville"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["ville"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ville'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                    </select>
                </div>
                <button type=\"submit\" class=\"px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 font-semibold\">
                    Filter
                </button>
            </form>

            ";
        // line 139
        yield "            ";
        $context["typeImages"] = ["VACCINATION" => "https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop", "ADOPTION" => "https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop", "SENSIBILISATION" => "https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop", "COLLECTE_DONS" => "https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop"];
        // line 145
        yield "
            <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 148
            yield "                    <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                        <div class=\"aspect-[16/9] bg-gray-100\">
                            ";
            // line 150
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 151), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 151), "html", null, true);
                yield "\" class=\"w-full h-full object-cover\">
                            ";
            } else {
                // line 153
                yield "                                <img src=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["typeImages"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 153), [], "array", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 153, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 153), [], "array", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["typeImages"]) || array_key_exists("typeImages", $context) ? $context["typeImages"] : (function () { throw new RuntimeError('Variable "typeImages" does not exist.', 153, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "html", null, true)) : ("https://images.unsplash.com/photo-1534361960057-19889db9621e?w=400&h=225&fit=crop"));
                yield "\" 
                                     alt=\"";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 154), "html", null, true);
                yield "\" class=\"w-full h-full object-cover\">
                            ";
            }
            // line 156
            yield "                        </div>
                        <div class=\"p-5\">
                            <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                                <span class=\"rounded-full bg-orange-100 px-2 py-1 font-semibold text-orange-700\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 159), "html", null, true);
            yield "</span>
                                <span>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 160), "M d, Y"), "html", null, true);
            yield "</span>
                            </div>
                            <h3 class=\"mt-3 font-extrabold text-gray-900\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titre", [], "any", false, false, false, 162), "html", null, true);
            yield "</h3>
                            <p class=\"mt-1 text-sm text-gray-500\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "ville", [], "any", false, false, false, 163), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 163), "html", null, true);
            yield "</p>
                            <p class=\"mt-2 text-sm text-gray-600 line-clamp-2\">";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 164), 0, 100), "html", null, true);
            yield "...</p>
                            <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"mt-4 inline-block text-orange-600 font-semibold hover:underline\">
                                View Details →
                            </a>
                        </div>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        // line 170
        if (!$context['_iterated']) {
            // line 171
            yield "                    <div class=\"col-span-3 text-center py-12 text-gray-500\">
                        <p class=\"text-lg font-semibold\">No events found</p>
                        <p class=\"mt-2\">Check back soon for upcoming events!</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "            </div>
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
        return array (  364 => 176,  354 => 171,  352 => 170,  342 => 165,  338 => 164,  332 => 163,  328 => 162,  323 => 160,  319 => 159,  314 => 156,  309 => 154,  304 => 153,  296 => 151,  294 => 150,  290 => 148,  285 => 147,  281 => 145,  278 => 139,  269 => 131,  256 => 129,  252 => 128,  243 => 122,  239 => 121,  235 => 120,  231 => 119,  222 => 113,  218 => 111,  168 => 62,  159 => 59,  155 => 58,  152 => 57,  148 => 52,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Events - PawTech{% endblock %}

{% block body %}
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
            </div>

            {# Filter Form #}
            <form method=\"get\" class=\"mt-6 flex flex-wrap gap-4 items-end\">
                <div class=\"flex-1 min-w-[200px]\">
                    <input type=\"text\" name=\"q\" value=\"{{ currentQ }}\" placeholder=\"Search events...\"
                           class=\"w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none\">
                </div>
                <div>
                    <select name=\"type\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Types</option>
                        <option value=\"VACCINATION\" {{ currentType == 'VACCINATION' ? 'selected' }}>Vaccination</option>
                        <option value=\"ADOPTION\" {{ currentType == 'ADOPTION' ? 'selected' }}>Adoption</option>
                        <option value=\"SENSIBILISATION\" {{ currentType == 'SENSIBILISATION' ? 'selected' }}>Awareness</option>
                        <option value=\"COLLECTE_DONS\" {{ currentType == 'COLLECTE_DONS' ? 'selected' }}>Donation Drive</option>
                    </select>
                </div>
                <div>
                    <select name=\"ville\" class=\"px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none\">
                        <option value=\"\">All Cities</option>
                        {% for ville in villes %}
                            <option value=\"{{ ville }}\" {{ currentVille == ville ? 'selected' }}>{{ ville }}</option>
                        {% endfor %}
                    </select>
                </div>
                <button type=\"submit\" class=\"px-6 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 font-semibold\">
                    Filter
                </button>
            </form>

            {# Default images by event type #}
            {% set typeImages = {
                'VACCINATION': 'https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=400&h=225&fit=crop',
                'ADOPTION': 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=400&h=225&fit=crop',
                'SENSIBILISATION': 'https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=400&h=225&fit=crop',
                'COLLECTE_DONS': 'https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=400&h=225&fit=crop'
            } %}

            <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
                {% for event in events %}
                    <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
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
{% endblock %}

", "pages/events.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\events.html.twig");
    }
}
