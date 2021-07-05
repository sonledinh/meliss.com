<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="content-pay">
	<div class="pay-sale">
		<div class="title-pay">Bạn có mã ưu đãi? <a href="javascript:0" class="showcoupon">Ấn vào đây để nhập mã</a></div>
		<div class="box-code">
			<p>Nếu bạn có mã giảm giá, vui lòng điền vào phía bên dưới.</p>
			<div class="form-code">
				<form class="checkout_coupon woocommerce-form-coupon" method="post">
					<input type="text" name="coupon_code" class="input-text" placeholder="Nhập mã ưu đãi" id="coupon_code" value="" />
					<button type="submit" class="button" name="apply_coupon" value="Áp dụng">Áp dụng</button>
				</form>
			</div>
		</div>
	</div>
</div>
