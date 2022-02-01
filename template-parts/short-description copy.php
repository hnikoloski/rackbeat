<section id="short-description" class="page-padding-x">
    <header>
        <h3 class="heading"><?php the_field('short_description_heading'); ?></h3>
        <p><?php the_field('short_description_content'); ?></p>
    </header>
    <?php if (have_rows('image_boxes')) :
        $counter = 0; ?>
        <div class="wrapper d-flex flex-wrap align-content-stretch align-items-stretch justify-content-space-between">
            <?php while (have_rows('image_boxes')) : the_row();
                $boxImage = get_sub_field('image');
                $boxTitle = get_sub_field('title');
                $counter++;
            ?>
                <div class="image-box animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                    <div class="img-wrapper">
                        <img src="<?= $boxImage; ?>" alt="<?= $boxTitle; ?>" class="full-size-img full-size-img-contain">
                    </div>
                    <p><?= $boxTitle; ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>