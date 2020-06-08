<?php get_header() ?>
<main>
<div id="backtop">
    <a href="#" title="Back To Top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
</div>
<div id="banner">
    <div class="banner banner_tchu" id="banner_tchu">
    <img src="<?php bloginfo('template_directory'); ?>/pics/pic1.jpg" data-thumb="<?php bloginfo('template_directory'); ?>/pics/pic1.jpg" alt="" />
    <img src="<?php bloginfo('template_directory'); ?>/pics/pic2.jpg" data-thumb="<?php bloginfo('template_directory'); ?>/pics/pic1.jpg" alt="" />
    <img src="<?php bloginfo('template_directory'); ?>/pics/pic3.jpg" data-thumb="<?php bloginfo('template_directory'); ?>/pics/pic1.jpg" alt="" />
    <img src="<?php bloginfo('template_directory'); ?>/pics/pic4.jpg" data-thumb="<?php bloginfo('template_directory'); ?>/pics/pic1.jpg" alt="" />
    </div>
    <div class="bottom_banner">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span>Hotline:&nbsp; </span>
        <p>098.866.888</p>
    </div>
</div>

<section id="duAn">
<div class="container">
<div class="row content">
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế kiến trúc nhà phố</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </div>
    <div class="wrapper_item">
<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
		'showposts' => 8, // số lượng bài viết
		'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
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
                    <a href="<?php the_permalink(); ?> " class="detail " title="<?php the_title(); ?> "><?php the_title(); ?></a>

                </div>
            </div>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="content_outer">
            <?php the_title(); ?>
            </a>
        </div>
<?php endwhile; wp_reset_postdata(); ?>


        <!-- <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div> -->
    </div>
</div>
<div class="block">
<div class="row title">
    <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế kiến trúc biệt thự</a>
    <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
<div class="wrapper_item">
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà phố mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà phố mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
</div>
</div>
<div class="block">
<div class="row title">
    <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Thiết kế nội thất</a>
    <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
</div>
<div class="wrapper_item">
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà phố mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà phố mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
    <div class="item">
        <div class="wrapper_img">
            <div class="khungAnh">
                <a href="#" title="item" class="khungAnhCrop ">
                    <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                </a>
                <a href="# " class="detail " title="View "></a>

            </div>
        </div>
        <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
            Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
        </a>
    </div>
</div>
</div>
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Kiến trúc khách sạn</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </div>
    <div class="wrapper_item">
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
    </div>
</div>
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Kiến trúc nhà vườn</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </div>
    <div class="wrapper_item">
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
    </div>
</div>
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Kiến trúc văn phòng</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </div>
    <div class="wrapper_item">
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
    </div>
</div>
<div class="block">
    <div class="row title">
        <a href="#" class="first" title="Thiết kế- thi công kiến trúc">Kiến trúc khác</a>
        <a href="#" class="second" title="Xem thêm">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
    </div>
    <div class="wrapper_item">
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop">
                        <img class="" src="<?php bloginfo('template_directory'); ?>/pics/sp1.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà phố mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/p2.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp3.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
        <div class="item">
            <div class="wrapper_img">
                <div class="khungAnh">
                    <a href="#" title="item" class="khungAnhCrop ">
                        <img src="<?php bloginfo('template_directory'); ?>/pics/sp4.jpg" alt="du an">
                    </a>
                    <a href="# " class="detail " title="View "></a>

                </div>
            </div>
            <a href="#" title="Dự án nhà kiến trúc nhà vườn mặt đường trong phố A" class="content_outer">
                Dự án nhà kiến trúc nhà vườn mặt đường trong phố A
            </a>
        </div>
    </div>
</div>
</section>
<section id="khachHang">
    <div class="khungAnh">
        <a href="#" class="khungAnhCrop">
            <img src="<?php bloginfo('template_directory'); ?>/pics/khachhang.jpg" alt="khách hàng">
        </a>
    </div>
    <div class="content">
        <p class="first">Chúng tôi đã làm hài lòng hơn <span> 500+</span> khách hàng. Liên hệ với chúng tôi để được tư vấn ngay.
        </p>
        <p class="second">0947.215.986</p>
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
                    <div class="wrapper_img">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video1.jpg" alt="Video">
                            </a>
                        </div>
                    </div>
                    <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="content_outer">
                        Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                    </a>
                    <div class="thongKe">
                        <span class="date">
                            11/7/2016
                        </span>
                        <span class="luotXem">
                            2.658 lượt xem
                        </span>
                    </div>
                    <div class="description">Công ty TNHH Thương Mại Dịch Vụ Phú Sơn được thành lập năm 2006, ra đời và hoạt động trong điều kiện ...</div>
                </div>
                <div class="sub_newz col-xs-12">
                    <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video2.jpg" alt="Video">
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                                Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                    11/7/2016
                                </span>
                                <span class="luotXem">
                                    2.658 lượt xem
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video2.jpg" alt="Video">
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                                Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                    11/7/2016
                                </span>
                                <span class="luotXem">
                                    2.658 lượt xem
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_right col-xs-12 col-lg-6">
                <div class="title">
                    <a href="#" title="Tin tiêu điểm" class="first">Giải pháp thiết kế</a>
                    <a href="#" title="Xem thêm" class="more">Xem thêm<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
                <div class="main_newz col-lg-12">
                    <div class="wrapper_img">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video1.jpg" alt="Video">
                            </a>
                            </a>
                        </div>
                    </div>
                    <div class="content_outer">
                        <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                            Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                        </a>
                        <div class="thongKe">
                            <span class="date">
                                11/7/2016
                            </span>
                            <span class="luotXem">
                                2.658 lượt xem
                            </span>
                        </div>
                        <div class="description">Đồ ăn cung cấp đầy đủ dinh dưỡng nếu chúng được chế biến lành mạnh và ăn đúng giờ. Nếu bạn ăn sai giờ có thể làm mất đến sức khỏe tổng thể</div>
                    </div>
                </div>
                <div class="main_newz col-lg-12">
                    <div class="wrapper_img">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video1.jpg" alt="Video">
                            </a>
                        </div>
                    </div>
                    <div class="content_outer">
                        <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                            Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                        </a>
                        <div class="thongKe">
                            <span class="date">
                                11/7/2016
                            </span>
                            <span class="luotXem">
                                2.658 lượt xem
                            </span>
                        </div>
                        <div class="description">Đồ ăn cung cấp đầy đủ dinh dưỡng nếu chúng được chế biến lành mạnh và ăn đúng giờ. Nếu bạn ăn sai giờ có thể làm mất đến sức khỏe tổng thể</div>
                    </div>
                </div>
                <div class="clear_both"></div>
                <div class="sub_newz col-xs-12">
                    <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video2.jpg" alt="Video">
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                                Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                    11/7/2016
                                </span>
                                <span class="luotXem">
                                    2.658 lượt xem
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper_img item col-xs-12">
                        <div class="khungAnh">
                            <a href="#" title="Video" class="khungAnhCrop">
                                <img src="<?php bloginfo('template_directory'); ?>/pics/video2.jpg" alt="Video">
                            </a>
                        </div>
                        <div class="content_outer">
                            <a href="#" title="   Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động" class="name">
                                Những yếu tố đặc trưng làm nên thương hiệu tin cậy và uy tín của chúng tôi trong suốt 14 năm hoạt động
                            </a>
                            <div class="thongKe">
                                <span class="date">
                                    11/7/2016
                                </span>
                                <span class="luotXem">
                                    2.658 lượt xem
                                </span>
                            </div>
                        </div>
                    </div>
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