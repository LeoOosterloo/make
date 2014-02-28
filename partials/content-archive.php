<?php
/**
 * @package ttf-start
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php get_template_part( 'partials/entry', 'title' ); ?>
		<?php get_template_part( 'partials/entry', 'date' ); ?>
	</header>

	<div class="entry-content">
		<?php
		if ( has_excerpt() ) :
			echo wpautop( get_the_excerpt() . ttf_get_read_more() );
		else:
			the_content( ttf_get_read_more( '', '' ) );
		endif;
		?>
	</div>

	<footer class="entry-footer">
		<?php get_template_part( 'partials/entry', 'taxonomy' ); ?>
	</footer>
</article>
