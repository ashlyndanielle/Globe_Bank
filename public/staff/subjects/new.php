<?php require_once('../../../private/initialize.php');


  $test = $_GET['test'] ?? '';

  // remember that there can't be any whitespace in the html if we are to modify
  // the headers
  if($test == '404') {
    error_404();
  } elseif( $test == '500' ) {
    error_500();
  } elseif ($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
  } else {
    echo 'No error';
  }
?>