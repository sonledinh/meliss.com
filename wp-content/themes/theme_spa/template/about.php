<?php 
	/* Template Name: Trang giới thiệu */
	get_header();
?>
	<div class="cont contAbo">
		<div class="container">
			<h2 class="wow fadeInDown">Về chúng tôi</h2>
			<p class="titH2 wow fadeInUp">ABOUTUS</p>
		</div>
	</div>
	<div class="contBody">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
				<li>Về chúng tôi</li>
			</ul>
			<div class="text-center aboutView">
				<h3>Giới thiệu về chúng tôi</h3>
			</div>
			<div class="row mb-5 content-about">
				<?php the_content( ); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>