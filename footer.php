<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reroot
 */
?>
	<footer>
		<!--バナーエリア-->
		<section class="banner_area">
			<div class="container">
				<div class="row row-10">
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/よくある質問" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/banner_glossary.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/よくある質問" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/banner_glossary.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/よくある質問" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/banner_glossary.png" alt=""></a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
						<a href="/よくある質問" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/banner_glossary.png" alt=""></a>
					</div>
				</div>
			</div>
		</section>
		<!--フッターメニューエリア-->
		<div class="footer_menu2">
		<ul>
			<li><a href="http://logz.co.jp/" title="">運営会社</a></li>
			<li><a href="/運営会社" title="">用語集</a></li>
			<li><a href="/お役立ち情報" title="">お役立ち情報</a></li>
			<li><a href="/サイトマップ" title="">サイトマップ</a></li>
			<li><a href="/プライバシーポリシー" title="">プライバシーポリシー</a></li>
			<li><a href="/表記について" title="">障害者の表現について</a></li>
			<li><a href="contact/?preview=true" title="">お問合せ</a></li>
		</ul>
		</div>
		<div class="footer_copyright">
			<p>COPYRIGHT © Re:Root Inc. ALL RIGHTS RESERVED</p>
		</div>
	</footer>
	<script src="http;//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/function.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<script>
	$('.gallery_slider').slick({
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        arrows: true,
	        dots: false,
	        fade: false,
	        asNavFor: '.gallery_slider_nav',
	        responsive: [
	            {
	              breakpoint: 1024,
	              settings: {
	                slidesToShow: 2,
	                slidesToScroll: 1,
	                infinite: true,
	                dots: false
	              }
	            },
	            {
	              breakpoint: 600,
	              settings: {
	                slidesToShow: 2,
	                slidesToScroll: 1,
	                dots: false
	              }
	            },
	            {
	              breakpoint: 480,
	              settings: {
	                slidesToShow: 1,
	                slidesToScroll: 1,
	                dots: false
	              }
	            }
	          ]
	    });
	    $('.gallery_slider_nav').slick({
	        slidesToShow: 8,
	        slidesToScroll: 1,
	        asNavFor: '.gallery_slider',
	        dots: false,
	        centerMode: true,
	        focusOnSelect: true,
	        arrows:  true,
	        prevArrow: $('.slick-prev'),
	        nextArrow: $('.slick-next'),
	        responsive: [
	            {
	              breakpoint: 1024,
	              settings: {
	                slidesToShow: 5,
	                slidesToScroll: 1,
	                infinite: true,
	                dots: true
	              }
	            },
	            {
	              breakpoint: 600,
	              settings: {
	                slidesToShow: 5,
	                slidesToScroll: 1
	              }
	            },
	            {
	              breakpoint: 480,
	              settings: {
	                slidesToShow: 2,
	                slidesToScroll: 1
	              }
	            }
	          ]
	    });
	</script>
<?php wp_footer(); ?>
</body>
</html>
