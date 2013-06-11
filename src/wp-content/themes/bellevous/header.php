<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />  -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- <script src="<?php //echo get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>  -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<?php wp_head(); ?>
</head>

<body>
	<div id="container">
		<div id="header">
			<!-- <h1><a href="#"><img src="images/particle.jpg" alt="Return to the homepage" /></a></h1>  -->
			<div id="siteLogo"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/site/logo.png" alt="Return to the homepage" /></a></div>
			<div id="menu">
				<!-- <ul id="categories">
					<?php //wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1'); ?>
				</ul> -->
				
				<ul id="pages">
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div>
		</div>
		<div id="SiteTelephoneNumber">Book now on: 020 3674 8697</div>
		<div class="break"></div>
		
		<div id="content">