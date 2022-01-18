<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<footer id="colophon" class="site-footer text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-info">
                    <?php
                        printf(esc_html__('&copy; 2022 %s All rights reserved.', 'lfk'), 'Library for Kids');
                    ?>
                </div><!-- .site-info -->
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>