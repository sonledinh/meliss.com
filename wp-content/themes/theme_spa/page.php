<?php 
	get_header();
?>
	<div class="cont contAbo">
		<div class="container">
			<h2 class="wow fadeInDown"><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="contBody">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
				<li><?php the_title(); ?></li>
			</ul>
			<div class="text-center aboutView">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="row mb-5 content-about">
				<?php the_content( ); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>