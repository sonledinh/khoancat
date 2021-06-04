<?php /* Template Name: Tin tức */ ?>
<?php get_header(); ?>
<?php 
	$cutstr = trim($_SERVER['REQUEST_URI'],'/');
	$exstr =  explode('/',$cutstr);
	$pp = get_terms( array(
	    'taxonomy' => 'category',
	    'hide_empty' => false,
		'slug' => $exstr[0],
	) );

	$parent = get_terms( array(
	    'taxonomy' => 'category',
	    'hide_empty' => false,
	    'parent' => $pp[0]->term_id,
	) );

	$query = $_SERVER['QUERY_STRING'];
	if ($query) {
	    $key = substr($query, 4);
		$args=array(
	    	'category__in' => get_queried_object_id(),
	        'post_type' => 'post',
	        'orderby'   => 'publish_date',
	        'order'     => 'DESC',
	        'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
	        'posts_per_page' => 100,
	        's' => $key,
	    ); 
	}else{
		$args=array(
	    	'category__in' => get_queried_object_id(),
	        'post_type' => 'post',
	        'orderby'   => 'publish_date',
	        'order'     => 'DESC',
	        'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
	        'posts_per_page' => 15,
	    ); 
	}
 ?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="/">Trang chủ <span>/</span></a></li>
				<li class="list-inline-item"><a href="javascript:void(0)"><?php single_cat_title(); ?></a></li>
			</ul>
		</div>
	</section> 
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="list-news">
						<?php 
	                        $my_query = new wp_query($args);
	                        $max_num_pages = $my_query->max_num_pages;
	                    ?>
	                    <?php $i = 0; ?>
	                    <?php if ( $my_query->have_posts() ): ?>
	                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
	                            <?php $i++ ?>

	                            <div class="item-news">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										<div class="desc">
											<?php echo get_field('sort_detail') ?>
										</div>
									</div>
								</div>
 
	                        <?php endwhile ?>
	                    <?php endif;wp_reset_query(); ?>
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