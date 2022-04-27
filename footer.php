<div class="footer-cta px-container">
    <div class="container">
        <div class="footer-cta-container container">
            <h4 class="heading-md">Speak to us today about how we can work together</h4>
            <a class="arrow-link arrow-link-white" href="#">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.607 40.607">
                        <path d="M20,0,34.142,5.858,40,20,34.142,34.142,20,40,5.858,34.142,0,20,5.858,5.858Z" transform="translate(0.304 40.303) rotate(-90)" fill="currentColor" stroke="#FEFEFE" stroke-miterlimit="10" stroke-width="0.561"></path>
                    </svg>
                    <span class="material-icons">arrow_forward_ios</span>
                </div>
                <span class="text">Get in touch</span>
            </a>
        </div>
    </div>
</div>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>
        <a href="<?= home_url(); ?>" class="logo-wrapper d-block">
            <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-contain">
        </a>

    </div><!-- .site-info -->
    <div class="extra-info text-center">
        <p> <a href="<?php the_field('location_link', 'options'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field('location_text', 'options'); ?></a></p>
        <p> <a href="tel:<?= str_replace(' ', '', get_field('phone', 'options')); ?>" class="fancy"><?php the_field('phone', 'options'); ?></a></p>
        <p> <a href="mailto:<?php the_field('email', 'options'); ?>" class="fancy"><?php the_field('email', 'options'); ?></a></p>

    </div>
    <ul class="socials">
        <?php if (get_field('linkedin', 'options')) : ?>
            <li>
                <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" rel="noopener noreferrer" class="linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512">
                        <title>Logo Linkedin</title>
                        <path d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"></path>
                    </svg>
                </a>
            </li>
        <?php endif; ?>
        <?php if (get_field('facebook', 'options')) : ?>
            <li>
                <a href="<?php the_field('facebook', 'options'); ?>" target="_blank" rel="noopener noreferrer" class="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Logo Facebook</title>
                        <path d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z" fill-rule="evenodd" />
                    </svg>
                </a>
            </li>
        <?php endif; ?>
        <?php if (get_field('instagram', 'options')) : ?>
            <li>
                <a href="<?php the_field('instagram', 'options'); ?>" target="_blank" rel="noopener noreferrer" class="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <title>Logo Instagram</title>
                        <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z" />
                        <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z" />
                    </svg>
                </a>
            </li>
        <?php endif; ?>
    </ul>
    <div class="copy-bar">
        <p class="copyright">
            <?php echo get_theme_mod('footer_copyright', 'Copyright &copy; ' . date('Y') . ' ' . get_bloginfo('name')); ?>
        </p>
        <p class="signature">
            Designed by <a href="https://tamaraandreevska.com" target="_blank" rel="noopener noreferrer">Tamara Andreevska</a> | Developed by <a href="https://hnikoloski.com" target="_blank" rel="noopener noreferrer">hNikoloski</a>
        </p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>