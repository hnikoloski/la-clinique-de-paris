<?php

/**
 *  Template Name: Media Page
 */
get_header(); ?>

<div class="hero" style="--background: url('<?php the_field('hero_background'); ?>')">
    <div class="container">
        <?php if (get_field('sub_title')) : ?>
            <p class="hero-subheading animate-text" data-splitting><?php the_field('sub_title'); ?></p>
        <?php endif; ?>
        <?php if (get_field('title')) : ?>
            <h1 class="hero-heading animate-text" data-splitting><?php the_field('title'); ?></h1>
        <?php endif; ?>
    </div>
</div>
<main>
    <ul class="filter">
        <li class="filter-item"><a href="#" data-filter="*" class="active"><?php _e('All', 'starter'); ?></a></li>
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'media_type',
            'hide_empty' => false,
        ));
        foreach ($terms as $term) {
            echo '<li class="filter-item"><a href="#" data-filter="' . $term->slug . '">' . $term->name . '</a></li>';
        }
        ?>
    </ul>
    <div class="media-filtered-results blogs-wrapper">

    </div>
</main>
<?php get_footer(); ?>