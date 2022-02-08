<?php

/**
 * Template name: Helpdesk
 */
get_header(); ?>



<div class="pos-r hero hero-inner">
    <h1 class="w-100"><?php the_title(); ?></h1>
    <p class="w-100"><?php the_field('hero_subtitle'); ?></p>
    <form action="/" method="get" class="w-100">
        <i class="fas fa-search"></i>
        <input type="search" placeholder="Type Here" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="hidden" name="post_type" value="support_articles">
        <button>Search</button>
    </form>
</div>
<main class="page-padding-x">

    <div class="faq-wrapper">
        <h2 class="heading fw-bold"><?php _e('Frequently asked questions', 'starter'); ?></h2>
        <div class="container">
            <?php if (have_rows('faq_list')) : ?>

                <?php while (have_rows('faq_list')) : the_row();
                    $question = get_sub_field('faq_title');
                    $answer = get_sub_field('faq_answer');
                ?>
                    <div class="col">
                        <h6><?= $question; ?></h6>
                        <p><?= $answer; ?></p>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="main-wrapper">
        <?php

        $terms = get_terms('support_category');
        if (!empty($terms) && !is_wp_error($terms)) {
            echo "<ul>";
            foreach ($terms as $term) {
                echo "<li>" . $term->name . "</li>";
                echo "<pre>";
                print_r($term);
                exit();
            }
            echo "</ul>";
        }

        ?>
        <ul id="support-accordion">
            <!-- Api Call -->
        </ul>
    </div>
</main>

<?php get_footer(); ?>