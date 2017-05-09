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

			<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


        
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />
			

</head>
	<body <?php body_class(); ?>>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header -->
        <header class="row" role="banner">
            <!-- logo -->
            <div class="column">
                <a href="<?php echo home_url(); ?>">
                   
                    <img class="ui image fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                </a>
            </div>
            <!-- /logo -->
            <!-- nav -->
            <nav class="nav column menu" "role="navigation">
                <?php html5blank_nav(); ?>
            </nav>
            <!-- /nav -->
        
        </header>

        <!-- /header -->

        <div class=" buttons">
			<button href="" class="ui button "><i class="Whatsapp icon"></i>Whatsapp</button>
			<button href="" class="ui button "><i class="calendar icon"></i>Addentra</button>
			<button href="" class="ui button "><i class="phone icon"></i>telefono</button>
			<button href="" class="ui button "><i class="ui envelope icon"></i>Contacto</button>
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
