<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo home_url() ?>"><?php custom_logo() ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'ul', 'menu_class' => 'navbar-nav mr-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new wp_bootstrap_navwalker())); ?>
            <?php get_search_form() ?>
        </div>
    </nav>
    <main role="main" class="flex-shrink-0 pt-5">