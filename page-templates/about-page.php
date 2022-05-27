<?php

/**
 *  Template Name: About Page
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
    <div class="container content-boxes">
        <?php if (get_field("boxes_title")) : ?>
            <div class="row">
                <div class="col w-100">
                    <!-- DOCTOR CLAUDE CHAUCHARD Founder, Chairman & CEO of “La Clinique De Paris” -->
                    <h2 class="heading animate-text" data-splitting><?php the_field('boxes_title'); ?></h2>
                </div>
            </div>
        <?php endif; ?>

        <?php if (have_rows('content_boxes_repeater')) : ?>
            <?php while (have_rows('content_boxes_repeater')) : the_row();
                $image = get_sub_field('image');
            ?>
                <div class="row decorated">
                    <div class="col w-50">
                        <div class="richtext richtext-fade-in">
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                    <div class="col w-50">
                        <div class="image" style="background-image:url('<?php the_sub_field('image'); ?>');"></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <div class="slider-wrapper">

        <?php
        $images = get_field('gallery');
        if ($images) : ?>
            <div id="gallery">
                <div class="swiper-wrapper">
                    <?php foreach ($images as $image) : ?>
                        <div class="swiper-slide" data-fancybox="gallery" data-src="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="full-size-img full-size-img-cover">
                        </div>
                    <?php endforeach; ?>
                </div>
                <footer>
                    <div class="gallery-carousel-nav">
                        <button class="gallery-carousel-prev" tabindex="-1" aria-label="Previous slide"><span class="material-icons">arrow_back_ios</span></button>
                        <button class="gallery-carousel-next" tabindex="0" aria-label="Next slide"><span class="material-icons">arrow_forward_ios</span></button>
                    </div>
                    <div class="gallery-scrollbar"></div>
                </footer>
            </div>
        <?php endif; ?>
    </div>
    <div class="container content-boxes">
        <?php if (get_field("extras_title")) : ?>
            <div class="row">
                <div class="col w-100">
                    <h3 class="heading animate-text" data-splitting><?php the_field('extras_title'); ?></h3>
                </div>
            </div>
        <?php endif; ?>

        <?php if (have_rows('extra_boxes')) : ?>
            <?php while (have_rows('extra_boxes')) : the_row();
                $image = get_sub_field('image');
            ?>
                <div class="row decorated">
                    <div class="col w-50">
                        <div class="richtext richtext-fade-in">
                            <h4 class="heading-lg animate-text"><?php the_sub_field('title'); ?></h4>
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                    <div class="col w-50">
                        <div class="image" style="background-image:url('<?php the_sub_field('image'); ?>');"></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</main>
<?php get_footer(); ?>