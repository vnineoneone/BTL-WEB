<?php
$sql_sua_sp = "SELECT * FROM product WHERE id_product = '" . $_GET['id'] . "' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>


<div class="form-container">
    <?php while ($row = mysqli_fetch_array($query_sua_sp)) { ?>

        <form method="POST" action="modules/quanlysp/xuly.php?id=<?php echo $row['id_product'] ?>" class="needs-validation" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name_product'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Mã sản phẩm</th>
                        <td>
                            <input type="text" class="form-control" name="code" value="<?php echo $row['code'] ?>">

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
                                    if ($row_danhmuc['id_category'] == $row['id_category']) {
                                ?>
                                        <option selected value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                                    <?php } else {
                                    ?>
                                        <option value="<?php echo $row_danhmuc['id_category'] ?>"><?php echo $row_danhmuc['name_category'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Gía sản phẩm</th>
                        <td>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="price" required value="<?php echo $row['price'] ?>">
                                <div class="invalid-feedback">
                                    Không được để trống giá sản phẩm
                                </div>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">.000 VNĐ</div>
                                </div>
                                <div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Số lượng</th>
                        <td>
                            <input type="number" class="form-control" name="number" value="<?php echo $row['number'] ?>">

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hình ảnh</th>
                        <td>
                            <input type="file" class="form-control" name="image">
                            <img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="20%" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Chi tiết</th>
                        <td>
                            <textarea row="5" id="content" class="form-control" name="detail"><?php echo $row['detail'] ?></textarea>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Trạng thái</th>
                        <td>
                            <select class="form-select" name="status">
                                <?php if ($row['status']) { ?>
                                    <option value=" 1" selected>Kích hoạt</option>
                                    <option value="0">Vô hiệu hóa</option>
                                <?php } else { ?>
                                    <option value=" 1">Kích hoạt</option>
                                    <option value="0" selected>Vô hiệu hóa</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="suasanpham">Lưu</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    <?php } ?>

</div>