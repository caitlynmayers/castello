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
	<body <?php body_class(); ?>>
		<div id="app">
			<header>
			
				<div class="nav-bar">
				
					<a href="/" class="logo">
						
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
						
					</a>
					
					<nav>
					
						<ul class="menu">
					
							<?php wp_nav_menu('theme_location=primary&container=&items_wrap=%3$s'); ?>
					
						</ul>
					
					</nav>
					
				</div>
				
			</header>