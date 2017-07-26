<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) {
			echo ' :';
		} ?><?php bloginfo( 'name' ); ?></title>
	
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- Owl Carousel Assets -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
	<!-- Pixeden Icon Font -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/Pe-icon-7-stroke.css">
	
	<!-- Font Awesome -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- PrettyPhoto -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	<!-- Style -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet'
	      type='text/css'>
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic'
	      rel='stylesheet' type='text/css'>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

</head>
<body>

<!-- wrapper -->
<div class="wrapper">
	
	<!-- PRELOADER -->
	<div class="spn_hol">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	
	<!-- END PRELOADER -->
	
	<!-- header -->
	
		
		<section class="header parallax home-parallax page" id="HOME">
			<h2></h2>
			<div class="section_overlay">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/img/COWCHECK-logo.png" alt="Logo">
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<!-- NAV -->
								<?php html5blank_nav() ?>
								
						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container- -->
				</nav>
				
				<div class="container home-container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo text-center">
								<!-- LOGO -->
								<img width="334" height="52" src="<?php echo get_template_directory_uri(); ?>/img/COWCHECK-logo.png" alt="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="home_text">
								<!-- TITLE AND DESC -->
								<h1>Register of animals</h1>
								<p>Easy access. For everyone.</p>
								
								<div class="download-btn">
									<!-- BUTTON -->
									<a class="btn home-btn wow fadeInLeft" href="#VIDEO">Watch how it works</a>
									<a class="tuor btn wow fadeInRight" href="#ABOUT">Take a tour <i class="fa fa-angle-down"></i></a>
								</div>
							</div>
						</div>
						<!--<div class="col-md-3 col-md-offset-1 col-sm-4">
							<div class="home-iphone">
								<img src="<?php echo get_template_directory_uri(); ?>/img/iPhone_Home.png" alt="">
							</div>
						</div>-->
					</div>
				</div>
			</div>
		</section>
		
		
		
		<!-- logo -->
<!--		<div class="logo">-->
<!--			<a href="--><?php //echo home_url(); ?><!--">-->
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
<!--				<img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.svg" alt="Logo" class="logo-img">-->
<!--			</a>-->
<!--		</div>-->
		<!-- /logo -->
		
		<!-- nav -->
<!--		<nav class="nav" role="navigation">-->
<!--			--><?php //html5blank_nav(); ?>
<!--		</nav>-->
		<!-- /nav -->
	
	<!-- /header -->
