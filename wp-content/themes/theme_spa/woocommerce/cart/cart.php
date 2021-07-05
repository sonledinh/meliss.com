<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;?>

<div class="table-responsive">
	<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
		<?php do_action( 'woocommerce_before_cart_table' ); ?>

		<table class="table table-bordered table-hover">
			<thead>
	            <tr>
	              	<th class="text-center">STT</th>
	              	<th>Sản phẩm</th>
	              	<th class="text-center">Giá</th>
	              	<th class="text-center">Số lượng</th>
	              	<th class="text-center">Tổng tiền</th>
	              	<th class="text-center">Xóa</th>
	            </tr>
	        </thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ): ?>
					<?php $_product  = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key ); ?>
					<?php if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key )): ?>
						<?php $product_permalink = apply_filters('woocommerce_cart_item_permalink',$_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key ); ?>
						<tr>
			              	<td class="text-center"><strong><?php echo $i++ ?></strong></td>
			              	<td>
				              	<div class="item">
				              		<div class="avarta">
				              			<a href="<?php echo get_permalink($product_id);?>">
				              				<img src="<?php echo get_the_post_thumbnail_url($product_id);?>" width="80" height="80" class="img-fluid" alt="">
				              			</a>
				              		</div>
				              		<div class="info">
				              			<a href="<?php echo get_permalink($product_id);?>"><?php echo $_product->get_name() ?></a>
				              		</div>
				              	</div>
				            </td>
				            <td class="text-center">
				            	<div class="price">
				            		<?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); ?>
				            	</div>
				            </td>
				            <td>
				            	<div class="quantity">
					            	<?php 
					            		$product_quantity = woocommerce_quantity_input(
											array(
												'input_name'   => "cart[{$cart_item_key}][qty]",
												'input_value'  => $cart_item['quantity'],
												'max_value'    => $_product->get_max_purchase_quantity(),
												'min_value'    => '0',
												'product_name' => $_product->get_name(),
											),
											$_product,
											false
										);
										echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
					            	?>
				            	</div>
				            </td>
				            <td class="text-center">
				            	<div class="price">
				            		<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
				            	</div>
				            </td>
				            <td class="text-center">
				            	<div class="remove">
					            	<?php
										echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											'woocommerce_cart_item_remove_link',
											sprintf(
												'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><img src="'.__BASE_URL__.'/images/remove.png" class="img-fluid" alt=""></a>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												esc_html__( 'Remove this item', 'woocommerce' ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											),
											$cart_item_key
										);
									?>
								</div>
				            </td>
			          	</tr>
					<?php endif ?>
				<?php endforeach ?>
			</tbody>	
		</table>
	</form>
</div>

 <div class="contn">
	<div class="row">
		<div class="col-md-8 col-sm-8">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="<?php echo home_url( '/' ); ?>" class="back-prd"><i class="fa fa-angle-double-left"></i>Tiếp tục mua hàng</a></li>
				<li class="list-inline-item"><a href="<?php echo home_url( 'thanh-toan' ); ?>" class="buynow">MUA NGAY</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="total text-right">Tổng: <?php echo number_format(WC()->cart->get_cart_contents_total(), 0, '.', '.') ?>đ</div>
		</div>
	</div>
</div>
<?php do_action( 'woocommerce_after_cart' ); ?>
