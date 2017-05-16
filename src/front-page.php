<?php get_header(); ?>

<<<<<<< HEAD
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
=======



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
>>>>>>> FoundationDEV
    
    </section>
    <!-- /section -->
</main>


<<<<<<< HEAD
<?php //get_sidebar(); ?>
=======

>>>>>>> FoundationDEV

<?php get_footer(); ?>
