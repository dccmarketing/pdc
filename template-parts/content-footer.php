<?php
/**
 * The template part for displaying the copyrigh and site credits.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package PDC
 */

?><div class="site-info">
	<div class="copyright"><?php

		printf( esc_html__( 'All contents &copy; %1$s ', 'pdc' ), date( 'Y' ) );

		?><a href="<?php echo esc_url( get_admin_url(), 'pdc' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
		<address>4700 N Sterling Avenue<br>Peoria, IL 61615</address><?php

		printf( esc_html__( 'Phone: %1$s', 'pdc' ), '<a href="tel:3096880760">(309) 688-0760</a>' );

	?></div>
</div><!-- .site-info -->