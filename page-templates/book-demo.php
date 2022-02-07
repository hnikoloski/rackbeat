<?php

/**
 * Template name: Book Demo
 */
get_header(); ?>

<?php
get_template_part('template-parts/hero-inner');
?>
<div class="cta page-padding-x">
    <div class="wrapper">
        <div class="img-wrapper">
            <img src="<?php the_field('form_image'); ?>" alt="<?php the_field('form_title'); ?>">
        </div>
        <h3 class="heading fw-bold"><?php the_field('form_title'); ?></h3>
        <h4><?php the_field('form_sub_title'); ?></h4>
        <?= do_shortcode(get_field('form_shortcode')); ?>
    </div>
</div>

<?php get_footer(); ?>