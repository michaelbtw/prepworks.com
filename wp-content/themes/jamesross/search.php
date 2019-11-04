<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();

echo '<div id="page-topper" style="background: #ffffff 
		url('.get_site_url().'/wp-content/uploads/2015/10/Prepworks_Header_Ecommerce.jpg) no-repeat center top;min-height:169px;margin-bottom:5px;">

	<img src="'.get_site_url().'/wp-content/uploads/2015/10/Prepworks_Icon.png" alt="" class="page-icon">
    
</div>';
?> 



<div class="container">
	<div class="row">

<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						<header class="page-header">
							<h1 class="page-title"><?php printf(__('Search Results for: %s', 'bootstrap-basic'), '<span>' . get_search_query() . '</span>'); ?></h1>
						</header><!-- .page-header -->
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', 'search');
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'search'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
		</div>
</div>
<?php get_footer(); ?> 