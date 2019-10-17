<?php
/**
 * Grouped product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $post;

$parent_product_post = $post;

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<!--<form class="cart" method="post" enctype='multipart/form-data' <?php if($_SERVER[REQUEST_URI] == "/product/virtual-private-instruction-addon/") echo 'style="display:none;"'; ?>>-->
	<div class="row">
			<?php
				foreach ( $grouped_products as $product_id ) :
					$product = wc_get_product( $product_id );

					if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) && ! $product->is_in_stock() ) {
						continue;
					}

					$post    = $product->post;
					setup_postdata( $post );
					?>
					<div class="col-md-8 col-sm-9">
							
						<div class="price">
							<?php
							
								echo "<span style=\"font-weight:bold;font-size:18px;\">".$product->get_price_html()."</span>";

								if ( $availability = $product->get_availability() ) {
									$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';
									echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
								}
							?>
                            <br>USD
						</div>

						<div class="label">
							<label for="product-<?php echo $product_id; ?>">
								<?php echo get_the_title(); ?>
							</label>
						</div>

						<?php do_action ( 'woocommerce_grouped_product_list_before_price', $product ); ?>

						
					</div>
                   <div class="col-md-4 col-sm-3 atc" style="padding-top:13px;"> 
                   <form class="cart" method="post" enctype='multipart/form-data' <?php if($_SERVER[REQUEST_URI] == "/product/virtual-private-instruction-addon/") echo 'style="display:none;"'; ?>>
                   <?php if ( $product->is_sold_individually() || ! $product->is_purchasable() ) : ?>
								<?php woocommerce_template_loop_add_to_cart(); ?>
							<?php else : ?>
								<?php
									$quantites_required = true;
									
									woocommerce_quantity_input( array(
										'input_name'  => 'quantity[' . $product_id . ']',
										'input_value' => ( isset( $_POST['quantity'][$product_id] ) ? wc_stock_amount( $_POST['quantity'][$product_id] ) : 1 ),
										'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 0, $product ),
										'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product )
									) );
								?>
							<?php endif; ?>
                           
                           <button type="submit" class="single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button> <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" /></form>
                     </div>   
                     <div style="clear:both;"></div>    
					<?php
				endforeach;

				// Reset to parent grouped product
				$post    = $parent_product_post;
				$product = wc_get_product( $parent_product_post->ID );
				setup_postdata( $parent_product_post );
			?>
		</div>

	

	<?php if ( $quantites_required ) : ?>

		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>


		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<?php endif; ?>
    
<!--</form>-->

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
