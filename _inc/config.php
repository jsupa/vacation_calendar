<?php

require_once 'vendor/autoload.php';


use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'creepydb',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root'
]);