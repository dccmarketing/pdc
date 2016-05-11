<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link 		http://slushman.com
 * @since 		1.0.0
 *
 * @package 	PDC
 * @subpackage 	PDC/public/partials
 */

foreach ( $items->posts as $item ) {

	?><ul class="wrap-jobs"><?php

	include $this->get_view( $args['singleview'] );

	?></ul><?php

} // foreach