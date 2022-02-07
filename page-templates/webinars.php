<?php

/**
 * Template name: Webinars
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
?>

<main class="page-padding-x">
    <div class="top">
        <?php if (get_field('content_title')) : ?>
            <h3 class="heading"><?php the_field('content_title'); ?></h3>
        <?php endif; ?>

        <?php if (have_rows('list')) : ?>
            <ul class="checkmark-list">
                <?php while (have_rows('list')) : the_row();
                ?>
                    <li>
                        <?php the_sub_field('list_item'); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div class="bottom">
        <?= do_shortcode(get_field('form_shortcode')); ?>
    </div>
</main>

<?php get_footer(); ?>