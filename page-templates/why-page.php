<?php

/**
 * Template name: Why page
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
?>

<main>
    <div class="top">
        <?php if (get_field('image_content')) : ?>
            <div class="img-wrapper">
                <img src="<?php the_field('image_content'); ?>" alt="<?php the_field('content_title'); ?>" class="full-size-img full-size-img-contain">
            </div>
        <?php endif; ?>
        <div class="col">
            <?php if (get_field('content_title')) : ?>
                <h2 class="heading"><?php the_field('content_title'); ?></h2>
            <?php endif; ?>
            <?php if (get_field('content_next_to_image')) : ?>
                <?php the_field('content_next_to_image'); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if (get_field('bottom_content')) : ?>
        <div class="bottom page-padding-x">
            <?php the_field('bottom_content'); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>