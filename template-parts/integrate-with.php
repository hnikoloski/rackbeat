<?php if (have_rows('app_integrations')) : ?>
    <section id="integrate-with">
        <div class="container slick-slider">
            <?php while (have_rows('app_integrations')) : the_row();
                $appLogo = get_sub_field('single_app_logo');
                $appLink = get_sub_field('single_app_link');
            ?>
                <div class="single-app">
                    <a href="<?= $appLink ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?= $appLogo; ?>" alt="App integration">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>