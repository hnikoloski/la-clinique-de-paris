<div class="home-intro bg-body" id="scrollTarget">
    <?php if (get_field('intro_big_image')) : ?>
        <div class="home-intro-image-main animate-ltr" style="background-image:url('<?php the_field('intro_big_image'); ?>');"></div>
    <?php endif; ?>
    <?php if (get_field('intro_small_image_first')) : ?>
        <div class="home-intro-image-01" style="background-image:url('<?php the_field('intro_small_image_first'); ?>');"></div>
    <?php endif; ?>
    <?php if (get_field('intro_small_image_second')) : ?>
        <div class="home-intro-image-02" style="background-image:url('<?php the_field('intro_small_image_second'); ?>');"></div>
    <?php endif; ?>
    <div class="home-intro-content py-lg">
        <div class="container">
            <?php if (get_field('intro_section_title')) : ?>
                <h2 class="home-intro-heading animate-text" data-splitting><?php the_field('intro_section_title'); ?></h2>
            <?php endif; ?>
            <?php if (get_field('intro_section_content')) : ?>

                <div class="richtext richtext-fade-in">
                    <?php the_field('intro_section_content'); ?>
                </div>
            <?php endif; ?>
            <a class="arrow-link fade-in-item" href="#">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                        <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#E8842D" stroke-miterlimit="10" stroke-width="0.561"></path>
                    </svg>
                    <span class="material-icons">arrow_forward_ios</span>
                </div>
                <span class="text">Discover our story</span>
            </a>
        </div>

    </div>
</div>