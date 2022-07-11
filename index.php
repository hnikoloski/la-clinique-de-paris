<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>


<?php $page_for_posts = get_option('page_for_posts');
?>

<div class="hero" style="--background: url('<?php the_field('blog_hero_bg', $page_for_posts); ?>')">
    <div class="container">
        <?php if (get_field('sub_title', $page_for_posts)) : ?>
            <p class="hero-subheading animate-text" data-splitting><?php the_field('sub_title', $page_for_posts); ?></p>
        <?php endif; ?>
        <?php if (get_field('title', $page_for_posts)) : ?>
            <h1 class="hero-heading animate-text" data-splitting><?php the_field('title', $page_for_posts); ?></h1>
        <?php endif; ?>
    </div>
</div>
<main id="primary" class="site-main">

    <?php
    // Wp query arguments paged 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // WP_Query arguments
    $args = array(
        'post_type'              => array('post'),
        'post_status'            => array('publish'),
        'posts_per_page'         => '9',
        'order'                  => 'DESC',
        'orderby'                => 'date',
        'paged'                  => $paged,
    );


    // The Query
    $query = new WP_Query($args);


    // The Loop
    if ($query->have_posts()) {
    ?>
        <div class="blogs-wrapper">

            <?php
            while ($query->have_posts()) {
                $query->the_post();
            ?>
                <article class="blog-card fade-in-item">
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

        </div>
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total'        => $query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf('<span class="material-icons-outlined">arrow_back_ios</span>', __('Newer Posts', 'text-domain')),
                'next_text'    => sprintf('<span class="material-icons">arrow_forward_ios</span>', __('Older Posts', 'text-domain')),
                'add_args'     => false,
                'add_fragment' => '',
            ));
            ?>
        </div>

    <?php
    } else {
        get_template_part('template-parts/content', 'none');
    }


    // Restore original Post Data
    wp_reset_postdata();
    ?>


</main><!-- #main -->
<?php
get_footer();
