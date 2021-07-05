<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
global $product;

?>
<div class="cont contSho">
	<div class="container">
		<h2 class="wow fadeInDown">Sản phẩm</h2>
		<p class="titH2 wow fadeInUp">PRODUCT</p>
	</div>
</div>
<div class="contBody">
	<div class="container">
		<ul class="smallNav d-flex">
			<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
			<li><a href="">Sản phẩm</a></li>
			<li><?php echo get_the_title(); ?></li>
		</ul>
	</div>
	<div class="container max-content">
		<div class="row align-items-center slide-preview">
	        <div class="col-md-6 col-sm-6" id="cardsSlider">
	            <div id="card" class="carousel slide mb-3">
	               	 <div class="carousel-inner">
	                    <div class="active carousel-item text-center" data-slide-number="0">
	                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
	                    </div>
	                    <?php  $attachment_ids = $product->get_gallery_image_ids(); ?>
	                    <?php if (count($attachment_ids)) : ?>
	                    	<?php $index = 1; ?>
	                    	<?php foreach ($attachment_ids as $attachment_id) : ?>
		                    	<div class="carousel-item text-center" data-slide-number="<?php echo $index++ ?>">
			                       <img src="<?php echo wp_get_attachment_url($attachment_id) ?>" alt="">
			                    </div>
		                    <?php endforeach; ?>
	                    <?php endif ?>
	                </div>
	                <!-- main slider carousel nav controls -->
	                <ul class="carousel-indicators list-inline mx-auto">
	                    <li class="list-inline-item active">
	                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#card">
	                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	                        </a>
	                    </li>
	                     <?php if (count($attachment_ids)) : ?>
	                     	<?php $index = 1; ?>
	                    	<?php foreach ($attachment_ids as $attachment_id) : ?>
			                    <li class="list-inline-item">
			                        <a id="carousel-selector-1" data-slide-to="<?php echo $index++ ?>" data-target="#card">
			                           <img src="<?php echo wp_get_attachment_url($attachment_id) ?>" alt="">
			                       </a>
			                    </li>
		                    <?php endforeach; ?>
	                    <?php endif ?>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-6 col-sm-6 cardPoint">
	        	<h4><?php echo get_the_title(); ?></h4>
	        	<!-- <?php echo get_the_excerpt(); ?> -->
	        	<p class="price mb-1 mt-1">
	        		<?php wc_get_template('single-product/price.php'); ?>
	        	</p>
	        	<div class="quantt-buy">
					<?php wc_get_template('single-product/add-to-cart/custom.php'); ?>
				</div>
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">MÔ TẢ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">THÀNH PHẦN</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">HƯỚNG DẪN MUA HÀNG</a>
					</li>
				</ul><!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="tabs-1" role="tabpanel">
						<div class="content-tab">
							<div class="scrollbar" id="style-1">
						      	<div class="force-overflow">
						      		<?php the_content(); ?>
						      	</div>
						    </div>
					  	</div>
					</div>
					<div class="tab-pane" id="tabs-2" role="tabpanel">
						<div class="content-tab">
							<div class="scrollbar" id="style-1">
						    	<div class="force-overflow">
						    		<?php the_field( 'ingredient' ); ?>
						    	</div>
						    </div>
					  	</div>
					</div>
					<div class="tab-pane" id="tabs-3" role="tabpanel">
						<div class="content-tab">
							<div class="scrollbar" id="style-1">
					    		<div class="force-overflow">
					    			<?php the_field( 'shipping' ); ?>
					    		</div>
						    </div>
					  	</div>
					</div>
				</div>
	        </div>	
	    </div>
	    <h5 class="mb-3">Sản phẩm liên quan</h5>
	    <div class="row">
			<?php 
				$pro_args = array(
				    'posts_per_page' => 4,
				    'order' => 'DESC',
				    'orderby' => 'ID',
				    'post_type' => 'product',
				    'post__not_in' => array( get_the_ID() )
				);
				$my_query = new WP_Query( $pro_args);
			?>
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<div class="col-md-3 col-sm-6 col-6">
					<?php do_action('woocommerce_shop_loop');
                    wc_get_template_part('content', 'product'); ?>
				</div>
			<?php endwhile ?>

		</div>
	</div>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
