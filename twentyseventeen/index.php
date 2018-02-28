<?php get_header(); ?>

<h1>Here</h1>

<div id="container">

</div>

<h1>Not Here</h1>

<div id="moveThis">
	<?php
		$my_id = 2;
		$post_id_5369 = get_post($my_id);
		$content = $post_id_5369->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]>', $content);
		echo $content;
	?>
</div>

<script>
	window.onload = function() {
		document.getElementById('container').appendChild(  document.getElementById('moveThis') )
	}
</script>

<?php get_footer();