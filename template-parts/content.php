<?php
/**
 * @package PDC
 */

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header justcontent"><?php

		the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );

	?></header><!-- .entry-header -->

	<div class="entry-content"><?php

			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pdc' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

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
</article><!-- #post-## -->