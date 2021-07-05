<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_spa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		ul.carousel-indicators.list-inline.mx-auto img {
		    width: 100px;
		}
		span.woocommerce-input-wrapper {
		    display: block;
		    width: 100%;
		}
		.form span.icon {
		    color: #f8b2cd;
		    position: absolute;
		    font-size: 20px;
		    padding: 4px 18px;
		}
		.list-pay li {
		    list-style: none;
		}
		.wc-bacs-bank-details-heading {
		    font-family: unset;
		    color: black;
		}.wc-bacs-bank-details-heading:before,h3.wc-bacs-bank-details-account-name:before, .woocommerce-order.custom-css h3:before, .woocommerce-order.custom-css h2:before{
			display: none;
		}
		h3.wc-bacs-bank-details-account-name {
		    font-family: unset;
		}
		.woocommerce-order.custom-css h3,.woocommerce-order.custom-css h2{
			font-family: unset;
			color: black;
			margin-bottom: 10px;
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="row">
			<div class="col-lg-5 col-3">
				<div class="logo">
					<a href="<?php echo home_url( '/' ); ?>"><img src="<?php the_field( 'logo_site', 'options' ); ?>" alt=""></a>
				</div>
			</div>
			<div class="col-lg-2 col-9">
				<div class="tit text-center">
					<a href="<?php echo home_url( '/' ); ?>"><p class="titBig wow fadeInUp">MELISS</p>
					<p class="titSmall wow fadeInDown">COSMETIC</p></a>
				</div>
				<div class="t-cart d-none">
					<a href="<?php echo home_url( 'gio-hang' ) ?>"><i class="fa fa-shopping-cart"></i><span><?php echo wc()->cart->get_cart_contents_count(); ?></span></a>
				</div>
				<div class="btn-menu">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="spNav collapse navbar-collapse" id="navbarCollapse">
					<ul class="navLeft">
						<?php wp_nav_menu( array(
	                        'theme_location' => 'menu-1',
	                        'container' => 'ul', 
	                        'container_class' => 'navLeft', 
	                        'menu_class' => 'navLeft'
	                    )); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<div class="rightMenu">
					<ul class="text-right">
						<li>
							<p class="hotline">HOTLINE</p>
							<p class="phone"><?php the_field( 'phone', 'options' ); ?></p>
						</li>
						<li>
							<p class="mail">
								<a href="<?php echo home_url( 'lien-he' ) ?>">
									<span><i class="fa fa-envelope"></i></span>
									<span>LIÊN HỆ</span>
								</a>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="navTop">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<?php wp_nav_menu( array(
	                        'theme_location' => 'menu-1',
	                        'container' => 'ul', 
	                        'container_class' => 'navLeft', 
	                        'menu_class' => 'navLeft'
	                    )); ?>
					</div>
					<div class="col-md-3">
						<ul class="navRight">
							<li>
								<div class="search">
									<a href="javascript:0"><i class="fa fa-search"></i></a>
									<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET">
										<input type="hidden" name="post_type" value="product" />
										<div class="form-search">
											<input type="text" placeholder="Nhập từ khóa tìm kiếm ..." name="s" value="<?php echo get_search_query(); ?>">
											<button><i class="fa fa-search"></i></button>
										</div>
									</form>
								</div>
							</li>
							<li><a href="<?php echo home_url( 'gio-hang' ) ?>"><i class="fa fa-shopping-cart"></i><span><?php echo wc()->cart->get_cart_contents_count(); ?></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>