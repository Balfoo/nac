<?php

if (!function_exists('not_empty')) {
  function not_empty($fields = []){
    if (count($fields) != 0) {
      foreach ($fields as $fields) {
        if (empty($_POST[$fields]) || trim($_POST[$fields]) == "") { // Si ma variable est vide OU lorsque j'enlève tous les espaces c'est vide
          return false;
        }
      }

      return true;
    }
  }
}

if (!function_exists('redirect_intention')) {
  function redirect_intention($default_url){
    if ($_SESSION['forwarding_url']) {
      $url = $_SESSION['forwarding_url'];
    }
    else {
      $url = $default_url;
    }
    redirect($url);
  }
}
if (!function_exists('set_flash')) {
  function set_flash($message, $type = "info"){
    $_SESSION['notification']['message'] = $message;
    $_SESSION['notification']['type'] = $type;
  }
}
