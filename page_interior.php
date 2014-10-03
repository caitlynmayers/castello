<?php 
/*
Template Name: Interior Page
*/
get_header( 'interior' ); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php $this_page = new Post(get_the_ID()); ?>
<div id="main" role="main">
	<div class="content-wrap">
		<article class="content">
			<?php the_content(); ?>
		</article>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>