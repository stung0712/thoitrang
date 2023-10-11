<?php $page = 'BLOG' ?>
<?php require_once '../inc/header.php'; ?>
<!-- MAIN CONTENT-->

<div class="main-content">
<?php
    $sql = mysqli_query($conn, "SELECT * FROM `blog`");
    $nume_row = mysqli_num_rows($sql);
    $nume_page = ceil($nume_row / 2);
    if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
    $offset = ($current_page - 1) * 2;
    ?>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="admin/blog/add.php"><button class="btn btn-success">Thêm</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Tiêu Đề</th>
                                 <th scope="col">Tóm Tắt</th>
                                 <th scope="col">Nội Dung</th>
                                 <th scope="col">Ngày Đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $stt = 0;
                            $qr = mysqli_query($conn,"SELECT * FROM blog ORDER BY id_blog DESC LIMIT $offset,2");
                            while($row_blog = mysqli_fetch_assoc($qr)) {                                  
                                $stt++;
                           ?>
                                <tr>
                                    <th scope="row"><?php echo $stt?></th>
                                    <td><?php echo $row_blog['title']?></td>
                                    <td><?php echo $row_blog['preview_text']?></td>
                                    <td><?php echo $row_blog['content']?></td>
                                    <td><?php echo $row_blog['created_at']?></td>
                                    <td><a href="admin/blog/del.php?id_xoa=<?php echo $row_blog['id_blog'] ?>"><button class="btn btn-danger">Xóa</button></a> <a href="admin/blog/edit.php?id_capnhat=<?php echo $row_blog['id_blog'] ?>"><button class="btn btn-success">Cập Nhật</button></a></td>
                                </tr>
                            <?php }?>
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
                                    <a class="page-link" href="admin/blog?page=<?php echo $previous ?>">Trang Trước</a>
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
                                    <a class="page-link" href="admin/blog?page=<?php echo $i ?>"><?php echo $i ?></a>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if ($current_page < $nume_page) {
                                $next = $current_page + 1;

                            ?>
                                <li class="page-item">
                                    <a class="page-link" href="admin/blog?page=<?php echo $next ?>">Trang Tiếp</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
<?php require_once '../inc/footer.php' ?>