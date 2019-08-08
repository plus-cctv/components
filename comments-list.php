<?php
/**
 * Comments list.
 *
 * @package Plus
 */

?>
<div class="comment-list">
	<?php
		wp_list_comments( [
			'style' => 'div',
			'walker' => new Walker_Comment_plus(),
			'short_ping' => true,
		] );
	?>
</div><!-- .comment-list -->
