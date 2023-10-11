<?php require_once 'db/dbConnect.php';
require_once 'db/utf8tolatintutil.php';
session_start();
if (isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
} else {
	$cart = [];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<base href="http://localhost/eshopper/">
	<title>Home | EvilStore</title>
	<link href="template/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="template/public/css/font-awesome.min.css" rel="stylesheet">
	<link href="template/public/css/prettyPhoto.css" rel="stylesheet">
	<link href="template/public/css/price-range.css" rel="stylesheet">
	<link href="template/public/css/animate.css" rel="stylesheet">
	<link href="template/public/css/main.css" rel="stylesheet">
	<link href="template/public/css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84.091998989</a></li>

								<li><a href="#"><i class="fa fa-envelope"></i> EviStore@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->
		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-3 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="https://www.lexsynergy.com/uploads/assets/store_lexsynergy.jpg" width="150px" alt="" /></a>
						</div>
					</div>
					<div class="col-md-9 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href=""><i class="fa fa-user"></i> Tài Khoản</a></li> -->
								<?php
								if (isset($_SESSION['user'])) {
									$name = $_SESSION['user']['fname'];
									$id = $_SESSION['user']['id_customer'];

								?>
									<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thành Toán</a></li>
									<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ Hàng (<?php echo count($cart) ?>)</a></li>
									<li><a href="login.html"><i class="fa fa-user "> <?php echo $name; ?></i></a></li>
									<li><a style="color: red" href="logout.php">Đăng Xuất</a></li>
									<li><a style="color: green" href="changePass.php?id=<?php echo $id ?>">Đổi Mật Khẩu</a></li>
								<?php
								} else {

								?>
									<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thành Toán</a></li>
									<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ Hàng (<?php echo count($cart) ?>)</a></li>
									<li><a href="login.html"><i class="fa fa-user "></i>Đăng Nhập </a></li>

								<?php
								}
								?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->
		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
								<li><a href="index.html" class="<?php if ($page == 'HOME') {
																	echo 'active';
																} ?>">Trang Chủ</a></li>
								<li><a href="shop.html" class="<?php if ($page == 'PRODUCTS') {
																	echo 'active';
																} ?>">Sản Phẩm</a></li>
								<li><a href="blog.html" class="<?php if ($page == 'BLOG') {
																	echo 'active';
																} ?>">Trang Tin Tức</a></li>
								<li><a href="contact.html" class="<?php if ($page == 'CONTACT') {
																		echo 'active';
																	} ?>">Liên Hệ</a></li>
								<li><a href="orders.html" class="<?php if ($page == 'ORDERS') {
																		echo 'active';
																	} ?>">Lịch Sử Mua Hàng</a></li>
							</ul>
						</div>
					</div>
					<?php
					if (isset($page) && $page == 'PRODUCTS') {
					?>
						<div class="col-sm-3">
							<form action="" method="GET">
								<div class="form-group">
									<input type="text" name="key" placeholder="Nhập Tên Sản Phẩm" class="form-control">
								</div>
							</form>
						</div>
					<?php
					} elseif (isset($page) && $page == 'HOME') {
					?>
						<div class="col-sm-3">
							<form action="" method="GET">
								<div class="form-group">
									<input type="text" name="key" placeholder="Nhập Tên Sản Phẩm" class="form-control">
								</div>
							</form>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->