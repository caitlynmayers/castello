<?php 
get_header( 'search' ); ?>
<?php
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// the query
$the_query = new WP_Query( 'cat=1&paged=' . $paged ); 
?>
<div id="main" role="main">
	<div class="content-wrap">
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php $this_page = new Post(get_the_ID()); ?>
		<article role="article">
		<?php if ( has_post_thumbnail() ) : ?>
			
			<div class="feature-img">
				
				<img src="<?php the_post_thumbnail(); ?>" />
				
			</div>
			
			<?php else : 
				$category = get_the_category(); 
			?>
			
			<div class="feature-img">
			
				<img src="<?php bloginfo('url'); ?>/wp-content/themes/castello/img/<?php echo $category[0]->category_nicename ; ?>.png" alt="<?php echo $category[0]->category_nicename ; ?>" />
			
			</div>
		
		<?php endif; ?>
		
			<div class="meta">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
				<h6>by <?php the_author(); ?>, <?php the_date(); ?></h6>
				<?php
					$content = get_the_content(); 
				?>
				<p><?php echo wp_trim_words( $content, '55'); ?></p>
				<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
			</div>
		</article>
		<?php endwhile; endif; ?>
		<div class="pagination">
			<ul>
				<li class="newer">
				<?php
					// next_posts_link() usage with max_num_pages
					previous_posts_link( 'Newer Posts' );
				?>
				</li>
				<li class="older">
				<?php
					next_posts_link( 'Older Posts', $the_query->max_num_pages );
				?>
				</li>
			</ul>
			<?php 
				// clean up after the query and pagination
				wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>