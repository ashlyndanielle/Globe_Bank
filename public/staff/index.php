<!--  -->
<?php require_once('../../private/initialize.php'); ?>

<!-- variables declared here will be aviable in the files "included" below -->
<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

  <div id="content">
    <div id="main-menu">
      <h2>Main Menu</h2>
      <ul>
        <!-- don't use the forward slash: that indicates an ABSOLUTE url -->
        <li><a href="<?php echo url_for("/staff/subjects/index.php")?>">Subjects</a></li>
        <li><a href="<?php echo url_for("/staff/pages/index.php")?>">Pages</a></li>
      </ul>
    </div>
    
  </div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>