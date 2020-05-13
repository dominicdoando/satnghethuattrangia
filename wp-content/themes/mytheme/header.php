<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>THĂNG LONG OSC</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/hover-min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/slick.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBd0CRmUEi0rqasieRwBmdjh1a8J9IkYLU"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/GoogleMapInit.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/infobox.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/index.js"></script>
</head>

<body>
	<header id="header">
		<div class="top_header">
			<div class="container">
				<div class="row content">
					<div class="block1">
						<ul class="list-unstyled list-inline">
							<li><a href="#" title="Thanglongosc">Thanglongosc.com </a></li>
							<li><a href="#" title="Thanglongosc">Thanglongosc.vn </a></li>
							<li><a href="#" title="Thanglongosc">Thanglongosc.edu.vn</a></li>
						</ul>
					</div>
					<div class="block2">
						<div class="tuvan">
							<p><span>Tư vấn:</span>0981 052 583 – 0966 430 186 – 0981057683</p>
							<p><span>Tổng đài tư vấn:</span>0246.6866.770</p>
						</div>
					</div>
					<div class="block3">
						<a href="#" class="openSearch"><i class="fa fa-search" aria-hidden="true"></i></a>
						<ul class="list-inline list-unstyled">
							<li>
								<a href="#" title="lannguges"></a>
							</li>
							<li>
								<a href="#" title="lannguges"></a>
							</li>
							<li>
								<a href="#" title="lannguges"></a>
							</li>
							<li>
								<a href="#" title="lannguges"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="middle_header">
			<div class="container">
				<div class="row">
					<div class="block1">
						<div class="logo">
						<a href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo('template_directory') ?>/pics/logo.png" alt="Thanglongosc"></a>
							
						</div>
						<div class="name_company">
							<p><?php bloginfo( 'name' ) ?></p>
							<p>Trung tâm tư vấn du học, xuất khẩu lao động tại Việt Nam</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_header">
			<div id="menu">
			
				<?php wp_nav_menu( 
				array( 
					'theme_location' => 'top-menu', 
					'container' => 'false', 
					'menu_id' => 'menu', 
					'menu_class' => 'menu'
				) 
				); ?>
			</div>
			<div id="box_search">
				<input type="text" placeholder="Nhập từ khóa tìm kiếm">
				<a href="#" title="search" class="search"><i class="fa fa-search" aria-hidden="true"></i></a>
			</div>
		</div>
		</div>
		<div id="backtop">
			<a href="#" title="abcktop">
				<img src="<?php bloginfo('template_directory') ?>/css/images/common/backtop.png" alt="backtop"></a>
			</a>
		</div>
	</header>