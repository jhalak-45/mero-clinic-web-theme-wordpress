<?php get_header(); ?>
<div class="container-fluid px-auto">
    <div class="page-title justify-content-center">
        <h4 class="h4 p-3 text-center servicepage-title">Our Notice</h4>
    </div>
    <div class="news-container shadow pb-5 py-4 px-auto" style="background-color:f5f5f5;">

        <?php

        if (have_posts()) : while (have_posts()) : the_post()
        ?>

                <div class="news p-2 shadow" style="width: 18.3rem; background-color:#ffffff;">
                    <div class="post-thumbnail img-fluid">
                        <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="title border-1">
                        <h5 class="h5 text-dark" style="text-align: justify; font-weight:bolder;"><?php the_title() ?></h5>
                    </div>
                    <span class="author text-capitalize mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">

                            </path>
                        </svg>

                        <?php the_author() ?>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                            <path d="M13 7h-2v6h6v-2h-4z"></path>
                        </svg>
                        <?php echo "";
                        echo get_the_time() ?>
                    </span>
                    <div class="excerpt">
                        <a href="<?php the_permalink() ?>" style="text-align:justify; padding-bottom:0px;"><?php the_excerpt() ?>

                        </a>
                    </div>

                </div>

            <?php

            endwhile;
            ?>
        <?php
        endif;

        ?>
    </div>
    <div class="pagination">
        <?php wp_pagenavi(); ?>

    </div>
</div>
<?php get_footer(); ?>