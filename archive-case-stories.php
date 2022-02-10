<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
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
        'paged' => $paged,
        'posts_per_page' => 12,
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
    <div class="w-100">

        <div class="pagination">
            <?php
            echo paginate_links(array(
                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total'        => $query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 1,
                'mid_size'     => 1,
                'prev_next'    => false, // change to true if you want to indicate previous and next page
                'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
                'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
                'add_args'     => false,
                'add_fragment' => '',
            ));
            ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
