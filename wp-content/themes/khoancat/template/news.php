<?php /* Template Name: Tin tức */ ?>
<?php get_header(); ?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="/">Trang chủ <span>/</span></a></li>
				<li class="list-inline-item"><a href="javascript:void(0)">Category</a></li>
			</ul>
		</div>
	</section> 
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="list-news">
						<?php 
	                        $args=array(
	                            'post_type' => 'post',
	                            'orderby'   => 'publish_date',
	                            'order'     => 'DESC',
	                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
	                            'posts_per_page' => 8,
	                        );
	                        $my_query = new wp_query($args);
	                        $max_num_pages = $my_query->max_num_pages;
	                    ?>
	                    <?php $i = 0; ?>
	                    <?php if ( $my_query->have_posts() ): ?>
	                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
	                        	<div class="item-news">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										<div class="desc">
											Thịnh Quang là một trong những phường đang có nhu cầu Khoan cắt bê tông lớn hiện nay. Tuy nhiên không phải ai cũng biết cách lựa chọn đơn vị uy tín để thi công. Trong bài viết này, chúng…
										</div>
									</div>
								</div>
	                        <?php endwhile ?>
	                    <?php endif;wp_reset_query(); ?>
						<div class="item-news">
							<div class="avarta"><a href=""><img src="http://khoancatbetong24h.com/wp-content/uploads/2019/08/khoan-be-tong-thinh-quang-gia-re-300x169.jpg" class="img-fluid w-100" alt=""></a></div>
							<div class="info">
								<h3><a href="">Hướng dẫn lựa chọn đơn vị Khoan cắt bê tông uy tín tại Thịnh Quang</a></h3>
								<div class="desc">
									Thịnh Quang là một trong những phường đang có nhu cầu Khoan cắt bê tông lớn hiện nay. Tuy nhiên không phải ai cũng biết cách lựa chọn đơn vị uy tín để thi công. Trong bài viết này, chúng…
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="side-bar">
						<div class="box-bar">
							<div class="title-bar text-center">BÀI VIẾT MỚI</div>
							<div class="list-item-bar">
								<ul>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
									<li><a href="">Địa chỉ khoan cắt bê tông Tầm Xá uy tín, chuyên nghiệp, phục vụ 24/7</a></li>
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