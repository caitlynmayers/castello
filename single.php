<?php get_header(); ?>
<div id="main" role="main">
	<div class="container">
		<div class="primary">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<article class="post -single" role="article">
					<h1><?php the_title();?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>