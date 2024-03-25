<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'foce'); ?>
        </a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">

                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
                <div class="burger">
                    <span class="top_bar"></span>
                    <span class="middle_bar"></span>
                    <span class="bottom_bar"></span>

                    <ul class="nav_menu">
                        <div class="nav_container">
                            <li><a href="#story" class="nav_link">Histoire</a></li>
                            <li><a href="#characters" class="nav_link">Personnages</a></li>
                            <li><a href="#place" class="nav_link">Lieu</a></li>
                            <li><a href="#studio" class="nav_link">Studio Koukaki</a></li>
                        </div>
                    </ul>

                    <div class="logo_menu">
                        <img id="#logo_menu" class="logo_mini"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/mini_foce.png' ?>"
                            alt="Logo Koukaki">
                    </div>

                    <div class="flowers_menu">
                        <img class="orchid_burger"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png' ?>"
                            alt="Fleur d'orchidée">
                        <img class="sunflower_burger"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png' ?>"
                            alt="Fleur de paquerette">
                        <img class="flower_burger"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png' ?>"
                            alt="Fleur orange">
                        <img class="random_flower_burger"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png' ?>"
                            alt="Fleur rose">
                        <img class="hibiscus_burger"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png' ?>"
                            alt="Fleur d'hibiscus">
                    </div>

                    <div class="cats_menu">
                        <img class="purple_cat"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/purple_cat.png' ?>"
                            alt="Tête de chat violet">
                        <img class="grey_cat"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/grey_cat.png' ?>"
                            alt="Tête de chat gris">
                        <img class="orange_cat"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orange_cat.png' ?>"
                            alt="Tête de chat orange">
                    </div>

                    <div class="copyr_menu">
                        <p class="copyr_burger">STUDIO KOUKAKI</p>
                    </div>
                </div>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->