<?php get_header();?>
	<h1><?php the_title(); ?></h1>
<section>
	<?php while (have_posts()): the_post();?>
		<?php the_content();?>
		<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>