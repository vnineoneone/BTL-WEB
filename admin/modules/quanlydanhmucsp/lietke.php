<?php
$sql_lietke_danhmucsp = "SELECT * FROM category ORDER BY order_category DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<h3 class="mt-4">Bảng dữ liệu danh mục sản phẩm</h3>
<div class="card mb-4 table-data">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu danh mục sản phẩm
    </div>

    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $row['name_category'] ?></td>
                        <td><a href="modules/quanlydanhmucsp/xuly.php?id=<?php echo $row['id_category'] ?>">Xóa</a>|
                            <a href="?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['id_category'] ?>">Sửa</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>