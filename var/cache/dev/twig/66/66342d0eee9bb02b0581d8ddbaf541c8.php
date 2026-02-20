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

/* consultation/index.html.twig */
class __TwigTemplate_557dff19267f4851f7f422e8508995c1 extends Template
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
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $this->parent = $this->load("layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        yield "<div class=\"space-y-4\">
    <!-- Vérifiez que la variable existe -->
    ";
        // line 6
        if (array_key_exists("consultations", $context)) {
            // line 7
            yield "    
    <!-- Toolbar -->
    <div class=\"flex flex-wrap items-center gap-4 mb-4\">
        <div class=\"relative flex-1 min-w-[200px]\">
            <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/>
                </svg>
            </span>
            <input 
                type=\"search\" 
                id=\"search\" 
                placeholder=\"Search by type or user\"
                class=\"w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
            >
        </div>
        
        <div class=\"flex gap-2\">
            <!-- BOUTON FILTRER - Tri par date -->
            <button 
                type=\"button\" 
                id=\"sortByDate\" 
                class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 font-medium\"
            >
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/>
                </svg>
                Sort by Date
            </button>
            
            <!-- BOUTON : Consult Follow-Up -->
            <a href=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivi_index");
            yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"/>
                </svg>
                Consult Follow-Up
            </a>
            
            <!-- BOUTON : Add New Consultation -->
            <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_new");
            yield "\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
                </svg>
                Add New Consultation
            </a>
        </div>
    </div>

    <!-- Search status message -->
    <div id=\"searchStatus\" class=\"hidden\"></div>

    <!-- Messages flash -->
    <div id=\"flashMessages\"></div>

    <!-- Table -->
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full text-sm\" id=\"t\">
                <thead class=\"bg-white\">
                    <tr class=\"text-left text-gray-500\">
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ID</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Date</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Type</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">User</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Diagnostic</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Actions</th>
                    </tr>
                </thead>
                <!-- Tbody principal pour toutes les consultations -->
                <tbody id=\"all\" class=\"divide-y divide-gray-100\">
                    ";
            // line 77
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 77, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 78, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
                    // line 79
                    yield "                        <tr id=\"consultation-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 79), "html", null, true);
                    yield "\" class=\"text-gray-700 hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\">C-";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%03d", CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 80)), "html", null, true);
                    yield "</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "date", [], "any", false, false, false, 81), "Y-m-d H:i"), "html", null, true);
                    yield "</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <span class=\"px-2 py-1 text-xs font-medium rounded-full 
                                    ";
                    // line 84
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "type", [], "any", false, false, false, 84) == "Urgent")) {
                        yield "bg-red-100 text-red-800
                                    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 85
$context["consultation"], "type", [], "any", false, false, false, 85) == "Alert")) {
                        yield "bg-yellow-100 text-yellow-800
                                    ";
                    } else {
                        // line 86
                        yield "bg-green-100 text-green-800";
                    }
                    yield "\">
                                    ";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "type", [], "any", false, false, false, 87), "html", null, true);
                    yield "
                                </span>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                ";
                    // line 91
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "user", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 92
                        yield "                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "user", [], "any", false, false, false, 92), "prenom", [], "any", false, false, false, 92), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "user", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
                        yield "
                                ";
                    } else {
                        // line 94
                        yield "                                    N/A
                                ";
                    }
                    // line 96
                    yield "                            </td>
                            <td class=\"px-6 py-4\">
                                ";
                    // line 98
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "diagnostic", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 99
                        yield "                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "diagnostic", [], "any", false, false, false, 99), 0, 50), "html", null, true);
                        yield "...
                                ";
                    } else {
                        // line 101
                        yield "                                    No diagnostic
                                ";
                    }
                    // line 103
                    yield "                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <div class=\"flex space-x-2\">
                                    <a href=\"";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                    yield "\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"text-red-600 hover:text-red-900 delete-consultation\" 
                                        data-id=\"";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 110), "html", null, true);
                    yield "\"
                                        data-type=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "type", [], "any", false, false, false, 111), "html", null, true);
                    yield "\"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['consultation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "                    ";
            } else {
                // line 120
                yield "                    <tr id=\"noResultsRow\">
                        <td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">
                            No consultations found.
                        </td>
                    </tr>
                    ";
            }
            // line 126
            yield "                </tbody>
                <!-- Tbody pour les résultats de recherche (vide au départ) -->
                <tbody id=\"searchtab\" class=\"divide-y divide-gray-100 hidden\"></tbody>
            </table>
        </div>
    </div>
    
    ";
        } else {
            // line 134
            yield "    <!-- Message if variable is not defined -->
    <div class=\"text-center py-10\">
        <div class=\"text-gray-400 mb-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.732 16.5c-.77.833.192 2.5 1.732 2.5z\" />
            </svg>
        </div>
        <h3 class=\"text-lg font-medium text-gray-700 mb-2\">Data Error</h3>
        <p class=\"text-gray-500 mb-6\">Consultation data is not available</p>
    </div>
    ";
        }
        // line 145
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        // line 149
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\$(document).ready(function() {
    // Fonction pour afficher un message flash
    function showFlashMessage(message, type = 'success') {
        const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 
                        type === 'error' ? 'bg-red-50 border-red-200 text-red-800' : 
                        'bg-blue-50 border-blue-200 text-blue-800';
        
        const flashHtml = `
            <div class=\"\${bgColor} border px-4 py-3 rounded-lg mb-4 flex justify-between items-center\">
                <div>
                    <p class=\"font-medium\">\${message}</p>
                </div>
                <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\" onclick=\"this.parentElement.remove()\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>
            </div>
        `;
        
        \$('#flashMessages').html(flashHtml);
        
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            \$('#flashMessages').empty();
        }, 5000);
    }

    // Suppression d'une consultation
    \$(document).on('click', '.delete-consultation', function() {
        const consultationId = \$(this).data('id');
        const consultationType = \$(this).data('type');
        const row = \$(`#consultation-\${consultationId}`);
        
        // Récupérer le token CSRF du meta tag
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]')?.getAttribute('content') || '';
        
        if (!csrfToken) {
            showFlashMessage('CSRF token missing. Please refresh the page.', 'error');
            return;
        }

        // Désactiver le bouton pendant la suppression
        const deleteBtn = \$(this);
        deleteBtn.prop('disabled', true).text('Deleting...');

        \$.ajax({
            url: `/consultation/delete/\${consultationId}`,
            type: 'DELETE',
            headers: {
                'X-CSRF-Token': csrfToken
            },
            dataType: 'json',
            success: function(response) {
                console.log('Delete response:', response);
                
                if (response.success) {
                    // Supprimer la ligne du tableau
                    row.fadeOut(300, function() {
                        \$(this).remove();
                        
                        // Vérifier si le tableau est vide
                        const remainingRows = \$('#all tr').length;
                        if (remainingRows === 1) { // Seulement la ligne \"no results\"
                            \$('#noResultsRow').show();
                        }
                        
                        // Afficher le message de succès
                        showFlashMessage(response.message, 'success');
                    });
                } else {
                    showFlashMessage(response.message || 'Error deleting consultation', 'error');
                    deleteBtn.prop('disabled', false).text('Delete');
                }
            },
            error: function(xhr, status, error) {
                console.error('Delete error:', xhr.responseText, status, error);
                showFlashMessage('Error deleting consultation. Please try again.', 'error');
                deleteBtn.prop('disabled', false).text('Delete');
            }
        });
    });

    // Recherche instantanée
    \$(\"#search\").keyup(function(e) {
        var value = \$(this).val();
        
        if (value.trim() === '') {
            \$('#all').show();
            \$('#searchtab').empty().hide();
            \$('#searchStatus').empty().hide();
            return;
        }
        
        // Afficher \"Loading...\" pendant la recherche
        \$('#searchtab').html('<tr><td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">Searching...</td></tr>').show();
        \$('#all').hide();
        
        // Requête Ajax
        \$.ajax({
            url: \"/consultation/search\",
            type: 'GET',
            data: { 'searchValue': value },
            dataType: 'json',
            success: function(retour) {
                if (retour && retour.length > 0) {
                    \$('#searchtab').empty();
                    
                    \$.each(retour, function(i, obj) {
                        // Formater l'ID
                        var formattedId = 'C-' + obj.id.toString().padStart(3, '0');
                        
                        // Déterminer les classes CSS pour le type
                        var typeClass, typeText;
                        if (obj.type === 'Urgent') {
                            typeClass = 'bg-red-100 text-red-800';
                            typeText = obj.type;
                        } else if (obj.type === 'Alert') {
                            typeClass = 'bg-yellow-100 text-yellow-800';
                            typeText = obj.type;
                        } else {
                            typeClass = 'bg-green-100 text-green-800';
                            typeText = obj.type || 'Normal';
                        }
                        
                        // Nom de l'utilisateur
                        var userName = '';
                        if (obj.user_lastName || obj.user_firstName) {
                            userName = (obj.user_firstName || '') + ' ' + (obj.user_lastName || '');
                        } else {
                            userName = 'N/A';
                        }
                        
                        // Diagnostic tronqué
                        var diagnostic = obj.diagnostic || 'No diagnostic';
                        if (diagnostic.length > 50) {
                            diagnostic = diagnostic.substring(0, 50) + '...';
                        }
                        
                        // Construction de la ligne
                        var row = '<tr id=\"consultation-' + obj.id + '\" class=\"text-gray-700 hover:bg-gray-50\">' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + formattedId + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + obj.date + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<span class=\"px-2 py-1 text-xs font-medium rounded-full ' + typeClass + '\">' + 
                                    typeText + 
                                '</span>' +
                            '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + userName.trim() + '</td>' +
                            '<td class=\"px-6 py-4\">' + diagnostic + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<div class=\"flex space-x-2\">' +
                                    '<a href=\"/consultation/' + obj.id + '/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>' +
                                    '<button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-consultation\" data-id=\"' + obj.id + '\" data-type=\"' + (obj.type || 'Normal') + '\">Delete</button>' +
                                '</div>' +
                            '</td>' +
                        '</tr>';
                        
                        \$('#searchtab').append(row);
                    });
                    
                    // Mettre à jour le statut de recherche
                    \$('#searchStatus').html(
                        '<div class=\"bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">' + retour.length + ' consultation(s) found for \"' + value + '\"</p>' +
                            '<p class=\"text-sm mt-1\">Results are displayed below.</p>' +
                        '</div>'
                    ).show();
                    
                } else {
                    \$('#searchtab').html(
                        '<tr id=\"noResultsRow\">' +
                            '<td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">' +
                                'No consultations found for \"' + value + '\"' +
                            '</td>' +
                        '</tr>'
                    );
                    
                    // Mettre à jour le statut de recherche
                    \$('#searchStatus').html(
                        '<div class=\"bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">No results found for \"' + value + '\"</p>' +
                            '<p class=\"text-sm mt-1\">Try searching with different terms.</p>' +
                        '</div>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"6\" class=\"px-6 py-8 text-center text-red-500\">' +
                        '<svg class=\"h-8 w-8 mx-auto mb-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">' +
                            '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />' +
                        '</svg>' +
                        '<p>Error loading data. Please try again.</p>' +
                    '</td></tr>'
                );
                
                \$('#searchStatus').html(
                    '<div class=\"bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-4\">' +
                        '<p class=\"font-medium\">Error fetching data</p>' +
                        '<p class=\"text-sm mt-1\">Please check your connection and try again.</p>' +
                    '</div>'
                ).show();
            }
        });
    });
    
    // Bouton pour trier par date
    \$(\"#sortByDate\").click(function() {
        // Sauvegarder le texte original du bouton
        var originalText = \$(this).html();
        
        // Afficher l'état de chargement
        \$(this).html(
            '<div class=\"inline-block animate-spin rounded-full h-5 w-5 border-b-2 border-gray-700\"></div> Sorting...'
        ).prop('disabled', true);
        
        // Requête Ajax pour trier par date
        \$.ajax({
            url: \"/consultation/sort-by-date\",
            type: 'GET',
            dataType: 'json',
            success: function(retour) {
                if (retour && retour.length > 0) {
                    // Afficher dans searchtab et masquer all
                    \$('#searchtab').empty().show();
                    \$('#all').hide();
                    
                    \$.each(retour, function(i, obj) {
                        // Même logique que pour la recherche
                        var formattedId = 'C-' + obj.id.toString().padStart(3, '0');
                        
                        var typeClass, typeText;
                        if (obj.type === 'Urgent') {
                            typeClass = 'bg-red-100 text-red-800';
                            typeText = obj.type;
                        } else if (obj.type === 'Alert') {
                            typeClass = 'bg-yellow-100 text-yellow-800';
                            typeText = obj.type;
                        } else {
                            typeClass = 'bg-green-100 text-green-800';
                            typeText = obj.type || 'Normal';
                        }
                        
                        var userName = '';
                        if (obj.user_lastName || obj.user_firstName) {
                            userName = (obj.user_firstName || '') + ' ' + (obj.user_lastName || '');
                        } else {
                            userName = 'N/A';
                        }
                        
                        var diagnostic = obj.diagnostic || 'No diagnostic';
                        if (diagnostic.length > 50) {
                            diagnostic = diagnostic.substring(0, 50) + '...';
                        }
                        
                        var row = '<tr id=\"consultation-' + obj.id + '\" class=\"text-gray-700 hover:bg-gray-50\">' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + formattedId + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + obj.date + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<span class=\"px-2 py-1 text-xs font-medium rounded-full ' + typeClass + '\">' + 
                                    typeText + 
                                '</span>' +
                            '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + userName.trim() + '</td>' +
                            '<td class=\"px-6 py-4\">' + diagnostic + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<div class=\"flex space-x-2\">' +
                                    '<a href=\"/consultation/' + obj.id + '/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>' +
                                    '<button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-consultation\" data-id=\"' + obj.id + '\" data-type=\"' + (obj.type || 'Normal') + '\">Delete</button>' +
                                '</div>' +
                            '</td>' +
                        '</tr>';
                        
                        \$('#searchtab').append(row);
                    });
                    
                    // Mettre à jour le statut
                    \$('#searchStatus').html(
                        '<div class=\"bg-blue-50 border border-blue-200 text-blue-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">' + retour.length + ' consultation(s) sorted by date (newest first)</p>' +
                            '<p class=\"text-sm mt-1\">Results are sorted by date in descending order.</p>' +
                        '</div>'
                    ).show();
                    
                } else {
                    \$('#searchtab').html(
                        '<tr id=\"noResultsRow\">' +
                            '<td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">' +
                                'No consultations to sort' +
                            '</td>' +
                        '</tr>'
                    ).show();
                    \$('#all').hide();
                }
                
                // Restaurer le bouton
                \$('#sortByDate').html(originalText).prop('disabled', false);
            },
            error: function() {
                // En cas d'erreur
                \$('#searchStatus').html(
                    '<div class=\"bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-4\">' +
                        '<p class=\"font-medium\">Error sorting data</p>' +
                        '<p class=\"text-sm mt-1\">Please try again later.</p>' +
                    '</div>'
                ).show();
                
                // Restaurer le bouton
                \$('#sortByDate').html(originalText).prop('disabled', false);
            }
        });
    });
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
        return "consultation/index.html.twig";
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
        return array (  323 => 149,  310 => 148,  298 => 145,  285 => 134,  275 => 126,  267 => 120,  264 => 119,  250 => 111,  246 => 110,  239 => 106,  234 => 103,  230 => 101,  224 => 99,  222 => 98,  218 => 96,  214 => 94,  206 => 92,  204 => 91,  197 => 87,  192 => 86,  187 => 85,  183 => 84,  177 => 81,  173 => 80,  168 => 79,  163 => 78,  161 => 77,  127 => 46,  116 => 38,  83 => 7,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block main %}
