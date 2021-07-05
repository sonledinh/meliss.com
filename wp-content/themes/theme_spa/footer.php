<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_spa
 */

?>
	</main>
	<footer>
		<div class="container">
			<div class="content">
				<div class="footer-top">
					<div class="row">
						<?php $col_1 = get_field('footer_col_1', 'options'); ?>
						<div class="col-md-3">
							<div class="item">
								<div class="title-ft"><?php echo $col_1['title'] ?></div>
								<div class="link-ft">
									<?php echo $col_1['content'] ?>
								</div>
							</div>
						</div>
						<?php $col_2 = get_field('footer_col_2', 'options'); ?>
						<div class="col-md-3">
							<div class="item">
								<div class="title-ft"><?php echo $col_2['title'] ?></div>
								<div class="link-ft">
									<?php echo $col_2['content'] ?>
								</div>
							</div>
						</div>
						<?php $col_3 = get_field('footer_col_3', 'options'); ?>
						<div class="col-md-3">
							<div class="item">
								<div class="title-ft"><?php echo $col_3['title'] ?></div>
								<div class="link-ft">
									<?php echo $col_3['content'] ?>
								</div>
							</div>
						</div>
						<?php $col_4 = get_field('footer_col_4', 'options'); ?>
						<div class="col-md-3">
							<div class="item">
								<div class="title-ft"><?php echo $col_4['title'] ?></div>
								<div class="info">
									<?php echo $col_4['content'] ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="reserved text-center"><?php the_field( 'coppyright', 'options' ); ?></div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<script type="text/javascript">
		new WOW().init();
	</script>

</body>
</html>
