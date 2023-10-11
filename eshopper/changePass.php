<?php require_once 'template/public/inc/header.php'?>	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 ">
					<div class="login-form"><!--login form-->
						<h2 style="color: red">Đổi Mật Khẩu Tài Khoản</h2>
					<?php 
					if(isset($_POST['submit'])) {	
						$email = $_POST['email'];
						$pass = md5($_POST['pass_1']);
						$newPass = md5($_POST['pass_2']);
                        $sql = mysqli_query($conn,"SELECT * FROM `customers` WHERE email = '$email' AND password = '$pass'");
						$check = mysqli_num_rows($sql);
						if($check) {
							$update = mysqli_query($conn,"UPDATE `customers` SET `password`='$newPass' WHERE id_customer = {$_GET['id']}");
							echo "<script>alert('Thay đổi thành công !')</script>";
							echo '<script>window.location="index.php";</script>';
						} else {
							echo "<script>alert('Email Và Mật Khẩu Cũ Không Đúng !')</script>";
						}
				        
					}		 
					?>
						<form action="" method="POST">
                           <div class="form-group">
                               <input type="text" name="email" class="form-control" placeholder="Email"> 
                           </div>
                           <div class="form-group">
                               <input type="password" name="pass_1" class="form-control" placeholder="Mật Khẩu Cũ"> 
                           </div>
                           <div class="form-group">
                               <input type="password" name="pass_2" class="form-control" placeholder="Mật Khẩu Mới"> 
                           </div>
                           <input type="submit" name="submit" class="btn btn-success" value="Cập Nhật">
                        </form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php require_once 'template/public/inc/footer.php'?>