
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
                        <span>Trụ sở:</span> Khu đô thị Việt Hưng, Long Biên, Hà Nội
                    </li>
                    <li><span>Điện thoại: </span><a href="tel:0971003388">0971003388</a></li>
                    <li><span>Email: </span><a href="mailto:satnghethuatrangia@gmail.com">satnghethuatrangia@gmail.com</a></li>
                    <li>Tư vấn trực tuyến: <span>0947215986</span> (Ks. Lâm)</li>
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
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div id="container1" style="width: 100%">
                    <div class="fb-page" data-href="<?php bloginfo( 'url' ) ?>" data-tabs="timeline" data-width="370" data-height="252" data-small-header="false" data-hide-cover="false" data-show-facepile="true">
                    </div>
                </div>
                <script type="text/javascript">
                    $(window).bind("load resize",
                        function() {
                            var container1_width = $('#container1').width();
                            $('#container1').html(
                                '<div class="fb-page" data-href="<?php bloginfo( 'url' ) ?>" data-tabs="timeline" data-width="' +
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
            <p>Copyright © 2020 <a href="satnghethuattrangia.com">satnghethuattrangia.com</a>
            </p>
            <a href="#" title="Support online" class="support_footer">
                Để lại tin nhắn cho chúng tôi
            </a>
        </div>
    </div>
</section>
</footer>

   
                    </body>
</html>