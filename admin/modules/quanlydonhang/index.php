<?php
$sql_lietke_dh = "SELECT * FROM cart,user WHERE cart.id_user = user.id ORDER BY id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng dữ liệu danh sách đơn hàng
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_dh)) {
                    $i++;
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['id_cart'] ?></th>
                        <td><?php echo $row['code_cart'] ?></td>

                        <td scope="row"><?php echo $row['email'] ?></td>
                        <td scope="row"><?php echo $row['phone'] ?></td>
                        <td scope="row"><?php echo $row['address'] ?></td>
                        <td>
                            <?php
                            if ($row['cart_status']) {
                                echo '<span class="badge badge-secondary">Đang xử lý</span>';
                            } else {
                                echo '<span class="badge badge-success">Đã giao hàng</span>';
                            } ?>
                        </td>

                        <td>
                            <div class="list-button">
                                <a href="?action=quanlydonhang&query=donhang&code=<?php echo $row['code_cart'] ?>">
                                    <button type="button" class="btn btn-info">Xem</button>
                                </a>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['code_cart'] ?>">Xử lý</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="item<?php echo $row['code_cart'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cảnh báo xác nhận</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có chắc muốn đơn hàng này hoàn thành?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <form method="POST" action="modules/quanlydonhang/xuly.php?code=<?php echo $row['code_cart'] ?>">
                                        <button type="submit" name="hoanthanh" class="btn btn-success">Hoàn thành</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>