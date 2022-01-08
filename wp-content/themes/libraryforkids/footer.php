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
                    <a href="<?php echo esc_url(__('https://libraryforkids.com/', '_s')); ?>">
                        <?php
/* translators: %s: CMS name, i.e. WordPress. */
printf(esc_html__('All rights reserved by %s', '_s'), 'Library for Kids');
?>
                    </a>
                </div><!-- .site-info -->
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>