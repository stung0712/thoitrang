<?php require_once 'template/public/inc/header.php'?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng Nhập Tài Khoản</h2>
						<?php 
						 if(isset($_POST['submit'])){
							$email = $_POST['email'];
							$password = md5($_POST['pass']);
							$query = "SELECT * FROM customers WHERE email = '{$email}' AND password = '{$password}'";
							$result = mysqli_query($conn,$query);
							$infoUser = mysqli_fetch_assoc($result);
							if($infoUser){
								$_SESSION['user'] = $infoUser;   
								if(isset($_GET['action'])) {
									$action = $_GET['action'];
									echo '<script>window.location="checkout.php";</script>';
								}  elseif(isset($_GET['comment'])) {
									$comment = $_GET['comment'];
									echo '<script>window.location="blog.php";</script>';
								} elseif(isset($_GET['comment1'])) {
									$comment1 = $_GET['comment1'];
									echo '<script>window.location="index.php";</script>';
								} 
								else 
								{
									echo '<script>window.location="index.php";</script>';
								}
								
							}else{
								echo "<script>alert('Tài Khoản Hoặc Mật Khẩu Sai !')</script>";
							}
						}
						?>
						<form  method="POST">
							<input type="text" name="email" placeholder="Địa Chỉ Email" />
							<input type="password" name="pass" placeholder="Nhập Mật Khẩu" />
							<button type="submit" name="submit" class="btn btn-default">Đăng Nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Tạo Mới Tài Khoản</h2>
						<?php 
						if(isset($_POST['submitDK'])) {
							$nameKH = $_POST['nameDK'];
							$emailKH = $_POST['emailDK'];
							$pass = md5($_POST['passDK']);
							$sql = mysqli_query($conn,"INSERT INTO `customers`(`fname`, `email`, `password`) VALUES ('$nameKH','$emailKH','$pass')");
						}
						?>
						<form  method="POST">
							<input type="text" name="nameDK" placeholder="Tên Khách Hàng" required/>
							<input type="text" name="emailDK" placeholder="Địa Chỉ Email" required/>
							<input type="password" name="passDK" placeholder="Mật Khẩu" required/>
							<?php if(isset($sql)) {
							echo "<p style = 'color: green'>Đăng ký Tài Khoản Thành Công !</p>";	}?>
							<button type="submit" name="submitDK" class="btn btn-default">Đăng Ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php require_once 'template/public/inc/footer.php'?>