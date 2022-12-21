<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://github.com/ivanobruno">    
    <link rel="shortcut icon" href="/wp-content/themes/brunoivano/images/logo.png">
    <?php
    wp_head();
    ?>
</head> 
<body class="pt-4">		
	<div class="text-center text-lg-start bg-light navbar-light text-black">
	<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
		<div class="container">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full');
			?>
			<a href="http://localhost/progetti/Progetto%20Wordpress%20di%20Ivano%20Bruno/"><img class="ms-5 logo" src="<?php echo $logo[0] ?>" alt="logo" ></a>
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul class="navbar-nav ms-auto align-items-start">%3$s</ul>'
						))
				?>
		</div>
	</nav>
</div>