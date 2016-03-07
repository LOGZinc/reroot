<?php

/*

Template Name: useful_info

*/

?>

<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<div class="page_common_headeing_area">
			<h1 class="page_common_headeing">お役立情報</h1>
			<p class="page_common_small">就労関係のお役に立つような情報をお伝えいたします！</p>
		</div>
		<span class="triangle"></span>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<div class="useful_info_area">
			<?php if (have_posts()) : query_posts('post_type=useful_info&posts_per_page=2&order=ASC'); ?>
	 		<?php while (have_posts()) : the_post(); ?>
					<div class="useful_info_archive">
						<div class="useful_info_archive_title">
							<p><?php the_title(); ?></p>
						</div>
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
						<div class="useful_info_archive_text">
							<p><?php the_content(); ?></p>
						</div>
						<div class="clearfix"></div>
					</div>
											<?php
						endwhile; // 繰り返し処理終了
						else : ?>
						<?php endif; ?>
				</div>
			</div>
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
