<!DOCTYPE html>
<html>
	<head lang='en'>
		<meta charset='utf-8'>
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(); ?></title>
		<link href='/stylesheets/screen.css' media='screen, projection' rel='stylesheet' type='text/css'>
		<link href='/stylesheets/print.css' media='print' rel='stylesheet' type='text/css'>
		<!--[if IE]>
			<link href='/stylesheets/ie.css' media='screen, projection' rel='stylesheet' type='text/css'>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
