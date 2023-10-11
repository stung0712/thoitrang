<?php $page = 'PRODUCTS' ?>
<?php require_once '../inc/header.php' 

?>
<!-- MAIN CONTENT-->
<div class="main-content">
<?php
    $sql = mysqli_query($conn, "SELECT * FROM `products`");
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
                <div class="col-md-12">
                    <a href="admin/products/add.php"><button class="btn btn-success">Thêm</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Hình Ảnh</th>
                                <th scope="col">Tên Loại Danh Mục</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Giá Sản Phẩm </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $qr2 = mysqli_query($conn," SELECT * FROM `img_products`");
                        $img = mysqli_fetch_assoc($qr2);
                        $stt = 0;
                         $qr = mysqli_query($conn,"SELECT products.*, cat_items.name_item from products JOIN cat_items ON products.id_items = cat_items.id_items ORDER BY id_sp DESC LIMIT $offset,5");
                         while($row_products = mysqli_fetch_assoc($qr)) {
                         $stt++;
                         
                        ?>
                            <tr>
                                <th scope="row"><?php echo $stt?></th>
                                <td><?php echo $row_products['name_product']?></td>
                                <td><img src="http://localhost/eshopper/admin/upload/<?php echo $row_products['image']?>" alt="" width="100px"></td>
                                <td><?php echo $row_products['name_item']?></td>
                                <td><?php echo $row_products['quantity']?></td>
                                <td><?php echo number_format($row_products['price']); ?></td>
                                <td><a href="admin/products/del.php?id_xoa=<?php echo $row_products['id_sp']?>"><button class="btn btn-danger">Xóa</button></a><a href="admin/products/edit.php?id_capnhat=<?php echo $row_products['id_sp']?>"><button class="btn btn-success">Cập Nhật<a href=""></a></button></a></td>
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
                                    <a class="page-link" href="admin/products?page=<?php echo $previous ?>">Trang Trước</a>
                                </li>
                            <?php } ?>
                            <?php
                              $part = 1;
                              $begin = $current_page - $part;
                              if($begin < 1) {
                                  $begin = 1;
                              }
                              $end = $current_page + $part;
                              if($end > $nume_page) {
                                  $end = $nume_page;
                              }
                            for ($i = $begin; $i <= $end; $i++) {
                                $active = '';
                                if ($i == $current_page) {
                                    $active = 'active';
                                }
                            ?>
                                <li class="page-item <?php echo $active ?>">
                                    <a class="page-link" href="admin/products?page=<?php echo $i ?>"><?php echo $i ?></a>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if ($current_page < $nume_page) {
                                $next = $current_page + 1;

                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="admin/products?page=<?php echo $next ?>">Trang Tiếp</a>
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