<?php $page = 'ORDER' ?>
<?php require_once '../inc/header.php'

?>
<!-- MAIN CONTENT-->
<div class="main-content">
<?php
    $sql = mysqli_query($conn, "SELECT * FROM `order`");
    $nume_row = mysqli_num_rows($sql);
    $nume_page = ceil($nume_row / 5);
    if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
    $offset = ($current_page - 1) * 5;
    ?>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-12">
                    <a href="admin/order/detail.php"><button class="btn btn-success">Chi Tiết Đơn Hàng</button></a>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Số Điện Thoại</th>
                                <th scope="col">Ngày Đặt</th>
                                <th scope="col">Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 0;
                            $qr = mysqli_query($conn, "SELECT * FROM `order` JOIN `customers` on `order`.`id_customer` = `customers`.`id_customer` LIMIT $offset,5");
                            while ($row = mysqli_fetch_assoc($qr)) {
                                $stt++;

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $stt; ?></th>
                                    <td><?php echo $row['fname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td>
                                        <?php if ($row['status'] == 0) { ?>
                                            <span>Chưa Xử Lý</span>
                                        <?php
                                        } elseif ($row['status'] == 1) {
                                        ?>
                                            <span>Đã Xử Lý</span>
                                        <?php
                                        }
                                        ?>
                                    </td>                                  
                                    <td> <a href="admin/order/detail.php?id=<?php echo $row['id_order'] ?>"><button class="btn btn-success">Xem Chi Tiết</button></a>  <?php 
                                     if($_SESSION['userAdmin']['level'] == 1) {                                                                     
                                    ?>
                                     <a href="admin/order/del.php?id=<?php echo $row['id_order'] ?>"><button class="btn btn-danger">Xóa</button></a></td>
                                     <?php }?>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="col-sm-6" style="text-align: right;">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                            if ($current_page > 1) {
                                $previous = $current_page - 1;

                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="admin/order?page=<?php echo $previous ?>">Trang Trước</a>
                                </li>
                            <?php } ?>
                            <?php
                            for ($i = 1; $i <= $nume_page; $i++) {
                                $active = '';
                                if ($i == $current_page) {
                                    $active = 'active';
                                }
                            ?>
                                <li class="page-item <?php echo $active ?>">
                                    <a class="page-link" href="admin/order?page=<?php echo $i ?>"><?php echo $i ?></a>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if ($current_page < $nume_page) {
                                $next = $current_page + 1;

                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="admin/order?page=<?php echo $next ?>">Trang Tiếp</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
<?php require_once '../inc/footer.php' ?>