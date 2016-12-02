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

    <div class="five columns">
        <h3>22 May to 28 July, 2017 &nbsp;|&nbsp; Orlando, FL</h3>
        <h5>Hosted by the <a href="">Nanoscience Technology Center</a> at the <a href="">University of Central Florida</a></h5>
        <p>
            Women and members of demographic groups traditionally underrepresented in engineering are particularly encouraged to apply.<br><br>
            Applicants must be U.S. Citizens. Featuring cutting edge nanotechnology-inspired research and education efforts towards the development of materials and technologies for application in biotechnology and medicine.<br><br>
            Students will gain hands-on research training in topics such as adoptive cancer immunotherapy and targeted nanoparticle cancer therapy, engineering of MEMs devices and body-on-a-chip systems for proteomics research, develop nanofibers for tissue engineering, engineer smart wound healing patches, and nanomanufacturing of tunable plasmonic sensors. The research will involve both experimental and theory based learning.
        </p>
    </div>

    <div class="five columns">
        <h5>
            <b>National Science Foundation</b><br>
            Research Experiences for Undergraduates
        </h5>
        <ul>
            <li>10-week summer research for 10 students</li>
            <li>$6,000 stipend</li>
            <li>Travel and Housing will be provided</li>
            <li>Social program, team projects, industry visits and more…</li>
        </ul>
        <a href="apply.php"><button class="button-primary">Apply Now</button></a>
    </div>

</section>


<?php 
// Get footer.php
require_once('includes/footer.php');
?>