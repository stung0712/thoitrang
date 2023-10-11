<?php require_once 'template/public/inc/header.php';
$user = (isset($_SESSION['user']) ? $_SESSION['user'] : []);
?>
<section id="cart_items">
	<?php if (isset($_SESSION['user'])) { ?>

		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="index.php">Trang Chủ</a></li>
					<li class="active">Thanh Toán</li>
				</ol>
			</div>
			<?php
			if (isset($_POST['name'])) {
				$idKH = $user['id_customer'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
				$payment = $_POST['payment'];
				$qr = "INSERT INTO `order`(id_customer,address,phone,payment) VALUES ('$idKH','$address','$phone','$payment')";				
				$result = mysqli_query($conn, $qr);
				
				if ($result) {
					$id_order = mysqli_insert_id($conn);
					foreach ($cart as $value) {
						$qr2 = "INSERT INTO `order_detail`(id_order,id_sp, qty, price) VALUES ('$id_order','$value[id]','$value[qty]',$value[price])";
						$result = mysqli_query($conn, $qr2);
					}
					echo '<script>window.location="index.php";</script>';
					unset($_SESSION['cart']);
				}
			}
			?>
			<form action="" method="POST">
				<div class="shopper-informations">
					<div class="row">
						<div class="col-sm-4">
							<div class="shopper-info">
								<p>Thông Tin Khách Hàng</p>
								<form>
									<div class="form-group">
										<input type="text" placeholder="Tên Khách Hàng" name="name" class="form-control" value="<?php echo $user['fname'] ?>">
									</div>
									<div class="form-group">
										<input type="text" placeholder="Email khách hàng" name="email" class="form-control" value="<?php echo $user['email'] ?>">
									</div>
									<div class="form-group">
										<input type="text" placeholder="Địa chỉ" name="address" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" placeholder="Số điện thoai" name="phone" class="form-control">
									</div>
									<div class="form-group">
									   <select name="payment" id="">
									      <option value="1">Thanh Toán Trực Tiếp</option>
										  <option value="2">Thanh Toán Qua Ví Paypal</option>
									   </select>
									</div>
								</form>
                            
								<div id="paypal-payment-button">

								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="table-responsive cart_info">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Tên Sản Phẩm</th>
											<th scope="col">Giá</th>
											<th scope="col">Số Lượng</th>
											<th scope="col">Thành Tiền</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 0;
										$tolal_price = 0;
										foreach ($cart as $key => $value) {
											$tolal_price += ($value['price'] * $value['qty']);
											$i++;
										?>
											<tr>
												<td><?php echo $i ?></td>
												<td><?php echo $value['name'] ?></td>
												<td><?php echo number_format($value['price']) . ' VND' ?></td>
												<td><?php echo $value['qty'] ?></td>
												<td><?php $tolal = ($value['price'] * $value['qty']);
													echo number_format($tolal) . " VND"; ?></td>
											</tr>
										<?php
										}
										?>
										<tr>
											<td style="color: red;">Tổng Tiền</td>
											<?php
											if (isset($_POST['discount'])) {
										          $_SESSION['discount'] = $_POST['discount'];
												 
											?>
												<td colspan="7" class="text-center bg-info"><?php echo number_format($tolal_price*0.7) ?> VND</td>
											<?php } else {

											?>
												<td colspan="7" class="text-center bg-info"><?php echo number_format($tolal_price) ?> VND</td>
											<?php
											}
											?>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-4">
									<?php
									if (isset($_SESSION['cart'])) {
									?>
										<form action="" method="POST">
											<div class="form-group">
												<label for="">Mã giảm giá</label>
												<input type="text" name="discount" class="form-control">
											</div>
										</form>
									<?php
									}
									?>
								</div>
							</div>					
							<button class="btn btn-info">Thanh Toán</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	<?php
	} else {
	?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
			<strong>Vui lòng Hãy Đăng nhập để mua hàng</strong> <a href="login.php?action=checkout">Đăng Nhập</a>

		</div>
	<?php
	}
	?>
</section>
<br>
<!--/#cart_items-->
<?php require_once 'template/public/inc/footer.php' ?>

<script src="https://www.paypal.com/sdk/js?client-id=AQRrtoQ42LODRDjgK3hmXId--PrY1g4lK7nNXmY02BWK9tm68vvfBtCCF7rAH7bUFjavbPIsiTImC5V6&disable-funding=credit,card"></script>
<script src="template/public/js/payment.js"></script>