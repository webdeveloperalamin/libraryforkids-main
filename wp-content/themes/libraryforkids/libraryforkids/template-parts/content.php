<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lfk
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php lfk_post_thumbnail(); ?>
	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col col-content">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						lfk_posted_by();
						lfk_posted_on();				
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				</div>
			</div>
		</div>		
	</header><!-- .entry-header -->	

	<div class="entry-content">
		<div class="container">
				<div class="row">
					<div class="col col-content">
						<?php
						if (is_home() && is_front_page()) {
							the_excerpt();
							?>
							<a class="btn-readmore" href="<?php the_permalink();?>"><?php esc_html_e('Read more', 'lfk'); ?></a>
							<?php
						} else {
							the_content(
								sprintf(
									wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lfk' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								)
							);
						}


						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lfk' ),
								'after'  => '</div>',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="container">
			<div class="row">
				<div class="col col-content">
					<?php lfk_entry_footer(); ?>
				</div>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
