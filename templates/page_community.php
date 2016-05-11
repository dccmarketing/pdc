<?php
/**
 * Template Name: Community
 *
 * Description: Community page
 *
 * @package PDC
 */

get_header();

	?><div id="primary" class="content-area community">
		<main id="main" class="site-main" role="main">
			<header class="page-header contentpage"><?php

				the_title( '<h1 class="page-title">', '</h1>' );

			?></header><!-- .entry-header --><?php

			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="page-content"><?php

						the_content();

					?></div><!-- .entry-content -->
					<div class="file-boxes"><?php

					for ( $i = 1; $i < 3; $i++ ) {

						?><div class="box-info">
							<h3 class="header-landfill"><?php the_field( 'box_' . $i . '_title' ); ?></h3><?php

							the_field( 'box_' . $i . '_content' );

						?></div><?php

					}

					?></div>
				</article><!-- #post-## --><?php

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();