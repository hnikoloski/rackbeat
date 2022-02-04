<?php

/**
 * Template name: Integrations
 */
get_header(); ?>


<?php
get_template_part('template-parts/hero-inner');
get_template_part('template-parts/short-description');
?>

<div class="filterable-apps page-padding-x">
    <div class="wrapper">

        <header>
            <ul class="filter">
                <li><a href="*" class="active">All</a></li>
            </ul>
        </header>
        <div class="filterable-results"></div>
    </div>

</div>


<?php get_footer(); ?>