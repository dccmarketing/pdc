<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package PDC
 */

			?></div><!-- .wrap -->
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap wrap-footer"><?php

				get_template_part( 'template-parts/content', 'footer' );

			?></div><!-- .wrap-footer -->
		</footer><!-- #colophon -->
	</div><!-- .not-header -->
</div><!-- #page --><?php

wp_footer();

?></body>
</html>