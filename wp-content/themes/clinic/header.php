<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title> <?php bloginfo() ?></title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7726924a08.js" crossorigin="anonymous"></script>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
</head>

<body <?php body_class() ?> class="container-fluid">
    <div class="loader shadow"></div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm container-fluid  mt-0 navbar-sitcky sticky-top">
        <div class="logo navbar-brand p-0">
            <?php the_custom_logo(); ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container_class' => 'justify-content-left',
                'container_id'    => 'primarymenu',
                'menu_class'      => 'navbar-nav   primary-menu menu-item',
                'a_class' => 'nav-link dropdown-toggle ',
                'li_class' => 'nav-item dropdown-item',
                'active_class' => 'active',
                // 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                //'walker'          => new WP_Bootstrap_Navwalker(),

            ));
            ?>
        </div>

        </div>
        <?php echo do_shortcode('[gtranslate]'); ?>

    </nav>