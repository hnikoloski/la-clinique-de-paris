<?php
$services_posts = get_field('services_loop');
if ($services_posts) : ?>
    <div id="our-services-home">
        <header>
            <h2 class="heading text-center animate-text" data-splitting> Services</h2>
        </header>
        <div class="px-container pb-lg bg-body services-main">
            <div class="container">
                <div class="other-services-listings fade-in-item">
                    <div class="swiper-wrapper">
                        <?php foreach ($services_posts as $post) :
                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>" class="single">
                                    <div class="content">
                                        <h4 class="heading"><?php the_title(); ?></h4>
                                        <div class="wrapper">
                                            <p class="excerpt"><?= get_the_excerpt(); ?></p>
                                            <div class="arrow-link arrow-link-white">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                                                        <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#A67744" stroke-miterlimit="10" stroke-width="0.561"></path>
                                                    </svg>
                                                    <span class="material-icons">arrow_forward_ios</span>
                                                </div>
                                                <span class="text">Find out more</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="image" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <footer>
                        <div class="services-carousel-nav">
                            <button class="services-carousel-prev" tabindex="-1" aria-label="Previous slide"><span class="material-icons">arrow_back_ios</span></button>
                            <button class="services-carousel-next" tabindex="0" aria-label="Next slide"><span class="material-icons">arrow_forward_ios</span></button>
                        </div>
                        <div class="services-scrollbar"></div>
                    </footer>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>