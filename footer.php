<footer id="colophon" class="site-footer">
    <div class="top-bar page-padding-x d-flex justify-content-space-between flex-wrap align-content-start align-items-start">
        <div class="left-box">
            <p>
                <?php the_field('sub_title_footer', 'option'); ?>
            </p>
            <h2>
                <?php the_field('title_footer', 'option'); ?>
            </h2>
            <div class="btns-wrapper d-flex justify-content-start flex-wrap align-content-center align-items-center">
                <a href="<?php the_field('button_1_link_footer', 'option'); ?>" class="btn white-bg w-fit-content"><?php the_field('button_1_text_footer', 'option'); ?></a>
                <a href="<?php the_field('button_2_link_footer', 'option'); ?>" class="btn gradient-bg w-fit-content"><?php the_field('button_2_text_footer', 'option'); ?></a>
            </div>
        </div>
        <div class="right-box">
            <div class="col">
                <h2 class="footer-heading"><?php _e('Contact Info', 'starter'); ?></h2>
                <?php the_field('contact_info', 'option'); ?>
            </div>
            <div class="col">
                <h2 class="footer-heading">
                    <?php
                    $locations = get_nav_menu_locations(); //get all menu locations
                    $menu = wp_get_nav_menu_object($locations['menu-3']); //get the menu object
                    echo $menu->name;
                    ?>
                </h2>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-3',
                        'container'      => false,
                    )
                );
                ?>
            </div>
            <div class="col">
                <h2 class="footer-heading">
                    <?php
                    $locations = get_nav_menu_locations(); //get all menu locations
                    $menu = wp_get_nav_menu_object($locations['menu-4']); //get the menu object
                    echo $menu->name;
                    ?>
                </h2>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-4',
                        'container'      => false,
                    )
                );
                ?>
            </div>
            <div class="col">
                <h2 class="footer-heading">
                    <?php
                    $locations = get_nav_menu_locations(); //get all menu locations
                    $menu = wp_get_nav_menu_object($locations['menu-5']); //get the menu object
                    echo $menu->name;
                    ?>
                </h2>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-5',
                        'container'      => false,
                    )
                );
                ?>
            </div>
        </div>
        <div class="extras">
            <div class="trustindex-widget">
                <script defer async src="https://cdn.trustindex.io/loader.js?3c80e9e48eef08250553fa6f57"></script>
            </div>
            <p><?php _e('Interested in a partnership?', 'starter'); ?><a href="<?php the_field('partnership_link_footer', 'options'); ?>"><?php _e('Click here', 'starter'); ?></a></p>
            <div class="footer-logo-wrapper">
                <img src="<?php the_field('footer_logo', 'options'); ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-cover">
            </div>
        </div>
    </div> <!-- .top-bar -->
    <div class="copy-bar page-padding-x">
        <p>&copy; <span class="current-year"></span> <?php _e('Rackbeat Software. All Rights Reserved', 'starter'); ?></p>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-6',
                'menu_id'        => 'copy-menu',
                'container'      => false,

            )
        );
        ?>
        <div class="footer-signature">
            <div class="developed-by">
                <a href="https://www.digitalpresent.io/" target="_blank" rel="noopener noreferrer">
                    <span class="screen-reader-text">Developed By Digital Present</span>
                    <p>Developed By Digital Present</p>
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/digital-present.svg" alt="Digital Present">
                </a>
            </div>
        </div>
    </div> <!-- .copy-bar -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>