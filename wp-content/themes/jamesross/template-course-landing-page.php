<?php
/**
Template Name: Course Landing Page
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 $imagevt = get_field('vt_last');
 $contentvt = get_field('vt_last_content');
 global $post;
 $slug = get_post( $post )->post_name;
 
 

?>

<div id="page-topper" style="background: #ffffff url(<?php echo $url; ?>) no-repeat center top;">
	<?php
		$image = get_field('header_icon');
		$image2 = get_field('first_section_background_image');
		$image3 = get_field('first_section_background_image_faded');
		
		if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="page-icon"/>

	<?php endif; ?>
		
    <h1><?php the_title(); ?></h1>
    
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
            
           <!-- <ul id="page-tabs">
				<li><a href="#results" rel="m_PageScroll2id">RESULTS GUARANTEED</a></li>
			    <li><a href="#features" rel="m_PageScroll2id">FEATURES</a></li>
			    <li><a href="#design" rel="m_PageScroll2id">DESIGN MY PROGRAM</a></li>
    
			</ul>  -->
			
			
<div style="clear:both;"></div>
        <?php 
        while (have_posts()) {
            the_post(); 
			$ficwidth = get_field('first_section_copy_area_width');
			if($ficwidth == "")
				$ficwidth = "775";
			?>
		<div id="first-item-content-vpi">
		<?php the_content(); ?> 
        </div>
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
		
		if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) - 5)) {
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
		
		if (jQuery(window).width() < ((<?php echo $ficwidth; ?> * 2) - 5)) {
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
          
          
          
<!-- TABLE SECTIONS DESKTOP -->        
          
         <div class="container">
		    <div class="row">
			    <div class="col-md-offset-1 col-md-10 text-center">
				    <h3>Click on your course below to get started:</h3>
				</div>
			</div>
		</div>
					
					
					
          
			<div class="container test-tabs hidden-xs hidden-sm">
			    <div class="row">
				    <div class="col-md-12 tabs-wrapper">
			        				
			        				
								<ul class="nav nav-tabs">
									
									<?php
					    				
										//get total number of courses
									
										if( have_rows('course_repeater') ):
										
											$x = 0;
										 	// loop through the rows of data
										    while ( have_rows('course_repeater') ) : the_row();
																		        
												$x++;
										    endwhile;
										
										
										
										endif;
										$total_number_courses = $x;
										$tab_width = 100 / $total_number_courses;
									?>
									
									
									
									<?php
										
										// check if the repeater field has rows of data
										if( have_rows('course_repeater') ):
										
											$x = 0;
										 	// loop through the rows of data
										    while ( have_rows('course_repeater') ) : the_row();
										
												?>
												
												
												<li <?php if($x == 0) echo 'class="active"'; ?> style="width:<?php echo $tab_width; ?>%;"><a  data-toggle="tab" href="#course<?php echo $x; ?>"><?php echo get_sub_field('course_name'); ?></a></li>
										        <?php
										        
												$x++;
										    endwhile;
										
										endif;
										
									?>
									
									
								</ul>
						
									
									
								<div class="tab-content">
									
									<?php
									
									// check if the repeater field has rows of data
									if( have_rows('course_repeater') ):
									
										$x = 0;
									 	// loop through the rows of data
									    while ( have_rows('course_repeater') ) : the_row();
									
											?>
											<div id="course<?php echo $x; ?>" class="tab-pane fade <?php if($x == 0) echo 'in active'; ?>">
												
												<p><?php echo get_sub_field('course_copy'); ?></p>
													
													<div class="row">
												
                                                <?php if(get_field('show_test_dates_button') == "yes") : ?>
														<div class="col-md-offset-3 col-md-2 btn-tp">	
															<a class="btn btn-primary btn-lg" href="<?php get_site_url(); ?>/official-test-dates/" role="button">TEST DATES</a>
														</div>	
                                                       
															
														<div class="col-md-offset-1 col-md-2 btn-tp">
															<a class="btn btn-primary btn-lg" href="<?php echo get_sub_field('course_link'); ?>" role="button">ENROLL NOW</a>
														</div>
                                                 <?php else : ?> 
                                                        
                                                        <div class="col-md-offset-4 col-md-2 btn-tp">
															<a class="btn btn-primary btn-lg" href="<?php echo get_sub_field('course_link'); ?>" role="button">ENROLL NOW</a>
														</div>
                                                        
                                                  <?php endif; ?>       
														
													</div>
												
												
											</div>	
									        <?php
									        
											$x++;
									    endwhile;
									
									else :
									
									    // no rows found
									
									endif;
									
									?>
																  
								</div>	
									
									        
			    	</div>   
			    </div>
			</div>
			    


<!-- END TABLE SECTIONS DESKTOP -->





<!-- TABLE SECTIONS MOBILE -->


<div class="container test-tabs hidden-md hidden-lg">
    <div class="row">
         <div class="col-md-12 tabs-wrapper">
						
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								 
								  		<?php
									  		
									  		
												
												// check if the repeater field has rows of data
												if( have_rows('course_repeater') ):
												
													$x = 0;
												 	// loop through the rows of data
												    while ( have_rows('course_repeater') ) : the_row();
												
														?>
												<div class="panel panel-default">
											  
											        <div class="panel-heading" role="tab" id="heading<?php echo $x; ?>">
												     
														    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x; ?>" aria-expanded="true" aria-controls="collapse<?php echo $x; ?>" class="collapsed"><?php echo get_sub_field('course_name'); ?></a>
														    </h4>
												   
													</div>
											   
										    
										    
										    
												    <div id="collapse<?php echo $x; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $x; ?>">
														    <div class="panel-body">
														       <p><?php echo get_sub_field('course_copy'); ?></p>
																
																	<div class="row">
																
																		<div class="col-sm-offset-2 col-sm-3 col-md-offset-3 col-md-2 btn-tp">	
																			<a class="btn btn-primary btn-lg" href="<?php get_site_url(); ?>/official-test-dates/" role="button">TEST DATES</a>
																		</div>	
																			
																		<div class="col-sm-offset-1 col-sm-3 col-md-offset-1 col-md-2 btn-tp">
																			<a class="btn btn-primary btn-lg" href="<?php echo get_sub_field('course_link'); ?>" role="button">ENROLL NOW</a>
																		</div>
																		
																	</div>
		
														    </div>
												    </div>
										 
										 
										        </div>
											       
													
													
													 <?php
												        
														$x++;
												    endwhile;
												
												
												
												endif;
												
												?>
		
					 </div>

        </div>   
    </div>
</div>
         

<!-- END TABLE SECTIONS MOBILE -->






          
<!--REPEATABLE SECTIONS-->
          
          <?php

// check if the repeater field has rows of data
if( have_rows('additional_sections') ):

 	// loop through the rows of data
    while ( have_rows('additional_sections') ) : the_row();

        $section_type = get_sub_field('section_type');
		if($section_type == "two-column") : ?>
		<div class="container" id="<?php echo get_sub_field('section_anchor'); ?>" style="padding-bottom:5px;">
        	<div class="row">
            	<?php if(get_sub_field('which_column_should_include_the_copy') == "left") : ?>
            	<div class="col-md-6" style="padding:15px;"><?php echo get_sub_field('section_copy'); ?><a class="btn btn-primary" href="#" role="button">ENROLL NOW</a></div>
               <?php endif; ?> 
               <div class="col-md-6" style="padding:15px;">
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
       
       <div style="<?php echo $extra; ?>" id="<?php echo get_sub_field('section_anchor'); ?>"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="padding:15px; padding-bottom: 29px;"><?php echo get_sub_field('section_copy'); ?></div>
               </div>
           </div>  
       </div>       
		<?php
		endif;

    endwhile;

endif;

?>

<!--END REPEATABLE SECTIONS-->





<!-- Bottom Section -->         

	
		<div class="container">
		    <div class="row">
			    	
		        	
		        <div class="col-sm-4 col-md-offset-1 col-md-4 tp-last-img btn-ltp">
		        	
		            <p><img src="<?php echo $imagevt['url']; ?>" alt="<?php echo $imagevt['alt']; ?>" class="img-responsive img-last-vt"></p>
		        
		        </div>  
		         	
		            	
		            	
		         <div class="col-sm-8 col-md-offset-1 col-md-5 content-last-vt btn-ltp">
		        	
		            <p> <?php the_field('vt_last_content'); ?></p>
		            
		            
		            
		            <div class="button-area btn-ltp">
			            <a class="btn btn-primary btn-lg" href="<?php echo get_site_url(); ?>/enroll-now/" role="button">ENROLL NOW</a>
			        </div> 
		        
		        </div>   	
		        
		    
		    </div>
		</div>
    

<!--END Bottom Section -->  	
   

 
           
    </article><!-- #post-## -->
        <?php } //endwhile;
        ?> 
    </main>


<?php get_footer(); ?> 