<?php session_start();
require_once '../db/dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <base href="http://localhost/eshopper/">
    <!-- Fontfaces CSS-->
    <link href="template/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="template/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="template/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="template/admin/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="template/admin/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <?php 
                        if(isset($_POST['submit'])){
							$email = $_POST['email'];
							$password = md5($_POST['password']);
							$query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
							$result = mysqli_query($conn,$query);
							$infoUser = mysqli_fetch_assoc($result);
							if($infoUser){
								$_SESSION['userAdmin'] = $infoUser; 
                                
								header("LOCATION: dashboad/");
							}else{
								echo "<script>alert('Tài Khoản Hoặc Mật Khẩu Sai !')</script>";
							}
						}
                        ?>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" required placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Mật Khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="password" required placeholder="Password">
                                </div>                     
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit" >Đăng Nhập</button>                             
                            </form>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="template/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="template/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="template/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="template/admin/vendor/slick/slick.min.js">
    </script>
    <script src="template/admin/vendor/wow/wow.min.js"></script>
    <script src="template/admin/vendor/animsition/animsition.min.js"></script>
    <script src="template/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="template/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="template/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="template/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="template/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="template/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="template/admin/vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="template/admin/js/main.js"></script>

</body>
</html>
<!-- end document-->