<main>
		<div id="backtop">
			<a href="#" title="Back To Top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>
		<div id="banner">
			<div class="banner banner_tcon">
				<div class="khungAnh">
					<a href="#" title="Thiết kế kiến trúc nhà vườn" class="khungAnhCrop">
						<img src="pics/banner.jpg" alt="gocnhinviet">
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
							<ul class="danhMuc list-unstyled">
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
								<li><a href="#" title="Gói thiết kế kiến trúc">Gói thiết kế kiến trúc</a></li>
							</ul>
							<div class="block_tinNoiBat">
								<a href="#" title="Tin tức nổi bật" class="title">Tin tức nổi bật</a>
								<div class="listTin">
									<div class="item">
										<div class="khungAnh">
											<a href="#" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt=" tint tức">
											</a>
										</div>
										<a href="#" class="outer">Ba phong cách thiết kế nội thất chung cư “hot” nhất hiện nay</a>
									</div>
									<div class="item">
										<div class="khungAnh">
											<a href="#" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt=" tint tức">
											</a>
										</div>
										<a href="#" class="outer">Ba phong cách thiết kế nội thất chung cư “hot” nhất hiện nay</a>
									</div>
									<div class="item">
										<div class="khungAnh">
											<a href="#" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt=" tint tức">
											</a>
										</div>
										<a href="#" class="outer">Ba phong cách thiết kế nội thất chung cư “hot” nhất hiện nay</a>
									</div>
									<div class="item">
										<div class="khungAnh">
											<a href="#" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt=" tint tức">
											</a>
										</div>
										<a href="#" class="outer">Ba phong cách thiết kế nội thất chung cư “hot” nhất hiện nay</a>
									</div>
									<div class="item">
										<div class="khungAnh">
											<a href="#" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt=" tint tức">
											</a>
										</div>
										<a href="#" class="outer">Ba phong cách thiết kế nội thất chung cư “hot” nhất hiện nay</a>
									</div>
								</div>
							</div>
							<div class="block_video">
								<a href="#" title="Video Clips" class="title">Thư viện video</a>
								<div class="wrapper slider_block_video">
									<div>
										<iframe width="" height="" src="https://www.youtube.com/embed/C3Rvz3p8By0" frameborder="0" allowfullscreen></iframe>
									</div>
									<div>
										<iframe width="" height="" src="https://www.youtube.com/embed/C3Rvz3p8By0" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="pics/quangcao1.jpg" alt="quảng cáo">
								</a>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="pics/quangcao2.jpg" alt="quảng cáo">
								</a>
							</div>
							<div class="block_quangCao">
								<a href="#" title="quảng cáo">
									<img src="pics/quangcao3.jpg" alt="quảng cáo">
								</a>
							</div>
						</div>
						<div class="content_right">
							<div class="listTinTuc">
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="item col-xs-12">
									<div class="item_left">
										<div class="khungAnh">
											<a href="<?php the_permalink(); ?>" class="khungAnhCrop">
												<img src="pics/tds1.jpg" alt="Tư vấn thiết kế biệt thự vườn đẹp 1 tầng kiến trúc châu âu kinh phí">
											</a>
										</div>
									</div>
									<div class="item_right">
										<a class="first" title="<?php the_title();?>"><?php the_title(); // lấy tiêu đề ?></a>
										<div class="thongKe">
											<a class="thongKe_ngay"><?php echo get_the_date('d - m -Y');?></a>
											<a class="thongKe_luotxem">    <?= gt_get_post_view(); ?></a>
											<div class="clear"></div>
										</div>
										<p class="col-xs-12">
										<?php the_excerpt(); ?>
										</p>
										<a class="second" href="<?php the_permalink(); ?>" title="chi tiết">Chi tiết</a>
									</div>
								</div>
                            <?php endwhile; ?>
                            <?php endif; ?>
							</div>
							<div id="phantrang" class="col-md-12">
								<div class="SplitPages">
									<a class="truoc" href="#"></a>
									<a class="hientai" href="#">1</a>
									<a class="trangkhac" href="#">2</a>
									<a class="trangkhac" href="#">3</a>
									<a class="trangkhac" href="#">4</a>
									<span>...</span>
									<a class="trangkhac" href="#">999</a>
									<a class="trangkhac" href="#">9989</a>
									<a class="sau" href="#"></a>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="formDichVu">
					<p class="first">Yêu cầu sử dụng dịch vụ</p>
					<div class="left">
						<input type="text" placeholder="Họ tên *">
						<input type="text" placeholder=" Email *">
						<input type="text" placeholder="Số điện thoại *">
						<input type="text" placeholder="Địa chỉ">
					</div>
					<div class="right">
						<textarea name="" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>
						<input type="text" placeholder="Mã bảo mật * ">
						<img src="pics/capcha.jpg" alt="capcha">
						<a href="#" title="thay đổi mã" class="change"></a>
						<div class="clear"></div>

						<div class="submit">
							<a href="#" class="gui" title="gửi">gửi</a>
							<a href="#" class="retype" title="nhập lại">nhập lại</a>
						</div>
					</div>
					<div class="clear"></div>
					<p class="note">Hoặc bạn đang cần tham khảo mẫu nhà để tự xây ngôi nhà của mình, chúng tôi sẽ gửi miễn phí những mẫu nhà phù hợp cho bạn. Hàng trăm mẫu nhà đẹp đang đợi bạn</p>
					<div class="clear"></div>
				</div>

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