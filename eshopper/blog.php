<?php $page = 'BLOG'; ?>
<?php require_once 'template/public/inc/header.php'?>
	<section>
		<div class="container">
			<div class="row">
				<?php require_once 'template/public/inc/left-sidebar.php'?>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Tin Tức Mới Nhất</h2>
						<?php 
						$qr = mysqli_query($conn,"SELECT * FROM blog ORDER BY id_blog DESC");
						while($row_blog = mysqli_fetch_assoc($qr)) {
							$id = $row_blog['id_blog'];
							$name = $row_blog['title'];
							$replaceName = utf8ToLatin($name);
							$url = $replaceName.'-'.$id.'.html';
							
										
						?>
						<div class="single-blog-post">
							<h3><?php echo $row_blog['title']?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-calendar"></i>Ngày Đăng : <?php echo $row_blog['created_at']?></li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
						
							<p><?php echo $row_blog['preview_text']?></p>
							<a  class="btn btn-primary" href="<?php echo $url ?>">Đọc Tiếp</a>
						</div>		
					 <?php 
					 }
					 ?>						
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php require_once 'template/public/inc/footer.php'?>