
<?php get_header() ?>
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
		<ul class="list-unstyled list-inline">
			<li><a href="<?php echo bloginfo( 'url' ); ?>" title="trang chủ">Trang chủ</a></li> »
			<li><span>Kết quả tìm kiếm</span></li>
		</ul>
	</div>
</div>
<main>
	<section class="search-page">
		<div class="container">
			<div class="row">
				<?php
				$s=get_search_query();
				$args = array(
					's' =>$s
				);
				// The Query
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					_e("<h2 class='ttl-search'>KẾT QỦA TÌM KIẾM: ".get_query_var('s')."</h2>");
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
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
<!--						<li>-->
<!--							<a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
<!--						</li>-->
						<?php
					}
				}else{
					?>
					<h2 style='font-weight:bold;color:#000;width:100%;margin-bottom:20px;'>Không Tìm Thấy</h2><br>
					<div class="alert alert-info">
						<p>Xin lỗi, không có sản phẩm nào theo từ khóa tìm kiếm.</p>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ?>
