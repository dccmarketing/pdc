<?php
/**
 * Template Name: Landfill
 *
 * Description: Landfill info page
 *
 * @package PDC
 */

get_header();

	?><div id="primary" class="content-area landfill">
		<main id="main" class="site-main" role="main">
			<h1 class="title-template"><?php esc_html_e( 'Landfills and Transfer Stations', 'pdc' ); ?></h1><?php

			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="page-header contentpage"><?php

						the_title( '<h2 class="page-title">', '</h2>' );

					?></header><!-- .entry-header -->
					<div class="info-boxes"><?php

					for ( $i = 1; $i < 5; $i++ ) {

						?><div class="box-info">
							<h3 class="header-landfill"><?php the_field( 'box_' . $i . '_title' ); ?></h3><?php

							the_field( 'box_' . $i . '_content' );

						?></div><?php

					}

					?></div>
					<h2 class="sub-title"><?php esc_html_e( 'Quick Facts', 'pdc' ); ?></h2>
					<div class="page-content"><?php

						the_content();

					?></div><!-- .entry-content -->
				</article><!-- #post-## --><?php

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();