<?php

ini_set('display_startup_errors', "On");
ini_set('display_errors', "On");
error_reporting(-1);

// importing composer - medoo
require_once "vendor/autoload.php";

$site_url = "http://localhost/todoAppPHP";

// whoops errors
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Using Medoo namespace.
use Medoo\Medoo;

// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'todo',
    'username' => 'root',
    'password' => '',
]);