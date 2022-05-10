<?php

/**
 *  Template Name: Contact Page
 */
get_header(); ?>

<div class="hero">
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
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-boxes">
                    <div class="contact-boxes-item fade-in-item">
                        <div class="contact-box">
                            <h2> <?php the_field('first_box_title'); ?></h2>
                            <div class="address">
                                <?php the_field('first_box_address'); ?>
                            </div>
                            <ul class="contact-details-links">
                                <li>
                                    <a href="<?php the_field('first_box_address_link'); ?>" target="_blank" rel="noopener noreferrer">
                                        <span class="material-icons">place</span>
                                        <span class="text">View on maps</span>
                                    </a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="contact-boxes-item fade-in-item">
                        <div class="contact-box">
                            <h2><?php the_field('second_box_title'); ?></h2>
                            <ul class="contact-details-links">
                                <li>
                                    <a href="mailto:<?php the_field('second_box_email'); ?>">
                                        <span class="material-icons">email</span>
                                        <span class="text"><?php the_field('second_box_email'); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?php the_field('second_box_phone'); ?>">
                                        <span class="material-icons">phone</span>
                                        <span class="text"><?php the_field('second_box_phone'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-boxes-item fade-in-item">
                        <div class="contact-box">
                            <?php if (get_field('first_box_title_second')) : ?>
                                <h2 class="secondary"><?php the_field('first_box_title_second'); ?></h2>
                            <?php endif; ?>
                            <?php if (get_field('first_box_content')) : ?>
                                <div class="address">
                                    <?php the_field('first_box_content'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <?php
                $formShortCode = get_field('contact_form_shortcode');
                echo do_shortcode($formShortCode);
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>