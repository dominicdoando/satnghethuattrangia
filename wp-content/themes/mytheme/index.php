<?php get_header(); ?>
    <main>
        <div id="banner">
            <div class="banner banner_tchu">
                <div>
                    <div class="khungAnh">
                        <a href="#" title="Thiết kế kiến trúc nhà vườn" class="khungAnhCrop">
                            <img src="<?php bloginfo('template_directory') ?>/pics/banner1.jpg" alt="thanglongosc">
                        </a>
                        <div class="content_banner">
                            <p class="first">lựa chọn hàng đầu cho du học</p>
                            <p class="second">Cơ hội nghề nghiệp mở rộng cho tương lai</p>
                            <a href="#" title="Xem thêm" class="more">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="khungAnh">
                        <a href="#" title="Thiết kế kiến trúc nhà vườn" class="khungAnhCrop">
                            <img src="<?php bloginfo('template_directory') ?>/pics/banner1.jpg" alt="thanglongosc">
                        </a>
                        <div class="content_banner">
                            <p class="first">lựa chọn hàng đầu cho du học</p>
                            <p class="second">Cơ hội nghề nghiệp mở rộng cho tương lai</p>
                            <a href="#" title="Xem thêm" class="more">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.banner_tchu').slick({
                    dots: true,
                    infinite: true,
                    // autoplay: true,
                    autoplayspeed: 1000,
                    speed: 300,
                    slidesToShow: 1,
                    arrows: false
                });
            });
        </script>
        <section id="gioiThieu">
            <div class="container">
                <div class="row">
                    <div class="content_left col-xs-12">
                        <div class="header col-xs-12">
                            <span class="title">giới thiệu về thăng long OSC</span>
                            <p class="description">Công ty Thang Long OSC trân trọng thông báo tới toàn thể quý phụ huynh và học sinh chương trình đi du học Hàn Quốc trọn gói chỉ với 150 triệu. Chúng tôi DỊCH VỤ TRỌN GÓI, sẽ lo cho bạn tất cả mọi thứ từ A-Z
                            </p>
                        </div>
                        <div class="contain col-xs-12">
                            <div class="item col-lg-4 col-xs-12">
                                <a href="#" title="Giới thiệu" class="name">Lời giới thiệu</a>
                                <p class="info">Đội ngũ cán bộ đủ điều kiện về phẩm chất đạo đức, năng lực và kinh nghiệm trong lĩnh vực Tư vấn du học</p>
                                <a href="#" title="Xem thêm" class="more">Xem thêm</a>
                            </div>
                            <div class="item col-lg-4 col-xs-12">
                                <a href="#" title="Giới thiệu" class="name">Sự khác biệt</a>
                                <p class="info">Đội ngũ cán bộ đủ điều kiện về phẩm chất đạo đức, năng lực và kinh nghiệm trong lĩnh vực Tư vấn du học</p>
                                <a href="#" title="Xem thêm" class="more">Xem thêm</a>
                            </div>
                            <div class="item col-lg-4 col-xs-12">
                                <a href="#" title="Giới thiệu" class="name">Lời giới thiệu</a>
                                <p class="info">Đội ngũ cán bộ đủ điều kiện về phẩm chất đạo đức, năng lực và kinh nghiệm trong lĩnh vực Tư vấn du học</p>
                                <a href="#" title="Xem thêm" class="more">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="content_right col-xs-12">
                        <div class="img_gt">
                            <div class="khungAnh">
                                <a href="#" class="khungAnhCrop">
                                    <img src="pics/gioithieu.jpg" alt="Giới thiệu">
                                </a>
                            </div>
                            <div class="img_bg">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ad">
            <div class="container">
                <div class="row">
                    <div class="khungAnh">
                        <a href="#" title="ad" class="khungAnhCrop">
                            <img src="pics/ad1.jpg" alt="ad">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="info">
            <div class="container">
                <div class="row">
                    <div class="newz">
                        <div class="title col-xs-12">
                            <a href="#" title="Tin Tức" class="name">tin tức</a>
                            <a href="#" title="Xem thêm" class="xemThem">Xem thêm</a>
                        </div>
                        <div class="block_left col-xs-12">
                            <?php 
                                $args = array(
                                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                                    'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                                    'showposts' => 12, // số lượng bài viết
                                    'cat' => 18, // lấy bài viết trong chuyên mục có id là 1
                                );
                            ?>
                            <?php $getposts = new WP_query($args); ?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <div class="item col-xs-12">
                                <div class="khungAnh">
                                    <a href="<?php the_permalink(); ?>" class="khungAnhCrop">
                                    <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                                    </a>
                                </div>
                                <div class="content_outer">
                                    <a href="<?php the_permalink(); ?>" title="Tin Tức" class="title"><?php the_title(); ?></a>
                                    <div class="thongke">
                                        <a class="thongke_ngay"><?php echo get_the_date(); ?></a>
                                        <a class="thongke_luotxem">23 Lượt xem</a>
                                    </div>
                                    <?php the_excerpt();  ?>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                    
                        </div>
                        <div class="block_right col-xs-12">
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                            <div class="item">
                                <a href="#" title="tin tức"><i class="fa fa-circle" aria-hidden="true"></i>Sau 2h làm việc nghiêm túc nhưng không kém phần vui vẻ, cũng xem như như là một buổi chia sẻ đầy</a>
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="wrapper_video col-xs-12">
                            <div class="title">
                                <a href="#" title="Tin Tức" class="name">Video</a>
                                <a href="#" title="Xem thêm" class="xemThem">Xem thêm</a>
                            </div>
                            <!--                   <div class="main_video col-xs-12"> -->
                            <div class="khungAnh main_video col-xs-12">
                                <a href="#" title="video" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/video1.jpg" alt="video">
                                </a>
                                <a href="#" class="play_video" title="play"></a>
                            </div>
                            <!--                         </div> -->
                            <div class="sub_video col-xs-12">
                                <div class="khungAnh item col-xs-4">
                                    <a href="#" title="video" class="khungAnhCrop">
                                        <img src="<?php bloginfo('template_directory') ?>/pics/video2.jpg" alt="video">
                                    </a>
                                    <a href="#" class="play_video" title="play"></a>
                                </div>
                                <div class="khungAnh item col-xs-4">
                                    <a href="#" title="video" class="khungAnhCrop">
                                        <img src="<?php bloginfo('template_directory') ?>/pics/video3.jpg" alt="video">
                                    </a>
                                    <a href="#" class="play_video" title="play"></a>
                                </div>
                                <div class="khungAnh item col-xs-4">
                                    <a href="#" title="video" class="khungAnhCrop">
                                        <img src="<?php bloginfo('template_directory') ?>/pics/video4.jpg" alt="video">
                                    </a>
                                    <a href="#" class="play_video" title="play"></a>
                                </div>
                            </div>
                        </div>

                        <div class="ad2 col-xs-12">
                            <div class="khungAnh">
                                <a href="#" title="ad" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/ad2.jpg" alt="ad">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="dangKy">
            <div class="container">
                <div class="row">
                        <div class='bg_content'>
                                <a href='#' title='dang ky' class=''>
                                    <img src='<?php bloginfo('template_directory') ?>/css/images/bg_dangky.jpg' alt='dang ky'>
                                </a>
                                <div class='content'>
                                    <span class='title'>
                                        Cơ hội du học trong tầm tay bạn, thỏa mãn ước mơ!
                                    </span>
                                    <a href='#' title='Đăng Ký' class='dangKy'>Đăng ký ngay</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="thuVien">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <a href="#" title="Thư viện hình ảnh" class="name">Thư viện hình ảnh</a>
                    </div>
                    <div class="wrapper_item">
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img1.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img2.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img3.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img4.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img1.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img2.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img3.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                        <div class="item">
                            <div class="khungAnh">
                                <a href="#" title="hinh anh" class="khungAnhCrop">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/img4.jpg" alt="hinh anh">
                                </a>
                                <a href="#" title="view" class="view"></a>
                            </div>
                            <a href="#" title="hinh anh" class="content_outer">Hình ảnh du học tại Thăng Long OSC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <section id="doiTac">
            <div class="container">
                <div class="row">
                    <span class="title">đối tác khách hàng</span>
                    <div class="wrapper_item slider_partner">
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner1.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner2.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner3.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner4.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner5.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner6.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="item">
                                <a href="#" class="partner">
                                    <img src="<?php bloginfo('template_directory') ?>/pics/partner1.png" alt="doi tac">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
  <?php get_footer(); ?>