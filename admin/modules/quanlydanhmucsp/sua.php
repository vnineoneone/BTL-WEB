<?php
$sql_sua_danhmucsp = "SELECT * FROM category WHERE id_category = '$_GET[id]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<div class="form-container">
    <?php while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) { ?>
        <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id=<?php echo $_GET['id'] ?>">
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
                            <input type="text" class="form-control" name="name" value="<?php echo $dong['name_category'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Thứ tự</th>
                        <td>
                            <input type="number" class="form-control" name="order" value="<?php echo $dong['id_category'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="suadanhmuc">Lưu</button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    <?php } ?>
</div>