<?php
$sql_lietke_thuonghieu = "SELECT * FROM brand";
$query_lietke_thuonghieu = mysqli_query($mysqli, $sql_lietke_thuonghieu);
?>


<div class="card mb-4 table-data" style="width: 100%">
    <div class="card-header">
        <div>
            <i class="fas fa-table me-1"></i>
            Bảng dữ liệu thương hiệu sản phẩm
        </div>
        <div style="display: flex; justify-content: flex-end; flex: 1; ">
            <a href="?action=quanlythuonghieu&query=them">
                <button type="button" class="btn btn-success">Thêm thương hiệu</button>
            </a>
        </div>
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
                while ($row = mysqli_fetch_array($query_lietke_thuonghieu)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['id_brand'] ?></th>
                        <td><?php echo $row['name_brand'] ?></td>
                        <td>
                            <div class="list-button">
                                <a href="?action=quanlythuonghieu&query=sua&id=<?php echo $row['id_brand'] ?>">
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['id_brand'] ?>">Xóa</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="item<?php echo $row['id_brand'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cảnh báo xác nhận</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc muốn xóa danh mục sản phẩm này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <a href="modules/quanlythuonghieu/xuly.php?id=<?php echo $row['id_brand'] ?>">
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