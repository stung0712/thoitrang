<?php $page = 'CONTACT'; ?>
<?php require_once 'template/public/inc/header.php'?>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Liên Hệ Với <strong>Chúng Tôi</strong></h2>    			    				    								
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    			 <?php 
					 if(isset($_POST['submit'])) {
						 $fulname = $_POST['name'];
						 $email = $_POST['email'];
						 $message = $_POST['message'];
						 $qr = "INSERT INTO `contacts`(`fulname`, `email`, `content`) VALUES ('$fulname','$email','$message')";
					     $insert = mysqli_query($conn,$qr);
					 }		   
					 ?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Họ Và Tên">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội Dung"></textarea>
								<br>
								<?php  if(isset($insert)) { echo '<span style="color:#AFA;text-align:right;">Liên Hệ Thành Công !</span>';}?>                   
				            </div>  
							   
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông Tin Liên Hệ</h2>
	    			
	    				<div class="social-networks">
	    					<h2 class="title text-center">Mạng Xã Hội</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
<?php require_once 'template/public/inc/header.php'?>