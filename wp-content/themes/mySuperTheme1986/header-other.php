<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<!-- basic -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
    <title><?php wp_title() ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">
	<?php wp_head() ?>

	<?php /*<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="<?php bloginfo('template_url') ?>/assets/images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->*/
	?>
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
	<div class="loader"><img src="<?php bloginfo('template_url') ?>/assets/images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
	<!-- header inner -->
	<div class="header-top">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
						<div class="full">
							<div class="center-desk">
								<div class="logo">
									<?php the_custom_logo() ?>
									<?php /*
									<a href="index.html"><img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" alt="#" /></a>
								*/?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
						<div class="menu-area">
							<div class="limit-box">
								<nav class="main-menu">
									<?php wp_nav_menu() ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header inner -->
		<!-- end header -->
	</div>
</header>