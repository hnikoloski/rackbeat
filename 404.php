<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * 
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="number">404</div>
		<div class="text"><span>Ooops...</span><br>page not found</div>
		<a href="<?= home_url(); ?>">Back to home</a>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
