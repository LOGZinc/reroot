<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reroot
 */

get_header(); ?>
<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="blog_article_area">
					<?php
					while ( have_posts() ) : the_post();?>
					<div class="blog_article_date">
						<?php echo get_the_date(); ?>
					</div>
					<div class="blog_article_title">
						<h1 class="page_common_headeing"><?php echo get_the_title(); ?></h1>
					</div>
					<div class="blog_article_contents">
						<?php the_content(); ?>
					</div>
					<div class="post_link_area">
						<div class="next_post_link">
							<?php previous_post_link('%link', '前へ', TRUE); ?>
						</div>
						<div class="previous_post_link">
							<?php next_post_link('%link', '次へ', TRUE); ?>
						</div>
					</div>
					<?php
					endwhile; // End of the loop.the_post_navigation();
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();