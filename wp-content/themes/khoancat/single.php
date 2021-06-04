<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package khoancat
 */

get_header();
?>

<main>
	<section class="breadcrumbs">
		<div class="container">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="/">Trang chủ <span>/</span></a></li>
				<li class="list-inline-item"><a href="javascript:void(0)"><?php the_title(); ?></a></li>
			</ul>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="detail-content">
						<div class="detail-top text-center">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="detail">
							<?php echo get_the_content(); ?> 
						</div>

						<!-- <div class="test-like">
							<?php echo get_field('số_like') ?>
						</div> -->


						<div class="other-news">
							<div class="title-other">
								<div class="title"><h2>BÀI VIẾT LIÊN QUAN</h2></div>
							</div>
							<div class="row">
								<?php 
									$categories = get_the_category(get_the_ID());
									if ($categories){
									    $category_ids = array();
									    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
									    $args=array(
									        'category__in' => $category_ids,
									        'post__not_in' => array(get_the_ID()),
									        'posts_per_page' => 3,
									    );
									    $my_query = new wp_query($args);
									    if( $my_query->have_posts() ):
									        while ($my_query->have_posts()):$my_query->the_post();
									            ?>
									            <div class="col-md-4 col-sm-4">
													<div class="item-other">
														<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
														<div class="info">
															<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
														</div>
													</div>
												</div>
									            <?php
									        endwhile;
									    endif; wp_reset_query();
									}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="side-bar">
						<div class="box-bar">
							<div class="title-bar text-center">TIN TỨC NỔI BẬT</div>
							<div class="list-item-bar">
								<ul>
									<?php 
				                        $args=array(
				                        	'category_name' => 'Tin tức nổi bật', 
				                            'post_type' => 'post',
				                            'orderby'   => 'publish_date',
				                            'order'     => 'DESC',
				                            'posts_per_page' => 10,
				                        );
				                        $my_query = new wp_query($args);
				                    ?>
				                    <?php $i = 0; ?>

				                    <?php if ( $my_query->have_posts() ): ?>
				                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
											<li><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></li>
						                <?php endwhile ?>
						            <?php endif;wp_reset_query(); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
