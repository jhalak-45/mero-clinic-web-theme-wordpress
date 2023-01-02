<?php get_header(); ?>
<div class="container-fluid ">
    
    <h4 class="h4 p-3 text-center servicepage-title">About Us</h4>
    <div class="about-us row shadow-sm p-2 my-1" data-aos="fade-right">
        <h2 class="h2 text-uppercase  p-2 about-title"><?php bloginfo() ?></h2>

        <div class="col-md-6 text ">
            <div class="clinic-about " data-aos="fade-down-right">
                <p class="about">
                    <?php the_field('about_clinic') ?>
                </p>
            </div>
        </div>
        <div class="col-md-6 image " data-aos="zoom-out-left">
            <img src="<?php the_field('clinic_image') ?>" height="100%" width="100%" data-aos="flip-left">

        </div>
    </div>
    <div class="mission shadow-sm p-2 my-1" data-aos="fade-left">
        <h2 class="h2 text-uppercase  about-title p-2">Our Mission</h2>
        <div class="icon">
        <img src="<?php the_field('mission_image') ?>" height="200px" width="200px" data-aos="flip-left">

        </div>
        <p class="text" data-aos="flip-left">
            <?php the_field('our_mission') ?>

        </p>
    </div>
    <div class="vision shadow-sm p-2 my-1" data-aos="fade-right">
        <h2 class="h2 text-uppercase  about-title p-2">Our vision</h2>
        <div class="icon">
        <img src="<?php the_field('vision_image') ?>" height="200px" width="200px" data-aos="flip-right">

        </div>
        <p class="text "data-aos="fade-down-right">
            <?php the_field('our_vision') ?>
        </p>
    </div>
   

</div>
<?php get_footer() ?>