<?php

/*
Template Name: Page Contact
Template Post Type: post, page, my-post-type
*/
?>
<?php get_header() ?>
<main>
	<div id="banner">
		<div class="banner banner_tcon">
			<?php
			$args = array(
				'post_per_page' => -1,
				'post_type' => 'slider2',
			);
			// query
			$the_query = new WP_Query($args);
			?>
			<?php if ($the_query->have_posts()): ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="khungAnh">
							<span class="khungAnhCrop">
								<?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
							</span>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
		</div>
		<div class="breadcrumb">
			<?php
			dimox_breadcrumbs();
			?>
		</div>
	</div>
	<section id="lienHe">
		<div class="container">
			<div class="row">
				<div class="left">
					<p class="title">SẮT NGHỆ THUẬT TRẦN GIA</p>
					<ul class="info list-unstyled">
						<li>Trụ sở: <?php the_field('address', 'option'); ?></li>
						<li>Hotline: <a href="tel:0971003388"><?php the_field('phone_number', 'option'); ?></a></li>
						<li>facebook: <a href="<?php the_field('facebook', 'option'); ?>"><?php the_field('facebook', 'option'); ?></a></li>
						<li>Website: <a href="<?php the_field('website', 'option'); ?>"><?php the_field('website', 'option'); ?></a></li>
						<li>Email: <a href="mailto:<?php the_field('website', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
					</ul>
					<div class="block_form">
						<p class="title">VUI LÒNG liên hệ VỚI cho chúng tôi</p>
							<?php echo do_shortcode('[contact-form-7 id="30" title="Liên Hệ"]'); ?>
					</div>
				</div>
				<div class="right">
					<p class="title">Địa điểm công ty</p>
					<div id="map2">
						<div class="mapborder">
							<?php the_field('google_map', 'option'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>
