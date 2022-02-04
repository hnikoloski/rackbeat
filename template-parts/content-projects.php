<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('page-padding-x'); ?>>
	<div class="intro-bar">
		<div class="text">
			<h1><?php the_title(); ?></h1>
			<?php the_field('short_description'); ?>
		</div>
		<div class="img-wrapper">
			<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="full-size-img full-size-img-contain">
		</div>
		<?php if (have_rows('features')) : ?>
			<ul class="features">
				<?php while (have_rows('features')) : the_row();
				?>
					<li>
						<p><?php the_sub_field('feature_item'); ?></p>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if (get_field('long_description')) : ?>
			<div class="long-description">
				<p>
					<?php the_field('long_description'); ?>
				</p>
			</div>
		<?php endif; ?>
	</div>
	<div class="integration-info">
		<div class="top">
			<h3 class="heading"><?php the_field('integration_title'); ?></h3>
			<?php the_field('integration_description'); ?>
		</div>
		<div class="wrapper">
			<div class="col">
				<h4 class="heading list-title"> <?php the_field('list_title'); ?></h4>
				<?php if (have_rows('integration_list')) : ?>
					<ul class="integration-list">
						<?php while (have_rows('integration_list')) : the_row();
						?>
							<li>
								<p><?php the_sub_field('feature_item'); ?></p>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<p class="read-more"><?php _e('You can read more about', 'starter');
										the_title(); ?>
					<a href="<?php the_field('read_more_link'); ?>" target="_blank" rel="noopener noreferrer"><?php _e('here', 'starter'); ?></a>
				</p>
				<a href="/integrations" class="btn gradient-bg w-fit-content"><?php _e('Back', 'starter'); ?></a>
			</div>
			<div class="col">
				<div class="embed-container">
					<?php the_field('video_embed_link'); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->