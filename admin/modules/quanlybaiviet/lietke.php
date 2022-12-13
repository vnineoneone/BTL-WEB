<?php
$sql_lietke_bv = "SELECT * FROM post ORDER BY id DESC";
$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu bài viết
        <div style="display: flex; justify-content: flex-end; flex: 1; ">
            <a href="?action=quanlybaiviet&query=them">
                <button type="button" class="btn btn-success">Thêm bài viết</button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên bài viết</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tóm tắt</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_bv)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['name'] ?></td>
                        <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['image'] ?>" width="100px" height="100px"></td>
                        <td><?php echo $row['brief'] ?></td>
                        <td>
                            <?php
                            if ($row['status']) {
                                echo '<span class="badge badge-primary">Kích hoạt</span>';
                            } else {
                                echo '<span class="badge badge-danger">Vô hiệu hóa</span>';
                            } ?></td>
                        <td>
                            <div class="list-button">
                                <a href="?action=quanlybaiviet&query=sua&id=<?php echo $row['id'] ?>">
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
                                    Bạn có chắc muốn xóa sản phẩm này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <a href=" modules/quanlybaiviet/xuly.php?id=<?php echo $row['id'] ?>">
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