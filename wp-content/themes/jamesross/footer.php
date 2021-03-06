<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

		
			
			
<footer id="site-footer" role="contentinfo">
	<div id="testimonials">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<p class="testi-header">SUCCESS STORIES</p>
                   <div data-looper="go" class="looper xfade" data-interval="10000">
                        <div class="looper-inner">
                        <?php 	 
							if(get_field('testimonies_to_show_on_this_page') == 'parents-testimony')
							{	
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1, 'category_name' => 'parents-testimony' ) );
								$tag = "#parents";
							}
							elseif(get_field('testimonies_to_show_on_this_page') == 'schools-testimony')
							{	
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1, 'category_name' => 'schools-testimony' ) );
								$tag = "#schools";
							}
							elseif(get_field('testimonies_to_show_on_this_page') == 'teachers-testimony')	
							{
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1, 'category_name' => 'teachers-testimony' ) );	
								$tag = "#teachers";
							}
							else
							{
								$loop = new WP_Query( array( 'post_type' => 'testimonials', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1 ) );	
								$tag = "";
							}
								
                           while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="item testimonial-listing">
                                	<?php the_content(); ?>
                                     
                                    <div class="testimonial-source">-<?php echo get_field('testimony_source'); ?>,
                                    <?php echo get_field('testimony_location'); ?></div>
                                </div>
								<?php endwhile; wp_reset_query();?>  
                        </div>
                    </div> 
                   <a class="btn btn-primary btn-lg" rel="m_PageScroll2id" href="<?php echo get_site_url(); ?>/testimonials/<?php echo $tag; ?>" role="button">VIEW MORE</a> 
                </div>
            </div>
        </div>
    </div>
    
    <div id="our-partners">
    	<div class="container">
        	<div class="row">
                	
                   <!--Partners Slider--> 
                   <div id="partners-carousel" class="carousel slide" data-ride="carousel1">

                  <!-- Indicators -->
                    <ol class="carousel-indicators">

                  <?php 

                  $loop = new WP_Query( array( 'post_type' => 'partner', 'posts_per_page' => -1 ) );
                  $counter = 0;

                  while ( $loop->have_posts() ) : $loop->the_post(); 

                  $counter++;

                  endwhile; wp_reset_query();  

                  //divide counter by four and round up (ceiling)
                  $lower_counter = $counter/4;
                  $new_counter_value = ceil($lower_counter);

                  $counter2 = 0; 

                  for($x = 0; $x<$new_counter_value;$x++){

                    if($counter2 == 0)
                    $isactive = "active";
                  else
                    $isactive = ""; 

                  echo '<li data-target="#partners-carousel" data-slide-to="'.$counter2.'" class="'.$isactive.'"></li>';
                  $counter2++;

                  }

                  

                  ?>  

                      
                    </ol>


                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                      		<?php $loop = new WP_Query( array( 'post_type' => 'partner', 'order_by' => 'menu_order', 'order' => 'asc', 'posts_per_page' => -1 ) ); 
						    $x = 0; 
							$y = 0; 
                           while ( $loop->have_posts() ) : $loop->the_post(); 
                             if($y == 0) : ?>

                           
                                <div class="item <?php if($x == 0) echo "active"; ?>" >
                              <?php endif; ?>  
                                  <div class="col-md-3 col-sm-6 alter-slide-item">
                                <?php 

                                      $is_a_rectangle = get_field('is_a_rectangle');

                                      if($is_a_rectangle[0] == 'yes'){
                                        the_post_thumbnail(array(300,300), array('class' => 'img-responsive bigger'));
                                         the_title();

                                      }
                                      else{
                                        the_post_thumbnail(array(300,300), array('class' => 'img-responsive smaller'));
                                        the_title();
                                      } 
                                ?>
                                </div>
                                <?php
                               if($y == 3) : ?>	
                                 
                                </div>
                                 <?php $y = -1; 
                              endif;  
                             		$x++;
									$y++;
								endwhile; wp_reset_query(); 
								if($x%6!=0)
									echo "</div>";
									?>  
                      </div>
                    
                      <!-- Controls -->
                      <a class="left carousel-control" href="#partners-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#partners-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    
                   <!--End Partners Slider--> 

            </div>
        </div>
    </div>
    
    <div id="footer-info">
    	<div class="container">
        	<div class="row">
                <div style="clear:both;" class="hidden-sm hidden-md hidden-lg"></div>
                <div class="col-md-3 col-sm-6 footercopy">
                	<p class="footer-header">QUICK LINKS</p>
					<?php
    
                    $defaults = array(
                        'menu'            => 'Quick-Links',
                        'container'       => 'div',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );
                    
                    wp_nav_menu( $defaults );
                    
                    ?>
                </div>
                <div class="col-md-3 col-sm-6 footercopy">
                	<p class="footer-header">SUPPORT</p>
					<?php
    
                    $defaults = array(
                        'menu'            => 'Support',
                        'container'       => 'div',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );
                    
                    wp_nav_menu( $defaults );
                    
                    ?>
                </div>
                
                <div style="clear:both;" class="hidden-md hidden-lg"></div>
                
                <div class="col-md-3 col-sm-6 footercopy">
                	<p class="footer-header">SCHEDULE A DEMO</p>
                  <p class="tour">Get your personalized tour <br> of PREPWORKS today</p>
                   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    SCHEDULE DEMO
                  </button>
                </div>
                
                <div class="col-md-3 col-sm-6 footercopy">
                	<p class="footer-header">KEY BISCAYNE</p>
                   <p>604 Crandon Boulevard, Suite 201<br>Key Biscayne, Florida 33149</p>
                    <p><a href="tel:8553657737">855-365-PREP</a></p>
                   <br>
                   
                   <p class="footer-header">MIAMI</p>
                   <p>3439 Main Highway, Suite A<br>Miami, Florida 33133</p>
                   <p><a href="mailto:info@myprepworks.com">info@prepworks.com</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="footer-copyright">
    	<div class="container">
        	<div class="row">                
                <div class="col-md-9 col-sm-9 disclaimer" >
                	<img src="<?php echo get_template_directory_uri(); ?>/img/icon-wbenc.png" alt="Certified WBENC" class="wbenc">
                	AP®, Advanced Placement Program® or Pre-AP® is a registered trademark of the College Board, which was not involved in the production of, and does not endorse, this product. SAT® is a trademark registered and/or owned by the College Board, which was not involved in the production of, and does not endorse, this product. ACT® is a registered trademark of ACT, Inc. PSAT/NMSQT® is a registered trademark of the College Board and the National Merit Scholarship Corporation which were not involved in the production of, and do not endorse, this product. SSAT®/SSATB is a registered trademark of the College Board, which was not involved in the production of, and does not endorse, this product. ISEE/ERB is a registered trademark of ISEE®/ERB, Inc. HSPT® is a trademark jointly owned by the College Board and the National Merit Scholarship Corporation, which were not involved in the production of, and do not endorse, this product. None of the trademark holders are affiliated with PREPWORKS®.
                </div>

                <div class="col-md-3 col-sm-3">
                	<?php get_search_form(); ?>
                  <ul id="footer-social-media">
                    <li><a href="https://www.facebook.com/Prepworks/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-facebook.png" alt="PREPWORKS on Facebook"></a></li>
                      <li><a href="https://www.youtube.com/channel/UCb9MT72MBRIPJeDwhK6knlA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-youtube.png" alt="PREPWORKS on YouTube"></a></li>
                      <li><a href="https://twitter.com/prepworks" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-twitter.png" alt="PREPWORKS on Twitter"></a></li>
                      <li><a href="mailto:info@myprepworks.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-email.png" alt="Email PREPWORKS"></a></li>  
                   </ul> 
                </div>
                

            	<div class="col-md-12 col-sm-12 copyright">
                	<span>&copy; <?php date_default_timezone_set('UTC'); echo date("Y"); ?> Copyright Prepworks, LLC. All Rights Reserved.
                  </span>
                </div>
                
            </div>
        </div>
    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ricka-modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-margin modal-body">
          <h3>Get your personalized tour of PREPWORKS</h3>
          <p>Join us for a live, online demo to find out how PREPWORKS can support you.</p>
        <?php gravity_form(3, false, false, false, "",true); ?>
      </div>
    </div>
  </div>
