<?php 
	/* Template Name: Trang liên hệ */
	get_header();
?>
	<style>
		.contBody .formContact br{
			display: none;
		}
		.wpcf7-form-control-wrap {
			 position: unset; 
		}
	</style>
	<div class="cont contCon">
		<div class="container">
			<h2 class="wow fadeInDown">Liên Hệ</h2>
			<p class="titH2 wow fadeInUp">CONTACT</p>
		</div>
	</div>
	<div class="contBody">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="">Trang chủ</a></li>
				<li>Liên hệ</li>
			</ul>
			<div class="contact">
				<div class="text-center contactBox">
					<h4>Vui lòng liên hệ với chúng tôi</h4>
					<p class="phoneCont"><?php the_field( 'phone', 'options' ); ?></p>
				</div>
			</div>
			
			<?php echo do_shortcode( '[contact-form-7 id="86" title="Liên hệ"]' ); ?>
			
		</div>
	</div>

<?php get_footer(); ?>