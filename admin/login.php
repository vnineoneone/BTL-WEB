<?php
session_start();
include("config/config.php");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1 ";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['login'] = $email;
        header("Location:index.php");
    } else {
        echo '<script>alert("Tai khoan mat khau khong dung, vui long nhap lai")</script>';
        header("Location:login.php");
    }
}
?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng nhập tài khoản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap v5.2.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--CSS File-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <h1 class="text-center">ĐĂNG NHẬP</h1>
        <form action="" autocomplete="off" method="POST">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" placeholder="Nhập email" name="email">
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Mật khẩu</label>
                <input class="form-control" type="password" id="password" placeholder="Nhập mật khẩu" name="password">
            </div>

            <div class="form-submit">
                <input type="submit" value="Đăng nhập" name="login">
            </div>

            <div class="signup-link">
                Bạn chưa có tài khoản? Vui lòng đăng ký <a href="#">tại đây</a>
            </div>
            <div class="login-form-footer">
                <a href="#">
                    <img width="15" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="">
                    Facebook
                </a>
                <a href="#">
                    <img width="15" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="">
                    Google
                </a>
            </div>
        </form>
    </div>
</body>

</html>