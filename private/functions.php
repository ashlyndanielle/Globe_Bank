<?php

  // find browser url for path starting from public
  function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = '/' . $script_path;
    }
    // url path up to public + $script_path
    return WWW_ROOT . $script_path;
  }

  // shorter function call for urlencode (query string)
  function u($string="") {
    return urlencode($string);
  }

  // shorter call for rawurlencode (path string)
  function raw_u($string="") {
    return rawurldecode($string);
  }
  // shorter call for dynamic html protection
  // use anytime you're rendering data that comes from elsewhere
  // ( from a user, database, cookie... )
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

  // check if a request is POST
  function is_post_request() {
    return ($_SERVER['REQUEST_METHOD'] == 'POST');
  }
  // check if request is GET
  function is_get_request() {
    return ($_SERVER['REQUEST_METHOD'] == 'GET');
  }
?>
