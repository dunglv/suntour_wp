<!DOCTYPE html>
<html lang="en">
<head>
<title><?php bloginfo('title'); ?> | SUNTOUR</title> 
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spa Sublime Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- custom-theme -->
<link rel="icon" type="image/icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">

<!-- Custom Theme files -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" /><!-- calender css -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style11.css" /><!-- menu css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'><!-- Light-box css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body class="bg">
	<div class="banner-w3layouts" id="home">
		<header>
			<div id="hd">
				<a href="<?php  echo home_url(); ?>"><img alt="Suntour " src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"></a>
				
				<div class="hd-r">
	                 <form action="<?php echo home_url( '/' ); ?>" value="<?php the_search_query(); ?>" method="get" enctype="multipart/form-data" onsubmit="return checkformsearch(this);">
					
					<p class="search">
						<input class="txf" placeholder="<?php echo __('Search key...', 'suntour') ?>" name="s" id="key">
						<input class="btn" value="" type="submit">
					</p>
						<?php __(wp_nav_menu( array( 
							'theme_location' => 'language-menu',
							'container_class' => 'language-menu lang',
							'menu_id' => 'nav_lang'
						) ), 'suntour'); ?> 
						<!-- <a href="http://kinhdo.vn/?lang=en" class="lang-en">English</a> -->
					<!-- <p class="links">
					    <a href="http://vn.mondelezinternational.com/vi-vn" target="_blank">Mondelez Kinh Đô</a>
						<a href="/Vacancies.aspx">Nghề nghiệp</a>
						<a href="/partner.html">Đối tác</a>
						
					</p> -->
	                  </form>
				</div>
			</div>
	    	<nav class="nav">
	    		<?php wp_nav_menu( array( 
					'theme_location' => 'header-menu',
					'container_class' => 'top-menu',
					'menu_id' => 'nav'
				) ); ?>
	        	
	        </nav>
		</header>

		<div class="overlay overlay-simplegenie">
			<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
			<nav id="canvas_menu">
				<?php wp_nav_menu( array( 
					'theme_location' => 'header-menu',
					'container_class' => 'top-menu',
				) ); ?>
			</nav>
		</div>
		<section class="header-w3ls"> 
			<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="contact-bnr-w3-agile">
				<div class="bottons-agileits-w3layouts cv-lang">
					<?php __(wp_nav_menu( array( 
							'theme_location' => 'language-menu',
							'container_class' => 'language-menu lang',
							'menu_id' => 'nav_lang'
						) ), 'suntour'); ?> 
				</div>
			</div>
			<h1><a href="<?php echo home_url(); ?>"><span class="logo-left-w3ls"><img alt="Suntour " src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"></a></h1>
			<div class="clearfix"> </div>
			<div class="w3ls_search">
				<div class="cd-main-header">
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul> <!-- cd-header-buttons -->
				</div>
				<div id="cd-search" class="cd-search">
					<form action="<?php echo home_url(); ?>" method="GET">
						<input  type="search" name="s" placeholder="Click enter after typing.">
					</form>
				</div>
			</div>
		</section>
		
		<!-- //menu -->
	
		<!-- banner -->
			<div class="callbacks_container">
				<!-- [smartslider3 slider=2] -->
				<!-- <ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
								<div class="agileits-banner-info">
									<h3><span>W</span>ellness <span>A</span>nd <span>S</span>pa</h3>
									<p>Dedicated to inspiring Life in Balance.</p>
								</div>	
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
								<div class="agileits-banner-info">
									<h3><span>S</span>oft & <span>P</span>ure</h3>
									<p>Give yourself a moment of wellness</p>
								</div>	
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
								<div class="agileits-banner-info">
									<h3><span>M</span>ade <span>F</span>or <span>y</span>ou</h3>
									<p>Famous Treatment For Clear Skin.</p>
								</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
								<div class="agileits-banner-info">
									<h3><span>F</span>eel <span>F</span>antastic</h3>
									<p>Day Spa Treatments and Services</p>
								</div>
						</div>
					</li>
				</ul> -->
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class=""></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
							<div class="container">
								<div class="carousel-caption">
									<h1>Example headline.</h1>
									<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item active">
							<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
							<div class="container">
								<div class="carousel-caption">
									<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
			<!-- <a href="#" class="find-about" data-toggle="modal" data-target="#myModal7">Find out more</a> -->
			<div class="clearfix"> </div>
	</div>
<!-- //banner -->
