<?php
/*
Template Name: New Look Internal
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<div id="page-topper-main" style="background: #ffffff url(<?php echo $url; ?>) no-repeat center top; background-size: contain;">
	<?php
		$image = get_field('header_icon');
		$image2 = get_field('first_section_background_image');
		$image3 = get_field('first_section_background_image_faded');
		
		if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="page-icon"/>

	<?php endif; ?>
		
    <div id="copy-placement"><?php the_field('header_description'); ?></div>
    
</div>

<div id="courses-strip-course">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
        	<div class="course-listing-course <?php if($slug == "test-preparation") echo "current-course"; ?>">
            	<a href="/our-courses/test-preparation/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-test-prep.png" alt="Test Prep"> TEST PREPARATION</a>
            </div>
            <div class="course-listing-course  <?php if($slug == "math") echo "current-course"; ?>">
            	<a href="/our-courses/math/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-math.png" alt="Math">MATH</a>
            </div>
            <div class="course-listing-course  <?php if($slug == "science") echo "current-course"; ?>">
            	<a href="/our-courses/science/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-science.png" alt="Science">SCIENCE</a>
            </div>
            <div class="course-listing-course  <?php if($slug == "civics-history") echo "current-course"; ?>">
            	<a href="/our-courses/civics-history/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-civics.png" alt="Civics">CIVICS & HISTORY</a>
            </div>
         </div>
       </div>
    </div>
</div>


    		<main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    		<div id="first-item" style="background: url(<?php echo $image2['url']; ?>) no-repeat left top;background-size: cover;">

<?php
// Added by MS 10/16/2018 to remove buttons from students/parents page because they don't link anywhere.
if(is_page('for-parents-students') || is_page('for-schools-districts-2')): //Identify page by slug
    //Do nothing
?>
            
<?php elseif(!is_page(2869)) : ?>     
            <ul id="page-tabs" class="page-tabs-why-override">
	<li><a href="#results" rel="m_PageScroll2id">RESULTS GUARANTEED</a></li>
    <li><a href="#features" rel="m_PageScroll2id">FEATURES</a></li>
    <li><a href="#design" rel="m_PageScroll2id">DESIGN MY PROGRAM</a></li>
</ul>
<?php endif; ?>
<div style="clear:both;"></div>
        <?php 
        while (have_posts()) {
            the_post(); 
			$ficwidth = get_field('first_section_copy_area_width');
			if($ficwidth == "")
				$ficwidth = "775";
			?>
		
        
       <?php if(!is_page(2869)) : ?> 
        <div id="first-item-content-vpi">
		<?php the_content(); ?> 
        </div>
       <?php else : 
       echo "<h2 style=\"text-align:center;\">Prepworks is proud to partner with schools and organizations across the globe:</h2><br>";
	   $thelist = get_the_content();
	   //$p_array = explode("\n", $thelist);
	   $p_array = preg_split("/\r\n|\n|\r/", $thelist);
       
	   foreach ($p_array as $p) {
		   if(strlen($p) > "1")
				echo '<div class="col-md-4 col-sm-6 partner-list">'.$p.'</div>';   
	   }
	   
       
       endif; ?> 
        
        
        
       
        <div style="clear:both;"></div>
        <script>
    jQuery( document ).ready(function() {
   		
		jQuery('#first-item').css('backgroundSize', 'cover');	
			
			
        if (jQuery(window).width() < (<?php echo $ficwidth; ?>+20)) {
                jQuery('#first-item-content-vpi').css('width', '100%');
        }
        else {
                jQuery('#first-item-content-vpi').css('width', '<?php echo $ficwidth; ?>px');
        }
		
		if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) - 450)) {
                jQuery('#first-item').css('background', 'url(<?php echo $image3['url']; ?>) no-repeat left top');
				jQuery('#first-item-content-vpi').css('float', 'none');
				jQuery('#first-item-content-vpi').css('margin', '0 auto');
				jQuery('#first-item-content-vpi').css('padding-right', '0');
				if (jQuery(window).width() < 500) {
					jQuery('#first-item').css('background', 'none');
					jQuery('#first-item').css('background-color', '<?php echo get_field('first_section_background_color'); ?>');
				}
        }
        else {
                jQuery('#first-item').css('background', 'url(<?php echo $image2['url']; ?>) no-repeat left top');
				
        }
		
		
    });
    
    jQuery( window ).on('resize', function(){
		
		
          if (jQuery(window).width() < (<?php echo $ficwidth; ?>+20)) {
                jQuery('#first-item-content-vpi').css('width', '100%');
        }
        else {
                jQuery('#first-item-content-vpi').css('width', '<?php echo $ficwidth; ?>px');
        }
		
		if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) - 450)) {
                jQuery('#first-item').css('background', 'url(<?php echo $image3['url']; ?>) no-repeat left top');
				jQuery('#first-item-content-vpi').css('float', 'none');
				jQuery('#first-item-content-vpi').css('margin', '0 auto');
				jQuery('#first-item-content-vpi').css('padding-right', '0');
				if (jQuery(window).width() < 500) {
					jQuery('#first-item').css('background', 'none');
					jQuery('#first-item').css('background-color', '<?php echo get_field('first_section_background_color'); ?>');
				}
        }
		
        else {
                jQuery('#first-item').css('background', 'url(<?php echo $image2['url']; ?>) no-repeat left top');
				jQuery('#first-item-content-vpi').css('float', 'right');
				jQuery('#first-item-content-vpi').css('margin', 'none');
				jQuery('#first-item-content-vpi').css('padding-right', '160px');
				
        }
    });					
</script> 
        
        
          </div>  
          <!--END FIRST SECTION-->
          
          <!--REPEATABLE SECTIONS-->
          
          <?php

// check if the repeater field has rows of data
if( have_rows('additional_sections') ):

 	// loop through the rows of data
    while ( have_rows('additional_sections') ) : the_row();

        $section_type = get_sub_field('section_type');
		if($section_type == "two-column") : ?>
        <span id="<?php echo get_sub_field('section_anchor'); ?>" class="anchor"></span>
		<div class="container" style="padding-bottom:5px;">
        	<div class="row">
            	<?php if(get_sub_field('which_column_should_include_the_copy') == "left") : ?>
            	<div class="col-md-6 ricka-anchor increase-padding" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?>

              <?php if( is_page( 22 ) ) : ?>

                <a class="btn btn-primary" href="<?php echo get_site_url(); ?>/enroll-now/" role="button">ENROLL NOW</a>

              <?php else : ?>

                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  SCHEDULE DEMO
                </button>


              <?php endif; ?>


              </div>
               <?php endif; ?> 
               <div class="col-md-6 ricka-anchor" style="padding:15px;">
               <?php
			   		if(get_sub_field('right_column_video') != "")
						echo get_sub_field('right_column_video');
						
					if(get_sub_field('right_column_image') != "")
					{
						$right_image = get_sub_field('right_column_image');
						$style_override = get_sub_field('image_style_overrides');
						$override = "";
						if($style_override != "")
							$override = 'style="'.get_sub_field('image_style_overrides').'"';
						
						echo '<img src="'.$right_image['url'].'" alt="'.$right_image['alt'].'" class="img-responsive" '.$override.'/>';	
					}
				?>		
               </div>
               <?php if(get_sub_field('which_column_should_include_the_copy') == "right") : ?>
            	<div class="col-md-6" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?><a class="btn btn-primary" href="<?php echo get_site_url(); ?>/enroll-now/" role="button">ENROLL NOW</a></div>
               <?php endif; ?>
           </div>
       </div>         
		<?php
		endif;
		
		if($section_type == "single-column") : 
		
			$bgimage = get_sub_field('section_background_image');
			$extra = "";
			if($bgimage != "")
				$extra = "background: url(".$bgimage['url'].") no-repeat center top;background-size: cover;";
		?>
       
       <span id="<?php echo get_sub_field('section_anchor'); ?>" class="anchor"></span>
       <div style="<?php echo $extra; ?>"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 new-padding"><?php echo get_sub_field('section_copy'); ?></div>
               </div>
           </div>  
       </div>       
		<?php
		endif;

    endwhile;

endif;

?>

<!--END REPEATABLE SECTIONS-->
          
<div id="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-md-8" style="padding: 35px 10px 10px;">

              <?php if( is_page( 22 ) ) : ?>

              	<div><img src="<?php echo get_template_directory_uri(); ?>/img/icon-grad-transparent.png" align="left"></div>
              	<div style="padding: 40px 0 0 13px;"><p><span style="font-size:24px;">Are You Ready to Succeed?</span>&nbsp;</p></div>
                </div>
                <div class="col-md-3 button-area"><a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/contact-us/" role="button">CONTACT US</a></div>

              <?php else : ?>
                <?php if(is_page( 65 ) ) : ?>
                  <div><img src="<?php echo get_template_directory_uri(); ?>/img/orgs_section.png" align="left"></div>
                <?php else : ?>
                  <div><img src="<?php echo get_template_directory_uri(); ?>/img/icon-grad-transparent.png" align="left"></div>
                <?php endif; ?>


                <div style="padding: 40px 0 0 13px;"><p><span style="font-size:24px;">Get your personalized tour of PREPWORKS</span>&nbsp;</p></div>
                </div>
                <div class="col-md-3 button-area">
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    SCHEDULE DEMO
                  </button>
                </div>


              <?php endif; ?>
        </div>
    </div>
</div>     
      <?php if(is_page(array( 63, 22 ))) : ?>
          <div class="container">
          <div class="row" id="bottom-courses">
          	<div class="col-md-12">
          	<p class="bctitle">Courses Built For Success</p>
          		<div id="bcwrap">
                          	<div class="course-group">
                              <div id="prep-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-test-prep.png" alt="Test Prep"></div>
                                  <p class="cg-title">Test Preparation</p>
                                 
                                 <a class="btn btn-primary course-btn" href="<?php echo get_site_url(); ?>/our-courses/test-preparation/" role="button">LEARN MORE</a> 
                         	</div>
                         
                         
                         
                          	<div class="course-group">
                              <div id="math-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-math.png" alt="Math"></div>
                                  <p class="cg-title">Math</p>
                                 
                                 <a class="btn btn-primary course-btn" href="<?php echo get_site_url(); ?>/our-courses/math/" role="button">LEARN MORE</a> 
                         	</div>
                         
                         
                          
                          	<div class="course-group">
                              <div id="science-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-science.png" alt="Science"></div>
                                  <p class="cg-title">Science</p>
                                 
                                 <a class="btn btn-primary course-btn" href="<?php echo get_site_url(); ?>/our-courses/science/" role="button">LEARN MORE</a> 
                         	</div>
                         
                         
                          
                          	<div class="course-group dangler">
                              <div id="civics-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-civics.png" alt="Civics & History"></div>
                                  <p class="cg-title">Civics & History</p>
                                 
                                 <a class="btn btn-primary course-btn" href="<?php echo get_site_url(); ?>/our-courses/civics-history/" role="button">LEARN MORE</a> 
                         	</div>
                         </div>
                        </div>  
                        </div> 
                  </div>
            <?php endif; ?>  
           
</article><!-- #post-## -->
        <?php } //endwhile;
        ?> 
    </main>


<?php get_footer(); ?> 
