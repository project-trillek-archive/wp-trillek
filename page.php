<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div <?php post_class(); ?>>
	<div class='post-head'>
		<div class='post-title'>
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class='content-text'>
		<?php the_content(); ?>
	</div>
</div>

<?php endwhile; else: ?>
<div class='content-text'>
	<p>No posts match your criteria.</p>
</div>
<?php endif; ?>

<?php get_footer(); ?>