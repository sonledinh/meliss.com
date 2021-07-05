<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="productItem">
	<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
	
	<div class="avarta"><a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
	<div class="info-prd">
		<div class="prd-flx">
			<p class="price"><?php echo wc_price( $price ); ?></p>
			<div class="content"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
			<!-- <div class="text-center"><a href="<?php echo get_the_permalink(); ?>" class="btnView">ĐẶT HÀNG</a></div>  -->
		</div>
	</div>
</div>
