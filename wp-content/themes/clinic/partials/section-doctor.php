<h4 class="h4 p-3 text-center service-section-title mt-2">Our Doctors</h4>
<p class="text-center   quote">Best, Experienced And Qualified Doctors </p>
<div class="doctor-page  pb-5 py-4 p-0" style="background-color:f5f5f5;">

    <div class="doctors  ">
        <?php
        $args = array(
            'post_type' => 'doctor',
            'posts_per_page' => 4,
            'page' => $paged
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="doctors-profile shadow p-2 my-3" data-aos="flip-left" style="background-color: #ffffff;">
                    <div class=" doctors-image " data-aos="zoom-in-up">
                        <img src="<?php the_field('doctors_image') ?>" height="250px" width="100%">
                    </div>
                    <div class="name">
                        <h2 class=" doctor doctor-name"><?php the_field('doctor_name'); ?></h2>
                    </div>
                    <div class="doctors-qualification" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <p class="text-justify text">
                            <?php the_field('doctors_qualification') ?>
                        </p>
                    </div>

                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <?php else :  ?>
            <p class="p-4 mt-5 shadow-sm text-center h4 "><?php _e('Sorry, we cannot find any doctor profile...'); ?></p>
        <?php endif; ?>
    </div>
    <div class="view-more text-center">
        <a href="mero_clinic/doctor" class="btn  text-center" style="background-color:#0a7e73; color:white; font-family:'lato',sans-serif">View More</a>
    </div>
</div>