<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here">

    <!-- Cascading Style Sheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css"> -->

    <!-- Title -->
    <title>
        <?php
        if (function_exists('is_tag') && is_tag()) {
           single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
           wp_title(''); echo ' Archive - '; }
        elseif (is_search()) {
           echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
        elseif (is_404()) {
           echo 'Not Found - '; }
        if (is_home()) {
           bloginfo('name'); echo ' - '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
           echo ' - page '. $paged; }
     ?>
    </title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

</head>

<body>
    <!-- Header -->
    <header class="container-fluid bg1">
        <div class="container">
            <!-- NavBar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="orange">WHITKIN</span></a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PROJECTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PUBLICATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="tag">
                <h1>Games Design For the Future</h1>
            </div>
        </div>

        <?php wp_head(); ?> 
    </header>

    <!-- About -->
    <!-- <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2>GAMES &amp; LEVEL DESIGNER</h2>
            <p class="particle">... and particle wizard</p>
            <p class="about-text">My name is josh Whitkin. I’m a professional with more than 7 years of industry
                experience in Games
                Design, Level design, Scripting and Visual Effects. What makes me passionate about games is the
                combination of technology and creativity, and how multiple disciplines come together to create an
                interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.
                I always tell a story.</p>
            <div class="blocker"></div>
        </div>
    </section> -->

    <!-- Portraits -->
    <!-- <section class="container-fluid articlesbg">
        <div class="container">
            <h3 class="text-center">LATEST ARTICLES</h3>
            <div class="row">

                <div class="col-md-4">
                    <img class="img-fluid" src="images/portrait1.jpg" alt="Woman with bow">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                        STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <a class="read-more" href="#">CONTINUE READING</a>
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="images/portrait2.jpg" alt="T-posed armour">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                        STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <a class="read-more" href="#">CONTINUE READING</a>
                </div>

                <div class="col-md-4">
                    <img class="img-fluid" src="images/portrait3.jpg" alt="Map">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                        STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.
                    </p>
                    <a class="read-more" href="#">CONTINUE READING</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <!-- <footer class="container-fluid text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span
                            class="orange">WHITKIN</span></a>
                </div>
                <div class="col-md-6">
                    <p>Terms and Conditions</p>
                </div>
            </div>
        </div>
    </footer> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>