<?php
$sql_lietke_sp = "SELECT * FROM product,category WHERE product.id_category = category.id_category ORDER BY id_product DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu sản phẩm
        <div style="display: flex; justify-content: flex-end; flex: 1; ">
            <a href="?action=quanlysp&query=them">
                <button type="button" class="btn btn-success">Thêm sản phẩm</button>
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <!-- <th scope="col">Id</th> -->
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <!-- <th scope="col">Hình ảnh</th>
                    <th scope="col">Chi tiết</th> -->
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
                        <!-- <th scope="row"><?php echo $i ?></th> -->
                        <td><?php echo $row['name_product'] ?></td>
                        <td><?php echo $row['name_category'] ?></td>
                        <td><?php echo $row['code'] ?></td>
                        <td><?php echo number_format($row['price'], 0, ', ', '.') . '.000 VNĐ' ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <!-- <td><img src="modules/quanlysp/uploads/<?php echo $row['image'] ?>" width="100px" height="100px"></td>
                        <td><?php echo $row['detail'] ?></td> -->
                        <td><?php
                            if ($row['status']) {
                                echo '<span class="badge badge-primary">Kích hoạt</span>';
                            } else {
                                echo '<span class="badge badge-danger">Vô hiệu hóa</span>';
                            } ?></td>
                        <td>
                            <div class="list-button">
                                <a href="?action=quanlysp&query=sua&id=<?php echo $row['id_product'] ?>">
                                    <button type="button" class="btn btn-info">Xem</button>
                                </a>
                                <a href="?action=quanlysp&query=sua&id=<?php echo $row['id_product'] ?>">
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['id_product'] ?>">Xóa</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="item<?php echo $row['id_product'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href=" modules/quanlysp/xuly.php?id=<?php echo $row['id_product'] ?>">
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