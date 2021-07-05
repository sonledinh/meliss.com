<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme_spa
 */

get_header();
?>
	<div class="cont contNews">
		<div class="container">
			<h2 class="wow fadeInDown">Tin tức</h2>
			<p class="titH2 wow fadeInUp">NEWS</p>
		</div>
	</div>
	<div class="contBody">
		<div class="container">
			<ul class="smallNav d-flex">
				<li><a href="<?php echo home_url( '/' ); ?>">Trang chủ</a></li>
				<li><a href="<?php echo home_url( 'tin-tuc' ); ?>">Tin tức</a></li>
				<li><?php echo get_the_title(); ?></li>
			</ul>
			<div class="newsDetail">
				<h5 class="mb-4"><?php echo get_the_title(); ?></h5>
				<div class="content">
					<?php echo get_the_content(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
