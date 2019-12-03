<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?>
<script>
jQuery(document).ready(function() {
    var text = jQuery("div#whyprepworks h3:first strong").html();        
    // previous a color : 283848
    jQuery("div#whyprepworks h3:first strong").html("<a href='https://prepworks.com/why-prepworks-2/' style='color:#fff;'>"+text+"</a>");
    jQuery("div#whyprepworks h3:first").removeAttr("style");	
    jQuery("div#whyprepworks h3:first").attr("style", "font-size:28px");
    jQuery("div#whyprepworks h3:first").css("margin-bottom", "4%");
    jQuery("div#whyprepworks h3:first").css("margin-top", "3%");
    jQuery("div#whyprepworks h4").css("line-height", "25px");
});
</script>



                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                  </ol>                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                        <?php $loop = new WP_Query( array( 'post_type' => 'hero-slider', 'order_by' => 'menu_order', 'order' => 'asc' ) ); ?>
                       <?php $x = 0; ?> 
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item <?php if($x == 0) echo "active"; ?>">
                                <a href="<?php echo get_field('learn_more_link'); ?>" target="_blank">
                              <?php the_post_thumbnail('full'); ?>
<!--                              <div class="carousel-caption">
                              	   <p class="hero-title" style="color:<?php echo get_field('text_color'); ?>;<?php if(get_field('text_color') == "#fff") echo "text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.92);";?>"><?php echo get_the_title(); ?></p> 	
                                    <p class="hero-copy" style="color:<?php echo get_field('text_color'); ?>;<?php if(get_field('text_color') == "#fff") echo "text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.92);";?>"><?php echo get_the_content(); ?></p>
                                  <a class="btn btn-primary btn-lg slider-btn" href="<?php echo get_field('learn_more_link'); ?>">Learn More</a>  
                             </div>-->
<!--                             <div class="carousel-caption-mobile">
                              	   <p class="hero-title" style="color:<?php echo get_field('text_color'); ?>;"><?php echo get_the_title(); ?></p> 	
                                    <p class="hero-copy" style="color:<?php echo get_field('text_color'); ?>;"><?php echo get_the_content(); ?></p>
                                  <a class="btn btn-primary btn-lg slider-btn" href="<?php echo get_field('learn_more_link'); ?>">Learn More</a>  
                             </div>-->
                             </a>
                          </div>
                        <?php $x++; endwhile; wp_reset_query(); ?>
                  </div>
                  
                  <a class="left carousel-control slider-con" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control slider-con" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
               </div> 
                

