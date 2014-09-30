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
						
						<div>
	                        <svg viewBox="0 0 213.4 213.5">
	                            <use xlink:href="#logo-svg"></use>
	                        </svg>
	                    </div>
						
						<!--
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="0 0 213.4 213.5" enable-background="new 0 0 213.4 213.5" xml:space="preserve">
							<g>
								<circle fill="#E6E7E8" cx="107" cy="107" r="106.8"/>
								<polygon fill="#880D53" points="43,111.8 28.5,111.8 58,174.5 72.4,174.5 	"/>
								<polygon fill="#A70064" points="72.5,174.5 58.1,174.5 99.9,84.9 107.1,100.4 	"/>
								<polygon fill="#0D2240" points="171.1,100.9 185.6,100.9 156.1,38.2 141.7,38.2 	"/>
								<polygon fill="#003764" points="141.6,38.2 156,38.2 114.2,127.8 107,112.4 	"/>
								<polygon fill="#004A97" points="72.4,38.2 114.2,127.8 107,143.3 58,38.2 	"/>
								<polygon fill="#CC007B" points="141.7,174.5 99.9,84.9 107.1,69.4 156.1,174.5 	"/>
								<polygon fill="#005DA6" points="43,100.9 28.5,100.9 58,38.2 72.4,38.2 	"/>
								<polygon fill="#E70095" points="171.1,111.8 185.6,111.8 156.1,174.5 141.7,174.5 	"/>
							</g>
						</svg>
-->
						
					</a>
					
					<nav>
					
						<ul class="menu">
					
							<?php wp_nav_menu('theme_location=primary&container=&items_wrap=%3$s'); ?>
					
						</ul>
					
					</nav>
					
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
				
				<section class="masthead">
				
					<h1>MD/P<span>h</span>D student, Neuroscientist, Husband, Lover of Technology (carbon & silicon-based varieties), Avid Learner, Passionate Advocate.</h1>
				
				</section>
				
				<img class="home-pic" src="<?php bloginfo('template_directory'); ?>/img/castello.png" />
				
			</header>