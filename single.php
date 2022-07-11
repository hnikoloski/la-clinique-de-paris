<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header();
?>
<div class="hero" style="--background: url('<?php the_post_thumbnail_url(); ?>')">
	<div class="container">
		<h1 class="hero-heading animate-text" data-splitting><?php the_title(); ?></h1>
	</div>
</div>
<main id="primary" class="site-main">
	<div class="blog-main-container">
		<?php the_content(); ?>
	</div>
</main><!-- #main -->

<?php
get_footer();
