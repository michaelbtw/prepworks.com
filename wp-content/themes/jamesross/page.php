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
		<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
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
    </main>
		</div>
	</div>
</div>

<?php get_footer(); ?> 