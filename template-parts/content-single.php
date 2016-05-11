<?php
/**
 * @package PDC
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contentsingle"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->

	<div class="entry-content"><?php

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
</article><!-- #post-## -->