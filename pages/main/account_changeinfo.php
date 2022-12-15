<?php
$sql = "SELECT * FROM user WHERE id = '" . $_SESSION['id_khachhang'] . "'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>


<div class="container-account">
    <div class="row">
        <?php include "pages/partials/sidebar_account.php" ?>
        <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
            <!-- <h1 class="title-head margin-top-0">Đổi mật khẩu</h1>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="page-login" style="margin-top: -20px;">
                        <form accept-charset="utf-8" action="/account/changepassword" id="change_customer_password" method="post">
                            <input name="FormType" type="hidden" value="change_customer_password">
                            <input name="utf8" type="hidden" value="true">
                            <div class="form-signup clearfix">
                                <fieldset class="form-group">
                                    <label for="oldPass">Mật khẩu cũ <span class="error">*</span></label>
                                    <input type="password" name="OldPassword" id="OldPass" required="" class="form-control form-control-lg">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="changePass">Mật khẩu mới <span class="error">*</span></label>
                                    <input type="password" name="Password" id="changePass" required="" class="form-control form-control-lg">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="confirmPass">Xác nhận lại mật khẩu <span class="error">*</span></label>
                                    <input type="password" name="ConfirmPassword" id="confirmPass" required="" class="form-control form-control-lg">
                                </fieldset>
                                <button class="button btn-edit-addr btn btn-primary btn-more"><i class="hoverButton"></i>Đặt lại mật khẩu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <h1 class="title-head margin-top-0">Đổi thông tin tài khoản</h1>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="page-login" style="margin-top: -20px;">
                        <form accept-charset="utf-8" action="controllers/UserController.php" id="change_customer_password" method="POST">
                            <input name="FormType" type="hidden" value="change_customer_password">
                            <input name="utf8" type="hidden" value="true">
                            <div class="form-signup clearfix">
                                <fieldset class="form-group">
                                    <label for="oldPass">Tên khách hàng <span class="error">*</span></label>
                                    <input type="text" name="name" value="<?php echo $row['name'] ?>" required="" class="form-control form-control-lg">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="changePass">Số điện thoại <span class="error">*</span></label>
                                    <input type="text" name="phone" value="<?php echo $row['phone'] ?>" required="" class="form-control form-control-lg">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="oldPass">Email <span class="error">*</span></label>
                                    <input type="text" name="email" value="<?php echo $row['email'] ?>" required="" class="form-control form-control-lg">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="changePass">Địa chỉ <span class="error">*</span></label>
                                    <input type="text" name="address" required="" value="<?php echo $row['address'] ?>" class="form-control form-control-lg">
                                </fieldset>

                                <button class="button btn-edit-addr btn btn-primary btn-more" type="submit" name="update"><i class="hoverButton"></i>Cập nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>