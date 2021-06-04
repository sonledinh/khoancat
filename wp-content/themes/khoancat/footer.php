<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package khoancat
 */

?>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="item-ft">
						<div class="title-ft"><?php echo the_field('title_ft_1',('option')) ?></div>
						<div class="info-ft">
							<div class="desc">
								<?php echo the_field('desc_ft_1',('option')) ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-ft">
						<div class="title-ft"><?php echo the_field('title_ft_2',('option')) ?></div>
						<div class="info-ft">
							<ul>
								<?php while ( has_sub_field('link_footer','option' ) ) : ?>
									<li><a href="<?php echo the_sub_field( 'link_footer_href','option' ); ?>">- <?php echo the_sub_field( 'title_link_ft','option' ); ?></a></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-ft" style="overflow: hidden;">
						<div class="title-ft"><?php echo the_field('title_ft_3',('option')) ?></div>
						<div class="info-ft"><?php echo the_field('fanpage',('option')) ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
