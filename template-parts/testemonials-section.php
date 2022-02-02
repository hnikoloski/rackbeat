<section id="testemonials-section">
    <header class="page-padding-x d-flex flex-wrap align-content-center align-items-center justify-content-space-between">
        <h3 class="heading"><?php the_field('testemonials_section_title'); ?></h3>
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
    </header>

    <?php
    $args = array(
        'post_type'              => array('testemonials'),
        'post_status'            => array('publish'),
        'posts_per_page' => 20
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
    ?>
        <div class="wrapper">
            <div class="testemonials-slider">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="single-testemonial">
                        <h4><?php the_field('overall_experience'); ?></h4>
                        <div class="rating">

                            <?php
                            for ($x = 0; $x < get_field('star_rating'); $x++) {
                            ?>
                                <i class="fas fa-star"></i>
                            <?php
                            }
                            ?>
                        </div>
                        <p class="message"><?= get_the_content(); ?></p>
                        <h5><?php the_title(); ?></h5>
                        <p class="date">
                            <?= get_time_ago(strtotime(get_field('testemonial_left_on'))); ?>
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();

    ?>
    <footer class="d-flex flex-wrap align-content-center align-items-center justify-content-space-between">
        <div class="content">
            <?php if (get_field('ending_title')) : ?>
                <h3 class="heading"><?php the_field('ending_title'); ?></h3>
            <?php endif; ?>
            <?php if (get_field('ending_content')) : ?>
                <p><?php the_field('ending_content'); ?></p>
            <?php endif; ?>
            <?php if (get_field('ending_btn_link')) : ?>
                <a href="<?php the_field('ending_btn_link'); ?>" class="btn gradient-bg-red w-fit-content"><?php _e('Sign Up', 'starter'); ?> </a>
            <?php endif; ?>
        </div>
        <div class="img-wrapper">
            <img src="<?php the_field('ending_image'); ?>" alt="<?php the_field('ending_title'); ?>" class="full-size-img">
        </div>
    </footer>
</section>