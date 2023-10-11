<?php $page = 'ORDERS'; ?>
<?php require_once 'template/public/inc/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (isset($_SESSION['user'])) {

            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Khách Hàng</th>
                            <th scope="col">Ngày Đặt</th>
                            <th scope="col">Hình Thức Thanh Toán</th>
                            <th scope="col">Trang Thái Đơn Hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 0;
                        $total = 0;
                        $qr = mysqli_query($conn, "SELECT * FROM `order` JOIN `order_detail` ON `order`.`id_order` = `order_detail`.`id_order` WHERE id_customer = {$_SESSION['user']['id_customer']} GROUP BY `order_detail`.`id_order`");
                        while ($row_invoice = mysqli_fetch_assoc($qr)) {
                            $stt++;
                            $total += ($row_invoice['price'] * $row_invoice['qty']);
                            $url = 'orderdetail'.'-'.$row_invoice['id_order'].'.html1';
                            
                        ?>
                            <tr>
                                <th scope="row"><?php echo $stt ?></th>
                                <td><?php echo $_SESSION['user']['fname'] ?></td>
                                <td><?php echo $row_invoice['date'] ?></td>
                                <?php
                                if ($row_invoice['payment'] == 1) {
                                ?>
                                    <td>Thanh Toán Trực Tiêp</td>
                                <?php
                                } else {
                                ?>
                                    <td>Thanh Toán Paypal</td>
                                <?php
                                }
                                ?>
                                <?php
                                if ($row_invoice['status'] == 0) {
                                ?>
                                    <td>Đang Xử Lý</td>
                                <?php
                                } else {
                                ?>
                                    <td>Đã Xử Lý</td>
                                <?php } ?>
                                <td><a href="<?php echo $url?>">Xem Chi Tiết</a></td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            <?php } 
                else {
                     
                
            ?>
                <h4 style="color: red; text-align: center;">Không Có Đơn Hàng</h4>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php require_once 'template/public/inc/footer.php' ?>