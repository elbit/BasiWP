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

			
		<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
    <!-- wrapper -->
    <div class="wrapper">
		<!-- header -->
        <header class="" role="banner">
            <!-- logo -->
            <div class="row">
			    <a href="<?php echo home_url(); ?>">
			        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
			    </a>  <!-- /logo -->
			</div>

          	<!-- nav -->
            <nav class="nav top-bar row" "role="navigation">
                <?php html5blank_nav(); ?>
            </nav>
            <!-- /nav -->
        
        </header>

        <!-- /header -->

        
        <div class="row button-group align-right">
			<a href="" class="button" "><i class="fa whatsapp icon"></i>Whatsapp</a>
			<a href="" class="button" "><i class="calendar icon"></i>Addentra</a>
			<a href="" class="button" "><i class="phone icon"></i>telefono</a>
			<a href="" class="button" "><i class="ui envelope icon"></i>Contacto</a>
		</div>


		<div class="warning message icon ">
				<?php			

				$args = array( 'post_type' => 'avisos', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				 
				  echo ' <i class="calendar icon"></i><i class="close icon"></i><div class="header center" >';
				  the_content(); 
				  echo ' '; the_field('avis');  the_field('data'); echo '';
				  echo '</div>';
				endwhile;

				?>

		</div>
