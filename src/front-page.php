<?php get_header(); ?>




<main class="ui content" role="main" aria-label="Content">
    <!-- section -->
    <section class="row clinica-home-hub">
 	
 		<?php get_template_part('front-page-custom-content'); ?>
    
    </section>
    
    <section class="row home-loop">
        
        <main class="column large-9">
        	<div class="row align-justify">
        		<?php get_template_part('front-page-loop'); ?>
        	</div>
        </main>
		
		<aside class="sidebar-home">
        <?php get_sidebar(); ?>
        </aside>
    
    </section>
    <!-- /section -->
</main>




<?php get_footer(); ?>
