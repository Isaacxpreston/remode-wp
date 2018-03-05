<?php get_header(); ?>

<!-- vue files -->
<div id=app></div><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/manifest.298d74c79f5df4343b14.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/vendor.a569ddd623b21a1fc1c1.js></script><script type=text/javascript src=wp-content/themes/twentyseventeen/assets/js/app.a648d08a5d5e5ba1aef4.js></script>


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
	<link href=wp-content/themes/twentyseventeen/assets/css/app.3c8a9380187caf12a04b001a72afe5e6.css rel=stylesheet>

	<!-- form overwrite styles -->
	<link rel="stylesheet" href="wp-content/themes/twentyseventeen/assets/css/custom.css" type="text/css" media="all">

	<style>
		body, .site-content {
			background: white !important;
			padding: 0px !important;
		}
	</style>


	<!-- bugherd -->

	<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=xwb2jq4fnlxcotg0gchqew';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>

	<?php get_footer();