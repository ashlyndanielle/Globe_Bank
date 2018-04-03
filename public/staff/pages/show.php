<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a><br>
  
  <?php
    $id = $_GET['id'] ?? '1';
  
    echo "Page ID: " . h($id);
  ?>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>