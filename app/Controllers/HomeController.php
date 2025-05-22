<?php

namespace App\Controllers;


class HomeController{
  public function index(){

    $title = "Home";
    $css = "/SchoolManagementSystem/public/assets/css/index.css";
    
    ob_start();
    require __DIR__ . '/../Views/pages/index.php';
    $content = ob_get_clean();

    require __DIR__ . '/../Views/layouts/main.php';
  }
  
  public function about(){
    $title = "About";
    $css = "/SchoolManagementSystem/public/assets/css/about.css";
    ob_start();
    require __DIR__ . '/../Views/pages/about.php';
    $content = ob_get_clean();

    require __DIR__ . '/../Views/layouts/main.php';
  }

}