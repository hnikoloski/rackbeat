<?php

$image = get_field('hero_image');

if (empty($image)) {

    $hasImage = 'no-image';
} else {
    $hasImage = 'has-image';
} ?>

<div id="hero-home" class="pos-r <?= $hasImage; ?>">
    <div class="content">
        <?php if (get_field('hero_title')) : ?>
            <h2><?php the_field('hero_title'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('hero_sub_title')) : ?>
            <p><?php the_field('hero_sub_title'); ?></p>
        <?php endif; ?>
        <?php if (get_field('hero_button_url')) : ?>
            <a href="<?php the_field('hero_button_url'); ?>" class="btn gradient-bg w-fit-content"><?php _e('FREE TRIAL', 'starter') ?></a>
        <?php endif; ?>
    </div>
    <?php if (get_field('hero_image')) : ?>
        <div class="img-wrapper">
            <img src="<?php the_field('hero_image'); ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-contain">
        </div>
    <?php endif; ?>

</div>