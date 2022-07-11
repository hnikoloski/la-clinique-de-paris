<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-scroll-container>
    <?php wp_body_open();
    $custom_logo_id = get_theme_mod('custom_logo');
    $logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
    require('template-parts/preloader.php');
    ?>
    <div id="page" class="site animsition">
        <header id="masthead" class="site-header">
            <div class="container">
                <a href="<?= home_url(); ?>" class="logo-wrapper d-block">
                    <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>">
                </a>
                <div id="menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav id="site-navigation-left" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->