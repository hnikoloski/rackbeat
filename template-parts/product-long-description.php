<div id="product-long-description" class="page-padding-x">
    <header>
        <?php if (get_field('product_description_title')) : ?>
            <h3 class="heading"><?php the_field('product_description_title'); ?></h3>
        <?php endif; ?>
        <?php if (get_field('product_description_sub_title')) : ?>
            <p><?php the_field('product_description_sub_title'); ?></p>
        <?php endif; ?>
    </header>
    <?php if (have_rows('product_timeline')) : ?>
        <div class="wrapper">
            <P class="decorator">RACKBEAT</P>
            <?php while (have_rows('product_timeline')) : the_row();
                $timelineTitle = get_sub_field('title');
                $timelineContent = get_sub_field('content');
                $timelineImage = get_sub_field('image');
            ?>
                <div class="row">
                    <div class="col">
                        <div class="content">
                            <h6><?= $timelineTitle; ?></h6>
                            <p><?= $timelineContent; ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="img-wrapper">
                            <img src="<?= $timelineImage; ?>" alt="<?= $timelineTitle; ?>" class="full-size-img full-size-img-contain">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>