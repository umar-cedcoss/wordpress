<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>
<?php
/**
 * This is a description for header template file.
 *
 * @package mytheme
 */

bloginfo( 'name' ); ?>|<?php bloginfo( 'description' ); ?></title>



<?php

wp_head();


?>
</head>

<body>
<!-- Navigation -->
<div class="custom-logo"><?php the_custom_logo(); ?></div>
<div class="container">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->heigth; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">

<?php
	wp_nav_menu(
		array(
			'menu'       => 'primary-menu',
			'container'  => '',
			'items_wrap' => '<ul class="nav navbar-nav navbar-right headerMenu">%3$s</ul>',
		)
	);
	?>
</div>
</div>
</nav>
