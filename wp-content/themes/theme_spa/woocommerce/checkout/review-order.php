<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="info-dh">
	<ul>
		<li>
			<p><strong>Sản phẩm</strong></p>
			<p><strong>Tổng</strong></p>
		</li>
		<?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item): ?>
			<?php $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key ); ?>
			<?php if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ): ?>
				<li>
					<p><a href="<?php echo get_the_permalink( $product_id ); ?>"><?php echo get_the_title( $product_id ); ?><strong>x <?php echo $cart_item['quantity'] ?></strong> </a></p>
					<p><strong><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );?></strong></p>
				</li>
			<?php endif ?>
			
		<?php endforeach ?>
		<li class="total">
			<p><strong>Tổng</strong></p>
			<p><strong><?php wc_cart_totals_subtotal_html(); ?></strong></p>
		</li>
	</ul>
</div>
