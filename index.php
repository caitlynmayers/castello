<?php 
get_header( 'life' ); ?>
<div class="category-wrapper">
	<div class="list">
		<div class="items">
			<li><a href="/wp/life">All</a></li>
			<?php wp_list_categories('exclude=112,113,114,1&title_li='); ?>
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
			<?php 
				$prev_link = get_previous_posts_link(__('Newer Posts'));
				$next_link = get_next_posts_link(__('Older Posts'));
				// as suggested in comments
				if ($prev_link || $next_link) {
				  echo '<ul>';
				  if ($prev_link){
				    echo '<li class="newer">'.$prev_link .'</li>';
				  }
				  if ($next_link){
				    echo '<li class="older">'.$next_link .'</li>';
				  }
				} 
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>