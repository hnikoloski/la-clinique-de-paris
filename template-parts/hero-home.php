<div id="hero-home" style="background-image:url(<?php the_field('hero_bg_img'); ?>); background-size:cover; background-position:center; background-repeat:no-repeat;">
    <div class="content">
        <h1 class="animate-text" data-splitting><?= get_bloginfo(); ?></h1>
        <h2 class="animate-text" data-splitting><?php the_field('hero_content'); ?></h2>
        <a href="#scrollTarget" class="btn btn-mui btn-mui-down">
            <div class="icon"><span class="material-icons">arrow_forward_ios</span></div>
        </a>
    </div>
</div>