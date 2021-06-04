<?php /* Template Name: Liên hệ */ ?>
<?php get_header(); ?>
<main>
	<section class="breadcrumbs">
		<div class="container">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="/">Trang chủ <span>/</span></a></li>
				<li class="list-inline-item"><a href="javascript:void(0)">Liên hệ</a></li>
			</ul>
		</div>
	</section>
	<section class="box-contact">
		<div class="container">
			<div class="title text-center text-uppercase">
				<h2><span><?php echo the_field('title_contact') ?></span></h2>
			</div>
			<div class="content-contact">
				<div class="row">
					<div class="col-md-7">
						<div class="info-contact">
							<ul>
								<?php while ( has_sub_field('infomation_contact' ) ) : ?>
									<li><?php the_sub_field( 'thong_tin' ); ?></li>
								<?php endwhile; ?>
							</ul> 
							<div class="desc">
								<?php echo the_field('desc_contact'); ?>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="frm-contact">
							<?php echo do_shortcode('[contact-form-7 id="75" title="Form liên hệ 1"]'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="maps">
				<?php echo the_field('maps') ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>   