<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>
<header class="page-padding-x archive-header">
    <h1 class="fw-bold"><?php _e('A Warehouse Management System - with many happy users', 'starter'); ?> </h1>
</header>
<main id="primary" class="site-main page-padding-x">
    <?php
    // WP_Query arguments
    $args = array(
        'post_type'              => array('case-stories'),
        'post_status'            => array('publish'),
        'nopaging'               => true,
        'posts_per_page'         => '-1',
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
    ?>
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <h2><?php the_title(); ?></h2>
                <?php
                $my_excerpt = get_the_excerpt();
                if ($my_excerpt != '') {
                ?>
                    <p><?= get_the_excerpt(); ?></p>
                <?php
                } ?>
                <a href="<?php the_permalink(); ?>" class="btn gradient-bg w-fit-content"><?php _e('Read more', 'starter'); ?></a>
            </div>
    <?php
        }
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
</main><!-- #main -->

<?php
get_footer();
