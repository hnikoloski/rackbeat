<section id="product-intro" class="page-padding-x d-flex flex-wrap align-content-stretch align-items-stretch justify-content-space-between">
    <div class="content">
        <?php if (get_field('product_intro_title')) : ?>
            <h3 class="heading"><?php the_field('product_intro_title'); ?></h3>
        <?php endif; ?>

        <?php the_field('product_intro_content'); ?>

        <?php if (get_field('product_intro_button_url')) : ?>
            <a href="<?php the_field('product_intro_button_url'); ?>" class="btn gradient-bg w-fit-content"><?php _e('FREE TRIAL', 'starter') ?></a>
        <?php endif; ?>
    </div>
    <div class="img-wrapper">
        <img src="<?php the_field('product_intro_image'); ?>" alt="<?php the_field('product_intro_title'); ?>" class="full-size-img full-size-img-cover">
    </div>
</section>