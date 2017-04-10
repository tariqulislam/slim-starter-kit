<?php

$app->get('/hello','HomeController:index');

$app->get('/create/token', 'AuthController:index');
