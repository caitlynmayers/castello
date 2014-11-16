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
				<div class="overlay matter">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
				<?php get_template_part( 'matter_home' ); ?>
			</div>
			<div class="feed">
				<div class="overlay lectures">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
				<?php get_template_part( 'lecture_home' ); ?>
			</div>
			<div class="feed">
				<div class="overlay life">
					<img src="<?php bloginfo('template_directory'); ?>/img/water-bg.png" />
				</div>
				<?php get_template_part( 'life_home' ); ?>
				<div class="view-all">
					<a href="#">View All Life</a>
				</div>
			</div>
		</section>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>