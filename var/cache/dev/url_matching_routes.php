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
        '/adoption' => [[['_route' => 'app_adoption_index', '_controller' => 'App\\Controller\\AdoptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adoption/new' => [[['_route' => 'app_adoption_new', '_controller' => 'App\\Controller\\AdoptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/search_json' => [[['_route' => 'app_dogs_search_json', '_controller' => 'App\\Controller\\DogsController::searchJson'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/filter' => [[['_route' => 'app_dogs_filter', '_controller' => 'App\\Controller\\DogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs' => [[['_route' => 'app_dogs_index', '_controller' => 'App\\Controller\\DogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/new' => [[['_route' => 'app_dogs_new', '_controller' => 'App\\Controller\\DogsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/dogs-dash' => [[['_route' => 'app_dogs_dash', '_controller' => 'App\\Controller\\DogsDashController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement/filter' => [[['_route' => 'app_evenement_filter', '_controller' => 'App\\Controller\\EvenementController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front_dogs/dogs' => [[['_route' => 'app_front_dogs', '_controller' => 'App\\Controller\\FrontDogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front_dogs/recommended_dog' => [[['_route' => 'app_recommended_dog', '_controller' => 'App\\Controller\\FrontDogsController::recommendedDog'], null, ['POST' => 0], null, false, false, null]],
        '/front_dogs/dog_recommendation' => [[['_route' => 'app_dog_recommendation', '_controller' => 'App\\Controller\\FrontDogsController::recommendedDog'], null, ['POST' => 0], null, false, false, null]],
        '/admin/guest' => [[['_route' => 'app_guest_index', '_controller' => 'App\\Controller\\GuestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guest/filter' => [[['_route' => 'app_guest_filter', '_controller' => 'App\\Controller\\GuestController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guest/new' => [[['_route' => 'app_guest_new', '_controller' => 'App\\Controller\\GuestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PageController::home'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_home_alias', '_controller' => 'App\\Controller\\PageController::home'], null, ['GET' => 0], null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\PageController::account'], null, ['GET' => 0], null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\PageController::settings'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\PageController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/api/verify-face' => [[['_route' => 'app_verify_face_proxy', '_controller' => 'App\\Controller\\PageController::verifyFaceProxy'], null, ['POST' => 0], null, false, false, null]],
        '/my-pets' => [[['_route' => 'app_my_pets', '_controller' => 'App\\Controller\\PageController::myPets'], null, ['GET' => 0], null, false, false, null]],
        '/pages/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::about'], null, ['GET' => 0], null, false, false, null]],
        '/pages/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, ['GET' => 0], null, false, false, null]],
        '/pages/dogs' => [[['_route' => 'app_dogs', '_controller' => 'App\\Controller\\PageController::dogs'], null, ['GET' => 0], null, false, false, null]],
        '/donation' => [[['_route' => 'app_donation', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/pages/shop' => [[['_route' => 'app_shop', '_controller' => 'App\\Controller\\PageController::shop'], null, ['GET' => 0], null, false, false, null]],
        '/pages/veterinarian' => [[['_route' => 'app_veterinarian_page', '_controller' => 'App\\Controller\\PageController::veterinarianPage'], null, ['GET' => 0], null, false, false, null]],
        '/clients' => [[['_route' => 'app_clients_index', '_controller' => 'App\\Controller\\PageController::clients'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\PageController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/participation/filter' => [[['_route' => 'app_participation_filter', '_controller' => 'App\\Controller\\ParticipationController::filter'], null, ['GET' => 0], null, false, false, null]],
        '/admin/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/produits/samples/generate' => [[['_route' => 'app_eshop_produit_generate_samples', '_controller' => 'App\\Controller\\ProduitController::generateSampleProducts'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/eshop/produits' => [[['_route' => 'app_eshop_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/produits/new' => [[['_route' => 'app_eshop_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/produits/cart/checkout' => [[['_route' => 'app_eshop_produit_cart_checkout', '_controller' => 'App\\Controller\\ProduitController::cartCheckout'], null, ['POST' => 0], null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\PublicEventController::index'], null, null, null, false, false, null]],
        '/events/filter' => [[['_route' => 'app_events_filter', '_controller' => 'App\\Controller\\PublicEventController::filterEvents'], null, ['GET' => 0], null, false, false, null]],
        '/events/recommend' => [[['_route' => 'app_event_recommend', '_controller' => 'App\\Controller\\PublicEventController::recommendEvents'], null, ['POST' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_users_create', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\UserController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\UserController::signin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/google' => [[['_route' => 'app_google_auth_start', '_controller' => 'App\\Controller\\UserController::googleAuthStart'], null, ['GET' => 0], null, false, false, null]],
        '/auth/google/callback' => [[['_route' => 'app_google_auth_callback', '_controller' => 'App\\Controller\\UserController::googleAuthCallback'], null, ['GET' => 0], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UserController::users'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ziptag/search_json' => [[['_route' => 'app_ziptag_search_json', '_controller' => 'App\\Controller\\ZiptagController::searchJson'], null, ['GET' => 0], null, false, false, null]],
        '/ziptag' => [[['_route' => 'app_ziptag_index', '_controller' => 'App\\Controller\\ZiptagController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ziptag/new' => [[['_route' => 'app_ziptag_new', '_controller' => 'App\\Controller\\ZiptagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Ziptag' => [
            [['_route' => 'ziptag_uppercase', 'path' => '/ziptag', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null],
            [['_route' => 'ziptag_uppercase_slash', 'path' => '/ziptag', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, true, false, null],
        ],
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
                .'|/ad(?'
                    .'|option/(?'
                        .'|dog/(?'
                            .'|(\\d+)/requests(*:239)'
                            .'|(\\d+)/auto\\-adopt\\-match(*:271)'
                            .'|(\\d+)/adopt\\-result/(\\d+)(*:304)'
                            .'|(\\d+)/user\\-show(*:328)'
                            .'|(\\d+)/adopt\\-result/(\\d+)/attestation(*:373)'
                            .'|(\\d+)/adopt\\-result/(\\d+)/attestation\\-email(*:425)'
                        .')'
                        .'|(\\d+)(*:439)'
                        .'|(\\d+)/edit(*:457)'
                        .'|(\\d+)(*:470)'
                    .')'
                    .'|min/(?'
                        .'|evenement/([^/]++)(?'
                            .'|(*:507)'
                            .'|/edit(*:520)'
                            .'|(*:528)'
                        .')'
                        .'|guest/([^/]++)(?'
                            .'|(*:554)'
                            .'|/edit(*:567)'
                            .'|(*:575)'
                        .')'
                        .'|participation/([^/]++)(?'
                            .'|(*:609)'
                            .'|/(?'
                                .'|edit(*:625)'
                                .'|c(?'
                                    .'|onfirm(*:643)'
                                    .'|ancel(*:656)'
                                .')'
                            .')'
                            .'|(*:666)'
                        .')'
                    .')'
                .')'
                .'|/d(?'
                    .'|ogs/([^/]++)(?'
                        .'|(*:697)'
                        .'|/edit(*:710)'
                        .'|(*:718)'
                    .')'
                    .'|ashboard/eshop/produits/(?'
                        .'|(\\d+)(*:759)'
                        .'|(\\d+)/edit(*:777)'
                        .'|(\\d+)/delete(*:797)'
                        .'|(\\d+)/buy(*:814)'
                        .'|uploads/images/([^/]++)(*:845)'
                    .')'
                .')'
                .'|/front_dogs/(?'
                    .'|dogs/([^/]++)(?'
                        .'|(*:886)'
                        .'|/generate\\-description(*:916)'
                    .')'
                    .'|apply_adoption/([^/]++)(*:948)'
                .')'
                .'|/events/(\\d+)(*:970)'
                .'|/reset\\-password/(?'
                    .'|verify/([^/]++)(*:1013)'
                    .'|([^/]++)(*:1030)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1057)'
                    .'|edit/([^/]++)(*:1079)'
                    .'|([^/]++)(*:1096)'
                .')'
                .'|/ziptag/(?'
                    .'|(\\d+)(*:1122)'
                    .'|(\\d+)/edit(*:1141)'
                    .'|(\\d+)(*:1155)'
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
        239 => [[['_route' => 'app_adoption_dog_adpot_list', '_controller' => 'App\\Controller\\AdoptionController::dogAdpotList'], ['id'], ['GET' => 0], null, false, false, null]],
        271 => [[['_route' => 'app_adoption_auto_adopt_match', '_controller' => 'App\\Controller\\AdoptionController::autoAdoptMatch'], ['id'], ['POST' => 0], null, false, false, null]],
        304 => [[['_route' => 'app_adoption_result', '_controller' => 'App\\Controller\\AdoptionController::adoptResult'], ['dogId', 'userId'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_doguser_show', '_controller' => 'App\\Controller\\AdoptionController::dogUserShow'], ['id'], ['GET' => 0], null, false, false, null]],
        373 => [[['_route' => 'app_adoption_attestation_ai', '_controller' => 'App\\Controller\\AdoptionController::generateAttestation'], ['dogId', 'userId'], ['POST' => 0], null, false, false, null]],
        425 => [[['_route' => 'app_adoption_attestation_email', '_controller' => 'App\\Controller\\AdoptionController::sendAttestationEmail'], ['dogId', 'userId'], ['POST' => 0], null, false, false, null]],
        439 => [[['_route' => 'app_adoption_show', '_controller' => 'App\\Controller\\AdoptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        457 => [[['_route' => 'app_adoption_edit', '_controller' => 'App\\Controller\\AdoptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        470 => [[['_route' => 'app_adoption_delete', '_controller' => 'App\\Controller\\AdoptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        554 => [[['_route' => 'app_guest_show', '_controller' => 'App\\Controller\\GuestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        567 => [[['_route' => 'app_guest_edit', '_controller' => 'App\\Controller\\GuestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'app_guest_delete', '_controller' => 'App\\Controller\\GuestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        609 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'app_participation_confirm', '_controller' => 'App\\Controller\\ParticipationController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        656 => [[['_route' => 'app_participation_cancel', '_controller' => 'App\\Controller\\ParticipationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        666 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        697 => [[['_route' => 'app_dogs_show', '_controller' => 'App\\Controller\\DogsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        710 => [[['_route' => 'app_dogs_edit', '_controller' => 'App\\Controller\\DogsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        718 => [[['_route' => 'app_dogs_delete', '_controller' => 'App\\Controller\\DogsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        759 => [[['_route' => 'app_eshop_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_eshop_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        797 => [[['_route' => 'app_eshop_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        814 => [[['_route' => 'app_eshop_produit_buy', '_controller' => 'App\\Controller\\ProduitController::buy'], ['id'], ['POST' => 0], null, false, false, null]],
        845 => [[['_route' => 'app_uploads_images', '_controller' => 'App\\Controller\\ProduitController::serveImage'], ['filename'], null, null, false, true, null]],
        886 => [[['_route' => 'app_front_dogs_show', '_controller' => 'App\\Controller\\FrontDogsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        916 => [[['_route' => 'app_front_dogs_generate_description', '_controller' => 'App\\Controller\\FrontDogsController::generateDescription'], ['id'], ['POST' => 0], null, false, false, null]],
        948 => [[['_route' => 'app_apply_adoption', '_controller' => 'App\\Controller\\FrontDogsController::applyAdoption'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        970 => [[['_route' => 'app_event_detail', '_controller' => 'App\\Controller\\PublicEventController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1013 => [[['_route' => 'app_verify_reset', '_controller' => 'App\\Controller\\ResetPasswordController::verifyCode'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1030 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1057 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1079 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1096 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1122 => [[['_route' => 'app_ziptag_show', '_controller' => 'App\\Controller\\ZiptagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1141 => [[['_route' => 'app_ziptag_edit', '_controller' => 'App\\Controller\\ZiptagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1155 => [
            [['_route' => 'app_ziptag_delete', '_controller' => 'App\\Controller\\ZiptagController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
