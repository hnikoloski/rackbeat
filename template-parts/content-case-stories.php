<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

?>

<header>
	<div class="col">
		<?php if (get_field('single_logo')) : ?>
			<div class="img-wrapper">
				<img src="<?php the_field('single_logo'); ?>" alt="<?php the_field('header_quote'); ?>">
			</div>
		<?php endif; ?>
		<?php if (get_field('header_quote')) : ?>
			<h2 class="heading">
				<?php the_field('header_quote'); ?>
			</h2>
		<?php endif; ?>
	</div>
	<div class="img-wrapper">
		<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	</div>
</header>
<article id="post-<?php the_ID(); ?>" <?php post_class('page-padding-x'); ?>>
	<?php the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->