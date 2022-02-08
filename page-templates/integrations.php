<?php

/**
 * Template name: Integrations
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');

?>

<div class="filterable-apps page-padding-x">
    <div class="wrapper">
        <header>
            <ul class="filter">
                <li><a href="*" class="active">All</a></li>
            </ul>
        </header>
        <div class="filterable-results"></div>
    </div>

</div>
<section id="short-description" class="page-padding-x">
    <?php if (get_field('short_description_title')) : ?>
        <h3 class="heading"><?php the_field('short_description_title'); ?></h3>
    <?php endif; ?>
    <?php if (get_field('short_description_para')) : ?>
        <?php the_field('short_description_para'); ?>
    <?php endif; ?>

</section>
<section id="listing-section" class="page-padding-x">
    <h3 class="heading"><?php the_field('listing_section_title'); ?></h3>
    <?php if (have_rows('checkmark_list')) : ?>
        <ul class="checkmark-list">
            <?php while (have_rows('checkmark_list')) : the_row();
                $listItem = get_sub_field('list_item');
            ?>
                <li><?= $listItem; ?></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
<?php get_footer(); ?>