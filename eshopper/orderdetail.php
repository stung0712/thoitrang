<?php $page = 'ORDERS'; ?>
<?php require_once 'template/public/inc/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">

                <table class="table">
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
                         $stt = 0;
                         $total = 0;
                         $query = mysqli_query($conn, "SELECT `order_detail`.*, `products`.`name_product` FROM `order_detail` JOIN `products` ON `order_detail`.`id_sp` = `products`.`id_sp` WHERE `id_order` = {$_GET['id']}");
                         while($row_detail = mysqli_fetch_assoc($query)) {
                             $stt++;
                             $total+= ($row_detail['price']*$row_detail['qty']);
                    ?>
                           <tr>
                             <td><?php echo $stt?></td>
                             <td><?php echo $row_detail['name_product']?></td>
                             <td><?php echo number_format($row_detail['price']). ' VND'; ?></td>
                             <td><?php echo $row_detail['qty']?></td>
                             <td><?php echo number_format($row_detail['qty']*$row_detail['price']);?></td>
                          </tr>
                        <?php 
                         }
                        ?>
                            <tr>
                              <td style="background-color: burlywood;">Tổng Tiền : </td>
                              <td colspan="6"><?php echo number_format($total)?> VND</td>
                            </tr>
                    </tbody>

                </table>
    
        </div>
    </div>
</div>
<?php require_once 'template/public/inc/footer.php' ?>