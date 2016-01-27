<?php

namespace MyApp\Controller;


class Index extends \MyApp\Controller {

  public function run(){
    if($this->isLoggedIn()) {
    //login
    header('Location: ' . SITE_URL . '/hello/calendar/views/login.php');
    exit;
   }
     
  }

}
