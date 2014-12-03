<!DOCTYPE html>
<!--[if lt IE 8]><html class="no-js lt-ie10 lt-ie9 lt-ie8  <?php is_mobile(); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9  <?php is_mobile(); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10  <?php is_mobile(); ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js <?php is_mobile(); ?>" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<title><?php wp_title('|', true, 'right'); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<?php require_once( dirname(dirname(dirname(__FILE__))) . '/themes/castello/img/modules/global.svg'); ?>
	<body <?php body_class(); ?>>
		<div id="app">
			<header>
			
				<div class="nav-bar">
				
					<a href="/" class="logo">
					
                        <svg viewBox="0 0 213.4 213.5">
                            <use xlink:href="#logo-svg"></use>
                        </svg>
						
					</a>
					
					<a href="#" id="mobile-menu-trigger">
			
						<span class="icon"></span>
						
						<span class="text">Menu</span>
						
					</a>
					
					<nav>
					
						<ul class="menu">
					
							<?php wp_nav_menu('theme_location=primary&container=&items_wrap=%3$s'); ?>
					
						</ul>
					
					</nav>
					
					<div id="search-trigger">
					
						<div class="search">
					
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
								<g>
									<path fill="#E7E7E7" d="M20,0C9,0,0,9,0,20s9,20,20,20s20-9,20-20S31,0,20,0z M27,28.7l-2.8-2.8c-1.3,0.9-2.9,1.4-4.5,1.4
										c-4.4,0-7.9-3.6-7.9-7.9s3.6-7.9,7.9-7.9s7.9,3.6,7.9,7.9c0,1.6-0.5,3.1-1.3,4.4l2.8,2.8L27,28.7z"/>
									<path fill="#E7E7E7" d="M19.7,13.8c-3.1,0-5.6,2.5-5.6,5.6s2.5,5.6,5.6,5.6c3.1,0,5.6-2.5,5.6-5.6S22.8,13.8,19.7,13.8z"/>
								</g>
							</svg>
						
						</div>
					
					</div>
					
					<div class="form">
						<?php get_search_form(); ?>
					</div>
					
				</div>
				
				<section class="interior reversed">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<h1><?php the_title();?></h1>
					<p><?php the_date();?></p>
					
				<?php endwhile; endif; ?>
				
				</section>
				
			</header>