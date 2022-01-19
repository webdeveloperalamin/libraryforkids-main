<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package brxt
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="container">
        <div class="row">
            <div class="col">
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'lfk'); ?>
                        </h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lfk'); ?>
                        </p>
                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();