<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <div class="section cookies-page">
    	    <div class="row">
    			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
    			    <h1><?php the_title() ?></h1>
    			    <p><?php the_content() ?></p>
    		    </div>
    		</div>
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
