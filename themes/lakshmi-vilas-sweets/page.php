<?php
/**
 * The template for displaying all pages.
 *
 * @package Neve
 * @since   1.0.0
 */

get_header();

?>
<div class="<?php echo esc_attr( $container_class ); ?> container">
	<div class="row">
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
