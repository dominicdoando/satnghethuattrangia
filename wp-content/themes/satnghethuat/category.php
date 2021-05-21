<?php get_header() ?>
	<main>
	<div id="backtop">
		<a href="#" title="Back To Top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>
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
			<div class="row">
				<div class="wrapper_content">
					<div class="content_left">
						<div id="danhMuc">
							<ul class="danhMuc tintuc list-unstyled">
								<!-- Get category -->
								<?php $args = array(
									'hide_empty' => 0,
									'taxonomy' => 'category',
									'orderby' => 'id',
								);
								$cates = get_categories($args);
								foreach ($cates as $cate) { ?>
									<li>
										<a href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name ?></a>
									</li>
								<?php } ?>
								<!-- Get category -->
							</ul>
						</div>
						<div class="block_quangCao">
							<a href="<?php the_field('link_quang_cao', 'option'); ?>" title="quảng cáo">
								<img src="<?php the_field('anh_quang_cao', 'option'); ?>" alt="My website">
							</a>
						</div>
					</div>
					<div class="content_right">
						<div class="wrapper_item listNew">
							<!-- Get post mặt định -->
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<div class="item">
										<a  href="<?php the_permalink(); ?>"  class="row">
											<div class="col-xs-4">
												<div class="khungAnh">
													<span class="khungAnhCrop">
														<?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?>
													</span>
												</div>
											</div>
											<div class="col-xs-8">
												<span title="<?php the_title(); ?>" class="content_outer">
													<?php the_title(); ?>
												</span>
												<?php the_excerpt(); ?>
											</div>
										</a>


									</div>
								<?php endwhile; else : ?>
								<p>Không có bài viết nào</p>
								<?php endif; ?>
								<!-- Get post mặt định -->
						</div>
						<div id="phantrang" class="col-md-12">
							<div class="SplitPages">
								<?php if (paginate_links() != '') { ?>
									<div class="quatrang">
										<?php
										global $wp_query;
										$big = 999999999;
										echo paginate_links(array(
											'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
											'format' => '?paged=%#%',
											'prev_text' => __('«'),
											'next_text' => __('»'),
											'current' => max(1, get_query_var('paged')),
											'total' => $wp_query->max_num_pages
										));
										?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>
