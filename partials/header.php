<?php
  
    function sayClass($page, $name) {
        if($page === $name) {
        echo "active";
        }
    }

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Vanarts Student Mock Up Project</title>
        <meta name="description" content="This is a student exercise website for teh Vancouver Institte of Media Arts">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" type="image/ico" href="favicon.ico">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Modernizr -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Icons (FontAwesome) -->
        <script src="https://use.fontawesome.com/1845926a10.js"></script>
    </head>
    <body>
    	<!-- Page Wrapper used to contain the page and add background -->
        <div class="page-wrapper">

            <!-- Start of Header -->
            <header class="header-wrapper">
                <div class="sub-header show-for-medium clearfix row-expanded">
                    <div class="sub-header-contacts">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Phone: 555 555-5555 | 333 333-3333</span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>Email: info@vanarts.com</span>
                    </div>
                    <div class="sub-header-social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row header-container">
                    
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="index.php">
                            <img class="show-for-medium" src="img/logo.svg" alt="Logo Big">
                            <img class="show-for-small-only" src="img/logosmall.svg" alt="Logo Small">
                        </a>
                    </div>

                    <!-- Navigation -->
                    <nav class="header-nav clearfix">
                        <a class="icon-resp show-for-small-only" href="javascript:void(0);" onclick="mobileMenu()">&#9776;</a>
                        <ul class="header-nav-menu clearfix">
                            <li class="<?php $page="about"; sayClass($page, $name);?>"><a href="about.php">About</a></li>
                            <li class="<?php $page="testimonials"; sayClass($page, $name);?>"><a href="testimonials.php">Testimonials</a></li>
                            <li class="<?php $page="gallery"; sayClass($page, $name);?>"><a href="gallery.php">Gallery</a></li>
                            <li class="<?php $page="prices"; sayClass($page, $name);?>"><a href="prices.php">Prices</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- End of Header -->