<?php

/*
Template Name: Page Giới Thiệu
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
		<section id="gioiThieu">
			<div class="block1 block">
				<div class="container">
					<div class="row">
						<div class="content">
							<div class="left">
								<h2 class="title">Chào mừng bạn đến với KIẾN TRÚC <span>SẮT NGHỆ THUẬT TRẦN GIA</span>
								</h2>
								<div class="noidung TextSize">
									Kính thưa Quý vị! <br> <br>
									Quý vị đang tìm hiểu về SẮT NGHỆ THUẬT TRẦN GIA. Đó là niềm vui, niềm vinh hạnh cho chúng tôi được cung cấp những thông tin hữu ích cho Quý vị về bức tranh hoạt động của Kiến trúc VLC . <br> <br>
									SẮT NGHỆ THUẬT TRẦN GIA được thành lập và hoạt động với mong muốn cung cấp các dịch vụ Tư vấn thiết kế và thi công chuyên nghiệp đáp ứng một cách đồng bộ các nhu cầu của nhà đầu tư về các lĩnh vực Kiến trúc – Quy hoạch – Nội thất – Cảnh quan – Hạ tầng. VLC chúng tôi với đội ngũ cán bộ khoa học kỹ thuật có trình độ cao, đồng bộ, có nhiều kinh nghiệm trong công tác tư vấn xây dựng, với đầy đủ tư cách pháp nhân, giấy phép hành nghề,… VLC đã và đang từng ngày, từng giờ , không ngừng phát triển, tạo hướng đi riêng và khẳng định thương hiệu cũng như phong cách thiết kế riêng, VLC được biết là một trong những công ty thiết kế và thi công các công trình dân dụng và công nghiệp có uy tín tại khu vực tam giác kinh tế: Hà nội - Hải dương - Hải phòng. Công ty đã và đang hoạt động trên
								</div>
							</div>
							<div class="right">
								<div class="khungAnh">
									<a href="" class="khungAnhCrop">
										<img src="<?php bloginfo('template_directory'); ?>/pics/gt1.png" alt="Giới thiệu">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block2 block">
				<div class="left">
					<div class="khungAnh">
						<a href="#" class="khungAnhCrop">
							<img src="<?php bloginfo('template_directory'); ?>/pics/gt2.jpg" alt="giới thiệu 2">
						</a>
					</div>
					<div class="content">
						<p class="title">Giới thiệu chung</p>
						<div class="noidung">
							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất. <br><br>
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới.<br><br>

							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất.
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới.<br><br>

							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất.
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới.<br><br>
							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất.
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới.

						</div>
					</div>
				</div>
				<div class="right">
					<div class="content">
						<p class="title">tại sao bạn chọn <span>VLC</span>?
						</p>
						<div class="noidung">
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng. <br><br>
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng.<br><br>
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng.<br><br>
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng.
						</div>
						<div class="khungAnh">
							<a href="#" class="khungAnhCrop">
								<img src="<?php bloginfo('template_directory'); ?>/pics/gt3.jpg" alt="giới thiệu 3 ">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="block1 block">
				<div class="container">
					<div class="row">
						<div class="content">
							<div class="left">
								<h2 class="title">Tầm nhìn sứ mệnh</h2>
								<div class="noidung TextSize">
									- Tầm nhìn: Trở thành một trong những công ty tư vấn xây dựng số 1 việt nam, về chất lượng và quy mô công ty trong thị trường nhà ở. Văn phòng giao dịch có mặt tại các tỉnh thành trên cả nước, Đầu tư, thiết kế, cung cấp nhà ở chất lượng cho người thu nhập thấp với giá hợp lý.
									<br><br>
									- Sứ mệnh: Kiến tạo nhiều nhất những tác phẩm nghệ thuật, mang giá trị kiến trúc đích thực đến mọi vùng miền, làm phong phú đa dạng cho kiến trúc đô thị, tạo ra chất lượng sống tốt nhất cho con người bằng các công trình đẹp, thân thiện với môi trường và trường tồn
									với thời gian.<br><br>
									- Tầm nhìn: Trở thành một trong những công ty tư vấn xây dựng số 1 việt nam, về chất lượng và quy mô công ty trong thị trường nhà ở. Văn phòng giao dịch có mặt tại các tỉnh thành trên cả nước, Đầu tư, thiết kế, cung cấp nhà ở chất lượng cho người thu nhập thấp với giá hợp lý.
									<br><br>
									- Sứ mệnh: Kiến tạo nhiều nhất những tác phẩm nghệ thuật, mang giá trị kiến trúc đích thực đến mọi vùng miền, làm phong phú đa dạng cho kiến trúc đô thị, tạo ra chất lượng sống tốt nhất cho con người bằng các công trình đẹp, thân thiện với môi trường và trường tồn
									với thời gian.
								</div>
							</div>
							<div class="right">
								<div class="khungAnh">
									<a href="" class="khungAnhCrop">
										<img src="<?php bloginfo('template_directory'); ?>/pics/gt4.jpg" alt="Giới thiệu">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block2 block">
				<div class="left">
					<div class="khungAnh">
						<a href="#" class="khungAnhCrop">
							<img src="<?php bloginfo('template_directory'); ?>/pics/gt5.jpg" alt="giới thiệu 2">
						</a>
					</div>
					<div class="content">
						<p class="title">Bộ máy công ty</p>
						<div class="noidung">
							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất. <br> <br>
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới. <br> <br>
							Website: http://kientrucvlc.com – Là tổng hợp các sản phẩm của VLC, là kết quả của sự sáng tạo, sự nỗ lực và là hình ảnh của VLC nhằm mang đến cho khách hàng những công trình đẹp như ý, chất lượng đảm bảo và được chăm sóc, hỗ trợ tận tình, chu đáo trong sự tối ưu tiết kiệm chi phí nhất.
							Phương châm: Phục vụ là sứ mệnh, chất lượng là sinh mệnh, cùng với giá cả cạnh tranh, Công ty chúng tôi đã tạo được niềm tin, sự hài lòng của khách hàng và tự tin tạo dựng thương hiệu VLC với phong cách riêng. Rất hân hạnh được sự hợp tác của khách hàng trong thời gian tới.
						</div>
					</div>
				</div>
				<div class="right">
					<div class="content">
						<p class="title">Văn hóa doanh nghiệp</p>
						<div class="noidung">
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng. <br> <br>
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng. <br> <br>
							Các Kiến trúc sư, kỹ sư xây dựng, kỹ sư điện, nước, hạ tầng, họa sỹ cảnh quan, nội thất cùng với đội ngũ chuyên gia tư vấn uy tín, cán bộ giàu kinh nghiệm thực tế được hỗ trợ bởi nền tảng nghiên cứu lý luận trình độ sâu luôn luôn sẵn sàng với nhiệt huyết cao nhất để mang đến cho khách hàng những công trình có chất lương, đạt trình độ và đẳng cấp quốc tế. Qua rất nhiều công trình đã thiết kế và thi công ở khắp mọi nơi trên đất nước Việt Nam, chúng tôi luôn tự hào là đơn vị thiết kế thi công uy tín và chất lượng.
						</div>
						<div class="khungAnh">
							<a href="#" class="khungAnhCrop">
								<img src="<?php bloginfo('template_directory'); ?>/pics/gt6.jpg" alt="giới thiệu 3 ">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="linhVuc">
				<div class="container">
					<div class="row">
						<h2>
							<a href="#" title="Lĩnh vực hoạt động chính của Kiến trúc VLC" class="title">Lĩnh vực hoạt động chính của SẮT NGHỆ THUẬN TRẦN GIA</a>
						</h2>
						<div class="wrapper_item">
							<div class="item">
								<div class="khungAnh">
									<a href="<?php bloginfo( 'url' ); ?>/danh-muc/thiet-ke-cong" class="khungAnhCrop">
										<img src="<?php bloginfo('template_directory'); ?>/pics/linhvuc1.jpg" alt="lĩnh vực 1">
									</a>
									<h3>
										<a class="name" href="#" title="Thiết kế kiến trúc" class="inner">Thiết kế cổng nghệ thuật</a>
									</h3>
								</div>

								<div class="noidung">
									- Thiết kế các công trình nhà ở cao cấp, biệt thự, dinh thự…. <br>
									- Thiết kế các tòa nhà khách sạn, trung tâm thương mại, cao tầng khác. <br>
									- Thiết kế khu du lịch, Nhà nghỉ cuối tuần, resort… <br>
									- Thiết kế quy hoạch đô thị ,Công trình công nghiệp, <br>
									- Thiết kế hạ tầng kỹ thuật đô thị, cấp thoát nước, hệ thống điện dân dụng và công nghiệp <br>
									- Tư vấn quản lý dự án, giám sát thi công, công trình dân dụng và công nghiệp, tư vấn đấu thầu, lập hồ sơ mời thầu <br>
								</div>
							</div>
							<div class="item">
								<div class="khungAnh">
									<a href="<?php bloginfo( 'url' ); ?>/danh-muc/thiet-ke-cua" class="khungAnhCrop">
										<img src="<?php bloginfo('template_directory'); ?>/pics/linhvuc2.jpg" alt="lĩnh vực 1">
									</a>
									<h3>
										<a href="#" class="name" title="Thiết kế kiến trúc" class="inner">Cửa nghệ thuật</a>
									</h3>
								</div>
								<div class="noidung">
									- Thiết kế nội thất nhà ở, biệt thự, chung cư cao cấp. <br>
									- Thiết kế nội thất nhà hàng, quán bar, quán café <br>
									- Thiết kế trang trí nội thất showroom, gian trưng bày sản phẩm <br>
								</div>
							</div>
							<div class="item">
								<div class="khungAnh">
									<a href="<?php bloginfo( 'url' ); ?>/danh-muc/theo-yeu-cau" class="khungAnhCrop">
										<img src="<?php bloginfo('template_directory'); ?>/pics/linhvuc3.jpg" alt="lĩnh vực 1">
									</a>
									<h3>
										<a href="#" class="name" title="Thiết kế kiến trúc" class="inner">Thiết kế theo yêu cầu</a>
									</h3>
								</div>
								<div class="noidung">
									- Thi công từng phần, trọn gói công trình <br>
									- Thi công hoàn thiện nội thất <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script>
	        (function($) {
	            $(window).on("load",
	                function() {
	                    $("#gioiThieu .block .noidung").mCustomScrollbar();
	                });
	        })(jQuery);
		</script>
	</main>
	</main>
<?php get_footer() ?>
