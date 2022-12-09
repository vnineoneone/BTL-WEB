<div class="form-container">
    <form method="POST" action="modules/quanlykhachhang/xuly.php" class="needs-validation" novalidate enctype="multipart/form-data">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên khách hàng</th>
                    <td>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Không được để trống tên khách hàng
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>
                        <input type="email" class="form-control" name="email" required>
                        <div class="invalid-feedback">
                            Không được để trống email
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Password</th>
                    <td>
                        <input type="password" class="form-control" name="password" required>
                        <div class="invalid-feedback">
                            Không được để trống password
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Số điện thoại</th>
                    <td>
                        <input type="tel" name="phone" class="form-control" pattern="[0-9]{1}[0-9]{9}">
                        <div class="invalid-feedback">
                            Số điện thoại không hợp lệ
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Địa chỉ</th>
                    <td>
                        <input type="text" name="address" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Hình nền</th>
                    <td>
                        <input type="file" class="form-control" name="image">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Trạng thái</th>
                    <td>
                        <select class="form-select" name="status">
                            <option value=" 1">Kích hoạt</option>
                            <option value="0">Vô hiệu hóa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="themkhachhang">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>