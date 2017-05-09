<?php get_header(); ?>

<main class="ui content" role="main" aria-label="Content">
    <!-- section -->
    <section class="front-page_static">
        
       

		<div class="">
		    <div class="ui cards">
		        <div class="ui card ">
		        	<div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, beatae.</div>
		        </div>
		        <div class="ui card ">2</div>
		        <div class="ui card ">3</div>
		    </div>
		    
		    
		</div>

 <?php //get_template_part('front-page-custom-content'); ?>
    
    </section>
    
    <section class="front-page_dynamic ui four columns grid cards">
        
        <?php get_template_part('front-page-loop'); ?>
    
    </section>
    <!-- /section -->
</main>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
