<!-- file path is used as opposed to browser path -->
<?php require_once('../../private/initialize.php'); ?>

<!-- variables declared above included files will be aviable in the included files -->
<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

  <div id="content">
    <div id="main-menu">
      <h2>Main Menu</h2>
      <ul>
        <!-- 
          a forward slash indicates an ABSOLUTE url when hardcoding the href
          /subjest/index.php will go to localhost/subjects/index.php instead of
          going to http://localhost/~ashlynmitros/globe_bank/public/staff/subjects/index.php
        -->
        <li><a href="<?php echo url_for("/staff/subjects/index.php")?>">Subjects</a></li>
        <li><a href="<?php echo url_for("/staff/pages/index.php")?>">Pages</a></li>
      </ul>
    </div>
    
  </div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>