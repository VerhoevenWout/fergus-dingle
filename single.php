<?php get_header(); ?>
	<div class="single-page">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12 col-md-offset-0">
					
					<div class="iframe-container iframe-container-16x9">
						<iframe src="https://player.vimeo.com/video/<?php the_field('work_id') ?>"frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<h3><?php the_field('work_title') ?></h3>
					<p><?php the_field('work_subtitle') ?> - <?php the_field('work_function') ?></p>
					<?php the_content() ?>

				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
