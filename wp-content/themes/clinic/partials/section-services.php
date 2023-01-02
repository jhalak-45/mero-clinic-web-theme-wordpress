<h4 class="h4 p-3 text-center service-section-title mt-2">Our Services</h4>
    <p class="text-center   quote">Safe, Standard and Satisfying Services</p>
<div class="service-section p-1">


    <?php

    $args = array(
        'post_type' => 'service',
        'posts_per_page' => 14,
    );

    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <a href="mero_clinic/services">

                <div class="services  m-1 text-capitalize " data-aos="flip-left">
                    <div class="service-image  text-center">
                        <img src="<?php the_field('service_image') ?>" height="130px" width="100px">
                    </div>
                    <div class="service-title p-1">
                        <h2 class="h2 p-2 mt-2"><?php the_field('service_name') ?></h2>
                    </div>
                </div>
            </a>


        <?php endwhile;
        wp_reset_postdata(); ?>
    <?php endif; ?>
</div>