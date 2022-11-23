<h3 class="mt-4">Thêm sản phẩm</h3>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="form-container">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kiểu dữ liệu</th>
                    <th scope="col">Nhập dữ liệu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên sản phẩm</th>
                    <td><input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"></td>
                </tr>
                <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>
                        <input type="text" class="form-control" name="code">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Danh mục</th>
                    <td>

                        <select class="form-select" name="category">
                            <?php
                            $sql_danhmuc = "SELECT * FROM category ORDER BY id_category DESC";
                            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Gía sản phẩm</th>
                    <td>
                        <input type="text" class="form-control" name="price">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Số lượng</th>
                    <td>
                        <input type="number" class="form-control" name="number">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Hình ảnh</th>
                    <td>
                        <input type="file" class="form-control" name="image">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Chi tiết</th>
                    <td>
                        <textarea row="5" class="form-control" name="detail"></textarea>
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
                        <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

<!-- <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" class="form-control" name="code">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="number" class="form-control" name="number">
    </div>
    <div class="mb-3">
        <label class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="mb-3">
        <label class="form-label">Tóm tắt</label>
        <textarea row="5" class="form-control" name="detail"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Nội dung</label>
        <textarea row="5" class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Tình trạng</label>
        <select class="form-select" name="status">
            <option value=" 1">Display</option>
            <option value="0">Hide</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="themsanpham">Thêm</button>
</form> -->