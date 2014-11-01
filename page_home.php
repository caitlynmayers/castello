<?php 
/*
Template Name: Home Page
*/
get_header( 'home' ); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php $this_page = new Post(get_the_ID()); ?>
<div id="main" role="main">
	<div class="content-wrap">
		<section>
			<div class="feed">
				<div class="overlay speaking">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
					<h3>Alzheimer's Association International Conference</h3>
					<h4>July 14, 2014 | Copenhagen, Denmark</h4>
			</div>
			<div class="feed">
				<div class="overlay matter">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
			</div>
			<div class="feed">
				<div class="overlay life">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
			</div>
		</section>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>