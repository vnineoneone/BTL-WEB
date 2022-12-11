<div class="container-account">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-3 col-left-ac">
                <h5 class="title-account">Trang tài khoản</h5>
                <p>Xin chào, <span style="color:#f7941d;">Phục Lê</span>&nbsp;!</p>
                <ul>
                    <li>
                        <a class="title-info" href="acc_info.html">Thông tin tài khoản</a>
                    </li>
                    <li>
                        <a class="title-info" href="myorder.html">Đơn hàng của bạn</a>
                    </li>
                    <li>
                        <a class="title-info active" href="#">Đổi mật khẩu</a>
                    </li>
                    <li>
                        <a class="title-info" href="address.html">Sổ địa chỉ (1)</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
				<h1 class="title-head margin-top-0">Đổi mật khẩu</h1>
				<div class="row">
					<div class="col-md-6 col-12">
						<div class="page-login">
							<form accept-charset="utf-8" action="/account/changepassword" id="change_customer_password" method="post">
                                <input name="FormType" type="hidden" value="change_customer_password">
                                <input name="utf8" type="hidden" value="true">
                                
                                
                                <p>
                                    Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự
                                </p>
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
				</div>
			</div>
        </div>
    </div>