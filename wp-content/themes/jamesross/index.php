<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>

<div id="page-topper" style="background: #ffffff 
		url(<?php echo get_site_url(); ?>/wp-content/uploads/2015/10/Prepworks_Header_Press.jpg) no-repeat center top;min-height:169px;margin-bottom:5px;">

	<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/10/Prepworks_Icon.png" alt="" class="page-icon">
    <h1>Press</h1>
</div>

<div class="container">
<div class="row">

				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
</div>
</div>
<?php get_footer(); ?> 