<div class="form-container">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php" class="needs-validation" novalidate>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên danh mục</th>
                    <td>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Không được để trống tên danh mục
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Thứ tự</th>
                    <td>
                        <input type="number" class="form-control" name="order" required>
                        <div class="invalid-feedback">
                            Không được để trống thứ tự
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="themdanhmuc">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>