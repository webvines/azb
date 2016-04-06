<?php require "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>AZB &amp; PARTNERS</title>

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . "css/style.css"?>">
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . "css/bootstrap.min.css"?>">
	<!-- FONTAWESOME -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . "css/font-awesome.min.css"?>">

	<!-- META TAGS -->
	<meta chartset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header class="container-fluid">
	<!-- LOGO -->
	<div class="row">
		<div class="col-md-12">
			<div class="logo-container">
				<span class="logo-azb"></span>			
			</div>
			<!-- HAMBURGER ICON -->
			<div id="hamburger" class="visible-tab visible-phone hidden-desktop">
				<span><i class="fa fa-bars"></i></span>
			</div>
		</div>		
	</div>
	<!-- NAVIGATION -->
	<div class="row hidden-tab hidden-phone">
		<div class="col-md-12">
			<div class="sub-header-dark">
				<div class="nav-container">
					<ul class="navigation">
						<li><a href="<?php echo BASE_URL?>">about us</a></li>
						<li><a href="#">practise areas</a></li>
						<li><a href="#">industry exposure</a></li>
						<li><a href="<?php echo BASE_URL . "awards" ?>">awards</a></li>
						<li><a href="#">careers</a></li>
						<li><a href="#">contact us</a></li>
					</ul>
				</div>				
			</div>			
		</div>		
	</div>

	<!-- DRAWER -->
	<div style="display: none;">
		<ul class="">
			<li><a href="<?php echo BASE_URL?>">about us</a></li>
			<li><a href="#">practise areas</a></li>
			<li><a href="#">industry exposure</a></li>
			<li><a href="<?php echo BASE_URL . "awards" ?>">awards</a></li>
			<li><a href="#">careers</a></li>
			<li><a href="#">contact us</a></li>
		</ul>
	</div>
</header>