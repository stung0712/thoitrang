<?php require_once 'template/public/inc/header.php' ?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li class="active">Giỏ Hàng</li>
			</ol>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Tên Sản Phẩm</th>
								<th scope="col">Hình ảnh</th>
								<th scope="col">Giá</th>
								<th scope="col">Số Lượng</th>
								<th scope="col">Thành Tiền</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$tolal_price = 0;
							foreach ($cart as $key => $value) {
								$tolal_price += ($value['price'] * $value['qty']);

							?>
								<tr>
									<td><?php echo $key++ ?></td>
									<td><?php echo $value['name'] ?></td>
									<td><img src="admin/upload/<?php echo $value['img'] ?>" alt="" width="100px"></td>
									<td><?php echo number_format($value['price']) . ' VND' ?></td>
									<form action="cartxuly.php" method="GET">
										<input type="hidden" name="action" value="update">
										<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
										<td><input aria-label="quantity" class="input-qty" min="1" name="qty" type="number" value="<?php echo $value['qty'] ?>"></td>
										<td><?php $tolal = ($value['price'] * $value['qty']);
											echo number_format($tolal) . " VND"; ?></td>
										<!-- <td><button type="submit" class="btn btn-success">Cập Nhật</button></td> -->
									</form>
									<td><button onclick="getDel()" class="btn btn-danger"><a href="cartxuly.php?id=<?php echo $value['id'] ?>&action=delete">Xóa</a></button></td>
								</tr>
							<?php
							}
							?>
							<tr>
								<td style="color: red;">Tổng Tiền</td>
								<td colspan="7" class="text-center bg-info"><?php echo number_format($tolal_price) ?> VND</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row-2">
					<div class="col-md-12">
						<a href="checkout.html" class="btn btn-info">Thanh Toán</a>
					</div>
				</div>

				<br>
			</div>
		</div>


</section>
<br>
<!--/#cart_items-->
<?php require_once 'template/public/inc/footer.php' ?>

	
