<?php if (have_rows('app_integrations')) : ?>
    <div id="integrate-with" class="page-padding-x">
        <div class="container slick-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
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
    </div>
<?php endif; ?>