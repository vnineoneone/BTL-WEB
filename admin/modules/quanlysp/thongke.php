<?php
$sql_lietke_sp = "SELECT * FROM product,category WHERE product.id_category = category.id_category ORDER BY id_product DESC";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>


<div class="card mb-4 table-data" style="width: 100%;">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Bảng thông kê sản phẩm
    </div>
    <div class="card-body">
        <table class="table" id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng mua</th>
                    <th scope="col">Số lượng trong kho</th>
                    <th scope="col">Sao trung bình</th>
                    <th scope="col">Số lượt đánh giá</th>
                    <th scope="col">Doanh số</th>
                    <!-- <th scope="col">Quản lý</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_lietke_sp)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_product'] ?></th>
                        <td><?php echo $row['name_product'] ?></td>
                        <td>
                            <?php
                            $sql_mua = "SELECT * FROM cart_details WHERE id_product = '" . $row['id_product'] . "'";
                            $query_mua = mysqli_query($mysqli, $sql_mua);
                            $row_mua = mysqli_fetch_array($query_mua);
                            if ($row_mua != NULL) {
                                $quantity = $row_mua['quantity'];
                            } else {
                                $quantity = 0;
                            }
                            echo $quantity;
                            ?>
                        </td>
                        <td><?php echo $row['number'] - $quantity ?></td>
                        <td>
                            <?php
                            $sql_bl = "SELECT * FROM comment WHERE id_product = '" . $row['id_product'] . "'";
                            $query_bl = mysqli_query($mysqli, $sql_bl);
                            $i = 0;
                            $total = 0;
                            // var_dump($query_bl);
                            while ($row_bl = mysqli_fetch_array($query_bl)) {
                                $i++;
                                $total += $row_bl['star'];
                            }
                            if ($i != 0) {
                                $avg = $total / $i;
                            } else {
                                $avg = 0;
                            }
                            $avg = round($avg, 2);
                            echo $avg;
                            ?>
                            <i class="fas fa-star" id="star"></i>
                        </td>
                        <td><?php echo $i ?></td>
                        <td><?php echo number_format($row['price'] * $quantity, 0, ', ', '.') . '.000 VNĐ'  ?></td>
                        <!-- <td>
                            <div class="list-button">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#item<?php echo $row['id'] ?>">Xóa</button>
                            </div>
                        </td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>