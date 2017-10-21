<?php

$app->get('/', function (\Laravel\Lumen\Application $app) {
    $authManager = $app->make('auth');

    dd($authManager->user());

    return app()->version();
});