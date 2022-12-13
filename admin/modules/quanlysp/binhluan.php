<?php
$sql_lietke_bl = "SELECT * FROM comment ORDER BY id_product DESC";
$query_lietke_bl = mysqli_query($mysqli, $sql_lietke_bl);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu bình luận
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Người dùng</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Đánh giá</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_bl)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['user'] ?></td>
                        <td><?php echo $row['product'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                        <td>
                            <?php
                            for ($i = 0; $i < $row['star']; $i++) {
                            ?>
                                <i class="fas fa-star" id="star"></i>
                            <?php
                            }
                            ?>
                        </td>
                        <td>

                            <div class="list-button">
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
                                    Bạn có chắc muốn xóa bình luận này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <a href="modules/quanlysp/xulybinhluan.php?id=<?php echo $row['id'] ?>">
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