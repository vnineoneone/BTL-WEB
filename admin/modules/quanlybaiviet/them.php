<div class="form-container">
    <form method="POST" action="modules/quanlybaiviet/xuly.php" novalidate class="needs-validation" enctype="multipart/form-data">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên bài viết</th>
                    <td>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Không được để trống tên bài viết
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Hình ảnh</th>
                    <td>
                        <input type="file" class="form-control" name="image">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tóm tắt</th>
                    <td>
                        <textarea row="5" id="brief" class="form-control" name="brief"></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Nội dung</th>
                    <td>
                        <textarea row="5" id="content" class="form-control" name="content"></textarea>
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
                        <button type="submit" class="btn btn-success" name="thembaiviet">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>