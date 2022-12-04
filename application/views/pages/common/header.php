<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>xxi store</title>	
    <link href="<?php echo base_url('frontend/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('frontend/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('frontend/css/animate.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend/css/main.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('frontend/css/responsive.css') ?>" rel="stylesheet">    
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+84 328348005</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> xxistore@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php 
									if($this->session->userdata('LoggedInCustomer')){
								?>
								<li><a href="#"><i class="fa fa-user"></i></a><?php echo $this->session->userdata('LoggedInCustomer')['cusname'] ?></li>
								<li><a href="<?php echo base_url('cart') ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php echo base_url('log-out') ?>"><i class="fa fa-crosshairs"></i> Log out</a></li>
								<?php 
									} else {
								?>
								<li><a href="<?php echo base_url('login') ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php echo base_url('login')?>"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="<?php echo base_url('register') ?>"><i class="fa fa-crosshairs"></i> Register</a></li>
								<?php 
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url('/') ?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Brand<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<?php 
											foreach($brand as $key => $valuebrand){
										?>
                                        <li><a href="<?php echo base_url('brand/'.$valuebrand->brandid) ?>"><?php echo $valuebrand->brandname ?></a></li>
										<?php 
											}
										?>
                                    </ul>
                                </li> 
 
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="search_box pull-right">
							<form method="GET" action="<?php echo base_url('/searchproduct')?>">
							<input type="text" name="keyword" value="" placeholder="tìm kiếm sản phẩm" placeholder="Search"/>
							<input type="submit"  value="tìm kiếm" class="btn btn-success">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	