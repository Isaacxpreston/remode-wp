<?php get_header(); ?>

<!-- vue files -->
<div id=app></div><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/manifest.298d74c79f5df4343b14.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/vendor.17d770379dd0b1b3199f.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/app.7b1947e0406b2282a3de.js></script>


<div id="nf-content-speaking">
	<!-- Speaking Form -->
	<?php
		$my_id = 17;
		$post_id_5369 = get_post($my_id);
		$content = $post_id_5369->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
</div>

<div id="nf-content-attending">
	<!-- Attending Form -->
	<?php
		$my_id = 2;
		$post_id_5369 = get_post($my_id);
		$content = $post_id_5369->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
</div>


<div id="nf-content-sponsoring">
	<!-- Exhibiting / Sponsoring Form -->
	<?php
		$my_id = 16;
		$post_id_5369 = get_post($my_id);
		$content = $post_id_5369->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
</div>


	<!-- main styles -->
	<link href=wp-content/themes/twentyseventeen/assets/css/app.4ef38cb8c861d2ee6a266f80ff7b973f.css rel=stylesheet>

	<!-- form overwrite styles -->
	<link rel="stylesheet" href="wp-content/themes/twentyseventeen/assets/css/custom.css" type="text/css" media="all">
	<style>
		body, .site-content {
			background: white !important;
		}
		</style>

	<?php get_footer();