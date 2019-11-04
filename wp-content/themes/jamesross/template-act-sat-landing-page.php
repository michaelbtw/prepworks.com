<?php
/**
Template Name: ACT SAT Landing Page
 */

get_header('actsat');

?>
<?php if (have_posts()) : while (have_posts()) :the_post(); 

	$image = get_field('hero_image');
?>
<!-- hero section -->
		<div class="sat-act">
			<section id="hero" style="background-image: url('<?php echo $image['url']; ?>')">
		  		<div class="container">
		  			<div class="row">
		  				<div class="col-md-6 alter-col">
		  	
         		<?php the_content(); ?>

         		<div class="hero-btn">
			  					<a class="btn btn-primary btn-lg slider-btn" href="<?php echo get_field('add_to_cart_link'); ?>">Click to Take the First Step to
Improve Your Score Today!</a>
			  				</div>
   		</div>
		  				<div class="col-md-6">

		  				</div>
		  			</div>
		  		</div>
		  	</section>		
		  	<!-- second section -->
			<section id="section">
				<div class="container">
					<div class="row">
								
								<div class="col-md-8">
									<?php echo get_field('secondary_info'); ?>
								</div>

								<div class="col-md-4 relative">
									<div class="sat-act-form">
										<div class="sat-text">
											<?php echo get_field('form_text'); ?>
										</div>
										<div class="gravity">
											<?php gravity_form( 2, false, false, false, '', false ); ?>
											<!-- <a class="btn btn-primary btn-lg slider-btn" data-toggle="modal" data-target="#myModal-sat-act" >Learn More</a> -->
										</div>
									</div>
							</div>
					</div>
		
						
				</div>
			</section>

			<section id="acclaimed">
				<div class="container">
					<div class="row">
						<div class="section-header">
							<h4>Acclaimed By</h4>
						</div>
						<div class="logo-wrapper">
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/csusa.png" alt="CSUSA Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/kipp.png" alt="KIPP Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/andover.png" alt="Andover Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/teacher.png" alt="Teacher of America Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/taft1.png" alt="Taft Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/miami.png" alt="Miami Dade County Logo"></div>
							<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/louisiana.png" alt="Louisiana Logo"></div>
						</div>
					</div>
				</div>
			</section>
		  </div>

		  <!-- last section -->
			<section id="last">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2" >
							<?php  echo get_field('testimonial'); ?>
							

						</div>
					</div>
				</div>
			</section>


<?php
if($_GET["submit"] == "submit") : ?>
				<!-- MODAL -->
  <div class="modal fade" id="myModal-sat-act">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
        </div><!-- modal-header -->
        
        <div class="modal-body">
          
          
                <div class="row">
                  <?php echo get_field('modal_text') ?>
                  <div class="video-container">
                 	<iframe width="560" height="315" src="https://www.youtube.com/embed/3phv7xnbX9A" frameborder="0" allowfullscreen>
                 	</iframe>
                 </div>
                 <h1 class="site-title-heading modal-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PREPWORKS" class="img-responsive"></a>
				</h1>
                </div>
              
        </div><!-- modal-body -->
        
      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->			
		</div>
       <script type="text/javascript">
jQuery(document).ready(function(){
    
        jQuery("#myModal-sat-act").modal('show');
   
});
</script> 
        
<!-- Google Code for Purchase Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 941122904;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "m4IWCMLh0WMQ2MrhwAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/941122904/?label=m4IWCMLh0WMQ2MrhwAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif; endwhile;
		endif;
wp_reset_query();
?>



<?php get_footer('actsat'); ?> 