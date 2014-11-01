<?php 
$args = array( 'post_type' => 'matter', 'posts_per_page' => 2 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="post">
		<div class="date">
			<?php the_time('M jS'); ?>
		</div>
		<div class="post-link">
			<a href="#"><h4><?php the_title(); ?></h4></a>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endwhile; 
	endif; ?>