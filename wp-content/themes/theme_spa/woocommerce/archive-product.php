<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( );?>

<div class="cont contSho">
	<div class="container">
		<h2 class="wow fadeInDown">Sản phẩm</h2>
		<p class="titH2 wow fadeInUp">PRODUCT</p>
	</div>
</div>
<div class="contBody">
	<div class="container">
		<ul class="smallNav d-flex">
			<li><a href="<?php echo home_url( '/' ) ?>">Trang chủ</a></li>
			<li>Cửa hàng</li>
		</ul>
	</div>
	<div class="productBody">
		<div class="container">
			<div class="row mb-5">
				<?php if (woocommerce_product_loop()): ?>
					<?php if ( wc_get_loop_prop( 'total' ) ): ?>
						<?php 
							while ( have_posts() ) {
								the_post();
								do_action( 'woocommerce_shop_loop' );
								echo '<div class="col-md-3">';
								wc_get_template_part( 'content', 'product' );
								echo '</div>';
							}
						?>
					<?php endif ?>
				<?php else: ?>
					<?php do_action( 'woocommerce_no_products_found' ); ?>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(  );
