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

/* pages/shop.html.twig */
class __TwigTemplate_f8e46cd6b07dee7e677d77a32eb32058 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/shop.html.twig"));

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

        yield "Shop - PawTech";
        
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

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Pet Shop</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    The friendly and caring small dog store
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Everything you need for your dog: food, toys, carriers, bowls and more.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Shop header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-12 gap-8\">
            <aside class=\"lg:col-span-3\">
                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-5 sticky top-6\">
                    <h2 class=\"font-extrabold text-gray-900\">Filter</h2>

                    <div class=\"mt-5\">
                        <h3 class=\"text-sm font-bold text-gray-900\">By categories</h3>
                        <ul class=\"mt-3 space-y-2 text-sm text-gray-600\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Furniture", "Bowls", "Clothing", "Food", "Toys", "Cage", "Medicine"]);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "                                <li class=\"flex items-center justify-between\">
                                    <a href=\"#\" class=\"hover:text-orange-600\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</a>
                                    <span class=\"text-xs text-gray-400\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 3, 28), "html", null, true);
            yield "</span>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                        </ul>
                    </div>

                    <div class=\"mt-6\">
                        <h3 class=\"text-sm font-bold text-gray-900\">Filter by Price</h3>
                        <div class=\"mt-3 flex items-center gap-2 text-sm\">
                            <span class=\"text-gray-500\">\$</span>
                            <input class=\"w-full accent-orange-500\" type=\"range\" min=\"0\" max=\"300\" value=\"120\">
                            <span class=\"text-gray-500\">\$300</span>
                        </div>
                        <button class=\"mt-4 w-full rounded-xl bg-gray-900 px-4 py-2 text-white text-sm font-semibold hover:bg-gray-800 transition\">
                            Apply
                        </button>
                    </div>

                    <div class=\"mt-6\">
                        <h3 class=\"text-sm font-bold text-gray-900\">Popular products</h3>
                        <div class=\"mt-3 space-y-3\">
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Premium Dog Food", "Dog Bowl", "Dog Leash"]);
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 66
            yield "                                <div class=\"flex items-center gap-3\">
                                    <div class=\"h-12 w-12 rounded-xl bg-gray-100\"></div>
                                    <div class=\"min-w-0\">
                                        <p class=\"text-sm font-semibold text-gray-900 truncate\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
            yield "</p>
                                        <p class=\"text-xs text-gray-500\">\$";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 12, 99), "html", null, true);
            yield ".99</p>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                        </div>
                    </div>
                </div>
            </aside>

            <div class=\"lg:col-span-9\">
                <div class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4\">
                    <p class=\"text-sm text-gray-500\">Showing 1–12 of 74 results</p>
                    <div class=\"flex items-center gap-3\">
                        <input class=\"w-full sm:w-72 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Search products...\">
                        <select class=\"rounded-full border border-gray-200 bg-white px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\">
                            <option>Sort by latest</option>
                            <option>Sort by price: low to high</option>
                            <option>Sort by price: high to low</option>
                        </select>
                    </div>
                </div>

                <div class=\"mt-7 grid sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                    ";
        // line 93
        $context["products"] = [["name" => "Premium Dog Food", "price" => "23.90"], ["name" => "Dog Leash", "price" => "12.90"], ["name" => "Dog Bowl", "price" => "18.90"], ["name" => "Pet Carrier", "price" => "29.90"], ["name" => "Dog Bag", "price" => "16.90"], ["name" => "Dog Bed", "price" => "42.90"], ["name" => "Premium Dog Food", "price" => "24.99"], ["name" => "Dog Bowl", "price" => "14.99"], ["name" => "Toy Bundle", "price" => "9.99"]];
        // line 104
        yield "
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 106
            yield "                        <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition overflow-hidden\">
                            <div class=\"aspect-[4/3] bg-gray-100 relative\">
                                <div class=\"absolute top-3 right-3 flex items-center gap-2\">
                                    <button class=\"h-9 w-9 rounded-full bg-white/90 border border-gray-200 hover:border-orange-400 transition\" title=\"Wishlist\">♡</button>
                                    <button class=\"h-9 w-9 rounded-full bg-white/90 border border-gray-200 hover:border-orange-400 transition\" title=\"Add to cart\">🛒</button>
                                </div>
                            </div>
                            <div class=\"p-4\">
                                <p class=\"font-extrabold text-gray-900\">";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                                <p class=\"mt-1 text-sm text-gray-500\">\$";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 115), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "                </div>

                <div class=\"mt-10 flex items-center justify-center gap-2\">
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">1</button>
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">2</button>
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">3</button>
                    <button class=\"h-10 w-20 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">Next →</button>
                </div>

                <div class=\"mt-12 grid md:grid-cols-2 gap-6\">
                    <div class=\"rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9]\"></div>
                    <div class=\"rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9]\"></div>
                </div>
            </div>
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
        return "pages/shop.html.twig";
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
        return array (  254 => 119,  244 => 115,  240 => 114,  230 => 106,  226 => 105,  223 => 104,  221 => 93,  200 => 74,  190 => 70,  186 => 69,  181 => 66,  177 => 65,  157 => 47,  148 => 44,  144 => 43,  141 => 42,  137 => 41,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Shop - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Pet Shop</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    The friendly and caring small dog store
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Everything you need for your dog: food, toys, carriers, bowls and more.
                </p>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Shop header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 pb-14\">
        <div class=\"grid lg:grid-cols-12 gap-8\">
            <aside class=\"lg:col-span-3\">
                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-5 sticky top-6\">
                    <h2 class=\"font-extrabold text-gray-900\">Filter</h2>

                    <div class=\"mt-5\">
                        <h3 class=\"text-sm font-bold text-gray-900\">By categories</h3>
                        <ul class=\"mt-3 space-y-2 text-sm text-gray-600\">
                            {% for item in ['Furniture','Bowls','Clothing','Food','Toys','Cage','Medicine'] %}
                                <li class=\"flex items-center justify-between\">
                                    <a href=\"#\" class=\"hover:text-orange-600\">{{ item }}</a>
                                    <span class=\"text-xs text-gray-400\">{{ random(3, 28) }}</span>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>

                    <div class=\"mt-6\">
                        <h3 class=\"text-sm font-bold text-gray-900\">Filter by Price</h3>
                        <div class=\"mt-3 flex items-center gap-2 text-sm\">
                            <span class=\"text-gray-500\">\$</span>
                            <input class=\"w-full accent-orange-500\" type=\"range\" min=\"0\" max=\"300\" value=\"120\">
                            <span class=\"text-gray-500\">\$300</span>
                        </div>
                        <button class=\"mt-4 w-full rounded-xl bg-gray-900 px-4 py-2 text-white text-sm font-semibold hover:bg-gray-800 transition\">
                            Apply
                        </button>
                    </div>

                    <div class=\"mt-6\">
                        <h3 class=\"text-sm font-bold text-gray-900\">Popular products</h3>
                        <div class=\"mt-3 space-y-3\">
                            {% for p in ['Premium Dog Food','Dog Bowl','Dog Leash'] %}
                                <div class=\"flex items-center gap-3\">
                                    <div class=\"h-12 w-12 rounded-xl bg-gray-100\"></div>
                                    <div class=\"min-w-0\">
                                        <p class=\"text-sm font-semibold text-gray-900 truncate\">{{ p }}</p>
                                        <p class=\"text-xs text-gray-500\">\${{ random(12, 99) }}.99</p>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </aside>

            <div class=\"lg:col-span-9\">
                <div class=\"flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4\">
                    <p class=\"text-sm text-gray-500\">Showing 1–12 of 74 results</p>
                    <div class=\"flex items-center gap-3\">
                        <input class=\"w-full sm:w-72 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\" placeholder=\"Search products...\">
                        <select class=\"rounded-full border border-gray-200 bg-white px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-300\">
                            <option>Sort by latest</option>
                            <option>Sort by price: low to high</option>
                            <option>Sort by price: high to low</option>
                        </select>
                    </div>
                </div>

                <div class=\"mt-7 grid sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                    {% set products = [
                        {name:'Premium Dog Food', price:'23.90'},
                        {name:'Dog Leash', price:'12.90'},
                        {name:'Dog Bowl', price:'18.90'},
                        {name:'Pet Carrier', price:'29.90'},
                        {name:'Dog Bag', price:'16.90'},
                        {name:'Dog Bed', price:'42.90'},
                        {name:'Premium Dog Food', price:'24.99'},
                        {name:'Dog Bowl', price:'14.99'},
                        {name:'Toy Bundle', price:'9.99'}
                    ] %}

                    {% for p in products %}
                        <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition overflow-hidden\">
                            <div class=\"aspect-[4/3] bg-gray-100 relative\">
                                <div class=\"absolute top-3 right-3 flex items-center gap-2\">
                                    <button class=\"h-9 w-9 rounded-full bg-white/90 border border-gray-200 hover:border-orange-400 transition\" title=\"Wishlist\">♡</button>
                                    <button class=\"h-9 w-9 rounded-full bg-white/90 border border-gray-200 hover:border-orange-400 transition\" title=\"Add to cart\">🛒</button>
                                </div>
                            </div>
                            <div class=\"p-4\">
                                <p class=\"font-extrabold text-gray-900\">{{ p.name }}</p>
                                <p class=\"mt-1 text-sm text-gray-500\">\${{ p.price }}</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <div class=\"mt-10 flex items-center justify-center gap-2\">
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">1</button>
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">2</button>
                    <button class=\"h-10 w-10 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">3</button>
                    <button class=\"h-10 w-20 rounded-xl border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">Next →</button>
                </div>

                <div class=\"mt-12 grid md:grid-cols-2 gap-6\">
                    <div class=\"rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9]\"></div>
                    <div class=\"rounded-3xl overflow-hidden border border-gray-100 bg-gray-100 aspect-[16/9]\"></div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "pages/shop.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\shop.html.twig");
    }
}
