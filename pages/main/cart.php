<?php
// session_start();
if (isset($_SESSION['cart'])) {

    echo '<pre>';
    print_r($_SESSION['cart']);
    echo '/<pre>';
} else {
    echo "<p>Khong co don hang nao de hien thi</p>";
}
?>

<a href="pages/main/payment.php">payment</a>