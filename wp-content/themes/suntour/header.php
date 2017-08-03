<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo (!is_home())? wp_title('') : bloginfo('title'); ?> | SUNTOUR</title> 
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- custom-theme -->
<link rel="icon" type="image/icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">

<!-- Custom Theme files -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" rel="stylesheet" media="all"><!-- bootstrap css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" /><!-- calender css -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style11.css" /><!-- menu css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.min.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="all"> <!-- css -->
<link href='<?php echo get_template_directory_uri(); ?>/css/simplelightbox.min.css' rel='stylesheet' type='text/css'><!-- Light-box css -->
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
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.3.min.js'></script>

<?php wp_head(); ?>
</head>
<body class="bg">
	<div class="banner-w3layouts" id="home">
		<header>
			<div class="wr-hd">
				<div id="hd">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<a href="<?php  echo home_url(); ?>" class="link-logo"><img alt="Suntour " src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"></a>
								
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
						</div>
					</div>
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
				<div class="w3ls_search">
					<div id="cd-search" class="cd-search">
						<form action="<?php echo home_url(); ?>" method="GET">
							<input  type="search" name="s" placeholder="<?php echo __('Click enter after typing.', 'suntour') ?>">
						</form>
					</div>
				</div>
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
			<h1>
				<a href="<?php echo home_url(); ?>" class="link-logo">
					<span class="logo-left-w3ls">
						<strong><img alt="Suntour " src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"></strong>
					</span>
				</a>
			</h1>
			<div class="clearfix"> </div>

		</section>
		
		<!-- //menu -->
	
		<!-- banner -->
			<!-- <a href="#" class="find-about" data-toggle="modal" data-target="#myModal7">Find out more</a> -->
			<div class="clearfix"> </div>
	</div>
<!-- //banner -->
