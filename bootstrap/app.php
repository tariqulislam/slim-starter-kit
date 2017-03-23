<?php

use Respect\Validation\Validator as v;
session_start();

require __DIR__ . '/../vendor/autoload.php';


$app = new  \Slim\App([
  'settings'=>[
    'displayErrorDetails'=>true,
    'db'=>[
       'driver'=>'mysql',
       'host'=>'localhost',
       'database'=>'erp',
       'username'=>'root',
       'password'=>'ronnie01',
       'charset'=>'utf8',
       'collation'=>'utf8_unicode_ci',
       'prefix'=>''
    ]
  ]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->bootEloquent();
$capsule->setAsGlobal();

$container['db'] = function ($container) use ($capsule){
  return $capsule;
};

$container['validator'] = function($container){
  return new App\Validation\Validator;
};

v::with('App\\Validation\\Rules\\');

$container['HomeController'] = function($container){
  return new \App\Controllers\HomeController($container);
};

require __DIR__ . '/../app/routes.php';
