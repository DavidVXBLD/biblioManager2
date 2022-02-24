<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'book' => [[], ['_controller' => 'App\\Controller\\BookController::index'], [], [['text', '/book']], [], [], []],
    'book_listing' => [[], ['_controller' => 'App\\Controller\\BookController::listing'], [], [['text', '/book/listing']], [], [], []],
    'book_create' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/book/create']], [], [], []],
    'book_edit' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/edit']], [], [], []],
    'book_delete' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/delete']], [], [], []],
    'book_borrow' => [['id'], ['_controller' => 'App\\Controller\\BookController::borrow'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/borrow']], [], [], []],
    'book_return' => [['id'], ['_controller' => 'App\\Controller\\BookController::returnBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/return']], [], [], []],
    'client' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client']], [], [], []],
    'client_listing' => [[], ['_controller' => 'App\\Controller\\ClientController::listing'], [], [['text', '/client/listing']], [], [], []],
    'client_details' => [['id'], ['_controller' => 'App\\Controller\\ClientController::showClient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/details']], [], [], []],
    'client_create' => [[], ['_controller' => 'App\\Controller\\ClientController::createclient'], [], [['text', '/client/create']], [], [], []],
    'client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::updateclient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/edit']], [], [], []],
    'client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::deleteclient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/delete']], [], [], []],
];
