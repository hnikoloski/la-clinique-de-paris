<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

?>

<!-- Blog Posts Page with pagination -->
<?php

// Get the current page featured image url
if (is_home() && get_option('page_for_posts')) {
	$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')), 'full');
	$featured_image = $img[0];
} else {
}

?>
<div id="archive-hero" style="--background: url('<?= $featured_image; ?>')">
	<h1><?php _e('Blog', 'starter'); ?></h1>
</div>
<?php
// Blog Posts Archive with pagination

// WP_Query arguments
$args = array(
	'post_type'              => array('post'),
	'post_status'            => array('publish'),
	'posts_per_page'         => '5',
	'order'                  => 'DESC',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
?>
		<?php
		the_title();
		?>
	<?php
	}
} else { ?>
<?php
}

// Restore original Post Data
wp_reset_postdata();

// Pagination
the_posts_pagination(array(
	'mid_size'  => 2,
	'prev_text' => __('&laquo;', 'textdomain'),
	'next_text' => __('&raquo;', 'textdomain'),
));

// Restore original Post Data
wp_reset_postdata();
?>