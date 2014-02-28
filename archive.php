<?php
/**
 * @package ttf-start
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

<header class="section-header">
	<?php get_template_part( 'partials/section', 'title' ); ?>
	<?php get_template_part( 'partials/section', 'description' ); ?>
</header>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/content', 'archive' ); ?>

	<?php endwhile; ?>

	<?php _s_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'partials/content', 'none' ); ?>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
