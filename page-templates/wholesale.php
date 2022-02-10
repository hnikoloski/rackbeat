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

    </header>
    <main class="page-padding-x">
        <div class="content d-flex flex-wrap align-content-center align-items-center justify-content-space-between">
            <div class="img-wrapper">
                <img src="<?php the_field('section_image_main'); ?>" alt="<?php the_field('section_title_main'); ?>" class="full-size-img full-size-img-contain">
            </div>
            <div class="col">
                <h5 class="heading"><?php the_field('section_title_main'); ?></h5>
                <p><?php the_field('section_description_main'); ?></p>
                <?php if (have_rows('section_list_main')) : ?>
                    <ul class="integration-list">
                        <?php while (have_rows('section_list_main')) : the_row();
                        ?>
                            <li>
                                <?php the_sub_field('single_item'); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <footer class="page-padding-x">
        <?php if (get_field('footer_title')) : ?>
            <h6 class="heading"><?php the_field('footer_title'); ?></h6>
        <?php endif; ?>
        <div class="content d-flex flex-wrap align-content-center align-items-center justify-content-space-between">
            <div class="col">
                <?php if (get_field('footer_content_title')) : ?>
                    <h6 class="heading"><?php the_field('footer_content_title'); ?></h6>
                <?php endif; ?>
                <?php if (get_field('footer_content')) : ?>
                    <?php the_field('footer_content'); ?>
                <?php endif; ?>
                <?php if (get_field('button_url')) : ?>
                    <a href="<?php the_field('button_url'); ?>" class="btn gradient-bg w-fit-content"><?php the_field('button_text'); ?></a>
                <?php endif; ?>
            </div>
            <div class="img-wrapper">
                <img src="<?php the_field('footer_image'); ?>" alt="<?php the_field('footer_content_title'); ?>" class="full-size-img full-size-img-contain">
            </div>
        </div>
    </footer>
</section>


<?php get_footer(); ?>