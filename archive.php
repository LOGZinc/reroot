<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reroot
 */?>
<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<h1 class="page_common_headeing">ブログ</h1>
	    <div class="row">
			<?php query_posts($query_string.'&posts_per_page=10&paged='.$paged); ?>
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a href="<?php the_permalink(); ?>">
						<div class="blog_article">
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
	</div>
</section>
<?php
get_footer();