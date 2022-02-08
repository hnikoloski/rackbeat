<?php

/**
 * Template name: Ecommerce page
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
?>

<main>
    <section id="intro" class="page-padding-x">
        <h3 class="heading"><?php the_field('intro_title'); ?></h3>
        <?php the_field('intro_content'); ?>
    </section>
    <?php
    get_template_part('template-parts/short-description-ecommerce');
    ?>
    <section class="content-boxes page-padding-x">
        <div class="row">
            <div class="col">
                <h6><?php the_field('content_boxes_subtitle'); ?></h6>
                <h4 class="heading"><?php the_field('content_boxes_title'); ?></h4>
                <?php the_field('content_boxes_content'); ?>
            </div>
            <div class="img-wrapper">
                <img src="<?php the_field('content_boxes_image'); ?>" alt="<?php the_field('content_boxes_title'); ?>" class="full-size-img full-size-img-cover">
            </div>
        </div>
        <div class="row">
            <div class="img-wrapper">
                <img src="<?php the_field('second_content_boxes_image'); ?>" alt="<?php the_field('second_content_boxes_title'); ?>" class="full-size-img full-size-img-cover">
            </div>
            <div class="col">
                <h6><?php the_field('second_content_boxes_subtitle'); ?></h6>
                <h4 class="heading"><?php the_field('second_content_boxes_title'); ?></h4>
                <?php the_field('second_content_boxes_content'); ?>
            </div>

        </div>
    </section>

    <section id="outro" class="page-padding-x">
        <h5 class="heading"><?php the_field('outro_title'); ?></h5>
        <?php the_field('outro_content'); ?>
    </section>
    <?php
    get_template_part('template-parts/integrate-with');
    ?>
</main>

<?php get_footer(); ?>