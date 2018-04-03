<?php require_once('../../../private/initialize.php'); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="action" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Back to List</a><br>
  <?php
  // built in get function returns items from the url in an associative array
  
    $id = isset($_GET['id']) ? $_GET['id'] : '1';
    // for php 7 and up you can use the below statement
    // $id = $_GET['id'] ?? '1';
  
    // help with cross-site scripting
    echo h($id);
  ?>
  <br>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>