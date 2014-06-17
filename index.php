<?php

/*
var_dump($_GET['controller']);
var_dump($_GET['action']);
 * 
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


require_once 'Controller/' .$_GET['controller'].'Controller.php';

$authcontroller = new AuthController();

echo $authcontroller->login();
