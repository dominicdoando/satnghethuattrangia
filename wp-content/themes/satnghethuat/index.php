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
                'post_per_page'	=> -1,
                'post_type'		=> 'slider',
            );
            // query
            $the_query = new WP_Query( $args );
    ?>
    <?php if( $the_query->have_posts() ): ?>
	<ul>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li class="khungAnh">
            <span class="khungAnhCrop">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
            </span>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    <!-- <div class="bottom_banner">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span>Hotline:&nbsp; </span>
        <p><a href="tel:0971003388">0971003388</a></p>
    </div> -->
</div>

<section id="duAn">
<div class="container">
<div class="row content">
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế cổng nghệ thuật</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
    <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế cầu thang nghệ thuật</a>
    <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
    <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế sắt nghệ thuật theo yêu cầu</a>
    <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
<section id="khachHang">
    <div class="khungAnh">
        <a href="#" class="khungAnhCrop">
            <img src="<?php bloginfo('template_directory'); ?>/pics/khachhang.jpg" alt="khách hàng">
        </a>
    </div>
    <div class="content">
        <p class="first">Chúng tôi đã làm hài lòng hơn <span> 500+</span> khách hàng. Liên hệ với chúng tôi để được tư vấn ngay.
        </p>
        <p class="second"><a href="tel:0971003388">0971003388</a></p>
    </div>
</section>
<section id="information">
    <div class="container">
        <div class="row">
            <div class="content_left col-xs-12 col-lg-6">
                <div class="title">
                    <a href="#" title="Tin tiêu điểm" class="first">Tin tiêu điểm</a>
                    <a href="#" title="Xem thêm" class="more">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="main_newz col-lg-12">
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 1, // số lượng bài viết
                        'cat' => 9, // lấy bài viết trong chuyên mục có id là 3
                       
                    );
                     ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="wrapper_img">
                        <div class="khungAnh">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
                                <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                            </a>
                        </div>
                    </div>
                    <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="content_outer">
                        <?php the_title(); ?>
                    </a>
                    <div class="thongKe">
                        <span class="date">
                        <?php echo get_the_date(); ?>
                        </span>
                        <span class="luotXem">
                            <?= gt_get_post_view(); ?>
                        </span>
                    </div>
                    <div class="description"><?php the_excerpt(); ?></div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="sub_newz col-xs-12">
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 2, // số lượng bài viết
                        'cat' => 9, // lấy bài viết trong chuyên mục có id là 3,
                        'offset' => 1
                    );
                     ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
                                <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="name">
                                <?php the_title(); ?>
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                <?php echo get_the_date(); ?>
                                </span>
                                <span class="luotXem">
                                <?= gt_get_post_view(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="content_right col-xs-12 col-lg-6">
                <div class="title">
                    <a href="#" title="Tin tiêu điểm" class="first">Giải pháp thiết kế</a>
                    <a href="#" title="Xem thêm" class="more">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="main_newz col-lg-12">
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 2, // số lượng bài viết
                        'cat' => 8, // lấy bài viết trong chuyên mục có id là 3
                       
                    );
                     ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="wrapper_img">
                        <div class="khungAnh">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
                                <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="content_outer">
                        <a href<?php bloginfo( 'url' ); ?> title="<?php bloginfo( 'name' ); ?>" class="name">
                        <?php the_title(); ?>
                        </a>
                        <div class="thongKe">
                            <span class="date">
                            <?php echo get_the_date(); ?>
                            </span>
                            <span class="luotXem">
                            <?= gt_get_post_view(); ?>
                            </span>
                        </div>
                        <div class="description"><?php the_excerpt(); ?></div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
               
                </div>
                <div class="clear_both"></div>
                <div class="sub_newz col-xs-12">
                <?php 
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 2, // số lượng bài viết
                        'cat' => 8, // lấy bài viết trong chuyên mục có id là 3,
                        'offset' => 2
                    );
                     ?>
                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="khungAnhCrop">
                                <?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' =>'thumnail') ); ?>
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>" class="name">
                                <?php the_title(); ?>
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                <?php echo get_the_date(); ?>
                                </span>
                                <span class="luotXem">
                                <?= gt_get_post_view(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
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
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner1.png" alt="doi tac">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="item">
                        <a href="#" class="partner">
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner2.png" alt="doi tac">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="item">
                        <a href="#" class="partner">
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner3.png" alt="doi tac">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="item">
                        <a href="#" class="partner">
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner4.png" alt="doi tac">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="item">
                        <a href="#" class="partner">
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner5.png" alt="doi tac">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="item">
                        <a href="#" class="partner">
                            <img src="<?php bloginfo('template_directory'); ?>/pics/partner1.png" alt="doi tac">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<section id="dangKyEmail">
    <div class="container autoheight">
        <div class="row content autoheight">
            <div class="left_content">
                <span>Bạn cần tư vấn</span>
                <input type="text" placeholder="Số điện thoại" class="phone">
                <input type="text" placeholder="Email của bạn">
                <a href="#" class="submit" title="gửi đi">gửi</a>
            </div>
            <div class="right_content">
                <span>kiến trúc vlc trên</span>
                <div class="social">
                    <a href="#" title="facebook" class="g">
                        <p>F</p>
                    </a>
                    <a href="#" title="google" class="g noborder">
                        <p>G</p>
                    </a>
                    <a href="#" title="skype" class="g">
                        <p>h</p>
                    </a>
                    <a href="#" title="twitter" class="g">
                        <p>L</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>