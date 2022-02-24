<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/book' => [[['_route' => 'book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/book/listing' => [[['_route' => 'book_listing', '_controller' => 'App\\Controller\\BookController::listing'], null, null, null, false, false, null]],
        '/book/create' => [[['_route' => 'book_create', '_controller' => 'App\\Controller\\BookController::createBook'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/listing' => [[['_route' => 'client_listing', '_controller' => 'App\\Controller\\ClientController::listing'], null, null, null, false, false, null]],
        '/client/create' => [[['_route' => 'client_create', '_controller' => 'App\\Controller\\ClientController::createclient'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/book/(?'
                    .'|edit/([^/]++)(*:64)'
                    .'|delete/([^/]++)(*:86)'
                    .'|borrow/([^/]++)(*:108)'
                    .'|return/([^/]++)(*:131)'
                .')'
                .'|/client/(?'
                    .'|de(?'
                        .'|tails/([^/]++)(*:170)'
                        .'|lete/([^/]++)(*:191)'
                    .')'
                    .'|edit/([^/]++)(*:213)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'book_borrow', '_controller' => 'App\\Controller\\BookController::borrow'], ['id'], null, null, false, true, null]],
        131 => [[['_route' => 'book_return', '_controller' => 'App\\Controller\\BookController::returnBook'], ['id'], null, null, false, true, null]],
        170 => [[['_route' => 'client_details', '_controller' => 'App\\Controller\\ClientController::showClient'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::deleteclient'], ['id'], null, null, false, true, null]],
        213 => [
            [['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::updateclient'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
