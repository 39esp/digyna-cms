<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->
<head>
	<title>digina-cms</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/mypanel/ico/favicon.ico">
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url('mypanel');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="dsofter">
		<!-- CSS -->
	<link href="<?php echo base_url('assets/mypanel/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/mypanel/plugins/ionicons-2.0.1/css/ionicons.min.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/mypanel/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/mypanel/css/main.css');?>" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	
		<!--[if lte IE 8]>
		<link rel="stylesheet" media="print" href="dist/print.css" type="text/css" />
		<![endif]-->
		<!-- start mincss template tags -->
		
		<!-- end mincss template tags -->
		<!-- start minjs template tags -->
		<script type="text/javascript" src="assets/mypanel/plugins/jquery/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="assets/mypanel/js/app.js"></script>
		<!-- end minjs template tags 
		<script type="text/javascript" src="assets/mypanel/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->

	<?php $this->load->view('mypanel/includes/header_js'); ?>
		
</head>

<body class="fixed-top-active dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP NAV BAR -->
		<nav class="top-bar navbar-fixed-top" role="navigation">
			<div class="logo-area">
				<a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left"><i class="icon ion-arrow-swap"></i></a>
				<a class="btn btn-link btn-off-canvas pull-left"><i class="fa fa-bars"></i></a>
				<div class="logo pull-left">
					<a href="<?php echo base_url('mypanel');?>">
						<img src="<?php echo base_url('assets/mypanel/img/digyna.png');?>" alt="Digyna Logo">
					</a>
				</div>

			</div>
			<div class="top-bar-right pull-right">
				<div class="action-group logged-user">
					<div class="btn-group">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user-circle" ></i>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="<?php echo base_url('mypanel/profile');?>">
									<i class="icon ion-ios-gear"></i>
									<span class="text"><?php echo $this->lang->line('common_profile'); ?></span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('mypanel/home/logout');?>">
									<i class="icon ion-power"></i>
									<span class="text"><?php echo $this->lang->line('common_logout'); ?></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- END TOP NAV BAR -->
	<?php $this->load->view('mypanel/includes/menu'); ?>