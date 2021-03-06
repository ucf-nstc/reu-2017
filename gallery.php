<?php
// Get header.php and set page title
require_once('includes/header.php');
$page_title = 'Gallery';

// Get functions
require_once('includes/functions.php');
?>


<!-- Page content -->
<section class="row">
    <div class="two columns">
        <?php
        // Insert the sidebar
        require_once('includes/sidebar.php');
        ?>
    </div>

	<div class="ten columns">
        <h4>Gallery</h4>
        <h5>REU 2017</h5>
        <a href="./images/group.jpg"><img class="album-thumb" src="./images/group.jpg"></a>

        <h5>REU BRIDG Tour - 2017</h5>
        <?php display_album('reu-bridg-2017/'); ?>

        <h5>REU Picnic - Potluck 2017</h5>
        <?php display_album('potluck-2017/'); ?>

        <h5>REU 2016</h5>
        <?php display_album('reu-2016/'); ?>
    </div>

</section>

<?php
// Get footer.php
require_once('includes/footer.php');
?>
