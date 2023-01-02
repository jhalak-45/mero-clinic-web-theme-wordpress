<?php get_header() ?>
<div class="container-fluid">
    <div class="news-details single-page row">
        <div class="news-content p-3 mt-1  col-md-8">
           
        <div class="title" style="font-size: 30px; color:black;">
                <?php the_title() ?>
            </div>
            <div class="thumbnail">
                <img src="<?php the_post_thumbnail_url() ?>" height="80%" width="100%">
            </div>
            
            <div class="excerpt" style="font-size: 23px; color:red;">
                <?php the_excerpt() ?>
            </div>
            <?php the_content(); ?>
            <div class="comment-form p-0">
                <?php comment_form() ?>
            </div>
        </div>
        <div class="col-md-4"  >
            <?php get_sidebar() ?>
        </div>
    </div>

</div>


<?php get_footer() ?>