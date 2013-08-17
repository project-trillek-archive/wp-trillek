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
					<a href='/' class='splash-logo'><h1><?php bloginfo('name'); ?></h1></a>
					<img class='splash-background' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/space.jpg'>
				</div>

				<div class='navigation'>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'trillek_main_menu',
						'link_after' => '<div class=\'triangle\'></div>',
						'container' => false,
						'fallback_cb' => false,
					));
					echo get_search_form();
					?>
				</div>
			</div>

			<div class='content'>
				<div class='content-text'>
