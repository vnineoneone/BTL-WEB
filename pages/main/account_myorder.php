<?php
$sql_lietke_dh = "SELECT * FROM cart,shipment WHERE cart.code_cart = shipment.code_cart AND id_user = '" . $_SESSION['id_khachhang'] . "' ORDER BY id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>


<div class="container-account mb-3">
  <div class="row">
    <?php include "pages/partials/sidebar_account.php" ?>
    <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
      <h1 class="title-head margin-top-0">Đơn hàng của bạn</h1>
      <table>
        <thead>
          <tr>
            <th scope="col">Đơn hàng</th>
            <th scope="col">Ngày</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">TT thanh toán</th>
            <th scope="col">TT vận chuyển</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($query_lietke_dh)) { ?>
            <tr>
              <td data-label="Đơn hàng">#<?php echo $row['code_cart'] ?></td>
              <td data-label="Ngày"><?php echo $row['created_at'] ?></td>
              <td data-label="Địa chỉ"><?php echo $row['address'] ?></td>
              <td data-label="TT thanh toán"><?php echo $row['method_payment'] ?></td>
              <td data-label="TT vận chuyển">Tiêu chuẩn</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>