<?php
get_header(); ?>

<div class="container-fluid p-0">
    <div class="home-section">
        <div class="row">
            <div class="col-md-7 homepage-logans">
                <h1 class="h1 text-capaitalize homepage-text-1 mt-5  p-2" data-aos="zoom-in-right"><?php the_field('text_1') ?></h1>
                <p class="text homepage-text-2 p-2 ml-2 mt-0" data-aos="zoom-in-left"><?php the_field('text_2') ?></p>
                <div class="button p-2 ml-2">
                    <a href="tel:<?php the_field('phone_number') ?>" class="btn call-btn"> Call a Doctor</a>
                </div>
            </div>
            <div class="col-md-5 homepage-image my-0">
                <img src="<?php the_field('home_image') ?>">
            </div>

        </div>

    </div>
    <div class="container-fluid">
        <?php get_template_part('partials/section', 'about') ?>
    </div>
    <div class="container-fluid">
        <?php get_template_part('partials/section', 'services'); ?>
    </div>
    <div class="container-fluid">
        <?php get_template_part('partials/section', 'ads'); ?>
    </div>
    <div class="container-fluid">
        <?php get_template_part('partials/section', 'doctor') ?>
    </div>

</div>

<?php get_footer() ?>