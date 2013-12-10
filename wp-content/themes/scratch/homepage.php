<?php
/**
 Template Name: Homepage
 */

get_template_part('header-supersized'); ?>

	<section id="primary" class="content-area">
		<article id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>



		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</article><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>