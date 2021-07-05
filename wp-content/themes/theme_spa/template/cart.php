<?php 
	/* Template Name: Trang giỏ hàng */
	get_header();
?>
	<div class="cont contCon">
		<div class="container">
			<h2 class="wow fadeInDown">Giỏ hàng</h2>
			<p class="titH2 wow fadeInUp">SHOPPING CART</p>
		</div>
	</div>
	<div class="contBody" style="margin-bottom: 0;">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
				<li>Giỏ hàng</li>
			</ul>
		</div>
	</div>
	<section id="cart">
		<div class="container">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>