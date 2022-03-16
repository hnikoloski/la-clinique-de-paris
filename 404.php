<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * 
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="number">404</div>
		<div class="text"><span><?php _e('Ooops...', 'starter'); ?></span><br><?php _e('page not found', 'starter'); ?></div>
		<a href="<?= home_url(); ?>"><?php _e('Back to home', 'starter'); ?></a>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
