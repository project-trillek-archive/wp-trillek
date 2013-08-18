<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
<?php the_content(); ?>

<?php endwhile; else: ?>
<p>No posts match your criteria.</p>
<?php endif; ?>

<div class='pagination'>
	<div class='previous-page button-container'><?php previous_posts_link(); ?></div>
	<div class='next-page button-container'><?php next_posts_link(); ?></div>
</div>

<?php get_footer(); ?>