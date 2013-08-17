<!DOCTYPE html>
<html>
	<head lang='en'>
		<meta charset='utf-8'>
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(); ?></title>
		<link rel='stylesheet' type='text/css' href='<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css'>
		<?php wp_head(); ?>
	</head>

	<body>
		<div class='container'>
			<div class='header'>
				<div class='splash'>
					<img class='splash-background' src='http://placehold.it/624x300'>
				</div>

				<?php
				wp_nav_menu(array(
					'theme_location' => 'trillek_main_menu',
					'menu_class' => 'navigation',
					'link_after' => '<div class=\'triangle\'></div>',
					'container' => false,
					'fallback_cb' => false,
				));
				?>
			</div>

			<div class='content'>
				<div class='content-text'>
