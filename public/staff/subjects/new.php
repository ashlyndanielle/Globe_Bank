<?php 

  require_once('../../../private/initialize.php');
  $test = $_GET['test'] ?? '';

  // remember that there can't be any whitespace in the html if we are to modify
  // the headers so put this in one single php tag so there isn't any accidental
  // whitespace in the html
  if($test == '404') {
    error_404();
  } elseif( $test == '500' ) {
    error_500();
  } elseif ($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
  }
?>

<?php	$page_title = 'Create Subject' ?>
<?php	include(SHARED_PATH . '/staff_header.php') ?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
  
  <div class="subject new">
    <h1>Create Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/create.php') ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <!-- Having this hidden input insures that if the checkbox isn't checked
          a value will still be sent for "visible".  This works because if the visible
          checkbox is checked, because it's further down the page, the value for visible sent
          will be '1'. -->
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Subject" />
      </div>
    </form>
  </div>
</div>