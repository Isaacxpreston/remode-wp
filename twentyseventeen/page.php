<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--  -->


<h1><?php echo wp_title(); ?></h1>
<!--

todo: redirect script

redirect url structure should be:

remode.com/#/ + (page template) + (page slug)

OR 

remode.com/#/ + (page slug)
	with page template as a custom field object

on navigation on vue application, use hash history, but manually change window loaction to include no hashes for shareable links

-->


<!-- echo forms/any other non ACF content -->
<!--
	todo: possibly reference forms by slug or id through ACF and get/render via ajax
-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile;
endif; ?>


<!-- https://www.advancedcustomfields.com/resources/get_field_objects/ -->
<?php

/*
*  get all custom fields, loop through them and create a label => value markup
*/

$fields = get_field_objects();

if( $fields )
{
	foreach( $fields as $field_name => $field )
	{
		echo '<div>';
			// echo '<h3>' . $field['label'] . '</h3>';
			if (is_array($field['value'])) {
				foreach( $field['value'] as $key => $value ) {
					if ($key === 'url') {
						echo "<img src='{$value}' style='height: 120px !important;' /> ";
					}
				}
			} else {
				echo $field['value'];
			}
		echo '</div>';
	}
}

?>



<!-- main styles (copied from index) -->
<link href=wp-content/themes/twentyseventeen/assets/css/app.1d2589b82345089156979b7558da44c4.css rel=stylesheet>

<!-- form overwrite styles (copied from index) -->
<link rel="stylesheet" href="wp-content/themes/twentyseventeen/assets/css/custom.css" type="text/css" media="all">

<style>
	/* (copied from index) */
	body,
	.site-content {
		background: white !important;
		padding: 0px !important;
	}
</style>

<?php 

get_footer();
