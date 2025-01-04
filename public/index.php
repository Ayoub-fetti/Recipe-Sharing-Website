<?php
require_once '../config/database.php';
require_once '../app/init.php';

$url = isset($_GET['url']) ? explode('/' , filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : ['recipes' , 'index'];

$controllerName = ucfirst($url[0]) . 'Controller';
$method = $url[1] ?? 'index';
$params = array_slice($url, 2);

require_once "../app/controllers/$controllerName.php";
$controller = new $controllerName;
call_user_func_array([$controller, $method], $params);

?>