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
              <p class="sat-border">*Disclaimer: Students must log a minimum of 50 hours in the course and complete all activities and practice tests.</p>
            	<div class="col-md-3">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="PREPWORKS" class="sat-footer-logo">
                   <ul id="footer-social-media">
                   	<li><a href="https://www.facebook.com/Prepworks/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-facebook.png" alt="PREPWORKS on Facebook"></a></li>
                    	<li><a href="https://www.youtube.com/channel/UCb9MT72MBRIPJeDwhK6knlA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-youtube.png" alt="PREPWORKS on YouTube"></a></li>
                      <li><a href="https://twitter.com/prepworks" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-twitter.png" alt="PREPWORKS on Twitter"></a></li>
                      <li><a href="mailto:info@myprepworks.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-email.png" alt="Email PREPWORKS"></a></li>  
                   </ul> 
                </div>

                <div class="col-md-3">

                </div>


                <div class="col-md-3">
                  <div class="sat-footer-logo extra">
                    <p>QUESTION?</p>
                    <p class="number">855-365-PREP</p>
                    <a href="mailto:info@myprepworkworks.com">info@myprepworkworks.com</a>
                  </div>
                </div>


                <div class="col-md-3">
                  <div class="sat-footer-logo extra"> 
                    <p>KEY BISCAYNE</p>
                    <address class="number">604 Crandon Boulevard, Suite 201<br>
                    Key Biscayne, Florida 33149</address>
                    <p>Miami</p>
                    <address  class="number">3439 Main Highway, Suite A<br>
                    Miami, Florida 33133</address>
                  </div>
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
                </div>
                

            	<div class="col-md-12 col-sm-12 copyright">
                	&copy; <?php date_default_timezone_set('UTC'); echo date("Y"); ?> Copyright Prepworks, LLC. All Rights Reserved.
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

	</body>
</html>