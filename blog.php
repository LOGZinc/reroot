<?php

/*

Template Name: blog

*/

?>
<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<div class="page_common_headeing_area">
			<h1 class="page_common_headeing">ブログ一覧</h1>
			<p class="page_common_small">Re:Rootの最新情報や実際の雰囲気をお伝えするような記事を配信していきます。</p>
		</div>
		<span class="triangle"></span>
		    <div class="row row-10">
				<?php query_posts('posts_per_page=6&paged='.$paged); ?>
					<?php if (have_posts()) :
						while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<a href="<?php the_permalink(); ?>">
							<div class="blog_article">
							<span class="new_mark">NEW</span>
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
								<div class="blog_article_text_area">
									<h2><?php the_title(); ?></h2>
								</div>
							</div>
						</a>
						</div>
						<?php
						endwhile; // 繰り返し処理終了
						else : ?>
						<?php endif; ?>
			</div>
						<div class="pagenatin_area">
							<?php
							//Pagenation
							if (function_exists("pagination")) {
								pagination($additional_loop->max_num_pages);
							}
							?>
						</div>
		</div>
</section>
<?php
get_footer();