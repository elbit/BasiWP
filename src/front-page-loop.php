<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<<<<<<< HEAD
	<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'ui fluid card'); ?>>
    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="image">
        <?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
    </a>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <div class="content">
        <!-- post title -->
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="ui header">
            <?php the_title(); ?>
        </a>
        <!-- /post title -->
        <!-- post details -->
        <span class="date meta">
            <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                <?php the_date(); ?>
                <?php the_time(); ?>
            </time>
            <span class="author">
                <?php _e( '', 'html5blank' ); ?>
                <?php the_author_posts_link(); ?>
            </span>
        </span>

         <div class="description">
            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
        </div>
        <span class="comments">
            <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
        </span>
        <!-- /post details -->

	</div>
	<div class="extra content">
        <?php edit_post_link(); ?>
    </div>
    
</article>



<!-- /article -->


<?php endwhile; ?>

<?php get_template_part('pagination'); ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->
=======
    <!-- article -->
    
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('card card-loop flex-child-auto'); ?>>

            <!-- post thumbnail -->
            
                <a class="card-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('custom-size'); // Declare pixel size you need inside the array ?>
                </a>
            
            <!-- /post thumbnail -->

            <!-- post title -->
            <div class="card-section">
                <h2 class="card-header">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h2>
                <!-- /post title -->

                <!-- post details -->
                <span class="date">
                    <small><time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
                        <?php the_date(); ?> <?php the_time(); ?>
                    </time></small>
                </span>
                
                <span class="author"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
                
                <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
                <!-- /post details -->
                <p>
                <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                </p>
            </div>
                <div class="card-divider">
                <?php edit_post_link(); ?>
                </div>
            

        </article>
    <!-- /article -->
    

<?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->
>>>>>>> FoundationDEV

<?php endif; ?>
