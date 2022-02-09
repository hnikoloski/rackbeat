<?php

/**
 * Template name: Prices page
 */
get_header(); ?>




<main>
    <section id="hero" class="page-padding-x">
        <h1><?php the_field('hero_title'); ?></h1>
        <div class="container">
            <div class="col">
                <h3 class="heading"><?php the_field('hero_content_title'); ?></h3>
                <?php the_field('hero_content_para'); ?>
                <p class="quote"><?= get_field('hero_content_quote'); ?></p>
            </div>
            <div class="col-lg">

                <?php if (have_rows('hero_packages')) : ?>
                    <div class="slider-wrapper">

                        <?php while (have_rows('hero_packages')) : the_row();
                            $title = get_sub_field('title');
                            $price = get_sub_field('price');
                            $description = get_sub_field('description');
                            $btnLink = get_sub_field('button_link');
                            $btnColor = get_sub_field('button_color');
                        ?>


                            <div class="card">
                                <div class="top">
                                    <h4><?= $title; ?></h4>
                                    <h3><?= $price; ?></h3>
                                    <p><?= $description; ?></p>
                                </div>
                                <div class="main">
                                    <?php the_sub_field('features'); ?>
                                </div>
                                <a href="<?= $btnLink; ?>" class="color-<?= $btnColor; ?>"><?php _e('Get Started', 'starter'); ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="intro" class="page-padding-x">
        <?php if (get_field('intro_quote')) : ?>
            <p class="quote"><?php the_field('intro_quote'); ?></p>
        <?php endif; ?>
        <h3 class="heading"><?php the_field('intro_title'); ?></h3>
        <?php the_field('intro_content'); ?>
    </section>
    <section id="content-section" class="page-padding-x">
        <div class="img-wrapper">
            <img src="<?php the_field('content_img'); ?>" alt="<?php the_field('intro_title'); ?>">
        </div>
        <div class="col">
            <?php the_field('the_content'); ?>
            <a href="<?php the_field('content_btn_url'); ?>" class="btn gradient-bg-red w-fit-content"><?php the_field('content_btn_txt'); ?></a>
        </div>
    </section>
    <section id="slider-section" class="page-padding-x">
        <header>
            <p class="subtitle"><?php the_field('slider_section_subtitle'); ?></p>
            <h3 class="heading"><?php the_field('slider_section_title'); ?></h3>
            <?php the_field('slider_section_description'); ?>
        </header>

        <?php if (have_rows('packages')) : ?>


            <div class="slider-wrapper">
                <?php $count = count(get_field('packages'));
                if ($count > 4) { ?>
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
                <?php }; ?>
                <?php while (have_rows('packages')) : the_row();
                    $title = get_sub_field('title');
                    $price = get_sub_field('price');
                    $description = get_sub_field('description');
                    $btnLink = get_sub_field('button_link');
                    $btnColor = get_sub_field('button_color');
                ?>
                    <div class="card">
                        <div class="top">
                            <h4><?= $title; ?></h4>
                            <h3><?= $price; ?></h3>
                            <p><?= $description; ?></p>
                        </div>
                        <div class="main">
                            <?php the_sub_field('features'); ?>
                        </div>
                        <a href="<?= $btnLink; ?>" class="color-<?= $btnColor; ?>"><?php _e('Get Started', 'starter'); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>