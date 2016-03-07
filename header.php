<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reroot
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta charset='utf-8'>
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<link href='<?php echo get_template_directory_uri(); ?>/scss/reset.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scss/slick.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scss/slick-theme.css" media="screen" />
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=894056354018944";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header>
		<!--PCサイズのnav-->
		<div class="nav visible-lg visible-md">
			<div class="container">
				<div class="nav_top">
					<div class="nav_top_logo">
					  <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/reroot-web_yoko.png" alt=""></a>
					</div>
					<div class="nav_top_booking_btn">
						<ul>
							<li><a href="contact">見学のお申し込み</a></li>
							<li><a href="contact">お問合せ</a></li>
							<li><a href="contact">資料請求</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
					<div class="nav_bottom">
						<?php wp_nav_menu( array ( 'theme_location' => 'mainmenu' ) ); ?>
					</div>
			</div>
		</div>
		<!--PCサイズのスクロール時のnav-->
		<div class="nav_scroll visible-lg visible-md">
			<div class="container">
				<div class="nav_top">
					<div class="nav_top_logo">
					  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/reroot-web_yoko.png" alt=""></a>
					</div>
				<div class="nav_top_menu_btn hidden-xs">
						<?php wp_nav_menu( array ( 'theme_location' => 'mainmenu' ) ); ?>
				</div>
				<div class="nav_top_booking_btn hidden-sm hidden-xs">
					<ul>
						<li><a href="contact">見学のお申し込み</a></li>
						<li><a href="contact">お問合せ</a></li>
						<li><a href="contact">資料請求</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--タブレットサイズ以下のnav-->
		<div class="nav visible-xs visible-sm">
			<div class="container">
				<div class="nav_top">
					<div class="nav_top_logo">
					  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/reroot-web_yoko.png" alt=""></a>
					</div>
					<div class="nav_top_booking_btn hidden-xs">
					  <ul>
					    <li><a href="contact">見学のお申し込み</a></li>
					    <li><a href="contact">お問合せ</a></li>
					    <li><a href="contact">資料請求</a></li>
					  </ul>
					</div>
					<div class="nav_btn hidden-lg">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="nav_bottom">
					<?php wp_nav_menu( array ( 'theme_location' => 'mainmenu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="smartphone_menu">
		    <ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/reroot-web_yoko.png" alt=""></li>
				<li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
		    </ul>
		    <?php wp_nav_menu( array ( 'theme_location' => 'mainmenu' ) ); ?>
				<div class="smartphone_menu_booking">
					<span class="smartphone_menu_title">お問合せはこちらから</span>
					<span class="smartphone_menu_address"><a href="contact" title="">メール</a></span>
					<span class="smartphone_menu_tel"><a href="contact" title=""><i class="fa fa-envelope-o"></i>お電話</a></span>
					<div class="clearfix"></div>
				</div>
		    <p class="smartphone_menu_close_btn">×閉じる</p>
		</div>
		<!--フロントページのみアイキャッチ表示-->
		<?php if ( is_home() || is_front_page() ) : ?>
		<div class="jumbotron">
			<div class="jumbotron_copy_area">
				<h1 class="jumbotron_big_copy">
				障害のある方でも<br>
				自分らしく生きて欲しい
				</h1>
				<p class="jumbotron_small_copy hidden-xs">
				障がいがあろうがなかろうが、自分らしく生き、自分らしく働くのを、世の中の当たり前にしたい。
				私たちはそのために、福祉業界の記録を作りたいと考えています。みなさんの第二のルーツ(根)となる場所を目指して。
				</p>
			</div>
		</div>
	<div class="top_gallery_area">
		<div class="top_gallery_slider">
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_01.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_02.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_03.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_04.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_05.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_06.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_07.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_08.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_09.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_10.jpg"></div>
		  <div><img src="<?php echo get_template_directory_uri(); ?>/img/gallary_11.jpg"></div>
		</div>
	</div>
	<?php endif; ?>
    </header>
