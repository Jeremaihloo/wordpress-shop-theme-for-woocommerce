<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>

		<div class="blend-flexbox blend-listview-item">
			<span class="blend-checkbox blend-checkbox-default blend-flexbox-item"></span>
			<div class="blend-flexbox-item">
				<a href="<?php the_permalink(); ?>"><img class="blend-listview-item-pic" src="<?php echo wc_placeholder_img_src(); ?>" alt="pic"/></a>
			</div>

			<div class="blend-flexbox-item blend-flexbox-ratio">
				<div class="blend-listview-item-title">
					<?php the_title(); ?>
				</div>
				<div class="blend-listview-item-badge">
					<span class="blend-badge blend-badge-empty">随订随用</span>
					<span class="blend-badge blend-badge-empty">随订随用</span>
				</div>
				<div class="blend-listview-item-price">
					<?php echo woocommerce_template_loop_price(); ?>
				</div>
			</div>
			<div data-blend-widget="counter" class="blend-counter blend-listview-conter-box">
				<div class="blend-counter-minus" onclick="removeFromCart(<?php echo $product->id; ?>)"></div>
				<?php

				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

					if($product->id==$cart_item['product_id']){
						$current_product_count = $cart_item['quantity'];
						$current_product_key = $cart_item_key;
					}
				}

				?>
				<input class="blend-counter-input" type="text" data-key="<?php echo $current_product_key; ?>" data-id="<?php echo $product->id; ?>" value="<?php echo $current_product_count; ?>">
				<div class="blend-counter-plus" onclick="addToCart(<?php echo "'".$product->add_to_cart_url()."'"; ?>)"></div>
			</div>
		</div>