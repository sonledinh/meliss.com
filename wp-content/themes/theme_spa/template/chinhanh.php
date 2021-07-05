<?php 
	/* Template Name: Trang bản đồ */
	get_header();
?>

<div class="cont contAbo">
	<div class="container">
		<h2 class="wow fadeInDown">Chi nhánh</h2>
	</div>
</div>
<div class="contBody">
	<div class="container">
		<ul class="smallNav d-flex">
			<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
			<li>Chi nhánh</li>
		</ul>
		<div class="text-center aboutView">
			<h3>Chi nhánh</h3>
		</div>
		<div class="row content-about">
			<?php the_content( ); ?>

			<?php echo do_shortcode( '[devvn_local_stores]' );; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>