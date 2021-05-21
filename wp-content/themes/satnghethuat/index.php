<?php get_header() ?>
	<main>
		<div id="backtop">
			<a href="#" title="Back To Top">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</a>
		</div>
		<div id="banner">
			<div class="banner banner_tchu" id="banner_tchu">
				<?php
				$args = array(
					'post_per_page' => -1,
					'post_type' => 'slider',
				);
				// query
				$the_query = new WP_Query($args);
				?>
				<?php if ($the_query->have_posts()): ?>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<li class="khungAnh">
					            <span class="khungAnhCrop">
					            	<?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
					            </span>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
				<div class="bottom_banner">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span>Hotline:&nbsp; </span>
					<p><a href="tel:0971003388">0971003388</a></p>
				</div>
			</div>
		</div>
			<section id="duAn">
				<div class="container">
					<div class="row content">
						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/thiet-ke-cong" class="first"
								   title="Thiết kế cổng sắt">Thiết kế cổng sắt</a>
								<a href="<?php bloginfo('url'); ?>/category/thiet-ke-kien-truc-cau-thang" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=thiet-ke-cong'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">
													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/thiet-ke-cua" class="first"
								   title="Thiết kế mái kính">Thiết kế mái kính</a>
								<a href="<?php bloginfo('url'); ?>/category/thiet-ke-kien-truc-cau-thang" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=thiet-ke-cua'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/theo-yeu-cau" class="first"
								   title="Thiết kế lan can">Thiết kế lan can</a>
								<a href="<?php bloginfo('url'); ?>/category/thiet-ke-kien-truc-cau-thang" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=theo-yeu-cau'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/cau-thang" class="first"
								   title="Thiết kế cầu thang">Thiết kế cầu thang</a>
								<a href="<?php bloginfo('url'); ?>/category/cau-thang" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=cau-thang'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/hang-rao" class="first"
								   title="Thiết kế Hàng Rào">Thiết kế Hàng Rào</a>
								<a href="<?php bloginfo('url'); ?>/category/hang-rao" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=hang-rao'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/hang-muc-ky-thuat" class="first"
								   title="Hạng Mục Kỹ Thuật">Hạng Mục Kỹ Thuật</a>
								<a href="<?php bloginfo('url'); ?>/category/hang-muc-ky-thuat" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=hang-muc-ky-thuat'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

						<div class="block">
							<div class="row title">
								<a href="<?php bloginfo('url'); ?>/danh-muc/phu-kien" class="first"
								   title="Phụ Kiện Sắt Mỹ Thuật">Phụ Kiện Sắt Mỹ Thuật</a>
								<a href="<?php bloginfo('url'); ?>/category/phu-kien" class="second"
								   title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							</div>
							<div class="wrapper_item">
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=san-pham&danh-muc=phu-kien'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="wrapper_img">
											<div class="khungAnh">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
												   class="khungAnhCrop">

													<?php echo get_the_post_thumbnail(get_the_id(), 'thumbnail', array('class' => 'thumnail')); ?>
												</a>


											</div>
										</div>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
										   class="content_outer">
											<?php the_title(); ?>
										</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<section id="khachHang">
			<div class="khungAnh">
				<a href="#" class="khungAnhCrop">
					<img src="<?php bloginfo('template_directory'); ?>/pics/khachhang.jpg"
						 alt="khách hàng">
				</a>
			</div>
			<div class="content">
				<p class="first">Chúng tôi đã làm hài lòng hơn <span> 500+</span> khách hàng. <br class="sp">Liên hệ
					với chúng tôi để được tư vấn ngay.
				</p>
				<p class="second"><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
			</div>
		</section>
		<section id="doiTac">
			<div class="container">
				<div class="row">
					<a href="#" title="Đối tác khách hàng" class="title">đối tác khách hàng</a>
					<?php $price = get_post_meta( get_the_ID(), 'anh-doi-tac', true ); ?>
					<div class="wrapper_item slider_partner">
						<?php
						$args = array(
							'post_per_page' => -1,
							'post_type' => 'doi-tac',
						);
						// query
						$the_query = new WP_Query($args);
						?>
						<?php if ($the_query->have_posts()): ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div>
										<div class="item">
											<a href="<?php echo get_post_meta(get_the_id(), 'link-doi-tac', true); ?>" class="partner">
												<img src="<?php echo get_post_meta(get_the_id(), 'anh-doi-tac', true); ?>" alt="">
											</a>
										</div>
									</div>
								<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query();     // Restore global post data stomped by the_post(). ?>
					</div>
				</div>
			</div>
		</section>

	</main>
	<section id="dangKyEmail">
		<div class="container autoheight">
			<div class="row content autoheight">
				<div class="right_content">
					<span>Sắt Nghệ Thuật Trần Gia trên</span>
					<div class="social">
						<a href="<?php the_field('facebook', 'option'); ?>" title="facebook" class="g">
							<p>F</p>
						</a>
						<a href="<?php the_field('skype', 'option'); ?>" title="skype" class="g">
							<p>h</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>
