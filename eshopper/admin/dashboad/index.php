<?php $page = 'DASHBOAD'?>
<?php require_once '../inc/header.php' ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Tổng Quan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                            <?php $qr1 = mysqli_query($conn,"SELECT * FROM admin");
                                                  $row_1 = mysqli_num_rows($qr1);
                                                 
                                            ?>
                                                <h2><?php echo $row_1?></h2>
                                                <span>User</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-collection-item"></i>
                                            </div>
                                            <div class="text">
                                            <?php $qr2 = mysqli_query($conn,"SELECT * FROM products");
                                                  $row_2 = mysqli_num_rows($qr2);                                          
                                            ?>
                                                <h2><?php echo $row_2?></h2>
                                                <span>Sản Phẩm Có Sẵn</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                            <?php 
                                             $qr5 = mysqli_query($conn,"SELECT * FROM `order`");
                                             $row_5 = mysqli_num_rows($qr5);
                                             
                                            ?>                                        
                                                <h2><?php echo $row_5;?></h2>
                                                <span>Đơn Hàng Hiện Có</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-square-o"></i>
                                            </div>
                                            <div class="text">
                                            <?php 
                                              $qr4 = mysqli_query($conn,"SELECT * FROM `cat_items`");
                                              $row_4 = mysqli_num_rows($qr4);
                                              
                                            ?>
                                                <h2><?php  echo $row_4;?></h2>
                                                <span>Danh Mục </span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
<?php require_once '../inc/footer.php'?>