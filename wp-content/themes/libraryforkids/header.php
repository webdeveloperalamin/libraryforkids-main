<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kct
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
        <header id="masthead" class="site-header">
            <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'kct'); ?></a>
            <div class="header-logo-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col">
                            <div class="site-branding">
                                <?php
if (has_custom_logo()) {
    ?>
                                <div class="lfk-logo">
                                    <?php the_custom_logo(); ?>
                                </div>
                                <?php ?>
                                <?php
} else {
    ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a></h1><?php
}
?>
                            </div><!-- .site-branding -->
                        </div>
                        <div class="col-md-6 col">
                            <div class="header-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-area">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-md-12 col">
                            <div class="site-open-menu-wrapper">

                                <div class="site-open-menu">
                                    <span></span>
                                </div>
                            </div>

                            <div class="site-menu-overlay"></div>
                            <nav id="site-navigation" class="main-navigation">
                                <div class="site-close-menu">
                                    <span></span>
                                </div>
                                <?php
wp_nav_menu(
    array(
        'theme_location' => 'primary-menu',
        'menu_id'        => 'primary-menu',
    )
);
?>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->