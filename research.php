<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Home';
?>

<!-- Page content -->
<section class="row">
    <div class="two columns">
        <?php
        // Insert the sidebar
        require_once('includes/sidebar.php');
        ?>
    </div>

	<div class="eight columns">
        <h4>Research Projects</h4>
        <?php 
        // Insert this year's projects
        require_once('files/projects.php');
        ?>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>