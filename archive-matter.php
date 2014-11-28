<?php 
get_header( 'matter' ); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php $this_page = new Post(get_the_ID()); ?>
<div id="main" role="main">
	<div class="content-wrap">
		<article role="article">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
			<?php the_excerpt(); ?>
		</article>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
