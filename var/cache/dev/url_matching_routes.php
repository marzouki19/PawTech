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
        '/admin/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement/filter' => [[['_route' => 'app_evenement_filter', '_controller' => 'App\\Controller\\EvenementController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/guest' => [[['_route' => 'app_guest_index', '_controller' => 'App\\Controller\\GuestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guest/filter' => [[['_route' => 'app_guest_filter', '_controller' => 'App\\Controller\\GuestController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guest/new' => [[['_route' => 'app_guest_new', '_controller' => 'App\\Controller\\GuestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::about'], null, null, null, false, false, null]],
        '/admin/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/participation/filter' => [[['_route' => 'app_participation_filter', '_controller' => 'App\\Controller\\ParticipationController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\PublicEventController::index'], null, null, null, false, false, null]],
        '/events/filter' => [[['_route' => 'app_events_filter', '_controller' => 'App\\Controller\\PublicEventController::filterEvents'], null, ['GET' => 0], null, false, false, null]],
        '/events/recommend' => [[['_route' => 'app_event_recommend', '_controller' => 'App\\Controller\\PublicEventController::recommendEvents'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|evenement/([^/]++)(?'
                        .'|(*:233)'
                        .'|/edit(*:246)'
                        .'|(*:254)'
                    .')'
                    .'|guest/([^/]++)(?'
                        .'|(*:280)'
                        .'|/edit(*:293)'
                        .'|(*:301)'
                    .')'
                    .'|participation/([^/]++)(?'
                        .'|(*:335)'
                        .'|/(?'
                            .'|edit(*:351)'
                            .'|c(?'
                                .'|onfirm(*:369)'
                                .'|ancel(*:382)'
                            .')'
                        .')'
                        .'|(*:392)'
                    .')'
                .')'
                .'|/events/(\\d+)(*:415)'
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
        233 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_guest_show', '_controller' => 'App\\Controller\\GuestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_guest_edit', '_controller' => 'App\\Controller\\GuestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'app_guest_delete', '_controller' => 'App\\Controller\\GuestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'app_participation_confirm', '_controller' => 'App\\Controller\\ParticipationController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        382 => [[['_route' => 'app_participation_cancel', '_controller' => 'App\\Controller\\ParticipationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        392 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        415 => [
            [['_route' => 'app_event_detail', '_controller' => 'App\\Controller\\PublicEventController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
