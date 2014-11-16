<p><?php the_field('text_area'); ?></p>
				
<?php

	$lecture = get_field('lecture_post_link');
	
	if( $lecture ): 
	
		// override $post
		$post = $lecture;
		setup_postdata( $post ); 
	
?>

<div class="post">
	<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
	<div class="excerpt">
		<?php the_excerpt(); ?>
	</div>
</div>

<?php endif; ?>

<div class="view-all">
	<a href="/wp/matter">View More Lectures</a>
</div>