<div class="container">
	<div class="row">
		<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
    <main id="main" class="site-main" role="main">
        <?php 
        while (have_posts()) {
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

            <div class="entry-content">
                <?php the_content(); ?> 
                <div class="clearfix"></div>
                <?php
                /**
                 * This wp_link_pages option adapt to use bootstrap pagination style.
                 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
                 */
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
                    'after'  => '</ul></div>',
                    'separator' => ''
                ));
                ?>
            </div><!-- .entry-content -->
	
			</article><!-- #post-## -->

          <div id="course-groups-wrap"> 
          		<div class="row" id="course-groups">
                
          		
                	<div class="course-group">
                    <div id="prep-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-test-prep.png" alt="Test Prep"></div>
                        <p class="cg-title">PSAT, SAT, & ACT</p>
                       <p><?php echo get_field('test_prep_copy'); ?></p>
						<?php if (!is_front_page()) { ?>
                       		<a class="btn btn-primary btn-lg course-btn" href="<?php echo get_site_url(); ?>/our-courses/test-preparation/" role="button">LEARN MORE</a>
						<?php } ?>
               	</div>
               
               
               
                	<div class="course-group">
                    <div id="math-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-math.png" alt="Math"></div>
                        <p class="cg-title">Math</p>
                       <p><?php echo get_field('math_copy'); ?></p>
						<?php if (!is_front_page()) { ?>
<!--                        		<a class="btn btn-primary btn-lg course-btn" href="<?php echo get_site_url(); ?>/our-courses/math/" role="button">LEARN MORE</a> -->
						<?php } ?>
               	</div>
               
               
                
                	<div class="course-group">
                    <div id="science-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-science.png" alt="Science"></div>
                        <p class="cg-title">Science</p>
                       <p><?php echo get_field('science_copy'); ?></p>
						<?php if (!is_front_page()) { ?>
<!--                        		<a class="btn btn-primary btn-lg course-btn" href="<?php echo get_site_url(); ?>/our-courses/science/" role="button">LEARN MORE</a>  -->
						<?php } ?>
               	</div>
               
               
                
                	<div class="course-group dangler">
                    <div id="civics-icon" class="group-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-civics.png" alt="Civics & History"></div>
                        <p class="cg-title">Civics & History</p>
                       <p><?php echo get_field('civic_copy'); ?></p>
						<?php if (!is_front_page()) { ?>
<!--                        		<a class="btn btn-primary btn-lg course-btn" href="<?php echo get_site_url(); ?>/our-courses/civics-history/" role="button">LEARN MORE</a>  -->
						<?php } ?>
               	</div>
               
              </div>
          
          </div>
          <script>
				jQuery( window ).load(function() {
					jQuery('#main').css('height', (jQuery('#course-groups').height()+8));
				});
				
				jQuery( window ).on('resize', function(){
					jQuery('#main').css('height', (jQuery('#course-groups').height()+8));
				});		
				
				jQuery(document).ready(function(){
					jQuery('#carousel-example-generic, #partners-carousel').carousel({
						interval: 3000
					});	
				});		
			</script> 
            
            
		<?php
        } //endwhile;
        ?> 
    </main>
    
    
		</div>
	</div>
</div>

<div id="whyprepworks">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
           		<?php echo get_field('why_prepworks_copy'); ?>
                
                <!--<div class="why"><a href="https://prepworks.com/why-prepworks/#tech"><img style="margin-bottom: -10px; " class="alignleft size-full wp-image-274" src="<?php echo get_template_directory_uri(); ?>/img/prepworks-tech-icon.png" alt="icon-graph" width="75" height="74" /></a></div>-->
		<!--<div class="why2"><p style="font-size: 20px; margin-top: -3px; font-weight: bold;"><a href="https://prepworks.com/why-prepworks/#tech">Learning Positioning System<sup>&reg;</sup> Technology</a></p></div>-->
                
                
               
                
                
                <div style="clear:both;"></div>
                <a class="btn btn-primary btn-lg why-btn" href="https://calendly.com/lgomezecs/prepworks-demonstration" role="button" style="margin-top:25px;">Schedule a Demo</a>
                
                
           </div>
       </div>
   </div>         
</div>

<div id="tutoring">
	<div class="container">
		<div class="row">
        	<div class="col-md-9" id="thecopy">
			<?php $loop = new WP_Query( array( 'post_type' => 'geolocation', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => 1 ) );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<div class="geo-copy"><?php the_content(); ?></div>
            
			<?php
			endwhile; wp_reset_query();
			?>
            </div>
            <div class="col-md-3" id="thebutton">
            <?php $loop = new WP_Query( array( 'post_type' => 'geolocation', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => 1, 'offset' => 1 ) );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<?php the_content(); ?>
            
			<?php
			endwhile; wp_reset_query();
			?>
            </div>
        </div>
    </div>    
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12" id="featured-home">
        	
            <?php $loop = new WP_Query( array( 'post_type' => 'featured', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1 ) );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>
		    
			<a href="<?php the_field('outgoing_link'); ?>" target="_blank"><?php the_post_thumbnail(); ?> </a>
			
			<?php
			endwhile; wp_reset_query();
			?>
        </div>
    </div>
</div>        

<?php get_footer(); ?> 
