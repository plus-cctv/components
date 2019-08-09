<?php
/**
 * The footer.
 *
 * @package Plus
 */

$author = [
	'name'  => __( 'Plus! Team', 'Plus' ),
	'title' => __( 'Independent WordPress Developer', 'plus' ),
	'url'   => 'https://plus-cctv.com',
];

?>

<footer class="container" role="contentinfo">
	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
		<div class="row"><hr></div>
		<div class="row">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div>
	<?php } ?>
	<div class="row">
		<div class="col-md-12"><hr></div>
		<div class="col-md-4 col-md-offset-8">
			<p class="muted pull-right small">
				&copy; <?php echo esc_html( date( 'Y' ) ); ?>
				<span class="site-title"><?php echo esc_html( get_bloginfo( 'title' ) ); ?></span>
				<?php
				if ( apply_filters( 'plus_show_theme_author', true ) ) {
					echo '&ndash; ';
					// Translators: Author details.
					printf(
						esc_html( 'Designed by %s.', 'plus' )
						, sprintf( '<a href="%1$s" title="%2$s">%3$s</a>'
							, esc_url( $author['url'] )
							, esc_html( $author['title'] )
							, esc_html( $author['name'] )
						)
					);
				}
				?>
			</p>
		</div>
	</div>
</footer>
