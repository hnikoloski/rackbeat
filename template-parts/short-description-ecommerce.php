<section id="short-description" class="page-padding-x">
    <header>
        <?php if (get_field('short_description_heading')) : ?>
            <h3 class="heading"><?php the_field('short_description_heading'); ?></h3>
        <?php endif; ?>
        <?php if (get_field('short_description_content')) : ?>
            <?php the_field('short_description_content'); ?>
        <?php endif; ?>

    </header>
    <?php if (have_rows('image_boxes')) : ?>
        <div class="wrapper d-flex flex-wrap align-content-stretch align-items-stretch justify-content-space-around">
            <?php while (have_rows('image_boxes')) : the_row();
                $boxImage = get_sub_field('image');
                $boxTitle = get_sub_field('title');
            ?>
                <div class="image-box">
                    <div class="img-wrapper">
                        <img src="<?= $boxImage; ?>" alt="<?= $boxTitle; ?>" class="full-size-img full-size-img-contain">
                    </div>
                    <h5><?= $boxTitle; ?></h5>
                    <?php the_sub_field('content'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>