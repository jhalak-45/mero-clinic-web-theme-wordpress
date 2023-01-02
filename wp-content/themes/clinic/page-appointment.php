<?php get_header(); ?>
<div class="container-fluid page-appointment">
    <div class="appointment-form mt-0">
        <h3 class="h3 text-capitalize text-center text-light mt-5 p-2">
            Enter your details for Appointment
        </h3>
        <div class="form  d-flex justify-content-center p-2">
            <?php echo do_shortcode('[contact-form-7 id="149" title="appointment"]'); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>