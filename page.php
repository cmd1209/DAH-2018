<?php 
/* Template Name: start
*/
 ?>
<?php get_header(); ?>
<!-- <h1><?php the_title(); ?></h1> -->
<?php get_template_part('hero'); ?>
<?php get_template_part('news'); ?>
	<main role="main">
		<section>
			<div class="wrapper">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
		<?php endif; ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
