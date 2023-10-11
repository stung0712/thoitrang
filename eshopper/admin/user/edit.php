<?php require_once '../inc/header.php'

?>
<!-- MAIN CONTENT-->
<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                <?php 
                 $id_capnhat = $_GET['id_capnhat'];
                 $qr = mysqli_query($conn,"SELECT * FROM admin WHERE id_admin = {$id_capnhat}");
                 $arCustomer = mysqli_fetch_assoc($qr);
                 if(isset($_POST['submit'])) {
                     $fname = $_POST['fname'];
                     $email = $_POST['email'];
                     $password = $_POST['password'];
                     $level = $_POST['level'];
                     if($pass = md5($password)) {
                        $sql_update = mysqli_query($conn,"UPDATE admin SET fname = '{$fname}',email = '{$email}',password = '{$pass}', level = '$level' WHERE id_admin = {$id_capnhat}");
                        if($sql_update) {
                            echo '<script>window.location="admin/user";</script>';  
                        }
                    }
                 }
                ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label >Họ Tên</label>
                            <input type="text" name="fname" value="<?php echo $arCustomer['fname']?>" class="form-control"  placeholder="Nhập Họ Và Tên">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $arCustomer['email']?>"  placeholder="Nhập Địa Chỉ Email">
                        </div>
                        <div class="form-group">
                            <label >Mật Khẩu</label>
                            <input type="password" name="password" class="form-control"  placeholder="Nhập Mật Khẩu">
                        </div>
                          <div class="form-group">
                            <label >Vai Trò</label>
                           <select name="level" id="" class="form-control">
                              <?php 
                                if($arCustomer['level'] == 1) {                             
                              ?>     
                               <option selected>Admin</option>
                               <option value="2">User</option>
                              <?php 
                              } elseif($arCustomer['level'] == 2) {                            
                              ?> 
                               <option value="1">Admin</option>
                               <option selected>User</option>                         
                              <?php
                               }
                              ?>
                           </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-success" value="Cập Nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
<?php require_once '../inc/footer.php' ?>