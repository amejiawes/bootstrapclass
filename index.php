<?php get_header(); ?>



<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<div class='container'>
		
		<div class='col-sm-12 col-md-3'>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class='col-sm-12 col-md-9'>
			<p><?php the_content(); ?></p>
		</div>
				
	</div>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>