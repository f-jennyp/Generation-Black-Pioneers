<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> -->

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">

	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<?php $this->helpers->analytics(); ?>


	<!-- GOOGLE FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header" class="">
			<div class="row">
				<div class="nav-holder">
					<nav>
						<a href="#" id="pull"><strong>MENU</strong></a>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("mission"); ?>><a
									href="<?php echo URL ?>mission#content">MISSION OF GBP</a></li>
							<li <?php $this->helpers->isActiveMenu("events"); ?>><a
									href="<?php echo URL ?>events#content">EVENTS AND TICKETS</a></li>
							<li <?php $this->helpers->isActiveMenu("learn"); ?>><a
									href="<?php echo URL ?>learn#content">LEARN AND ENGAGE</a></li>
							<li <?php $this->helpers->isActiveMenu("store"); ?>><a
									href="<?php echo URL ?>store#content">STORE</a></li>
							<li <?php $this->helpers->isActiveMenu("join"); ?>><a
									href="<?php echo URL ?>join#content">JOIN AND GIVE</a></li>
							<li <?php $this->helpers->isActiveMenu("news"); ?>><a
									href="<?php echo URL ?>news#content">IN THE NEWS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="row">
			<div class="banner-con cssanimation fadeInBottom">

				<div class="logo-holder">
					<img loading="lazy" src="public/images/content/logo.png" alt="Logo">
				</div>

				<div class="foreword">Honoring the past, inspiring the future</div>

				<div class="btn-holder">
					<div class="btn">
						<a href="<?php echo URL ?>learn#content">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->