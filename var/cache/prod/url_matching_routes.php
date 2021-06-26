<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/group' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/abscence/([^/]++)(?'
                    .'|(*:28)'
                    .'|/(?'
                        .'|new(*:42)'
                        .'|edit(*:53)'
                    .')'
                    .'|(*:61)'
                .')'
                .'|/group/([^/]++)(?'
                    .'|(*:87)'
                    .'|/edit(*:99)'
                    .'|(*:106)'
                .')'
                .'|/punishment/([^/]++)(?'
                    .'|(*:138)'
                    .'|/(?'
                        .'|new(*:153)'
                        .'|edit(*:165)'
                    .')'
                    .'|(*:174)'
                .')'
                .'|/student/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:210)'
                        .'|edit(*:222)'
                    .')'
                    .'|(*:231)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:257)'
                    .'|/edit(*:270)'
                    .'|(*:278)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'abscence_index', '_controller' => 'App\\Controller\\AbscenceController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'abscence_new', '_controller' => 'App\\Controller\\AbscenceController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'abscence_edit', '_controller' => 'App\\Controller\\AbscenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        61 => [
            [['_route' => 'abscence_show', '_controller' => 'App\\Controller\\AbscenceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'abscence_delete', '_controller' => 'App\\Controller\\AbscenceController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        87 => [[['_route' => 'group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        99 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        106 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [
            [['_route' => 'punishment_index', '_controller' => 'App\\Controller\\PunishmentController::index'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'punishment_show', '_controller' => 'App\\Controller\\PunishmentController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        153 => [[['_route' => 'punishment_new', '_controller' => 'App\\Controller\\PunishmentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        165 => [[['_route' => 'punishment_edit', '_controller' => 'App\\Controller\\PunishmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        174 => [[['_route' => 'punishment_delete', '_controller' => 'App\\Controller\\PunishmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        210 => [[['_route' => 'student_new', '_controller' => 'App\\Controller\\StudentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        222 => [[['_route' => 'student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [
            [['_route' => 'student_index', '_controller' => 'App\\Controller\\StudentController::index'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        257 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
