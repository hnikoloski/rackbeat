<?php

/**
 * Template name: Contact Page
 */
get_header(); ?>


<div class="container d-flex flex-wrap align-content-start align-items-start justify-content-space-between">
    <div class="col">
        <h1><?php the_title(); ?></h1>
        <p class="the-content"><?= get_the_content(); ?></p>

        <ul class="contact-list">
            <li class="phone-num"> <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></li>
            <li class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
            <li class="location">
                <p><?php the_field('address'); ?></p>
            </li>
        </ul>

        <div class="bottom">
            <h6><?php _e('Opening hours', 'starter'); ?></h6>
            <div class="wrapper d-flex flex-wrap align-content-stretch align-items-stretch justify-content-start">
                <div>
                    <p class="days"><?php the_field('working_days'); ?></p>
                    <p class="hours"><?php the_field('working_hours'); ?></p>
                </div>
                <div>
                    <p class="fw-bold"><?php _e('Follow us on', 'starter'); ?></p>
                    <ul class="socials d-flex flex-wrap align-content-stretch align-items-stretch justify-content-space-between">
                        <?php if (get_field('linkedin_link', 'option')) : ?>
                            <li><a href="<?php the_field('linkedin_link', 'option'); ?>" class="social-icon social-icon-linkedin"> <span class="screen-reader-text">Linkedin Social Link</span></a></li>
                        <?php endif; ?>
                        <?php if (get_field('facebook_link', 'option')) : ?>
                            <li><a href="<?php the_field('facebook_link', 'option'); ?>" class="social-icon social-icon-fb"> <span class="screen-reader-text">Facebook Social Link</span></a></li>
                        <?php endif; ?>
                        <?php if (get_field('youtube_link', 'option')) : ?>
                            <li><a href="<?php the_field('youtube_link', 'option'); ?>" class="social-icon social-icon-yt"> <span class="screen-reader-text">Youtube Link</span></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="col contact-form">
        <?= do_shortcode(get_field('contact_form_shortcode')); ?>
    </div>
    <div class="col w-100">
        <div class="map-wrapper">
            <?php the_field('map_iframe'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>