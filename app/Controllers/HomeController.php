<?php

namespace App\Controllers;


class HomeController{
  public function index(){

    $title = "Home";
    $css = "/SchoolManagementSystem/public/assets/css/index.css";
    $js = "/SchoolManagementSystem/public/assets/js/index.js";
    
    ob_start();

    require __DIR__ . '/../Views/pages/index.php';


    $content = ob_get_clean();

    require __DIR__ . '/../Views/layouts/main.php';
  }
  
  public function about(){
    $title = "About";
    $css = "/SchoolManagementSystem/public/assets/css/about.css";
    $js = "/SchoolManagementSystem/public/assets/js/about.js";


    ob_start();
    require __DIR__ . '/../Views/pages/about.php';
    $content = ob_get_clean();

    require __DIR__ . '/../Views/layouts/main.php';
  }
  public function contact(){

    $title = "Contact";
    $css = "/SchoolManagementSystem/public/assets/css/contact.css";
    $js = "/SchoolManagementSystem/public/assets/js/contact.js";
    ob_start();

    require __DIR__ . '/../Views/pages/contact.php';

    $content = ob_get_clean();

    require __DIR__ . '/../Views/layouts/main.php';
  }

}
