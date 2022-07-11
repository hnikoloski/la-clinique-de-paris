<?php get_header();
$featured_image = get_the_post_thumbnail_url();
?>
<div id="inner-hero" style="--background: url('<?= $featured_image; ?>')">
    <h1 class="animate-text" data-splitting><?php the_title(); ?></h1>
    <a class="hero-scroll-btn" href="#<?php the_ID(); ?>"></a>
</div>
<main>

    <?php
    $terms = get_the_terms($post->ID, 'media_type');
    $term = $terms[0];
    $termSlug = $term->slug;
    ?>
    <div class="the-content-wrapper" id="<?php the_ID(); ?>">
        <?php if ($termSlug == 'photos') : ?>
            <div class="slider-wrapper">
                <?php
                $images = get_field('photo_gallery');
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
        <?php endif; ?>
    </div>

</main>
<?php get_footer(); ?>