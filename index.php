<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reroot
 */
get_header(); ?>
	<!--ステップエリア-->
	<section class="step_area">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 text-center">
					<h1 class="top_headeing">ステップ</h1>
					<div class="step_area_text section_text">
						<p>
						  <span>「どんな方でも自分らしく生きて欲しい。」</span><br>
						  そんな思いを胸に就労移行支援事務所rerootは
						  障害者の方々の「働きたい」「夢を叶えたい」等…の強い思いを
						  ４つのステップでサポート致します。
						</p>
					</div>
				</div>
			</div>
		</div>
	<div class="step_area_img">
		<div class="container">
		    <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
					<div class="step_area_img_list">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/step01.png" alt="">
					  <p class="step_area_list_text">
					    就労移行支援事業所ウイングルという環境に慣れ、就職への準備を始めます。新しい生活に慣れるまで、スタッフと相談しながら通う日数。
					  </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
					<div class="step_area_img_list">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/step02.png" alt="">
					  <p class="step_area_list_text">
					    就労移行支援事業所ウイングルという環境に慣れ、就職への準備を始めます。新しい生活に慣れるまで、スタッフと相談しながら通う日数。
					  </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
					<div class="step_area_img_list">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/step03.png" alt="">
					  <p class="step_area_list_text">
					    就労移行支援事業所ウイングルという環境に慣れ、就職への準備を始めます。新しい生活に慣れるまで、スタッフと相談しながら通う日数。
					  </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 text-center">
					<div class="step_area_img_list">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/step04.png" alt="">
					  <p class="step_area_list_text">
					    就労移行支援事業所ウイングルという環境に慣れ、就職への準備を始めます。新しい生活に慣れるまで、スタッフと相談しながら通う日数。
					</div>
				</div>
		    </div>
		    <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<span class="more_btn"><a href="/就労移行支援事業とは？" title="">もっと詳しく</a></span>
				</div>
		    </div>
		</div>
	</div>
	</section>
	<!--経営理念エリア-->
	<section class="corporate_philosophy_area">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1 class="top_headeing">経営理念</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<p>
					--多様性を尊重し、それぞれが自立して輪の中に--
					障がいがあろうがなかろうが、自分らしく生き、自分らしく働くのを、世の中の当たり前にしたい。
					私たちはそのために、福祉業界の記録を作りたいと考えています。
					みなさんの第二のルーツ(根)となる場所を目指して。
					リルートと共に、挑戦し、行動し、歩んでいきましょう!!
					</p>
				</div>
			</div>
		</div>
	</section>
	<!--ブログエリア-->
	<section class="blog_area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 text-center">
				<h1 class="top_headeing">ブログ</h1>
				<div class="blog_area_text section_text">
					<p>
					rerootのリアルな情報をお伝えいたします。
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	    <div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="blog_article">
					<img src="<?php echo get_template_directory_uri(); ?>/img/blog_sample1.jpg" alt="">
					<div class="blog_article_text_area">
						<h2>テキストが入りまーーす。</h2>
						<p>口内炎が痛いですが頑張りま…</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="blog_article">
					<img src="<?php echo get_template_directory_uri(); ?>/img/blog_sample2.jpg" alt="">
					<div class="blog_article_text_area">
						<h2>テキストが入りまーーす。</h2>
						<p>口内炎が痛いですが頑張りま…</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="blog_article">
					<img src="<?php echo get_template_directory_uri(); ?>/img/blog_sample3.jpg" alt="">
					<div class="blog_article_text_area">
						<h2>テキストが入りまーーす。</h2>
						<p>口内炎が痛いですが頑張りま…</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="blog_article">
					<img src="<?php echo get_template_directory_uri(); ?>/img/blog_sample3.jpg" alt="">
					<div class="blog_article_text_area">
						<h2>テキストが入りまーーす。</h2>
						<p>口内炎が痛いですが頑張りま…</p>
					</div>
				</div>
			</div>
	    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
	    </div>
	  	</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<span class="more_btn"><a href="#" title="">もっと見る</a></span>
			</div>
		</div>
	</div>
	</section>
	<!--写真エリア-->
	<section class="gallery_area">
		<div class="row">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h1 class="top_headeing">写真</h1>
					<div class="blog_area_text section_text">
						<p>
						rerootのリアルな情報をお伝えいたします。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="gallery_slider">
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
		<div class="gallery_slider_nav">
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
	</section>
	<!--SNSエリア-->
	<section class="sns_area">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h1 class="top_headeing">SNS</h1>
			  <div class="blog_area_text section_text">
			    <p>
			      各SNSにて最新情報をお届けします。
			    </p>
			  </div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="sns_Twitter">
						<a class="twitter-timeline" href="https://twitter.com/progroot" data-widget-id="695100147861057536">@progrootさんのツイート</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="sns_Facebook">
						<div class="fb-page" data-href="https://www.facebook.com/&#x5c31;&#x52b4;&#x79fb;&#x884c;&#x652f;&#x63f4;&#x4e8b;&#x696d;&#x6240;&#x30ea;&#x30eb;&#x30fc;&#x30c8;-148903492152774/" data-tabs="timeline" data-width="500px" data-height="570" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
