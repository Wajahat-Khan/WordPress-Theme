<?php  
/*
Theme Header File
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name') ?> - <?php  bloginfo('description') ?></title>
	<link rel="stylesheet" type="text/css" href=" <?php echo get_stylesheet_uri() ?>">
</head>
<body>
<header>
	<div class="container">
		<div class="logo">
			<a href=" <?php bloginfo('url') ?> "><img src=" <?php echo get_template_directory_uri() ?>/images/logo.png" ></a>
		</div>
		<div class="menu"></div>	
	</div>
</header>
<div class="site-content">