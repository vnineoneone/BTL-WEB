<?php
session_start();
include "../../admin/config/config.php";
$sql = "SELECT * FROM user WHERE id = '" . $_SESSION['id_khachhang'] . "'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thanh toán đơn hàng</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/payment.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <h2><a href="#">Sea Furniture</a></h2>
    </div>
  </div>

  <div class="container">
    <form class="needs-validation" method="POST" novalidate="" action="../../controllers/PaymentController.php">

      <div class="row g-5">

        <div class="col-md-5 col-lg-4 order-md-last ">
          <h4 class="d-flex justify-content-between align-items-center mb-3 title-1-1">
            <span class="">ĐƠN HÀNG</span>
            <span class="badge bg-primary rounded-pill">
              <?php
              echo count($_SESSION['cart']);
              ?>
            </span>
          </h4>
          <ul class="list-group mb-3">
            <?php
            $sum = 0;
            foreach ($_SESSION['cart'] as $item) {
              $total =  $item['price'] * $item['number'];
              $sum += $total;
            ?>

              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div class="flex-shrink-0 mt-2">
                  <img src="../../admin/modules/quanlysp//uploads/<?php
                                                                  echo $item['image'];
                                                                  ?>" alt="" class="product-img">
                  <span class="position-absolute top-40 start-15 translate-middle badge rounded-pill bg-primary"><?php
                                                                                                                  echo $item['number'];
                                                                                                                  ?></span>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h6 class="my-0"> <?php
                                    echo $item['name'];
                                    ?></h6>
                  <small class="text-muted">Đen / Nhỏ</small>
                </div>
                <span class="text-muted"> <?php
                                          echo number_format($total, 0, ', ', '.') . '.000 VNĐ';
                                          ?></span>
              </li>
            <?php } ?>

          </ul>

          <hr class="my-4">

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
              <button type="submit" class="btn btn-secondary">Áp dụng</button>
            </div>
          </form>

          <hr class="my-4">

          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Mã giảm giá</h6>
                <small></small>
              </div>
              <span class="text-success">0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tạm tính</span>
              <strong><?php echo number_format($sum, 0, ', ', '.') . '.000 VNĐ'; ?></strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Phí vận chuyển</span>
              <strong>40.000 VNĐ</strong>
            </li>
            <hr class="my-4">

            <li class="list-group-item d-flex justify-content-between">
              <span>Tổng cộng</span>
              <strong><?php echo number_format($sum + 40, 0, ', ', '.') . '.000 VNĐ' ?></strong>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="previous-link">
              <i class="fa-solid fa-chevron-left"></i>
              <span class="previous-link__content">Quay về giỏ hàng</span>
            </a>
            <button class="w-50 btn btn-primary btn-md" type="submit">ĐẶT HÀNG</button>
          </div>

        </div>

        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3 title-1-1">THÔNG TIN GIAO HÀNG</h4>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Họ và tên</label>
              <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Số điện thoại</label>
              <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(tuỳ chọn)</span></label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Địa chỉ</label>
              <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address'] ?>" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <!-- <div class="col-md-4">
              <label for="country" class="form-label">Tỉnh/ Thành phố</label>
              <select class="form-select" id="city" required="">
                <option value="" selected>Tỉnh/ Thành phố </option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Quận/ Huyện</label>
              <select class="form-select" id="district" required="">
                <option value="" selected>Quận/ Huyện</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Phường/ Xã</label>
              <select class="form-select" id="ward" required="">
                <option value="" selected>Phường/ Xã</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div> -->
          </div>

          <hr class="my-4">

          <h4 class="mb-3 title-1-1">PHƯƠNG THỨC GIAO HÀNG</h4>
          <div class="row">
            <div class="form-check col-sm-10">
              <input type="checkbox" class="form-check-input" id="cb" checked>
              <label class="form-check-label" for="cb">Tốc độ tiêu chuẩn (từ 2 - 5 ngày làm việc)</label>
              <div class="icon">
                <div class="toolt">Tuỳ vào địa chỉ giao hàng mà tốc độ giao hàng tiêu chuẩn sẽ khác nhau. Chúng tôi luôn cố gắng để đơn hàng đến tay bạn sớm nhất.</div>
                <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
              </div>
            </div>

            <div class="col-sm-2 title-right">
              <span>40.000 VNĐ</span>
            </div>
          </div>


          <hr class="my-4">

          <h4 class="mb-3 title-1-1">PHƯƠNG THỨC THANH TOÁN</h4>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="type" value="get" id="cb" checked>
            <label class="form-check-label" for="cb">Thanh toán trực tiếp khi giao hàng</label>
          </div>


          <div class="form-check">
            <input type="radio" class="form-check-input" name="type" value="momo" id="cb">
            <label class="form-check-label" for="cb">Thanh toán bằng ví MoMo</label>
          </div>

        </div>
      </div>
    </form>
  </div>
  <!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="../../controllers/MomoQRController.php">
    <button type="submit" name="momo" class="btn btn-primary">Primary</button>
  </form>
  <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="../../controllers/MomoAtmController.php">
    <button type="submit" name="momo" class="btn btn-primary">Primary</button>
  </form> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="../../assets/js/payment.js"></script>
</body>

</html>