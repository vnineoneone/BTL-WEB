<h3 class="mt-4">Sửa sản phẩm</h3>
<?php
$sql_sua_sp = "SELECT * FROM product WHERE id_product = '$_GET[id]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>

<?php while ($row = mysqli_fetch_array($query_sua_sp)) { ?>
    <form method="POST" action="modules/quanlysp/xuly.php?id=<?php echo $row['id_product'] ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name_product'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Mã sản phẩm</label>
            <input type="text" class="form-control" name="code" value="<?php echo $row['code'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Danh muc</label>
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
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Giá sản phẩm</label>
            <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Số lượng</label>
            <input type="number" class="form-control" name="number" value="<?php echo $row['number'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="image">
            <img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="100px" height="100px">
        </div>
        <div class="mb-3">
            <label class="form-label">Tóm tắt</label>
            <textarea row="5" class="form-control" name="detail"><?php echo $row['detail'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Nội dung</label>
            <textarea row="5" class="form-control" name="description"><?php echo $row['description'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Tình trạng</label>
            <select class="form-select" name="status">
                <?php if ($row['status']) { ?>
                    <option value=" 1" selected>Display</option>
                    <option value="0">Hide</option>
                <?php } else { ?>
                    <option value=" 1">Display</option>
                    <option value="0" selected>Hide</option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="suasanpham">Lưu</button>
    </form>
<?php } ?>