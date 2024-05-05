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
            <div class="d-flex justify-content-center">
                <lottie-player id="twelfthLottie" src=" http://170.187.231.66/~mesh5/wp-content/themes/starter_for_josh_site/images/creater.json" background="transparent" speed="1" style="width: 300px; height: auto" direction="1" mode="normal" autoplay></lottie-player>
            </div>
            <h2><?php the_field('titleforaboutme'); ?></h2>
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
        </div>
    </section>

    <!-- Portraits -->
    <section class="container-fluid articlesbg">
        <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">
                <div class="col-md-4">
                    <?php $image = get_field('articleimage1');?>
                    <img class="img-fluid" src="<?php echo esc_url($image['array']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <h4 class="article-title"><?php the_field('articletitle1'); ?></h4>
                    <p class="date" ><?php the_field('articledate1'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt1'); ?> </p>
                    <a href="<?php the_field('readmore1'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                    <?php $image = get_field('articleimage2');?>
                    <img class="img-fluid" src="<?php echo esc_url($image['array']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <h4 class="article-title"><?php the_field('articletitle2'); ?></h4>
                    <p class="date" ><?php the_field('articledate2'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
                    <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                    <?php $image = get_field('articleimage3');?>
                    <img class="img-fluid" src="<?php echo esc_url($image['array']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <h4 class="article-title"><?php the_field('articletitle3'); ?></h4>
                    <p class="date" ><?php the_field('articledate3'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
                    <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>
                </div>
            </div>
        </div>
    </section>
</body>

<?php get_footer();?>