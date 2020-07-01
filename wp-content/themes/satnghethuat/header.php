
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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css">
	<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.customized.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBd0CRmUEi0rqasieRwBmdjh1a8J9IkYLU"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/GoogleMapInit.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/infobox.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
</head>

<body>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59d76b2f7e18756b"></script>
<header id="header">
	<div class="container autoheight">
		<div class="row autoheight">
			<div class="header_left">
				<div class="col-lg-2 logo autoheight">
					<h1>
						<a href="<?php bloginfo( 'url' ); ?>" title="logo">
							<img src="<?php bloginfo('template_directory'); ?>/pics/logo.png" alt="LOGO" class="img-responsive">
						</a>
					</h1>
					<marquee direction="left" behavior="”alternate”" scrollamount="”20″">
						<p class="title"> Một thương hiệu mới <span>Một địa chỉ tin cậy</span>
						</p>
					</marquee>

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
							<input type="text" name="s" class="form-control" id="" placeholder="Từ khóa tìm kiếm">
							<button type="submit" class="search"></button>
						</form>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</header>