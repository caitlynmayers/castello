<?php 
/*
Template Name: Home Page
*/
get_header(); ?>
<div id="main" role="main">
	<div class="container">
		<div class="primary -left">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="page -default">
					<h1><?php the_title();?></h1>
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>