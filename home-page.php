<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header();?>

<body>
    <!-- About -->
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2>
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
        </div>
    </section>

    <!-- Portraits -->
    <section class="container-fluid articlesbg">
        <div class="container">
            <h3 class="text-center">LATEST ARTICLES</h3>
            <div class="row">

                <div class="col-md-4">
                    <img class="img-fluid" src="http://170.187.231.66/~mesh5/wp-content/themes/starter_for_josh_site/images/port1.jpg" alt="Woman with bow">
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
                    <img class="img-fluid" src="http://170.187.231.66/~mesh5/wp-content/themes/starter_for_josh_site/images/port2.jpp" alt="T-posed armour">
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
                    <img class="img-fluid" src="http://170.187.231.66/~mesh5/wp-content/themes/starter_for_josh_site/images/port3.jpg" alt="Map">
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
    </section>
</body>

<?php footer();?>