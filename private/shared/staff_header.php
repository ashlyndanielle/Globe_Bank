<?php
  if(!isset($page_title)) {
    $page_title = 'Staff Area';
  }
?>


<!doctype html>

<html lang="en">
  <head>
    <!-- there *could* be a use for dynamic data in the title so use the html escape -->
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <!-- example using the function -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url_for('stylesheets/staff.css'); ?>">
  </head>

  <body>

    <header>
      <h1>GBI Staff Area</h1>
    </header>

    <nav>
      <ul>
        <!-- example without the function -->
        <li><a href="<?php echo WWW_ROOT . "/staff/index.php"; ?>">Menu</a></li>
      </ul>
    </nav>