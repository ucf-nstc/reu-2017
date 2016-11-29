<?php 
    ob_start(); // store markup in a buffer so we can replace things like 'title' dynamically 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><!--TITLE--> | REU</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Lato:400,300,600" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Merriweather:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- UCF Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>

</head>
<body class="">

<header>
    <div class="hero" style="background:url('images/back.png');">
        <div class="container">
            <img class="column twelve" src="images/white.png">
              <?php
            // Include nav
            require_once('includes/nav.php');
            ?>
        </div>
    </div>

    <!-- something fancy -->
    <div class="fancy">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div> 

</header>

<div class="container">

    <div>
      
    </div>