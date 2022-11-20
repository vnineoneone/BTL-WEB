<?php
$sql_lietke_sp = "SELECT * FROM product ORDER BY id DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<h3 class="mt-4">Bảng dữ liệu sản phẩm</h3>

<div class="card mb-4 table-data">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên sản phảm</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Chi tiết</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_sp)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['code'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="100px" height="100px"></td>
                        <td><?php echo $row['detail'] ?></td>
                        <td><?php
                            if ($row['status']) {
                                echo "Kích hoạt";
                            } else {
                                echo "Ẩn";
                            } ?></td>
                        <td><a href=" modules/quanlysp/xuly.php?id=<?php echo $row['id'] ?>">Xóa</a>|
                            <a href="?action=quanlysp&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>