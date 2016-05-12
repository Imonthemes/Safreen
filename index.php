<?php get_header(); ?>
<?php global $safreen;?>


	<!-- head select -->   
 	

  <?php $safreen_slider_enabel = get_theme_mod('safreen_slider_enabel',1);?>
<?php if( isset($safreen_slider_enabel) && $safreen_slider_enabel == 1 ):?> 
       <?php $safreen_header_checkbox = get_theme_mod('safreen_header_checkbox',1);?>
       
       <?php if( isset($safreen_header_checkbox) && $safreen_header_checkbox == 1){ ?>
       <?php get_template_part('headers/part','head1'); ?>
        <?php } ?>
        
         <?php if( isset($safreen_header_checkbox) && $safreen_header_checkbox == 0){ ?>
       <?php get_template_part('headers/part','headsingle'); ?>
        <?php } ?> 
        
        
 <?php else:?> 
 <?php get_template_part('headers/part','headsingle'); ?>
 <div class="clearfix"></div>
     <?php endif?> 
<!-- / head select --> 

<?php if (  is_front_page() || is_home() ) { ?>
  <?php $safreen_slider_enabel = get_theme_mod('safreen_slider_enabel',1);?>
    <?php if( isset($safreen_slider_enabel) && $safreen_slider_enabel == 1 ):?>

 <!--Slider-->
<div id="slider">
  <?php get_template_part('parts/salider','post'); ?>
 </div>  
<div class="clearfix"></div>
<?php endif?>
<?php } ?> 

<!--Slider end-->


<div class="clearfix"></div>	  
<!-- block -->
<?php if (  is_front_page() || is_home() ) { ?>

	<?php $safreen_service_checkbox = get_theme_mod('safreen_enable_serviceblock',1);?>
		<?php if( isset($safreen_service_checkbox) && $safreen_service_checkbox == 1 ):?>

		<?php get_template_part('parts/part','service-block'); ?>        
 	
    <div class="clearfix"></div>
  <?php endif?>
<?php } ?>  	

 <!-- Start Callout section -->

<?php $safreen_welcome_enabel = get_theme_mod('safreen_welcome_enabel',1);?>
		<?php if( isset($safreen_welcome_enabel) && $safreen_welcome_enabel == 1 ):?>
<?php if (  is_front_page() || is_home() ) { ?> 

	<?php get_template_part('parts/part-welcome','text'); ?>
 <!-- END #callout -->
 	<div class="clearfix"></div>
<?php } ?>
<?php endif?>
<a id="showHere"></a>
	        <!--About Us Section -->
<?php if (  is_front_page() || is_home() ) { ?>
	<?php $safreen_enable_aboutus = get_theme_mod('safreen_enable_aboutus',1);?>
			<?php if( isset($safreen_enable_aboutus) && $safreen_enable_aboutus == 1 ):?>
		<?php get_template_part('parts/part','about-us'); ?>
	<div class="clearfix"></div>
	<?php endif;?>
<?php } ?>  	
            
<!--About Us Section -->

<!--LATEST POSTS-->

<?php if (  is_front_page() || is_home() ) { ?>
		<?php $safreen_latstpst_checkbox = get_theme_mod('safreen_latstpst_checkbox',1);?>
			<?php if( isset($safreen_latstpst_checkbox) && $safreen_latstpst_checkbox == 1 ):?>

		 <?php get_template_part('parts/part','layout'); ?>
	<div class="clearfix"></div>
	<?php endif;?>
<?php }?> 

<!--LATEST POSTS END-->

 <!--our team Section -->
<?php if (  is_front_page() || is_home() ) { ?>

	<?php $safreen_ourteam_enable = get_theme_mod('safreen_enable_ourteam',1);
			if( isset($safreen_ourteam_enable) && $safreen_ourteam_enable == 1):?>
 	
	<?php get_template_part('parts/part','our-team');?>
 
 <div class="clearfix"></div>
<?php endif;?>
<?php } ?>       
 <!--Our team Section -->

<!--our client Section -->
<?php if (  is_front_page() || is_home() ) { ?>

	<?php get_template_part('parts/part','our-client'); ?>
<?php } ?>  	
<!--Our client Section -->

<?php get_footer(); ?>