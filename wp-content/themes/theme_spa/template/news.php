<?php 
	/* Template Name: Trang tin tức */
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
					<li>Tin tức</li>
				</ul>
				<div class="newsBody mb-5">
					<?php
						$bg = [
							'bgGreen', 'bgPink', 'bgBlue', 'bgBlueTe', 'bgRed', 'bgGreen', 'bgPink', 'bgBlue', 'bgBlueTe', 'bgRed', 'bgGreen', 'bgPink',
						];
						$args=array(  
							'post_type' => 'post',
							'post_status' 		=> 'publish',
							'posts_per_page' 	=> 12,
							'orderby'     		=> 'publish_date',
							'order'       		=> 'DESC',
							'paged' 			=> get_query_var('paged') ? get_query_var('paged') : 1,
						);
						$my_query = new WP_query($args);
						$max_num_pages = $my_query->max_num_pages;
					?>
					<?php if ( $my_query->have_posts() ): ?>
						<?php $loop =0; ?>
						<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
							<?php $loop++ ?>
							<div class="row">
								<div class="col-md-2 col-5">
									<div class="content time">
										<?php echo get_the_date(); ?>
									</div>
								</div>
								<div class="col-md-2 col-7">
									<div class="content <?php echo @$bg[$loop] ?>">
										<?php 
											$category = get_the_category( get_the_ID() );
											echo $category[0]->name;
										?>
									</div>
								</div>
								<div class="col-md-8 col-12">
									<a href="<?php echo get_the_permalink(); ?>" class="content"><?php echo get_the_title(); ?></a>
								</div>
							</div>
						<?php endwhile;wp_reset_query(); ?>
					<?php endif; ?>	
				</div>
				<ul class="chTran d-flex">
					<?php paginationCustom($max_num_pages) ?>
				</ul>
			</div>
		</div>

<?php get_footer(); ?>