<div class="form-container">
    <form method="POST" action="modules/quanlythuonghieu/xuly.php" class="needs-validation" novalidate>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên thương hiệu</th>
                    <td>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Không được để trống tên thương hiệu
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-success" name="themthuonghieu">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>