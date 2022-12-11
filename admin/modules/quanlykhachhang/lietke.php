<?php
$sql_lietke_khachhang = "SELECT * FROM user ORDER BY id DESC";
$query_lietke_khachhang = mysqli_query($mysqli, $sql_lietke_khachhang);

?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu khách hàng
        <div style="display: flex; justify-content: flex-end; flex: 1; ">
            <a href="?action=quanlykhachhang&query=them">
                <button type="button" class="btn btn-success">Thêm khách hàng</button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_khachhang)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td>
                            <?php
                            if ($row['status']) {
                                echo '<span class="badge badge-primary">Kích hoạt</span>';
                            } else {
                                echo '<span class="badge badge-danger">Vô hiệu hóa</span>';
                            } ?>
                        </td>
                        <td>
                            <div class="list-button">
                                <a href="?action=quanlykhachhang&query=sua&id=<?php echo $row['id'] ?>">
                                    <button type="button" class="btn btn-info">Xem</button>
                                </a>
                                <a href="?action=quanlykhachhang&query=sua&id=<?php echo $row['id'] ?>">
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['id'] ?>">Xóa</button>
                            </div>
                        </td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="item<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cảnh báo xác nhận</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc muốn xóa người dùng này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <a href=" modules/quanlykhachhang/xuly.php?id=<?php echo $row['id'] ?>">
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>