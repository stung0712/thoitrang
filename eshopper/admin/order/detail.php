<?php require_once '../inc/header.php'

?>
<!-- MAIN CONTENT-->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_POST['status'])) {
    $status = $_POST['status'];
    mysqli_query($conn, "UPDATE `order` SET `status`= $status WHERE `id_order` = $id");
    echo '<script>window.location="http://localhost/eshopper/admin/order/";</script>';
}
?>
<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Tổng Tiền</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $qr = mysqli_query($conn, "SELECT `order_detail`.*, `products`.`name_product` FROM `order_detail` JOIN `products` ON `order_detail`.`id_sp` = `products`.`id_sp` WHERE `id_order` = $id");
                            while ($row_order_detail = mysqli_fetch_assoc($qr)) {
                                $total += ($row_order_detail['price'] * $row_order_detail['qty']);
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row_order_detail['id_order'] ?></th>
                                    <td><?php echo $row_order_detail['name_product'] ?></td>
                                    <td><?php echo number_format($row_order_detail['price']) ?></td>
                                    <td><?php echo $row_order_detail['qty'] ?></td>
                                    <td><?php echo number_format($row_order_detail['price'] * $row_order_detail['qty']) ?></td>
                                    <td>

                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td style="background-color: aqua;">Tổng Tiền</td>
                                <?php
                                if (isset($_SESSION['discount'])) {
                                   
                                ?>
                                    <td colspan="6"><?php echo number_format($total * 0.7); ?> VND</td>
                                <?php
                                } else {
                                ?>
                                    <td colspan="6"><?php echo number_format($total); ?> VND</td>
                                <?php
                                }
                                ?>
                                <?php
                                if ($_SESSION['userAdmin']['level'] == 1) {
                                ?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h4>Trạng Thái Đơn Hàng</h4>
                                            <br>
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <select name="status" id="" class="form-control">
                                                        <option value="0">Chưa Xử Lý</option>
                                                        <option value="1">Đã Xử Lý</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-info" class="form-control" value="Cập Nhật">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
<?php require_once '../inc/footer.php' ?>