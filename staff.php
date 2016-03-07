<?php

/*

Template Name: staff

*/

?>
<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<div class="page_common_headeing_area">
			<h1 class="page_common_headeing">スタッフ紹介</h1>
			<p class="page_common_small">皆様の担当をするスタッフをご紹介いたします。</p>
		</div>
		<span class="triangle"></span>
		<div class="row row-10">
			<?php if (have_posts()) : query_posts('post_type=stuff&order=ASC'); ?>
	 		<?php while (have_posts()) : the_post(); ?>
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
				<div class="private_staff_area">
					 <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?>
					<div class="private_staff_text">
						<p class="private_staff_name"><?php the_title(); ?></p>
					</div>
				</div>
			</div>
			<?php endwhile;?>
			<?php else : ?>
			    Not Found.
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<?php
get_footer();