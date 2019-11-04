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
 $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<!--Custom page topper-->
<div id="page-topper" style="background: #ffffff url(<?php echo $url; ?>) no-repeat center top;">
	<?php
		$image = get_field('header_icon');
		
		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="page-icon"/>

		<?php endif; ?>
		
    <h1><?php the_title(); ?></h1>
    
</div>
<!--End Custom page topper-->

<div class="container">
	<div class="row">
		<div class="col-md-12 content-area" id="main-column">
    <main id="main" class="site-main" role="main">
        <?php 
        while (have_posts()) {
            the_post();

            get_template_part('content', 'page');

            echo "\n\n";
            
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) {
                comments_template();
            }

            echo "\n\n";

        } //endwhile;
        ?> 
        
        <div id="_maps" class="row">
        	<div class="col-md-6 col-sm-6" >
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14381.77618478753!2d-80.16908436474134!3d25.689718000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ca6b4ee874f5%3A0x68b25b50a21f8f62!2s604+Crandon+Blvd+%23201%2C+Key+Biscayne%2C+FL+33149!5e0!3m2!1sen!2sus!4v1449156712555" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div style="padding:10px;">
			<a href="https://www.google.com/maps/place/604+Crandon+Blvd+%23201,+Key+Biscayne,+FL+33149/@25.6897181,-80.1668954,17z/data=!3m1!4b1!4m2!3m1!1s0x88d9ca6b4ee874f5:0x68b25b50a21f8f62" style="display:block;margin-top:10px;" target="_blank">View Larger Map
            </a>
			<p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Prepworks Logo" width="162" height="27" ><br><strong>Key Biscayne</strong><br>
  604 Crandon Boulevard, Suite 201<br>
  Key Biscayne, Florida 33149<br>
  <strong>T. 855 365 7737<br>
    F. 305 459 1833</strong><br>
  <a href="mailto:info@myprepworks.com">info@prepworks.com</a>
  			</p>
  			</div>
  				</div>
  			<div class="col-md-6 col-sm-6">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28754.52659435267!2d-80.26040156123136!3d25.727067383652535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b7cf8c05535d%3A0xc3468c38cd7bfdac!2s3439+Main+Hwy+Suite+A+%2C+Miami%2C+FL+33133!5e0!3m2!1sen!2sus!4v1449156877986" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div style="padding:10px;">
			<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3439+Main+Highway,+Suite+A+Coconut+Grove,+Florida+33133+&amp;sll=37.0625,-95.677068&amp;sspn=46.543597,85.517578&amp;ie=UTF8&amp;hq=&amp;hnear=3439+Main+Hwy,+Miami,+Miami-Dade,+Florida+33133&amp;ll=25.73504,-80.240278&amp;spn=0.026829,0.045919&amp;z=14&amp;iwloc=A" style="display:block;margin-top:10px;" target="_blank">View Larger Map
            </a>
            <p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Prepworks Logo" width="162" height="27" ><br><strong>Coconut Grove</strong><br>
  3439 Main Highway, Suite A<br>
  Miami, Florida 33133<br>
  <strong>T.  855 365 7737<br>
    F. 305 459 1833</strong><br>
 	 		<a href="mailto:info@myprepworks.com">info@prepworks.com</a>
  			</p>
            </div>
		</div>
        </div>
    </main>
		</div>
	</div>
</div>

<?php get_footer(); ?> 
