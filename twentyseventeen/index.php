<?php get_header(); ?>

<!-- vue files -->
<div id=app></div><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/manifest.298d74c79f5df4343b14.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/vendor.17d770379dd0b1b3199f.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/app.56435fc63f2c7801688c.js></script>


<div id="nf-content-one">
	<?php
		$my_id = 2;
		$post_id_5369 = get_post($my_id);
		$content = $post_id_5369->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
</div>

	<!-- main styles -->
	<link href=wp-content/themes/twentyseventeen/assets/css/app.ad45916ef49f7447fb65bde54e1173dd.css rel=stylesheet>

	<!-- form overwrite styles -->
	<link rel="stylesheet" href="wp-content/themes/twentyseventeen/assets/css/custom.css" type="text/css" media="all">
	<style>
		body, .site-content {
			background: white !important;
		}
		</style>

	<?php get_footer();