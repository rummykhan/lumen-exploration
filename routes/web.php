<?php

$app->get('/', function () {
    return response()->json(["message" => 'Unauthorized! goto ' . url('/api/v1/login') . ' to authenticate.'], 401);
});