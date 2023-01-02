<div class="about-us row  p-2 my-1" data-aos="fade-right">
    <h2 class="h2 text-uppercase  p-2 about-title"><?php bloginfo() ?></h2>

    <div class="col-md-6 text ">
        <div class="clinic-about " data-aos="fade-down-right">
            <p class="about">
                <?php the_field('about_clinic',8) ?>
            </p>
        </div>
    </div>
    <div class="col-md-6 image " data-aos="zoom-out-left">
        <img src="<?php the_field('clinic_image',8) ?>" height="100%" width="100%" data-aos="flip-left">

    </div>
</div>

