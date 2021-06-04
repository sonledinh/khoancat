<?php /* Template Name: Giới thiệu */ ?>
<?php get_header(); ?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="/">Trang chủ <span>/</span></a></li>
				<li class="list-inline-item"><a href="javascript:void(0)">Giới thiệu dịch vụ</a></li>
			</ul>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="detail-content">
						<div class="detail-top text-center">
							<h1> <?php echo the_field('title_pages_about') ?> </h1>
						</div>
						<div class="detail">
							<?php echo get_the_content(); ?> 
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
<?php get_footer() ?>   