<?php get_header(); ?>
<div class="container-fluid">
    <div class="service-page p-1 shadow">
        <h4 class="h4 p-3 text-center servicepage-title mt-2 ml-2">Our Services</h4>


        <?php

        $args = array(
            'post_type' => 'service',
            'posts_per_page' => 12
        );

        $query = new WP_Query($args);
        $a = true;
        ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if ($a == true) {
                ?>
                    <div class="services p-2 m-1 text-capitalize ">
                        <div class="service-title mb-4 " data-aos="fade-right">
                            <h2 class="h2 p-2 mt-3"><?php the_field('service_name') ?></h2>
                        </div>

                        <div class="row p-3">
                            <div class="service-image p-1 col-md-6" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                                <img src="<?php the_field('service_image') ?>" height="100%" width="90%">
                            </div>
                            <div class="service-content p-2 col-md-6" data-aos="zoom-out-right">
                                <p class="text"><?php the_field('service_detail') ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    $a = false;
                } else {
                ?>
                    <div class="services p-2 m-0 text-capitalize  ">
                        <div class="service-title mb-4" data-aos="fade-left">
                            <h2 class="h2 p-2 mt-3"><?php the_field('service_name') ?></h2>
                        </div>

                        <div class="row p-3">
                            <div class="service-content p-2 col-md-6" data-aos="fade-up" data-aos-duration="2000">
                                <p class=" text w-100 h-100"><?php the_field('service_detail') ?></p>
                            </div>
                            <div class="service-image p-1 col-md-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                                <img src=" <?php the_field('service_image') ?>" height="100%" width="90%">
                            </div>

                        </div>
                    </div>


                <?php $a = true;
                } ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <?php else :  ?>
            <p class="p-4 mt-5 shadow-sm text-center h4 "><?php _e('Sorry, there are no any posts created by admin.'); ?></p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer() ?>