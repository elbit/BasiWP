<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

<<<<<<< HEAD
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>


=======
			
>>>>>>> FoundationDEV
		<?php wp_head(); ?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/css/ionicons.min.css">
	
</head>

<body <?php body_class(); ?>>
    <!-- wrapper -->
    <div class="wrapper" >
		
		<div >
	        <header id="sticker" class="top-bar" role="banner" >
	          
				<div class="top-bar-left">
				    <a href="<?php echo home_url(); ?>">
				        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" >
				    </a>  
				</div>

	          	<nav class="top-bar-right" "role="navigation">
	                <?php html5blank_nav(); ?>
	            </nav>
	            
	        </header>
		</div>

		<div class="expanded row contact-hub button-group ">
			<a href="" class="button column whatsapp" "><i class="icon ion-social-whatsapp"></i> </i>Whatsapp</a>
			<a href="" class="button column addentra" "><i class="fi-calendar icon"> </i>Cita Online</a>
			<a href="" class="button column phone" "><i class="fi-telephone icon"> </i>Teléfono</a>
			<a href="" class="button column contacto" "><i class="fi-mail icon"> </i>Contacto</a>
		</div>

		<div class="row" >

		 	<div class="column callout alert text-center" data-closable  style="z-index: 0; margin-top: -2rem;">
				    <?php			

								$args = array( 'post_type' => 'avisos', 'posts_per_page' => 1 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								 
								  echo '<p> <i class="fi-calendar icon icon-large"></i>';
								  the_content(); 
								  echo ' '; the_field('avis');  the_field('data'); echo '</p>';
								  echo '<button class="close-button" aria-label="Dismiss alert" type="button" data-close><span aria-hidden="true">&times;</span>
								  </button>';
								endwhile;

								?>
				</div>

		</div>
		