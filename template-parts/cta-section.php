<section id="cta-section" class="page-padding-x">
	<div class="wrapper">
		<div class="img-wrapper">
			<img src="<?php the_field('cta_image'); ?>" alt="Cta Image" class="full-size-img full-size-img-cover">
		</div>
		<div class="content">
			<?php the_field('cta_content'); ?>
			<a href="<?php the_field('cta_button_link'); ?>" class="btn gradient-bg w-fit-content"><?php the_field('cta_button_text'); ?></a>
		</div>
	</div>
</section>