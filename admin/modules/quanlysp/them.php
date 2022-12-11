<!-- <h3 class="mt-2">Thêm sản phẩm</h3> -->
<div class="form-container">
    <form method="POST" action="modules/quanlysp/xuly.php" novalidate class="needs-validation" enctype="multipart/form-data">
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
                    <td>
                        <input type="text" class="form-control" name="name" required>
                        <div class="invalid-feedback">
                            Không được để trống tên sản phẩm
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mã sản phẩm</th>
                    <td>
                        <input type="text" class="form-control" name="code" required>
                        <div class="invalid-feedback">
                            Không được để trống mã sản phẩm
                        </div>
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
                        <div class="input-group mb-2 mr-sm-2">

                            <input type="text" class="form-control" name="price" required>
                            <div class="invalid-feedback">
                                Không được để trống giá sản phẩm
                            </div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">,000 VNĐ</div>
                            </div>
                            <div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Số lượng</th>
                    <td>
                        <input type="number" class="form-control" name="number" required>
                        <div class="invalid-feedback">
                            Không được để trống số lượng
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
                        <button type="submit" class="btn btn-success" name="themsanpham">Thêm</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>