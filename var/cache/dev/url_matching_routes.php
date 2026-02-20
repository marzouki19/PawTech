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
        '/admin/events' => [[['_route' => 'app_admin_events', '_controller' => 'App\\Controller\\AdminEventsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/events/create' => [[['_route' => 'app_admin_events_create', '_controller' => 'App\\Controller\\AdminEventsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/adoption' => [[['_route' => 'app_adoption_index', '_controller' => 'App\\Controller\\AdoptionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adoption/new' => [[['_route' => 'app_adoption_new', '_controller' => 'App\\Controller\\AdoptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/alerts' => [[['_route' => 'app_admin_alerts', '_controller' => 'App\\Controller\\AlertController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/alerts/search' => [[['_route' => 'app_admin_alerts_search', '_controller' => 'App\\Controller\\AlertController::search'], null, ['GET' => 0], null, false, false, null]],
        '/admin/alerts/new' => [[['_route' => 'app_admin_alerts_new', '_controller' => 'App\\Controller\\AlertController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/assistant/ask' => [[['_route' => 'app_assistant_ask', '_controller' => 'App\\Controller\\AssistantController::ask'], null, ['POST' => 0], null, false, false, null]],
        '/assistant/models' => [[['_route' => 'app_assistant_models', '_controller' => 'App\\Controller\\AssistantController::listModels'], null, ['GET' => 0], null, false, false, null]],
        '/assistant/test' => [[['_route' => 'app_assistant_test', '_controller' => 'App\\Controller\\AssistantController::test'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/categories' => [[['_route' => 'app_eshop_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/categories/new' => [[['_route' => 'app_eshop_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/commandes' => [[['_route' => 'app_eshop_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/commandes/new' => [[['_route' => 'app_eshop_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultation/veterinaire' => [[['_route' => 'app_veterinaire_index', '_controller' => 'App\\Controller\\ConsultationController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/consultation/appointment/new' => [[['_route' => 'app_frontveterinaire_new', '_controller' => 'App\\Controller\\ConsultationController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation/search' => [[['_route' => 'app_consultation_search', '_controller' => 'App\\Controller\\ConsultationController::search'], null, ['GET' => 0], null, false, false, null]],
        '/consultation/sort-by-date' => [[['_route' => 'app_consultation_sort_by_date', '_controller' => 'App\\Controller\\ConsultationController::sortByDate'], null, ['GET' => 0], null, false, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultation/suivi' => [[['_route' => 'app_consultation_suivi', '_controller' => 'App\\Controller\\ConsultationController::suivi'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/search_json' => [[['_route' => 'app_dogs_search_json', '_controller' => 'App\\Controller\\DogsController::searchJson'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/filter' => [[['_route' => 'app_dogs_filter', '_controller' => 'App\\Controller\\DogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs' => [[['_route' => 'app_dogs_index', '_controller' => 'App\\Controller\\DogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dogs/new' => [[['_route' => 'app_dogs_new', '_controller' => 'App\\Controller\\DogsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/dogs-dash' => [[['_route' => 'app_dogs_dash', '_controller' => 'App\\Controller\\DogsDashController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/donations' => [[['_route' => 'app_donation_index', '_controller' => 'App\\Controller\\DonationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/donations/new' => [[['_route' => 'app_donation_new', '_controller' => 'App\\Controller\\DonationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front_dogs/dogs' => [[['_route' => 'app_front_dogs', '_controller' => 'App\\Controller\\FrontDogsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front_dogs/recommended_dog' => [[['_route' => 'app_recommended_dog', '_controller' => 'App\\Controller\\FrontDogsController::recommendedDog'], null, ['POST' => 0], null, false, false, null]],
        '/front_dogs/dog_recommendation' => [[['_route' => 'app_dog_recommendation', '_controller' => 'App\\Controller\\FrontDogsController::recommendedDog'], null, ['POST' => 0], null, false, false, null]],
        '/admin/guest' => [[['_route' => 'app_guest_index', '_controller' => 'App\\Controller\\GuestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/guest/new' => [[['_route' => 'app_guest_new', '_controller' => 'App\\Controller\\GuestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/lignes-commande' => [[['_route' => 'app_eshop_ligne_commande_index', '_controller' => 'App\\Controller\\LigneCommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/lignes-commande/new' => [[['_route' => 'app_eshop_ligne_commande_new', '_controller' => 'App\\Controller\\LigneCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stations' => [[['_route' => 'app_admin_stations', '_controller' => 'App\\Controller\\ObservationStationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/stations/new' => [[['_route' => 'app_admin_stations_new', '_controller' => 'App\\Controller\\ObservationStationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/stations/search' => [[['_route' => 'app_admin_stations_search', '_controller' => 'App\\Controller\\ObservationStationController::searchStations'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/produits/samples/generate' => [[['_route' => 'app_eshop_produit_generate_samples', '_controller' => 'App\\Controller\\ProduitController::generateSampleProducts'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/eshop/produits' => [[['_route' => 'app_eshop_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/eshop/produits/new' => [[['_route' => 'app_eshop_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/eshop/produits/cart/checkout' => [[['_route' => 'app_eshop_produit_cart_checkout', '_controller' => 'App\\Controller\\ProduitController::cartCheckout'], null, ['POST' => 0], null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\PublicEventController::index'], null, null, null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications', '_controller' => 'App\\Controller\\PublicNotificationController::index'], null, null, null, false, false, null]],
        '/api/recommendations/top-rated' => [[['_route' => 'app_api_top_rated', '_controller' => 'App\\Controller\\RecommendationController::getTopRatedProducts'], null, ['GET' => 0], null, false, false, null]],
        '/api/recommendations/popular' => [[['_route' => 'app_api_popular_recommendations', '_controller' => 'App\\Controller\\RecommendationController::getPopularRecommendations'], null, ['GET' => 0], null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/shipping/calculate' => [[['_route' => 'app_shipping_calculate', '_controller' => 'App\\Controller\\ShippingController::calculateShipping'], null, ['POST' => 0], null, false, false, null]],
        '/api/shipping/zones' => [[['_route' => 'app_shipping_zones', '_controller' => 'App\\Controller\\ShippingController::getZones'], null, ['GET' => 0], null, false, false, null]],
        '/api/shipping/express' => [[['_route' => 'app_shipping_express', '_controller' => 'App\\Controller\\ShippingController::calculateExpressShipping'], null, ['POST' => 0], null, false, false, null]],
        '/stripe/checkout' => [[['_route' => 'app_stripe_checkout', '_controller' => 'App\\Controller\\StripeController::checkout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stripe/create-charge' => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], null, ['POST' => 0], null, false, false, null]],
        '/stripe/payment-intent' => [[['_route' => 'app_stripe_payment_intent', '_controller' => 'App\\Controller\\StripeController::createPaymentIntent'], null, ['POST' => 0], null, false, false, null]],
        '/stripe/success' => [[['_route' => 'app_stripe_success', '_controller' => 'App\\Controller\\StripeController::success'], null, ['GET' => 0], null, false, false, null]],
        '/stripe/cancel' => [[['_route' => 'app_stripe_cancel', '_controller' => 'App\\Controller\\StripeController::cancel'], null, ['GET' => 0], null, false, false, null]],
        '/stripe/webhook' => [[['_route' => 'app_stripe_webhook', '_controller' => 'App\\Controller\\StripeController::webhook'], null, ['POST' => 0], null, false, false, null]],
        '/stripe/donation' => [[['_route' => 'app_stripe_donation_checkout', '_controller' => 'App\\Controller\\StripeController::donationCheckout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stripe/donation/charge' => [[['_route' => 'app_stripe_donation_charge', '_controller' => 'App\\Controller\\StripeController::donationCharge'], null, ['POST' => 0], null, false, false, null]],
        '/suivi' => [[['_route' => 'app_suivi_index', '_controller' => 'App\\Controller\\SuiviController::index'], null, ['GET' => 0], null, true, false, null]],
        '/suivi/ai-analyze' => [[['_route' => 'app_suivi_ai_analyze', '_controller' => 'App\\Controller\\SuiviController::aiAnalyze'], null, ['POST' => 0], null, false, false, null]],
        '/suivi/random-body-part' => [[['_route' => 'app_suivi_random_body_part', '_controller' => 'App\\Controller\\SuiviController::getRandomBodyPart'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/filter-by-emergency' => [[['_route' => 'app_suivi_filter_by_emergency', '_controller' => 'App\\Controller\\SuiviController::filterByEmergency'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/search-by-type' => [[['_route' => 'app_suivi_search_by_type', '_controller' => 'App\\Controller\\SuiviController::searchByType'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/search-by-etat' => [[['_route' => 'app_suivi_search_by_etat', '_controller' => 'App\\Controller\\SuiviController::searchByEtat'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/sort-by-date' => [[['_route' => 'app_suivi_sort_by_date', '_controller' => 'App\\Controller\\SuiviController::sortByDate'], null, ['GET' => 0], null, false, false, null]],
        '/suivi/new' => [[['_route' => 'app_suivi_new', '_controller' => 'App\\Controller\\SuiviController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/suivi/test' => [[['_route' => 'app_suivi_test', '_controller' => 'App\\Controller\\SuiviController::test'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|d(?'
                        .'|min/(?'
                            .'|even(?'
                                .'|ts/([^/]++)/(?'
                                    .'|edit(*:244)'
                                    .'|cancel(*:258)'
                                    .'|delete(*:272)'
                                .')'
                                .'|ement/([^/]++)(?'
                                    .'|(*:298)'
                                    .'|/edit(*:311)'
                                    .'|(*:319)'
                                .')'
                            .')'
                            .'|alerts/(?'
                                .'|(\\d+)(*:344)'
                                .'|(\\d+)/edit(*:362)'
                                .'|(\\d+)(*:375)'
                            .')'
                            .'|guest/([^/]++)(?'
                                .'|(*:401)'
                                .'|/edit(*:414)'
                                .'|(*:422)'
                            .')'
                            .'|stations/(?'
                                .'|(\\d+)(*:448)'
                                .'|(\\d+)/edit(*:466)'
                                .'|(\\d+)(*:479)'
                            .')'
                            .'|participation/([^/]++)(?'
                                .'|(*:513)'
                                .'|/(?'
                                    .'|edit(*:529)'
                                    .'|c(?'
                                        .'|onfirm(*:547)'
                                        .'|ancel(*:560)'
                                    .')'
                                .')'
                                .'|(*:570)'
                            .')'
                        .')'
                        .'|option/(?'
                            .'|dog/(?'
                                .'|(\\d+)/requests(*:611)'
                                .'|(\\d+)/auto\\-adopt\\-match(*:643)'
                                .'|(\\d+)/adopt\\-result/(\\d+)(*:676)'
                                .'|(\\d+)/user\\-show(*:700)'
                                .'|(\\d+)/adopt\\-result/(\\d+)/attestation(*:745)'
                                .'|(\\d+)/adopt\\-result/(\\d+)/attestation\\-email(*:797)'
                            .')'
                            .'|(\\d+)(*:811)'
                            .'|(\\d+)/edit(*:829)'
                            .'|(\\d+)(*:842)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|recommendations/(?'
                            .'|product/([^/]++)(*:893)'
                            .'|user/([^/]++)(*:914)'
                            .'|similar/([^/]++)(*:938)'
                        .')'
                        .'|shipping/track/([^/]++)(*:970)'
                    .')'
                .')'
                .'|/d(?'
                    .'|ashboard/(?'
                        .'|eshop/(?'
                            .'|c(?'
                                .'|ategories/(?'
                                    .'|(\\d+)(*:1028)'
                                    .'|(\\d+)/edit(*:1047)'
                                    .'|(\\d+)/delete(*:1068)'
                                .')'
                                .'|ommandes/(?'
                                    .'|(\\d+)(*:1095)'
                                    .'|([^/]++)/edit(*:1117)'
                                    .'|(\\d+)/delete(*:1138)'
                                .')'
                            .')'
                            .'|lignes\\-commande/(?'
                                .'|(\\d+)(*:1174)'
                                .'|([^/]++)/edit(*:1196)'
                                .'|(\\d+)/delete(*:1217)'
                            .')'
                            .'|produits/(?'
                                .'|(\\d+)(*:1244)'
                                .'|(\\d+)/edit(*:1263)'
                                .'|(\\d+)/delete(*:1284)'
                                .'|(\\d+)/buy(*:1302)'
                                .'|uploads/images/([^/]++)(*:1334)'
                            .')'
                        .')'
                        .'|donations/(?'
                            .'|(\\d+)(*:1363)'
                            .'|([^/]++)/edit(*:1385)'
                            .'|(\\d+)/delete(*:1406)'
                        .')'
                    .')'
                    .'|ogs/([^/]++)(?'
                        .'|(*:1432)'
                        .'|/edit(*:1446)'
                        .'|(*:1455)'
                    .')'
                .')'
                .'|/consultation/(?'
                    .'|([^/]++)/edit(*:1496)'
                    .'|delete/([^/]++)(*:1520)'
                .')'
                .'|/front_dogs/(?'
                    .'|dogs/([^/]++)(?'
                        .'|(*:1561)'
                        .'|/generate\\-description(*:1592)'
                    .')'
                    .'|apply_adoption/([^/]++)(*:1625)'
                .')'
                .'|/events/(\\d+)(*:1648)'
                .'|/notifications/([^/]++)/read(*:1685)'
                .'|/reset\\-password/(?'
                    .'|verify/([^/]++)(*:1729)'
                    .'|([^/]++)(*:1746)'
                .')'
                .'|/s(?'
                    .'|tripe/verify/([^/]++)(*:1782)'
                    .'|uivi/(?'
                        .'|consultation/([^/]++)(*:1820)'
                        .'|export\\-pdf/([^/]++)(*:1849)'
                        .'|ai\\-symptoms/([^/]++)(*:1879)'
                        .'|([^/]++)/edit(*:1901)'
                        .'|delete/([^/]++)(*:1925)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1953)'
                    .'|edit/([^/]++)(*:1975)'
                    .'|([^/]++)(*:1992)'
                .')'
                .'|/ziptag/(?'
                    .'|(\\d+)(*:2018)'
                    .'|(\\d+)/edit(*:2037)'
                    .'|(\\d+)(*:2051)'
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
        244 => [[['_route' => 'app_admin_events_edit', '_controller' => 'App\\Controller\\AdminEventsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_admin_events_cancel', '_controller' => 'App\\Controller\\AdminEventsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        272 => [[['_route' => 'app_admin_events_delete', '_controller' => 'App\\Controller\\AdminEventsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        298 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_admin_alerts_show', '_controller' => 'App\\Controller\\AlertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_admin_alerts_edit', '_controller' => 'App\\Controller\\AlertController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [[['_route' => 'app_admin_alerts_delete', '_controller' => 'App\\Controller\\AlertController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_guest_show', '_controller' => 'App\\Controller\\GuestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        414 => [[['_route' => 'app_guest_edit', '_controller' => 'App\\Controller\\GuestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        422 => [[['_route' => 'app_guest_delete', '_controller' => 'App\\Controller\\GuestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        448 => [[['_route' => 'app_admin_stations_show', '_controller' => 'App\\Controller\\ObservationStationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_admin_stations_edit', '_controller' => 'App\\Controller\\ObservationStationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        479 => [[['_route' => 'app_admin_stations_delete', '_controller' => 'App\\Controller\\ObservationStationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_participation_confirm', '_controller' => 'App\\Controller\\ParticipationController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        560 => [[['_route' => 'app_participation_cancel', '_controller' => 'App\\Controller\\ParticipationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        570 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_adoption_dog_adpot_list', '_controller' => 'App\\Controller\\AdoptionController::dogAdpotList'], ['id'], ['GET' => 0], null, false, false, null]],
        643 => [[['_route' => 'app_adoption_auto_adopt_match', '_controller' => 'App\\Controller\\AdoptionController::autoAdoptMatch'], ['id'], ['POST' => 0], null, false, false, null]],
        676 => [[['_route' => 'app_adoption_result', '_controller' => 'App\\Controller\\AdoptionController::adoptResult'], ['dogId', 'userId'], ['GET' => 0], null, false, true, null]],
        700 => [[['_route' => 'app_doguser_show', '_controller' => 'App\\Controller\\AdoptionController::dogUserShow'], ['id'], ['GET' => 0], null, false, false, null]],
        745 => [[['_route' => 'app_adoption_attestation_ai', '_controller' => 'App\\Controller\\AdoptionController::generateAttestation'], ['dogId', 'userId'], ['POST' => 0], null, false, false, null]],
        797 => [[['_route' => 'app_adoption_attestation_email', '_controller' => 'App\\Controller\\AdoptionController::sendAttestationEmail'], ['dogId', 'userId'], ['POST' => 0], null, false, false, null]],
        811 => [[['_route' => 'app_adoption_show', '_controller' => 'App\\Controller\\AdoptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_adoption_edit', '_controller' => 'App\\Controller\\AdoptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        842 => [[['_route' => 'app_adoption_delete', '_controller' => 'App\\Controller\\AdoptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        893 => [[['_route' => 'app_api_product_recommendations', '_controller' => 'App\\Controller\\RecommendationController::getProductRecommendations'], ['id'], ['GET' => 0], null, false, true, null]],
        914 => [[['_route' => 'app_api_user_recommendations', '_controller' => 'App\\Controller\\RecommendationController::getUserRecommendations'], ['userId'], ['GET' => 0], null, false, true, null]],
        938 => [[['_route' => 'app_api_similar_products', '_controller' => 'App\\Controller\\RecommendationController::getSimilarProducts'], ['productId'], ['GET' => 0], null, false, true, null]],
        970 => [[['_route' => 'app_shipping_track', '_controller' => 'App\\Controller\\ShippingController::trackPackage'], ['trackingNumber'], ['GET' => 0], null, false, true, null]],
        1028 => [[['_route' => 'app_eshop_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1047 => [[['_route' => 'app_eshop_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1068 => [[['_route' => 'app_eshop_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1095 => [[['_route' => 'app_eshop_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1117 => [[['_route' => 'app_eshop_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1138 => [[['_route' => 'app_eshop_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1174 => [[['_route' => 'app_eshop_ligne_commande_show', '_controller' => 'App\\Controller\\LigneCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1196 => [[['_route' => 'app_eshop_ligne_commande_edit', '_controller' => 'App\\Controller\\LigneCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1217 => [[['_route' => 'app_eshop_ligne_commande_delete', '_controller' => 'App\\Controller\\LigneCommandeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1244 => [[['_route' => 'app_eshop_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1263 => [[['_route' => 'app_eshop_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1284 => [[['_route' => 'app_eshop_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1302 => [[['_route' => 'app_eshop_produit_buy', '_controller' => 'App\\Controller\\ProduitController::buy'], ['id'], ['POST' => 0], null, false, false, null]],
        1334 => [[['_route' => 'app_uploads_images', '_controller' => 'App\\Controller\\ProduitController::serveImage'], ['filename'], null, null, false, true, null]],
        1363 => [[['_route' => 'app_donation_show', '_controller' => 'App\\Controller\\DonationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1385 => [[['_route' => 'app_donation_edit', '_controller' => 'App\\Controller\\DonationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1406 => [[['_route' => 'app_donation_delete', '_controller' => 'App\\Controller\\DonationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1432 => [[['_route' => 'app_dogs_show', '_controller' => 'App\\Controller\\DogsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1446 => [[['_route' => 'app_dogs_edit', '_controller' => 'App\\Controller\\DogsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1455 => [[['_route' => 'app_dogs_delete', '_controller' => 'App\\Controller\\DogsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1496 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1520 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1561 => [[['_route' => 'app_front_dogs_show', '_controller' => 'App\\Controller\\FrontDogsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1592 => [[['_route' => 'app_front_dogs_generate_description', '_controller' => 'App\\Controller\\FrontDogsController::generateDescription'], ['id'], ['POST' => 0], null, false, false, null]],
        1625 => [[['_route' => 'app_apply_adoption', '_controller' => 'App\\Controller\\FrontDogsController::applyAdoption'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1648 => [[['_route' => 'app_event_detail', '_controller' => 'App\\Controller\\PublicEventController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1685 => [[['_route' => 'app_notifications_read', '_controller' => 'App\\Controller\\PublicNotificationController::markAsRead'], ['id'], ['POST' => 0], null, false, false, null]],
        1729 => [[['_route' => 'app_verify_reset', '_controller' => 'App\\Controller\\ResetPasswordController::verifyCode'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1746 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1782 => [[['_route' => 'app_stripe_verify', '_controller' => 'App\\Controller\\StripeController::verifyPayment'], ['paymentIntentId'], null, null, false, true, null]],
        1820 => [[['_route' => 'app_suivi_consultation_detail', '_controller' => 'App\\Controller\\SuiviController::consultationDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        1849 => [[['_route' => 'app_suivi_export_pdf', '_controller' => 'App\\Controller\\SuiviController::exportPdf'], ['id'], ['GET' => 0], null, false, true, null]],
        1879 => [[['_route' => 'app_suivi_ai_symptoms', '_controller' => 'App\\Controller\\SuiviController::getOrganSymptoms'], ['organNumber'], ['GET' => 0], null, false, true, null]],
        1901 => [[['_route' => 'app_suivi_edit', '_controller' => 'App\\Controller\\SuiviController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1925 => [[['_route' => 'app_suivi_delete', '_controller' => 'App\\Controller\\SuiviController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1953 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1975 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1992 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2018 => [[['_route' => 'app_ziptag_show', '_controller' => 'App\\Controller\\ZiptagController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2037 => [[['_route' => 'app_ziptag_edit', '_controller' => 'App\\Controller\\ZiptagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2051 => [
            [['_route' => 'app_ziptag_delete', '_controller' => 'App\\Controller\\ZiptagController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
