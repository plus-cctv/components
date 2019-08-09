<?php
/**
 * Snippet.
 *
 * @package plus
 */

if ( 'post' === get_post_type() ) {
	?>
	<div class="entry-meta"><?php plus_posted_on(); ?></div>
	<?php
}