<div class=\"space-y-4\">
    <!-- Vérifiez que la variable existe -->
    {% if consultations is defined %}
    
    <!-- Toolbar -->
    <div class=\"flex flex-wrap items-center gap-4 mb-4\">
        <div class=\"relative flex-1 min-w-[200px]\">
            <span class=\"absolute left-3 top-1/2 -translate-y-1/2 text-gray-400\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z\"/>
                </svg>
            </span>
            <input 
                type=\"search\" 
                id=\"search\" 
                placeholder=\"Search by type or user\"
                class=\"w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg bg-white focus:ring-2 focus:ring-paw-orange focus:border-paw-orange outline-none\"
            >
        </div>
        
        <div class=\"flex gap-2\">
            <!-- BOUTON FILTRER - Tri par date -->
            <button 
                type=\"button\" 
                id=\"sortByDate\" 
                class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 font-medium\"
            >
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z\"/>
                </svg>
                Sort by Date
            </button>
            
            <!-- BOUTON : Consult Follow-Up -->
            <a href=\"{{ path('app_suivi_index') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z\"/>
                </svg>
                Consult Follow-Up
            </a>
            
            <!-- BOUTON : Add New Consultation -->
            <a href=\"{{ path('app_consultation_new') }}\" class=\"inline-flex items-center gap-2 px-4 py-2 bg-paw-orange text-white rounded-lg hover:bg-paw-orange-hover font-medium\">
                <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\"/>
                </svg>
                Add New Consultation
            </a>
        </div>
    </div>

    <!-- Search status message -->
    <div id=\"searchStatus\" class=\"hidden\"></div>

    <!-- Messages flash -->
    <div id=\"flashMessages\"></div>

    <!-- Table -->
    <div class=\"bg-white rounded-xl border border-gray-200 overflow-hidden\">
        <div class=\"overflow-x-auto\">
            <table class=\"min-w-full text-sm\" id=\"t\">
                <thead class=\"bg-white\">
                    <tr class=\"text-left text-gray-500\">
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">ID</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Date</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Type</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">User</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Diagnostic</th>
                        <th class=\"px-6 py-4 font-medium whitespace-nowrap\">Actions</th>
                    </tr>
                </thead>
                <!-- Tbody principal pour toutes les consultations -->
                <tbody id=\"all\" class=\"divide-y divide-gray-100\">
                    {% if consultations is not empty %}
                        {% for consultation in consultations %}
                        <tr id=\"consultation-{{ consultation.id }}\" class=\"text-gray-700 hover:bg-gray-50\">
                            <td class=\"px-6 py-4 whitespace-nowrap\">C-{{ \"%03d\"|format(consultation.id) }}</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">{{ consultation.date|date('Y-m-d H:i') }}</td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <span class=\"px-2 py-1 text-xs font-medium rounded-full 
                                    {% if consultation.type == 'Urgent' %}bg-red-100 text-red-800
                                    {% elseif consultation.type == 'Alert' %}bg-yellow-100 text-yellow-800
                                    {% else %}bg-green-100 text-green-800{% endif %}\">
                                    {{ consultation.type }}
                                </span>
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                {% if consultation.user %}
                                    {{ consultation.user.prenom }} {{ consultation.user.nom }}
                                {% else %}
                                    N/A
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4\">
                                {% if consultation.diagnostic %}
                                    {{ consultation.diagnostic|slice(0, 50) }}...
                                {% else %}
                                    No diagnostic
                                {% endif %}
                            </td>
                            <td class=\"px-6 py-4 whitespace-nowrap\">
                                <div class=\"flex space-x-2\">
                                    <a href=\"{{ path('app_consultation_edit', {'id': consultation.id}) }}\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"text-red-600 hover:text-red-900 delete-consultation\" 
                                        data-id=\"{{ consultation.id }}\"
                                        data-type=\"{{ consultation.type }}\"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                    {% else %}
                    <tr id=\"noResultsRow\">
                        <td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">
                            No consultations found.
                        </td>
                    </tr>
                    {% endif %}
                </tbody>
                <!-- Tbody pour les résultats de recherche (vide au départ) -->
                <tbody id=\"searchtab\" class=\"divide-y divide-gray-100 hidden\"></tbody>
            </table>
        </div>
    </div>
    
    {% else %}
    <!-- Message if variable is not defined -->
    <div class=\"text-center py-10\">
        <div class=\"text-gray-400 mb-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-16 w-16 mx-auto\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.998-.833-2.732 0L4.732 16.5c-.77.833.192 2.5 1.732 2.5z\" />
            </svg>
        </div>
        <h3 class=\"text-lg font-medium text-gray-700 mb-2\">Data Error</h3>
        <p class=\"text-gray-500 mb-6\">Consultation data is not available</p>
    </div>
    {% endif %}
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
\$(document).ready(function() {
    // Fonction pour afficher un message flash
    function showFlashMessage(message, type = 'success') {
        const bgColor = type === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 
                        type === 'error' ? 'bg-red-50 border-red-200 text-red-800' : 
                        'bg-blue-50 border-blue-200 text-blue-800';
        
        const flashHtml = `
            <div class=\"\${bgColor} border px-4 py-3 rounded-lg mb-4 flex justify-between items-center\">
                <div>
                    <p class=\"font-medium\">\${message}</p>
                </div>
                <button type=\"button\" class=\"text-gray-400 hover:text-gray-600\" onclick=\"this.parentElement.remove()\">
                    <svg class=\"w-5 h-5\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>
            </div>
        `;
        
        \$('#flashMessages').html(flashHtml);
        
        // Supprimer automatiquement après 5 secondes
        setTimeout(() => {
            \$('#flashMessages').empty();
        }, 5000);
    }

    // Suppression d'une consultation
    \$(document).on('click', '.delete-consultation', function() {
        const consultationId = \$(this).data('id');
        const consultationType = \$(this).data('type');
        const row = \$(`#consultation-\${consultationId}`);
        
        // Récupérer le token CSRF du meta tag
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]')?.getAttribute('content') || '';
        
        if (!csrfToken) {
            showFlashMessage('CSRF token missing. Please refresh the page.', 'error');
            return;
        }

        // Désactiver le bouton pendant la suppression
        const deleteBtn = \$(this);
        deleteBtn.prop('disabled', true).text('Deleting...');

        \$.ajax({
            url: `/consultation/delete/\${consultationId}`,
            type: 'DELETE',
            headers: {
                'X-CSRF-Token': csrfToken
            },
            dataType: 'json',
            success: function(response) {
                console.log('Delete response:', response);
                
                if (response.success) {
                    // Supprimer la ligne du tableau
                    row.fadeOut(300, function() {
                        \$(this).remove();
                        
                        // Vérifier si le tableau est vide
                        const remainingRows = \$('#all tr').length;
                        if (remainingRows === 1) { // Seulement la ligne \"no results\"
                            \$('#noResultsRow').show();
                        }
                        
                        // Afficher le message de succès
                        showFlashMessage(response.message, 'success');
                    });
                } else {
                    showFlashMessage(response.message || 'Error deleting consultation', 'error');
                    deleteBtn.prop('disabled', false).text('Delete');
                }
            },
            error: function(xhr, status, error) {
                console.error('Delete error:', xhr.responseText, status, error);
                showFlashMessage('Error deleting consultation. Please try again.', 'error');
                deleteBtn.prop('disabled', false).text('Delete');
            }
        });
    });

    // Recherche instantanée
    \$(\"#search\").keyup(function(e) {
        var value = \$(this).val();
        
        if (value.trim() === '') {
            \$('#all').show();
            \$('#searchtab').empty().hide();
            \$('#searchStatus').empty().hide();
            return;
        }
        
        // Afficher \"Loading...\" pendant la recherche
        \$('#searchtab').html('<tr><td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">Searching...</td></tr>').show();
        \$('#all').hide();
        
        // Requête Ajax
        \$.ajax({
            url: \"/consultation/search\",
            type: 'GET',
            data: { 'searchValue': value },
            dataType: 'json',
            success: function(retour) {
                if (retour && retour.length > 0) {
                    \$('#searchtab').empty();
                    
                    \$.each(retour, function(i, obj) {
                        // Formater l'ID
                        var formattedId = 'C-' + obj.id.toString().padStart(3, '0');
                        
                        // Déterminer les classes CSS pour le type
                        var typeClass, typeText;
                        if (obj.type === 'Urgent') {
                            typeClass = 'bg-red-100 text-red-800';
                            typeText = obj.type;
                        } else if (obj.type === 'Alert') {
                            typeClass = 'bg-yellow-100 text-yellow-800';
                            typeText = obj.type;
                        } else {
                            typeClass = 'bg-green-100 text-green-800';
                            typeText = obj.type || 'Normal';
                        }
                        
                        // Nom de l'utilisateur
                        var userName = '';
                        if (obj.user_lastName || obj.user_firstName) {
                            userName = (obj.user_firstName || '') + ' ' + (obj.user_lastName || '');
                        } else {
                            userName = 'N/A';
                        }
                        
                        // Diagnostic tronqué
                        var diagnostic = obj.diagnostic || 'No diagnostic';
                        if (diagnostic.length > 50) {
                            diagnostic = diagnostic.substring(0, 50) + '...';
                        }
                        
                        // Construction de la ligne
                        var row = '<tr id=\"consultation-' + obj.id + '\" class=\"text-gray-700 hover:bg-gray-50\">' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + formattedId + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + obj.date + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<span class=\"px-2 py-1 text-xs font-medium rounded-full ' + typeClass + '\">' + 
                                    typeText + 
                                '</span>' +
                            '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + userName.trim() + '</td>' +
                            '<td class=\"px-6 py-4\">' + diagnostic + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<div class=\"flex space-x-2\">' +
                                    '<a href=\"/consultation/' + obj.id + '/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>' +
                                    '<button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-consultation\" data-id=\"' + obj.id + '\" data-type=\"' + (obj.type || 'Normal') + '\">Delete</button>' +
                                '</div>' +
                            '</td>' +
                        '</tr>';
                        
                        \$('#searchtab').append(row);
                    });
                    
                    // Mettre à jour le statut de recherche
                    \$('#searchStatus').html(
                        '<div class=\"bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">' + retour.length + ' consultation(s) found for \"' + value + '\"</p>' +
                            '<p class=\"text-sm mt-1\">Results are displayed below.</p>' +
                        '</div>'
                    ).show();
                    
                } else {
                    \$('#searchtab').html(
                        '<tr id=\"noResultsRow\">' +
                            '<td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">' +
                                'No consultations found for \"' + value + '\"' +
                            '</td>' +
                        '</tr>'
                    );
                    
                    // Mettre à jour le statut de recherche
                    \$('#searchStatus').html(
                        '<div class=\"bg-yellow-50 border border-yellow-200 text-yellow-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">No results found for \"' + value + '\"</p>' +
                            '<p class=\"text-sm mt-1\">Try searching with different terms.</p>' +
                        '</div>'
                    ).show();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
                
                \$('#searchtab').html(
                    '<tr><td colspan=\"6\" class=\"px-6 py-8 text-center text-red-500\">' +
                        '<svg class=\"h-8 w-8 mx-auto mb-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">' +
                            '<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\" />' +
                        '</svg>' +
                        '<p>Error loading data. Please try again.</p>' +
                    '</td></tr>'
                );
                
                \$('#searchStatus').html(
                    '<div class=\"bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-4\">' +
                        '<p class=\"font-medium\">Error fetching data</p>' +
                        '<p class=\"text-sm mt-1\">Please check your connection and try again.</p>' +
                    '</div>'
                ).show();
            }
        });
    });
    
    // Bouton pour trier par date
    \$(\"#sortByDate\").click(function() {
        // Sauvegarder le texte original du bouton
        var originalText = \$(this).html();
        
        // Afficher l'état de chargement
        \$(this).html(
            '<div class=\"inline-block animate-spin rounded-full h-5 w-5 border-b-2 border-gray-700\"></div> Sorting...'
        ).prop('disabled', true);
        
        // Requête Ajax pour trier par date
        \$.ajax({
            url: \"/consultation/sort-by-date\",
            type: 'GET',
            dataType: 'json',
            success: function(retour) {
                if (retour && retour.length > 0) {
                    // Afficher dans searchtab et masquer all
                    \$('#searchtab').empty().show();
                    \$('#all').hide();
                    
                    \$.each(retour, function(i, obj) {
                        // Même logique que pour la recherche
                        var formattedId = 'C-' + obj.id.toString().padStart(3, '0');
                        
                        var typeClass, typeText;
                        if (obj.type === 'Urgent') {
                            typeClass = 'bg-red-100 text-red-800';
                            typeText = obj.type;
                        } else if (obj.type === 'Alert') {
                            typeClass = 'bg-yellow-100 text-yellow-800';
                            typeText = obj.type;
                        } else {
                            typeClass = 'bg-green-100 text-green-800';
                            typeText = obj.type || 'Normal';
                        }
                        
                        var userName = '';
                        if (obj.user_lastName || obj.user_firstName) {
                            userName = (obj.user_firstName || '') + ' ' + (obj.user_lastName || '');
                        } else {
                            userName = 'N/A';
                        }
                        
                        var diagnostic = obj.diagnostic || 'No diagnostic';
                        if (diagnostic.length > 50) {
                            diagnostic = diagnostic.substring(0, 50) + '...';
                        }
                        
                        var row = '<tr id=\"consultation-' + obj.id + '\" class=\"text-gray-700 hover:bg-gray-50\">' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + formattedId + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + obj.date + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<span class=\"px-2 py-1 text-xs font-medium rounded-full ' + typeClass + '\">' + 
                                    typeText + 
                                '</span>' +
                            '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' + userName.trim() + '</td>' +
                            '<td class=\"px-6 py-4\">' + diagnostic + '</td>' +
                            '<td class=\"px-6 py-4 whitespace-nowrap\">' +
                                '<div class=\"flex space-x-2\">' +
                                    '<a href=\"/consultation/' + obj.id + '/edit\" class=\"text-blue-600 hover:text-blue-900\">Edit</a>' +
                                    '<button type=\"button\" class=\"text-red-600 hover:text-red-900 delete-consultation\" data-id=\"' + obj.id + '\" data-type=\"' + (obj.type || 'Normal') + '\">Delete</button>' +
                                '</div>' +
                            '</td>' +
                        '</tr>';
                        
                        \$('#searchtab').append(row);
                    });
                    
                    // Mettre à jour le statut
                    \$('#searchStatus').html(
                        '<div class=\"bg-blue-50 border border-blue-200 text-blue-800 px-4 py-3 rounded-lg mb-4\">' +
                            '<p class=\"font-medium\">' + retour.length + ' consultation(s) sorted by date (newest first)</p>' +
                            '<p class=\"text-sm mt-1\">Results are sorted by date in descending order.</p>' +
                        '</div>'
                    ).show();
                    
                } else {
                    \$('#searchtab').html(
                        '<tr id=\"noResultsRow\">' +
                            '<td colspan=\"6\" class=\"px-6 py-8 text-center text-gray-500\">' +
                                'No consultations to sort' +
                            '</td>' +
                        '</tr>'
                    ).show();
                    \$('#all').hide();
                }
                
                // Restaurer le bouton
                \$('#sortByDate').html(originalText).prop('disabled', false);
            },
            error: function() {
                // En cas d'erreur
                \$('#searchStatus').html(
                    '<div class=\"bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-4\">' +
                        '<p class=\"font-medium\">Error sorting data</p>' +
                        '<p class=\"text-sm mt-1\">Please try again later.</p>' +
                    '</div>'
                ).show();
                
                // Restaurer le bouton
                \$('#sortByDate').html(originalText).prop('disabled', false);
            }
        });
    });
});
</script>
{% endblock %}", "consultation/index.html.twig", "C:\\Users\\nourw\\Documents\\PI-WEB-final\\PI-WEB-final\\templates\\consultation\\index.html.twig");
    }
}
