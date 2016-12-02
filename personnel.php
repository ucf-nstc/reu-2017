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

	<div class="ten columns">
        <h4>Personnel</h4>
        <h5>REU Coordinators</h5>

        <!-- Gesquiere -->
        <div class="container no-margin">
            <div class="person row">
                <div class="columns three">
                    <img src="images/gesquiere.jpeg">
                </div>
                <div class="columns nine">
                    <span>
                        <a href="http://www.nanoscience.ucf.edu/faculty/gesquiere.php">Andre J. Gesquiere</a>, Ph.D., Associate Professor<br>
                        Joint Appointments in NanoScience Technology Center, Center for Research and Education in optics and Lasers, Materials Science and Engineering and Chemistry<br><br>
                        Research Focus: Imaging and spectroscopy of nanoscale materials and biological systems
                    </span>
                </div>
            </div>

            <!-- Seal -->
            <div class="person row">
                <div class="columns three">
                    <img src="images/seal.jpg">
                </div>
                <div class="columns nine">
                    <span>
                        <a href="http://sudipta-seal.ucf.edu/">Sudipta Seal</a>, Ph.D., Pegasus Professor, University Distinguished Professor<br>
                        Director, NanoScience Technology Center and Advanced Materials Processing & Analysis Center 
                        Nano Initiative Coordinator at UCF<br> 
                        Director of Surface Engineering & Nanotech Lab, DURIP Nanomanufacturing Lab<br>
                        Joint Appointment in AMPAC and Professor: Mechanical, Materials & Aerospace Engineering<br><br>
                        Research Focus: Functionals Materials Processing including Nano/Micro, Bulk Nanomanufacturing, Nanobiotechnology, Surface Engineering, Coatings, Nanoenergetics, Nanotoxicity, and Advanced Analytical Tools
                    </span>
                </div>
            </div>


        </div>

        <h5>Research Mentors</h5>
        <ul>
            <li>Alicja Copik (BSBM)</li>
            <li>Steve Ebert (BSBM)</li>
            <li>Andre Gesquiere (NSTC, Chemistry, CREOL, MSE) James Hickman (NSTC, Chemistry, BSBM, MSE, CECS)</li>
            <li>Swadeshmukul Santra (NSTC, Chemistry, MSE, BSBM) Sudipta Seal (NSTC, AMPAC, MAE, MSE)</li>
            <li>William Self (BSBM)</li>
            <li>Jayan Thomas (NSTC, CECS, CREOL)</li>
            <li>Lei Zhai (NSTC, Chemistry, MSE)</li>
            <li>Shengli Zou (Chemistry)</li>
        </ul>
    </div>

</section>

<?php 
// Get footer.php
require_once('includes/footer.php');
?>