<?php
$sql_sua_thuonghieu = "SELECT * FROM brand WHERE id_brand = '$_GET[id]' LIMIT 1";
$query_sua_thuonghieu = mysqli_query($mysqli, $sql_sua_thuonghieu);
?>

<div class="form-container">
    <?php while ($dong = mysqli_fetch_array($query_sua_thuonghieu)) { ?>
        <form method="POST" action="modules/quanlythuonghieu/xuly.php?id=<?php echo $_GET['id'] ?>">
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
                            <input type="text" class="form-control" name="name" value="<?php echo $dong['name_brand'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="suathuonghieu">Lưu</button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    <?php } ?>
</div>