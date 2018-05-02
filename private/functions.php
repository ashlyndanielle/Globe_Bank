<?php

  function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = '/' . $script_path;
    }
    // url path up to public + $script_path
    return WWW_ROOT . $script_path;
  }

  // shorter function call for urlencode for ease of use
  function u($string="") {
    return urlencode($string);
  }

  // shorter call for rawurlencode
  function raw_u($string="") {
    return rawurldecode($string);
  }

  function h($string="") {
    return htmlspecialchars($string);
  }

  function error_404() {
    // safer to use $_SERVER["SERVER_PROTOCOL"] instead of "HTTP/1.1 404 Not Found" incase
    // it ever changes
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    // you could render a 404 php page here instead if you wish
    exit();
  }

  function error_500() {
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    exit();
  }

  // redirect function
  function redirect_to($location) {
    return header('Location: ' . $location);
    exit();
  };
?>
