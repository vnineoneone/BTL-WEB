<?php
$sql_chitiet_dh = "SELECT * FROM cart_details,product WHERE cart_details.id_product = product.id_product 
AND cart_details.code_cart = '$_GET[code]' ORDER BY id_cart_details DESC";
$query_chitiet_dh = mysqli_query($mysqli, $sql_chitiet_dh);


$sql_info = "SELECT * FROM shipment,cart WHERE shipment.code_cart =  '$_GET[code]' AND shipment.code_cart = cart.code_cart";
$query_info = mysqli_query($mysqli, $sql_info);
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
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <!-- <th scope="col">Quản lý</th> -->
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
                        <!-- <td><?php echo $row['code_cart'] ?></td> -->
                        <td><?php echo $row['name_product'] ?></td>
                        <td><?php echo number_format($row['price'], 0, ', ', '.') . '.000 VNĐ' ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo number_format($total, 0, ', ', '.') . '.000 VNĐ' ?></td>
                        <!-- <td>
                            <div class="list-button">
                                <a href="?action=quanlysp&query=sua&id=<?php echo $row['id_product'] ?>">
                                    <button type="button" class="btn btn-primary">Sửa</button>
                                </a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['id_product'] ?>">Xóa</button>
                            </div>
                        </td> -->
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" ">Đóng</button>
                                    <a href=" modules/quanlysp/xuly.php?id=<?php echo $row['id_product'] ?>" style="margin: 2px;>
                                        <button type=" button" class="btn btn-danger">Xóa</button>
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
<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu thông tin giao hàng
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Thanh toán</th>
                    <th scope="col">Giao hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sum = 0;
                $i = 0;
                while ($row = mysqli_fetch_array($query_info)) {
                ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['method_payment'] ?></td>
                        <td>Tiêu chuẩn</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>