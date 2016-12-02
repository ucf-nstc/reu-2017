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
        <h4>Application</h4>
        <h5>Application Packet</h5>
        <a href="files/application-packet.pdf"><button class="button" >Download PDF</button></a>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>