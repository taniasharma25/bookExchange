<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// $route = isset($_GET['route']) ? $_GET['route'] : "home";
$route =  isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "/home";
// echo "<pre>";
// print_r($_SERVER["PATH_INFO"] ? $_SERVER["PATH_INFO"] : "/home" );
// echo "</pre>";
// die("jj");

include "./config.php";
// print_r($conn);
// die;


$excludeHeaders = [
   "/signIn",
   "/signUp",
   "/dashboard",
   // "/uploadForm"
];

if (!in_array($route, $excludeHeaders)){
   include "./partials/header.php";   
}


switch ($route) {
   case '/home':
      include "./frontend/home/home.php";
      break;
   case '/signIn':
      include "./account/signIn.php";
      break;
   case '/signUp':
      include "./account/signUp.php";
      break;
   case '/logOut':
      include "./account/logOut.php";
      break;
   case '/dashboard':
      include "./frontend/dashboard/dashboard.php";
      break;   
   case '/uploadForm':
      include "./frontend/dashboard/book/uploadForm.php";
      break; 
   
   default:
      echo "404 page";
      break;
}
if (!in_array($route, $excludeHeaders)){
   include "./partials/footer.php";
}


