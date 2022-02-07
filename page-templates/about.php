<?php

/**
 * Template name: About
 */
get_header(); ?>

<div class="pos-r hero hero-inner">
    <div class="content">
        <?php if (get_field('title')) : ?>
            <h1><?php the_field('title'); ?></h1>
        <?php endif; ?>
        <?php if (get_field('top_content')) : ?>
            <?php the_field('top_content'); ?>
        <?php endif; ?>

    </div>
    <?php if (get_field('image')) : ?>
        <div class="img-wrapper">
            <img src="<?php the_field('image'); ?>" alt="<?php the_field('title'); ?>" class="full-size-img full-size-img-contain">
        </div>
    <?php endif; ?>
</div>
<main class="page-padding-x">
    <?php the_field('main_content'); ?>
    <div class="ending">
        <?php if (get_field('ending_title')) : ?>
            <h3 class="heading fw-bold"><?php the_field('ending_title'); ?></h3>
        <?php endif; ?>
        <?php if (get_field('ending_content')) : ?>
            <?php the_field('ending_content'); ?>
        <?php endif; ?>
    </div>
</main>


<?php get_footer(); ?>