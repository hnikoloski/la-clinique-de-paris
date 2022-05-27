<?php // Get the current page featured image url
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
?>
    <div class="container">
        <?php
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <article class="blog-card">
                <a href="<?php the_permalink(); ?>" class="single">
                    <div class="content">
                        <h4 class="heading"><?php the_title(); ?></h4>
                        <div class="wrapper">
                            <p class="excerpt"><?php $theExcerpt = get_the_excerpt();
                                                if (strlen($theExcerpt) > 100) {
                                                    $theExcerpt = substr($theExcerpt, 0, 100);
                                                    $theExcerpt .= '...';
                                                }
                                                echo $theExcerpt; ?></p>
                            <div class="arrow-link arrow-link-white">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                                        <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#A67744" stroke-miterlimit="10" stroke-width="0.561"></path>
                                    </svg>
                                    <span class="material-icons">arrow_forward_ios</span>
                                </div>
                                <span class="text"><?php _e('Read More', 'starter'); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="image" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
                </a>
            </article>

        <?php
        }
        ?>

    <?php
} else { ?>
    <?php
}

// Restore original Post Data
wp_reset_postdata();

// Pagination
the_posts_pagination(array(
    'mid_size'  => 2,
    'prev_text' => __('<span class="material-icons">arrow_back_ios</span>', 'starter'),
    'next_text' => __('<span class="material-icons">arrow_forward_ios</span>', 'starter'),

));

// Restore original Post Data
wp_reset_postdata();
    ?>