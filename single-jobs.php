<?php
/**
 * The template for displaying all single posts.
 *
 * @package PDC
 */

$meta = get_post_custom( $item->ID );
$value = '';

if ( ! empty( $meta['job-location'][0] ) ) {

	$value = esc_attr( $meta['job-location'][0] );

}

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

		while ( have_posts() ) : the_post();

			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header contentsingle"><?php

					the_title( '<h1 class="entry-title">', '</h1>' );

				?></header><!-- .entry-header -->

				<div class="entry-content"><?php

					if ( ! empty( $value ) ) {

						?><div class="job-location"><?php esc_html_e( 'Location: ', 'now-hiring' ); echo $value ?></div><?php

					}

					the_content();

				?></div><!-- .entry-content -->
				<footer class="entry-footer"><?php

				if ( 'post' == get_post_type() ) :

					?><div class="entry-meta"><?php

						pdc_posted_on();

					?></div><!-- .entry-meta --><?php

				endif;

					?><div class="entry-meta2"><?php

						pdc_entry_footer();

					?></div>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## --><?php

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();