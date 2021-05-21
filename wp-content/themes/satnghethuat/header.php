
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SẮT NGHỆ THUẬT TRẦN GIA</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover-min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/global.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/pics/favicon-32x32.png" type="image/gif" sizes="16x16">

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-592794b9d7b2cc18"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.customized.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
</head>

<body>
<header id="header">
    <div class="container autoheight">
        <div class="row autoheight">
            <div class="header_left">
                <div class="col-lg-2 logo autoheight">
                    <h1>
                        <a href="<?php bloginfo( 'url' ); ?>" title="logo">
                            <!-- <img src="<?php the_field('logo', 'option'); ?>" alt="Sat Nghe Thuat"> -->
                            Sắt Nghệ Thuật <br>
                            <span>Trần <b>Gia</b></span>
                        </a>
                    </h1>
                    <!-- <marquee direction="left" behavior="”alternate”" scrollamount="”20″">
                        <p class="title"> Một thương hiệu mới <span>Một địa chỉ tin cậy</span>
                        </p>
                    </marquee> -->

                </div>
            </div>
            <div class="header_right">
                <div class="top">
                    <p class="title">Sắt nghệ thuật <span>TRẦN GIA</span>
                    </p>
                    <p class="second">UY TÍN - CHẤT LƯỢNG - HÀI LÒNG</p>
                </div>
                <div class="bottom">
                    <div id="menu">

                        <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'container' => 'false',
                            'menu_id' => 'menu2',
                            'menu_class' => 'menu'
                        )
                        ); ?>
                    </div>
                    <div class="search_content">
						<form action="<?php bloginfo('url'); ?>/" method="GET" role="form">
							<div class="form-group">
								<input type="text" name="s" class="form-control" id="" placeholder="Từ khóa">
							</div>
							<button type="submit" class="search"></button>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
