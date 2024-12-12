<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New Theme</title>

	<?php wp_head();?>	
</head>


<body>

<header>
	<div class="container">
	<?php 
		wp_nav_menu(
			array(
				'theme_lacation'=>'desktop-menu',
			)

		);

	?>
	</div>
</header>	