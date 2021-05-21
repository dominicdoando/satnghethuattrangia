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
	<section id="duAn">
		<div class="container">
			<div class="row content">
				<div class="block">
					<div class="row title">
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-kien-truc-cong" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế cổng nghệ thuật</a>
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-kien-truc-cong" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
					<div class="wrapper_item">
						<?php
						$args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
							'showposts' => 8, // số lượng bài viết
							'cat' => 5, // lấy bài viết trong chuyên mục có id là 1
						);
						?>
						<?php $getposts = new WP_query($args); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<div class="item">
								<div class="wrapper_img">
									<div class="khungAnh">
										<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
											<?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
										</a>
										<a href="<?php the_permalink(); ?> " class="detail " title="<?php the_title(); ?> "></a>
									
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="content_outer">
									<?php the_title(); ?>
								</a>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					
					</div>
				</div>
				<div class="block">
					<div class="row title">
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-kien-truc-cau-thang" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế cầu thang nghệ thuật</a>
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-kien-truc-cau-thang" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
					<div class="wrapper_item">
						<?php
						$args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
							'showposts' => 8, // số lượng bài viết
							'cat' => 6, // lấy bài viết trong chuyên mục có id là 2
						);
						?>
						<?php $getposts = new WP_query($args); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<div class="item">
								<div class="wrapper_img">
									<div class="khungAnh">
										<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
											
											<?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
										</a>
										<a href="<?php the_permalink(); ?> " class="detail " ></a>
									
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="content_outer">
									<?php the_title(); ?>
								</a>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="block">
					<div class="row title">
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-theo-yeu-cau" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế sắt nghệ thuật theo yêu cầu</a>
						<a href="<?php bloginfo( 'url' ); ?>/category/thiet-ke-theo-yeu-cau" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
					<div class="wrapper_item">
						<?php
						$args = array(
							'post_status' => 'publish', // Chỉ lấy những bài viết được publish
							'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
							'showposts' => 8, // số lượng bài viết
							'cat' => 7, // lấy bài viết trong chuyên mục có id là 3
						);
						?>
						<?php $getposts = new WP_query($args); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<div class="item">
								<div class="wrapper_img">
									<div class="khungAnh">
										<a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
											<?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
										</a>
										<a href="<?php the_permalink(); ?> " class="detail "></a>
									</div>
								</div>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="content_outer">
									<?php the_title(); ?>
								</a>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
</main>
<?php get_footer() ?>
