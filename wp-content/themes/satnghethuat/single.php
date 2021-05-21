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
				<div class="row">
					<div class="wrapper_content">
						<div class="content_left">
							<div id="danhMuc">
								<ul class="danhMuc list-unstyled">
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
							<!-- Get post mặt định -->
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php gt_set_post_view(); ?>
									<div class="show-date">
										<span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span>
										<span>Lượt xem: <?= gt_get_post_view(); ?></span>
									</div>
									<h2 class="title">
										<?php the_title(); ?>
									</h2>
									<div class="noidung">
										<?php the_excerpt(); ?>
									</div>
									<div class="addthis_inline_share_toolbox_87gg"></div>
								<?php endwhile; else : ?>
								<p>Không có</p>
							<?php endif; ?>
							<!-- Get post mặt định -->
							<div class="cmt">
								<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
							</div>

							<div id="fb-root"></div>
							<script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=750688268378229";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
							</script>
							<div class="duAnKhac">
									<?php
									$categories = get_the_category($post->ID);
									if ($categories)
									{
										$category_ids = array();
										foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

										$args=array(
											'category__in' => $category_ids,
											'post__not_in' => array($post->ID),
											'showposts'=>6, // Số bài viết bạn muốn hiển thị.
											'caller_get_posts'=>1
										);
										$my_query = new wp_query($args);
										if( $my_query->have_posts() )
										{
											echo '<h3 class="title">Các bài viết khác</h3><div class="listDuAn">';
											while ($my_query->have_posts())
											{
												$my_query->the_post();
												?>
													<div class="item">
														<div class="wrapper_img">
															<div class="khungAnh">
																<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
																   class="khungAnhCrop">
																	<?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?>
																</a>
																<a href="<?php the_permalink(); ?> " class="detail " title="View "></a>
															</div>
														</div>
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
														   class="content_outer">
															<?php the_title(); ?>
														</a>
														<?php the_excerpt(); ?>
													</div>
												<?php
											}
											echo '</div>';
										}
									}
									?>
								</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</section>
	</main>
	</main>
<?php get_footer() ?>
