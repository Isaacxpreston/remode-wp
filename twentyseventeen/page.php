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
<!-- todo: redirect script -->


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

<?php 

get_footer();
