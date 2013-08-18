<?php get_header(); ?>

<div class='content-text filtered-post-list'>
	<?php if (is_category()): ?>
	<h1>Category: <?php single_cat_title(); ?></h1>
	<?php elseif (is_tag()): ?>
	<h1>Tag: <?php single_tag_title(); ?></h1>
	<?php elseif (is_search()): ?>
	<h1>Search: <?php echo get_search_query(); ?></h1>
	<?php endif; ?>
</div>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div <?php post_class(); ?>>
	<div class='post-head'>
		<div class='post-title'>
			<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
		</div>

		<div class='post-meta'>
			<p>Posted by <?php the_author(); ?> on <?php the_date() ?> at <?php the_time(); ?></p>
		</div>
	</div>

	<div class='content-text'>
		<div class='post-content'>
			<?php the_content(); ?>
		</div>

		<div class='post-taxonomy'>
			<p>Categories: <?php the_category(', '); ?></p>
			<p><?php the_tags(); ?></p>
		</div>

		<div class='post-comments'>
			<?php comments_template(); ?>
		</div>
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