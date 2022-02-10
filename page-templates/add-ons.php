<?php

/**
 * Template name: Add-ons page
 */
get_header(); ?>



<?php
get_template_part('template-parts/hero-inner');
?>
<section id="main-content" class="page-padding-x">
    <header>
        <h3 class="heading"><?php the_field('main_content_title'); ?></h3>
        <?php the_field('main_content_description'); ?>
    </header>
    <?php if (have_rows('content_sections')) : ?>
        <div class="container">
            <?php while (have_rows('content_sections')) : the_row();
                $image = get_sub_field('image');

            ?>
                <div class="row">
                    <div class="col">
                        <?php the_sub_field('content'); ?>
                    </div>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>
<section id="listing-section" class="page-padding-x">
    <header>
        <h3 class="heading"><?php the_field('list_section_title'); ?></h3>
        <?php the_field('list_section_description'); ?>
    </header>
    <h4 class="heading fw-bold"><?php the_field('list_section_list_title'); ?></h4>
    <?php if (have_rows('listing_section_list')) : ?>
        <ul class="checkmark-list">
            <?php while (have_rows('listing_section_list')) : the_row();
            ?>
                <li>
                    <?php the_sub_field('list_item'); ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
<section id="outro" class="page-padding-x">
    <div class="col">
        <h4 class="heading"><?php the_field('outro_title'); ?></h4>
        <?php the_field('outro_content'); ?>
    </div>
    <div class="img-wrapper">
        <img src="<?php the_field('outro_image'); ?>" alt="<?php the_field('outro_title'); ?>" class="full-size-img full-size-img-cover">
    </div>
</section>
<?php get_footer(); ?>