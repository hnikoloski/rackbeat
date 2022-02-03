<?php
$args = array(
    'post_type'              => array('projects'),
    'post_status'            => array('publish'),
    'posts_per_page' => -1
);

$query = new WP_Query($args);

if ($query->have_posts()) {
?>
    <section id="integrate-with">
        <div class="container slick-slider">
            <?php
            while ($query->have_posts()) {
                $query->the_post();
                $appLogo = get_the_post_thumbnail_url();
                $appLink = get_the_permalink();
            ?>
                <div class="single-app">
                    <a href="<?= $appLink ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?= $appLogo; ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
<?php
} else {
    // no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>