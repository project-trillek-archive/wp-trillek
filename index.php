<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div class='post'>
	<div class='post-head'>
		<div class='post-title'>
			<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
		</div>

		<div class='post-meta'>
			<p>Posted by <?php the_author(); ?> on <?php the_date() ?></p>
			<p><?php the_category(); ?></p>
		</div>

		<div class='post-tags'>
			<p><?php the_tags(); ?></p>
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

<div class='content-text'>
	<div class='pagination'>
		<div class='previous-page button-container'><?php previous_posts_link(); ?></div>
		<div class='next-page button-container'><?php next_posts_link(); ?></div>
	</div>
</div>

<?php get_footer(); ?>