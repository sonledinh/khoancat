<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<main>
	<section class="box-banner">
		<div class="slide-banner">
			<?php while ( has_sub_field('slide_banner' ) ) : ?>
				<div class="item"><a href="<?php the_sub_field( 'link_banner' ); ?>"><img src="<?php echo get_sub_field( 'slide_img' )['url']; ?>" class="img-fluid w-100" alt=""></a></div>
			<?php endwhile; ?>
		</div>
	</section>
	<section class="box-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInUp wHighlight" data-wow-delay=".25s">
					<div class="video-about">
						<?php echo the_field('video_about'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="txt-about text-justify">
						<h1 class="wow fadeInUp wHighlight" data-wow-delay=".25s"><?php echo the_field('title_about'); ?></h1>
						<div class="desc wow fadeInUp wHighlight" data-wow-delay=".55s">
							<?php echo the_field('desc_about'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 
	<section class="box-srv">
		<div class="container">
			<div class="title text-center wow fadeInUp wHighlight" data-wow-delay=".25s"><h2><?php echo the_field('title_price') ?></h2></div>
			<div class="desc-srv wow fadeInUp wHighlight" data-wow-delay=".25s"><?php echo the_field('desc_price') ?></div>
			<div class="list-srv">
				<div class="row">
					<?php 
                        $args_nb=array(
                        	'category_name' => 'Bảng giá', 
                            'post_type' => 'post',
                            'orderby'   => 'publish_date',
                            'order'     => 'DESC',
                            'posts_per_page' => 10,
                        );   
                        $my_query_nb = new wp_query($args_nb);
                    ?>
                    <?php if ( $my_query_nb->have_posts() ): ?>
                    	<?php $svr = 1 ?>
                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
                        	<div class="col-md-4 col-sm-4 wow fadeInUp wHighlight" data-wow-delay=".<?php echo $svr++ ?>5s">
								<div class="item-srv">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" height="240px" alt=""></a></div>
									<div class="info">
										<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
									</div>
								</div> 
							</div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-step" style="background: url('<?php echo get_field('img_banner_step')['url'] ?>') no-repeat center;">
		<div class="container">
			<div class="title text-center wow fadeInUp wHighlight" data-wow-delay=".25s">
				<h2><?php echo the_field('title_step') ?></h2>
			</div>
			<div class="list-step">
				<div class="row">
					<?php $qt=1; ?>
					<?php $qt_anm=1; ?>
					<?php while ( has_sub_field('content_qt' ) ) : ?>
						<div class="col-md-6 wow fadeInUp wHighlight" data-wow-delay=".<?php echo $qt_anm++ ?>5s">
							<div class="item-step">
								<div class="title-step">
									<span class="numb-step"><?php echo $qt++ ?></span>
									<h4><?php the_sub_field( 'title_qt' ); ?></h4>
								</div>
								<div class="desc">
									<?php the_sub_field( 'desc_qt' ); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="box-news">
		<div class="container">
			<div class="title text-center wow fadeInUp wHighlight" data-wow-delay=".25s"><h2>Tin tức mới</h2></div>
			<div class="row">
				<div class="col-md-9">
					<div class="list-new-home">
						<div class="row">
							<div class="col-md-6 wow fadeInUp wHighlight" data-wow-delay=".25s">
								<?php 
			                        $args=array(
			                            'post_type' => 'post',
			                            'orderby'   => 'publish_date',
			                            'order'     => 'DESC',
			                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
			                            'posts_per_page' => 1,
			                        );
			                        $my_query = new wp_query($args);
			                    ?>
			                    <?php if ( $my_query->have_posts() ): ?>
			                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
			                            <?php $i++ ?>

			                            <div class="news-big">
											<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
												<div class="desc"><?php echo get_field('sort_detail') ?></div>
												<div class="btn-main"><a href="<?php echo get_the_permalink() ?>">Chi tiết <i class="fa fa-caret-right"></i></a></div>
											</div>
										</div>
		 
			                        <?php endwhile ?>
			                    <?php endif;wp_reset_query(); ?>
								
							</div>
							<div class="col-md-6">
								<div class="list-new-small">
									<?php 
				                        $args=array(
				                            'post_type' => 'post',
				                            'orderby'   => 'publish_date',
				                            'order'     => 'DESC',
				                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
				                            'posts_per_page' => 5,
				                        );
				                        $my_query = new wp_query($args);
				                        $max_num_pages = $my_query->max_num_pages;
				                    ?>
				                    <?php $i = 0; ?>
				                    <?php if ( $my_query->have_posts() ): ?>
				                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
				                            <?php $i++ ?>
				                            <?php if ($i == 1): ?>
				                                <span style="display: none;">123</span>
				                            <?php else: ?>
				                                <div class="item-small wow fadeInUp wHighlight" data-wow-delay=".<?php echo $i++ ?>5s">
													<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
													<div class="info">
														<h4><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>
														<div class="desc"><?php echo get_field('sort_detail') ?></div>
													</div>
												</div>
				                            <?php endif ?>
				                        <?php endwhile ?>
				                    <?php endif;wp_reset_query(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInUp wHighlight" data-wow-delay=".25s">
					<div class="bar-ac">
						<a href="tel:0964150069"><img src="<?php echo get_field('banner_ads')['url'] ?>" class="img-fluid w-100" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main> 
<?php get_footer() ?>   