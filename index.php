<?php
session_start();

//
define("PROJECT_ROOT_PATH", __DIR__);

require __DIR__ . "/inc/bootstrap.php";

$strMetodo = "index";
$strControlador = "HomeController";

if ($_SERVER['REQUEST_URI']!="/"){
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri = explode( '/', $uri );

  if ($uri[1]=="home") $strControlador = "HomeController";
  if ($uri[1]=="dashboard") $strControlador = "DashboardController";

  if ($uri[2]=="") $strMetodo = "index"; else $strMetodo = $uri[2];
}
require PROJECT_ROOT_PATH . "/controller/" . $strControlador . ".php";
$objControladorUsuario = new $strControlador();
$objControladorUsuario->{$strMetodo}();
