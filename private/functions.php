<?php

  function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = '/' . $script_path;
    }
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
?>
