<?php 
/*
Template Name: Home Page
*/
get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php $this_page = new Post(get_the_ID()); ?>
<div id="main" role="main">
	<div class="content-wrap">
		<section>
			<?php the_content(); ?>
		</section>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>