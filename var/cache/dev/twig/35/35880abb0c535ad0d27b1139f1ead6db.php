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

/* pages/veterinarian.html.twig */
class __TwigTemplate_05d6e64ec3e4b25fcfef81d8a6cdcbb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/veterinarian.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/veterinarian.html.twig"));

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

        yield "Veterinarian - PawTech";
        
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
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Veterinary</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Where Dogs Come First
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Professional care, modern facilities, and a friendly team for your dog’s health and happiness.
                </p>
                <div class=\"mt-7\">
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Learn More
                    </a>
                </div>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Veterinary header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"text-center max-w-2xl mx-auto\">
            <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Services</p>
            <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Our Services</h2>
        </div>

        <div class=\"mt-10 grid md:grid-cols-3 gap-6\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "Pet Checkup", "desc" => "Routine wellness checks to keep your dog healthy."], ["title" => "Lab Tests", "desc" => "Fast diagnostics and accurate laboratory testing."], ["title" => "Vaccination", "desc" => "Up-to-date vaccines for a safer, happier life."]]);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 49
            yield "                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-6 hover:shadow-md transition\">
                    <div class=\"h-12 w-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">+</div>
                    <h3 class=\"mt-4 font-extrabold text-gray-900\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 51), "html", null, true);
            yield "</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "desc", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-14\">
        <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden grid lg:grid-cols-2\">
            <div class=\"bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center p-10\">
                <div class=\"w-full max-w-md rounded-3xl bg-white/70 backdrop-blur border border-white/60 p-8\">
                    <div class=\"h-48 rounded-2xl bg-white/60\"></div>
                    <div class=\"mt-4 h-4 w-2/3 rounded bg-white/60\"></div>
                    <div class=\"mt-2 h-4 w-1/2 rounded bg-white/60\"></div>
                </div>
            </div>
            <div class=\"p-8 lg:p-12\">
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Care</p>
                <h2 class=\"mt-2 text-3xl font-extrabold text-gray-900\">Medical Care for Dogs</h2>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    From preventive care to treatment plans, we provide compassionate veterinary services tailored to your dog.
                </p>
                <div class=\"mt-7\">
                    <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Team</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Our Expert Team</h2>
            </div>
            <div class=\"flex items-center gap-2\">
                <button class=\"h-10 w-10 rounded-full border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">‹</button>
                <button class=\"h-10 w-10 rounded-full border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">›</button>
            </div>
        </div>

        <div class=\"mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("veterinarians", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["veterinarians"]) || array_key_exists("veterinarians", $context) ? $context["veterinarians"] : (function () { throw new RuntimeError('Variable "veterinarians" does not exist.', 95, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vet"]) {
            // line 96
            yield "                <button type=\"button\"
                        class=\"text-left rounded-[26px] bg-white border border-gray-200 shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden hover:shadow-[0_14px_34px_rgba(0,0,0,0.12)] transition\"
                        data-vet-card
                    data-vet-first-name=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "prenom", [], "any", false, false, false, 99), "html", null, true);
            yield "\"
                    data-vet-last-name=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "nom", [], "any", false, false, false, 100), "html", null, true);
            yield "\"
                        data-vet-role=\"Veterinerian\"
                        data-vet-email=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "email", [], "any", false, false, false, 102), "html", null, true);
            yield "\"
                        data-vet-phone=\"";
            // line 103
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "telephone", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("+216 " . CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "telephone", [], "any", false, false, false, 103)), "html", null, true)) : ("N/A"));
            yield "\"
                        data-vet-status=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "status", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "status", [], "any", false, false, false, 104), "Unknown")) : ("Unknown")), "html", null, true);
            yield "\"
                        data-vet-image=\"";
            // line 105
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "userImage", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "userImage", [], "any", false, false, false, 105)), "html", null, true)) : (""));
            yield "\">
                    <div class=\"p-3\">
                        <div class=\"aspect-square rounded-[20px] bg-[#f7d8bb] border border-gray-200 shadow-inner flex items-center justify-center overflow-hidden\">
                            ";
            // line 108
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "userImage", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "userImage", [], "any", false, false, false, 109)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "prenom", [], "any", false, false, false, 109), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "\" class=\"h-full w-full object-cover\" />
                            ";
            } else {
                // line 111
                yield "                                <div class=\"h-28 w-28 rounded-2xl bg-[#f4cfae] flex items-center justify-center text-3xl font-bold text-white\">
                                    ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "prenom", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "prenom", [], "any", false, false, false, 112), "V")) : ("V")))), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "nom", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "nom", [], "any", false, false, false, 112), "")) : ("")))), "html", null, true);
                yield "
                                </div>
                            ";
            }
            // line 115
            yield "                        </div>
                    </div>
                    <div class=\"px-4 pb-4 text-center\">
                        <p class=\"font-semibold text-gray-900\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "prenom", [], "any", false, false, false, 118), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vet"], "nom", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                        <p class=\"text-sm text-orange-500 font-medium\">Veterinerian</p>
                    </div>
                </button>
            ";
            $context['_iterated'] = true;
        }
        // line 122
        if (!$context['_iterated']) {
            // line 123
            yield "                <div class=\"col-span-full rounded-2xl bg-white border border-gray-100 p-6 text-center text-gray-500\">
                    No veterinarians found.
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['vet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "        </div>
    </section>

    <div id=\"vet-modal\" class=\"fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-4\">
        <div class=\"w-full max-w-3xl rounded-3xl bg-white shadow-2xl overflow-hidden\">
            <div class=\"flex items-center justify-between px-6 py-4 border-b\">
                <h3 class=\"text-lg font-semibold text-gray-900\">Veterinarian Details</h3>
                <button type=\"button\" id=\"vet-modal-close\" class=\"text-gray-500 hover:text-gray-700\">✕</button>
            </div>
            <div class=\"p-6 grid md:grid-cols-2 gap-6\">
                <div class=\"rounded-2xl border border-gray-200 p-4 flex flex-col items-center\">
                    <div class=\"h-64 w-full rounded-2xl bg-[#f7d8bb] border border-gray-200 shadow-inner flex items-center justify-center overflow-hidden\">
                        <img id=\"vet-modal-image\" src=\"\" alt=\"Veterinarian\" class=\"h-full w-full object-cover hidden\" />
                        <div id=\"vet-modal-fallback\" class=\"h-28 w-28 rounded-2xl bg-[#f4cfae] flex items-center justify-center text-3xl font-bold text-white\">V</div>
                    </div>
                    <p id=\"vet-modal-name\" class=\"mt-4 text-lg font-semibold text-gray-900\"></p>
                    <p id=\"vet-modal-role\" class=\"text-sm text-orange-500 font-medium\">Veterinerian</p>
                </div>
                <div class=\"rounded-2xl border border-gray-200 p-4\">
                    <div class=\"space-y-3 text-sm text-gray-700\">
                        <p><span class=\"font-semibold\">First Name:</span> <span id=\"vet-modal-first-name\"></span></p>
                        <p><span class=\"font-semibold\">Last Name:</span> <span id=\"vet-modal-last-name\"></span></p>
                        <p><span class=\"font-semibold\">Email:</span> <span id=\"vet-modal-email\"></span></p>
                        <p><span class=\"font-semibold\">Telephone:</span> <span id=\"vet-modal-phone\"></span></p>
                        <p><span class=\"font-semibold\">Status:</span> <span id=\"vet-modal-status\" class=\"font-semibold\"></span></p>
                    </div>
                    <div class=\"mt-6 flex items-center gap-3\">
                        <button type=\"button\" class=\"px-4 py-2 rounded-lg bg-red-500 text-white text-sm font-semibold hover:bg-red-600\" id=\"vet-modal-cancel\">Cancel</button>
                        <button type=\"button\" class=\"px-4 py-2 rounded-lg bg-emerald-500 text-white text-sm font-semibold hover:bg-emerald-600\" id=\"vet-modal-appointment\">Make an appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var modal = document.getElementById('vet-modal');
            var closeBtn = document.getElementById('vet-modal-close');
            var cards = document.querySelectorAll('[data-vet-card]');
            var modalImage = document.getElementById('vet-modal-image');
            var modalFallback = document.getElementById('vet-modal-fallback');
            var modalName = document.getElementById('vet-modal-name');
            var modalRole = document.getElementById('vet-modal-role');
            var modalFirstName = document.getElementById('vet-modal-first-name');
            var modalLastName = document.getElementById('vet-modal-last-name');
            var modalEmail = document.getElementById('vet-modal-email');
            var modalPhone = document.getElementById('vet-modal-phone');
            var modalStatus = document.getElementById('vet-modal-status');

            if (!modal || !closeBtn) return;

            function openModal(card) {
                var firstName = card.getAttribute('data-vet-first-name') || '';
                var lastName = card.getAttribute('data-vet-last-name') || '';
                var name = (firstName + ' ' + lastName).trim();
                var role = card.getAttribute('data-vet-role') || 'Veterinerian';
                var email = card.getAttribute('data-vet-email') || 'N/A';
                var phone = card.getAttribute('data-vet-phone') || 'N/A';
                var status = card.getAttribute('data-vet-status') || 'Unknown';
                var image = card.getAttribute('data-vet-image') || '';

                modalName.textContent = name;
                modalRole.textContent = role;
                modalFirstName.textContent = firstName || 'N/A';
                modalLastName.textContent = lastName || 'N/A';
                modalEmail.textContent = email;
                modalPhone.textContent = phone;
                modalStatus.textContent = status;

                var statusValue = status.toLowerCase();
                modalStatus.classList.remove('text-emerald-600', 'text-red-600', 'text-gray-500');
                if (statusValue === 'actif' || statusValue === 'active') {
                    modalStatus.classList.add('text-emerald-600');
                } else if (statusValue === 'inactif' || statusValue === 'inactive') {
                    modalStatus.classList.add('text-red-600');
                } else {
                    modalStatus.classList.add('text-gray-500');
                }

                if (image) {
                    modalImage.src = image;
                    modalImage.classList.remove('hidden');
                    modalFallback.classList.add('hidden');
                } else {
                    modalImage.classList.add('hidden');
                    modalFallback.classList.remove('hidden');
                    modalFallback.textContent = name ? name.charAt(0).toUpperCase() : 'V';
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            cards.forEach(function (card) {
                card.addEventListener('click', function () {
                    openModal(card);
                });
            });

            closeBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function (e) {
                if (e.target === modal) closeModal();
            });
        })();
    </script>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Next Events</h2>
            </div>
            <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"text-sm font-semibold text-orange-600 hover:text-orange-700\">See more</a>
        </div>

        <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
            ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["title" => "My Dog 2026", "date" => "Jan 2, 2026", "tag" => "Show"], ["title" => "Puppy Bowl", "date" => "Feb 16, 2026", "tag" => "Meetup"], ["title" => "Art With Dogs", "date" => "Mar 11, 2026", "tag" => "Workshop"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 254
            yield "                <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                    <div class=\"aspect-[16/9] bg-gray-100\"></div>
                    <div class=\"p-5\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                            <span class=\"rounded-full bg-gray-100 px-2 py-1 font-semibold text-gray-700\">";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tag", [], "any", false, false, false, 258), "html", null, true);
            yield "</span>
                            <span>";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 259), "html", null, true);
            yield "</span>
                        </div>
                        <h3 class=\"mt-3 font-extrabold text-gray-900\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 261), "html", null, true);
            yield "</h3>
                        <p class=\"mt-2 text-sm text-gray-600\">Join us for a fun dog-friendly event with activities, training tips, and more.</p>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        yield "        </div>
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
        return "pages/veterinarian.html.twig";
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
        return array (  452 => 266,  441 => 261,  436 => 259,  432 => 258,  426 => 254,  422 => 249,  415 => 245,  295 => 127,  286 => 123,  284 => 122,  273 => 118,  268 => 115,  261 => 112,  258 => 111,  248 => 109,  246 => 108,  240 => 105,  236 => 104,  232 => 103,  228 => 102,  223 => 100,  219 => 99,  214 => 96,  209 => 95,  185 => 74,  164 => 55,  155 => 52,  151 => 51,  147 => 49,  143 => 44,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Veterinarian - PawTech{% endblock %}

{% block body %}
    <section class=\"relative overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-200/70\"></div>
            <div class=\"absolute top-24 right-24 h-80 w-80 rounded-full bg-orange-400/80\"></div>
        </div>

        <div class=\"relative container mx-auto px-4 lg:px-8 py-12 lg:py-16 grid lg:grid-cols-2 gap-10 items-center\">
            <div>
                <p class=\"text-orange-600 font-semibold tracking-wide uppercase text-xs mb-3\">Veterinary</p>
                <h1 class=\"text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900\">
                    Where Dogs Come First
                </h1>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    Professional care, modern facilities, and a friendly team for your dog’s health and happiness.
                </p>
                <div class=\"mt-7\">
                    <a href=\"{{ path('app_contact') }}\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Learn More
                    </a>
                </div>
            </div>
            <div class=\"relative\">
                <div class=\"relative rounded-3xl bg-white shadow-xl p-6 border border-gray-100\">
                    <div class=\"aspect-[4/3] rounded-2xl bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center\">
                        <span class=\"text-gray-500 font-semibold\">Veterinary header image</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"text-center max-w-2xl mx-auto\">
            <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Services</p>
            <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Our Services</h2>
        </div>

        <div class=\"mt-10 grid md:grid-cols-3 gap-6\">
            {% for s in [
                {title:'Pet Checkup', desc:'Routine wellness checks to keep your dog healthy.'},
                {title:'Lab Tests', desc:'Fast diagnostics and accurate laboratory testing.'},
                {title:'Vaccination', desc:'Up-to-date vaccines for a safer, happier life.'}
            ] %}
                <div class=\"rounded-2xl bg-white border border-gray-100 shadow-sm p-6 hover:shadow-md transition\">
                    <div class=\"h-12 w-12 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center font-extrabold\">+</div>
                    <h3 class=\"mt-4 font-extrabold text-gray-900\">{{ s.title }}</h3>
                    <p class=\"mt-2 text-sm text-gray-600\">{{ s.desc }}</p>
                </div>
            {% endfor %}
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-14\">
        <div class=\"rounded-3xl bg-white border border-gray-100 shadow-sm overflow-hidden grid lg:grid-cols-2\">
            <div class=\"bg-gradient-to-br from-orange-100 via-gray-50 to-orange-200 flex items-center justify-center p-10\">
                <div class=\"w-full max-w-md rounded-3xl bg-white/70 backdrop-blur border border-white/60 p-8\">
                    <div class=\"h-48 rounded-2xl bg-white/60\"></div>
                    <div class=\"mt-4 h-4 w-2/3 rounded bg-white/60\"></div>
                    <div class=\"mt-2 h-4 w-1/2 rounded bg-white/60\"></div>
                </div>
            </div>
            <div class=\"p-8 lg:p-12\">
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Care</p>
                <h2 class=\"mt-2 text-3xl font-extrabold text-gray-900\">Medical Care for Dogs</h2>
                <p class=\"mt-4 text-gray-600 max-w-xl\">
                    From preventive care to treatment plans, we provide compassionate veterinary services tailored to your dog.
                </p>
                <div class=\"mt-7\">
                    <a href=\"{{ path('app_contact') }}\" class=\"inline-flex items-center rounded-full bg-gray-900 px-6 py-3 text-white font-semibold hover:bg-gray-800 transition\">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Team</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Our Expert Team</h2>
            </div>
            <div class=\"flex items-center gap-2\">
                <button class=\"h-10 w-10 rounded-full border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">‹</button>
                <button class=\"h-10 w-10 rounded-full border border-gray-200 bg-white hover:border-orange-400 hover:text-orange-600 transition\">›</button>
            </div>
        </div>

        <div class=\"mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6\">
            {% for vet in veterinarians|default([]) %}
                <button type=\"button\"
                        class=\"text-left rounded-[26px] bg-white border border-gray-200 shadow-[0_10px_30px_rgba(0,0,0,0.08)] overflow-hidden hover:shadow-[0_14px_34px_rgba(0,0,0,0.12)] transition\"
                        data-vet-card
                    data-vet-first-name=\"{{ vet.prenom }}\"
                    data-vet-last-name=\"{{ vet.nom }}\"
                        data-vet-role=\"Veterinerian\"
                        data-vet-email=\"{{ vet.email }}\"
                        data-vet-phone=\"{{ vet.telephone ? '+216 ' ~ vet.telephone : 'N/A' }}\"
                        data-vet-status=\"{{ vet.status|default('Unknown') }}\"
                        data-vet-image=\"{{ vet.userImage ? asset(vet.userImage) : '' }}\">
                    <div class=\"p-3\">
                        <div class=\"aspect-square rounded-[20px] bg-[#f7d8bb] border border-gray-200 shadow-inner flex items-center justify-center overflow-hidden\">
                            {% if vet.userImage %}
                                <img src=\"{{ asset(vet.userImage) }}\" alt=\"{{ vet.prenom }} {{ vet.nom }}\" class=\"h-full w-full object-cover\" />
                            {% else %}
                                <div class=\"h-28 w-28 rounded-2xl bg-[#f4cfae] flex items-center justify-center text-3xl font-bold text-white\">
                                    {{ vet.prenom|default('V')|first|upper }}{{ vet.nom|default('')|first|upper }}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"px-4 pb-4 text-center\">
                        <p class=\"font-semibold text-gray-900\">{{ vet.prenom }} {{ vet.nom }}</p>
                        <p class=\"text-sm text-orange-500 font-medium\">Veterinerian</p>
                    </div>
                </button>
            {% else %}
                <div class=\"col-span-full rounded-2xl bg-white border border-gray-100 p-6 text-center text-gray-500\">
                    No veterinarians found.
                </div>
            {% endfor %}
        </div>
    </section>

    <div id=\"vet-modal\" class=\"fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-4\">
        <div class=\"w-full max-w-3xl rounded-3xl bg-white shadow-2xl overflow-hidden\">
            <div class=\"flex items-center justify-between px-6 py-4 border-b\">
                <h3 class=\"text-lg font-semibold text-gray-900\">Veterinarian Details</h3>
                <button type=\"button\" id=\"vet-modal-close\" class=\"text-gray-500 hover:text-gray-700\">✕</button>
            </div>
            <div class=\"p-6 grid md:grid-cols-2 gap-6\">
                <div class=\"rounded-2xl border border-gray-200 p-4 flex flex-col items-center\">
                    <div class=\"h-64 w-full rounded-2xl bg-[#f7d8bb] border border-gray-200 shadow-inner flex items-center justify-center overflow-hidden\">
                        <img id=\"vet-modal-image\" src=\"\" alt=\"Veterinarian\" class=\"h-full w-full object-cover hidden\" />
                        <div id=\"vet-modal-fallback\" class=\"h-28 w-28 rounded-2xl bg-[#f4cfae] flex items-center justify-center text-3xl font-bold text-white\">V</div>
                    </div>
                    <p id=\"vet-modal-name\" class=\"mt-4 text-lg font-semibold text-gray-900\"></p>
                    <p id=\"vet-modal-role\" class=\"text-sm text-orange-500 font-medium\">Veterinerian</p>
                </div>
                <div class=\"rounded-2xl border border-gray-200 p-4\">
                    <div class=\"space-y-3 text-sm text-gray-700\">
                        <p><span class=\"font-semibold\">First Name:</span> <span id=\"vet-modal-first-name\"></span></p>
                        <p><span class=\"font-semibold\">Last Name:</span> <span id=\"vet-modal-last-name\"></span></p>
                        <p><span class=\"font-semibold\">Email:</span> <span id=\"vet-modal-email\"></span></p>
                        <p><span class=\"font-semibold\">Telephone:</span> <span id=\"vet-modal-phone\"></span></p>
                        <p><span class=\"font-semibold\">Status:</span> <span id=\"vet-modal-status\" class=\"font-semibold\"></span></p>
                    </div>
                    <div class=\"mt-6 flex items-center gap-3\">
                        <button type=\"button\" class=\"px-4 py-2 rounded-lg bg-red-500 text-white text-sm font-semibold hover:bg-red-600\" id=\"vet-modal-cancel\">Cancel</button>
                        <button type=\"button\" class=\"px-4 py-2 rounded-lg bg-emerald-500 text-white text-sm font-semibold hover:bg-emerald-600\" id=\"vet-modal-appointment\">Make an appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var modal = document.getElementById('vet-modal');
            var closeBtn = document.getElementById('vet-modal-close');
            var cards = document.querySelectorAll('[data-vet-card]');
            var modalImage = document.getElementById('vet-modal-image');
            var modalFallback = document.getElementById('vet-modal-fallback');
            var modalName = document.getElementById('vet-modal-name');
            var modalRole = document.getElementById('vet-modal-role');
            var modalFirstName = document.getElementById('vet-modal-first-name');
            var modalLastName = document.getElementById('vet-modal-last-name');
            var modalEmail = document.getElementById('vet-modal-email');
            var modalPhone = document.getElementById('vet-modal-phone');
            var modalStatus = document.getElementById('vet-modal-status');

            if (!modal || !closeBtn) return;

            function openModal(card) {
                var firstName = card.getAttribute('data-vet-first-name') || '';
                var lastName = card.getAttribute('data-vet-last-name') || '';
                var name = (firstName + ' ' + lastName).trim();
                var role = card.getAttribute('data-vet-role') || 'Veterinerian';
                var email = card.getAttribute('data-vet-email') || 'N/A';
                var phone = card.getAttribute('data-vet-phone') || 'N/A';
                var status = card.getAttribute('data-vet-status') || 'Unknown';
                var image = card.getAttribute('data-vet-image') || '';

                modalName.textContent = name;
                modalRole.textContent = role;
                modalFirstName.textContent = firstName || 'N/A';
                modalLastName.textContent = lastName || 'N/A';
                modalEmail.textContent = email;
                modalPhone.textContent = phone;
                modalStatus.textContent = status;

                var statusValue = status.toLowerCase();
                modalStatus.classList.remove('text-emerald-600', 'text-red-600', 'text-gray-500');
                if (statusValue === 'actif' || statusValue === 'active') {
                    modalStatus.classList.add('text-emerald-600');
                } else if (statusValue === 'inactif' || statusValue === 'inactive') {
                    modalStatus.classList.add('text-red-600');
                } else {
                    modalStatus.classList.add('text-gray-500');
                }

                if (image) {
                    modalImage.src = image;
                    modalImage.classList.remove('hidden');
                    modalFallback.classList.add('hidden');
                } else {
                    modalImage.classList.add('hidden');
                    modalFallback.classList.remove('hidden');
                    modalFallback.textContent = name ? name.charAt(0).toUpperCase() : 'V';
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }

            cards.forEach(function (card) {
                card.addEventListener('click', function () {
                    openModal(card);
                });
            });

            closeBtn.addEventListener('click', closeModal);
            modal.addEventListener('click', function (e) {
                if (e.target === modal) closeModal();
            });
        })();
    </script>

    <section class=\"container mx-auto px-4 lg:px-8 py-12\">
        <div class=\"flex items-end justify-between gap-6\">
            <div>
                <p class=\"text-orange-600 font-semibold text-xs uppercase tracking-wide\">Events</p>
                <h2 class=\"text-2xl lg:text-3xl font-extrabold text-gray-900 mt-2\">Next Events</h2>
            </div>
            <a href=\"{{ path('app_events') }}\" class=\"text-sm font-semibold text-orange-600 hover:text-orange-700\">See more</a>
        </div>

        <div class=\"mt-8 grid lg:grid-cols-3 gap-6\">
            {% for event in [
                {title:'My Dog 2026', date:'Jan 2, 2026', tag:'Show'},
                {title:'Puppy Bowl', date:'Feb 16, 2026', tag:'Meetup'},
                {title:'Art With Dogs', date:'Mar 11, 2026', tag:'Workshop'}
            ] %}
                <article class=\"rounded-2xl bg-white border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition\">
                    <div class=\"aspect-[16/9] bg-gray-100\"></div>
                    <div class=\"p-5\">
                        <div class=\"flex items-center gap-2 text-xs text-gray-500\">
                            <span class=\"rounded-full bg-gray-100 px-2 py-1 font-semibold text-gray-700\">{{ event.tag }}</span>
                            <span>{{ event.date }}</span>
                        </div>
                        <h3 class=\"mt-3 font-extrabold text-gray-900\">{{ event.title }}</h3>
                        <p class=\"mt-2 text-sm text-gray-600\">Join us for a fun dog-friendly event with activities, training tips, and more.</p>
                    </div>
                </article>
            {% endfor %}
        </div>
    </section>
{% endblock %}

", "pages/veterinarian.html.twig", "C:\\Users\\nesfe\\OneDrive\\Documents\\GitHub\\PawTech\\templates\\pages\\veterinarian.html.twig");
    }
}
