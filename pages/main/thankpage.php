<!doctype html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đặt hàng hoàn tất</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/payment.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body class="bg-light">
  <div class="container">
    <div class="py-2 text-left">
      <h3><a href="#">Sea Furniture</a></h3>
    </div>
  </div>

  <div class="container">
    <div class="row g-5 mt-0">
      <div class="col-md-7 col-lg-8 mt-0">
        <div class="row g-3">
          <div class="col-sm-3 col-lg-2 d-flex justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                  <g fill="none" stroke="#8EC343" stroke-width="2">
                      <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                      <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                  </g>
              </svg>
          </div>
          <div class="col-sm-9 col-lg-10">
            <p class=" text-center">
              <strong>Cảm ơn bạn đã đặt hàng</strong><br>
              <span>Một email xác nhận đã được gửi tới phuc@gmail.com. <br>
                Xin vui lòng kiểm tra email của bạn</span>
            </p>
          </div>
        </div>  
      </div>
      <div class="col-md-5 col-lg-4 order-md-last mt-0">
        <h4 class="d-flex justify-content-between align-items-center mb-3 title-1-1">
          <span class="">Đơn hàng #0000 (1)</span>
        </h4>

        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-lg">
                <div class="flex-shrink-0 mt-1">
                    <img src="https://bizweb.dktcdn.net/thumb/thumb/100/364/402/products/2-acaf4822a6e84c0bad48378c37346e92-master.jpg?v=1566961267300" alt="" class="product-img">
                    <span class="position-absolute top-40 start-15 translate-middle badge rounded-pill bg-primary">1</span>
                </div>
                
                <div class="flex-grow-1 ms-3">
                    <h6 class="my-0"> 

                    </h6>
                    <small class="text-muted">Đen / Nhỏ</small>
                </div>
                <span class="text-muted">500.000 VNĐ</span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>Tạm tính</span>
                <strong>500.000 VNĐ</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>Phí vận chuyển</span>
                <strong>40.000 VNĐ</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>Tổng cộng</span>
                <strong>540.000 VNĐ</strong>
            </li>
        </ul>
        <div class="d-flex align-items-center justify-content-between">
          <button class="w-50 btn btn-primary btn-md" type="submit">Tiếp tục mua hàng</button>
          <a href="#" class="previous-link">
            <i class="fa-solid fa-print"></i>
            <span class="previous-link__content">In</span>
          </a>
        </div>

      </div>

        <div class="col-md-7 col-lg-8 mt-0">
          <hr class="my-4">

          
          <div class="row row-cols-2">
            <div class="col mb-2">
                <h5 class="mb-2 title-1-1">Thông tin giao hàng</h5>
                <p>Phục Lê</p>
                <p>phuc@gmail.com</p>
                <p>+84111111111</p>
            </div>
            <div class="col mb-2">
                <h5 class="mb-2 title-1-1">Địa chỉ nhận hàng</h5>
                <p>Phục Lê</p>
                <p>268 Lý Thường Kiệt</p>
                <p>Phường 14, Quận 10, TP.HCM</p>
                <p>+84111111111</p>
            </div>
            <div class="col mb-2">
                <h5 class="mb-2 title-1-1">Phương thức thanh toán</h5>
                <p">Thanh toán khi giao hàng (COD)</p>
            </div>
            <div class="col mb-2">
                <h5 class="mb-2 title-1-1">Phương thức vận chuyển</h5>
                <p>Giao hàng tận nơi</p>
            </div>
          </div>
          <hr class="my-4">
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="../../assets/js/payment.js"></script>
</body>

</html>