<?php

/**
 * Template name: Wholesale
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
get_template_part('template-parts/short-description');
?>
<section id="inner-content">
    <header class="page-padding-x">
        <?php if (get_field('inner_content_header_title')) : ?>
            <h4 class="heading"><?php the_field('inner_content_header_title'); ?></h4>
        <?php endif; ?>
        <?php if (get_field('inner_content_header_btn_url')) : ?>
            <a href="<?php the_field('inner_content_header_btn_url'); ?>" class="btn gradient-bg w-fit-content mx-auto"><?php the_field('inner_content_header_btn_text'); ?></a>
        <?php endif; ?>
        <!-- <?php if (get_field('inner_content_header_title')) : ?>
            <div class="dust dust-right-side dust-no-space"></div>
        <?php endif; ?> -->
    </header>
</section>


<?php get_footer(); ?>