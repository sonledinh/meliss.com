<?php 
	/* Template Name: Trang chủ */
	get_header();
?>		
	<!-- <header class="site-header">
	  <iframe id="yt-player" src="https://www.youtube.com/embed/<?php the_field( 'video_home' ); ?>?autoplay=1&modestbranding=1&controls=0&showinfo=0&rel=0&enablejsapi=1&version=3&loop=0&playerapiid=ytplayer&allowfullscreen=true&wmode=transparent&iv_load_policy=3&html5=1&playlist=<?php the_field( 'video_home' ); ?>&disablekb=true" frameborder="0"></iframe>
	  <div class="video-overlay"></div>
	</header>
	</section> -->
	<!-- <div class="video">
		
	</div> -->
	<div class="banner-top">
		<?php while ( has_sub_field('baners_top_1' ) ) : ?>
			<div class="item"><img src="<?php the_sub_field('banners') ?>" class="img-fluid w-100" alt=""></div>
		<?php endwhile ?>
	</div>
	<div class='topSlider'>
		<div class="container">
			<div class='single-item'>
				<?php while ( has_sub_field('banners' ) ) : ?>
				    <div class="list-item">
				    	<a href="<?php the_sub_field( 'link' ); ?>" title="<?php the_sub_field( 'title' ); ?>">
				    		<img src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_sub_field( 'title' ); ?>">
				    	</a>
				    </div>
				<?php endwhile ?>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="container">
			<div class="aboutSection">
				<h2 class="wow fadeInUp">Về chúng tôi</h2>
				<p class="titH2 wow fadeInDown">ABOUTUS</p>
				<div class="aboutBody">
					<h3>Giới thiệu về chúng tôi</h3>
					<div class="row align-items-center">
						<div class="col-md-6 col-12">
							<?php the_field( 'content_col_left_about' ); ?>
						</div>
						<div class="col-md-6 col-12">
							<!-- <?php while ( has_sub_field('content_col_right_about' ) ) : ?>
								<ul class="listAbout">
									<li><?php the_sub_field( 'icon' ); ?></li>
									<li><?php the_sub_field( 'content' ); ?></li>
								</ul>
							<?php endwhile ?> -->
							<div class="video-ab">
								 <iframe id="yt-player" src="https://www.youtube.com/embed/<?php the_field( 'video_home' ); ?>?autoplay=1&modestbranding=1&controls=0&showinfo=0&rel=0&enablejsapi=1&version=3&loop=0&playerapiid=ytplayer&allowfullscreen=true&wmode=transparent&iv_load_policy=3&html5=1&playlist=<?php the_field( 'video_home' ); ?>&disablekb=true" frameborder="0"></iframe>
	  							<!-- <div class="video-overlay"></div>  -->
							</div>
						</div>	
					</div>
					<div class="text-center">
						<a href="<?php the_field( 'link_view_more_about' ); ?>" class="btnView">XEM THÊM</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="news">
		<div class="container">
			<div class="newsSection">
				<h2 class="wow fadeInUp">Tin tức</h2>
				<p class="titH2 wow fadeInDown">NEWS</p>
				<div class="newsBody">
					<?php 
						$bg = [
							'bgGreen', 'bgPink', 'bgBlue', 'bgBlueTe', 'bgRed'
						];
						$args=array(  
							'post_type' => 'post',
							'post_status' 		=> 'publish',
							'posts_per_page' 	=> 5,
							'orderby'     		=> 'publish_date',
							'order'       		=> 'DESC',
						);
						$my_query = new WP_query($args);
					?>
					<?php if ( $my_query->have_posts() ): ?>
						<?php $loop = -1;  ?>
						<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
							<?php $loop++;  ?>
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
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<div class="product">
		<div class="productSection">
			<h2 class="wow fadeInUp">Sản phẩm</h2>
			<p class="titH2 wow fadeInDown">PRODUCT</p>
			<div class="productBody">
				<div class="container">
					<div class="row">
						<?php 
							$args=array(  
								'post_type' 		=> 'product',
								'post_status' 		=> 'publish',
								'posts_per_page' 	=> 4,
								'orderby'     		=> 'publish_date',
								'order'       		=> 'DESC',
							);
							$my_query = new WP_query($args); 
						?>
						<?php if ( $my_query->have_posts() ): ?>
							<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
								<div class="col-md-3 col-6 col-sm-6">
									<?php wc_get_template_part( 'content', 'product' ); ?>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hot">
		<div class="hotSection">
			<div class="container">
				<h2 class="wow fadeInUp">Sản phẩm Hot</h2>
				<p class="titH2 wow fadeInDown">HOT PRODUCT</p>
				<div class="hotBody">
					<div class="row">
						<div class="col-md-4 col-12">
							<h3>Sản phẩm Hot tại Công Ty</h3>
							<div class="content mb-5">
								<?php the_field( 'product_col_left' ); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="hotBg">
								<img src="<?php the_field( 'image_products_hot' ); ?>" alt="">
							</div>
						</div>
						<div class="col-md-4 col-12">
							<?php while ( has_sub_field('product_col_right' ) ) : ?>
								<ul class="content">
									<li><?php the_sub_field( 'icon' ); ?></li>
									<li><?php the_sub_field( 'content' ); ?></li>
								</ul>
							<?php endwhile ?>
						</div>
					</div>
					<div class="text-center my-5"><a href="<?php the_field( 'link_product_view_more' ); ?>" class="btnView"> Đặt hàng</a></div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?> 
<!-- <script src='https://www.youtube.com/player_api'></script>   -->
<script>
	$(document).ready(function(){
	    $('.video-ab iframe').each(function(index, el) {
	        var width = $(this).width();
	        $(this).height(width*9/16);
	    });
	});
</script>
<!-- <script>
$(window).on('resize load', function() {
  $('.site-header iframe').each(function() {
    var self = $(this);
    var container = self.parent();

   self.css({
      width: container.width() + "px",
      height: container.width() * (9/16) + 'px',
    });
  });
});

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('yt-player', {
      autoplay : 1,
      videoId: '<?php the_field( 'video_home' ); ?>',
      playerVars : {
        'autoplay' : 1,
        'rel' : 0,
        'showinfo' : 0,
        'showsearch' : 0,
        'controls' : 0,
        'loop' : 1,
        'enablejsapi' : 1,
        'playlist': '<?php the_field( 'video_home' ); ?>'
      },
      events: {
      	"onReady": onPlayerReady,
 			}
	});
}

function onPlayerReady(event) {
	event.target.mute();
  event.target.playVideo();
}
function onPlayerStateChange(event) {        
	var id = '<?php the_field( 'video_home' ); ?>';

    if(event.data === YT.PlayerState.ENDED){
        player.loadVideoById(id);
    }
}
</script> -->