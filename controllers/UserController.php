<?php
echo "<script>
let options = {};
options.position = 'bottom-right';
options.durations = {
    success: 1200,
    alert: 2000,
}
let notifier = new AWN(options);
</script>";

if (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO user(email, password, name, phone, status) 
    VALUE('" . $email . "', '" . $password . "', '" . $name . "', '" . $phone . "', 1)");
    if ($sql_dangky) {
        $_SESSION['dangky'] = $name;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header("Location: index.php?quanly=dangnhap");
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "' LIMIT 1 ";
    $query = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['login'] = $email;
        $_SESSION['id_khachhang'] = $row['id'];
        header("Location: index.php");
    } else {
        echo "<script>notifier.alert('Thông tin đăng nhập bị sai, vui lòng nhập lại', options)</script>";
    }
}

if (isset($_GET['logout']) == 1) {
    unset($_SESSION['login']);
    header('Location: index.php?quanly=dangnhap');
}
