<?php 
	/* Template Name: Trang thanh toán */
	get_header();
?>
	<div class="cont contCon">
		<div class="container">
			<h2 class="wow fadeInDown">Thanh toán</h2>
			<p class="titH2 wow fadeInUp">PAYMENT</p>
		</div>
	</div>
	<div class="contBody" style="margin-bottom: 0;">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
				<li>Thanh toán</li>
			</ul>
		</div>
	</div>
	<section id="payment">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
	
<?php get_footer(); ?>