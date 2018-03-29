<?php

  // *** THESE ARE NOT TO BE USED FOR LINKS *** //
  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__)); // finds THIS file's location and get it's directory (in this case, private)
  // /globe_bank/private
  define("PROJECT_PATH", dirname(PRIVATE_PATH));  // one directory above this directory (globe_bank)
  // /globe_bank
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  // /globe_bank/public
  define("SHARED_PATH", PRIVATE_PATH . '/shared');
  // /globe_bank/private/shared

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"

  // string position of public + the seven characters in public
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  // substring upto and including public
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  // establishes root starting at public
  define("WWW_ROOT", $doc_root);


  require_once 'functions.php';

?>