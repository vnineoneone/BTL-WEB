<h1>Giỏ hàng</h1>
<?php
session_start();
include "../../admin/config/config.php";
//them so luong

//tru so luong

//xoa san pham

//them san pham vao gio hang

if (isset($_POST['themgiohang'])) {
    // session_destroy();
    $id = $_GET['id'];
    $soluong = 1;
    $sql = "SELECT * FROM product WHERE id_product = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'name' => $row['name_product'],
            'id' => $id, 'number' => $soluong, 'price' => $row['price'], 'image' => $row['image']
        ));
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                // print_r($cart_item);
                if ($cart_item['id'] == $id) {
                    $product[] = array(
                        'name' => $cart_item['name'],
                        'id' => $cart_item['id'], 'number' => $cart_item['number'] + 1, 'price' => $cart_item['price'], 'image' => $cart_item['image']
                    );
                    $found = "true";
                } else {
                    $product[] = array(
                        'name' => $cart_item['name'],
                        'id' => $cart_item['id'], 'number' => $cart_item['number'], 'price' => $cart_item['price'], 'image' => $cart_item['image']
                    );
                }
            }

            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    echo '<pre>';
    print_r($_SESSION['cart']);
    echo '/<pre>';
}
?>