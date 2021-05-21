<footer id="footer">
	<section id="main_footer">
		<div class="container">
			<div class="row content">
				<div id="info_footer" class="col-xs-12 col-sm-4">
					<p class="title">Nghệ thuật sắt&nbsp;<span>TRẦN GIA</span>
					</p>
					<p class="second">Uy tín, chất lượng, hài lòng</p>
					<ul class="list-inline">
						<li>
							<span>Trụ sở:</span> <?php the_field('address', 'option'); ?>
						</li>
						<li><span>Điện thoại: </span><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
						<li><span>Email: </span><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
						</li>
						<li>Tư vấn trực tuyến: <span><?php the_field('phone_number', 'option'); ?></span> (Ks. Lâm)</li>
					</ul>
				</div>
				<div id="danhMuc">
					<p class="title">Danh Mục</p>
					<?php wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container' => 'false',
							'menu_id' => '10',
							'menu_class' => 'menu'
						)
					); ?>
				</div>
				<div id="fanpage" class="col-xs-12 col-sm-4">
					<div id="fb-root"></div>
					<script>
                        (function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
					</script>
					<div id="container1" style="width: 100%">
						<div class="fb-page" data-href="<?php the_field('facebook', 'option'); ?>" data-tabs="timeline" data-width="370"
							 data-height="252" data-small-header="false" data-hide-cover="false"
							 data-show-facepile="true">
						</div>
					</div>
					<script type="text/javascript">
                        $(window).bind("load resize",
                            function () {
                                var container1_width = $('#container1').width();
                                $('#container1').html(
                                    '<div class="fb-page" data-href="<?php the_field('facebook', 'option'); ?>" data-tabs="timeline" data-width="' +
                                    container1_width +
                                    '" data-height="252" data-small-header="false" data-hide-cover="false" data-show-facepile="true"></div> ');
                                FB.XFBML.parse();
                            });
					</script>
				</div>
			</div>
		</div>
	</section>
	<section id="copyright">
		<div class="container">
			<div class="row content">
				<p>Copyright © 2020 <a href="<?php the_field('website', 'option'); ?>"><?php the_field('website', 'option'); ?></a>
				</p>
			</div>
		</div>
	</section>
</footer>
<script>
    var timeout = null; // khai báo biến timeout
    $(".search-ajax").keyup(function(){ // bắt sự kiện khi gõ từ khóa tìm kiếm
        clearTimeout(timeout); // clear time out
        timeout = setTimeout(function (){
            call_ajax(); // gọi hàm ajax
        }, 500);
    });
    function call_ajax() { // khởi tạo hàm ajax
        var data = $('.search-ajax').val(); // get dữ liệu khi đang nhập từ khóa vào ô
        $.ajax({
            type: 'POST',
            async: true,
            url: '<?php echo admin_url('admin-ajax.php');?>',
            data: {
                'action' : 'Post_filters',
                'data': data
            },
            beforeSend: function () {
            },
            success: function (data) {
                $('#load-data').html(data); // show dữ liệu khi trả về
            }
        });
    }
</script>


</body>
</html>
