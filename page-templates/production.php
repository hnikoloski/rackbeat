<?php

/**
 * Template name: Production
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
get_template_part('template-parts/short-description');
?>
<section id="intro" class="page-padding-x">
    <h3 class="heading"><?php the_field('first_section_title'); ?></h3>
    <?php the_field('first_section_description'); ?>
</section>
<section id="listing-section" class="page-padding-x">
    <h3><?php the_field('list_section_title'); ?></h3>
    <div class="col">
        <?php if (have_rows('first_list')) : ?>
            <ul class="checkmark-list">
                <?php while (have_rows('first_list')) : the_row(); ?>
                    <li>
                        <?php the_sub_field('list_item'); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="col">
        <?php the_field('list_content_para'); ?>
    </div>
</section>
<section id="image-section">
    <div class="col">
        <h4 class="heading"><?php the_field('first_image_section_title'); ?></h4>
        <?php the_field('first_image_section_content'); ?>
        <?php if (have_rows('first_image_content_list')) : ?>
            <ul class="checkmark-list">
                <?php while (have_rows('first_image_content_list')) : the_row(); ?>
                    <li>
                        <?php the_sub_field('list_item'); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="img-wrapper">
        <img src="<?php the_field('first_image_content_image'); ?>" alt="<?php the_field('first_image_section_title'); ?>" class="full-size-img full-size-img-cover">
    </div>
</section>
<section id="second-image-section" class="page-padding-x">
    <div class="img-wrapper">
        <img src="<?php the_field('second_image_content_image'); ?>" alt="<?php the_field('second_image_section_title'); ?>" class="full-size-img full-size-img-cover">
    </div>
    <div class="col">
        <h4 class="heading"><?php the_field('second_image_section_title'); ?></h4>
        <?php the_field('second_image_section_content'); ?>
        <a href="<?php the_field('second_image_section_btn_url'); ?>" class="btn gradient-bg w-fit-content"><?php the_field('second_image_section_btn_txt'); ?></a>
    </div>

</section>


<?php get_footer(); ?>