<?php
$sql = "SELECT * FROM user WHERE id = '" . $_SESSION['id_khachhang'] . "'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>


<div class="container-account">
    <div class="row">
        <?php include "pages/partials/sidebar_account.php" ?>
        <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
            <h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-signup name-account" style="width: 500px">
                        <p><strong>Họ tên:</strong> <?php echo $row['name'] ?></p>
                        <p> <strong>Email:</strong><?php echo $row['email'] ?></p>
                        <p> <strong>Số điện thoại: </strong> <?php echo $row['phone'] ?></p>
                        <p><strong>Địa chỉ:</strong><?php echo $row['address'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>