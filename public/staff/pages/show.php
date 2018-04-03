<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">

  <a class="action" href="<?php echo url_for('/staff/pages/index.php'); ?>">Back to List</a><br>
  
  <?php
    $id = isset($_GET['id']) ? $_GET['id'] : '1';
  
    echo "Page ID: " . h($id);
  ?>
  
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>