<?php
$sql_chitiet_dh = "SELECT * FROM cart_details,product WHERE cart_details.id_product = product.id_product 
AND cart_details.code_cart = '$_GET[code]' ORDER BY id_cart_details DESC";
$query_chitiet_dh = mysqli_query($mysqli, $sql_chitiet_dh);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu chi tiết đơn hàng
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sum = 0;
                $i = 0;
                while ($row = mysqli_fetch_array($query_chitiet_dh)) {
                    $total = $row['price'] * $row['quantity'];
                    $sum += $total;
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['id_cart_details'] ?></th>
                        <td><?php echo $row['code_cart'] ?></td>
                        <td><?php echo number_format($row['price'], 0, ', ', '.') . '.000 VNĐ' ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo number_format($total, 0, ', ', '.') . '.000 VNĐ' ?></td>
                        <td>
                            <div class="list-button">
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
                <tr>
                    <td colspan="">
                        Tổng tiền: <?php echo number_format($sum, 0, ', ', '.') . '.000 VNĐ' ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>