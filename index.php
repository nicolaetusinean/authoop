<?php

/*
var_dump($_GET['controller']);
var_dump($_GET['action']);
 * 
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


// the controller name is the name given in URL + the text Controller
$controllerName = $_GET['controller'] . 'Controller';
// import the given controller from the Controller folder
require_once 'Controller/' . $controllerName . '.php';
// $authcontroller = new AuthController();
$controller = new $controllerName(); // create an object of the given controller

$actionName = $_GET['action']; // get the action from URL
// echo $authcontroller->login();
echo $controller->$actionName(); // call the action in the object created above
