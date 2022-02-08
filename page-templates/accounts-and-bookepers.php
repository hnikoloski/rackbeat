<?php

/**
 * Template name: Accounts and Bookkepers
 */
get_header(); ?>



<?php
get_template_part('template-parts/hero-inner');
?>
<section id="intro" class="page-padding-x">
    <h2 class="heading"><?php the_field("intro_title"); ?></h2>
    <?php the_field('intro_content'); ?>
</section>
<section id="listing-section" class="page-padding-x">
    <h3 class="heading"><?php the_field('listing_section_title'); ?></h3>
    <?php if (have_rows('listing_section_list')) : ?>
        <ul class="checkmark-list">
            <?php while (have_rows('listing_section_list')) : the_row(); ?>
                <li>
                    <?php the_sub_field('list_item'); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
<section id="integration-section" class="page-padding-x">
    <div class="img-wrapper">
        <img src="<?php the_field('integration_secton_image'); ?>" alt="<?php the_field('integration_secton_title'); ?>" class="full-size-img full-size-img-cover">
    </div>
    <div class="col">
        <h4 class="heading"><?php the_field('integration_secton_title'); ?></h4>
        <?php the_field('integration_secton_content'); ?>
        <a href="<?php the_field('integration_secton_btn_url'); ?>" class="btn gradient-bg w-fit-content"><?php the_field('integration_secton_btn_txt'); ?></a>
    </div>
</section>
<section id="slider-section">
    <div class="top">
        <h5 class="heading"><?php the_field('slider_section_title'); ?></h5>
        <div class="btns-wrapper d-flex flex-wrap align-content-center align-items-center justify-content-space-between">
            <a href="#" class="prev">
                <span class="screen-reader-text">Slider Previous</span>
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="#" class="next">
                <span class="screen-reader-text">Slider next</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <?php
    $featured_posts = get_field('slides');
    if ($featured_posts) : ?>
        <div class="slider-wrapper">
            <div class="slider">

                <?php foreach ($featured_posts as $post) :

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <div class="single-slide">
                        <h5><?php the_title(); ?></h5>
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <?php the_field('short_description'); ?>
                        <p><?php the_field('long_description'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn gradient-bg w-fit-content"><?php _e('Read more', 'starter') ?><span class="screen-reader-text">Read More</span></a>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>