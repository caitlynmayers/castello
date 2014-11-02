<?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 2 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="post">
		<div class="date">
			<div class="month">
				<?php the_time('M'); ?>
			</div>
			<div class="day">
				<?php the_time('d'); ?>
			</div>
		</div>
		<div class="post-link">
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
		</div>
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endwhile; 
	endif; ?>