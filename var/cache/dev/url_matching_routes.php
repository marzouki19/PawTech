<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultation/search' => [[['_route' => 'app_consultation_search', '_controller' => 'App\\Controller\\ConsultationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/consultation/sort-by-date' => [[['_route' => 'app_consultation_sort_by_date', '_controller' => 'App\\Controller\\ConsultationController::sortByDate'], null, ['GET' => 0], null, false, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation/suivi' => [[['_route' => 'app_consultation_suivi', '_controller' => 'App\\Controller\\ConsultationController::suivi'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::home'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_home_alias', '_controller' => 'App\\Controller\\PageController::home'], null, ['GET' => 0], null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\PageController::signin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\PageController::account'], null, ['GET' => 0], null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\PageController::settings'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\PageController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/my-pets' => [[['_route' => 'app_my_pets', '_controller' => 'App\\Controller\\PageController::myPets'], null, ['GET' => 0], null, false, false, null]],
        '/pages/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::about'], null, ['GET' => 0], null, false, false, null]],
        '/pages/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/pages/dogs' => [[['_route' => 'app_dogs', '_controller' => 'App\\Controller\\PageController::dogs'], null, ['GET' => 0], null, false, false, null]],
        '/pages/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\PageController::events'], null, ['GET' => 0], null, false, false, null]],
        '/donation' => [[['_route' => 'app_donation', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/pages/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\PageController::shop'], null, ['GET' => 0], null, false, false, null]],
        '/pages/veterinarian' => [[['_route' => 'app_veterinarian_page', '_controller' => 'App\\Controller\\PageController::veterinarianPage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/clients' => [[['_route' => 'app_clients_index', '_controller' => 'App\\Controller\\PageController::clients'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\PageController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/radiology/triage' => [[['_route' => 'app_radiology_triage', '_controller' => 'App\\Controller\\RadiologyController::triage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/suivi' => [[['_route' => 'app_suivi_index', '_controller' => 'App\\Controller\\SuiviController::index'], null, ['GET' => 0], null, true, false, null]],
        '/suivi/ai-analyze' => [[['_route' => 'app_suivi_ai_analyze', '_controller' => 'App\\Controller\\SuiviController::aiAnalyze'], null, ['POST' => 0], null, false, false, null]],
        '/suivi/random-body-part' => [[['_route' => 'app_suivi_random_body_part', '_controller' => 'App\\Controller\\SuiviController::getRandomBodyPart'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/filter-by-emergency' => [[['_route' => 'app_suivi_filter_by_emergency', '_controller' => 'App\\Controller\\SuiviController::filterByEmergency'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/search-by-type' => [[['_route' => 'app_suivi_search_by_type', '_controller' => 'App\\Controller\\SuiviController::searchByType'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/search-by-etat' => [[['_route' => 'app_suivi_search_by_etat', '_controller' => 'App\\Controller\\SuiviController::searchByEtat'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/sort-by-date' => [[['_route' => 'app_suivi_sort_by_date', '_controller' => 'App\\Controller\\SuiviController::sortByDate'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/new' => [[['_route' => 'app_suivi_new', '_controller' => 'App\\Controller\\SuiviController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/suivi/test' => [[['_route' => 'app_suivi_test', '_controller' => 'App\\Controller\\SuiviController::test'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/consultation/(?'
                    .'|([^/]++)/edit(*:232)'
                    .'|delete/([^/]++)(*:255)'
                .')'
                .'|/suivi/(?'
                    .'|consultation/([^/]++)(*:295)'
                    .'|export\\-pdf/([^/]++)(*:323)'
                    .'|ai\\-symptoms/([^/]++)(*:352)'
                    .'|([^/]++)/edit(*:373)'
                    .'|delete/([^/]++)(*:396)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        232 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        295 => [[['_route' => 'app_suivi_consultation_detail', '_controller' => 'App\\Controller\\SuiviController::consultationDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_suivi_export_pdf', '_controller' => 'App\\Controller\\SuiviController::exportPdf'], ['id'], ['GET' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_suivi_ai_symptoms', '_controller' => 'App\\Controller\\SuiviController::getOrganSymptoms'], ['organNumber'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'app_suivi_edit', '_controller' => 'App\\Controller\\SuiviController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [
            [['_route' => 'app_suivi_delete', '_controller' => 'App\\Controller\\SuiviController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
