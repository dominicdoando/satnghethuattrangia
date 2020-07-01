<?php get_header() ?>
<?php
   setpostview(get_the_id());
?>
<main>
		<div id="backtop">
			<a href="#" title="Back To Top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>
		<div id="banner">
			<div class="banner banner_tcon">
				<div class="khungAnh">
					<a href="#" title="Thiết kế kiến trúc nhà vườn" class="khungAnhCrop">
						<img src="<?php bloginfo('template_directory'); ?>/pics/banner.jpg" alt="gocnhinviet">
					</a>
					<div class="content_banner">
						<p>Thiết kế kiến trúc ĐẲNG CẤP, SANG TRỌNG</p>
						<p>Nội thất đẹp - Nhà cũng đẹp</p>
					</div>
				</div>
			</div>
			<div class="breadcrumb">
				<ul class="list-unstyled list-inline">
					<li><a href="#" title="trang chủ">Trang chủ</a></li>
					<li><a href="#" title="giới thiệu">Tin tức</a></li>
					<li><a href="#" title="giới thiệu">Tin tiêu điểm</a></li>
				</ul>
			</div>
		</div>
		<section id="tinTuc">
			<div class="container">
				<div class="row">
					<div class="wrapper_content">
						<div class="content_left">
							<?php
								$args = array(
									'type'      => 'post',
									'child_of'  => 0,
									'parent'    => ''
								);
								$categories = get_categories( $args );
								foreach ( $categories as $category ) { ?>
									<!-- <?php echo $category->name ; ?> -->
								<?php }
							 ?>
							<ul class="danhMuc list-unstyled">
								<?php
								$args = array(
									'child_of'  => 0,
									'<strong>orderby</strong>'    => 'íd',
								);
								$categories = get_categories( $args );
								foreach ( $categories as $category ) { ?>
								<li>
								<a href="<?php echo get_term_link($category->slug, 'category');?>">
									<?php echo $category->name ; ?>
									(<?php echo $category->count; ?>)
								</a>
								</li>
								<?php } ?>
							</ul>
							<div class="block_tinNoiBat">
								<a href="#" title="Tin tức nổi bật" class="title">Tin tức nổi bật</a>
								<div class="listTin">
								<?php 
								$getposts = new WP_query();
								 $getposts->query('post_status=publish&showposts=4&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="item">
										<div class="khungAnh">
											<a href="<?php the_permalink(); ?>" class="khungAnhCrop">
											<?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
											</a>
										</div>
										<a href="<?php the_permalink(); ?>" class="outer"><?php the_title(); ?></a>
									</div>
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="<?php bloginfo('template_directory'); ?>/pics/quangcao1.jpg" alt="quảng cáo">
								</a>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="<?php bloginfo('template_directory'); ?>/pics/quangcao2.jpg" alt="quảng cáo">
								</a>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="<?php bloginfo('template_directory'); ?>/pics/quangcao3.jpg" alt="quảng cáo">
								</a>
							</div>
						</div>
						<div class="content_right">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<h2 class="title">
								<?php the_title(); ?>
							</h2>
						<?php endwhile;?>
						<?php endif; ?>
							
							<div class="thongke">
								<span class="thongke_ngay">Ngày đăng: <?php echo get_the_date(); ?></span>
								<span class="thongke_luotxem"><?php echo getpostviews(get_the_id());?> lượt xem</span>
								<div class="cochu">
									<a class="NormalSize" href="javascript:ResetTextSize()">Cỡ chữ</a>
									<a class="SmallSize" href="javascript:DecreaseTextSize()"></a>
									<a class="LargeSize" href="javascript:IncreaseTextSize()"></a>
								</div>
							</div>
							<div class="noidung TextSize">
							<?php  the_content(); ?>
							</div>
							<div id="CommonCuoiChiTietTin">
								<div class="fl apd dnmb">
									<a class="prevDBT" href="javascript:history.go(-1)">Về trang trước</a>
									<div class="fr pl20 apd dnmb">
										<a href="javascript:void(0)" class="email addthis_button_email">Gửi email</a>
										<a href="javascript:window.print()" class="print">In trang</a>
									</div>
								</div>
								<div class="fr col-xs-12 col-sm-6 col-lg-6">
									<div class="addthis_toolbox addthis_default_style addthis_16x16_style">

										<div class="fb-like" data-href="" style="margin-right: 5px; margin-top:5px;" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

										<!-- Place this tag where you want the share button to render. -->
										<div class="g-plus" data-action="share" data-annotation="bubble"></div>

										<!-- Place this tag after the last share tag. -->
										<script type="text/javascript">
											(function() {
												var po = document.createElement("script");
												po.type = "text/javascript";
												po.async = true;
												po.src = "https://apis.google.com/js/platform.js";
												var s = document.getElementsByTagName("script")[0];
												s.parentNode.insertBefore(po, s);
											})();
										</script>
										<div class="shareItem">
											<a class="addthis_button_facebook"></a>
										</div>
										<div class="shareItem">
											<a class="addthis_button_twitter"></a>
										</div>
										<div class="shareItem">
											<a class="addthis_button_zingme"></a>
										</div>
										<div class="shareItem">
											<a class="addthis_button_compact"></a>
										</div>
										<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5299e3fd219dc19f"></script>
										<!-- AddThis Button END -->
									</div>
								</div>
								<div class="cb"></div>
							</div>
							<div class="baiVietKhac">
								<h3 class="title">Các bài viết khác</h3>
								<?php
									$categories = get_the_category(get_the_id());
									if ($categories) 
									{
										$category_ids = array();
										foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								
										$args=array(
										'category__in' => $category_ids,
										'post__not_in' => array(get_the_id()),
										'showposts'		=>4, // Số bài viết bạn muốn hiển thị.
										'caller_get_posts'=>1
										);
										$my_query = new wp_query($args);
										if( $my_query->have_posts() ) 
										{
											echo '<div class="slider_baiVietKhac">';
											while ($my_query->have_posts())
											{
												$my_query->the_post();
												?>
												<div class="item">
													<div class="item_left">
														<div class="khungAnh">
															<a href="<?php the_permalink(); ?>" class="khungAnhCrop">
																<?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
															</a>
														</div>
													</div>
													<div class="item_right">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
														<div class="thongKe">
															<a class="thongKe_ngay"><?php echo get_the_date();  ?></a>
															<a class="thongKe_luotxem"><?php echo getpostviews(get_the_id());?> lượt xem</span></a>
														</div>
														</div>
														<div class="clear"></div>
														</div>
												<?php
											}
											echo '</div>';
										}
									}
								?>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
		</section>
		<section id="doiTac">
			<div class="container">
				<div class="row">
					<a href="#" title="Đối tác khách hàng" class="title">đối tác khách hàng</a>
					<div class="wrapper_item slider_partner">
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner1.png" alt="doi tac">
								</a>
							</div>
						</div>
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner2.png" alt="doi tac">
								</a>
							</div>
						</div>
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner3.png" alt="doi tac">
								</a>
							</div>
						</div>
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner4.png" alt="doi tac">
								</a>
							</div>
						</div>
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner5.png" alt="doi tac">
								</a>
							</div>
						</div>
						<div>
							<div class="item">
								<a href="#" class="partner">
									<img src="pics/partner1.png" alt="doi tac">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer() ?>