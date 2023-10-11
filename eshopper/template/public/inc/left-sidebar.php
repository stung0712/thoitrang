<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Danh Mục Sản Phẩm</h2>
		<div class="panel-group category-products" id="accordian">
			<!--category-productsr-->
			<?php
			$qr = mysqli_query($conn, "SELECT * FROM cat");
			while ($row_cat = mysqli_fetch_assoc($qr)) {
				$id = $row_cat['id_cat'];

			?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $row_cat['id_cat'] ?>">
								<span class="badge pull-right"><i class="fa fa-plus"></i></span>
								<?php echo $row_cat['name_cat'] ?>
							</a>
						</h4>
					</div>
					<div id="<?php echo $row_cat['id_cat'] ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<?php
								$qr2 = mysqli_query($conn, "SELECT * FROM cat_items WHERE name_cat = $id AND id_parent = 0");
								while ($row_cat2 = mysqli_fetch_assoc($qr2)) {
									$id_items = $row_cat2['id_items'];
									$id_cat = $row_cat['id_cat'];
									$name_cat = $row_cat2['name_item'];
									$replaceName = utf8ToLatin($name_cat);
									$url = $replaceName . '-' . $id_cat . '-' . $id_items . '.html';
								?>
									<li><a href="<?php echo $url; ?>"><?php echo $row_cat2['name_item'] ?></a>
										<div class="panel-body">
											<ul>
												<?php
												$qr3 = mysqli_query($conn, "SELECT * FROM cat_items WHERE name_cat = $id AND id_parent = $id_items");
												while ($row_cat3 = mysqli_fetch_assoc($qr3)) {
													$id_items3 = $row_cat3['id_items'];
													$id_cat3 = $row_cat['id_cat'];
													$name_cat3 = $row_cat3['name_item'];
													$replaceName = utf8ToLatin($name_cat3);
													$url2 = $replaceName . '-' . $id_cat3 . '-' . $id_items3 . '.html';
												?>
													<li><a href="<?php echo $url2 ?>"><?php echo $row_cat3['name_item'] ?></a>
														<div class="panel-body">
															<ul>
																<?php
																$qr4 = mysqli_query($conn, "SELECT * FROM cat_items WHERE name_cat = $id AND id_parent = $id_items3");
																while ($row_cat4 = mysqli_fetch_assoc($qr4)) {
																	$id_items4 = $row_cat4['id_items'];
																	$id_cat4 = $row_cat['id_cat'];
																	$name_cat4 = $row_cat4['name_item'];
																	$replaceName2 = utf8ToLatin($name_cat4);
																	$url3 = $replaceName2 . '-' . $id_cat4 . '-' . $id_items4 . '.html';
																?>
																	<li><a href="<?php echo $url3 ?>"><?php echo $row_cat4['name_item'] ?></a></li>
																<?php
																}
																?>
															</ul>
														</div>

													</li>
												<?php
												}
												?>
											</ul>
										</div>
									</li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<!--/category-products-->
		<div class="price-range">
			<!--price-range-->
			<h2>Tìm Kiếm Theo Mức Giá</h2>
			<div class="well text-center">
				<form action="" method="GET">
					<input type="text" name="priceS" data-slider-min="100000" data-slider-max="2500000" data-slider-step="50000" id="sl2"><br />
					<b class="pull-left"> 0 VND</b> <b class="pull-right"> 2.50000VND</b>
				</form>

			</div>
		</div>
		<!--/price-range-->

		<div class="shipping text-center">
			<!--shipping-->
			<img src="images/home/shipping.jpg" alt="" />
		</div>
		<!--/shipping-->

	</div>
</div>