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
        '/group' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/abscence/([^/]++)(?'
                    .'|(*:189)'
                    .'|/(?'
                        .'|new(*:204)'
                        .'|edit(*:216)'
                    .')'
                    .'|(*:225)'
                .')'
                .'|/group/([^/]++)(?'
                    .'|(*:252)'
                    .'|/edit(*:265)'
                    .'|(*:273)'
                .')'
                .'|/punishment/([^/]++)(?'
                    .'|(*:305)'
                    .'|/(?'
                        .'|new(*:320)'
                        .'|edit(*:332)'
                    .')'
                    .'|(*:341)'
                .')'
                .'|/student/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:377)'
                        .'|edit(*:389)'
                    .')'
                    .'|(*:398)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:424)'
                    .'|/edit(*:437)'
                    .'|(*:445)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        189 => [[['_route' => 'abscence_index', '_controller' => 'App\\Controller\\AbscenceController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'abscence_new', '_controller' => 'App\\Controller\\AbscenceController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'abscence_edit', '_controller' => 'App\\Controller\\AbscenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        225 => [
            [['_route' => 'abscence_show', '_controller' => 'App\\Controller\\AbscenceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'abscence_delete', '_controller' => 'App\\Controller\\AbscenceController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        252 => [[['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        305 => [
            [['_route' => 'punishment_index', '_controller' => 'App\\Controller\\PunishmentController::index'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'punishment_show', '_controller' => 'App\\Controller\\PunishmentController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        320 => [[['_route' => 'punishment_new', '_controller' => 'App\\Controller\\PunishmentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'punishment_edit', '_controller' => 'App\\Controller\\PunishmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'punishment_delete', '_controller' => 'App\\Controller\\PunishmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'student_new', '_controller' => 'App\\Controller\\StudentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        389 => [[['_route' => 'student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        398 => [
            [['_route' => 'student_index', '_controller' => 'App\\Controller\\StudentController::index'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        424 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
