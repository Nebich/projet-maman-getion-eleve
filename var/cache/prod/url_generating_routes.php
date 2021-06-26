<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'abscence_index' => [['id'], ['_controller' => 'App\\Controller\\AbscenceController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abscence']], [], []],
    'abscence_new' => [['id'], ['_controller' => 'App\\Controller\\AbscenceController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abscence']], [], []],
    'abscence_show' => [['id'], ['_controller' => 'App\\Controller\\AbscenceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abscence']], [], []],
    'abscence_edit' => [['id'], ['_controller' => 'App\\Controller\\AbscenceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abscence']], [], []],
    'abscence_delete' => [['id'], ['_controller' => 'App\\Controller\\AbscenceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abscence']], [], []],
    'group_index' => [[], ['_controller' => 'App\\Controller\\GroupController::index'], [], [['text', '/group/']], [], []],
    'group_new' => [[], ['_controller' => 'App\\Controller\\GroupController::new'], [], [['text', '/group/new']], [], []],
    'group_show' => [['id'], ['_controller' => 'App\\Controller\\GroupController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], []],
    'group_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], []],
    'group_delete' => [['id'], ['_controller' => 'App\\Controller\\GroupController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], []],
    'punishment_index' => [['id'], ['_controller' => 'App\\Controller\\PunishmentController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/punishment']], [], []],
    'punishment_show' => [['id'], ['_controller' => 'App\\Controller\\PunishmentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/punishment']], [], []],
    'punishment_new' => [['id'], ['_controller' => 'App\\Controller\\PunishmentController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/punishment']], [], []],
    'punishment_edit' => [['id'], ['_controller' => 'App\\Controller\\PunishmentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/punishment']], [], []],
    'punishment_delete' => [['id'], ['_controller' => 'App\\Controller\\PunishmentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/punishment']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'student_new' => [['id'], ['_controller' => 'App\\Controller\\StudentController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'student_index' => [['id'], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'student_show' => [['id'], ['_controller' => 'App\\Controller\\StudentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'student_edit' => [['id'], ['_controller' => 'App\\Controller\\StudentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'student_delete' => [['id'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
];
