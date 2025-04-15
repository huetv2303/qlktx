<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include_once "./MVC/bridge.php";
$app = new app();


// $controller = isset($_GET['controller']) ? $_GET['controller'] : 'ThanhToan';
// $action = isset($_GET['action']) ? $_GET['action'] : 'index';

// require_once('controllers/' . $controller . '.php');
// $controller = new $controller;
// $controller->$action();
?>