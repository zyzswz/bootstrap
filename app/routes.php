<?php
/* @var Phwoolcon\Router $this */

$this->prefix('/api', [
    'GET' => [
        '/' => function () {
            return Phalcon\Di::getDefault()
                ->getShared('response')
                ->setJsonContent(['content' => 'Phwoolcon Bootstrap'])
                ->setHeader('Content-Type', 'application/json');
        },
    ],
], 'DisableSessionFilter')->prefix('/admin', [
    'GET' => [
        '/:params' => 'Admin\Controllers\AccountController::missingMethod',
        '/' => 'Admin\Controllers\AccountController::getIndex',
        '/login' => 'Admin\Controllers\AccountController::getLogin',
    ],
    'POST' => [
        '/login' => 'Admin\Controllers\AccountController::postLogin',
    ],
]);

return [
    'GET' => [
        '/' => function () {
            return '<!DOCTYPE html><html><head><title>Phwoolcon Bootstrap</title></head><body><h1 style="margin:100px 0;text-align:center;">Welcome to Phwoolcon</h1></body></html>';
        },
    ],
];
