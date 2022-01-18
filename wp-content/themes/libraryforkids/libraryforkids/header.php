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
                        <div class="col-md-3 col">
                            <div class="site-branding">
                                <?php
                                if (has_custom_logo()) { ?>
                                    <div class="lfk-logo">
                                        <?php the_custom_logo(); ?>
                                    </div>                                    
                                <?php
                                } else {
                                    ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1><?php
                                }
                                ?>
                            </div><!-- .site-branding -->
                        </div>
                        <div class="col-md-9 col">
                            <div class="d-flex justify-content-end align-items-center header-right">
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'primary-menu',
                                        )
                                    );
                                    ?>
                                </nav>
                                <span class="search-btn-wrapp">
                                    <i class="icofont-search"></i>
                                </span>
                                <?php if ( is_active_sidebar( 'sliding-menu' ) ) : ?>
                                <span class="menu-btn" data-bs-toggle="offcanvas" data-bs-target="#sidebar-menu">
                                    <span class="menu-line"></span>
                                    <span class="menu-line"></span>
                                    <span class="menu-line"></span>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'sliding-menu' ) ) : ?>
            <div class="sliding-menu offcanvas offcanvas-start" id="sidebar-menu">
                <div class="offcanvas-body">
                    <span type="button" class="menu-btn text-reset" data-bs-dismiss="offcanvas">
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                        <span class="menu-line"></span>
                    </span>
                    <?php dynamic_sidebar( 'sliding-menu' ); ?>
                </div>
            </div>
            <?php endif; ?>
        </header><!-- #masthead -->