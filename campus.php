<?php 
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Campus';
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
        <h4>Campus</h4>
        <h5>University of Central Florida Campus</h5>
        <a href="./images/campus.jpg"><img class="album-thumb" src="./images/campus.jpg"></a>
        <p>
            <a href="http://map.ucf.edu/">To view an interactive map, click here.</a>
        </p>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>