</div>
    
</footer>


		
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
        <script>
jQuery( window ).load(function() {
	
   // jQuery('.cart-tab').children().children().children('.buttons').append('<a href="javascript:void(0);" class="button hidden-lg hidden-md hidden-sm" id="closetab">Close</a>');
	console.log('df');
	let link = jQuery('.home .item').eq(3).find('a').attr('href')+'/#PREPWORKSBooks ';
	jQuery('.home .item').eq(3).find('a').attr('href', link);
	
	
	jQuery('#coupon_code').attr('placeholder','Enter Code');
	jQuery(".woocommerce-error li").html(function(i,t){
		return t.replace('Coupon','Promo Code')
	});
	jQuery(".woocommerce-info").html(function(i,t){
		return t.replace('coupon','Promo Code')
	});

	jQuery(".cart-tab.right").on("click", "#closetab", function(){
		jQuery(this).unbind("mouseenter");
	});
	
	jQuery(".cart-parent").click(function() {
        jQuery('.cart-tab').removeClass('goback');
		jQuery('.cart-tab').addClass('showme');
    });
	
	jQuery("#closetab").click(function() {
		jQuery('.cart-tab').removeClass('showme');
        jQuery('.cart-tab').addClass('goback');
		
    });
	
	
	
	/*
	jQuery('.cart-parent').click(function() {
		if(jQuery('.right.cart-tab.light.visible').css('right') == '-22em')
        	jQuery('.right.cart-tab.light.visible').css('right', '0');
		else
			jQuery('.right.cart-tab.light.visible').css('right', '-22em');	
    });
*/
	
});
</script>

<?php
if(is_page(33599)) {

    ?>

    <div id="iste" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div style="width:100%; height:168px;text-align:center; background: url(/wp-content/uploads/2017/06/iste_form-header.png);border-radius:5px 5px 0 0;"><p class="logo-iste"><img src="https://myprepworks.com/wp-content/uploads/2017/06/iste_form-logo.png" alt="iste_form-logo" width="152" height="101" class="aligncenter size-full wp-image-3415" /></p><p class="logo-pw"><img src="https://myprepworks.com/wp-content/uploads/2017/06/pw-logo-iste_header.png" alt="pw-logo-iste_header" width="100" height="100" class="aligncenter size-full wp-image-3392" /></p></div>
                </div>
                <div class="modal-body">
                    <?php
                    echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]');
                    ?>
                </div>


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php
}
?>
<script src="//rum-static.pingdom.net/pa-5b3a2c37ef13ce00160000d5.js" async></script>
<script>/*<![CDATA[*/(function(w,a,b,d,s){w[a]=w[a]||{};w[a][b]=w[a][b]||{q:[],track:function(r,e,t){this.q.push({r:r,e:e,t:t||+new Date});}};var e=d.createElement(s);var f=d.getElementsByTagName(s)[0];e.async=1;e.src='//marketing.ecslearn.com/cdnr/38/acton/bn/tracker/37491';f.parentNode.insertBefore(e,f);})(window,'ActOn','Beacon',document,'script');ActOn.Beacon.track();/*]]>*/</script>
	</body>
</html>
