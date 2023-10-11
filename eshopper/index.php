<?php $page = 'HOME'; ?>
<?php require_once 'template/public/inc/header.php' ?>
<section id="slider">
	<!--slider-->

	<div class="container">
		<div class="row">
			<?php
			if (isset($_GET['priceS'])) {
				$key1 = $_GET['priceS'];
				echo $key1;
			} else {
				$key1 = '';
			}

			?>
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">

						<div class="item active">
							<div class="col-sm-6">
								<h1><span>E</span>vil-Store</h1>
								<h2>Giao Hàng Miễn Phí Tận Nhà</h2>
								<p>Shop Thời Trang Evil-Store với phương châm "Đồng hành cùng phong cách thời trang của bạn" sẽ là nơi mua sắm an toàn và chất lượng</p>
								<button type="button" class="btn btn-default get"><a href="shop.php">Mua Ngay</a></button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>100% Responsive Design</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>Free Ecommerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>

					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->
<section>
	<?php
	$sql = mysqli_query($conn, "SELECT * FROM `products`");
	$nume_row = mysqli_num_rows($sql);
	$nume_page = ceil($nume_row / 8);
	if (isset($_GET['page'])) {
		$current_page = $_GET['page'];
	} else {
		$current_page = 1;
	}
	$offset = ($current_page - 1) * 8;
	?>
	<div class="container">
		<div class="row">
			<?php require_once 'template/public/inc/left-sidebar.php' ?>
			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Sản Phẩm Bán Chạy</h2>
					<?php
					if (isset($_GET['key'])) {
						$key = $_GET['key'];
					} else {
						$key = '';
					}

					$qr = mysqli_query($conn, "SELECT * FROM products WHERE hot_product = 1 AND name_product LIKE '%$key%' LIMIT $offset,8");
					while ($row_pro = mysqli_fetch_assoc($qr)) {
						$replaceName = utf8ToLatin($row_pro['name_product']);
						$url = $replaceName . '-' . $row_pro['id_items'] . '-' . 'sp' . '-' . $row_pro['id_sp'] . '.html';
					?>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="admin/upload/<?php echo $row_pro['image'] ?>" alt="" />
										<h2><?php echo number_format($row_pro['price']) . ' VND' ?></h2>
										<p><?php echo $row_pro['name_product'] ?></p>
										<a  href="cartxuly.php?id=<?php echo $row_pro['id_sp'] ?>"  onClick="divFunction()"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
									</div>
								</div>
								
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="<?php echo $url  ?>"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
				<!--features_items-->
			</div>
		</div>
		<br>
		<br>
		<div class="col-sm-6" style="text-align: right;">
			<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
				<nav aria-label="...">
					<ul class="pagination">
						<?php
						if ($current_page > 1) {
							$previous = $current_page - 1;

						?>
							<li class="page-item">
								<a class="page-link" href="index.php">Trang Trước</a>
							</li>
						<?php } ?>
						<?php
						$part = 1;
						$begin = $current_page - $part;
						if ($begin < 1) {
							$begin = 1;
						}
						$end = $current_page + $part;
						if ($end > $nume_page) {
							$end = $nume_page;
						}
						for ($i = $begin; $i <= $end; $i++) {
							$active = '';
							if ($i == $current_page) {
								$active = 'active';
							}
						?>
							<li class="page-item <?php echo $active ?>">
								<a class="page-link" href="trangchu-page-<?php echo $i ?>"><?php echo $i ?></a>
							</li>
						<?php
						}
						?>
						<?php
						if ($current_page < $nume_page) {
							$next = $current_page + 1;
						?>
							<li class="page-item">
								<a class="page-link" href="index.php?page=<?php echo $next ?>">Trang Tiếp</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>

</section>
<script type="text/javascript">
    function divFunction() {
          alert('Thêm giỏ hàng thành công !');
	}  
</script>
<?php require_once 'template/public/inc/footer.php' ?>