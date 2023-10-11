<?php require_once 'template/public/inc/header.php' ?>
<section>
	<div class="container">
		<div class="row">
			<?php require_once 'template/public/inc/left-sidebar.php' ?>
			<div class="col-sm-9 padding-right">
				<?php
				if (isset($_GET['id_sp'])) {
					$id_sp = $_GET['id_sp'];
				}
				$qr = mysqli_query($conn, "SELECT * FROM products WHERE id_sp = $id_sp");
				while ($arSP = mysqli_fetch_assoc($qr)) {

				?>
					<form action="cartxuly.php" method="GET">
						<div class="product-details">
							<!--product-details-->
							<div class="col-sm-5">
								<div class="view-product">
									<a href="admin/upload/<?php echo $arSP['image'] ?>"><img src="admin/upload/<?php echo $arSP['image'] ?>" alt="" /></a>
								</div>
								<div id="similar-product" class="carousel slide" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<?php
											$qr3 = mysqli_query($conn, "SELECT * FROM img_products WHERE id_sp = $id_sp ORDER BY id DESC LIMIT 3");
											while ($row_img = mysqli_fetch_assoc($qr3)) {
											?>
												<a href=""><img src="admin/upload/<?php echo $row_img['img'] ?>" alt="" width="90px"></a>
											<?php
											}
											?>
										</div>
									</div>
									<!-- Controls -->
									<a class="left item-control" href="#similar-product" data-slide="prev">
										<i class="fa fa-angle-left"></i>
									</a>
									<a class="right item-control" href="#similar-product" data-slide="next">
										<i class="fa fa-angle-right"></i>
									</a>
								</div>

							</div>
							<div class="col-sm-7">
								<div class="product-information">
									<!--/product-information-->
									<img src="images/product-details/new.jpg" class="newarrival" alt="" />
									<h2><?php echo $arSP['name_product'] ?></h2>

									<img src="images/product-details/rating.png" alt="" />
									<span>
										<span><?php echo number_format($arSP['price']) ?></span>

										<button type="submit" name="submit" class="btn btn-fefault cart">
											Mua
										</button>

									</span>
									<h4>Số Lượng</h4>
									<input aria-label="quantity" class="input-qty" max="100" min="1" name="qty" type="number" value="1">
									<input type="hidden" name="id" value="<?php echo $arSP['id_sp'] ?>">
									<br>
									<br>
									<p>Size <select name="" id="">
											<option value="">M</option>
											<option value="">L</option>
											<option value="">XL</option>
											<option value="">XLL</option>
										</select></p>
									<br>
									<h4>Thông Tin Sản Phẩm</h4>
									<p><b><?php echo $arSP['detail'] ?></b></p>
								</div>
								<!--/product-information-->
							</div>
						</div>

					</form>

				<?php
				}
				?>
				<?php

				if (isset($_SESSION['user'])) {
				?>
					<div class="container">
						<div class="col-md-6">
							<h2>Đánh Giá Sản Phẩm</h2>
							<form action="javascript:void(0)" method="POST" id="form_cmt">
								<input type="hidden" id="id_sp" value="<?php echo $id_sp ?>">
								<div class="form-group">
									<textarea name="comment" id="comment" cols="30" rows="5" class="form-control" required placeholder="Bình Luận"></textarea>
								</div>

								<input type="submit" id="submit_data" class="btn btn-info" name="submit" value="Gửi">
							</form>
							<h3>Bình Luận Mới Nhất</h3>
							<div id="load_data">

							</div>
						</div>
					</div>
				<?php
				} else {
				?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
						<strong>Vui lòng Hãy Đăng nhập trước để Bình Luận</strong> <a href="login.html">Đăng Nhập</a>
					</div>
				<?php } ?>
				<!--/product-details-->
				<script type="text/javascript">
					$(document).ready(function() {
						//load_data
						function fetch_data() {
							$.ajax({
								url: "ajax-cmt.php",
								method: "POST",
								success: function(data) {
									$('#load_data').html(data);
									fetch_data();
								}
							});
						}
						fetch_data();

					
						$('#submit_data').on('click', function() {
							var id_sp = $('#id_sp').val();
							var cmt = $('#comment').val();
							$.ajax({
								url: "ajax-cmt.php",
								method: "POST",
								data: {
									id_sp: id_sp,
									cmt: cmt
								},
								success: function(data) {
									alert('da them cmt');
									$('#form_cmt')[0].reset();
									fetch_data();
								}
							});
						});
					});
				
				</script>
				<!--/category-tab-->
				<div class="recommended_items">
					<!--recommended_items-->
					<h2 class="title text-center">3 Sản Phẩm Liên Quan</h2>

					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<?php
								$sql = mysqli_query($conn, "SELECT * FROM products WHERE id_items = {$_GET['cat_item']} LIMIT 3");
								while ($row_lq = mysqli_fetch_assoc($sql)) {
									$nameReplace = 	utf8ToLatin($row_lq['name_product']);
									$url = $nameReplace . '-' . $row_lq['id_items'] . '-' . 'sp' . '-' . $row_lq['id_sp'] . '.html';
								?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/upload/<?php echo $row_lq['image'] ?>" alt="" />
													<h2><?php echo number_format($row_lq['price']) ?></h2>
													<p><?php echo $row_lq['name_product'] ?></p>
													<a href="cartxuly.php?id=<?php echo $row_lq['id_sp'] ?>"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</button></a>
													<div class="choose">
														<ul class="nav nav-pills nav-justified">
															<li><a href="<?php echo $url ?>">Xem Chi Tiêt</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>

						</div>

					</div>
				</div>
				<!--/recommended_items-->
			</div>
		</div>
	</div>
</section>
<?php require_once 'template/public/inc/footer.php' ?>