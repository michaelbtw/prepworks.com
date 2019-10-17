<?php
/**
Template Name: Product Specials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
<hr>
		

		<?php
			/**
			 * woocommerce_archive_description hook
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

		<?php if ( have_posts() ) :

			$args = array(
    'post_type'      => 'product',
    'meta_query'     => array(
        'relation' => 'OR',
        array( // Simple products type
            'key'           => '_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        ),
        array( // Variable products type
            'key'           => '_min_variation_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        )
    )
);

query_posts( $args );

			
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

			<div class="row">
				<div class="col-md-3">
                <h4>Categories</h4>
                <hr>
				<?php
						
  					  $current_slug = str_replace("/product-category/", "", $_SERVER[REQUEST_URI]);
					  $current_slug = str_replace("/", "", $current_slug);
						
					  $taxonomy     = 'product_cat';
					  $orderby      = 'menu_order';  
					  $show_count   = 0;      // 1 for yes, 0 for no
					  $pad_counts   = 0;      // 1 for yes, 0 for no
					  $hierarchical = 1;      // 1 for yes, 0 for no  
					  $title        = '';  
					  $empty        = 0;
					
					  $args = array(
							 'taxonomy'     => $taxonomy,
							 'orderby'      => $orderby,
							 'show_count'   => $show_count,
							 'pad_counts'   => $pad_counts,
							 'hierarchical' => $hierarchical,
							 'title_li'     => $title,
							 'hide_empty'   => $empty
					  );
					 $all_categories = get_categories( $args );
					 
					 if($current_slug == "enroll-now") echo "<strong style=\"font-size:110%;\">";
					 echo '<a href="'.get_site_url().'/enroll-now/">All Products</a>';
					 if($current_slug == "enroll-now") echo "</strong>";
								echo '<hr style="margin:5px 0;">';
					 
					 foreach ($all_categories as $cat) {
						if($cat->category_parent == 0) {
							$category_id = $cat->term_id;       
							if($cat->name != "Course Options")
							{
								if($current_slug == $cat->slug) echo "<strong style=\"font-size:110%;\">";
								echo '<a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
								if($current_slug == $cat->slug) echo "</strong>";
								if($cat->name != "VPI")
								echo '<hr style="margin:5px 0;">';
							}
						}       
					}
					?>
				</div>
               <div class="col-md-9" style="padding-top: 25px;"> 
				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>
                </div>
            </div>    

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
<script>
jQuery( document ).ready(function() {
    jQuery( 'body').addClass('woocommerce');
});
</script>
