<?php 
get_header( 'life' ); ?>
<div class="category-wrapper">
	<div class="list">
		<div class="items">
			<li><a href="/wp/life">All</a></li>
			<?php wp_list_categories('exclude=1&title_li='); ?>
		</div>
	</div>
</div>
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
			<div class="feature-img" style="background-image: url(<?php echo $post_thumb[0]; ?>);"></div>
			<div class="meta">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
				<h6>by <?php the_author(); ?>, <?php the_date(); ?></h6>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</div>
		</article>
		<?php endwhile; endif; ?>
		<div class="pagination">
			<?php
				// next_posts_link() usage with max_num_pages
				previous_posts_link( 'Newer Entries' );
				next_posts_link( 'Older Entries', $the_query->max_num_pages );
			?>
			
			<?php 
				// clean up after the query and pagination
				wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>