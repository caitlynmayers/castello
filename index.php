<?php $index = get_index_attributes(); ?>
<?php get_header(); ?>
<div id="main" role="main">
	<div class="container">
		<div class="primary">
			<header>
				<h1><?php echo $index->header_output; ?></h1>
			</header>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article class="post -brief" role="article">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<?php else : ?>
				<article class="post -no-posts" role="article">
					<h1>Sorry</h1>
					<p>No posts have been published just yet.</p>
				</article>
			<?php endif;?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>