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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/constellation' => [[['_route' => 'app_constellation_index', '_controller' => 'App\\Controller\\ConstellationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/constellation/new' => [[['_route' => 'app_constellation_new', '_controller' => 'App\\Controller\\ConstellationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messier/catalogue' => [[['_route' => 'app_messier_catalogue_index', '_controller' => 'App\\Controller\\MessierCatalogueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/messier/catalogue/new' => [[['_route' => 'app_messier_catalogue_new', '_controller' => 'App\\Controller\\MessierCatalogueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objet/celeste' => [[['_route' => 'app_objet_celeste_index', '_controller' => 'App\\Controller\\ObjetCelesteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/objet/celeste/new' => [[['_route' => 'app_objet_celeste_new', '_controller' => 'App\\Controller\\ObjetCelesteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_pages', '_controller' => 'App\\Controller\\PagesController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/constellation/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/messier/catalogue/([^/]++)(?'
                    .'|(*:255)'
                    .'|/edit(*:268)'
                    .'|(*:276)'
                .')'
                .'|/objet/celeste/([^/]++)(?'
                    .'|(*:311)'
                    .'|/edit(*:324)'
                    .'|(*:332)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'app_constellation_show', '_controller' => 'App\\Controller\\ConstellationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_constellation_edit', '_controller' => 'App\\Controller\\ConstellationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'app_constellation_delete', '_controller' => 'App\\Controller\\ConstellationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        255 => [[['_route' => 'app_messier_catalogue_show', '_controller' => 'App\\Controller\\MessierCatalogueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_messier_catalogue_edit', '_controller' => 'App\\Controller\\MessierCatalogueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        276 => [[['_route' => 'app_messier_catalogue_delete', '_controller' => 'App\\Controller\\MessierCatalogueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        311 => [[['_route' => 'app_objet_celeste_show', '_controller' => 'App\\Controller\\ObjetCelesteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'app_objet_celeste_edit', '_controller' => 'App\\Controller\\ObjetCelesteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [
            [['_route' => 'app_objet_celeste_delete', '_controller' => 'App\\Controller\\ObjetCelesteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
