<?php

/*
var_dump($_GET['controller']);
var_dump($_GET['action']); 
 * 
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

function showError404() {
    require_once 'Controller/ErrorController.php'; 
    $error = new ErrorController();
    echo $error->error404Action();
}    

if(!isset($_GET['controller']) && !isset($_GET['action']))
{
    $_GET['controller'] = 'index';
    $_GET['action']     = 'index';
} 
    
// the controller name is the name given in URL + the text Controller
$controllerName = $_GET['controller'] . 'Controller';

$filename = 'Controller/' . $controllerName . '.php';
if (file_exists($filename)) {
    // import the given controller from the Controller folder
    require_once $filename;
    
    if(class_exists($controllerName)){
        // $authcontroller = new AuthController();
        $controller = new $controllerName(); // create an object of the given controller

        $actionName = $_GET['action'] . 'Action'; // get the action from URL
        // echo $authcontroller->login();
        
        if (method_exists($controller, $actionName)){
            echo $controller->$actionName(); // call the action in the object created above
        } else {
            showError404();
        }
        
    } else {
        showError404();
    }
    
} else { 
    showError404();
}
