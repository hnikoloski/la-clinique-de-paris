<div id="our-services">
    <div class="container">
        <div class="col">
            <h2 class="animate-text" data-splitting><?php _e('Our Services', 'services'); ?></h2>
            <?php if (get_field('services_title')) : ?>
                <h3 class="animate-text" data-splitting><?php the_field('services_title'); ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <div class="px-container py-lg bg-body">
        <?php
        $services_posts = get_field('services_loop');
        if ($services_posts) : ?>
            <div class="home-services-container">
                <div class="home-services-listings">

                    <?php foreach ($services_posts as $post) :

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <div class="home-services-listings-item">
                            <div class="content">
                                <h3 class="heading"><?php the_title(); ?></h3>
                                <div class="bottom">
                                    <div class="body">
                                        <p><?= get_the_excerpt(); ?></p>
                                    </div>
                                    <a class="arrow-link" href="<?php the_permalink(); ?>">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                                                <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#A67744" stroke-miterlimit="10" stroke-width="0.561"></path>
                                            </svg>
                                            <span class="material-icons">arrow_forward_ios</span>
                                        </div>
                                        <span class="text">Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                </div>
            </div>

        <?php endif; ?>

    </div>
</div>