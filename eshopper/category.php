<?php require_once 'template/public/inc/header.php' ?>

<section id="advertisement">
	<div class="container">
		<img src="images/shop/advertisement.jpg" alt="" />
	</div>
</section>

<section>
	<div class="container">
		<?php
		$sql = mysqli_query($conn, "SELECT * FROM `products` WHERE id_items = {$_GET['id_item']}");
		$nume_row = mysqli_num_rows($sql);
		$nume_page = ceil($nume_row / 4);
		if (isset($_GET['page'])) {
			$current_page = $_GET['page'];
		} else {
			$current_page = 1;
		}
		$offset = ($current_page - 1) * 4;
		?>
		<div class="row">
			<?php require_once 'template/public/inc/left-sidebar.php' ?>
			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<?php
					$qr = mysqli_query($conn, "SELECT * FROM cat_items WHERE id_items = {$_GET['id_item']}");
					$row_cate = mysqli_fetch_assoc($qr);
					?>
					<h2 class="title text-center"><?php echo $row_cate['name_item'] ?></h2>
					<?php
					$qr2 = mysqli_query($conn, "SELECT * FROM products WHERE id_items = {$_GET['id_item']} AND id_cat = {$_GET['id_cat']} LIMIT $offset,4");
					while ($arProducts = mysqli_fetch_assoc($qr2)) {
						$id_Cat = $arProducts['id_cat'];
                        $id_Item = $arProducts['id_items'];
						$nameReplace = utf8ToLatin($arProducts['name_product']);
						$url = $nameReplace.'-'.$arProducts['id_items'].'-'.'sp'.'-'.$arProducts['id_sp'].'.html';
						
					?>

						<div class="col-sm-6">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="admin/upload/<?php echo $arProducts['image'] ?>" alt="" />
										<h2><?php echo number_format($arProducts['price']) . "VND" ?></h2>
										<p><?php echo $arProducts['name_product'] ?></p>
										<a href="cartxuly.php?&id=<?php echo $arProducts['id_sp'] ?>" onclick="divFunction()" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
									</div>

								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="<?php echo $url ?>"><i class="fa fa-plus-square"></i>Chi Tiết Sản Phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>

				<ul class="pagination">

					<?php
					for ($i = 1; $i <= $nume_page; $i++) {
						$active = '';
						if ($i == $current_page) {
						$active = 'active';
						}
					?>
						<li class="<?php echo $active?>"><a href="category.php?id_cat=<?php echo $id_Cat?>&id_item=<?php echo $id_Item ?>&page=<?php echo $i?>"><?php echo $i?></a></li>
					<?php
					}
					?>
				</ul>
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