<?php

/*

Template Name: contact

*/

?>

<?php
get_header(); ?>
<section class="PageCommonSetting">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 text-center">
				<div class="contact_box">
					<h1>お問合せフォーム</h1>
					<div class="contact_small_text">
					<p>＊以下のフォームよりお問合せください。必須項目は全て入力をお願いいたします。
					お電話でも受け付けております。（TEL:0120-000-000）</p>
					</div>
					<?php echo do_shortcode( '[contact-form-7 id="35" title="お問合せフォーム"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
