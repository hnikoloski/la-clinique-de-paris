<?php get_header();
$featured_image = get_the_post_thumbnail_url();
?>
<div id="inner-hero" style="--background: url('<?= $featured_image; ?>')">
    <h1 class="animate-text" data-splitting><?php the_title(); ?></h1>
</div>
<main>
    <div class="the-content-wrapper">
        <?php the_content(); ?>
    </div>
    <?php if (get_field('cards')) : ?>
        <div class="cards-wrapper">
            <?php while (has_sub_field('cards')) :
                $backImage = get_sub_field('back_image');
                $title = get_sub_field('title');
            ?>
                <div class="card card-animated fade-in-item">
                    <div class="inner">
                        <div class="front">
                            <div class="liquid"></div>
                            <div class="card-content">
                                <h4 class="heading"><?= $title; ?></h4>
                                <div class="wrap">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                            <span class="material-icons-outlined trigger">
                                east
                            </span>
                        </div>
                        <div class="back">
                            <div class="card-image">
                                <?php $backImage = get_sub_field('back_image'); ?>
                                <img src="<?= $backImage; ?>" alt="<?= $title; ?>">
                            </div>
                            <span class="material-icons-outlined trigger">
                                west
                            </span>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>

    <?php endif; ?>

</main>
<?php get_footer(); ?>